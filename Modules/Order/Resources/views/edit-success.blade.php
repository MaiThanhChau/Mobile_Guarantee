@extends('layouts.master')
@section('content')
<form method="post" action="{{ route('order.update', $order->id) }}">
    @csrf
    @method('PUT')
    <header class="page-title-bar">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">
                    <a href="{{ route('order.index') }}">
                        <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Đơn hàng</a>
                </li>
            </ol>
        </nav>
        <div class="d-md-flex align-items-md-start">
            <h1 class="page-title mr-sm-auto"> Tạo đơn hàng </h1>
            <!-- .btn-toolbar -->

            <div class="btn-toolbar">
                @if($order->status == 'save_request')
                @can('warehouses_export','warehouses_export')
                <button class="btn btn-success save_ok" style="margin-right: 5px" name="save_ok_2" value="1"
                    onclick="return confirm('Một khi thực hiện hành động này bạn sẽ không thể thay đổi lại!')">
                    <i class="fa fa-check"></i> DUYỆT PHIẾU
                </button>

                <button class="btn btn-danger save_canceled" style="margin-right: 5px" name="save_canceled" value="1"
                    onclick="return confirm('Một khi thực hiện hành động này bạn sẽ không thể thay đổi lại!')">
                    <i class="fa fa-trash"></i> HỦY PHIẾU
                </button>
                @endcan
                @endif
                <button type="button" class="btn btn-secondary" onclick="window.history.go(-1); return false;">
                    TRỞ VỀ
                </button>
            </div>
        </div>
    </header>
    <!-- /.page-title-bar -->
    <!-- .page-section -->
    <div class="page-section">
        @if(Session::has('failed'))
        <div class="alert alert-success alert-dismissible fade show mb-2">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <span style="color:red">{{ Session::get('failed')}}</span>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-8">
                <div class="card card-fluid">
                    <div class="card-header pb-0">
                        <h5 class="card-title">TẠO ĐƠN HÀNG </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mg-top-15">
                            <table class="table table-colored table-inverse table-hover">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th style="width: 150px;">Số lượng</th>
                                        <th>Giá</th>
                                        <th>Thành tiền</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="fixed_products_results">
                                    @foreach($order->products as $product)
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>
                                            <input type="number" value="{{$product->pivot->quantity}}"
                                            readonly="readonly" name="order_items[{{$product->id}}][qty]" class="qty text-center">
                                        </td>
                                        <td>
                                            <input type="number" value="{{$product->sell_price}}"
                                                readonly="readonly" name="order_items[{{$product->id}}][price]" class="price text-center">
                                        </td>
                                        <td>{{number_format($product->sell_price*$product->pivot->quantity)}} ₫</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="publisher keep-focus focus active">
                                    <label for="order-note" class="publisher-label">Ghi chú</label>
                                    <!-- .publisher-input -->
                                    <div class="publisher-input">
                                        <textarea disabled name="order_note" class="form-control" id="order-note"
                                            rows="5">{{$order->order_note}}</textarea>
                                    </div><!-- /.publisher-input -->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <table class="table-normal table-none-border table-color-gray-text">
                                    <tbody>
                                        <tr>
                                            <td class="text-left color-subtext">Tổng giá trị sản phẩm</td>
                                            <td class="text-right pl10">
                                                {{number_format($order->cart_subtotal)}} ₫
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left color-subtext">
                                                Khuyến mãi
                                            </td>
                                            <td class="text-right pl20">{{number_format($order->discounted_value)}} ₫
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-left color-subtext mt10">
                                                Chi phí vận chuyển
                                            </td>
                                            <td class="text-right pl20">{{number_format($order->transport_fee)}} ₫</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left color-subtext mt10">
                                                Số tiền phải thanh toán
                                            </td>
                                            <td class="text-right pl20">{{number_format($order->cost_total)}} ₫</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left color-subtext mt10">
                                                Khách thanh toán
                                            </td>
                                            <td class="text-right pl20">{{number_format($order->paid)}} ₫</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="card-title">VẬN CHUYỂN & THANH TOÁN</h5>
                                <div class="form-group">
                                    <label for="shipping-method-id">Phương thức vận chuyển</label><select
                                        name="shipping_method_id" class="custom-select" id="shipping-method-id">
                                        @if($order->shipping_method_id == 1)
                                        <option value="1" {{'selected'}}>Bán hàng tại điểm</option>
                                        <option value="2" disabled>Chuyển cho khách</option>
                                        @else
                                        <option value="1" disabled>Bán hàng tại điểm</option>
                                        <option value="2" {{'selected'}}>Chuyển cho khách</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="payment-method-id">Phương thức thanh toán</label><select
                                        name="payment_method_id" class="custom-select" id="payment-method-id">
                                        @if($order->payment_method_id == 1)
                                        <option value="1" {{'selected'}}>Thanh toán trực tiếp</option>
                                        <option value="2" disabled>Thanh toán khi giao hàng</option>
                                        @else
                                        <option value="1" disabled>Thanh toán trực tiếp</option>
                                        <option value="2" {{'selected'}}>Thanh toán khi giao hàng</option>
                                        @endif
                                    </select>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-fluid">
                    <div class="card-body">
                        <h5 class="card-title">NHÂN VIÊN PHỤ TRÁCH </h5>
                        <div class="form-group">
                            <select name="type" class="custom-select" id="type" disabled>
                                <option>{{ $staff->name }}</option>
                            </select>
                        </div>
                        <h5 class="card-title">THÔNG TIN XUẤT HÀNG</h5>
                        <div class="form-group">
                            <label for="type">Loại xuất</label>
                            <select name="type" class="custom-select" id="type">
                                @if($order->type == 'SaleProduct')
                                <option value="SaleProduct" {{'selected'}}>Bán Hàng</option>
                                <option value="Guarantee" disabled>Bảo Hành</option>
                                @else
                                <option value="SaleProduct" disabled>Bán Hàng</option>
                                <option value="Guarantee" {{'selected'}}>Bảo Hành</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="warehouse-id">Xuất từ kho hàng</label>
                            <select name="warehouse_id" class="custom-select" id="warehouse-id">
                                @foreach($warehouses as $warehouse)
                                <option value="{{ $warehouse->id }}" @if($order->warehouse_id == $warehouse->id)
                                    {{'selected'}}
                                    @else
                                    {{'disabled'}}
                                    @endif
                                    >{{ $warehouse->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="source-id">Nguồn đơn hàng</label>
                            <select name="source_id" class="custom-select" id="source-id">
                                @foreach($source_id as $key => $source_id_item)
                                <option value="{{$key}}" <?= ($order->source_id == $key) ? 'selected' : 'disabled' ?>>{{$source_id_item}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <h5 class="card-title">KHÁCH HÀNG</h5>
                        <div class="form-group">
                            <label for="customer_name">Tên khách hàng</label>
                            <input readonly="readonly" type="text" name="customer_name" class="form-control"
                                maxlength="255" value="{{$order->customer_name}}" id="customer_name" required />
                        </div>
                        <div class="form-group">
                            <label for="customer_phone">Số điện thoại</label>
                            <input readonly="readonly" type="tel" name="customer_phone" class="form-control"
                                maxlength="255" value="{{$order->customer_phone}}" id="customer_phone" required />
                        </div>
                        <div class="form-group">
                            <label for="customer_birthday">Ngày sinh</label>
                            <input readonly="readonly" type="date" name="customer_birthday" class="form-control"
                                autocomplete="off" value="{{$order->customer_birthday}}" data-mask="date"
                                id="customer_birthday" value="" />
                        </div>
                        <div class="form-group">
                            <label for="customer_address">Địa chỉ</label>
                            <input readonly="readonly" type="text" name="customer_address" class="form-control"
                                maxlength="255" value="{{$order->customer_address}}" id="customer_address" />
                        </div>
                        <div class="form-group">
                            <label for="customer_email">Email</label>
                            <input readonly="readonly" type="email" name="customer_email" class="form-control"
                                maxlength="255" value="{{$order->customer_email}}" id="customer_email" value="" />
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <div class="form-group">
                            <label for="order-status">Trạng thái đơn hàng</label>
                            <select name="order_status" class="form-control" id="order-status">
                                @foreach($order_status as $key => $order_status_item)
                                <option value="{{$key}}" <?= ($order->order_status == $key) ? 'selected' : 'disabled' ?>>{{$order_status_item}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- /.page-section -->
</div>

@endsection
@section('script_footer')
<script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script type="text/javascript">
var ajax_product_url = '<?= route('orders_ajax.getProducts', 1);?>';
</script>
<script src="{{ asset('assets/javascript/pages/datatables-demo.js') }}"></script>
<script>
jQuery(document).ready(function() {
    setTimeout(function() {
        jQuery('#stacked-menu').addClass('stacked-menu-has-compact');
        jQuery('div.app').addClass('has-compact-menu');
    }, 500);

    jQuery('#insert-products').on('click', function() {
        var selectedRows = jQuery('input[name="selectedRow[]"]:checked');
        if (selectedRows.length > 0) {
            jQuery.each(selectedRows, function(key, val) {
                var obj = jQuery(val);
                var id = jQuery(val).val();
                var name = obj.closest('tr').find('.f-name').text();
                var sku = obj.closest('tr').find('.f-sku').text();
                var collection_id = obj.closest('tr').find('.f-collection_id').text();
                var price = obj.closest('tr').find('.f-price').text();
                var price_value = price.replace(/,/g, '');
                var inventory = obj.closest('tr').find('.f-inventory').text();
                var xhtml = '';
                xhtml += '<tr class="price-item price-item-id-' + id + '">';
                xhtml += '<td class="align-middle">';
                xhtml += name + ' <br><small>(' + sku + ')</small>';
                xhtml += '</td>';

                xhtml += '<td class="align-middle">';
                xhtml += '<input name="order_items[' + id +
                    '][qty]" type="text" value="1" class="qty text-center" >';
                xhtml += '</td>';
                xhtml += '<td class="align-middle">';
                xhtml +=
                    '<input type="text" class="price form-control form-control-txt p-price-value" autocomplete="off"  name="order_items[' +
                    id + '][price]" value="' + price_value + '">';
                xhtml += '<input type="hidden" class="price p-price-org"   value="' +
                    price_value + '">';
                xhtml += '<input type="hidden" class="price p-subtotal-value"   value="' +
                    price_value + '">';
                xhtml +=
                    '<p class="text-danger" style=""><small class="p-price-discounted">Đã giảm : 0</small></p>';
                xhtml += '</td>';
                xhtml += '<td class="p-subtotal align-middle">' + price + '</td>';
                xhtml += '<td class="text-center align-middle">';
                xhtml += '<a href="javascript:;" class="text-danger delete-tr-product">';
                xhtml += '<i class="far fa-trash-alt"></i>';
                xhtml += '</a>';
                xhtml += '</td>';
                xhtml += '</tr>';

                if (jQuery('#fixed_products_results').find('.price-item-product_id-' + id)
                    .length == 0) {
                    jQuery('#fixed_products_results').append(xhtml);
                    //jQuery('.price').number( true );
                }
            });
        }

        //close modal
        jQuery('#modal-products').modal('hide');
    });
    $('.livesearch').select2({
        placeholder: 'Chọn khách hàng trong hệ thống',
        ajax: {
            url: '/orders_ajax/getCustomers',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        },
    });
    $('.livesearch').on('select2:select', function(e) {
        var data = e.params.data;
        call_ajax(data.id);
    });

    function call_ajax(customer_id) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //xử lý khi gọi ajax xong
                let return_data = JSON.parse(xhttp.responseText);
                console.log(return_data);
                //điền vào tên
                document.getElementById('customer_name').value = return_data.name;
                //điền vào địa chỉ
                document.getElementById('customer_address').value = return_data.address;

                document.getElementById('customer_phone').value = return_data.phone;

                document.getElementById('customer_birthday').value = return_data.birthday;

                document.getElementById('customer_email').value = return_data.email;
            }
        };
        xhttp.open("GET", "{{ url('/') }}/orders_ajax/get?id=" + customer_id, true);
        xhttp.send();
    }

});
</script>
@endsection