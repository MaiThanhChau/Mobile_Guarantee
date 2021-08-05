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
        <h1 class="page-title mr-sm-auto">Thông tin Khách Hàng</h1>
    </div><!-- /title and toolbar -->
</header>
<!-- .page-section -->
<div class="page-section">
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
                            <form method="post" accept-charset="utf-8" action="{{ route('customers.update', $customer->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <label for="name" class="col-md-3">Tên khách hàng</label>
                                    <div class="col-md-9 mb-3">
                                    {{ $customer->name }}
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="email" class="col-md-3">Email</label>
                                    <div class="col-md-9 mb-3">
                                    {{ $customer->email }}
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="phone" class="col-md-3">Số điện thoại</label>
                                    <div class="col-md-9 mb-3">
                                    {{ $customer->phone }}
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="address" class="col-md-3">Địa chỉ</label>
                                    <div class="col-md-9 mb-3">
                                    {{ $customer->address }}
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="birthday" class="col-md-3">Ngày sinh</label>
                                    <div class="col-md-9 mb-3">
                                    {{ $customer->birthday }}
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="gender" class="col-md-3">Giới tính</label>
                                    <div class="col-md-9 mb-3">
                                    <?php 
                                        if ($customer->gender == "Nam") {
                                            echo "Nam";
                                        }else{
                                            echo "Nữ";
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="customer-group-id" class="col-md-3">Nhóm khách
                                        hàng</label>
                                    <div class="col-md-9 mb-3">
                                    {{$customer->customer_group->name}}
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="poin" class="col-md-3">Điểm tích lũy</label>
                                    <div class="col-md-9 mb-3">
                                    {{ $customer->poin }}
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="owed" class="col-md-3">Số tiền còn nợ</label>
                                    <div class="col-md-9 mb-3">
                                    {{ $customer->owed }}
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="total_sale" class="col-md-3">Tổng bán</label>
                                    <div class="col-md-9 mb-3">
                                    {{ $customer->total_sale }}
                                    </div>
                                </div>


                                <!-- /.form-group -->
                                <div class="form-row">
                                    <label for="is-important" class="col-md-3">Khách hàng quan
                                        trọng</label>
                                    <div class="col-md-9 mb-3">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="is_important" value="1"
                                                class="custom-control-input" id="is-important"
                                                <?php
                                                if ($customer->is_important == 1) {
                                                    echo "checked";
                                                }
                                                ?>>
                                            <label class="custom-control-label" for="is-important"></label>
                                        </div>
                                    </div>
                                </div>

                                <!-- /.form-group -->
                                <div class="form-row">
                                    <label for="status" class="col-md-3">Trạng thái sử dụng</label>
                                    <div class="col-md-9 mb-3">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="status" value="1" class="custom-control-input"
                                                id="status"
                                                <?php
                                                if ($customer->status == 1) {
                                                    echo "checked";
                                                }
                                                ?>>
                                            <label class="custom-control-label" for="status"></label>
                                        </div>
                                    </div>
                                </div>

                                <!-- .form-actions -->
                                <div class="form-row">
                                    <button class="btn btn-primary"
                                        onclick="window.history.go(-1); return false;">Trở về</button>

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
                                        <th>Mã Đơn hàng</th>
                                        <th>Chi nhánh</th>
                                        <th>Ngày đặt</th>
                                        <th>Giá trị</th>
                                        <th>Nhân viên</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($customer_orders as $customer_order)
                                    <tr>
                                        <td>
                    <strong>#{{ date('dmY',strtotime($customer_order->created_at)) }}_{{$customer_order->id}}</strong>
                                        </td>
                                        <td>{{$customer_order->name}}</td>
                                        <td>{{ date('d-m-Y',strtotime($customer_order->created_at)) }}</td>
                                        <td>{{ number_format($customer_order->cart_subtotal) }}<sup>đ</sup></td>
                                        <td>{{ $customer_order->user_name }}</td>
                                    </tr>
                                    @endforeach
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
                                        <th>Đã trả</th>
                                        <th>Số tiền nợ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customer_oweds as $customer_owed)
                                    <tr>
                                        <td><strong>#{{ date('dmY',strtotime($customer_owed->created_at)) }}_{{$customer_owed->id}}</strong></td>
                                        <td>{{ date('d-m-Y',strtotime($customer_owed->created_at)) }}</td>
                                        <td>{{ number_format($customer_owed->cart_subtotal) }}<sup>đ</sup></td>
                                        <td>{{ number_format($customer_owed->paid) }}<sup>đ</sup></td>
                                        <td>{{ number_format($customer_owed->owed) }}<sup>đ</sup></td>
                                    </tr>
                                    @endforeach
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