@extends('layout.admin.app')

@section('content')
<main class="app-main">
    <!-- .wrapper -->
    <div class="wrapper">
        <!-- .page -->
        <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
                <!-- .page-title-bar -->
                <header class="page-title-bar">
                    <!-- .breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                <a href="#">
                                    <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Trở về</a>
                            </li>
                        </ol>
                    </nav>
                    <!-- /.breadcrumb -->
                    <!-- floating action -->
                    <button type="button" class="btn btn-success btn-floated">
                        <span class="fa fa-plus"></span>
                    </button>
                    <!-- /floating action -->
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
                    <!-- .card -->
                    <section class="card card-fluid">
                        <!-- .card-header -->
                        <header class="card-header">
                            <!-- .nav-tabs -->
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="#tab1">Tất cả</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab2">Bán chạy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab3">Tồn kho</a>
                                </li>
                            </ul>
                            <!-- /.nav-tabs -->
                        </header>
                        <!-- /.card-header -->
                        <!-- .card-body -->
                        <div class="card-body">
                            <!-- .form-group -->
                            <div class="form-group">
                                <!-- .input-group -->
                                <div class="input-group input-group-alt">
                                    <!-- .input-group-prepend -->
                                    <div class="input-group-prepend">
                                        <select class="custom-select">
                                            <option selected> Lọc bởi </option>
                                            <option value="1"> Thể loại </option>
                                            <option value="2"> Giá </option>
                                            <option value="3"> Nhà cung cấp </option>
                                            <option value="4"> Giảm giá </option>
                                            <option value="5"> Active </option>
                                        </select>
                                    </div>
                                    <!-- /.input-group-prepend -->
                                    <!-- .input-group -->
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="oi oi-magnifying-glass"></span>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm">
                                    </div>
                                    <!-- /.input-group -->
                                </div>
                                <!-- /.input-group -->
                            </div>
                            <!-- /.form-group -->
                            <!-- .table-responsive -->
                            <div class="text-muted"> Danh sách từ 1 - 10 trong 100 sản phẩm </div>
                            <div class="table-responsive">
                                <!-- .table -->
                                <table class="table">
                                    <!-- thead -->
                                    <thead>
                                        <tr>
                                            <th colspan="2" style="min-width:320px">
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
                                                        <a class="dropdown-item" href="#">Bỏ chọn</a>
                                                        <a class="dropdown-item" href="#">Chọn tất cả</a>
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
                                        <tr>
                                            <td class="align-middle col-checker">
                                                <div class="custom-control custom-control-nolabel custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="selectedRow[]" id="p3">
                                                    <label class="custom-control-label" for="p3"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="tile tile-img mr-1">
                                                    <img class="img-fluid" src="assets/images/dummy/img-1.jpg"
                                                        alt="Card image cap">
                                                </a>
                                                <a href="#">Tomato - Green</a>
                                            </td>
                                            <td class="align-middle"> 329 </td>
                                            <td class="align-middle"> 4 </td>
                                            <td class="align-middle"> $31.70 </td>
                                            <td class="align-middle text-right">
                                                <!-- message actions -->
                                                <div class="list-group-item-figure">
                                                    <!-- .dropdown -->
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-icon btn-secondary"
                                                            data-toggle="dropdown"><i
                                                                class="fa fa-ellipsis-h"></i></button>
                                                        <!-- .dropdown-menu -->
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <div class="dropdown-arrow"></div>

                                                            <a href=""
                                                                class="dropdown-item">Sửa</a>
                                                            <a href="#" class="dropdown-item"
                                                                onclick="if (confirm('Bạn có chắc chắn xóa ?')) { document.role_.submit(); } event.returnValue = false; return false;">Xóa</a>

                                                            <form name="role_{{}}"
                                                                style="display:none;"
                                                                action=""
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
                                        <!-- /tr -->

                                    </tbody>
                                    <!-- /tbody -->
                                </table>
                                <!-- /.table -->
                            </div>
                            <!-- /.table-responsive -->
                            <!-- .pagination -->
                            <ul class="pagination justify-content-center mt-4">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fa fa-lg fa-angle-left"></i>
                                    </a>
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
                                    <a class="page-link" href="#">
                                        <i class="fa fa-lg fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- /.pagination -->
                        </div>
                        <!-- /.card-body -->
                    </section>
                    <!-- /.card -->

                </div>
                <!-- /.page-inner -->
            </div>
            <!-- /.page -->
        </div>
        <!-- /.wrapper -->
</main>
<!-- /.app-main -->
</div>
@endsection