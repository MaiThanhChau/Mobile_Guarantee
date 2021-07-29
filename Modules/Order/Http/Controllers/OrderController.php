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

class OrderController extends Controller
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

    private function _show_no_access(){
        abort('403', $this->msg_no_access);
    }

    public function userCan($action, $option = NULL)
    {
      return true;
      return Gate::forUser($this->cr_user)->allows($action, $option);
    }

    public function index(Request $request)
    {
        if( !$this->userCan($this->cr_module.'_index') ) $this->_show_no_access();

        $query = $this->cr_model::where('id','!=','');
        
        if ($request->search) {
            $query->where('customer_name', 'like', "%$request->search%")->orWhere('customer_phone', 'like', "%$request->search%");
        }

        if ($request->sort_by) {
            switch ($request->sort_by) {
                case 'id-asc':
                    $query->orderBy('id', 'ASC');
                    break;
                case 'id-desc':
                    $query->orderBy('id', 'DESC');
                    break;
                default:
                    # code...
                    break;
            }
        } else {
            $query->orderBy('id', 'DESC');
        }

        $orders = $query->paginate($this->limit);

        return view('order::index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        if( !$this->userCan($this->cr_module.'_create') ) $this->_show_no_access();

        return view('order::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        if( !$this->userCan($this->cr_module.'_store') ) $this->_show_no_access();

        if ($request->array_product_sku != null) {
            $array_product_sku = explode(',', $request->array_product_sku);
            $products = Product::whereIn('sku', $array_product_sku)->get();
            // dd($products);
            return view('order::create', compact('products'));
        }

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        if( !$this->userCan($this->cr_module.'_show') ) $this->_show_no_access();

        $order = order::where('id', $id)->first();
        return view('order::view', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        if( !$this->userCan($this->cr_module.'_edit') ) $this->_show_no_access();

        return view('order::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        if( !$this->userCan($this->cr_module.'_update') ) $this->_show_no_access();
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        if( !$this->userCan($this->cr_module.'_destroy') ) $this->_show_no_access();

        // $order = order::where('id', $id)->first();
        // $order->delete();
    }

}
