<?php

namespace Modules\Order\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Order\Entities\Order;

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

    public function getProducts(){
        $items = Product::all();
        $response = [
            'success'   => true,
            'data'      => $items
        ];
        return response()->json($response);

    }
    public function show(){
        echo __METHOD__;
        die();
    }

}