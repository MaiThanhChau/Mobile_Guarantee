<?php

namespace Modules\SaleOff\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\SaleOff\Entities\SaleOff;

class SaleOffController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {   $sale_offs = SaleOff::all();
        return view('saleoff::index',compact('sale_offs'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('saleoff::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $sale_off   = new SaleOff();
        $sale_off->name = $request->name;
        $sale_off->code = $request->code;
        $sale_off->price_type = $request->price_type;
        $sale_off->description = $request->description;
        $sale_off->status = $request->status;
        $sale_off->apply = $request->apply;
        $sale_off->kind_of_discount = $request->kind_of_discount;
        $sale_off->product_id = $request->product_id;
        $sale_off->reduced_value = $request->reduced_value;
        $sale_off->reduction_limit = $request->reduction_limit;
        $sale_off->save();
        return redirect()->route('sale_off.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('saleoff::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('saleoff::edit');
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
    public function destroy($id)
    {
        //
    }
}
