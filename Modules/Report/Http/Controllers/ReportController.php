<?php

namespace Modules\Report\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
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
        if( !$this->userCan('report_index') ) $this->_show_no_access();
       // $query = $this->cr_model::where('id','!=','');
        //handle search and sort
        
       
        return view($this->cr_module.'::index');
    }
    private function _show_no_access(){
        abort('403', $this->msg_no_access);
    }

}
