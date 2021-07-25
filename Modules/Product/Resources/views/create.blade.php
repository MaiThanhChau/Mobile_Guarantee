@extends('layout.admin.app')
@section('content')
<main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
                            
<header class="page-title-bar">
    <!-- .breadcrumb -->
        <nav aria-label="breadcrumb hidden">
      <ol class="breadcrumb">
          <li class="breadcrumb-item">
              <a href="{{ route('product.index') }}"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Trở về</a></li>
        </ol>
    </nav>
       
    <!-- title and toolbar -->
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto">Tạo Sản Phẩm</h1><!-- .btn-toolbar -->
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
        <form method="post" accept-charset="utf-8" action="/cms/products/edit?type=products"><div style="display:none;"><input type="hidden" name="_method" value="POST"><input type="hidden" name="_csrfToken" autocomplete="off" value="735dd2c4867eab017d0da6346a665723b531d1ee9803a69f1e56440f2af15d289d4cbaa99337c8c6c27b684b49eec8137fd5d2a2e609c760108498cae3431644"></div>        
       	<div class="form-row">
       			<label for="name" class="col-md-3">Tên</label> 
       			<div class="col-md-9 mb-3">
	            <input type="text" name="name" class="form-control" placeholder="Tên" required="required" maxlength="255" id="name" value="">	       		
            </div>
	       </div>



          <div class="form-row">
            <label for="sku" class="col-md-3">Mã sản phẩm</label> 
            <div class="col-md-9 mb-3">
              <input type="text" name="sku" class="form-control" placeholder="Mã SKU" required="required" maxlength="255" id="sku">            
            </div>
          </div>

          <div class="form-row">
            <label for="collection_id" class="col-md-3">Danh mục sản phẩm</label> 
            <div class="col-md-9 mb-3">
                <select name="collection_id" class="custom-select" required="required" id="collection-id">
                  <option value="">Chọn Nhóm</option>
                  <option value="1">3M Gloss</option>
                </select> 
               </div>
          </div>

          <div class="form-row">
            <label for="collection_id" class="col-md-3">Nhà cung cấp</label> 
            <div class="col-md-9 mb-3">
              <select name="supplier_id" class="custom-select" id="supplier-id">
                <option value="">Chọn NCC</option>
                <option value="1">Hằng Đặng</option>
              </select>            
            </div>
          </div>

          <div class="form-row">
              <label for="status" class="col-md-3">Trạng thái sử dụng</label> 
              <div class="col-md-9 mb-3">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="status" value="1" class="custom-control-input" id="status">                 
                  <label class="custom-control-label" for="status"></label>
                </div>
              </div>
          </div>

          <div class="form-row">
            <label for="descrition" class="col-md-3">Mô tả</label> 
            <div class="col-md-9 mb-3">
              <textarea style="height:110px" name="descrition" class="form-control" placeholder="Mô tả" required="descrition" maxlength="255" id="descrition"></textarea>       
            </div>
          </div>

          <div class="form-row">
            <label for="descrition" class="col-md-3">Hình ảnh</label> 
            <div class="col-md-9 mb-3">
              <div class="media-library-wrapper" id="media-library-gallery" data-obj="#media-library-gallery" data-type="image" data-multi="true" data-limit="5" data-name="gallery">

                <small class="form-text text-muted mb-1">Kích thước tối đa là 2MB. Chỉ cho phép tải lên các loại tệp ( PNG, JPG )</small>
                  <div class="fileinput-dropzone">
                              <span class="open-gallery"><i class="fa fa-plus fa-fw"></i></span>
                        </div>
                  <small class="form-text text-muted mt-1">Ảnh đầu tiên được dùng làm ảnh đại diện. 
            <span id="g-text">Bạn có thể chọn 5 hình ảnh</span> </small>
      </div>  
            </div>
          </div>
          <div class="form-row">
     			<label for="price-buy" class="col-md-3">Giá nhập</label> 
     			<div class="col-md-9 mb-3">
              <input type="text" name="price_buy" class="price form-control" placeholder="Giá nhập" data-mask="currency" required="required" id="price-buy">       		
            </div>
       	</div>
              	
        <div class="form-row">
   			<label for="price-sale" class="col-md-3">Giá bán</label> 
   			<div class="col-md-9 mb-3">
            <input type="text" name="price_sale" class="price form-control" placeholder="Giá bán" required="required" id="price-sale">       		
          </div>
       </div>
	      
       <div class="form-row">
            <label for="collection_id" class="col-md-3">Thời gian bảo hành</label> 
            <div class="col-md-9 mb-3">
              <select name="supplier_id" class="custom-select" id="supplier-id">
                <option value="">Chọn thời gian bao hành</option>
                <option value="1">1 tháng</option>
                <option value="3">3 tháng</option>
                <option value="6">6 tháng</option>
                <option value="9">9 tháng</option>
                <option value="12">12 tháng</option>
                <option value="24">24 tháng</option>
              </select>            
            </div>
          </div>

          <hr>
          <!-- .form-actions -->
          <div class="form-row" >
          <div class="col-6" >
          </div>
            <div class="col-6" >
              <button type="submit" class="btn btn-primary ">Cập Nhật</button>
              <a href="{{ route('product.index') }}" class="btn btn-danger ">Hủy</a>
            </div><!-- /.form-actions -->
          </div>
        </form>  

            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        <!-- /.wrapper -->
      </main>
@endsection