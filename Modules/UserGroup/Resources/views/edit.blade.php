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
                        <h1 class="page-title mr-sm-auto">SỬA NHÓM NHÂN SỰ </h1><!-- .btn-toolbar -->
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
                                    <a class="nav-link active show" data-toggle="tab" href="#tab1">Sửa Nhóm Nhân Sự</a>

                            </ul><!-- /.nav-tabs -->
                        </div><!-- /.card-header -->
                        <!-- .card-body -->
                        <form method="post" action="{{ route('usergroup.update',$user_group->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <label>Tên Nhóm </label>
                                <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$user_group->name}}" required>
                            </div>       
                            <div class="card-body">
                                <button type="submit" class="btn btn-success">Cập Nhật</button>
                                <button class="btn btn-secondary"
                                    onclick="window.history.go(-1); return false;">Quay Lại</button>
                            </div>
                        </form><!-- /.table-responsive -->
                        <!-- .pagination -->
                        <ul class="pagination justify-content-center mt-4">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i class="fa fa-lg fa-angle-left"></i></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">...</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">13</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">14</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">15</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">...</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">24</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-lg fa-angle-right"></i></a>
                            </li>
                        </ul><!-- /.pagination -->
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection