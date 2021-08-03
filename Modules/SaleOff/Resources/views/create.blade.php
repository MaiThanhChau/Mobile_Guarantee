@extends('layouts.master')
@section('content')


                            
<header class="page-title-bar">
    
    <!-- title and toolbar -->
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto">Tạo Bảng giá</h1><!-- .btn-toolbar -->
      <div class="dt-buttons btn-group hide"> 
                <a class="btn btn-secondary" href="{{route('sale_off.index')}}">Trở lại</a>
              </div><!-- /.btn-toolbar -->
    </div><!-- /title and toolbar -->
</header>
<!-- .page-section -->
<div class="page-section">
<!-- grid row -->
<div class="row">
  <!-- grid column -->
  <div class="col-lg-3">
    <!-- .card -->
    <div class="card card-fluid">
      <h6 class="card-header"> Thông tin chi tiết </h6><!-- .nav -->
      <nav class="nav nav-tabs flex-column border-0">
        <a class="nav-link active" data-toggle="tab" href="#home">Thông Tin</a>
        <a class="nav-link" data-toggle="tab" href="#config">Cấu hình</a>
      </nav><!-- /.nav -->
    </div><!-- /.card -->
  </div><!-- /grid column -->
  <!-- grid column -->
  <div class="col-lg-9">
     <div class="tab-content">
        <div class="tab-pane fade active show" id="home">
          <div class="card card-fluid">
  	<h6 class="card-header"> Thông Tin </h6><!-- .card-body -->
  		<div class="card-body">
        <!-- form -->
        <form method="post" accept-charset="utf-8" action="{{ route('sale_off.store') }}">
              @csrf
       		<div class="form-row">
       			<label for="name" class="col-md-3">Tên </label> 
       			<div class="col-md-9 mb-3">
	            <input type="text" name="name" class="form-control" placeholder="Tên bảng giá"  maxlength="255" id="name" value="">
            	       		</div>
	       </div>

         <div class="form-row">
            <label for="name" class="col-md-3">Code</label> 
            <div class="col-md-9 mb-3">
              <input type="text" name="code" class="form-control" placeholder="Mã giảm giá" maxlength="255" id="code">              <small>Chỉ áp dụng cho Chương Trình Khuyến Mãi</small>
            </div>
         </div>

         <div class="form-row">
            <label for="name" class="col-md-3">Loại bảng giá</label> 
            <div class="col-md-9 mb-3">
              <select name="price_type" class="form-control" id="w-type"><option value="Bảng giá" selected="selected">Bảng Giá</option><option value="Chương trình khuyến mãi">Chương trình khuyến mãi</option></select>            </div>
         </div>

          <div class="form-row">
            <label for="description" class="col-md-3">Mô tả</label> 
            <div class="col-md-9 mb-3">
              <textarea name="description" class="form-control" placeholder="Mô tả" id="description" rows="5"></textarea>            </div>
         </div>

    
      
	       <!-- /.form-group -->
         	<div class="form-row">
           		<label for="status" class="col-md-3">Trạng thái sử dụng</label> 
           		<div class="col-md-9 mb-3">
      					<div class="custom-control custom-switch">
      						<input type="checkbox" name="status" value="1" class="custom-control-input" id="status">      						<label class="custom-control-label" for="status"></label>
      					</div>
      				</div>
         	</div>
       		

       	

          <hr>
          <!-- .form-actions -->
          <div class="form-actions">
            <button type="submit" class="btn btn-primary ml-auto">Cập Nhật</button>
          </div><!-- /.form-actions -->
        </form>  </div><!-- /.card-body -->
</div><!-- /.card -->

