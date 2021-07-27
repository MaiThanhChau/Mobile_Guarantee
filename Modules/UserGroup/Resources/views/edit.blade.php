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
                <input type="text" class="form-control" name="name" placeholder="Enter name"
                    value="{{$user_group->name}}">
                <span style="color:red;">@Error("name"){{ $message }} @enderror</span>
            </div>
            <?php
                $checked_tags = $user_group->roles->pluck('id')->toArray();
            ?>
            <div class="form-group" style="padding-right:50px">
                <label for="">Quyền hạn</label>
                <?php foreach( $roles as $role_id => $role_title ):?>
                <div class="form-check" style="padding-right:50px">
                    <input class="form-check-input" type="checkbox" value="<?= $role_id; ?>" id="role_<?= $role_id; ?>"
                        name="roles[]"
                        <?php if(in_array($role_id,$checked_tags)): ?> checked
                        <?php endif; ?>
                        >
                    <label class="form-check-label" for="role_<?= $role_id; ?>">
                        <?= $role_title; ?>
                    </label>
                </div>
                <?php endforeach;?>
            </div>
            <div class="card-body">
                <button type="submit" class="btn btn-success">Cập Nhật</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Quay Lại</button>
            </div>
        </form><!-- /.table-responsive -->
        <!-- .pagination -->
        <!-- /.pagination -->
    </div><!-- /.card-body -->
</div><!-- /.card -->
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection