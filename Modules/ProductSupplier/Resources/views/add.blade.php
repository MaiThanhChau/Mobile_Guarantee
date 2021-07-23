@extends('layout.admin.index')
@section('content')
<main class="app-main">
    <!-- .wrapper -->
    <div class="wrapper">
        <!-- .page -->
        <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
                <!-- .page-title-bar -->
                <header class="page-title-bar">
                    <!-- .breadcrumb -->
                    <!-- /.breadcrumb -->
                    <!-- floating action -->
                    <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button>
                    <!-- /floating action -->
                    <!-- title and toolbar -->
                    <div class="d-md-flex align-items-md-start">
                        <h1 class="page-title mr-sm-auto"> THÊM LOẠI SẢN PHẨM </h1><!-- .btn-toolbar -->
                        <!-- /.btn-toolbar -->
                    </div><!-- /title and toolbar -->
                </header><!-- /.page-title-bar -->
                <!-- .page-section -->
                <div class="page-section">
                    <!-- .card -->
                    <div class="card card-fluid">
                        <!-- .card-header -->
                        <div class="card-header">
                            <!-- .nav-tabs -->
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="#tab1">Thêm Loại Sản
                                        Phẩm</a>

                            </ul><!-- /.nav-tabs -->
                        </div><!-- /.card-header -->
                        <!-- .card-body -->
                        <form method="post" action="{{ route('productsupplier.store') }}">
                        @csrf
                            <div class="card-header">
                                <label>Tên Loại</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                            </div>

                                <div style="display:none;"><input type="hidden" name="_method" value="POST" /><input
                                        type="hidden" name="_csrfToken" autocomplete="off"
                                        value="be9d8425ace54d6ac6b676eb4a758ca9ba6f39e9a5f546d2451f8b533bc7ed0dc13c70bf3b2da514ccd4d1419bba5adbfa29ed62a900fb05b1f6cba101ee2029" />
                                </div>


                                <!-- <div class="card-header">
                                    <label for="gallery col-md-12">Hình ảnh</label>
                                    <div class="col-md-12 mb-3">

                                        <div class="media-library-wrapper" id="media-library-gallery"
                                            data-obj="#media-library-gallery" data-type="image" data-multi="false"
                                            data-limit="1" data-name="gallery">

                                            <small class="form-text text-muted mb-1">Kích thước tối đa là 2MB. Chỉ
                                                cho phép tải lên các loại tệp ( PNG, JPG )</small>
                                            <div class="fileinput-dropzone">
                                                <span class="open-gallery"><i class="fa fa-plus fa-fw"></i></span>
                                            </div>
                                            <small class="form-text text-muted  mt-1" id="g-text">Bạn có thể chọn 1
                                                hình ảnh</small>
                                        </div>
                                    </div>
                                </div> -->
            
                            <div class="card-body">
                                <button type="submit" class="btn btn-success">Thêm</button>
                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Quay
                                    Lại</button>
                            </div>
                        </form><!-- /.table-responsive -->
                        <!-- .pagination -->
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
                <!-- /.page-section -->
            </div><!-- /.page-inner -->
        </div><!-- /.page -->
    </div><!-- .app-footer -->

</main><!-- /.app-main -->

@endsection