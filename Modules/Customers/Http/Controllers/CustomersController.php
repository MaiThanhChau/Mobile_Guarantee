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
        'required' => 'Trường <strong>:attribute</strong> là bắt buộc.',
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
        
        $customers = $query->paginate($this->limit);
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
            'phone'         => 'required',
            'email'         => 'required|email|unique:customers,email',
            'address'       => 'required'
        ],$this->messages);
        $customer = new Customers();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        if(isset($_POST['gioi_tinh']) && $_POST['gioi_tinh'] == 1){
            $customer->gioi_tinh = 'Nam';
        }else{
            $customer->gioi_tinh = 'Nữ';
        };
        $customer->customer_group_id = $request->customer_group_id;
        if(isset($_POST['important']) && $_POST['important'] == '1'){
            $customer->important = 1;
        }else{
            $customer->important = 0;
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

        $item = $this->cr_model::find($id);

        return view($this->cr_module.'::show',[
            'item' => $item
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
            'phone'         => 'required|',
            'email'         => "required|email|unique:customers,email,$id",
            'address'       => 'required'
        ],$this->messages);
        
        $customer = Customers::find($id);
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->address = $request->input('address');
        if(isset($_POST['gioi_tinh']) && $_POST['gioi_tinh'] == 1){
            $customer->gioi_tinh = 'Nam';
        }else{
            $customer->gioi_tinh = 'Nữ';
        };
        $customer->customer_group_id = $request->input('customer_group_id');
        if(isset($_POST['important']) && $_POST['important'] == '1'){
            $customer->important = 1;
        }else{
            $customer->important = 0;
        };
        if(isset($_POST['status']) && $_POST['status'] == '1'){
            $customer->status = 1;
        }else{
            $customer->status = 0;
        };
        $customer->save();

        //$customers->update($request->all());

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
