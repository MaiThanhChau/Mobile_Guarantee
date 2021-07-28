<?php

namespace Modules\Roles\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Roles\Entities\Role;
use Modules\Roles\Entities\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Gate;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    private $limit          = 15;
    private $cr_user        = null;
    private $cr_module      = 'roles';
    private $cr_model       = null;
    private $msg_no_access  = 'Không có quyền truy cập';
    private $messages = [
        'required' => 'Trường <strong>:attribute</strong> là bắt buộc.',
    ];

    public function __construct(){
        $this->cr_model     = Role::class;
        $this->cr_user = Auth::user();
    }

    public function userCan($action, $option = NULL)
    {
      return Gate::forUser($this->cr_user)->allows($action, $action);
    }

    public function index(Request $request)
    {
        
        if( !$this->userCan($this->cr_module.'_index') ) $this->_show_no_access();

        $query = $this->cr_model::where('id','!=','');

        //handle search and sort
        if( $request->search ){
            $query->where('title','LIKE','%'.$request->search.'%');
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

        $items = $query->paginate($this->limit);
        $role_groups = $this->cr_model::groupBy('group_title', 'group')->pluck('group_title', 'group');

        return view($this->cr_module.'::index',[
            'items'         => $items,
            'role_groups'   => $role_groups,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        if( !$this->userCan($this->cr_module.'_create') ) $this->_show_no_access();

        return view($this->cr_module.'::create');
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
            'title'         => 'required',
            'name'          => 'required',
            'group'         => 'required',
            'group_title'   => 'required',
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

        $item = $this->cr_model::find($id);
        
        return view($this->cr_module.'::edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, Role $role)
    {
        if( !$this->userCan($this->cr_module.'_update') ) $this->_show_no_access();


        $request->validate([
            'title'         => 'required',
            'name'          => 'required',
            'group'         => 'required',
            'group_title'   => 'required',
        ],$this->messages);

        $role->update($request->all());

        return redirect()->route($this->cr_module.'.index')->with('success','Cập nhật thành công !');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Role $role)
    {
        if( !$this->userCan($this->cr_module.'_destroy') ) $this->_show_no_access();

        $role->delete();
        return redirect()->route($this->cr_module.'.index')->with('success','Xóa thành công !');
    }

    private function _show_no_access(){
        abort('403', $this->msg_no_access);
    }
}
