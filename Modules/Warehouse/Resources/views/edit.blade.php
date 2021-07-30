@extends('layouts.master')
@section('content')
<header class="page-title-bar">
    <!-- .breadcrumb -->
    <nav aria-label="breadcrumb hidden">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('warehouse.index') }}">
                    <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>
                    Kho Hàng </a>
            </li>
        </ol>
    </nav>

    <!-- title and toolbar -->
    <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto">Sửa Kho Hàng</h1><!-- .btn-toolbar -->
        <div class="dt-buttons btn-group hide">
            <a class="btn btn-secondary" href="{{ route('warehouse.index') }}">Trở lại</a>
        </div><!-- /.btn-toolbar -->
    </div><!-- /title and toolbar -->
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
                    <a class="nav-link active" data-toggle="tab" href="#home">Thông Tin</a>
                    <a class="nav-link " data-toggle="tab" href="#config">Quyền Hạn</a>
                </nav><!-- /.nav -->
            </div><!-- /.card -->
        </div><!-- /grid column -->
        <!-- grid column -->
        <div class="col-lg-8">
            <form method="post" accept-charset="utf-8" action="{{ route('warehouse.update', $warehouse->id) }}">
                @csrf
                @method('PUT')
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="home">
                        <div class="card card-fluid">
                            <h6 class="card-header"> Thông Tin </h6><!-- .card-body -->
                            <div class="card-body">
                                <!-- form -->

                                <div class="form-row">
                                    <label for="name" class="col-md-3">Tên kho hàng</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="name" class="form-control" placeholder="Tên"
                                            required="required" maxlength="255" id="name" value="{{ $warehouse->name }}" />
                                        <span style="color:red;">@Error("name"){{ $message }} @enderror</span>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="name" class="col-md-3">Mã kho hàng</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="code" class="form-control" placeholder="Mã kho hàng"
                                            required="required" maxlength="255" id="code" value="{{ $warehouse->code }}" />
                                        <span style="color:red;">@Error("code"){{ $message }} @enderror</span>

                                    </div>
                                </div>
                                <div class="form-row">
                                    <label for="name" class="col-md-3">Email</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                            required="required" maxlength="255" id="email" value="{{ $warehouse->email }}" />
                                        <span style="color:red;">@Error("email"){{ $message }} @enderror</span>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="name" class="col-md-3">Số điện thoại</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="tel" name="phone" class="form-control" placeholder="Số điện thoại"
                                            required="required" maxlength="255" id="phone" value="{{ $warehouse->phone }}" />
                                        <span style="color:red;">@Error("phone"){{ $message }} @enderror</span>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="name" class="col-md-3">Địa chỉ</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="address" class="form-control" placeholder="Địa chỉ"
                                            required="required" maxlength="255" id="address"
                                            value="{{ $warehouse->address }}" />
                                        <span style="color:red;">@Error("address"){{ $message }} @enderror</span>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="status" class="col-md-3">Trạng thái sử dụng</label>
                                    <div class="col-md-9 mb-3">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox"
                                                name="status" value="1" class="custom-control-input" id="status" 
                                                <?php
                                                if ($warehouse->status == 1) {
                                                    echo "checked";
                                                }
                                                ?>> <label
                                                class="custom-control-label" for="status"></label>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <!-- .form-actions -->
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary ml-auto">Cập Nhật</button>
                                </div><!-- /.form-actions -->

                            </div><!-- /.card-body -->
                        </div><!-- /.card -->

                        <!-- .media -->
                    </div>
                    <div class="tab-pane fade" id="config">
                        <div class="card card-fluid">
                            <h6 class="card-header"> Cấu Hình </h6>


                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    Cho phép nhập hàng vào kho này
                                    <label class="switcher-control switcher-control-success">
                                        <input type="checkbox"
                                            name="import" value="1" class="switcher-input" id="import" 
                                            <?php
                                                if ($warehouse->import == 1) {
                                                    echo "checked";
                                                }
                                                ?>>
                                        <span class="switcher-indicator"></span>
                                    </label>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    Cho phép xuất hàng từ kho này
                                    <label class="switcher-control switcher-control-success">
                                        <input type="checkbox"
                                            name="export" value="1" class="switcher-input" id="export"
                                            <?php
                                                if ($warehouse->export == 1) {
                                                    echo "checked";
                                                }
                                                ?>>
                                        <span class="switcher-indicator"></span>
                                    </label>
                                </div>


                            </div><!-- /.list-group -->
                            <div class="card-body">
                                <hr>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary ml-auto">Cập Nhật</button>
                                </div><!-- /.form-actions -->
                            </div><!-- /.form-actions -->

                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div><!-- /grid column -->
</div><!-- /grid row -->
</div><!-- /.page-section -->
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection