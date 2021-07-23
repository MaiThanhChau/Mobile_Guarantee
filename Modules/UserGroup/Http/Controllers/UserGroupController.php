<?php

namespace Modules\UserGroup\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\UserGroup\Entities\UserGroup;

class UserGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $usergroups = UserGroup::all();
        return view('usergroup::list', compact('usergroups'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {

        return view('usergroup::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $usergroup = new UserGroup();
        $usergroup->name = $request->input('name');
        $usergroup->save();
        return redirect()->route('usergroup.index');

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('usergroup::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $usergroup = UserGroup::find($id);
        return view('usergroup::edit', compact('usergroup'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $usergroup = UserGroup::findOrFail($id);
        $usergroup->name = $request->input('name');
        $usergroup->save();
        return redirect()->route('usergroup.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $usergroup = UserGroup::findOrFail($id);
        $usergroup->delete();
        return redirect()->route('usergroup.index');

    }
}