<!-- .media -->
                </div>
        <div class="tab-pane fade" id="config">
          <div class="card card-fluid">
  <h6 class="card-header"> Cấu hình </h6><!-- .list-group -->
  <div class="card-body">
   <form method="post" accept-charset="utf-8" action="{{ route('sale_off.store') }}"> @csrf      <!-- .form-actions -->
    
    <div class="form-row">
      <label for="apply" class="col-md-3">Áp dụng</label> 
      <div class="col-md-9 mb-3">
        <select name="apply" class="custom-select" required="required" id="apply"><option value="Không áp dụng">Không áp dụng</option><option value="Toàn bộ sản phẩm">Toàn bộ sản phẩm</option><option value="Sản phẩm chỉ định">Sản phẩm chỉ định</option><option value="Nhóm sản phẩm chỉ định">Nhóm sản phẩm chỉ định</option></select>      </div>
    </div>

    <div class="form-row ">
      <label for="colections" class="col-md-3">Nhóm sản phẩm</label> 
      <div class="col-md-9 mb-3">
        <input type="hidden" name="colections" value=""><select name="colections[]" multiple="" class="form-control select2-hidden-accessible" data-toggle="select2" data-placeholder="Chọn nhóm sản phẩm" placeholder="Chọn nhóm sản phẩm" id="colections" data-select2-id="colections" tabindex="-1" aria-hidden="true"><option value="1">3M Gloss</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Chọn nhóm sản phẩm" style="width: 0px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>      </div>

  
    </div>

    <div class="form-row ">
      <label for="kind_of_discount" class="col-md-3">Loại giảm giá</label> 
      <div class="col-md-9 mb-3">
        <select name="kind_of_discount" class="custom-select" id="kind_of_discount"><option value="">Chọn loại giảm giá</option><option value="%">Phần trăm</option><option value="đ">Giảm trừ</option></select>      </div>
    </div>
    <div class="form-row ">
      <label for="reduced_value" class="col-md-3">Giá trị giảm</label> 
      <div class="col-md-9 mb-3">
      <input type="number" name="reduced_value" class="form-control" step="any" id="reduced_value">      </div>
    </div>

    <div class="form-row ">
      <label for="reduction_limit " class="col-md-3">Giới hạn giảm</label> 
      <div class="col-md-9 mb-3">
      <input type="number" name="reduction_limit" class="form-control" step="any" id="reduction_limit">      </div>
    </div>

    <div class="form-row ">
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-products">
        <i class="fa fa-plus"></i>
        Thêm sản phẩm
      </button>
      
            
      
            <hr>
      <div class="table-responsive mg-top-15">
         <table class="table table-colored table-inverse table-hover">
            <thead>
               <tr>
                  <th style="width: 50px;">STT</th>
                  <th>Sản phẩm</th>
                  <th>Giá gốc</th>
                  <th>Giá thay đổi</th>
                  <th></th>
               </tr>
            </thead>
            <tbody id="fixed_products_results">
                          </tbody>
         </table>
      </div>
    </div>

    <hr>
    <!-- .form-actions -->
    <div class="form-actions">
      <button type="submit" class="btn btn-primary ml-auto">Cập Nhật</button>
    </div><!-- /.form-actions -->
    </form>  </div><!-- /.card-body -->
</div>

<script type="text/javascript">
  var apply_for = jQuery('#apply-for').val();
  price_render_form_fields(apply_for);

  jQuery('#apply-for').on('change',function(){
    var apply_for = jQuery(this).val();
    price_render_form_fields(apply_for);
  });

  function price_render_form_fields(apply_for){
    jQuery('.dynamic-form').each( function(key,val){
      if( jQuery(val).hasClass(apply_for) ){
          jQuery(val).removeClass('d-none');
      }else{
          jQuery(val).addClass('d-none');
      }
    });
  }
</script>

<script type="text/javascript">
  jQuery( document ).ready( function(){
    jQuery('body').on('click','.delete-tr-product',function(){
      jQuery(this).closest('tr').remove();
    });
    jQuery('#insert-products').on('click',function(){
      var selectedRows = jQuery('input[name="selectedRow[]"]:checked');
      if( selectedRows.length > 0 ){
        
        jQuery.each( selectedRows , function(key,val){
            var obj = jQuery(val);
            var id            = jQuery(val).val();
            var name          = obj.closest('tr').find('.f-name').text();
            var sku           = obj.closest('tr').find('.f-sku').text();
            var collection_id = obj.closest('tr').find('.f-collection_id').text();
            var price         = obj.closest('tr').find('.f-price').text();
            price             = price.replace(',','');
            var inventory     = obj.closest('tr').find('.f-inventory').text();
            var xhtml = '';
            xhtml += '<tr class="price-item price-item-id-'+id+'">';
                xhtml += '<td>'+sku+'</td>';
                xhtml += '<td>';
                   xhtml += name;
                xhtml += '</td>';
                xhtml += '<td>'+price+'</td>';
                xhtml += '<td>';

                 xhtml += '<input name="wholesale_prices['+id+'][price_value]" type="text" value="'+price+'" class="form-control price" style="min-width: 100px;">';
                 xhtml += '<input name="wholesale_prices['+id+'][price_old]" type="hidden" value="'+price+'">';
                 xhtml += '<input name="wholesale_prices['+id+'][product_name]" type="hidden" value="'+name+'">';
                 xhtml += '<input name="wholesale_prices['+id+'][product_sku]" type="hidden" value="'+sku+'">';
                 xhtml += '<input name="wholesale_prices['+id+'][id]" type="hidden" value="0">';

                xhtml += '</td>';
                xhtml += '<td class="text-center">';
                  xhtml += '<a href="javascript:;" class="text-danger delete-tr-product">';
                  xhtml += '<i class="far fa-trash-alt"></i>';
                  xhtml += '</a>';
                xhtml += '</td>';
             xhtml += '</tr>';
            
            if( jQuery('#fixed_products_results').find('.price-item-product_id-'+id).length == 0 ){
             jQuery('#fixed_products_results').append(xhtml); 
            }
        });

        
        jQuery('#modal-products').modal('hide');
      }

    });
  });
</script>        </div>
    </div>
  </div><!-- /grid column -->
</div><!-- /grid row -->
</div><!-- /.page-section -->

@endsection;