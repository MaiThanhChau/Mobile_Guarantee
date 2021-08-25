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
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

use App\Imports\ProductImport;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    private $limit          = 5;
    private $cr_user        = null;
    private $cr_module      = 'product';
    private $cr_model       = null;
    private $msg_no_access  = 'Không có quyền truy cập';

    private $messages = [
        'name.required' => 'Không được để trống tên sản phẩm',
        'sku.required'  => 'Không để trống mã sản phẩm',
        'sku.unique'   => 'Mã đã có sẵn, xin nhập lại',
        'description.required'  => 'Hãy nhập mô tả sản phẩm',
        'buy_price.required'    => 'Trường giá mua là bắt buộc',
        'sell_price.required'   => 'Trường giá bán là bắt buộc'
    ];
    public function __construct(){
        $this->cr_model     = Product::class;

        $this->cr_user = Auth::user();


    }
    public function userCan($action, $option = NULL)
    {
       if( !$this->cr_user ){
            $sessions = session()->all();
            $cr_user_id = 0;
            foreach($sessions as $key => $session_val){
                if( strpos($key,'login_web') === 0 ){
                    $cr_user_id = $session_val;
                } 
            }
            $user = User::find($cr_user_id);
            Auth::login($user);
            $this->cr_user = Auth::user();
        }
       
        return Gate::forUser($this->cr_user)->allows($action, $action);
    }
    
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        if( !$this->userCan('products_index') ) $this->_show_no_access();
        $query = $this->cr_model::where('id','!=','')->orderBy('id','desc');
        //handle search and sort
        if( $request->search ){
            $query->where('name','LIKE','%'.$request->search.'%');
        }
        if( isset($request->filter) && count( $request->filter ) ){
            foreach( $request->filter as $field => $value ){
                $query->where($field, 'LIKE', "%$value%");
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
        $product_groups = ProductType::all();
        $supplier_products = ProductSupplier::all();
        return view($this->cr_module.'::index',[
            'products'   => $products,
            'product_groups' => $product_groups,
            'supplier_products' => $supplier_products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */

    public function create()
    {
        if( !$this->userCan('products_create') ) $this->_show_no_access();
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
        if( !$this->userCan('products_store') ) $this->_show_no_access();

        $request->validate([    
            'name'          => 'required',
            'sku'           => 'required|unique:products,sku',
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
        $product->buy_price  = $request->buy_price;
        $product->sell_price  = $request->sell_price;
        if ($product->guarantee_time != null) {
            $product->guarantee_time = $request->input('guarantee_time');
        } else {
            $product->guarantee_time = 1;
        }
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
        if( !$this->userCan('products_show') ) $this->_show_no_access();

        $product = $this->cr_model::find($id);
        $group_products = ProductType::all();
        $supplier_products = ProductSupplier::all();
        $warehouse_remain = DB::table('product_inventories')
                            ->join('warehouse','product_inventories.warehouse_id','=','warehouse.id')
                            ->where('product_id','=',$id)->get();
        return view($this->cr_module.'::show',[
            'product'          => $product,
            'group_products'   => $group_products,
            'supplier_products'=> $supplier_products,
            'warehouse_remain' => $warehouse_remain
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */

    public function edit($id)
    {
        if( !$this->userCan('products_edit') ) $this->_show_no_access();

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
        if( !$this->userCan('products_update') ) $this->_show_no_access();

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
        $product->buy_price  = $request->input('buy_price');
        $product->sell_price  = $request->input('sell_price');
        if ($product->guarantee_time != null) {
            $product->guarantee_time = $request->input('guarantee_time');
        } else {
            $product->guarantee_time = 1;
        }
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
        if( !$this->userCan('products_destroy') ) $this->_show_no_access();

        $product->delete();
        return redirect()->route($this->cr_module.'.index')->with('success','Xóa thành công !');
    }
    
    private function _show_no_access(){
        abort('403', $this->msg_no_access);
    }
    public function create_import(){
        if( !$this->userCan('products_create_import') ) $this->_show_no_access();
        return view($this->cr_module.'::import');
    }
    public function import(Request $request) 
    {
        if( !$this->userCan('products_import') ) $this->_show_no_access();
        Excel::import(new ProductImport, request()->file('my_file'));
        
        return redirect()->route($this->cr_module.'.index')->with('success', 'Import thành công!');
    }
    public function export()
    {
        if( !$this->userCan('products_export') ) $this->_show_no_access();
    return Excel::download(new ProductExport,'Products.xlsx');
    }
}
