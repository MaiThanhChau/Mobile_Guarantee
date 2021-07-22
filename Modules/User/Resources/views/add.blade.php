@extends('layout.admin.app')
@section('content')
<main class="app-main">
    <!-- .wrapper -->
    <div class="wrapper">
        <!-- .page -->
        <div class="page has-sidebar">
            <!-- .page-inner -->
            
                <!-- .page-title-bar -->
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
                <!-- /.page-title-bar -->
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

                        <!-- /.section-block -->
                        <section class="card">
                            <!-- .card-body -->
                            <div class="card-body">
                                <h3 class="card-title"> Feedback tooltip </h3>
                                <!-- form .needs-validation -->
                                <form class="needs-validation" novalidate="">
                                    <!-- .form-row -->

                                    <!-- form grid -->
                                    <div class="col-md-12 mb-3">
                                        <label for="validationTooltipUsername">Tên
                                            <abbr title="Required">*</abbr>
                                        </label>
                                        <input type="text" class="form-control" id="validationTooltipUsername"
                                            placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                                        <div class="invalid-tooltip"> Hãy nhập tên. </div>
                                    </div>
                                    <!-- /form grid -->
                                    <!-- form grid -->
                                    <div class="col-md-12 mb-3">
                                        <label for="validationTooltipUsername">Email
                                            <abbr title="Required">*</abbr>
                                        </label>
                                        <input type="text" class="form-control" id="validationTooltipUsername"
                                            placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                                        <div class="invalid-tooltip"> Hãy nhập địa chỉ email </div>
                                    </div>
                                    <!-- /form grid -->
                                    <!-- form grid -->
                                    <div class="col-md-12 mb-3">
                                        <label for="validationTooltipUsername">Password
                                            <abbr title="Required">*</abbr>
                                        </label>
                                        <input type="text" class="form-control" id="validationTooltipUsername"
                                            placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                                        <div class="invalid-tooltip"> Hãy nhập vào password. </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationTooltipCountry">Chức vụ
                                            <abbr title="Required">*</abbr>
                                        </label>
                                        <select class="custom-select d-block w-100" id="validationTooltipCountry"
                                            required="">
                                            <option value=""> Chọn chức vụ </option>
                                            <option> United States </option>
                                        </select>
                                        <div class="invalid-feedback"> Hãy chọn chức vụ cho nhân viên. </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationTooltipUsername">Số điện thoại
                                            <abbr title="Required">*</abbr>
                                        </label>
                                        <input type="text" class="form-control" id="validationTooltipUsername"
                                            placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                                        <div class="invalid-tooltip"> Hãy nhập vào số điện thoại. </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationTooltipUsername">Địa chỉ
                                            <abbr title="Required">*</abbr>
                                        </label>
                                        <input type="text" class="form-control" id="validationTooltipUsername"
                                            placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                                        <div class="invalid-tooltip"> Hãy nhập vào địa chỉ. </div>
                                    </div>
                                    <!-- .form-actions -->
                                    <div class="form-actions">
                                        <button class="btn btn-primary" type="submit">Thêm mới</button>
                                    </div>
                                    <!-- /.form-actions -->
                                </form>
                                <!-- /form .needs-validation -->
                            </div>
                            <!-- /.card-body -->
                        </section>
                        <!-- /.card -->
                    </div>
                    <!-- /.page-section -->
                </div>
                <!-- /.page-inner -->
           
            <!-- /.page -->
        </div>
        <!-- /.wrapper -->
</main>
@endsection