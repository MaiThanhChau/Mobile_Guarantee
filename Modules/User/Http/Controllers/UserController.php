<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Entities\User;
//use Modules\Roles\Entities\User;
use Illuminate\Pagination\Paginator;
use Modules\UserGroup\Entities\UserGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Gate;
use Exception;

class UserController extends Controller
{
    private $limit          = 5;
    private $cr_user        = null;
    private $cr_module      = 'user';
    private $cr_model       = null;
    private $msg_no_access  = 'Không có quyền truy cập';
    private $messages = [
        'name.required' => 'Tên không được để trống',
        'name.min'      => 'Nhập đầy đủ họ và tên',
        'email.required' => 'Email không được để trống',
        'email.unique'  => 'Email đã đăng ký',
        'phone.required' => 'Số điện thoại không được để trống',
        'phone.min'     => 'Số điện thoại phải dài hơn 9 ký tự',
        'address.required' => 'Địa chỉ không được để trống',
        'address.min'    => 'Nhập địa chỉ đầy đủ',
        'password.required' => 'Mật khẩu không được để trống',
        'password.min'   => 'Mật khẩu quá ngắn, tối thiểu 6 ký tự',
        're_password.required' => 'Phải nhập lại mật khẩu',
        're_password.same' => 'Mật khẩu nhập lại không đúng'
    ];
    public function __construct(){
        $this->cr_model     = User::class;
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
        
        if( !$this->userCan('users_index') ) $this->_show_no_access();

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
        if( !$this->userCan('users_create') ) $this->_show_no_access();
        $user_groups = UserGroup::all();
        return view($this->cr_module.'::create',compact('user_groups'));
    }

    public function store(Request $request)
    {
        if( !$this->userCan('users_store') ) $this->_show_no_access();

        $request->validate([
            'name'          => 'required|min:3',
            'email'      => 'required|unique:users,email',
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
        if( !$this->userCan('users_edit') ) $this->_show_no_access();
        $user = $this->cr_model::find($id);
        $user_groups = UserGroup::all();
        
        return view($this->cr_module.'::edit',[
            'user_groups' => $user_groups,
            'user' => $user
        ]);
    }

 
    public function update(Request $request, $id)
    {
        if( !$this->userCan('users_store') ) $this->_show_no_access();

        $request->validate([
            'name'          => 'required|min:5',
            'email'      => 'required',
            'phone'     => 'required|min:9',
            'address'   => 'required|min:10',
            'password' => 'required|min:6',
           're_password' => 'required|same:password'
        ],$this->messages);
        $user = $this->cr_model::find($id);
        $user->name  = $request->input('name');
        $user->email  = $request->input('email');    
        $user->phone  = $request->input('phone');
        $user->address   = $request->input('address');  
        $user->user_group_id = $request->input('group_id');  
        $user->password   = Hash::make($request->input('password'));
        $user->save();
        return redirect()->route($this->cr_module.'.index')->with('success','Lưu thành công !');
    }


    public function destroy(User $user)
    {
        if( !$this->userCan('users_destroy') ) $this->_show_no_access();

        $user->delete();
        return redirect()->route($this->cr_module.'.index')->with('success','Xóa thành công !');
    }
    public function login(){
     
        return view('user::login');
    }
    public function post_login(Request $request){
        //  $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);

        $credentials = $request->only('email', 'password');
       // dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }else{ 
            $message = 'Email và mật khẩu không hợp lệ!';
            $request->session()->flash('fail-login', $message);
            return redirect()->route('login')->with('success',$message);
        }      
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
