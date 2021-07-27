<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Entities\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;
use Modules\UserGroup\Entities\UserGroup;

class UserController extends Controller
{
    public function index()
    {

        $users = User::paginate(5);
		
        return view('user::index', compact('users'));
    }

    public function create()
    {
        return view('user::add');
    }

    public function store(Request $request)
    {
        //
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
