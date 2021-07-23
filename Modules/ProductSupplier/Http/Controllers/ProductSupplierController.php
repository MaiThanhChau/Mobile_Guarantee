<?php

namespace Modules\ProductSupplier\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ProductSupplier\Entities\ProductSupplier;
class ProductSupplierController extends Controller
{

    public function index()
    {
        $ProductSuppliers = ProductSupplier::all();
        return view('productsupplier::index', compact('ProductSuppliers'));
    }

    public function create()
    {
        return view('productsupplier::add');
    }

    public function store(Request $request)
    {
        $producttype = new ProductSupplier();
        $producttype->name = $request->input('name');
        $producttype->save();
        return redirect()->route('productsupplier.index');
    }
  
    public function show($id)
    {
        return view('productsupplier::edit');
    }
 
    public function edit($id)
    {
        $ProductSupplier = ProductSupplier::findOrFail($id);
        return view('productsupplier::edit', compact('ProductSupplier'));
    }
   
    public function update(Request $request, $id)
    {
        $ProductSupplier = ProductSupplier::findOrFail($id);
        $ProductSupplier->name = $request->input('name');
        $ProductSupplier->save();
        return redirect()->route('productsupplier.index');
    }

    public function destroy($id)
    {
        $ProductSupplier = ProductSupplier::findOrFail($id);
        $ProductSupplier->delete();
        return redirect()->route('productsupplier.index');
    }
}
