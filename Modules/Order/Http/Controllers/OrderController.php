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
use Modules\Warehouse\Entities\Warehouse;
use Modules\ImportWarehouses\Entities\ProductInventories;
use Modules\CustomerGroup\Entities\CustomerGroup;


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
        if( !$this->userCan($this->cr_module.'s_index') ) $this->_show_no_access();

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
        if( !$this->userCan($this->cr_module.'s_create') ) $this->_show_no_access();
        $warehouses = Warehouse::all();
        $first_warehouse_id = current($warehouses->pluck('id')->toArray());
        $staff = Auth::user();

        $cr_warehouse_id = ( isset($_GET['warehouse_id']) ) ? $_GET['warehouse_id'] : $first_warehouse_id;
 
        //tạo mảng trạng thái đơn hàng
        $order_status = [
            'new' => 'Mới',
            'pending' => 'Đang chờ',
            'processing' => 'Đang xử lý',
            'on-hold' => 'Tạm giữ',
            'completed' => 'Hoàn thành',
            'canceled' => 'Hủy',
            'refunded' => 'Hoàn tiền',
            'failed' => 'Thất bại'
        ];

        //tạo mảng nguồn đơn hàng
        $source_id = [
            1 => 'Bán tại điểm',
            2 => 'Website',
            3 => 'Phone',
            4 => 'Facebook',
        ];
        // dd($source_id);
        return view('order::create', compact('warehouses', 'staff','cr_warehouse_id', 'order_status', 'source_id'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request, Order $order)
    {
        if( !$this->userCan($this->cr_module.'s_store') ) $this->_show_no_access();

        //kiểm tra quyền xuất kho
        if ($request->save_ok == 1) {
            if( !$this->userCan('warehouses_export') ) $this->_show_no_access();
        }
        // dd($request->all());
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
        $order->warehouse_id = $request->warehouse_id;
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

        
        if ($request->save_draff == 1) {
            $order->status = 'save_draff';
        } elseif ($request->save_ok == 1) {
            $order->status = 'save_ok';
        } elseif ($request->save_request == 1) {
            $order->status = 'save_request';
        }

        $order->save();

        //nếu lưu xuất kho thì lưu vào bảng customer và ProductInventories
        if ($request->save_ok == 1) {
        
            //kiểm tra xem khách hàng đã tồn tại trong hệ thống chưa (kt = số điện thoại)
            $customer = Customers::where('phone', $request->customer_phone)->first();
            //lấy id của customerGroup đầu tiên để làm mặc định cho khách hàng mới
            $CustomerGroup = CustomerGroup::first();
            $customergroup_id = $CustomerGroup->id;

            if ($customer) {

                //thêm tổng nợ của khách
                $customer->owed += $order->owed;

                //thêm tổng mua của khách
                $customer->total_sale += $order->cost_total;
                $customer->save();

            } else {
                $customer = new Customers;
                $customer->name = $request->customer_name;
                $customer->phone = $request->customer_phone;
                $customer->birthday = $request->customer_birthday;
                $customer->address = $request->customer_address;
                $customer->email = $request->customer_email;
                $customer->owed = $order->owed;
                $customer->total_sale = $order->cost_total;
                $customer->customer_group_id  = $customergroup_id;
                $customer->save();
            }

            //lấy id khách hàng để lưu vào order
            $customer_id = $customer->id;

            $order->customer_id = $customer_id;

            $order->save();
            
            //thêm giao dịch cuối của khách
            $customer->last_order = $order->created_at;

            //khi có giao dịch thì thêm điểm cho khách
            $customer->poin += 1;

            $customer->save();

            foreach ($order_items as $product_id => $order_item) {

                //giảm số lượng sản phẩm trong bảng ProductInventories sau khi xuất kho
                $ProductInventories = ProductInventories::where([
                    ['product_id', $product_id],
                    ['warehouse_id', $request->warehouse_id]
                ])->first();

                $ProductInventories->available_quantity -= $order_item['qty'];
    
                $ProductInventories->save();
            }
        }

        //lấy order id để lưu vào orderItem
        $order_id = $order->id;

        foreach ($order_items as $product_id => $order_item) {
            $orderItem = new orderItem;
            $orderItem->order_id = $order_id;
            $orderItem->product_id = $product_id;
            $orderItem->warehouse_id = $request->warehouse_id;
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

        return view('order::view');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        if( !$this->userCan($this->cr_module.'s_edit') ) $this->_show_no_access();

        $order = order::where('id', $id)->first();

        $warehouses = Warehouse::all();
        $first_warehouse_id = $order->warehouse_id;
        $cr_warehouse_id = ( isset($_GET['warehouse_id']) ) ? $_GET['warehouse_id'] : $first_warehouse_id;

        $staff = Auth::user();

        //tạo mảng trạng thái đơn hàng
        $order_status = [
            'new' => 'Mới',
            'pending' => 'Đang chờ',
            'processing' => 'Đang xử lý',
            'on-hold' => 'Tạm giữ',
            'completed' => 'Hoàn thành',
            'canceled' => 'Hủy',
            'refunded' => 'Hoàn tiền',
            'failed' => 'Thất bại'
        ];

        //tạo mảng nguồn đơn hàng
        $source_id = [
            1 => 'Bán tại điểm',
            2 => 'Website',
            3 => 'Phone',
            4 => 'Facebook',
        ];
        if ($order->status == 'save_draff') {
            return view('order::edit', compact('order', 'staff', 'warehouses', 'cr_warehouse_id', 'order_status', 'source_id'));
        } else {
            return view('order::edit-success', compact('order', 'staff', 'warehouses', 'cr_warehouse_id', 'order_status', 'source_id'));
        }
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        if( !$this->userCan($this->cr_module.'s_update') ) $this->_show_no_access();

        //kiểm tra quyền xuất kho, duyệt đơn và hủy đơn
        if ($request->save_ok == 1 || $request->save_ok_2 == 1 || $request->save_canceled == 1) {
            if( !$this->userCan('warehouses_export') ) $this->_show_no_access();
        }

        $order = order::where('id', $id)->first();
        // dd($request->all());

        //Kiểm tra sản phẩm được chọn
        if ($request->order_items != null) {

            $order_items = $request->order_items;

            //đưa tổng tiền về bằng 0 rồi cộng lại 
            $order->cart_subtotal = 0;

            //Tính tổng tiền đơn hàng
            foreach ($order_items as $order_item) {
                $order->cart_subtotal += $order_item['qty'] * $order_item['price'];
            }
        } else {
            return redirect()->route($this->cr_module.'.create')->with('failed','Chưa có sản phẩm!');
        }

        //xử lý cho đơn đang yêu cầu
        if ($request->save_ok_2 == 1) {
            $order->status = 'save_ok';
            //kiểm tra xem khách hàng đã tồn tại trong hệ thống chưa (kt = số điện thoại)
            $customer = Customers::where('phone', $order->customer_phone)->first();
            //lấy id của customerGroup đầu tiên để làm mặc định cho khách hàng mới
            $CustomerGroup = CustomerGroup::first();
            $customergroup_id = $CustomerGroup->id;

            if ($customer) {

                //thêm tổng nợ của khách
                $customer->owed += $order->owed;

                //thêm tổng mua của khách
                $customer->total_sale += $order->cost_total;
                $customer->save();

            } else {
                $customer = new Customers;
                $customer->name = $order->customer_name;
                $customer->phone = $order->customer_phone;
                $customer->birthday = $order->customer_birthday;
                $customer->address = $order->customer_address;
                $customer->email = $order->customer_email;
                $customer->owed = $order->owed;
                $customer->total_sale = $order->cost_total;
                $customer->customer_group_id  = $customergroup_id;
                $customer->save();
            }

            //lấy id khách hàng để lưu vào order
            $customer_id = $customer->id;

            $order->customer_id = $customer_id;

            $order->save();
            
            //thêm giao dịch cuối của khách
            $customer->last_order = $order->created_at;

            //khi có giao dịch thì thêm điểm cho khách
            $customer->poin += 1;

            $customer->save();

            foreach ($order_items as $product_id => $order_item) {

                //giảm số lượng sản phẩm trong bảng ProductInventories sau khi xuất kho
                $ProductInventories = ProductInventories::where([
                    ['product_id', $product_id],
                    ['warehouse_id', $request->warehouse_id]
                ])->first();
                $ProductInventories->available_quantity -= $order_item['qty'];
                $ProductInventories->save();
    
            }
            return redirect()->route($this->cr_module.'.index')->with('success','Lưu thành công !');
        } 
        if ($request->save_canceled == 1) {
            $order->status = 'save_canceled';
            $order->save();
            return redirect()->route($this->cr_module.'.index')->with('success','Lưu thành công !');
        }

        //xử lý cho đơn hàng lưu nháp
        
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
        $order->warehouse_id = $request->warehouse_id;
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

        
        if ($request->save_draff == 1) {
            $order->status = 'save_draff';
        } elseif ($request->save_ok == 1) {
            $order->status = 'save_ok';
        } elseif ($request->save_request == 1) {
            $order->status = 'save_request';
        }

        $order->save();

        //nếu lưu xuất kho thì lưu vào bảng customer và ProductInventories
        if ($request->save_ok == 1) {
        
            //kiểm tra xem khách hàng đã tồn tại trong hệ thống chưa (kt = số điện thoại)
            $customer = Customers::where('phone', $request->customer_phone)->first();
            //lấy id của customerGroup đầu tiên để làm mặc định cho khách hàng mới
            $CustomerGroup = CustomerGroup::first();
            $customergroup_id = $CustomerGroup->id;

            if ($customer) {

                //thêm tổng nợ của khách
                $customer->owed += $order->owed;

                //thêm tổng mua của khách
                $customer->total_sale += $order->cost_total;
                $customer->save();

            } else {
                $customer = new Customers;
                $customer->name = $request->customer_name;
                $customer->phone = $request->customer_phone;
                $customer->birthday = $request->customer_birthday;
                $customer->address = $request->customer_address;
                $customer->email = $request->customer_email;
                $customer->owed = $order->owed;
                $customer->total_sale = $order->cost_total;
                $customer->customer_group_id  = $customergroup_id;
                $customer->save();
            }

            //lấy id khách hàng để lưu vào order
            $customer_id = $customer->id;

            $order->customer_id = $customer_id;

            $order->save();
            
            //thêm giao dịch cuối của khách
            $customer->last_order = $order->created_at;

            //khi có giao dịch thì thêm điểm cho khách
            $customer->poin += 1;

            $customer->save();

            foreach ($order_items as $product_id => $order_item) {

                //giảm số lượng sản phẩm trong bảng ProductInventories sau khi xuất kho
                $ProductInventories = ProductInventories::where([
                    ['product_id', $product_id],
                    ['warehouse_id', $request->warehouse_id]
                ])->first();

                $ProductInventories->available_quantity -= $order_item['qty'];
    
                $ProductInventories->save();
            }
        }

        //lấy order id để lưu vào orderItem
        $order_id = $order->id;
        foreach ($order_items as $product_id => $order_item) {
                $orderItem = orderItem::where([
                    ['order_id', $order_id],
                    ['product_id', $product_id]
                ])->first();
                if ($orderItem) {
                    $orderItem->warehouse_id = $request->warehouse_id;
                    $orderItem->quantity = $order_item['qty'];
                    $orderItem->price = $order_item['price'];
                    $orderItem->total_price = $order_item['qty'] * $order_item['price'];
                    $orderItem->save();
                } else {
                    $orderItem = new orderItem;
                    $orderItem->order_id = $order_id;
                    $orderItem->product_id = $product_id;
                    $orderItem->warehouse_id = $request->warehouse_id;
                    $orderItem->quantity = $order_item['qty'];
                    $orderItem->price = $order_item['price'];
                    $orderItem->total_price = $order_item['qty'] * $order_item['price'];
                    $orderItem->save();
                }

        }

        return redirect()->route($this->cr_module.'.index')->with('success','Lưu thành công !');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        if( !$this->userCan($this->cr_module.'s_destroy') ) $this->_show_no_access();


        $orderItems = orderItem::where('order_id', $id)->get();
        foreach ($orderItems as $orderItem) {
            $orderItem->delete();
        }

        $order = order::where('id', $id)->first();
        $order->delete();
        return redirect()->route($this->cr_module.'.index')->with('success','Xóa thành công !');
    }

}