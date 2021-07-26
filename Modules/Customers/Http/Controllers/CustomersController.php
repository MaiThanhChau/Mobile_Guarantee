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

        $user = User::find(1);
        Auth::login($user);
        $this->cr_user = Auth::user();
    }
    public function userCan($action, $option = NULL)
    {
      return true;
      return Gate::forUser($this->cr_user)->allows($action, $option);
    }

    public function index(Request $request)
    {
        if( !$this->userCan($this->cr_module.'_index') ) $this->_show_no_access();
        $query = $this->cr_model::where('id','!=','');
        if( $request->search ){
            $query->where('name','LIKE','%'.$request->search.'%');
        }
        if( isset($request->filter) && count( $request->filter ) ){
            foreach( $request->filter as $field => $value ){
                if( $value ){
                    $query->where($field,$value);
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
            'email'         => 'required',
            'gioi_tinh'     => 'required',
            'address'       => 'required',
            'customer_group_id' => 'required'
        ],$this->messages);
        $this->cr_model::create($request->all());
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

        $customers = $this->cr_model::find($id);
        $customergroups = CustomerGroup::all();
        return view($this->cr_module.'::edit',[
            'customers' => $customers,
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
            'gioi_tinh'     => 'required',
            'address'       => 'required',
            'customer_group_id' => 'required'
        ],$this->messages);
        
        $objCustomer = Customers::find($id);
        $objCustomer->name = $request->name;
        $objCustomer->phone = $request->phone; ;
        $objCustomer->email = $request->email;
        $objCustomer->gioi_tinh = $request->gioi_tinh;
        $objCustomer->address = $request->address;
        $objCustomer->customer_group_id = $request->customer_group_id;
        $objCustomer->save();

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
