<?php

namespace Modules\CustomerGroup\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\CustomerGroup\Entities\CustomerGroup;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use Modules\Roles\Entities\User;
use Illuminate\Support\Facades\Auth;
use Gate;
class CustomerGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    private $limit          = 10;
    private $cr_user        = null;
    private $cr_module      = 'customergroup';
    private $cr_model       = null;
    private $msg_no_access  = 'Không có quyền truy cập';
    private $messages = [
        'name.required' => 'Trường nhóm khách hàng là bắt buộc.',
        'name.unique' => 'Nhóm khách hàng đã có'
    ];
    public function __construct(){
        $this->cr_model     = CustomerGroup::class;
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
        if( !$this->userCan('customer_group_index') ) $this->_show_no_access();
        $query = $this->cr_model::where('id','!=','');
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
        $customergroups = $query->paginate($this->limit);

        return view($this->cr_module.'::index',[
          
            'customergroups'   => $customergroups
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */

    public function create()
    {
        if( !$this->userCan('customer_group_create') ) $this->_show_no_access();

        return view($this->cr_module.'::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */

    public function store(Request $request)
    {
        if( !$this->userCan('customer_group_store') ) $this->_show_no_access();

        $request->validate([    
            'name'          => 'required|unique:customer_group,name',
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
        if( !$this->userCan('customer_group_show') ) $this->_show_no_access();

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
        if( !$this->userCan('customer_group_edit') ) $this->_show_no_access();

        $customergroup = $this->cr_model::find($id);
        
        return view($this->cr_module.'::edit',[
            'customergroup' => $customergroup
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */

    public function update(Request $request, CustomerGroup $customergroup)
    {
        if( !$this->userCan('customer_group_update') ) $this->_show_no_access();

        $request->validate([
            'name'          => 'required'
        ],$this->messages);

        $customergroup->update($request->all());

        return redirect()->route($this->cr_module.'.index')->with('success','Cập Nhật Thành Công !');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */

    public function destroy(CustomerGroup $customergroup)
    {
        if( !$this->userCan('customer_group_destroy') ) $this->_show_no_access();

        $customergroup->delete();
        return redirect()->route($this->cr_module.'.index')->with('success','Xóa thành công !');
    }
    
}
