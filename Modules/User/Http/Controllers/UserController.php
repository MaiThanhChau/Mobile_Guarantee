<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Entities\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;
use Modules\UserGroup\Entities\UserGroup;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        $users = User::paginate(5);
		
        return view('user::index', compact('users'));
    }

    public function create()
    {
        $user_groups = UserGroup::all();
        return view('user::add', compact('user_groups'));
    }

    public function store(Request $request)
    {
        
        $user = new User();
        $user->name  = $request->name;
        $user->email  = $request->email;    
        $user->phone  = $request->phone;
        $user->address   = $request->address;  
        $user->user_group_id = $request->group_id;  
        $user->password   = Hash::make($request->password);
        $user->save();
        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        return view('user::edit');
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
