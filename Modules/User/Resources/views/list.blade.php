@extends('layouts.master')
@section('content')
<header class="page-title-bar">
<!-- floating action -->
<button type="button" class="btn btn-success btn-floated">
    <span class="fa fa-plus"></span>
</button>
<!-- /floating action -->
<!-- title and toolbar -->
<div class="d-md-flex align-items-md-start">
    <h1 class="page-title mr-sm-auto">Nhân viên</h1>
    <!-- .btn-toolbar -->
    <div class="btn-toolbar">
        <a href="{{ route('user.create') }}" class="btn btn-primary">Thêm mới</a>
    </div>
    <!-- /.btn-toolbar -->
</div>
<!-- /title and toolbar -->
</header>
<!-- /.page-title-bar -->
<!-- .page-section -->
<div class="page-section">
<!-- .card -->
<section class="card card-fluid">
    <!-- .card-header -->
    <header class="card-header">
        <!-- .nav-tabs -->
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab1">Tất cả</a>
            </li>
        </ul>
        <!-- /.nav-tabs -->
    </header>
    <!-- /.card-header -->
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
                </div>
                <!-- /.input-group-prepend -->
                <!-- .input-group -->
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <span class="oi oi-magnifying-glass"></span>
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Tìm kiếm">
                </div>
                <!-- /.input-group -->
            </div>
            <!-- /.input-group -->
        </div>
        <!-- /.form-group -->
        <!-- .table-responsive -->
        <div class="text-muted"> Trang , đang xem ... kết quả </div>
        <div class="table-responsive">
            <!-- .table -->
            <table class="table">
                <!-- thead -->
                <thead>
                    <tr>
                        <th colspan="2" style="min-width:320px">
                            <div class="thead-dd dropdown">
                                <span class="custom-control custom-control-nolabel custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                        id="check-handle">
                                    <label class="custom-control-label" for="check-handle"></label>
                                </span>
                                <div class="thead-btn" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="caret"></span>
                                </div>
                                <div class="dropdown-arrow"></div>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Hành động</a>
                                    <a class="dropdown-item" href="#">Xóa</a>
                                </div>
                            </div>
                        </th>
                        <th> Chi nhánh </th>
                        <th> Chức vụ </th>
                        <th style="width:100px; min-width:100px;"> &nbsp; </th>
                    </tr>
                </thead>
                <!-- /thead -->
                <!-- tbody -->
                <tbody>
                    <!-- tr -->
                    <tr>
                        <td class="align-middle col-checker">
                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input"
                                    name="selectedRow[]" id="p3">
                                <label class="custom-control-label" for="p3"></label>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="tile tile-img mr-1">
                                <img class="img-fluid" src="assets/images/dummy/img-1.jpg"
                                    alt="Card image cap">
                            </a>
                            <a href="#">#1 Admin</a>
                        </td>
                        <td class="align-middle"> Chi nhánh quận 1 </td>
                        <td class="align-middle">Ban Giám đốc </td>
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
                                        <a href="/cms/users/edit/54" class="dropdown-item">Sửa</a>
                                        <form name="post_60f83c7eca44b280188797"
                                            style="display:none;" method="post"
                                            action="/cms/users/delete/54"><input type="hidden"
                                                name="_method" value="POST"><input type="hidden"
                                                name="_csrfToken" autocomplete="off"
                                                value="f1f1a9f17ec4f24680d19c699cf324fe6fa0db1f4f709d2ea54f5eff3a29aa1aaeee2f24918f4f1c70c53b3c8d209219a5a2e71b3715210551c042904dc7e655">
                                        </form><a href="#" class="dropdown-item"
                                            onclick="if (confirm(&quot;Ba\u0323n co\u0301 ch\u0103\u0301c ch\u0103\u0301n xo\u0301a # 54?&quot;)) { document.post_60f83c7eca44b280188797.submit(); } event.returnValue = false; return false;">Xóa</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- /tr -->
                </tbody>
                <!-- /tbody -->
            </table>
            <!-- /.table -->
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.card-body -->
</section>
<!-- /.card -->
<!-- .section-block -->
</div>
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection