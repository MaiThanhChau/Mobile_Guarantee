<?php

namespace Modules\Warehouse\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Warehouse\Entities\Warehouse;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use Modules\Roles\Entities\User;
use Illuminate\Support\Facades\Auth;
use Gate;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    private $limit          = 10;
    private $cr_user        = null;
    private $cr_module      = 'warehouse';
    private $cr_model       = null;
    private $msg_no_access  = 'Không có quyền truy cập';
    private $messages = [
        'name.required' => 'Trường tên kho hàng là bắt buộc.',
        'phone.required' => 'Trường số điện thoại là bắt buộc',
        'phone.unique'  => 'Số điện thoại đã có',
        'email.required' => 'Trường email là bắt buộc',
        'email.unique' => 'Email đã đăng ký',
        'address.required' => 'Trường địa chỉ là là bắt buộc',
        'code.required' => 'Trường mã kho hàng là bắt buộc',
        'code.unique'  => 'Mã đã được sử dụng'
    ];
    public function __construct(){
        $this->cr_model     = Warehouse::class;

        $this->cr_user = Auth::user();
    }
    public function userCan($action, $option = NULL)
    {
      if( !$this->cr_user ){
            $sessions = session()->all();
            $cr_user_id = 0;
            foreach($sessions as $key => $session_val){
                if( strpos($key,'login_web') === 0 ){
                    $cr_user_id = $session_val;
                } 
            }
            $user = User::find($cr_user_id);
            Auth::login($user);
            $this->cr_user = Auth::user();
        }
      return Gate::forUser($this->cr_user)->allows($action, $action);
    }
    private function _show_no_access(){
        abort('403', $this->msg_no_access);
    }
    public function index(Request $request)
    {
        if( !$this->userCan('warehouses_index') ) $this->_show_no_access();
        $query = $this->cr_model::where('id','!=','')->orderBy('id','desc');
        //handle search and sort
        if( $request->search ){
            $query->where('name','LIKE','%'.$request->search.'%');
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
        $warehouses = $query->paginate($this->limit);

        return view($this->cr_module.'::index',[
          
            'warehouses'   => $warehouses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */

    public function create()
    {
        if( !$this->userCan('warehouses_create') ) $this->_show_no_access();

        return view($this->cr_module.'::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */

    public function store(Request $request)
    {
        if( !$this->userCan('warehouse_store') ) $this->_show_no_access();
        $warehouse = new Warehouse;

        $request->validate([    
            'name'          => 'required',
            'phone'          => 'required|unique:warehouse,phone',
            'email'          => 'required|unique:warehouse,email',
            'address'          => 'required',
            'code'          => 'required|unique:warehouse,code'
        ],$this->messages);
        if(isset($_POST['status']) && $_POST['status'] == '1'){
            $warehouse->status = 1;
        }else{
            $warehouse->status = 2;
        };
        if(isset($_POST['import']) && $_POST['import'] == '1'){
            $warehouse->import = 1;
        }else{
            $warehouse->import = 2;
        };
        if(isset($_POST['export']) && $_POST['export'] == '1'){
            $warehouse->export = 1;
        }else{
            $warehouse->export = 2;
        };
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
        if( !$this->userCan('warehouses_show') ) $this->_show_no_access();

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
        if( !$this->userCan('warehouses_edit') ) $this->_show_no_access();

        $warehouse = $this->cr_model::find($id);
      
        return view($this->cr_module.'::edit',[
            'warehouse' => $warehouse
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */

    public function update(Request $request, Warehouse $warehouse)
    {
        if( !$this->userCan('warehouses_update') ) $this->_show_no_access();

        
        $request->validate([
            'name'          => 'required',
            'phone'          => 'required',
            'email'          => 'required',
            'address'          => 'required',
            'code'          => 'required'
        ],$this->messages);
        // if(isset($_POST['status']) && $_POST['status'] == '1'){
        //     $warehouse->status = 1;
        // }else{
        //     $warehouse->status = 0;
        // };
        // if(isset($_POST['import']) && $_POST['import'] == '1'){
        //     $warehouse->import = 1;
        // }else{
        //     $warehouse->import = 0;
        // };
        // if(isset($_POST['export']) && $_POST['export'] == '1'){
        //     $warehouse->export = 1;
        // }else{
        //     $warehouse->export = 0;
        // };
        $warehouse->update($request->all());
        
        return redirect()->route($this->cr_module.'.index')->with('success','Cập nhật thành công !');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */

    public function destroy(Warehouse $warehouse)
    {
        if( !$this->userCan('warehouses_destroy') ) $this->_show_no_access();

        $warehouse->delete();
        return redirect()->route($this->cr_module.'.index')->with('success','Xóa thành công !');
    }
}
