@extends('layouts.master')
@section('content')
<header class="page-title-bar">
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
                    @include('order::elements.form-ordering')
                </div>
            </div>
            <!-- .table-responsive -->
                <div class="text-muted"> Trang {{ $orders->currentPage() }}/{{ $orders->lastPage() }}, đang xem 
                {{$orders->count()}}/{{ $orders->total() }} kết quả </div>

            <div class="table-responsive">
                <!-- .table -->
                <table class="table">
                    <!-- thead -->
                    <thead>
                        <tr>
                            <th colspan="2">

                                <div class="thead-dd dropdown">
                                    <span class="custom-control custom-control-nolabel custom-checkbox"><input
                                            type="checkbox" class="custom-control-input" id="check-handle">
                                        <label class="custom-control-label" for="check-handle"></label></span>
                                    <div class="thead-btn" role="button" id="bulk-actions" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
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
                            <th>Ngày tạo</th>
                            <th>Tổng tiền</th>
                            <th>Đã trả</th>
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
                                        id="{{ $order->id }}"> <label class="custom-control-label"
                                        for="{{ $order->id }}"></label>
                                </div>
                            </td>

                            <td>
                                <a href="{{ route('order.show', $order->id) }}" class="btn-account" role="button"
                                    style="max-width:320px">
                                    <span class="account-summary">
                                        <span class="account-name text-truncate">
                                            <strong>#{{ str_replace('/', '', date_format($order->created_at, 'd/m/Y')) }}_{{$order->id}} - {{ $order->customer_name }}</strong>
                                        </span>
                                        <span class="account-description">
                                            <span class="text-dark">
                                                <?php if($order->order_status == 1){
                                                    echo "<span style='color:#346cb0'>Khả dụng</span> - $order->customer_phone";
                                                }else{
                                                    echo "<span style='color:#b76ba3'>Không khả dụng</span> - $order->customer_phone";
                                                }
                                                ?>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </td>

                            <td class="align-middle">{{ $order->created_at }}</td>


                            <td class="align-middle">{{ number_format($order->sub_total) }} ₫</td>

                            <td class="align-middle">{{ number_format($order->paid) }} ₫</td>
                            <td class="align-middle text-right">
                                <a title="Chi tiết" class="btn btn-sm btn-icon btn-secondary"
                                    href="{{ route('order.show', $order->id) }}">
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
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection