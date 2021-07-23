<?php

namespace Modules\Roles\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Roles\Entities\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    private $limit = 2;
    public function __construct(){

    }

    public function index(Request $request)
    {
        if( count( $request->all() ) ){
            $query = Role::where('name','!=','');

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

            $items = $query->paginate($this->limit);

        }else{
            $items = Role::paginate($this->limit);
        }

        return view('roles::index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('roles::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('roles::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('roles::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success','Xóa thành công !');
    }
}
