<?php
namespace Modules\UserGroup\Http\Controllers;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Pagination\Paginator;
use Modules\Roles\Entities\User;
use Modules\Roles\Entities\Role;
use Modules\UserGroup\Entities\UserGroup;
use Illuminate\Support\Facades\Auth;
use Modules\UserGroup\Models\UserModel;
use Gate;

class UserGroupController extends Controller
{
    private $limit          = 5;
    private $cr_user        = null;
    private $cr_module      = 'usergroup';
    private $cr_model       = null;
    private $msg_no_access  = 'Không có quyền truy cập';
    public function __construct(){
        $this->cr_model     = UserGroup::class;
        $this->cr_user = Auth::user();
    }
    private function _show_no_access(){
        abort('403', $this->msg_no_access);
    }
    public function userCan($action, $option = NULL)
    {
      return Gate::forUser($this->cr_user)->allows($action, $action);
    }

    private $messages = [
        'name.required' => 'Trường tên nhóm là bắt buộc'
    ];
    public function index(Request $request)
    {
        
        if( !$this->userCan('user_groups_index') ) $this->_show_no_access();

        $query = $this->cr_model::where('id','!=','');

        //handle search and sort
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

        $user_groups = $query->paginate($this->limit);
        
        return view($this->cr_module.'::index',[
            'user_groups'   => $user_groups
        ]);
    }
    public function create()
    {
        if( !$this->userCan('user_groups_create') ) $this->_show_no_access();
        $roles = Role::all()->pluck('title','id');
        //dd($roles);

        return view($this->cr_module.'::create',compact('roles'));
    }

    public function store(Request $request)
    {
        if( !$this->userCan('user_groups_store') ) $this->_show_no_access();

        $request->validate([
            'name'          => 'required'
        ],$this->messages);
        $user_group = new UserGroup();
        $user_group->name = $request->name;
        $user_group->save();
        //$this->cr_model::create($request->all());
        $user_group->roles()->attach( $request->roles);
        return redirect()->route($this->cr_module.'.index')->with('success','Lưu thành công !');

    }
    public function edit($id)
    {
        if( !$this->userCan('user_groups_edit') ) $this->_show_no_access();

        $user_group = $this->cr_model::find($id);
        $roles = Role::all()->pluck('title','id');
        //dd($user_group->user_group_roles);
        return view($this->cr_module.'::edit',[
            'user_group' => $user_group,
            'roles' => $roles
        ]);
    }

    public function update(Request $request, $id)
    {
        if( !$this->userCan('user_groups_update') ) $this->_show_no_access();
        $request->validate([       
            'name'          => 'required'
        ],$this->messages);
        $user_group = UserGroup::find($id);
        $user_group->name = $request->input('name');
        //xóa toàn bộ kết quả của sản phẩm đó ở bảng trung gian
        $user_group->roles()->detach();
        //lưu dữ liệu vào bảng trung gian
        $user_group->roles()->attach( $request->roles );
        return redirect()->route($this->cr_module.'.index')->with('success','Cập nhật thành công !');
    }

    public function destroy(UserGroup $usergroup)
    {
        if( !$this->userCan('user_groups_destroy') ) $this->_show_no_access();

        $usergroup->delete();
        return redirect()->route($this->cr_module.'.index')->with('success','Xóa thành công !');
    }
}