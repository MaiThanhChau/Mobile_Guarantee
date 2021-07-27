@extends('layouts.master')
@section('content')
<header class="page-title-bar">
<!-- title and toolbar -->
<div class="d-md-flex align-items-md-start">
    <h1 class="page-title mr-sm-auto">Nhân viên</h1>
    <!-- .btn-toolbar -->
    <div class="btn-toolbar">
        <a href="{{ route('user.create') }}" class="btn btn-primary">Thêm mới</a>
    </div>
    <!-- /.btn-toolbar -->
</div>
<!-- /title and toolbar -->
</header>
<!-- /.page-title-bar -->
<!-- .page-section -->
<div class="page-section">
@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show mb-2">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ Session::get('success')}}
    </div>
    @endif
<!-- .card -->
<section class="card card-fluid">
    <!-- .card-header -->
    <header class="card-header">
        <!-- .nav-tabs -->
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab1">Tất cả</a>
            </li>
        </ul>
        <!-- /.nav-tabs -->
    </header>
    <!-- /.card-header -->
    <!-- .card-body -->
    <div class="card-body">
    <div class="row mb-2">
                <div class="col">
                    @include('user::elements.form-search')
                </div>
                <div class="col-auto d-none d-sm-flex">
                    @include('user::elements.form-ordering')
                </div>
            </div>
            <!-- .table-responsive -->
           
                <!-- .table -->
            <table class="table">
                <!-- thead -->
                <thead>
                    <tr>
                        
                        <th colspan="2" >
                            <div class="thead-dd dropdown">
                                <span class="custom-control custom-control-nolabel custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                        id="check-handle">
                                    <label class="custom-control-label" for="check-handle"></label>
                                </span>
                                <div class="thead-btn" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="caret"></span>
                                </div>
                                <div class="dropdown-arrow"></div>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Hành động</a>
                                    <a class="dropdown-item" href="#">Xóa</a>
                                </div>
                            </div>
                        </th>
                        
                        <th> Tên nhân viên </th>
                        <th> Email </th>
                        <th> Chức vụ </th>
                        <th style="width:100px; min-width:100px;"> &nbsp; </th>
                    </tr>
                </thead>
                <!-- /thead -->
                <!-- tbody -->
                <tbody>
                    <!-- tr -->
                    @foreach($users as $user)
                    <tr>
                        
                        
                        <td class="align-middle col-checker">
                            <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input"
                                    name="selectedRow[]" id="p3">
                                <label class="custom-control-label" for="p3"></label>
                            </div>
                        </td>
                        <td>{{$user->id}}</td>
                        <td>
                            <a href="#">{{ $user->name }}</a>
                        </td>
                        <td class="align-middle"> {{ $user->email }} </td>
                        <td class="align-middle">{{$user->user_group->name}}</td>
                        <td class="align-middle text-right">
                             <!-- message actions -->
                             <div class="list-group-item-figure">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown"><i
                                                class="fa fa-ellipsis-h"></i></button> <!-- .dropdown-menu -->
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow"></div>

                                            <a href="{{ route('user.edit',$user->id) }}" class="dropdown-item">Sửa</a>
                                            <a href="#" class="dropdown-item"
                                                onclick="if (confirm('Bạn có chắc chắn xóa ?')) { document.delete_role_{{ $user->id }}.submit(); } event.returnValue = false; return false;">Xóa</a>

                                            <form name="delete_role_{{ $user->id }}" style="display:none;"
                                                action="{{ route('user.destroy',$user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                        </div>
                                    </div><!-- /.dropdown -->
                                </div>
                                <!-- /message actions -->
                        </td>
                        
                    </tr>
                    <!-- /tr -->@endforeach
                </tbody>
                <!-- /tbody -->
            </table>
            <!-- /.table -->
        </div>
        <div class="pagination justify-content-center mt-4">
        {{ $users->links() }}
    </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.card-body -->
</section>
<!-- /.card -->
<!-- .section-block -->
</div>
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection