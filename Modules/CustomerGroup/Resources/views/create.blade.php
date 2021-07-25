@extends('roles::layouts.master')
@section('content')
<header class="page-title-bar">
    <nav aria-label="breadcrumb hidden">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="">
                    <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>
                    Danh sách
                </a>
            </li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between">
        <h1 class="page-title">Thêm Nhóm Khách Hàng</h1>
    </div>
</header>
<div class="page-section">
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show mb-2">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ Session::get('success')}}
    </div>
    @endif

    @if( $errors->any() )
    <div class="alert alert-danger alert-dismissible fade show mb-2">
        <button type="button" class="close" data-dismiss="alert">×</button>
         {!! implode('', $errors->all('<div>:message</div>')) !!}
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
                       <form method="post" accept-charset="utf-8" action="{{ route('customergroup.store') }}">
                          @csrf
                          <div class="form-row">
                             <label for="title" class="col-md-3">Tên</label> 
                             <div class="col-md-9 mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Tên" requiredid="title" value="">            
                             </div>
                          </div>
                          
                          
                          <hr>
                          <!-- .form-actions -->
                          <div class="form-actions">
                             <button type="submit" class="btn btn-success ml-auto">Thêm</button>
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