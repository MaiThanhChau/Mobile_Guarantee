@extends('layouts.master')
@section('content')
<header class="page-title-bar">
    <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto"> NHÓM NHÂN VIÊN </h1><!-- .btn-toolbar -->
        <div class="btn-toolbar">
            <a type="button" class="btn btn-primary" href="{{ route('usergroup.create') }}">Thêm mới</a>
        </div><!-- /.btn-toolbar -->
    </div><!-- /title and toolbar -->
</header><!-- /.page-title-bar -->
<!-- .page-section -->
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
                    <a class="nav-link active show" data-toggle="tab" href="{{ route('usergroup.index') }}">Tất Cả</a>
                </li>
            </ul><!-- /.nav-tabs -->
        </div><!-- /.card-header -->
        <!-- .card-body -->
        <div class="card-body">
            <!-- .form-group -->
            <div class="form-group">
                <div class="row mb-2">
                    <div class="col">
                        @include('usergroup::elements.form-search')
                    </div>
                    <div class="col-auto d-none d-sm-flex">
                        @include('usergroup::elements.form-ordering')
                    </div>
                </div>
                <!-- .table-responsive -->
                <div class="text-muted"> Trang {{ $user_groups->currentPage() }}/{{ $user_groups->lastPage() }}, tổng
                    {{ $user_groups->total() }} kết quả </div>
                <div class="table-responsive">
                    <!-- .table -->
                <table class="table">
                    <!-- thead -->
                    <thead>
                        <tr>
                        <th colspan="2" style="min-width:30px">
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
                         
                            <th>Tên Nhóm Nhân Viên</th>
                            <th colspan="2">Hành Động</th>
                        </tr>
                    </thead>
                    <!-- /thead -->
                    <!-- tbody -->
                    <tbody>
                        <!-- tr -->
                        @foreach($user_groups as $user_group)
                        <tr>
                            <td class="align-middle col-checker">
                                <div class="custom-control custom-control-nolabel custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                        name="selectedRow[]" id="p3"> <label
                                        class="custom-control-label" for="p3"></label>
                                </div>
                            </td>
                            <td></td>
                            <td class="align-middle"> <strong><a>#{{$user_group->id}} -
                                        {{ $user_group->name }}</a></strong> </td>
                            <td class="align-middle text-right">
                                <!-- message actions -->
                                <div class="list-group-item-figure">
                                        <!-- .dropdown -->
                                        <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown"><i
                                                class="fa fa-ellipsis-h"></i></button>
                                        <!-- .dropdown-menu -->
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow"></div>

                                            <a href="{{ route('usergroup.edit',$user_group->id) }}"
                                                class="dropdown-item">Sửa</a>
                                            <a href="#" class="dropdown-item"
                                                onclick="if (confirm('Bạn có chắc chắn xóa ?')) { document.role_{{ $user_group->id }}.submit(); } event.returnValue = false; return false;">Xóa</a>

                                            <form name="role_{{ $user_group->id }}" style="display:none;"
                                                action="{{ route('usergroup.destroy',$user_group->id) }}"
                                                method="POST">
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
                        <!-- /tr -->
                        <!-- /tr -->
                    </tbody>
                    <!-- /tbody -->
                </table>
                <!-- /.table -->
            </div>
            <!-- /.table-responsive -->
            <div class="pagination justify-content-center mt-4">
        {{ $user_groups->links() }}
    </div>
            <!-- .pagination -->
        </div><!-- /.card-body -->
    </div><!-- /.card -->
    <!-- /.page-section -->
</div><!-- /.page-inner -->
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection