@extends('layouts.master')
@section('content')
<header class="page-title-bar">
    <!-- .breadcrumb -->
    <!-- /.breadcrumb -->
    <!-- floating action -->
    <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button>
    <!-- /floating action -->
    <!-- title and toolbar -->
    <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto"> NHÓM NHÂN VIÊN </h1><!-- .btn-toolbar -->
        <div class="btn-toolbar">
            <a type="button" class="btn btn-primary" href="{{ route('usergroup.create') }}">Thêm mới</a>
        </div><!-- /.btn-toolbar -->
    </div><!-- /title and toolbar -->
</header><!-- /.page-title-bar -->
<!-- .page-section -->
<div class="page-section">
    <!-- .card -->
    <div class="card card-fluid">
        <!-- .card-header -->
        <div class="card-header">
            <!-- .nav-tabs -->
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active show" data-toggle="tab" href="#tab1">Tất Cả</a>

            </ul><!-- /.nav-tabs -->
        </div><!-- /.card-header -->
        <!-- .card-body -->
        <div class="card-body">
            <!-- .form-group -->
            <div class="form-group">
                <!-- .input-group -->
                <div class="input-group input-group-alt">
                    <!-- .input-group-prepend -->
                    <div class="input-group-prepend">
                        <select class="custom-select">
                            <option selected> Filter By </option>
                            <option value="1"> Tags </option>
                            <option value="2"> Vendor </option>
                            <option value="3"> Variants </option>
                            <option value="4"> Prices </option>
                            <option value="5"> Sales </option>
                        </select>
                    </div><!-- /.input-group-prepend -->
                    <!-- .input-group -->
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span
                                    class="oi oi-magnifying-glass"></span></span>
                        </div><input type="text" class="form-control" placeholder="Search record">
                    </div><!-- /.input-group -->
                </div><!-- /.input-group -->
            </div><!-- /.form-group -->
            <!-- .table-responsive -->
            <div class="text-muted"> Showing 1 to 10 of 1,000 entries </div>
            <div class="table-responsive">
                <!-- .table -->
                <table class="table">
                    <!-- thead -->
                    <thead>
                        <tr>
                            <th>

                                <div class="thead-dd dropdown">
                                    <span
                                        class="custom-control custom-control-nolabel custom-checkbox"><input
                                            type="checkbox" class="custom-control-input"
                                            id="check-handle"> <label class="custom-control-label"
                                            for="check-handle"></label></span>
                                    <div class="thead-btn" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-arrow"></div><a class="dropdown-item"
                                            href="#">Select all</a>
                                    </div>
                                </div>

                            </th>
                            <th></th>
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
                                <div class="list-group-item-figure">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-secondary"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            x-placement="bottom-end"
                                            style="position: absolute; will-change: top, left; top: 29px; left: 29px;">
                                            <div class="dropdown-arrow"></div>
                                            <a href="{{ route('usergroup.edit', $user_group->id) }}"
                                                class="dropdown-item">Sửa</a>
                                            <form style="display:none;" method="post"
                                                action="{{ route('usergroup.destroy', $user_group->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <input type="hidden" name="_method" value="POST"><input
                                                    type="hidden" name="_csrfToken" autocomplete="off"
                                                    value="f1f1a9f17ec4f24680d19c699cf324fe6fa0db1f4f709d2ea54f5eff3a29aa1aaeee2f24918f4f1c70c53b3c8d209219a5a2e71b3715210551c042904dc7e655">
                                            </form><a
                                                href="{{ route('usergroup.destroy', $user_group->id) }}"
                                                class="dropdown-item"
                                                onclick="if (confirm(&quot;Ba\u0323n co\u0301 ch\u0103\u0301c ch\u0103\u0301n xo\u0301a # 54?&quot;)) { document.post_60f83c7eca44b280188797.submit(); } event.returnValue = false; return false;">Xóa</a>
                                        </div>
                                    </div>
                                </div>
                            </td>






                            <td class="align-middle text-right">
                                <!-- message actions -->
                                <div class="list-group-item-figure">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-secondary"
                                            data-toggle="dropdown"><i
                                                class="fa fa-ellipsis-h"></i></button>
                                        <!-- .dropdown-menu -->
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow"></div>
                                            <a href="{{ route('usergroup.edit', $user_group->id) }}" class="dropdown-item">Sửa</a>
                                            <form style="display:none;" method="post"
                                                action="{{ route('usergroup.destroy', $user_group->id) }}">                            
                                                @method('DELETE')
                                                @csrf
                                                <input type="submit" class="dropdown-item" value="Xóa"
                                        onClick="return confirm('Bạn có muốn xóa nhóm nhân sự này?');">
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
            <!-- .pagination -->
        </div><!-- /.card-body -->
    </div><!-- /.card -->
    <!-- /.page-section -->
</div><!-- /.page-inner -->
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection