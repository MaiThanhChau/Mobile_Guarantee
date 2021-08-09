@extends('layouts.master')
@section('content')
<header class="page-title-bar">
    <!-- title and toolbar -->
    <div class="d-md-flex align-orders-md-start">
        <h1 class="page-title mr-sm-auto"> Nhập kho </h1>
        <!-- .btn-toolbar -->
        <div class="btn-toolbar">
            <a href="{{ route('importwarehouses.create') }}">
                <button type="button" class="btn btn-primary">Thêm mới</button>
            </a>
        </div>
    </div>
    <!-- /.btn-toolbar -->
    </div>
    <!-- /title and toolbar -->
</header>
<!-- /.page-title-bar -->
<!-- .page-section -->
<!-- .page-section -->
<div class="page-section">
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show mb-2">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ Session::get('success')}}
    </div>
    @endif
    <!-- .card -->
    <div class="card card-fluid">
        <!-- .card-header -->
        <div class="card-header">
            <!-- .nav-tabs -->
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active show" href="{{ route('importwarehouses.index') }}">
                        Tất cả
                    </a>
                </li>
            </ul><!-- /.nav-tabs -->
        </div><!-- /.card-header -->
        <!-- .card-body -->
        <div class="card-body">
            <div class="row mb-2">
                <div class="col">
                    @include('importwarehouses::elements.form-search')
                </div>
                <div class="col-auto d-none d-sm-flex">
                    @include('importwarehouses::elements.form-ordering')
                </div>
            </div>
            <!-- .table-responsive -->

            <div class="table-responsive">
                <!-- .table -->
                <table class="table">
                    <!-- thead -->
                    <thead>
                        <tr>
                            <th colspan="2">

                                <div class="thead-dd dropdown">
                                    <span class="custom-control custom-control-nolabel custom-checkbox"><input
                                            type="checkbox" class="custom-control-input" id="check-handle">
                                        <label class="custom-control-label" for="check-handle"></label></span>
                                    <div class="thead-btn" role="button" id="bulk-actions" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="fa fa-caret-down"></span>
                                    </div>
                                    <div class="dropdown-menu" aria-labelledby="bulk-actions">
                                        <div class="dropdown-arrow"></div>
                                        <a class="dropdown-item" href="javascript:;">Chọn kênh bán
                                            hàng</a>
                                        <a class="dropdown-item" href="javascript:;">Ẩn kênh bán hàng</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:;">Xóa</a>
                                    </div>
                                </div>
                            </th>
                            <th>Ngày tạo</th>
                            <th>Trạng thái</th>
                            <th>Chi nhánh</th>
                            <th style="width:100px; min-width:100px;"> &nbsp; </th>
                        </tr>
                    </thead><!-- /thead -->
                    <!-- tbody -->
                    <tbody>
                        @if(count($items))
                        @foreach($items as $item)
                        <tr class="r-badge-warning">
                            <td class="align-middle col-checker">
                                <div class="custom-control custom-control-nolabel custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="selectedRow[]"
                                        id="{{ $item->id }}"> <label class="custom-control-label"
                                        for="{{ $item->id }}"></label>
                                </div>
                            </td>

                            <td>
                                <a href="{{ route('importwarehouses.edit', $item->id) }}" class="btn-account" role="button"
                                    style="max-width:320px">
                                    <span class="account-summary">
                                        <span class="account-name text-truncate">
                                            <strong>#{{ $item->id }}</strong>
                                        </span>
                                        <span class="account-description">
                                            <span class="text-dark">
                                                <?php if($item->type == 'NewProduct'){
                                                    echo "<span style='color:#346cb0'>Sản phẩm mới</span>";
                                                }else{
                                                    echo "<span style='color:#b76ba3'>Mua từ NCC</span>";
                                                }
                                                ?>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </td>

                            <td class="align-middle">{{ $item->created_at }}</td>


                            <td class="align-middle">
                                @if($item->status == 'save_ok')
                                <span class="badge badge-lg badge-success">Hoàn thành</span>
                                @elseif($item->status == 'save_draff')
                                <span class="badge badge-lg badge-warning">Nháp</span>
                                @elseif($item->status == 'save_request')
                                <span class="badge badge-lg badge-primary">Yêu cầu</span>
                                @elseif($item->status == 'save_canceled')
                                <span class="badge badge-lg badge-danger">Đã hủy</span>
                                @endif
                            </td>

                            <td class="align-middle">{{ $item->warehouse->name }}</td>
                            <td class="align-middle text-right">
                                <!-- message actions -->
                                <div class="list-group-item-figure">
                                    <!-- .dropdown -->
                                    <div class="dropdown">
                                        @if($item->status == 'save_ok' || $item->status == 'save_request' || $item->status == 'save_canceled')
                                        <a title="Chi tiết" class="btn btn-sm btn-icon btn-secondary"
                                            href="{{ route('importwarehouses.edit', $item->id) }}">
                                            <i class="fas fa-search"></i>
                                        </a>
                                        @elseif($item->status == 'save_draff')
                                        <button class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown"><i
                                                class="fa fa-ellipsis-h"></i></button> <!-- .dropdown-menu -->
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{ route( 'importwarehouses.edit', $item->id ) }}" class="dropdown-item">Sửa</a>
                                            <form action="{{ route( 'importwarehouses.destroy', $item->id ) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="dropdown-item" onclick="return confirm(' Bạn chắc chắn muốn xóa? ')">Xóa</button>
                                            </form>
                                        </div>
                                        @endif
                                    </div><!-- /.dropdown -->
                                </div>
                                <!-- /message actions -->
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td style="text-align:center" colspan="6">
                                Không tìm thấy kết quả
                            </td>
                        </tr>
                        @endif
                    </tbody><!-- /tbody -->
                </table><!-- /.table -->
            </div><!-- /.table-responsive -->
            <!-- .pagination -->
            <div class="pagination justify-content-center mt-4">
                {{ $items->links() }}
            </div>
            <!-- /.pagination -->
        </div><!-- /.card-body -->
    </div><!-- /.card -->

</div>
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection