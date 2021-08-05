<?php

namespace Modules\Customers\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Customers\Entities\Customers;
use Modules\CustomerGroup\Entities\CustomerGroup;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use Modules\Roles\Entities\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Gate;
class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    private $limit          = 10;
    private $cr_user        = null;
    private $cr_module      = 'customers';
    private $cr_model       = null;
    private $msg_no_access  = 'Không có quyền truy cập';
    private $messages = [
        'name.required' => 'Trường tên khách hàng là bắt buộc.',
        'phone.required' => 'Trường số điện thoại là bắt buộc',
        'phone.unique'  => 'Số điện thoại đã có',
        'email.required' => 'Trường email là bắt buộc',
        'email.unique' => 'Email đã đăng ký',
        'address.required' => 'Trường địa chỉ là là bắt buộc'
    ];
    public function __construct(){
        $this->cr_model     = Customers::class;

        $this->cr_user = Auth::user();
    }
    public function userCan($action, $option = NULL)
    {
      return Gate::forUser($this->cr_user)->allows($action, $action);
    }
    private function _show_no_access(){
        abort('403', $this->msg_no_access);
    }
    public function index(Request $request)
    {
        if( !$this->userCan($this->cr_module.'_index') ) $this->_show_no_access();
        
        $query = $this->cr_model::where('id','!=','');
        if( $request->search ){
            $query->where('name','LIKE','%'.$request->search.'%');
            $query->orWhere('phone','LIKE','%'.$request->search.'%');
        }
        if( isset($request->filter) && count( $request->filter ) ){
            foreach( $request->filter as $field => $value ){
                if( $value ){
                    $query->where($field, 'LIKE','%'.$value.'%');
                }
            }
        }
        if( $request->sort_by ){
            switch ($request->sort_by) {
                case 'id_desc':
                    $query->orderBy('id','DESC');
                    break;
                case 'id_asc':
                    $query->orderBy('id','ASC');
                    break;
                default:
                    # code...
                    break;
            }
        }
        
        //SELECT SUM(owed) FROM orders WHERE customer_id = 2
        $customers = $query->paginate($this->limit);

        foreach ($customers as $customer){
            $total_owed = DB::table('orders')->select('owed')->where('customer_id','=',$customer->id)->SUM('owed');
            $total_sale = DB::table('orders')->select('cart_subtotal')->where('customer_id','=',$customer->id)->SUM('cart_subtotal');
            $order_last = DB::table('orders')->select('cost_total')->where('customer_id','=',$customer->id)->orderBy('id','desc')->first();
            
            $customer->total_owed = $total_owed;
            $customer->total_sale = $total_sale;
            $customer->order_last = $order_last->cost_total;
        }

        //dd($customers->toArray());

       // $total_owed = DB::table('')
        $customergroups = CustomerGroup::all();
        return view($this->cr_module.'::index',[
            'customergroups'   => $customergroups,
            'customers'   => $customers
        ]);
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */

    public function create()
    {
        if( !$this->userCan($this->cr_module.'_create') ) $this->_show_no_access();
        $customergroups = CustomerGroup::all();
        
        return view($this->cr_module.'::create', compact('customergroups') );
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */

    public function store(Request $request)
    {
        if( !$this->userCan($this->cr_module.'_store') ) $this->_show_no_access();

        $request->validate([    
            'name'          => 'required',
            'phone'         => 'required|unique:customers,phone',
            'email'         => 'required|unique:customers,email',
            'address'       => 'required',
            'birthday'      => 'required'
        ],$this->messages);
        $customer = new Customers();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->birthday = $request->birthday;
        $customer->poin = $request->poin;
        $customer->owed = $request->owed;
        $customer->total_sale = $request->total_sale;
        if(isset($_POST['gender']) && $_POST['gender'] == '1'){
            $customer->gender = 'Nam';
        }else{
            $customer->gender = 'Nữ';
        };
        $customer->customer_group_id = $request->customer_group_id;
        if(isset($_POST['is_important']) && $_POST['is_important'] == '1'){
            $customer->is_important = 1;
        }else{
            $customer->is_important = 0;
        };
        if(isset($_POST['status']) && $_POST['status'] == '1'){
            $customer->status = 1;
        }else{
            $customer->status = 0;
        };
        $customer->save();
        return redirect()->route($this->cr_module.'.index')->with('success','Lưu thành công !');

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */

    public function show($id)
    {
        if( !$this->userCan($this->cr_module.'_show') ) $this->_show_no_access();

        $customer = $this->cr_model::find($id);
        $customergroups = CustomerGroup::all();
        $customer_orders = DB::table('orders')
        ->join('warehouse','orders.warehouse_id','=','warehouse.id')
        ->join('users','orders.staff_id','=','users.id')
        ->select('orders.id','orders.created_at','warehouse.name','orders.cost_total','users.name as user_name')
       ->where('customer_id','=',$id)
        ->get();
        $customer_oweds = DB::table('orders')
        ->select('orders.id','orders.created_at','orders.cost_total','orders.owed','orders.paid')
       ->where('customer_id','=',$id)->where('owed','>',0)
        ->get();
        return view($this->cr_module.'::show',[
            'customer' => $customer,
            'customergroups' => $customergroups,
            'customer_orders' => $customer_orders,
            'customer_oweds' => $customer_oweds
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */

    public function edit($id)
    {
        if( !$this->userCan($this->cr_module.'_edit') ) $this->_show_no_access();

        $customer = $this->cr_model::find($id);
        $customergroups = CustomerGroup::all();
        return view($this->cr_module.'::edit',[
            'customer' => $customer,
            'customergroups' => $customergroups
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */

    public function update(Request $request, $id)
    {
        if( !$this->userCan($this->cr_module.'_update') ) $this->_show_no_access();


        $request->validate([    
            'name'          => 'required',
            'phone'         => 'required',
            'email'         => 'required',
            'address'       => 'required',
            'birthday'      => 'required'
        ],$this->messages);
        $customer = Customers::find($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->birthday = $request->birthday;
        $customer->poin = $request->poin;
        $customer->owed = $request->owed;
        $customer->total_sale = $request->total_sale;
        if(isset($_POST['gender']) && $_POST['gender'] == '1'){
            $customer->gender = 'Nam';
        }else{
            $customer->gender = 'Nữ';
        };
        $customer->customer_group_id = $request->customer_group_id;
        if(isset($_POST['is_important']) && $_POST['is_important'] == '1'){
            $customer->is_important = 1;
        }else{
            $customer->is_important = 0;
        };
        if(isset($_POST['status']) && $_POST['status'] == '1'){
            $customer->status = 1;
        }else{
            $customer->status = 0;
        };

        $customer->save();

        return redirect()->route($this->cr_module.'.index')->with('success','Cập nhật thành công !');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */

    public function destroy($id)
    {
        if( !$this->userCan($this->cr_module.'_destroy') ) $this->_show_no_access();
        $objCustomer = Customers::find($id);
        $objCustomer->delete();
        return redirect()->route($this->cr_module.'.index')->with('success','Xóa thành công !');
    }

}