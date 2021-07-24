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
                        <h1 class="page-title mr-sm-auto"> THÊM NHÀ CUNG CẤP </h1><!-- .btn-toolbar -->
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
                                    <a class="nav-link active show" data-toggle="tab" href="#tab1">Thêm Nhà Cung Cấp</a>

                            </ul><!-- /.nav-tabs -->
                        </div><!-- /.card-header -->
                        <!-- .card-body -->
                        <form method="post" action="{{ route('productsupplier.store') }}">
                        @csrf
                            <div class="card-header">
                                <label>Tên nhà cung cấp</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                            </div>

                                <div style="display:none;"><input type="hidden" name="_method" value="POST" /><input
                                        type="hidden" name="_csrfToken" autocomplete="off"
                                        value="be9d8425ace54d6ac6b676eb4a758ca9ba6f39e9a5f546d2451f8b533bc7ed0dc13c70bf3b2da514ccd4d1419bba5adbfa29ed62a900fb05b1f6cba101ee2029" />
                                </div>
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