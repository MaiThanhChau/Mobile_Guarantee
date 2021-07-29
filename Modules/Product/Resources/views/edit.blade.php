@extends('layouts.master')
@section('content')
<header class="page-title-bar">
    <!-- .breadcrumb -->
    <nav aria-label="breadcrumb hidden">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('product.index') }}"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Trở về</a>
            </li>
        </ol>
    </nav>

    <!-- title and toolbar -->
    <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto">Cập Nhật Sản Phẩm</h1><!-- .btn-toolbar -->
    </div><!-- /title and toolbar -->
</header>
<!-- .page-section -->
<div class="page-section">
    <!-- grid row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="home">
                    <div class="card card-fluid">
                        <h6 class="card-header"> Thông tin </h6><!-- .card-body -->
                        <div class="card-body">
                            <!-- form -->
                            <form method="post" accept-charset="utf-8"
                                action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <label for="title" class="col-md-3">Tên</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm"
                                            value="{{$product->name}}">
                                        <span style="color:red;">@Error("name"){{ $message }} @enderror</span>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="sku" class="col-md-3">Mã sản phẩm</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="sku" class="form-control" placeholder="Nhập mã sản phẩm (SKU)"
                                            maxlength="255" id="sku" value="{{$product->sku}}">
                                        <span style="color:red;">@Error("sku"){{ $message }} @enderror</span>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label class="col-md-3">Danh mục sản phẩm</label>
                                    <div class="col-md-9 mb-3">
                                        <select name="group_id" class="custom-select" id="group_id">
                                            <option value="">Chọn Nhóm</option>
                                            @foreach($group_products as $group_product)
                                            <option value="{{$group_product->id}}" <?php
                                                if ($product->group_product->name ==$group_product->name){
                                                    echo "selected";
                                                }   
                                                ?>>{{$group_product->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label class="col-md-3">Nhà cung cấp</label>
                                    <div class="col-md-9 mb-3">
                                        <select name="supplier_id" class="custom-select">
                                            <option value="">Chọn NCC</option>
                                            @foreach($supplier_products as $supplier_product)
                                            <option value="{{$supplier_product->id}}" <?php
                                                if ($product->supplier_product->name == $supplier_product->name){
                                                    echo "selected";
                                                }   
                                                ?>>{{$supplier_product->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="status" class="col-md-3">Trạng thái sử dụng</label>
                                    <div class="col-md-9 mb-3">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="check-handle"
                                                name="status" value="1" <?php if($product->status == 1){
                                                echo "checked";
                                            } ?>>
                                            <label class="custom-control-label" for="check-handle"></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="descrition" class="col-md-3">Mô tả</label>
                                    <div class="col-md-9 mb-3">
                                        <textarea style="height:110px" name="description" class="form-control"
                                            placeholder="Mô tả" maxlength="255"
                                            id="description">{{$product->description}}</textarea>
                                        <span style="color:red;">@Error("description"){{ $message }} @enderror</span>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="image" class="col-md-3">Hình ảnh</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="file" name="image" class="form-control" id="image">
                                        <img src="{{ Storage::Url($product->image) }}" alt="ảnh sản phẩm"
                                            style="height:2.5cm">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="price-buy" class="col-md-3">Giá nhập</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="buy_price" class="price form-control"
                                            placeholder="Nhập vào giá nhập sản phẩm" data-mask="currency" id="buy_price"
                                            value="{{$product->buy_price}}">
                                        <span style="color:red;">@Error("buy_price"){{ $message }} @enderror</span>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="price-sale" class="col-md-3">Giá bán</label>
                                    <div class="col-md-9 mb-3">
                                        <input type="text" name="sell_price" class="price form-control"
                                            placeholder="Nhập giá bán sản phẩm" id="sell_price" value="{{$product->sell_price}}">
                                        <span style="color:red;">@Error("sell_price"){{ $message }} @enderror</span>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="collection_id" class="col-md-3">Thời gian bảo
                                        hành</label>
                                    <div class="col-md-9 mb-3">
                                        <select name="guarantee_time" class="custom-select" id="supplier-id">
                                            <option value="">Chọn thời gian bao hành</option>
                                            <option value='1' <?php if($product->guarantee_time == 1){
                                            echo "selected";
                                        } ?>>1 tháng</option>
                                            <option value='3' <?php if($product->guarantee_time == 3){
                                            echo "selected";
                                        } ?>>3 tháng</option>
                                            <option value='6' <?php if($product->guarantee_time == 6){
                                            echo "selected";
                                        } ?>>6 tháng</option>
                                            <option value='9' <?php if($product->guarantee_time == 9){
                                            echo "selected";
                                        } ?>>9 tháng</option>
                                            <option value='12' <?php if($product->guarantee_time == 12){
                                            echo "selected";
                                        } ?>>12 tháng</option>
                                            <option value='24' <?php if($product->guarantee_time == 24){
                                            echo "selected";
                                        } ?>>24 tháng</option>
                                        </select>
                                    </div>
                                </div>

                                <hr>
                                <!-- .form-actions -->
                                <div class="form-row">
                                    <div class="col-6">
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary ">Cập nhật</button>
                                        <button onclick="window.history.go(-1); return false;" class="btn btn-danger ">Hủy</button>
                                    </div><!-- /.form-actions -->
                                </div>
                            </form>

                        </div><!-- /.page-inner -->
                    </div><!-- /.page -->
                </div><!-- /.wrapper -->
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace('description');
</script>
@endsection