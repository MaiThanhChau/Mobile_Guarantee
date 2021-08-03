@extends('layouts.master')
@section('content')
<header class="page-title-bar">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="{{ route('importwarehouses.index') }}">
                    <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Nhập kho</a>
            </li>
        </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto"> Sửa nhập khó </h1>
        <!-- .btn-toolbar -->
        <form method="post" action="{{ route('importwarehouses.update', $item->id) }}">
            @csrf
            @method('PUT')
            <div class="btn-toolbar">
                @if($item->status == 'save_request')
                <button class="btn btn-success save_ok" style="margin-right: 5px" name="save_ok_2" value="1" onclick="return confirm('Một khi thực hiện hành động này bạn sẽ không thể thay đổi lại!')">
                    <i class="fa fa-check"></i> DUYỆT PHIẾU
                </button>

                <button class="btn btn-danger save_canceled" style="margin-right: 5px" name="save_canceled" value="1" onclick="return confirm('Một khi thực hiện hành động này bạn sẽ không thể thay đổi lại!')">
                    <i class="fa fa-trash"></i> HỦY PHIẾU
                </button>
                @endif
                <button type="button" class="btn btn-secondary" onclick="window.history.go(-1); return false;">
                    TRỞ VỀ
                </button>
            </div>
        </form>
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
                    <input type="hidden" name="guarantee_id" value="">
                    <div class="table-responsive mg-top-15">
                        <table class="table table-colored table-inverse table-hover">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th style="width: 150px;">Số lượng</th>
                                </tr>
                            </thead>
                            <tbody id="fixed_products_results">
                                @foreach($item->products as $product)
                                <tr>
                                    <td class="align-middle">
                                        {{$product->name}} <br>
                                        <span>({{$product->sku}})</span>
                                    </td>
                                    <td class="align-middle"> {{$product->pivot->quantity}} </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="publisher keep-focus focus active">
                                <label for="order-note" class="publisher-label">Lý do nhập</label>
                                <!-- .publisher-input -->
                                <div class="publisher-input">
                                    {{$item->note}}
                                </div><!-- /.publisher-input -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-fluid">
                <div class="card-body">
                    <h5 class="card-title">THÔNG TIN NHẬP HÀNG</h5>
                    <div class="form-group">
                        <strong><label for="type">Loại nhập</label></strong>
                        <div>
                            @if($item->type == 'NewProduct')
                            Sản phẩm mới
                            @else
                            Mua từ NCC
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <strong><label for="warehouse-id">Nhập vào kho hàng</label></strong>
                        <div>
                            {{$item->warehouse->name}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
var ajax_product_url = '<?= route('orders_ajax.getProducts');?>';
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