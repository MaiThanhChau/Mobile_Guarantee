@extends('layouts.master')
@section('content')
<header class="page-title-bar">

    <!-- title and toolbar -->
    <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto"> Chi tiết tồn kho </h1>
        <!-- .btn-toolbar -->
        <div class="btn-toolbar">
            <form name="pos_export" action="{{ route('inventory_export') }}" method="GET">
          <input type="hidden" name="cr_controller" value="inventorydetails">
          <input type="hidden" name="cr_action" value="index">
                  </form>
            <a class="btn btn-primary" onclick="if(confirm('Bạn sẽ xuất với cấu hình lọc hiện tại ?')){ document.pos_export.submit(); } event.returnValue = false; return false;">
                <span style="color:white">Xuất file</span>
            </a>
            <!-- /.btn-toolbar -->
        </div>
        <!-- /title and toolbar -->
</header>
<!-- /.page-title-bar -->
<!-- .page-section -->
<div class="page-section">
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show mb-2">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ Session::get('success')}}
    </div>
    @endif
    <!-- .card -->
    <section class="card card-fluid">
        <!-- .card-header -->
        <header class="card-header">
            <!-- .nav-tabs -->
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active show" data-toggle="tab" href="{{ route('inventorydetails.index') }}">Tất cả</a>
                </li>
            </ul>
            <!-- /.nav-tabs -->
        </header>
        <!-- /.card-header -->
        <!-- .card-body -->
        <div class="card-body">
            <!-- .form-group -->
            <div class="form-group">
                <div class="row mb-2">
                    <div class="col">
                        @include('inventorydetails::elements.form-search')
                    </div>
                    <div class="col-auto d-none d-sm-flex">
                        @include('inventorydetails::elements.form-ordering')
                    </div>
                </div>
                <!-- .table-responsive -->
                <div class="text-muted"> Trang {{ $inventory_details->currentPage() }}/{{ $inventory_details->lastPage() }}, đang xem
                    {{$inventory_details->count()}}/{{ $inventory_details->total() }} kết quả </div>
                <div class="table-responsive">
                    <!-- .table -->
                    <table class="table">
                        <!-- thead -->
                        <thead>
                            <tr>
                                <th colspan="2" style="min-width:320px">
                                    <div class="thead-dd dropdown">
                                        <span class="custom-control custom-control-nolabel custom-checkbox"><input
                                                type="checkbox" class="custom-control-input" id="check-handle"> <label
                                                class="custom-control-label" for="check-handle"></label></span>
                                        <div class="thead-btn" role="button" id="bulk-actions" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span class="fa fa-caret-down"></span>
                                        </div>
                                        <div class="dropdown-menu" aria-labelledby="bulk-actions">
                                            <div class="dropdown-arrow"></div>
                                            <a class="dropdown-item" href="javascript:;">Action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" data-action="delete" href="javascript:;">Xóa</a>
                                        </div>
                                    </div>
                                </th>
                                <th> Tồn kho </th>
                                <th> Giá nhập </th>
                                <th> Tổng </th>
                            </tr>
                        </thead>
                        <!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                            <!-- tr -->
                            @if(count($inventory_details))
                            @foreach($inventory_details as $inventory_detail)
                            <tr>
                                <td class="align-middle col-checker">
                                    <div class="custom-control custom-control-nolabel custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="selectedRow[]"
                                            id="p3">
                                        <label class="custom-control-label" for="p3"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <a class="btn-account">
                                        <span class="account-summary">
                                            <span class="account-name text-truncate">
                                                <strong> #{{ $inventory_detail->id }} - {{ $inventory_detail->name }}</strong>
                                            </span>
                                            <span class="account-description">
                                                <span class="text-success">{{ $inventory_detail->code }}</span>
                                                <p style="color:blue">{{$inventory_detail->w_name}}</p>
                                            </span>
                                        </span>
                                    </a>
                                </td>
                                <td class="align-middle">{{$inventory_detail->available_quantity}}</td>
                                <td class="align-middle">{{number_format($inventory_detail->buy_price)}}<sup>đ</sup></td>
                                <td class="align-middle">{{number_format($inventory_detail->available_quantity*$inventory_detail->buy_price)}}<sup>đ</sup></td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td style="text-align:center" colspan="6">
                                    Không tìm thấy kết quả
                                </td>
                            </tr>
                            @endif
                            <!-- /tr -->

                        </tbody>
                        <!-- /tbody -->
                    </table>
                    <!-- /.table -->
                </div>
                <!-- /.table-responsive -->
                <!-- .pagination -->
                <div class="pagination justify-content-center mt-4">
                    {{ $inventory_details->links() }}
                </div>
                <!-- /.pagination -->
            </div>
            <!-- /.card-body -->
    </section>
    <!-- /.card -->
</div>
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection