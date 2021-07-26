@extends('layouts.master')
@section('content')


<header class="page-title-bar">
    <!-- .breadcrumb -->
    <nav aria-label="breadcrumb hidden">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('customers.index') }}">
                    <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>
                    Khách Hàng </a>
            </li>
        </ol>
    </nav>

    <!-- title and toolbar -->
    <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto">Sửa Khách Hàng</h1><!-- .btn-toolbar -->
        <div class="dt-buttons btn-group hide">
            <a class="btn btn-secondary" href="{{ route('customers.index') }}">Trở lại</a>
        </div><!-- /.btn-toolbar -->
    </div><!-- /title and toolbar -->
</header>
<!-- .page-section -->
<div class="page-section">
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show mb-2">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ Session::get('success')}}
    </div>
    @endif

    @if( $errors->any() )
    <div class="alert alert-danger alert-dismissible fade show mb-2">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    </div>
    @endif
    <!-- grid row -->
    <div class="row">
        <!-- grid column -->
        <div class="col-lg-3">
            <!-- .card -->
            <div class="card card-fluid">
                <h6 class="card-header"> Thông tin chi tiết </h6><!-- .nav -->
                <nav class="nav nav-tabs flex-column border-0">
                    <a class="nav-link active" data-toggle="tab" href="#home">Thông Tin</a>
                    <a class="nav-link" data-toggle="tab" href="#orders">Đơn Hàng</a>
                    <a class="nav-link" data-toggle="tab" href="#debts">Công Nợ</a>
                </nav><!-- /.nav -->
            </div><!-- /.card -->
        </div><!-- /grid column -->
        <!-- grid column -->
        <div class="col-lg-9">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="home">
                    <div class="card card-fluid">
                        <h6 class="card-header"> Thông Tin </h6><!-- .card-body -->
                        <div class="card-body">
                            <!-- form -->
                            <form method="post" accept-charset="utf-8"
                                action="{{ route('customers.update', $customers->id) }}">
                                @csrf
                                @method('PUT')
      
                                <div class="form-row">
                                    <label for="name" class="col-md-3">Tên khách hàng</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="name" class="form-control" placeholder="Tên"
                                            required="required" maxlength="255" id="name"
                                            value="{{ $customers->name }}" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label for="email" class="col-md-3">Email</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                            maxlength="255" id="email" value="{{ $customers->email }}" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label for="name" class="col-md-3">Số điện thoại</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="tel" name="phone" class="form-control"
                                            placeholder="Số điện thoại" maxlength="255" id="phone"
                                            value="{{ $customers->phone }}" />
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="name" class="col-md-3">Địa chỉ</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="address" class="form-control" placeholder="Địa chỉ"
                                            maxlength="255" id="address" value="{{ $customers->address }}" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label for="gender" class="col-md-3">Giới tính</label>
                                    <div class="col-md-9 mb-3">

                                        <td>
                                            <input type="radio" name="gioi_tinh" id="gtnam" value="1"
                                            @if($customers->gioi_tinh == 1 )
                                                {{'checked'}}
                                            @endif
                                            /> Nam
                                            <input type="radio" name="gioi_tinh" id="gtnu" value="0"
                                            @if($customers->gioi_tinh == 0 )
                                                {{'checked'}}
                                            @endif
                                            /> Nữ
                                        </td>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="customer-group-id" class="col-md-3">Nhóm khách
                                        hàng</label>
                                    <div class="col-md-9 mb-3">
                                        <select name="customer_group_id" class="form-control" id="customer-group-id">
                                            @foreach($customergroups as $customergroup)
                                            <option value="{{ $customergroup->id }}">{{ $customergroup->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label for="name" class="col-md-3">Số tiền còn nợ</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="number" name="debt_price" class="form-control"
                                            placeholder="Số tiền còn nợ" step="any" id="debt-price" value="0" />
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="name" class="col-md-3">Tổng bán</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="number" name="total_sale" class="form-control"
                                            placeholder="Tổng bán" step="any" id="total-sale" value="0" />
                                    </div>
                                </div>


                                <!-- /.form-group -->
                                <div class="form-row">
                                    <label for="is-important" class="col-md-3">Khách hàng quan
                                        trọng</label>
                                    <div class="col-md-9 mb-3">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="is_important" value="1"
                                                class="custom-control-input" id="is-important"> <label
                                                class="custom-control-label" for="is-important"></label>
                                        </div>
                                    </div>
                                </div>

                                <!-- /.form-group -->
                                <div class="form-row">
                                    <label for="status" class="col-md-3">Trạng thái sử dụng</label>
                                    <div class="col-md-9 mb-3">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="status" value="1" class="custom-control-input"
                                                id="status"> <label class="custom-control-label" for="status"></label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <!-- .form-actions -->
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary ml-auto">Cập
                                        Nhật</button>
                                    <button class="btn btn-secondary"
                                        onclick="window.history.go(-1); return false;">Quay Lại</button>

                                </div><!-- /.form-actions -->
                            </form>
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->

                    <!-- .media -->
                </div>
                <div class="tab-pane fade" id="orders">
                    <div class="card card-fluid">
                        <h6 class="card-header"> Lịch sử đơn hàng </h6>
                        <div class="card-body">
                            <table class="table table-colored table-inverse table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Chi nhánh</th>
                                        <th>Ngày đặt</th>
                                        <th>Giá trị</th>
                                        <th>Nhân viên</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="debts">
                    <div class="card card-fluid">
                        <h6 class="card-header"> Nợ cần thu </h6>
                        <div class="card-body">
                            <table class="table table-colored table-inverse table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Thời gian</th>
                                        <th>Giá trị</th>
                                        <th>Số tiền nợ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /grid column -->
    </div><!-- /grid row -->
</div><!-- /.page-section -->

@endsection