<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Entities\Users;
use Modules\Roles\Entities\User;
use Illuminate\Pagination\Paginator;
use Modules\UserGroup\Entities\UserGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $limit          = 5;
    private $cr_user        = null;
    private $cr_module      = 'user';
    private $cr_model       = null;
    private $msg_no_access  = 'Không có quyền truy cập';
    private $messages = [
        'name.required' => 'Trường tên là bắt buộc',
        'name.min'      => 'Tên phải dài hơn 5 ký tự',
        'email.required' => 'Trường email là bắt buộc',
        'phone.required' => 'Trường số điện thoại là bắt buộc',
        'phone.min'     => 'Số điện thoại phải dài hơn 9 ký tự',
        'address.required' => 'Trường địa chỉ là bất buộc',
        'address.min'    => 'Địa chỉ phải dài hơn 10 ký tự',
        'password.required' => 'Trường mật khẩu là bắt buộc',
        'password.min'   => 'Mật khẩu phải dài hơn 6 ký tự',
        're_password.required' => 'Phải nhập lại mật khẩu',
        're_password.same' => 'Mật khẩu nhập lại không đúng'
    ];
    public function __construct(){
        $this->cr_model     = Users::class;
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

        //handle search and sort
        if( $request->search ){
            $query->where('name','LIKE','%'.$request->search.'%');
           // ->orWhere('user_group_id','LIKE','%'.$request->search.'%');
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

        $users = $query->paginate($this->limit);

        return view($this->cr_module.'::index',[
            'users'   => $users
        ]);
    }
    public function create()
    {
        if( !$this->userCan($this->cr_module.'_create') ) $this->_show_no_access();
        $user_groups = UserGroup::all();
        return view($this->cr_module.'::create',compact('user_groups'));
    }

    public function store(Request $request)
    {
        if( !$this->userCan($this->cr_module.'_store') ) $this->_show_no_access();

        $request->validate([
            'name'          => 'required|min:5',
            'email'      => 'required',
            'phone'     => 'required|min:9',
            'address'   => 'required|min:10',
            'password' => 'required|min:6',
           're_password' => 'required|same:password'
        ],$this->messages);
        $user = new User();
        $user->name  = $request->name;
        $user->email  = $request->email;    
        $user->phone  = $request->phone;
        $user->address   = $request->address;  
        $user->user_group_id = $request->group_id;  
        $user->password   = Hash::make($request->password);
        $user->save();
        return redirect()->route($this->cr_module.'.index')->with('success','Lưu thành công !');
    }

    public function edit($id)
    {
        if( !$this->userCan($this->cr_module.'_edit') ) $this->_show_no_access();
        $user = $this->cr_model::find($id);
        $user_groups = UserGroup::all();
        
        return view($this->cr_module.'::edit',[
            'user_groups' => $user_groups,
            'user' => $user
        ]);
    }

 
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
