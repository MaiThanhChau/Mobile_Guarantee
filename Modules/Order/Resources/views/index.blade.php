@extends('layout.admin.app')

@section('content')

<main class="app-main">
    <!-- .wrapper -->
    <div class="wrapper">
        <!-- .page -->
        <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
                <!-- .page-title-bar -->
                <header class="page-title-bar">
                    <!-- .breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                <a href="#">
                                    <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Tables</a>
                            </li>
                        </ol>
                    </nav>
                    <!-- /.breadcrumb -->
                    <!-- title and toolbar -->
                    <div class="d-md-flex align-orders-md-start">
                        <h1 class="page-title mr-sm-auto"> Đơn hàng </h1>
                        <!-- .btn-toolbar -->
                        <div class="btn-toolbar">
                            <a href="{{ route('order.create') }}">
                                <button type="button" class="btn btn-primary">Thêm mới</button>
                            </a>
                        </div>
                    </div>
                    <!-- /.btn-toolbar -->
            </div>
            <!-- /title and toolbar -->
            </header>
            <!-- /.page-title-bar -->
            <!-- .page-section -->
            <!-- .page-section -->
            <div class="page-section">
                <!-- .card -->
                <div class="card card-fluid">
                    <!-- .card-header -->
                    <div class="card-header">
                        <!-- .nav-tabs -->
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active show" href="{{ route('order.index') }}">
                                    Tất cả
                                </a>
                            </li>
                        </ul><!-- /.nav-tabs -->
                    </div><!-- /.card-header -->
                    <!-- .card-body -->
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col">
                                <form action="{{ route('order.index') }}" method="GET" id="form-search">
                                    @csrf
                                    <input type="hidden" name="sort" value="">
                                    <input type="hidden" name="direction" value="desc">
                                    <div class="input-group input-group-alt">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-secondary" type="button" data-toggle="modal"
                                                data-target="#modalFilterColumns">Tìm nâng cao</button>
                                        </div>
                                        <div class="input-group has-clearable">
                                            <button type="button" class="close trigger-submit trigger-submit-delay"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
                                            </button>
                                            <div class="input-group-prepend trigger-submit">
                                                <span class="input-group-text"><span
                                                        class="fas fa-search"></span></span>
                                            </div>
                                            <input type="text" class="form-control" name="search" value=""
                                                placeholder="Tìm nhanh theo cú pháp (ma:Mã kết quả hoặc ten:Tên kết quả)">
                                        </div>
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" data-toggle="modal"
                                                data-target="#modalSaveSearch" type="button">Lưu bộ lọc</button>
                                        </div>
                                    </div>
                                    <!-- #modalFilterColumns -->
                                    <div class="modal fade" id="modalFilterColumns" tabindex="-1" role="dialog"
                                        aria-labelledby="modalFilterColumnsLabel" aria-hidden="true">
                                        <!-- .modal-dialog -->
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <!-- .modal-content -->
                                            <div class="modal-content">
                                                <!-- .modal-header -->
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalFilterColumnsLabel"> Lọc nâng cao
                                                    </h5>
                                                </div><!-- /.modal-header -->
                                                <!-- .modal-body -->
                                                <div class="modal-body">
                                                    <!-- #filter-columns -->
                                                    <div id="filter-columns">
                                                        <!-- .form-row -->
                                                        <div class="form-group form-row filter-row">
                                                            <div class="col-lg-4">
                                                                <label class="">Loại Đơn</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="input select"><select name="filter[type]"
                                                                        class="form-control custom-select f-type"
                                                                        id="type">
                                                                        <option value="">Tất cả</option>
                                                                        <option value="SaleProduct">Bán Hàng</option>
                                                                        <option value="Guarantee">Bảo Hành</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-row filter-row">
                                                            <div class="col-lg-4">
                                                                <label class="">Hình thức thanh toán</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="input select"><select
                                                                        name="filter[type_payment]"
                                                                        class="form-control custom-select f-bank"
                                                                        id="type-payment">
                                                                        <option value="">Tất cả</option>
                                                                        <option value="cash">Tiền mặt</option>
                                                                        <option value="bank">Chuyển khoản</option>
                                                                        <option value="card">Thẻ</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-row filter-row r-payment t-bank"
                                                            style="display: none;">
                                                            <div class="col-lg-4">
                                                                <label class="">Ngân Hàng</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="input select"><select
                                                                        name="filter[pay_via_bank_id]"
                                                                        class="form-control custom-select f-pay_via_bank_id"
                                                                        id="pay-via-bank-id">
                                                                        <option value="">Tất cả</option>
                                                                        <option value="1">VietinBank - 104867866273
                                                                        </option>
                                                                        <option value="2">Techcombank - 19027720265024
                                                                        </option>
                                                                        <option value="3">VietinBank - 104867866273
                                                                        </option>
                                                                        <option value="5">VIB - 646704060041666</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-row filter-row r-payment t-card"
                                                            style="display: none;">
                                                            <div class="col-lg-4">
                                                                <label class="">Thẻ</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="input select"><select
                                                                        name="filter[pay_via_card_id]"
                                                                        class="form-control custom-select f-pay_via_card_id"
                                                                        id="pay-via-card-id">
                                                                        <option value="">Tất cả</option>
                                                                        <option value="1">VietinBank - 104867866273
                                                                        </option>
                                                                        <option value="2">Techcombank - 19027720265024
                                                                        </option>
                                                                        <option value="3">VietinBank - 104867866273
                                                                        </option>
                                                                        <option value="5">VIB - 646704060041666</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-row filter-row">
                                                            <div class="col-lg-4">
                                                                <label class="">Tên khách hàng</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="input text"><input type="text"
                                                                        name="filter[name]" class="form-control f-name"
                                                                        id="name" /></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-row filter-row">
                                                            <div class="col-lg-4">
                                                                <label class="">Số điện thoại</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="input tel"><input type="tel"
                                                                        name="filter[phone]"
                                                                        class="form-control f-phone" id="phone" /></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-row filter-row">
                                                            <div class="col-lg-4">
                                                                <label class="">Chi Nhánh</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="input select"><select
                                                                        name="filter[warehouse_id]"
                                                                        class="form-control custom-select  f-warehouse_id"
                                                                        id="warehouse-id">
                                                                        <option value="">Tất cả</option>
                                                                        <option value="1">Chi Nhánh Q1</option>
                                                                        <option value="2">Chi Nhánh Phú Nhuận</option>
                                                                        <option value="8">Kho Tổng</option>
                                                                        <option value="9">Kho Lỗi</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-row filter-row">
                                                            <div class="col-lg-4">
                                                                <label class="">Thẻ đơn hàng</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="input select"><select name="filter[tags]"
                                                                        class="form-control custom-select f-tags"
                                                                        id="tags">
                                                                        <option value="">Tất cả</option>
                                                                        <option value="1">Thẻ 1</option>
                                                                        <option value="2">Thẻ 2</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-row filter-row">
                                                            <div class="col-lg-4">
                                                                <label class="">Thời gian</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input id="report_time" type="text"
                                                                    name="filter[report_time]"
                                                                    class="form-control f-report_time"
                                                                    data-toggle="flatpickr" data-mode="range"
                                                                    data-date-format="d-m-Y" data-default-dates='""'
                                                                    value="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-row filter-row">
                                                            <div class="col-lg-4">
                                                                <label class="">Trạng thái xuất kho</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="input select"><select
                                                                        name="filter[string_status]"
                                                                        class="form-control custom-select f-string_status"
                                                                        id="string-status">
                                                                        <option value="">Tất cả</option>
                                                                        <option value="draft">Chưa tạo</option>
                                                                        <option value="request">Chưa Yêu Cầu</option>
                                                                        <option value="completed">Đã Yêu Cầu</option>
                                                                        <option value="exported">Đã Xuất</option>
                                                                        <option value="canceled">Đã Hủy</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div><!-- #filter-columns -->
                                                    <!-- .btn -->
                                                </div><!-- /.modal-body -->
                                                <!-- .modal-footer -->
                                                <div class="modal-footer justify-content-start">
                                                    <button type="submit" class="btn btn-primary" id="apply-filter">Áp
                                                        dụng</button>
                                                    <button type="button" data-dismiss="modal" class="btn btn-light"
                                                        id="clear-filter">Hủy</button>
                                                </div><!-- /.modal-footer -->
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /#modalFilterColumns -->

                                    <script type="text/javascript">
                                    jQuery(document).ready(function() {
                                        jQuery('#type-payment').on('change', function() {
                                            var type_payment = jQuery(this).val();
                                            jQuery('.r-payment').hide();
                                            jQuery('.r-payment select').val('');
                                            jQuery('.r-payment select').trigger('change');

                                            jQuery('.r-payment.t-' + type_payment).show();
                                        });
                                    });
                                    </script> <!-- #modalFilterColumns -->
                                    <div class="modal fade" id="modalSaveSearch" tabindex="-1" role="dialog"
                                        aria-labelledby="modalSaveSearchLabel" aria-hidden="true">
                                        <!-- .modal-dialog -->
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <!-- .modal-content -->
                                            <div class="modal-content">
                                                <!-- .modal-header -->
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalSaveSearchLabel"> Lưu kết quả
                                                    </h5>
                                                </div><!-- /.modal-header -->
                                                <!-- .modal-body -->
                                                <div class="modal-body">
                                                    <!-- #filter-columns -->
                                                    <div id="search-columns">
                                                        <!-- .form-row -->

                                                        <div class="form-group ">
                                                            <label class="">Tên</label>
                                                            <div class="input text"><input type="text"
                                                                    name="name-search" class="form-control"
                                                                    id="name-search" /></div>
                                                        </div>

                                                    </div><!-- #filter-columns -->
                                                    <!-- .btn -->
                                                </div><!-- /.modal-body -->
                                                <!-- .modal-footer -->
                                                <div class="modal-footer justify-content-start">
                                                    <button type="button" class="btn btn-primary" id="save-filter">Áp
                                                        dụng</button>
                                                    <button type="button" data-dismiss="modal" class="btn btn-light"
                                                        id="clear-filter">Hủy</button>
                                                </div><!-- /.modal-footer -->
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /#modalFilterColumns -->
                                </form>
                            </div>
                            <div class="col-auto d-none d-sm-flex">
                                <div class="dropdown" id="header-ordering">
                                    <button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"> Tùy biến <span
                                            class="fa fa-caret-down"></span></button> <!-- .dropdown-menu -->
                                    <div class="dropdown-menu dropdown-menu-right stop-propagation">
                                        <div class="dropdown-arrow"></div>
                                        <h6 class="dropdown-header"> Sắp xếp </h6>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="sort" value="id">

                                            <span class="custom-control-label">
                                                Mặc định
                                                <!--span class="text-muted">(Decs)</span-->
                                            </span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="sort" value="title">

                                            <span class="custom-control-label">
                                                Tên
                                                <!--span class="text-muted">(Decs)</span-->
                                            </span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="sort"
                                                value="created">

                                            <span class="custom-control-label">
                                                Ngày tạo
                                                <!--span class="text-muted">(Decs)</span-->
                                            </span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="sort"
                                                value="ordering">

                                            <span class="custom-control-label">
                                                Sắp xếp
                                                <!--span class="text-muted">(Decs)</span-->
                                            </span>
                                        </label>
                                    </div><!-- /.dropdown-menu -->
                                </div><!-- /.dropdown -->
                            </div>
                        </div>
                        <!-- .table-responsive -->
                        <div class="text-muted"> Trang {{ $orders->currentPage() }}/{{ $orders->lastPage() }}, tổng
                            {{ $orders->total() }} kết quả </div>


                        <div class="table-responsive">
                            <!-- .table -->
                            <table class="table">
                                <!-- thead -->
                                <thead>
                                    <tr>
                                        <th colspan="2">

                                            <div class="thead-dd dropdown">
                                                <span
                                                    class="custom-control custom-control-nolabel custom-checkbox"><input
                                                        type="checkbox" class="custom-control-input" id="check-handle">
                                                    <label class="custom-control-label"
                                                        for="check-handle"></label></span>
                                                <div class="thead-btn" role="button" id="bulk-actions"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fa fa-caret-down"></span>
                                                </div>
                                                <div class="dropdown-menu" aria-labelledby="bulk-actions">
                                                    <div class="dropdown-arrow"></div>
                                                    <a class="dropdown-item" href="javascript:;">Chọn kênh bán
                                                        hàng</a>
                                                    <a class="dropdown-item" href="javascript:;">Ẩn kênh bán hàng</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:;">Xóa</a>
                                                </div>
                                            </div>
                                        </th>

                                        <th><a href="/cms/orders/index/orders?sort=created&amp;direction=asc">Ngày
                                                tạo</a>
                                        </th>

                                        <th><a href="/cms/orders/index/orders?sort=cart_total&amp;direction=asc">Tổng
                                                tiền</a>
                                        </th>
                                        <th><a href="/cms/orders/index/orders?sort=payment_cost&amp;direction=asc">Đã
                                                trả</a>
                                        </th>
                                        <th style="width:100px; min-width:100px;"> &nbsp; </th>
                                    </tr>
                                </thead><!-- /thead -->
                                <!-- tbody -->
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr class="r-badge-warning">
                                        <td class="align-middle col-checker">
                                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="selectedRow[]"
                                                    id="p7545"> <label class="custom-control-label" for="p7545"></label>
                                            </div>
                                        </td>

                                        <td>

                                            <a href="{{ route('order.view', $order->id) }}" class="btn-account"
                                                role="button" style="max-width:320px">
                                                <span class="account-summary">
                                                    <span class="account-name text-truncate">
                                                        <strong>{{ $order->customer_name }}</strong>
                                                    </span>
                                                </span>
                                            </a>
                                        </td>

                                        <td class="align-middle">{{ $order->created_at }}</td>


                                        <td class="align-middle">{{ $order->sub_total }}</td>

                                        <td class="align-middle">{{ $order->paid }}</td>
                                        <td class="align-middle text-right">
                                            <a title="Chi tiết" class="btn btn-sm btn-icon btn-secondary"
                                                href="{{ route('order.view', $order->id) }}">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody><!-- /tbody -->
                            </table><!-- /.table -->
                        </div><!-- /.table-responsive -->
                        <!-- .pagination -->
                        <div class="pagination justify-content-center mt-4">
                            {{ $orders->links() }}
                        </div>
                        <!-- /.pagination -->
                    </div><!-- /.card-body -->
                </div><!-- /.card -->

            </div>
            <!-- /.page-section -->
        </div>
        <!-- /.page-inner -->
    </div>
    <!-- /.page -->
    </div>
    <!-- /.wrapper -->
</main>
@endsection