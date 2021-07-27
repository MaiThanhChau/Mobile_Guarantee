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
use Modules\Roles\Entities\User;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    private $limit          = 10;
    private $cr_user        = null;
    private $cr_module      = 'product';
    private $cr_model       = null;
    private $msg_no_access  = 'Không có quyền truy cập';

    private $messages = [
        'name.required' => 'Trường tên sản phẩm là bắt buộc',
        'sku.required'  => 'Trường mã sản phẩm là bắt buộc',
        'description.required'  => 'Trường mô tả là bắt buộc',
        'buy_price.required'    => 'Trường giá mua là bắt buộc',
        'sell_price.required'   => 'Trường giá bán là bắt buộc'
    ];
    public function __construct(){
        $this->cr_model     = Product::class;
        $user = User::find(1);
        Auth::login($user);
        $this->cr_user = Auth::user();
    }
    public function userCan($action, $option = NULL)
    {
      return true;
      return Gate::forUser($this->cr_user)->allows($action, $option);
    }
    
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        if( !$this->userCan($this->cr_module.'_index') ) $this->_show_no_access();
        $query = $this->cr_model::where('id','!=','');
        //handle search and sort
        if( $request->search ){
            $query->where('name','LIKE','%'.$request->search.'%');
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
        $products = $query->paginate($this->limit);
        return view($this->cr_module.'::index',[
            'products'   => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */

    public function create()
    {
        if( !$this->userCan($this->cr_module.'_create') ) $this->_show_no_access();
        $group_products = ProductType::all();
        $supplier_products = ProductSupplier::all();
        return view($this->cr_module.'::create', compact('group_products','supplier_products'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */

    public function store(Request $request)
    {
        if( !$this->userCan($this->cr_module.'_store') ) $this->_show_no_access();

        $request->validate([    
            'name'          => 'required',
            'sku'           => 'required',
            'description'  => 'required',
            'buy_price'    => 'required',
            'sell_price'   => 'required'
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
        return redirect()->route($this->cr_module.'.index')->with('success','Lưu thành công !');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */

    public function show($id)
    {
        if( !$this->userCan($this->cr_module.'_show') ) $this->_show_no_access();

        $product = $this->cr_model::find($id);
        $group_products = ProductType::all();
        $supplier_products = ProductSupplier::all();
        return view($this->cr_module.'::show',[
            'product'             => $product,
            'group_products'   => $group_products,
            'supplier_products'=> $supplier_products
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */

    public function edit($id)
    {
        if( !$this->userCan($this->cr_module.'_edit') ) $this->_show_no_access();

        $product = $this->cr_model::find($id);
        $group_products = ProductType::all();
        $supplier_products = ProductSupplier::all();
        return view($this->cr_module.'::edit',[
            'product' => $product,
            'group_products' => $group_products,
            'supplier_products' => $supplier_products
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */

    public function update(Request $request, Product $product)
    {
        if( !$this->userCan($this->cr_module.'_update') ) $this->_show_no_access();

        $request->validate([
            'name'          => 'required',
            'sku'           => 'required',
            'description'  => 'required',
            'buy_price'    => 'required',
            'sell_price'   => 'required'
        ],$this->messages);

        $product->name = $request->input('name');
        $product->sku  = $request->input('sku');
        $product->group_product_id = $request->input('group_id');
        $product->supplier_product_id = $request->input('supplier_id');
        if(isset($_POST['status']) && $_POST['status']=="1"){
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

        return redirect()->route($this->cr_module.'.index')->with('success','Cập nhật thành công !');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */

    public function destroy(Product $product)
    {
        if( !$this->userCan($this->cr_module.'_destroy') ) $this->_show_no_access();

        $product->delete();
        return redirect()->route($this->cr_module.'.index')->with('success','Xóa thành công !');
    }
}
