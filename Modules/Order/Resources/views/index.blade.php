@extends('layouts.master')
@section('content')
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
                                @include('order::elements.form-search')
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
                                    @if(count($orders))
                                    @foreach($orders as $order)
                                    <tr class="r-badge-warning">
                                        <td class="align-middle col-checker">
                                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="selectedRow[]"
                                                    id="{{ $order->id }}"> <label class="custom-control-label" for="{{ $order->id }}"></label>
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
                                    @else
                                    <tr>
                                        <td style="text-align:center" colspan="6">
                                            Không tìm thấy kết quả
                                        </td>
                                    </tr>
                                    @endif
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
<<<<<<< HEAD
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
=======
            <!-- /.page-section -->
  
>>>>>>> 711ee5c27681008823c1429717ced706dd045a48
@endsection