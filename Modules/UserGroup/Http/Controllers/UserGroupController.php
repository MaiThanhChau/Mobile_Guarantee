<?php

namespace Modules\UserGroup\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\UserGroup\Models\UserModel;

class UserGroupController extends Controller
{
 
    public function index()
    {
        $user_groups = UserModel::all();
        return view('usergroup::list', compact('user_groups'));
    }
 
    public function create()
    {
        return view('usergroup::create');
    }

    public function show($id){
        
    }
    
    public function store(Request $request)
    {
        $user_group = new UserModel();
        $user_group->name = $request->name;
        $user_group->save();
        return redirect()->route('usergroup.index');
    }

    public function edit($id)
    {
        $user_group = UserModel::findOrFail($id);
        return view('usergroup::edit', compact('user_group'));
    }

    public function update(Request $request, $id)
    {
       $usergroup = UserModel::findOrFail($id);
       $usergroup->name = $request->input('name');
       $usergroup->save();
       return redirect()->route('usergroup.index');
    }

    public function destroy($id)
    {
        $usergroup = UserModel::findOrFail($id);
        $usergroup->delete();
        return redirect()->route('usergroup.index');
    }
}
