@extends('layouts.master')
@section('content')
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
            <button type="button" class="btn btn-secondary" onclick="window.history.go(-1); return false;">TRỞ
                VỀ</button>
        </div>
    </div>
</header>
<!-- /.page-title-bar -->
<!-- .page-section -->
<form method="post" action="{{ route('order.store') }}">
    @csrf
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
                        <input type="hidden" name="guarantee_id" value="">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modal-products">
                                <i class="fa fa-plus"></i>
                                Thêm sản phẩm
                            </button>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modal-excel-products">
                                <i class="fa fa-plus"></i>
                                Nhập từ File Excel
                            </button>
                        </div>
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

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="publisher keep-focus focus active">
                                    <label for="order-note" class="publisher-label">Ghi chú</label>
                                    <!-- .publisher-input -->
                                    <div class="publisher-input">
                                        <textarea name="order_note" class="form-control"
                                            placeholder="Nhập ghi chú đơn hàng" id="order-note" rows="5"></textarea>
                                    </div><!-- /.publisher-input -->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <table class="table-normal table-none-border table-color-gray-text">
                                    <tbody>
                                        <tr>
                                            <td class="text-left color-subtext">Tổng giá trị sản phẩm</td>
                                            <td class="text-right pl10">
                                                <input type="number" name="cart_subtotal"
                                                    class="price form-control form-control-txt form-control-text cart_subtotal "
                                                    readonly="readonly" autocomplete="off" id="cart-subtotal"
                                                    />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left color-subtext">
                                                <a href="javascript:;" data-toggle="modal" class="hover-underline"
                                                    data-target=".add-discounts">
                                                    <i class="fa fa-plus-circle"></i>
                                                    Thêm khuyến mãi
                                                </a>
                                                <div id="discounted-msg">
                                                </div>
                                            </td>
                                            <td class="text-right pl20">
                                                <input type="number" name="discounted_value"
                                                    class="price form-control form-control-txt form-control-text discounted_value"
                                                    readonly="readonly" autocomplete="off" id="discounted-value"
                                                    />
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-left color-subtext mt10">
                                                Chi phí vận chuyển
                                            </td>
                                            <td class="text-right p-none-b pl10 ">
                                                <input type="number" name="transport_fee"
                                                    class="i-currency form-control form-control-txt cart_transport_fee"
                                                    autocomplete="off" data-mask="currency" id="transport_fee"
                                                    />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left color-subtext mt10">
                                                Số tiền phải thanh toán
                                            </td>
                                            <td class="text-right p-none-b pl10">
                                                <input type="number" name="cost_total"
                                                    class="price form-control form-control-txt form-control-text cost_total"
                                                    readonly="readonly" autocomplete="off" id="cart-total"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left color-subtext mt10">
                                                Khách thanh toán
                                            </td>
                                            <td class="text-right p-none-b pl10 ">
                                                <input type="number" name="paid"
                                                    class="i-currency form-control form-control-txt paid"
                                                    autocomplete="off" data-mask="currency" id="paid"
                                                    />
                                            </td>
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
                                        <option value="1">Bán hàng tại điểm</option>
                                        <option value="2">Chuyển cho khách</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="payment-method-id">Phương thức thanh toán</label><select
                                        name="payment_method_id" class="custom-select" id="payment-method-id">
                                        <option value="1">Thanh toán trực tiếp</option>
                                        <option value="2">Thanh toán khi giao hàng</option>
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
                                <option value="SaleProduct">Bán Hàng</option>
                                <option value="Guarantee">Bảo Hành</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="warehouse-id">Xuất từ kho hàng</label>
                            <select name="warehouse_id" class="custom-select" id="warehouse-id" onChange="changWarehouse(this.value);">
                                @foreach($warehouses as $warehouse)
                                <option 
                                <?= ($cr_warehouse_id == $warehouse->id ) ? 'selected' : '' ?>
                                value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="source-id">Nguồn đơn hàng</label>
                            <select name="source_id" class="custom-select" id="source-id">
                                @foreach($source_id as $key => $source_id_item)
                                <option value="{{$key}}">{{$source_id_item}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <h5 class="card-title">KHÁCH HÀNG</h5>
                        <div class="form-group">
                            <select class="livesearch form-control" style="width: 100%" name="livesearch"></select>
                        </div>
                        <div class="form-group">
                            <label for="customer_name">Tên khách hàng</label>
                            <input type="text" name="customer_name" class="form-control" maxlength="255"
                                id="customer_name" required />
                        </div>
                        <div class="form-group">
                            <label for="customer_phone">Số điện thoại</label>
                            <input type="tel" name="customer_phone" class="form-control" maxlength="255"
                                id="customer_phone" required />
                        </div>
                        <div class="form-group">
                            <label for="customer_birthday">Ngày sinh</label>
                            <input type="date" name="customer_birthday" class="form-control" autocomplete="off"
                                data-mask="date" id="customer_birthday" value="" />
                        </div>
                        <div class="form-group">
                            <label for="customer_address">Địa chỉ</label>
                            <input type="text" name="customer_address" class="form-control" maxlength="255"
                                id="customer_address" />
                        </div>
                        <div class="form-group">
                            <label for="customer_email">Email</label>
                            <input type="email" name="customer_email" class="form-control" maxlength="255"
                                id="customer_email" value="" />
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <div class="form-group">
                            <label for="order-status">Trạng thái đơn hàng</label>
                            <select name="order_status" class="form-control" id="order-status">
                                @foreach($order_status as $key => $order_status_item)
                                <option value="{{$key}}">{{$order_status_item}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- .form-actions -->
                        <div class="form-actions">
                            <button type="submit" name="save_draff" value="1" class="btn btn-warning">Tạo Đơn
                            </button>
                            <button type="submit" name="save_request" value="1" class="btn btn-info save_request"
                                onclick="return confirm('Một khi thực hiện hành động này bạn sẽ không thể thay đổi lại!')">Gửi
                                yêu cầu
                            </button>
                            <button type="submit" name="save_ok" value="1" class="btn btn-success save_request"
                                onclick="return confirm('Một khi thực hiện hành động này bạn sẽ không thể thay đổi lại!')">Xuất kho
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- /.page-section -->
</div>

@include('order::elements.modals.modalProduct')
@include('order::elements.modals.modalExcelProduct')
@include('order::elements.modals.modalDiscount')
@include('order::elements.modals.modalPayments')

@endsection
@section('script_footer')
<script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<!-- <script src="{{ asset('assets/vendor/datatables/extensions/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/extensions/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/extensions/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/extensions/buttons/buttons.bootstrap4.min.js') }}"></script>  -->

<!-- <script src="{{ asset('assets/javascript/pages/dataTables.bootstrap.js') }}"></script> -->

<script type="text/javascript">
function changWarehouse( warehouse_id ){
    let cr_url = '<?= route('order.create');?>?warehouse_id='+warehouse_id;
    window.location.href = cr_url;
}
var ajax_product_url = '<?= route('orders_ajax.getProducts',$cr_warehouse_id);?>';
</script>
<script src="{{ asset('assets/javascript/pages/datatables-demo.js') }}"></script>
<!-- END PAGE LEVEL JS -->
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