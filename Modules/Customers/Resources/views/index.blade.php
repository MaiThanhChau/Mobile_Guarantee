@extends('layouts.master')
@section('content')
<header class="page-title-bar">
    <div class="d-flex justify-content-between">
        <h1 class="page-title">Quản Lý Khách Hàng</h1>
        <div class="btn-toolbar">
            <a href="{{ route('customers.create') }}" class="btn btn-primary">Thêm mới</a>
        </div>
    </div>
</header>
<div class="page-section">
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show mb-2">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ Session::get('success')}}
    </div>
    @endif

    <!-- .card -->
    <div class="card card-fluid">


        <!-- .card-header -->
        <div class="card-header">
            <!-- .nav-tabs -->
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active show" href="{{ route('customers.index') }}"> Tất cả </a>
                </li>
            </ul>
            <!-- /.nav-tabs -->
        </div>
        <!-- /.card-header -->
        <!-- .card-body -->
        <div class="card-body">
            <div class="row mb-2">
                <div class="col">
                    @include('customers::elements.form-search')
                </div>
                <div class="col-auto d-none d-sm-flex">
                    @include('customers::elements.form-ordering')
                </div>
            </div>
            <!-- .table-responsive -->
            <div class="text-muted"> Trang {{ $customers->currentPage() }}/{{ $customers->lastPage() }}, đang xem 
                {{$customers->count()}}/{{ $customers->total() }} kết quả </div>
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

                                    </div>
                                </div>
                            </th>

                            <th> Số Điện Thoại </th>
                            <th> Nợ Hiện Tại </th>
                            <th> Tổng Bán </th>
                            <th> Giao Dịch Cuối </th>
                            <th style="width:100px; min-width:100px;"> &nbsp; </th>
                        </tr>
                    </thead>
                    <!-- /thead -->
                    <!-- tbody -->
                    <tbody>
                        @foreach($customers as $key => $customer)

                        <tr>
                            <td class="align-middle col-checker">
                                <div class="custom-control custom-control-nolabel custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p3">
                                    <label class="custom-control-label" for="p3"></label>
                                </div>
                            </td>

                            <td class="align-middle">
                                <a class="btn-account" href="{{ route('customers.show',$customer->id) }}">
                                    <span class="user-avatar user-avatar-lg img-no-border">
                                        <img src="https://crm.triskins.vn/img/logo.png" alt="">
                                    </span>
                                    <span class="account-summary">
                                        <span class="account-name text-truncate">
                                            <strong>#{{ $customer->id }} - {{ $customer->name }}</strong>
                                        </span>
                                        <span class="account-description">
                                            <span class="text-dark">
                                                <?php if($customer->status == 1){
                                                    echo "<span style='color:#346cb0'>Khả dụng</span>";
                                                }else{
                                                    echo "<span style='color:#b76ba3'>Không khả dụng</span>";
                                                }
                                                ?>
                                            </span>
                                        </span>
                                    </span>

                                </a>
                            </td>
                            <td class="align-middle"> {{ $customer->phone }} </td>
                            <td class="align-middle"> {{ number_format($customer->total_owed) }}<sup>đ</sup></td>
                            <td class="align-middle"> {{ number_format($customer->total_sale) }}<sup>đ</sup> </td>
                            <td class="align-middle">  {{ date($customer->last_order) }}</td>
                            <td class="align-middle text-right">
                                <!-- message actions -->
                                <div class="list-group-item-figure">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown"><i
                                                class="fa fa-ellipsis-h"></i></button> <!-- .dropdown-menu -->
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow"></div>

                                            <a href="{{ route('customers.edit',$customer->id) }}"
                                                class="dropdown-item">Sửa</a>
                                            <a href="#" class="dropdown-item"
                                                onclick="if (confirm('Bạn có chắc chắn xóa ?')) { document.role_{{ $customer->id }}.submit(); } event.returnValue = false; return false;">Xóa</a>

                                            <form name="role_{{ $customer->id }}" style="display:none;"
                                                action="{{ route('customers.destroy',$customer->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                        </div>
                                    </div><!-- /.dropdown -->
                                </div>
                                <!-- /message actions -->
                            </td>
                        </tr>
                        @endforeach
                        <!-- /tbody -->
                </table>
                <!-- /.table -->
            </div>
            <!-- /.table-responsive -->
            <!-- .pagination -->
            <div class="pagination justify-content-center mt-4">
                {{ $customers->links() }}
            </div>
            <!-- /.pagination -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection