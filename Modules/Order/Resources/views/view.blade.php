@extends('layouts.master')
@section('content')

                <header class="page-title-bar">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                <a href="#">
                                    <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Forms</a>
                            </li>
                        </ol>
                    </nav>
                    <div class="d-md-flex align-items-md-start">
                        <h1 class="page-title mr-sm-auto"> Xem đơn hàng </h1>
                        <!-- .btn-toolbar -->
                        <div class="btn-toolbar">
                            <button type="button" class="btn btn-danger save_canceled" style="margin-right: 10px">HỦY
                                ĐƠN</button>
                            <button type="button" class="btn btn-warning" style="margin-right: 10px">CẬP NHẬT</button>
                            <button type="button" class="btn btn-secondary" onclick="window.history.go(-1); return false;">TRỞ VỀ</button>
                        </div>
                    </div>
                </header>
                <!-- /.page-title-bar -->
                <!-- .page-section -->
                <form method="post" accept-charset="utf-8" id="main-form" action="/cms/orders/view/7545">
                    <div style="display:none;"><input type="hidden" name="_method" value="PUT" /><input type="hidden"
                            name="_csrfToken" autocomplete="off"
                            value="95817fe0b6595ebce7a53b6b3d049b7cd3d6fb8b063203203478300fdf58b996e7d95aa7a33f6b44a50c0f08faea93891e6400e66fa11a4c34d26d031abb9e54" />
                    </div>
                    <div class="page-section">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card card-fluid">
                                    <div class="card-header border-0">
                                        <h5 class="card-title">THÔNG TIN ĐƠN HÀNG</h5>
                                        <p>Mã đơn hàng: {{ $order->id }}, Ngày tạo: {{ $order->created_at }}</p>
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
                                                    </tr>
                                                </thead>
                                                <tbody id="fixed_products_results">
                                                    <tr class="price-item price-item-id-3681" data-id="3681">
                                                        <td class="align-middle">
                                                            <span class="p-name">
                                                                <strong>{{ $order->customer_name }}</strong>
                                                            </span>
                                                            <div class="notes">
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                        {{ $order->product_quantity }} </td>
                                                        <td class="align-middle">
                                                            324,000 <p class="text-danger" style="">
                                                                <small class="p-price-discounted">
                                                                    Đã giảm

                                                                    36,000 </small>
                                                            </p>
                                                        </td>
                                                        <td class="p-subtotal align-middle">
                                                            324,000 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="publisher keep-focus focus active">
                                                    <label for="order-note" class="text-bold">Ghi chú</label>
                                                    <!-- .publisher-input -->
                                                    <div class="publisher-input">
                                                        354816/55/162006/6 </div><!-- /.publisher-input -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <table class="table-normal table-none-border table-color-gray-text">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-right color-subtext">Tổng giá trị sản phẩm
                                                            </td>
                                                            <td class="text-right pl10">
                                                                324,000 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right color-subtext">
                                                                Khuyến mãi
                                                                <div id="discounted-msg">
                                                                </div>
                                                            </td>
                                                            <td class="text-right pl20">
                                                                0 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right color-subtext mt10">
                                                                Chi phí vận chuyển
                                                            </td>
                                                            <td class="text-right p-none-b pl10 ">
                                                                0 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right color-subtext mt10">
                                                                Số tiền phải thanh toán
                                                            </td>
                                                            <td class="text-right p-none-b pl10">
                                                                324,000 </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                        jQuery(document).ready(function() {
                                            jQuery('.price').number(true);
                                        });
                                        </script>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-block">
                                                    <h2 class="section-title"> LỊCH SỬ ĐƠN HÀNG</h2>
                                                </div>
                                                <div class="section-block">
                                                    <div class="media">
                                                        <figure class="user-avatar user-avatar-md mr-2">
                                                            <img src="http://crm.tamit.online/upload/not-found.png"
                                                                alt="">
                                                        </figure><!-- .media-body -->
                                                        <div class="media-body">
                                                            <!-- .publisher -->
                                                            <div class="publisher">
                                                                <label for="order_history_content"
                                                                    class="publisher-label">Bạn đang nhập ghi
                                                                    chú</label> <!-- .publisher-input -->
                                                                <div class="publisher-input">
                                                                    <textarea id="order_history_content"
                                                                        class="form-control"
                                                                        placeholder="Thêm nội dung ghi chú"></textarea>
                                                                </div><!-- /.publisher-input -->
                                                                <!-- .publisher-actions -->
                                                                <div class="publisher-actions">
                                                                    <!-- .publisher-tools -->
                                                                    <div class="publisher-tools mr-auto">

                                                                    </div><!-- /.publisher-tools -->
                                                                    <button type="button" id="add-history"
                                                                        class="btn btn-primary">Lưu</button>
                                                                </div><!-- /.publisher-actions -->
                                                            </div><!-- /.publisher -->
                                                        </div><!-- /.media-body -->
                                                    </div>
                                                </div>
                                                <div class="section-block">
                                                    <ul class="timeline">
                                                </div>

                                                <script type="text/javascript">
                                                jQuery(document).ready(function() {
                                                    jQuery('#add-history').on('click', function() {
                                                        var order_history_content = jQuery(
                                                            '#order_history_content').val();
                                                        if (order_history_content.length == 0) {
                                                            alert(
                                                                'Vui lòng nhập nội dung ghi chú !');
                                                            return false;
                                                        }
                                                        var action_name = 'add_order_history';
                                                        var ajax_data = {
                                                            action: action_name,
                                                            content: order_history_content,
                                                            item_id: 7545,
                                                        };
                                                        jQuery.ajax({
                                                            url: root_url + 'ajax/' +
                                                                action_name,
                                                            type: 'POST',
                                                            dataType: 'json',
                                                            cache: false,
                                                            headers: {
                                                                "X-CSRF-Token": csrfToken
                                                            },
                                                            data: ajax_data,
                                                            success: function(response) {
                                                                if (response.status == 1) {
                                                                    location.reload();
                                                                }

                                                            }
                                                        });

                                                    });
                                                });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-fluid">
                                    <div class="card-body border-top">
                                        <h5 class="card-title">KHÁCH HÀNG</h5>
                                        <div class="form-group">
                                            <label>Khách hàng trên hệ thống</label>
                                            <p class="form-control-static text-bold">
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <label>Tên khách hàng</label>
                                            <p class="form-control-static text-bold">
                                                Anh Ken </p>
                                        </div>
                                        <div class="form-group">
                                            <label>Số điện thoại</label>
                                            <p class="form-control-static text-bold">
                                                0345567369 </p>
                                        </div>
                                        <div class="form-group">
                                            <label>Địa chỉ</label>
                                            <p class="form-control-static text-bold">
                                                Quận 8 </p>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <p class="form-control-static text-bold">
                                                khongdungmail@gmail.com </p>
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