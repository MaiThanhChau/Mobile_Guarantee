@extends('layouts.master')
@section('content')
<header class="page-title-bar">
    <div class="d-flex justify-content-between">
        <h1 class="page-title">Nhóm Khách Hàng</h1>
        <div class="btn-toolbar">
            <a href="{{ route('customergroup.create') }}" class="btn btn-primary">Thêm mới</a>
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
                    <a class="nav-link active show" href="#"> Tất cả </a>
                </li>
            </ul>
            <!-- /.nav-tabs -->
        </div>
        <!-- /.card-header -->
        <!-- .card-body -->
        <div class="card-body">
            <div class="row mb-2">
            <div class="col">
                    @include('customergroup::elements.form-search')
                </div>
                <div class="col-auto d-none d-sm-flex">
                    @include('customergroup::elements.form-ordering')
                </div>
            </div>
            <!-- .table-responsive -->
            <div class="text-muted"> Trang {{ $customergroups->currentPage() }}/{{ $customergroups->lastPage() }}, tổng
                {{ $customergroups->total() }} kết quả </div>
            <div class="table-responsive">
                <!-- .table -->
                <table class="table">
                    <!-- thead -->
                    <thead>
                        <tr>
                            <th>

                                <div class="thead-dd dropdown">
                                    <span class="custom-control custom-control-nolabel custom-checkbox"><input
                                            type="checkbox" class="custom-control-input" id="check-handle"> <label
                                            class="custom-control-label" for="check-handle"></label></span>
                                    <div class="thead-btn" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-arrow"></div><a class="dropdown-item" href="#">Select
                                            all</a>
                                    </div>
                                </div>

                            </th>
                            <th></th>
                            <th>Tên Nhóm Khách Hàng</th>
                            <th></th>
                        </tr>
                    </thead>
                    <!-- /thead -->
                    <!-- tbody -->
                    <tbody>
                    @foreach($customergroups as $key => $customergroup)

                        <tr>
                            <td class="align-middle col-checker">
                                <div class="custom-control custom-control-nolabel custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p3">
                                    <label class="custom-control-label" for="p3"></label>
                                </div>
                            </td>
                            <td></td>
                            <td class="align-middle">
                                <a class="btn-account" href="{{ route('customergroup.edit',$customergroup->id) }}">
                                    
                                    <span class="account-summary">
                                        <span class="account-name text-truncate">
                                            <strong> #{{ $customergroup->id }} - {{ $customergroup->name }}</strong>
                                        </span>
                                        <span class="account-description">
                                            <span class="text-success">{{ $customergroup->created_at }}</span>
                                        </span>
                                    </span>

                                </a>
                            </td>
                            <td class="align-middle text-right">
                                <!-- message actions -->
                                <div class="list-group-item-figure">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown"><i
                                                class="fa fa-ellipsis-h"></i></button> <!-- .dropdown-menu -->
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow"></div>

                                            <a href="{{ route('customergroup.edit',$customergroup->id) }}" class="dropdown-item">Sửa</a>
                                            <a href="#" class="dropdown-item"
                                                onclick="if (confirm('Bạn có chắc chắn xóa ?')) { document.role_{{ $customergroup->id }}.submit(); } event.returnValue = false; return false;">Xóa</a>

                                            <form name="role_{{ $customergroup->id }}" style="display:none;" action="{{ route('customergroup.destroy',$customergroup->id) }}" method="POST">
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