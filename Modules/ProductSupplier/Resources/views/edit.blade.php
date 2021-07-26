@extends('layouts.master')
@section('content')
                <header class="page-title-bar">
                    <!-- .breadcrumb -->
                    <!-- /.breadcrumb -->
                    <!-- floating action -->
                    <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button>
                    <!-- /floating action -->
                    <!-- title and toolbar -->
                    <div class="d-md-flex align-items-md-start">
                        <h1 class="page-title mr-sm-auto">CẬP NHẬT NHÀ CUNG CẤP</h1><!-- .btn-toolbar -->
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
                                    <a class="nav-link active show" data-toggle="tab" href="#tab1">Cập Nhật Nhà Cung Cấp</a>

                            </ul><!-- /.nav-tabs -->
                        </div><!-- /.card-header -->
                        <!-- .card-body -->
                        <form method="post" action="{{ route('productsupplier.update', $productsupplier->id) }}">
                        @csrf
                        @method('PUT')
                            <div class="card-header">
                                <label>Tên Nhà cung cấp</label>
                                <input type="text" class="form-control" name="name" value="{{ $productsupplier->name }}" placeholder="Enter name" required>
                            </div>
                            
                            <div class="card-body">
                                <button type="submit" class="btn btn-success">Cập Nhật</button>
                                <button class="btn btn-secondary"
                                    onclick="window.history.go(-1); return false;">Quay Lại</button>
                            </div>
                        </form><!-- /.table-responsive -->
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
                <!-- /.page-section -->
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection