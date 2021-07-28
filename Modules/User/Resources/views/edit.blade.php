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
    <h1 class="page-title">Chỉnh sửa thông tin nhân sự</h1>
</header>
<!-- .page-section -->
<div class="page-section">
    <!-- grid row -->
    
            <div class="tab-content">
                <div class="tab-pane fade active show" id="home">
                    <div class="card card-fluid">
                        <h6 class="card-header"> Tài Khoản </h6><!-- .card-body -->
                        <div class="card-body">
                            <!-- form -->
                            <form autocomplete="off" method="post" accept-charset="utf-8"
                                action="{{route('user.update',$user->id)}}">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <label for="name" class="col-md-3">Tên</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Điền đầy đủ họ và tên nhân viên"  maxlength="150"
                                            id="name" value="{{$user->name}}" autocomplete="off">
                                            <span style="color:red;">@Error("name"){{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label for="name" class="col-md-3">Email</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Địa chỉ hòm thư điện tử. Vd: taikhoan@gmail.com" 
                                            maxlength="255" id="email" value="{{$user->email}}" autocomplete="off">
                                            <span style="color:red;">@Error("email"){{ $message }} @enderror</span>
                                        </div>
                                </div>

                                <div class="form-row">
                                    <label for="phone" class="col-md-3">Điện thoại</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="tel" name="phone" class="form-control"
                                            placeholder="Số điện thoại liên lạc"
                                            maxlength="255" id="phone" value="{{$user->phone}}" autocomplete="off">
                                            <span style="color:red;">@Error("phone"){{ $message }} @enderror</span>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="address" class="col-md-3">Địa chỉ</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="address" class="form-control"
                                            placeholder="Phường - Quận - Huyện - Tỉnh - Thành Phố"
                                            maxlength="255" id="address" value="{{$user->address}}" autocomplete="off">
                                            <span style="color:red;">@Error("address"){{ $message }} @enderror</span>
                                    </div>
                                </div>


                                <div class="form-row">
                                    <label for="group_id" class="col-md-3">Chức vụ</label>
                                    <div class="col-md-9 mb-3">
                                        <select name="group_id" required="required"
                                            class="custom-select" id="group-id">
                                            <option value="0" checked>Chọn chức vụ
                                            </option>
                                            @foreach($user_groups as $user_group)
                                            <option value="{{$user_group->id}}"
                                            <?php
                                            if($user->user_group->name == $user_group->name){
                                                echo "selected";
                                            }
                                            ?>    
                                            >{{$user_group->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="password" class="col-md-3">Mật khẩu</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Tạo mật khẩu để nhân viên có thể đăng nhập (độ dài tối thiểu 6 ký tự, tối đa 16 ký tự)" value="{{$user->password}}" autocomplete="off">
                                            <span style="color:red;">@Error("password"){{ $message }} @enderror</span>
                                        </div>
                                </div>
                                <div class="form-row">
                                    <label for="re_password" class="col-md-3">Xác nhận mật khẩu</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="password" name="re_password" class="form-control"
                                            placeholder="Nhập lại mật khẩu vừa tạo" autocomplete="off">
                                            <span style="color:red;">@Error("re_password"){{ $message }} @enderror</span>
                                    </div>
                                </div>

                                <!-- /.form-group -->

                                <hr>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary ml-auto">Cập Nhật</button>
                                </div><!-- /.form-actions -->
                            </form>
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->

               
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.page-section -->
</div>
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection