@extends('layouts.master')
@section('content')

                <header class="page-title-bar">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                <a href="#">
                                    <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Nhân viên</a>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-title">Thêm mới nhân viên</h1>
                </header>
                <!-- .page-section -->
                <div class="page-section">
                    <!-- grid row -->
                    <div class="row">
                        <!-- grid column -->
                        <div class="col-lg-4">
                            <!-- .card -->
                            <div class="card card-fluid">
                                <h6 class="card-header"> Thông tin chi tiết </h6><!-- .nav -->
                                <nav class="nav nav-tabs flex-column border-0">
                                    <a class="nav-link active" data-toggle="tab" href="#home">Tài khoản</a>
                                    <a class="nav-link " data-toggle="tab" href="#config">Cấu hình</a>
                                    <a class="nav-link " data-toggle="tab" href="#security">Bảo mật</a>
                                </nav><!-- /.nav -->
                            </div><!-- /.card -->
                        </div><!-- /grid column -->
                        <div class="col-lg-8">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="home">
                                    <div class="card card-fluid">
                                        <h6 class="card-header"> Tài Khoản </h6><!-- .card-body -->
                                        <div class="card-body">
                                            <!-- form -->
                                            <form method="post" accept-charset="utf-8"
                                                action="/cms/users/edit?type=users">
                                                <div style="display:none;"><input type="hidden" name="_method"
                                                        value="POST"><input type="hidden" name="_csrfToken"
                                                        autocomplete="off"
                                                        value="4ae948d2a74158571fd788f552c6652871d489dade46f64e9cd73697083362930796bcfdbd64620004411e2e56557dcb3c4de2852c6808cfd38c316a1e8706ca">
                                                </div>
                                                <div class="form-row">
                                                    <label for="name" class="col-md-3">Tên</label>
                                                    <div class="col-md-9 mb-3">
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Tên" required="required" maxlength="150"
                                                            id="name" value="">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <label for="name" class="col-md-3">Email</label>
                                                    <div class="col-md-9 mb-3">
                                                        <input type="email" name="email" class="form-control"
                                                            placeholder="Email" maxlength="255" id="email">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <label for="phone" class="col-md-3">Điện thoại</label>
                                                    <div class="col-md-9 mb-3">
                                                        <input type="tel" name="phone" class="form-control"
                                                            placeholder="Điện thoại" required="required"
                                                            maxlength="255" id="phone" value="">
                                                    </div>
                                                </div>


                                                <div class="form-row">
                                                    <label for="group_id" class="col-md-3">Chức vụ</label>
                                                    <div class="col-md-9 mb-3">
                                                        <select name="group_id" required="required"
                                                            class="custom-select" id="group-id">
                                                            <option value="0" selected="selected">Chọn chức vụ
                                                            </option>
                                                            <option value="1">Ban Giám Đốc</option>
                                                            <option value="2">Bộ phận office</option>
                                                            <option value="3">Nhân viên thu ngân</option>
                                                            <option value="4">Nhân viên kỹ thuật</option>
                                                            <option value="7">Nhân viên sale</option>
                                                            <option value="8">Leader</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <label for="warehouse_id" class="col-md-3">Chi nhánh / Kho</label>
                                                    <div class="col-md-9 mb-3">
                                                        <select name="warehouse_id" class="custom-select"
                                                            id="warehouse-id">
                                                            <option value="1">Chi Nhánh Q1</option>
                                                            <option value="2">Chi Nhánh Phú Nhuận</option>
                                                            <option value="8">Kho Tổng</option>
                                                            <option value="9">Kho Lỗi</option>
                                                        </select>
                                                    </div>
                                                </div>







                                                <!-- /.form-group -->


                                                <div class="form-row">
                                                    <label for="date_start" class="col-md-3">Ngày tạo</label>
                                                    <div class="col-md-9 mb-3">
                                                        <div class="input-group input-group-alt flatpickr">
                                                            <input type="text" name="created" class="form-control"
                                                                disabled="disabled" required="required" data-input=""
                                                                id="created">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <label for="date_start" class="col-md-3">Ngày cập nhật</label>
                                                    <div class="col-md-9 mb-3">
                                                        <div class="input-group input-group-alt flatpickr">
                                                            <input type="text" name="modified" class="form-control"
                                                                disabled="disabled" required="required" data-input=""
                                                                id="modified">
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary ml-auto">Cập
                                                        Nhật</button>
                                                </div><!-- /.form-actions -->
                                            </form>
                                        </div><!-- /.card-body -->
                                    </div><!-- /.card -->

                                    <!-- .media -->
                                </div>
                                <div class="tab-pane fade" id="config">
                                    <div class="card card-fluid">
                                        <h6 class="card-header"> Cấu Hình </h6>
                                        <div class="card-body">
                                            <form method="post" accept-charset="utf-8"
                                                action="/cms/users/edit?type=users">
                                                <div style="display:none;"><input type="hidden" name="_method"
                                                        value="POST"><input type="hidden" name="_csrfToken"
                                                        autocomplete="off"
                                                        value="4ae948d2a74158571fd788f552c6652871d489dade46f64e9cd73697083362930796bcfdbd64620004411e2e56557dcb3c4de2852c6808cfd38c316a1e8706ca">
                                                </div>
                                                <div class="list-group list-group-flush">
                                                    <div
                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                        Cho phép nhìn thấy đơn hàng của các tài khoản khác <label
                                                            class="switcher-control switcher-control-success">
                                                            <input type="checkbox" name="permissions[]"
                                                                value="allow_see_other_orders" class="switcher-input">
                                                            <span class="switcher-indicator"></span>
                                                        </label>
                                                    </div>

                                                </div><!-- /.list-group -->
                                                <hr>
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary ml-auto">Cập
                                                        Nhật</button>
                                                </div><!-- /.form-actions -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="security">
                                    <div class="card card-fluid">
                                        <h6 class="card-header"> Bảo Mật </h6><!-- .card-body -->
                                        <div class="card-body">
                                            <!-- form -->
                                            <form method="post" accept-charset="utf-8"
                                                action="/cms/users/edit?type=users">
                                                <div style="display:none;"><input type="hidden" name="_method"
                                                        value="POST"><input type="hidden" name="_csrfToken"
                                                        autocomplete="off"
                                                        value="4ae948d2a74158571fd788f552c6652871d489dade46f64e9cd73697083362930796bcfdbd64620004411e2e56557dcb3c4de2852c6808cfd38c316a1e8706ca">
                                                </div>
                                                <div class="form-row">
                                                    <label for="password" class="col-md-3">Mật khẩu</label>
                                                    <div class="col-md-9 mb-3">
                                                        <input type="password" name="password" class="form-control"
                                                            placeholder="Mật khẩu" required="required" id="password"
                                                            value="">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary ml-auto">Cập
                                                        Nhật</button>
                                                </div><!-- /.form-actions -->
                                            </form>
                                        </div><!-- /.card-body -->
                                    </div><!-- /.card -->

                                    <!-- .media -->
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.page-section -->
@endsection