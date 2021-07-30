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
use Modules\Order\Entities\orderItem;
use Modules\Customers\Entities\Customers;

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
    public function store(Request $request, Order $order)
    {
        if( !$this->userCan($this->cr_module.'_store') ) $this->_show_no_access();
        
        //Kiểm tra sản phẩm được chọn
        if ($request->order_items != null) {
            $order_items = $request->order_items;
            //Tính tổng tiền đơn hàng
            foreach ($order_items as $order_item) {
                $order->cart_subtotal += $order_item['qty'] * $order_item['price'];
            }
        } else {
            return redirect()->route($this->cr_module.'.create')->with('failed','Chưa có sản phẩm!');
        }
        //lấy giá trị khuyến mãi
        $order->discounted_value = $request->discounted_value;
        //phí vận chuyển
        $order->transport_fee = $request->transport_fee;
        //tổng tiền khách phải trả = Tổng tiền đơn hàng - khuyến mãi + phí vận chuyển (106 - 112 + 114)
        $order->cost_total = $order->cart_subtotal - $order->discounted_value + $order->transport_fee;

        $order->order_note = $request->order_note;

        //số tiền khách đã trả
        $order->paid = $request->paid;

        $order->shipping_method_id = $request->shipping_method_id;
        $order->payment_method_id = $request->payment_method_id;
        $order->type = $request->type;
        $order->source_id = $request->source_id;
        $order->customer_name = $request->customer_name;
        $order->customer_phone = $request->customer_phone;
        $order->customer_birthday = $request->customer_birthday;
        $order->customer_address = $request->customer_address;
        $order->customer_email = $request->customer_email;
        $order->order_status = $request->order_status;
        //số tiền khách còn nợ = tổng tiền phải trả - số tiền đã trả (116 - 120)
        $order->owed = $order->cost_total - $order->paid;

        //lấy id user hiện tại
        $order->staff_id = Auth::user()->id;
        

        $customer = Customers::where('phone', $request->customer_phone)->first();

        //kiểm tra xem khách hàng đã tồn tại trong hệ thống chưa (kt = số điện thoại)
        if ($customer) {
            $customer_id = $customer->id;
        } else {
            $customer = new Customers;
            $customer->name = $request->customer_name;
            $customer->phone = $request->customer_phone;
            $customer->birthday = $request->customer_birthday;
            $customer->address = $request->customer_address;
            $customer->email = $request->customer_email;
            $customer->save();
            $customer_id = $customer->id;
        }

        $order->customer_id = $customer_id;

        $order->save();

        //thêm điểm cho khách
        $customer->poin += 1;

        //thêm tổng nợ của khách
        $customer->owed += $order->owed;

        //thêm tổng mua của khách
        $customer->total_sale += $order->cost_total;

        //thêm giao dịch cuối của khách
        $customer->last_order = $order->created_at;

        //lưu lại
        $customer->save();

        $order_id = $order->id;

        foreach ($order_items as $product_id => $order_item) {
            $orderItem = new orderItem;
            $orderItem->order_id = $order_id;
            $orderItem->product_id = $product_id;
            $orderItem->quantity = $order_item['qty'];
            $orderItem->price = $order_item['price'];
            $orderItem->total_price = $order_item['qty'] * $order_item['price'];
            $orderItem->save();
        }

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
