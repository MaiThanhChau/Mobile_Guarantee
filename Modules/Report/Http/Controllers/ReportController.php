<?php

namespace Modules\Report\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Modules\Roles\Entities\User;
class ReportController extends Controller
{
    private $limit          = 5;
    private $cr_user        = null;
    private $cr_module      = 'report';
    private $cr_model       = null;
    private $msg_no_access  = 'Kh+¦ng c+¦ quyß+ün truy cß¦¡p';
    public function __construct(){
       // $this->cr_model     = Product::class;
        
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

        $report_venue = $this->report_venue();

        //dd($price_cancel);
        return view($this->cr_module.'::index', compact('order_number','order_cart','order_quant','quant_price','order_cancel','price_cancel','report_venue'));
    }

    private function report_venue(){
        $day        = date('w');
        $week_start = date('d-m-Y', strtotime('-'.$day.' days'));
        $week_end   = date('d-m-Y', strtotime('+'.(6-$day).' days'));

        $days = $this->date_range($week_start,$week_end);

        $labels = $days;
        $chart_data = [];
        foreach ($days as $date) {
            $start_date_format = date('Y-m-d',strtotime($date)).' 00:00:00';
            $end_date_format = date('Y-m-d',strtotime($date)).' 23:59:59';
            $query = DB::table('orders')->where('created_at','>=',$start_date_format);
            $query->where('created_at','<=',$end_date_format);
            $cost_total = $query->sum('cost_total');


            $chart_data[$date] = $cost_total;
        }
        $chart_data = array_values($chart_data);

        return [
            'labels' => $labels,
            'chart_data' => $chart_data,
        ];
    }

    private function date_range($first, $last, $step = '+1 day', $output_format = 'd-m-Y' ) {

        $dates = array();
        $current = strtotime($first);
        $last = strtotime($last);

        while( $current <= $last ) {

            $dates[] = date($output_format, $current);
            $current = strtotime($step, $current);
        }

        return $dates;
    }
    private function _show_no_access(){
        abort('403', $this->msg_no_access);
    }

}
