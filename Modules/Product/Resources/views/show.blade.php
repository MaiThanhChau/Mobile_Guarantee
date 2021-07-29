@extends('layouts.master')
@section('content')
<header class="page-title-bar">
    <!-- .breadcrumb -->
    <nav aria-label="breadcrumb hidden">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('product.index') }}"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Trở về</a>
            </li>
        </ol>
    </nav>

    <!-- title and toolbar -->
    <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto">Chi Tiết Sản Phẩm</h1><!-- .btn-toolbar -->
    </div><!-- /title and toolbar -->
</header>
<!-- .page-section -->
<div class="page-section">
    <!-- grid row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="home">
                    <div class="card card-fluid">
                        <h6 class="card-header"> Thông tin </h6><!-- .card-body -->
                        <div class="card-body">
                            <!-- form -->
                            <div class="form-row">
                                <label for="title" class="col-md-3">Tên</label>
                                <div class="col-md-9 mb-3">
                                    {{$product->name}}
                                </div>
                            </div>

                            <div class="form-row">
                                <label for="sku" class="col-md-3">Mã sản phẩm</label>
                                <div class="col-md-9 mb-3">
                                    {{$product->sku}}
                                </div>
                            </div>

                            <div class="form-row">
                                <label class="col-md-3">Danh mục sản phẩm</label>
                                <div class="col-md-9 mb-3">
                                    {{$product->group_product->name}}
                                </div>
                            </div>

                            <div class="form-row">
                                <label class="col-md-3">Nhà cung cấp</label>
                                <div class="col-md-9 mb-3">
                                    {{$product->supplier_product->name}}
                                </div>
                            </div>

                            <div class="form-row">
                                <label for="status" class="col-md-3">Trạng thái sử dụng</label>
                                <div class="col-md-9 mb-3">
                                    <?php if($product->status == 1){
                                                echo "Khả dụng";
                                            }else{
                                                echo "Không khả dụng";
                                            } ?>
                                </div>
                            </div>

                            <div class="form-row">
                                <label for="descrition" class="col-md-3">Mô tả</label>
                                <div class="col-md-9 mb-3">
                                    {{$product->description}}
                                </div>
                            </div>

                            <div class="form-row">
                                <label for="image" class="col-md-3">Hình ảnh</label>
                                <div class="col-md-9 mb-3">
                                    <img src="{{ Storage::Url($product->image) }}" alt="ảnh sản phẩm"
                                        style="height:2.5cm">
                                </div>
                            </div>

                            <div class="form-row">
                                <label for="price-buy" class="col-md-3">Giá nhập</label>
                                <div class="col-md-9 mb-3">
                                    {{number_format($product->buy_price)}} ₫
                                </div>
                            </div>

                            <div class="form-row">
                                <label for="price-sale" class="col-md-3">Giá bán</label>
                                <div class="col-md-9 mb-3">
                                    {{number_format($product->sell_price)}} ₫
                                </div>
                            </div>

                            <div class="form-row">
                                <label for="collection_id" class="col-md-3">Thời gian bảo
                                    hành</label>
                                <div class="col-md-9 mb-3">
                                    <?php if($product->guarantee_time == 1){
                                            echo "1 tháng";
                                        }else if($product->guarantee_time == 3){
                                            echo "3 tháng";
                                        }else if($product->guarantee_time == 6){
                                            echo "6 tháng";
                                        }else if($product->guarantee_time == 9){
                                            echo "9 tháng";
                                        }else if($product->guarantee_time == 12){
                                            echo "12 tháng";
                                        }else if($product->guarantee_time == 24){
                                            echo "24 tháng";
                                        }
                                        ?>
                                </div>
                            </div>

                            <hr>
                            <!-- .form-actions -->
                            <div class="form-row">              
                                <div class="col-6">
                                    <button onclick="window.history.go(-1); return false;" class="btn btn-danger ">Trở Về</button>
                                </div><!-- /.form-actions -->
                            </div>
                            </form>

                        </div><!-- /.page-inner -->
                    </div><!-- /.page -->
                </div><!-- /.wrapper -->
            </div>       
        </div>  
    </div>    
</div>
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection