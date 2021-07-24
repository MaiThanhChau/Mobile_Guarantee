@extends('roles::layouts.master')
@section('content')
<header class="page-title-bar">
    <nav aria-label="breadcrumb hidden">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('roles.index') }}">
                    <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>
                    Danh sách
                </a>
            </li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between">
        <h1 class="page-title">Chỉnh sửa quyền hạn</h1>
    </div>
</header>
<div class="page-section">
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show mb-2">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ Session::get('success')}}
    </div>
    @endif
    <div class="row">
        <div class="col-lg-3">
           <!-- .card -->
           <div class="card card-fluid">
              <h6 class="card-header"> Thông tin chi tiết </h6>
              <!-- .nav -->
              <nav class="nav nav-tabs flex-column border-0">
                 <a class="nav-link active" data-toggle="tab" href="#home">Thông Tin</a>
              </nav>
              <!-- /.nav -->
           </div>
           <!-- /.card -->
        </div>
        
        <div class="col-lg-9">
           <div class="tab-content">
              <div class="tab-pane fade active show" id="home">
                 <div class="card card-fluid">
                    <h6 class="card-header"> Thông Tin </h6>
                    <!-- .card-body -->
                    <div class="card-body">
                       <!-- form -->
                       <form method="post" accept-charset="utf-8" action="{{ route('roles.update',$item->id) }}">
                          @csrf
                          @method('PUT')
                          <div class="form-row">
                             <label for="title" class="col-md-3">Tên</label> 
                             <div class="col-md-9 mb-3">
                                <input type="text" name="title" class="form-control" placeholder="Tên" requiredid="title" value="{{ $item->title }}">            
                             </div>
                          </div>
                          <div class="form-row">
                             <label for="name" class="col-md-3">Mã</label> 
                             <div class="col-md-9 mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Mã" id="name" value="{{ $item->name }}">            
                             </div>
                          </div>
                          <div class="form-row">
                             <label for="group_title" class="col-md-3">Tên Nhóm</label> 
                             <div class="col-md-9 mb-3">
                                <input type="text" name="group_title" class="form-control" placeholder="Tên Nhóm" id="group_title" value="{{ $item->group_title }}">            
                             </div>
                          </div>
                          <div class="form-row">
                             <label for="group" class="col-md-3">Mã Nhóm</label> 
                             <div class="col-md-9 mb-3">
                                <input type="text" name="group" class="form-control" placeholder="Mã Nhóm" id="group" value="{{ $item->group }}">            
                             </div>
                          </div>
                          <hr>
                          <!-- .form-actions -->
                          <div class="form-actions">
                             <button type="submit" class="btn btn-primary ml-auto">Cập Nhật</button>
                          </div>
                          <!-- /.form-actions -->
                       </form>
                    </div>
                    <!-- /.card-body -->
                 </div>
                 <!-- /.card -->
                 <!-- .media -->
              </div>
           </div>
        </div>
    </div>
</div>
@endsection
@section('script_footer')

@endsection