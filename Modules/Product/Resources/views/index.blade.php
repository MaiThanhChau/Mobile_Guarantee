@extends('layouts.master')
@section('content')
<header class="page-title-bar">
    
    <!-- title and toolbar -->
    <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto"> Sản phẩm </h1>
        <!-- .btn-toolbar -->
        <div class="btn-toolbar">
            <a href="{{ route('product.create') }}" class="btn btn-primary">Thêm mới</a>
            <span class="ml-1"></span>

            <button type="button" class="btn btn-light">
                <i class="oi oi-data-transfer-download"></i>
                <span class="ml-1">Nhập</span>
            </button>
            <button type="button" class="btn btn-light">
                <i class="oi oi-data-transfer-upload"></i>
                <span class="ml-1">Xuất</span>
            </button>

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
                    <a class="nav-link active show" data-toggle="tab" href="{{ route('product.index') }}">Tất cả</a>
                </li>
            </ul>
            <!-- /.nav-tabs -->
        </header>
        <!-- /.card-header -->
        <!-- .card-body -->
        <div class="card-body">
            <!-- .form-group -->
            <div class="form-group">
                <div class="row mb-2">
                    <div class="col">
                        @include('product::elements.form-search')
                    </div>
                    <div class="col-auto d-none d-sm-flex">
                        @include('product::elements.form-ordering')
                    </div>
                </div>
                <!-- .table-responsive -->
                <div class="text-muted"> Trang {{ $products->currentPage() }}/{{ $products->lastPage() }}, tổng
                    {{ $products->total() }} kết quả </div>
                <div class="table-responsive">
                    <!-- .table -->
                    <table class="table">
                        <!-- thead -->
                        <thead>
                            <tr>
                                <th colspan="2" style="min-width:320px">
                                    <div class="thead-dd dropdown">
                                        <span class="custom-control custom-control-nolabel custom-checkbox"><input
                                                type="checkbox" class="custom-control-input" id="check-handle"> <label
                                                class="custom-control-label" for="check-handle"></label></span>
                                        <div class="thead-btn" role="button" id="bulk-actions" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span class="fa fa-caret-down"></span>
                                        </div>
                                        <div class="dropdown-menu" aria-labelledby="bulk-actions">
                                            <div class="dropdown-arrow"></div>
                                            <a class="dropdown-item" href="javascript:;">Action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" data-action="delete" href="javascript:;">Xóa</a>
                                        </div>
                                    </div>
                                </th>
                                <th> Danh mục </th>
                                <th> Giá bán </th>
                                <th> Giá nhập </th>

                                <th style="width:100px; min-width:100px;"> &nbsp; </th>
                            </tr>
                        </thead>
                        <!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                            <!-- tr -->
                            @if(count($products))
                            @foreach($products as $product)
                            <tr>
                            <td class="align-middle col-checker">
                                <div class="custom-control custom-control-nolabel custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p3">
                                    <label class="custom-control-label" for="p3"></label>
                                </div>
                            </td>
                                <td class="align-middle">
                                <a class="btn-account" href="{{ route('product.show',$product->id) }}">
                                    <span class="user-avatar user-avatar-lg img-no-border">
                                        <img src="{{ Storage::Url($product->image) }}" alt="ảnh SP">
                                    </span>
                                    <span class="account-summary">
                                        <span class="account-name text-truncate">
                                            <strong> #{{ $product->id }} - {{ $product->name }}</strong>
                                        </span>
                                        <span class="account-description">
                                            <span class="text-success">{{ $product->created_at }}</span>
                                        </span>
                                        <span class="account-description">
                                            <span class="text-dark">
                                                <?php if($product->status == 1){
                                                    echo "Khả dụng";
                                                }else{
                                                    echo "Không khả dụng";
                                                }
                                                ?>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                </td>
                                <td class="align-middle">{{$product->group_product->name}}</td>
                                <td class="align-middle">{{number_format($product->buy_price)}} ₫</td>
                                <td class="align-middle">{{number_format($product->sell_price)}} ₫</td>
                                <td class="align-middle text-right">
                                    <!-- message actions -->
                                    <div class="list-group-item-figure">
                                        <!-- .dropdown -->
                                        <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown"><i
                                                class="fa fa-ellipsis-h"></i></button>
                                        <!-- .dropdown-menu -->
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-arrow"></div>

                                            <a href="{{ route('product.edit',$product->id) }}"
                                                class="dropdown-item">Sửa</a>
                                            <a href="#" class="dropdown-item"
                                                onclick="if (confirm('Bạn có chắc chắn xóa ?')) { document.role_{{ $product->id }}.submit(); } event.returnValue = false; return false;">Xóa</a>

                                            <form name="role_{{ $product->id }}" style="display:none;"
                                                action="{{ route('product.destroy',$product->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
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
                            <!-- /tr -->

                        </tbody>
                        <!-- /tbody -->
                    </table>
                    <!-- /.table -->
                </div>
                <!-- /.table-responsive -->
                <!-- .pagination -->
                <!-- /.pagination -->
            </div>
            <!-- /.card-body -->
    </section>
    <!-- /.card -->
</div>
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection