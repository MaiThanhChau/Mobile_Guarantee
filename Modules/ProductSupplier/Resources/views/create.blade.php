@extends('layouts.master')
@section('content')
<header class="page-title-bar">
   
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
                <input type="text" class="form-control" name="name" placeholder="Nhập tên nhà cung cấp" value="{{old('name')}}">
                <span style="color:red;">@Error("name"){{ $message }} @enderror</span>
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
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection