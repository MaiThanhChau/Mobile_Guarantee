<?php

namespace Modules\ProductType\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ProductType\Entities\ProductType;
use Illuminate\Support\Facades\Session;


class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $producttypes = ProductType::all();
        return view('producttype::list', compact('producttypes'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('producttype::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $producttype = new ProductType();
        $producttype->name = $request->input('name');
        $producttype->save();
        // Session::flash('success', 'Add Successfully');
        return redirect()->route('producttype.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('producttype::edit');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $producttype = ProductType::find($id);
        return view('producttype::edit', compact('producttype'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $producttype = ProductType::findOrFail($id);
        $producttype->name = $request->input('name');
        $producttype->save();
        return redirect()->route('producttype.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $producttype = ProductType::findOrFail($id);
        $producttype->delete();
        return redirect()->route('producttype.index');
    }
}
