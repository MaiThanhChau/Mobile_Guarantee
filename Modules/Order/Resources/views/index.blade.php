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
                                    <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Tables</a>
                            </li>
                        </ol>
                    </nav>
                    <!-- /.breadcrumb -->
                    <!-- title and toolbar -->
                    <div class="d-md-flex align-items-md-start">
                        <h1 class="page-title mr-sm-auto"> Đơn hàng </h1>
                        <!-- .btn-toolbar -->
                        <div class="btn-toolbar">
                            <button type="button" class="btn btn-primary">Thêm mới</button>
                        </div>
                    </div>
                    <!-- /.btn-toolbar -->
            </div>
            <!-- /title and toolbar -->
            </header>
            <!-- /.page-title-bar -->
            <!-- .page-section -->
            <div class="page-section">
                <!-- .card -->
                <section class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                        <!-- .form-group -->
                        <div class="form-group">
                            <!-- .input-group -->
                            <div class="input-group input-group-alt">
                                <!-- .input-group-prepend -->
                                <div class="input-group-prepend">
                                    <select class="custom-select">
                                        <option selected> Filter By </option>
                                        <option value="1"> Tags </option>
                                        <option value="2"> Vendor </option>
                                        <option value="3"> Variants </option>
                                        <option value="4"> Prices </option>
                                        <option value="5"> Sales </option>
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
                                    <input type="text" class="form-control" placeholder="Search record">
                                </div>
                                <!-- /.input-group -->
                            </div>
                            <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                        <!-- .table-responsive -->
                        <div class="text-muted"> Showing 1 to 10 of 1,000 entries </div>
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
                                                    <a class="dropdown-item" href="#">Select all</a>
                                                    <a class="dropdown-item" href="#">Unselect all</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Bulk remove</a>
                                                    <a class="dropdown-item" href="#">Bulk edit</a>
                                                    <a class="dropdown-item" href="#">Separate actions</a>
                                                </div>
                                            </div>
                                        </th>
                                        <th> Ngày tạo </th>
                                        <th> Tổng tiền </th>
                                        <th> Đã trả </th>
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
                                                <input type="checkbox" class="custom-control-input" name="selectedRow[]"
                                                    id="p3">
                                                <label class="custom-control-label" for="p3"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="tile tile-img mr-1">
                                                <img class="img-fluid" src="{{url('/')}}/assets/images/dummy/img-1.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <a href="#">Tomato - Green</a>
                                        </td>
                                        <td class="align-middle"> 329 </td>
                                        <td class="align-middle"> 4 </td>
                                        <td class="align-middle"> $31.70 </td>
                                        <td class="align-middle text-right">
                                            <a href="#" class="btn btn-sm btn-secondary">
                                                <i class="fas fa-search"></i>
                                                <span class="sr-only">Edit</span>
                                            </a>
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
            <!-- /.page-section -->
        </div>
        <!-- /.page-inner -->
    </div>
    <!-- /.page -->
    </div>
    <!-- /.wrapper -->
</main>
@endsection