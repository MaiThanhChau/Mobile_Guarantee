<?php

namespace Modules\Order\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Order\Entities\Order;
use Modules\Customers\Entities\Customers;

use Illuminate\Support\Facades\Auth;
use Modules\Roles\Entities\User;
use Illuminate\Support\Facades\Gate;

use Modules\Product\Entities\Product;

class OrderAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */

    private $limit          = 10;
    private $cr_user        = null;
    private $cr_module      = 'order';
    private $cr_model       = null;
    private $msg_no_access  = 'Không có quyền truy cập';
    private $messages = [
        'required' => 'Trường <strong>:attribute</strong> là bắt buộc.',
    ];

    public function __construct(){
        $this->cr_model     = Order::class;
        $this->cr_user = Auth::user();
    }

    public function getProducts($warehouse_id){
        //$items = Product::all();
        $items = Product::join('product_inventories','product_inventories.product_id','=','products.id')
        ->select('products.*', 'product_inventories.available_quantity','product_inventories.warehouse_id')
        ->where([
            ['product_inventories.available_quantity','>',0],
            ['product_inventories.warehouse_id', $warehouse_id]
        ])->get();
        $response = [
            'success'   => true,
            'data'      => $items
        ];
        return response()->json($response);

    }
    public function getCustomers(Request $request)
    {
        $customers = [];
        if ($request->has('q')) {
            $search = $request->q;
            $customers = Customers::select('id', 'name', 'phone', 'birthday', 'address', 'email')->where('name', 'LIKE', "%$search%")->orWhere('phone', 'LIKE', "%$search%")->get();
        }

        return response()->json($customers);
    }
    public function get(Request $request)
    {
        $customer_id = $request->id;
        $customer = Customers::where('id', $customer_id)->first();
        return response()->json($customer);
    }
    public function show(){
        echo __METHOD__;
        die();
    }

}
