<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;
use Modules\ProductType\Entities\ProductType;
use Modules\ProductSupplier\Entities\ProductSupplier;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
//use Modules\Roles\Entities\User;
//use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    private $messages = [
        'name.required' => 'Trường tên sản phẩm là bắt buộc',
        'sku.required'  => 'Trường mã sản phẩm là bắt buộc'
    ];
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(10);
        return view('product::index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $group_products = ProductType::all();
        $supplier_products = ProductSupplier::all();
        return view('product::create',[
            'group_products' => $group_products,
            'supplier_products' =>$supplier_products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'sku'           => 'required'
        ],$this->messages);

        $product = new Product();
        $product->name = $request->name;
        $product->sku  = $request->sku;
        $product->group_product_id = $request->group_id;
        $product->supplier_product_id = $request->supplier_id;
        if(isset($_POST['status']) && $_POST['status']=="1"){
            $product->status = 1;
        }else{
            $product->status = 0;
        }
        $product->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $path = $file->store('image','public');
            $product->image = $path;
        }
        $product->buy_price  = $request->buy_price;
        $product->sell_price  = $request->sell_price;
        $product->guarantee_time = $request->guarantee_time;
        $product->save();
        return redirect()->route('product.index')->with('success','Lưu thành công !');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $product = Product::find($id);
        $group_products = ProductType::all();
        $supplier_products = ProductSupplier::all();
        return view('product::show', compact('product','group_products','supplier_products'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        
        $product = Product::find($id);
        //dd($product);
        $group_products = ProductType::all();
        $supplier_products = ProductSupplier::all();
        return view('product::edit', compact('product','group_products','supplier_products'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'          => 'required',
            'sku'           => 'required'
        ],$this->messages);
        $product = Product::find($id);
   
        $product->name = $request->input('name');
        $product->sku  = $request->input('sku');
        $product->group_product->name = $request->input('group_id');
        $product->supplier_product->name = $request->input('supplier_id');
        if($product->status == 1 && isset($_POST['status'])){
            $product->status = 1;
        }else{
            $product->status = 0;
        }
        
        $product->description = $request->input('description');
        if ($request->hasFile('image')) {
            //xoa anh cu neu co
            $currentFile = $product->image;
            if ($currentFile) {
                Storage::delete('/public/' . $currentFile);
            }
            // cap nhat anh moi
            $file = $request->image;
            $path = $file->store('image','public');
            $product->image = $path;
        }
        $product->buy_price  = $request->input('buy_price');
        $product->sell_price  = $request->input('sell_price');
        $product->guarantee_time = $request->input('guarantee_time');
        $product->save();
        return redirect()->route('product.index')->with('success','Cập nhật thành công !');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        $currentFile = $product->image;
            if ($currentFile) {
                Storage::delete('/public/' . $currentFile);
            }
        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa thành công');
        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('product.index');
    }
}
