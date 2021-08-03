<?php

namespace Modules\Report\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class ReportController extends Controller
{
    private $limit          = 5;
    private $cr_user        = null;
    private $cr_module      = 'report';
    private $cr_model       = null;
    private $msg_no_access  = 'Không có quyền truy cập';
    public function __construct(){
       // $this->cr_model     = Product::class;
        
        $this->cr_user = Auth::user();
    }
    public function userCan($action, $option = NULL)
    {
      return Gate::forUser($this->cr_user)->allows($action, $action);
    }
    public function index(Request $request)
    {
        if( !$this->userCan($this->cr_module.'_index') ) $this->_show_no_access();
       // $query = $this->cr_model::where('id','!=','');
        //handle search and sort
        $order_quant = DB::table('orders')->where('type','=','Guarantee')->count();
        $quant_price = DB::table('orders')->select('cart_subtotal')->where('type','=','Guarantee')->SUM('cart_subtotal');
        //dd($quant_price);
        $order_number = DB::table('orders')->where('type','=','SaleProduct')->count();
        $order_cart = DB::table('orders')
        ->select('cart_subtotal')->where('type','=','SaleProduct')
        ->SUM('cart_subtotal');
        $order_cancel = DB::table('orders')->where('order_status','=','canceled')->count();
        $price_cancel = DB::table('orders')->select('cost_total')->where('order_status','=','canceled')->SUM('cost_total');
        //dd($price_cancel);
        return view($this->cr_module.'::index', compact('order_number','order_cart','order_quant','quant_price','order_cancel','price_cancel'));
    }
    private function _show_no_access(){
        abort('403', $this->msg_no_access);
    }

}
