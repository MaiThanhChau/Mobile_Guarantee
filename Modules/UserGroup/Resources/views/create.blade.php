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

        <h1 class="page-title mr-sm-auto"> THÊM NHÓM NHÂN VIÊN </h1><!-- .btn-toolbar -->
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

                    <a class="nav-link active show" data-toggle="tab" href="#tab1">Thêm Nhóm Nhân Viên</a>


            </ul><!-- /.nav-tabs -->
        </div><!-- /.card-header -->
        <!-- .card-body -->
        <form method="post" action="{{ route('usergroup.store') }}">

            @csrf
            <div class="card-header">
                <label>Tên Nhóm</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập tên nhân sự" value="{{old('name')}}">
                <span style="color:red;">@Error("name"){{ $message }} @enderror</span>
            </div>
            <div class="card-header">
            <div class="custom-control custom-switch">
                    <input type="checkbox"
                        class="custom-control-input" id="check-handle">
                    <label class="custom-control-label" for="check-handle">Chọn tất cả</label>
            </div>
            </div>
            <div class="card-header" style="padding-right:50px">
                <?php foreach( $roles as $role_id => $role_title ):?>
                <div class="custom-control custom-switch">
                  <input class="custom-control-input" type="checkbox" value="<?= $role_id; ?>" id="role_<?= $role_id; ?>" name="roles[]">
                  <label class="custom-control-label" for="role_<?= $role_id; ?>"><?= $role_title; ?></label>
                </div>
                <?php endforeach;?>
            </div>
            <div class="card-body">
                <button type="submit" class="btn btn-success">Thêm</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Quay
                    Lại</button>
            </div>
        </form><!-- /.table-responsive -->
        <!-- .pagination -->
        <!-- /.pagination -->
    </div><!-- /.card-body -->
</div>
</div>
@endsection
@section('script_footer')
<script>
$("#check-handle").change(function(){
    $(".custom-control-input[name^='roles']").prop("checked", $(this).prop("checked"))
})
$(".custom-control-input[name^='roles']").change(function(){
    if($(this).prop("checked") == false){
        $("#check-handle").prop("checked",false)
    };
    if($(".custom-control-input[name^='roles']:checked").length == $(".custom-control-input[name^='roles']").length){
        $("#check-handle").prop("checked",true)
    };
})
</script>
@endsection