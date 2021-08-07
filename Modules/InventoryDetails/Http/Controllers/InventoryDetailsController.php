<?php

namespace Modules\InventoryDetails\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ImportWarehouses\Entities\ProductInventories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Pagination\Paginator;
class InventoryDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    private $limit          = 5;
    private $cr_user        = null;
    private $cr_module      = 'inventorydetails';
    private $cr_model       = null;
    private $msg_no_access  = 'Không có quyền truy cập';
    public function __construct(){
        $this->cr_model     = ProductInventories::class;

        $this->cr_user = Auth::user();
    }
    public function userCan($action, $option = NULL)
    {
        return true;
      return Gate::forUser($this->cr_user)->allows($action, $action);
    }
    private function _show_no_access(){
        abort('403', $this->msg_no_access);
    }
    public function index()
    {
        $inventory_details = ProductInventories::join('warehouse','product_inventories.warehouse_id','=','warehouse.id')
                                                ->join('products','product_inventories.product_id','=','products.id')
                                                ->select('product_inventories.id','products.name','products.buy_price','warehouse.code','warehouse.name as wh_name','product_inventories.available_quantity')
                                                ->paginate($this->limit);
       // dd($inventory_details);
        return view($this->cr_module.'::index',[
            'inventory_details' => $inventory_details
        ]);
    }
}
