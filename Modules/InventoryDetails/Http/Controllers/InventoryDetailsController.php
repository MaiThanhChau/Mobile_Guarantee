<?php

namespace Modules\InventoryDetails\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ImportWarehouses\Entities\ProductInventories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Pagination\Paginator;
use App\Exports\InventoryExport;
use Maatwebsite\Excel\Facades\Excel;
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
       // return true;
      return Gate::forUser($this->cr_user)->allows($action, $action);
    }
    private function _show_no_access(){
        abort('403', $this->msg_no_access);
    }
    public function index(Request $request)
    {
       // if( !$this->userCan('products_index') ) $this->_show_no_access();
        $query = $this->cr_model::join('warehouse','product_inventories.warehouse_id','=','warehouse.id')
        ->join('products','product_inventories.product_id','=','products.id')
        ->select('product_inventories.*','products.name as name','warehouse.name as w_name','products.buy_price','warehouse.code')
        ->where('product_inventories.id','!=','');
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
        $inventory_details = $query->paginate($this->limit);
       // dd($inventory_details);
        return view($this->cr_module.'::index',[
            'inventory_details' => $inventory_details
        ]);
    }
    public function export()
    {
      //  if( !$this->userCan($this->cr_model.'_export') ) $this->_show_no_access();
    return Excel::download(new InventoryExport,'Inventories.xlsx');
    }
}
