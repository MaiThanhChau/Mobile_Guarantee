@extends('layouts.master')
@section('content')
<header class="page-title-bar">
    <!-- .breadcrumb -->
    <nav aria-label="breadcrumb hidden">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('saleoff.index') }}">
                    <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>
                    Bảng giá </a>
            </li>
        </ol>
    </nav>

    <!-- title and toolbar -->
    <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto">Tạo Bảng giá mới</h1><!-- .btn-toolbar -->
        <div class="dt-buttons btn-group hide">
            <a class="btn btn-secondary" href="{{ route('saleoff.index') }}">Trở lại</a>
        </div><!-- /.btn-toolbar -->
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
                    <a class="nav-link " data-toggle="tab" href="#config">Cấu hình</a>
                </nav><!-- /.nav -->
            </div><!-- /.card -->
        </div><!-- /grid column -->
        <!-- grid column -->
        <div class="col-lg-9">
            <form method="post" accept-charset="utf-8" action="{{ route('saleoff.update',$saleoff->id) }}">
                @csrf
                @method('PUT')
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="home">
                        <div class="card card-fluid">
                            <h6 class="card-header"> Thông Tin </h6><!-- .card-body -->
                            <div class="card-body">
                                <!-- form -->

                                <div class="form-row">
                                    <label for="name" class="col-md-3">Tên bảng giá</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="name" class="form-control" placeholder="Tên của bảng giá hoặc sự kiện khuyến mãi"
                                            required="required" maxlength="255" id="name" value="{{ $saleoff->name }}" />
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="price_type" class="col-md-3">Loại bảng giá</label> 
                                    <div class="col-md-9 mb-3">
                                    <select name="price_type" class="form-control" id="price_type"><option value="Bảng giá" selected="selected">Bảng Giá</option><option value="Chương trình khuyến mãi">Chương trình khuyến mãi</option></select>            </div>
                                </div>

                                <div class="form-row">
                                    <label for="code" class="col-md-3">Mã giảm giá</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="code" class="form-control" placeholder="Mã giảm giá khi áp dụng khi nhập"
                                            required="required" maxlength="255" id="code" value="{{ $saleoff->code }}" />
                                            <small style="margin-left:15px">Chỉ áp dụng cho Chương Trình Khuyến Mãi</small>
                                        

                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="description" class="col-md-3">Mô tả</label> 
                                    <div class="col-md-9 mb-3">
                                    <textarea name="description" class="form-control" placeholder="Mô tả cho bảng giá (tùy chọn)" id="description" rows="5">{{ $saleoff->description }}</textarea>            </div>
                                </div>

                                <div class="form-row">
                                    <label for="status" class="col-md-3">Trạng thái sử dụng</label> 
                                    <div class="col-md-9 mb-3">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" name="status" value="1" class="custom-control-input" id="status" <?php
                                                if ($saleoff->status == 1) {
                                                    echo "checked";
                                                }
                                                ?>>      						<label class="custom-control-label" for="status"></label>
                                            </div>
                                        </div>
                                </div>

                                <div class="form-row">
                                            <label for="date_start" class="col-md-3">Ngày tạo</label> 
                                            <div class="col-md-9 mb-3">
                                                <div class="input-group input-group-alt flatpickr">
                                <input type="text" name="created" class="form-control" disabled="disabled"  data-input="" id="created">          </div>
                                                </div>
                                    </div>
                                    <div class="form-row">
                                            <label for="date_start" class="col-md-3">Ngày cập nhật</label> 
                                            <div class="col-md-9 mb-3">
                                                <div class="input-group input-group-alt flatpickr">
                                <input type="text" name="modified" class="form-control" disabled="disabled"  data-input="" id="modified">          </div>
                                                </div>
                                    </div>
                                
                                <!-- .form-actions -->
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary ml-auto">Thêm</button>
                                </div><!-- /.form-actions -->

                            </div><!-- /.card-body -->
                        </div><!-- /.card -->

                        <!-- .media -->
                    </div>
                    <div class="tab-pane fade" id="config">
                        <div class="card card-fluid">
                            <h6 class="card-header"> Cấu Hình </h6>


                            <div class="form-group d-flex justify-content-between align-items-center" style="margin-top:10px">  
                            <label for="apply" class="col-md-3">Áp dụng</label> 
                            <div class="col-md-9 mb-3">
                                <select name="apply" class="custom-select" required="required" id="apply"><option value="Không áp dụng">Không áp dụng</option><option value="Toàn bộ sản phẩm">Toàn bộ sản phẩm</option><option value="Sản phẩm chỉ định">Sản phẩm chỉ định</option><option value="Nhóm sản phẩm chỉ định">Nhóm sản phẩm chỉ định</option></select>      </div>
                            </div>
                            <div class="form-group d-flex justify-content-between align-items-center">
                                <label for="kind_of_discount" class="col-md-3">Loại giảm giá</label> 
                                <div class="col-md-9 mb-3">
                                    <select name="kind_of_discount" class="custom-select" id="kind_of_discount"><option value="%">Phần trăm</option><option value="đ">Giảm trừ</option></select>      </div>
                                </div>
                                <div class="form-group d-flex justify-content-between align-items-center">
      <label for="reduced_value" class="col-md-3">Giá trị giảm</label> 
      <div class="col-md-9 mb-3">
      <input type="number" name="reduced_value" class="form-control" step="any" id="reduced_value" placeholder="Viết phần trăm giảm giá hoặc giá trị giảm giá sản phẩm theo loại giảm giá">      </div>
    </div>
    <div class="form-group d-flex justify-content-between align-items-center ">
      <label for="reduction_limit" class="col-md-3">Giới hạn giảm</label> 
      <div class="col-md-9 mb-3">
      <input type="number" name="reduction_limit" class="form-control" step="any" id="reduction_limit" placeholder="Giới hạn giảm giá cho sản phẩm khi áp dụng khuyến mại">      </div>
    </div>
                            </div><!-- /.list-group -->
                            
                               
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary ml-auto">Cập nhật</button>
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