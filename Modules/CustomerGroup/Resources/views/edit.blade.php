@extends('layouts.master')
@section('content')
<header class="page-title-bar">
    <nav aria-label="breadcrumb hidden">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> 
                <a href="{{ route('customergroup.index') }}">
                    <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>
                    Danh sách
                </a>
            </li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between">
        <h1 class="page-title">Chỉnh Sửa Nhóm Khách Hàng</h1>
    </div>
</header>
<div class="page-section">
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
                       <form method="post" accept-charset="utf-8" action="{{ route('customergroup.update', $customergroup->id) }}">
                          @csrf
                          @method('PUT')
                          <div class="form-row">
                             <label for="name" class="col-md-3">Tên</label> 
                             <div class="col-md-9 mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Nhập tên nhóm khách hàng" value="{{ $customergroup->name }}">            
                                <span style="color:red;">@Error("name"){{ $message }} @enderror</span>
                              </div>
                          </div>
                          
                          <hr>
                          <!-- .form-actions -->
                          <div class="form-actions">
                             <button type="submit" class="btn btn-primary ml-auto">Cập Nhật</button>
                             <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Quay Lại</button>

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
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection