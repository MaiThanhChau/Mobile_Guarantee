@extends('layouts.master')
@section('content')
<!-- .page-section -->
<header class="page-title-bar">
    <!-- .breadcrumb -->
    <nav aria-label="breadcrumb hidden">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('product.index')}}">
                    <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>
                    Sản Phẩm </a>
            </li>
        </ol>
    </nav>

    <!-- title and toolbar -->
    <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto">Import Sản Phẩm</h1><!-- .btn-toolbar -->
        <div class="dt-buttons btn-group hide">
            <a class="btn btn-secondary" href="{{route('product.index')}}">Trở lại</a>
        </div><!-- /.btn-toolbar -->
    </div><!-- /title and toolbar -->
</header>
<div class="page-section">
    <div class="card card-fluid">
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" accept-charset="utf-8" id="upload"
                action="{{route('import_product')}}">
                @csrf
                <div class="form-group">
                    <label>
                        Vui lòng click vào đây để chọn tập tin từ máy tính hoặc kéo tập tin vào khu vực này.<br>
                        Chỉ chấp nhận các tập tin có định dạng *.xls hoặc *.xlsx.<br>
                        Tham khảo tập tin mẫu <a target="_blank" href="http://crm.tamit.online/file_mau_san_pham.xlsx">ở
                            đây</a>
                    </label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="my_file">
                        <label class="custom-file-label" for="fileupload-customInput">Chọn Tệp</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" id="import-products" class="btn btn-primary">Tiến Hành</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
@endsection