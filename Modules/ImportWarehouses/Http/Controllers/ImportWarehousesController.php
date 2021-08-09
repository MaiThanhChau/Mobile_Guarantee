<?php

namespace Modules\ImportWarehouses\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

use Modules\ImportWarehouses\Entities\ImportWarehouses;
use Modules\ImportWarehouses\Entities\ImportWarehouseDetail;
use Modules\ImportWarehouses\Entities\ProductInventories;
use Modules\Warehouse\Entities\Warehouse;

class ImportWarehousesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */

    private $limit          = 10;
    private $cr_user        = null;
    private $cr_module      = 'importwarehouses';
    private $cr_model       = null;
    private $msg_no_access  = 'Không có quyền truy cập';
    private $messages = [
        'required' => 'Trường <strong>:attribute</strong> là bắt buộc.',
    ];

    public function __construct(){
        $this->cr_model     = ImportWarehouses::class;
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
        if( !$this->userCan('warehouses_index') ) $this->_show_no_access();

        $warehouses = Warehouse::all();

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

        if( isset($request->filter) && count( $request->filter ) ){
            foreach( $request->filter as $field => $value ){
                if( $value ){
                    $query->where($field,$value);
                }
            }
        }

        $items = $query->paginate($this->limit);

        return view('importwarehouses::index', compact('items', 'warehouses'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        if( !$this->userCan('warehouses_create') ) $this->_show_no_access();

        $warehouses = Warehouse::all();
        $first_warehouse_id = current($warehouses->pluck('id')->toArray());
        $staff = Auth::user();

        $cr_warehouse_id = ( isset($_GET['warehouse_id']) ) ? $_GET['warehouse_id'] : $first_warehouse_id;

        return view('importwarehouses::create', compact('warehouses', 'cr_warehouse_id', 'staff'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        if( !$this->userCan('warehouses_store') ) $this->_show_no_access();

        // dd($request->all());
    
        //kiểm tra quyền nhập kho
        if ($request->save_ok == 1) {
            if( !$this->userCan('warehouses_import') ) $this->_show_no_access();
        }

        if ($request->order_items != null) {
            $order_items = $request->order_items;
        } else {
            return redirect()->route($this->cr_module.'.create')->with('failed','Chưa có sản phẩm!');
        }

        $importwarehouse = new ImportWarehouses;
        $importwarehouse->type = $request->type;
        $importwarehouse->warehouse_id = $request->warehouse_id;
        if ($request->save_draff == 1) {
            $importwarehouse->status = 'save_draff';
        } elseif ($request->save_ok == 1) {
            $importwarehouse->status = 'save_ok';
        } elseif ($request->save_request == 1) {
            $importwarehouse->status = 'save_request';
        }
        $importwarehouse->staff_id = Auth::user()->id;
        $importwarehouse->note = $request->note;
        $importwarehouse->save();

        //lấy id nhập kho vừa tạo
        $import_warehouse_id = $importwarehouse->id;

        foreach ($order_items as $product_id => $order_item) {
            //lưu vào bảng ImportWarehouseDetail
            $ImportWarehouseDetail = new ImportWarehouseDetail;
            $ImportWarehouseDetail->import_warehouse_id = $import_warehouse_id;
            $ImportWarehouseDetail->warehouse_id = $request->warehouse_id;
            $ImportWarehouseDetail->product_id = $product_id;
            $ImportWarehouseDetail->quantity = $order_item['qty'];
            $ImportWarehouseDetail->save();
        }

        //nêu là tạo đơn thì lưu vào bảng ProductInventories còn nháp hoặc yêu cầu thì không
        if ($request->save_ok == 1) {
            //lưu vào bảng ProductInventories
            //kiểm tra nếu tồn tại sản phẩm A ở kho B rồi thì cộng dồn số lượng còn nếu chưa có thì tạo mới
            foreach ($order_items as $product_id => $order_item) {
                $ProductInventories = ProductInventories::where([
                    ['product_id', $product_id],
                    ['warehouse_id', $request->warehouse_id]
                ])->first();
    
                if ($ProductInventories) {
                    $ProductInventories->available_quantity += $order_item['qty'];
                } else {
                    $ProductInventories = new ProductInventories;
                    $ProductInventories->warehouse_id = $request->warehouse_id;
                    $ProductInventories->product_id = $product_id;
                    $ProductInventories->available_quantity = $order_item['qty'];
                }
                $ProductInventories->save();
            }
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
        if( !$this->userCan($this->cr_module.'_index') ) $this->_show_no_access();

        return view('importwarehouses::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        if( !$this->userCan('warehouses_edit') ) $this->_show_no_access();

        $staff = Auth::user();
        $warehouses = Warehouse::all();
        $item = $this->cr_model::find($id);
        $first_warehouse_id = $item->warehouse_id;
        $cr_warehouse_id = ( isset($_GET['warehouse_id']) ) ? $_GET['warehouse_id'] : $first_warehouse_id;
        if ($item->status == 'save_draff') {
            return view('importwarehouses::edit', compact('item', 'warehouses', 'cr_warehouse_id', 'staff'));
        } else {
            return view('importwarehouses::edit-success', compact('item', 'warehouses', 'staff'));
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
        if( !$this->userCan('warehouses_update') ) $this->_show_no_access();

        //kiểm tra quyền nhập kho, duyệt đơn và hủy đơn
        if ($request->save_ok == 1 || $request->save_ok_2 == 1 || $request->save_canceled == 1) {
            if( !$this->userCan('warehouses_import') ) $this->_show_no_access();
        }

        $importwarehouse = ImportWarehouses::where('id', $id)->first();
        // dd($request->all());
        //xử lý cho đơn đang yêu cầu
        if ($request->save_ok_2 == 1) {
            $importwarehouse->status = 'save_ok';
            $importwarehouse->save();
            $warehouse_id = $importwarehouse->warehouse->id;
            foreach ($importwarehouse->products as $product) {
                //kiểm tra nếu tồn tại sản phẩm A ở kho B rồi thì cộng dồn số lượng còn nếu chưa có thì tạo mới
                $ProductInventories = ProductInventories::where([
                    ['product_id', $product->id],
                    ['warehouse_id', $warehouse_id]
                ])->first();

                if ($ProductInventories) {
                    $ProductInventories->available_quantity += $product->pivot->quantity;
                } else {
                    $ProductInventories = new ProductInventories;
                    $ProductInventories->warehouse_id = $warehouse_id;
                    $ProductInventories->product_id = $product->id;
                    $ProductInventories->available_quantity = $product->pivot->quantity;
                }
                $ProductInventories->save();
            }
            return redirect()->route($this->cr_module.'.index')->with('success','Lưu thành công !');
        } elseif ($request->save_canceled == 1) {
            $importwarehouse->status = 'save_canceled';
            $importwarehouse->save();
            return redirect()->route($this->cr_module.'.index')->with('success','Lưu thành công !');
        }

        //xử lý cho đơn hàng lưu nháp
        //kiểm tra xem đã có sản phẩm được chọn chưa
        if ($request->order_items != null) {
            $order_items = $request->order_items;
        } else {
            return redirect()->route($this->cr_module.'.create')->with('failed','Chưa có sản phẩm!');
        }

        $importwarehouse->type = $request->type;
        $importwarehouse->warehouse_id = $request->warehouse_id;
        if ($request->save_draff == 1) {
            $importwarehouse->status = 'save_draff';
        } elseif ($request->save_ok == 1) {
            $importwarehouse->status = 'save_ok';
        } elseif ($request->save_request == 1) {
            $importwarehouse->status = 'save_request';
        }
        $importwarehouse->staff_id = Auth::user()->id;
        $importwarehouse->note = $request->note;
        $importwarehouse->save();

        //lấy id nhập kho vừa tạo
        $import_warehouse_id = $importwarehouse->id;

        foreach ($order_items as $product_id => $order_item) {
            //lưu vào bảng ImportWarehouseDetail
            $ImportWarehouseDetail = ImportWarehouseDetail::where([
                ['import_warehouse_id', $id],
                ['product_id', $product_id]
            ])->first();
            if ($ImportWarehouseDetail) {
                $ImportWarehouseDetail->warehouse_id = $request->warehouse_id;
                $ImportWarehouseDetail->quantity = $order_item['qty'];
                $ImportWarehouseDetail->save();
            } else {
                $ImportWarehouseDetail = new ImportWarehouseDetail;
                $ImportWarehouseDetail->import_warehouse_id = $import_warehouse_id;
                $ImportWarehouseDetail->warehouse_id = $request->warehouse_id;
                $ImportWarehouseDetail->product_id = $product_id;
                $ImportWarehouseDetail->quantity = $order_item['qty'];
                $ImportWarehouseDetail->save();
            }

        }

        //nêu là tạo đơn thì lưu vào bảng ProductInventories còn nháp hoặc yêu cầu thì không
        if ($request->save_ok == 1) {

            foreach ($order_items as $product_id => $order_item) {
                //lưu vào bảng ProductInventories
                //kiểm tra nếu tồn tại sản phẩm A ở kho B rồi thì cộng dồn số lượng còn nếu chưa có thì tạo mới
                $ProductInventories = ProductInventories::where([
                    ['product_id', $product_id],
                    ['warehouse_id', $request->warehouse_id]
                ])->first();

                if ($ProductInventories) {
                    $ProductInventories->available_quantity += $order_item['qty'];
                } else {
                    $ProductInventories = new ProductInventories;
                    $ProductInventories->warehouse_id = $request->warehouse_id;
                    $ProductInventories->product_id = $product_id;
                    $ProductInventories->available_quantity += $order_item['qty'];
                }
                $ProductInventories->save();
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
        if( !$this->userCan('warehouses_destroy') ) $this->_show_no_access();

        $ImportWarehouseDetails = ImportWarehouseDetail::where('import_warehouse_id', $id)->get();
        foreach ($ImportWarehouseDetails as $ImportWarehouseDetail) {
            $ImportWarehouseDetail->delete();
        }
        $importwarehouse = ImportWarehouses::where('id', $id)->first();
        $importwarehouse->delete();
        return redirect()->route($this->cr_module.'.index')->with('success','Xóa thành công !');
    }
}