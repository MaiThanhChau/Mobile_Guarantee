@extends('layouts.master')

@section('content')

           
              
              <header class="page-title-bar">
  <div class="d-flex justify-content-between">
    <h1 class="page-title">Bảng giá</h1>

    <div class="btn-toolbar">
            <a href="{{ route('sale_off.create') }}" class="btn btn-primary">Thêm bảng giá mới</a>     

    </div>
  </div>
</header>

<!-- .page-section -->
<div class="page-section">
   <!-- .card -->
    <div class="card card-fluid">
      <!-- .card-header -->
      <div class="card-header">
        <!-- .nav-tabs -->
        <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
      <a class="nav-link
             active show
            " href="/cms/wholesales">
        Tất cả          
        
      </a>
    </li>  
              </ul><!-- /.nav-tabs -->
      </div><!-- /.card-header -->
      <!-- .card-body -->
      <div class="card-body">
        <div class="row mb-2">
          <div class="col">
            <form action="" method="GET" id="form-search">
	<input type="hidden" name="sort" value="">
	<input type="hidden" name="direction" value="desc">
	
	<div class="input-group input-group-alt">
		<div class="input-group-prepend">
	      	<button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#modalFilterColumns">Tìm nâng cao</button>
	    </div>
		<div class="input-group has-clearable">
			<button type="button" class="close trigger-submit trigger-submit-delay" aria-label="Close">
				<span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
			</button>
			<div class="input-group-prepend trigger-submit">
		  		<span class="input-group-text"><span class="fas fa-search"></span></span>
			</div>
			<input type="text" class="form-control" name="query" value="" placeholder="Tìm nhanh theo cú pháp (ma:Mã kết quả hoặc ten:Tên kết quả)">
		</div>
		<div class="input-group-append">
	      	<button class="btn btn-secondary" data-toggle="modal" data-target="#modalSaveSearch" type="button">Lưu bộ lọc</button>
	    </div>
	    
    </div>
        <!-- #modalFilterColumns -->
<div class="modal fade" id="modalFilterColumns" tabindex="-1" role="dialog" aria-labelledby="modalFilterColumnsLabel" aria-hidden="true">
  <!-- .modal-dialog -->
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header">
        <h5 class="modal-title" id="modalFilterColumnsLabel"> Lọc nâng cao </h5>
      </div><!-- /.modal-header -->
      <!-- .modal-body -->
      <div class="modal-body">
        <!-- #filter-columns -->
        <div id="filter-columns">
          <!-- .form-row -->

          <div class="form-group form-row filter-row">
            <div class="col-lg-4">
                <label class="">Tên nhóm</label>
            </div>
            <div class="col-lg-8">
             <div class="input text"><input type="text" name="filter[name]" class="form-control filter-column f-name" id="name"></div>            </div>
          </div>
          
          


        </div><!-- #filter-columns -->
        <!-- .btn -->
      </div><!-- /.modal-body -->
      <!-- .modal-footer -->
      <div class="modal-footer justify-content-start">
        <button type="submit" class="btn btn-primary" id="apply-filter">Áp dụng</button>
        <button type="button" data-dismiss="modal" class="btn btn-light" id="clear-filter">Hủy</button>
      </div><!-- /.modal-footer -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /#modalFilterColumns -->    <!-- #modalFilterColumns -->
<div class="modal fade" id="modalSaveSearch" tabindex="-1" role="dialog" aria-labelledby="modalSaveSearchLabel" aria-hidden="true">
  <!-- .modal-dialog -->
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header">
        <h5 class="modal-title" id="modalSaveSearchLabel"> Lưu kết quả </h5>
      </div><!-- /.modal-header -->
      <!-- .modal-body -->
      <div class="modal-body">
        <!-- #filter-columns -->
        <div id="search-columns">
          <!-- .form-row -->

          <div class="form-group ">
              <label class="">Tên</label>
             <div class="input text"><input type="text" name="name-search" class="form-control" id="name-search"></div>          </div>

        </div><!-- #filter-columns -->
        <!-- .btn -->
      </div><!-- /.modal-body -->
      <!-- .modal-footer -->
      <div class="modal-footer justify-content-start">
        <button type="button" class="btn btn-primary" id="save-filter">Áp dụng</button>
        <button type="button" data-dismiss="modal" class="btn btn-light" id="clear-filter">Hủy</button>
      </div><!-- /.modal-footer -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /#modalFilterColumns --></form>
          </div>
          <div class="col-auto d-none d-sm-flex">
            <div class="dropdown" id="header-ordering">
	<button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Tùy biến <span class="fa fa-caret-down"></span></button> <!-- .dropdown-menu -->
	<div class="dropdown-menu dropdown-menu-right stop-propagation">
	  <div class="dropdown-arrow"></div>
	  <h6 class="dropdown-header"> Sắp xếp </h6>
	  	  	<label class="custom-control custom-radio">
	  			  		<input type="radio" class="custom-control-input" name="sort" value="id"> 
	  				    
		    <span class="custom-control-label">
		    	Mặc định		    	<!--span class="text-muted">(Decs)</span-->
		    </span>
		  </label> 
	  	  	<label class="custom-control custom-radio">
	  			  		<input type="radio" class="custom-control-input" name="sort" value="title"> 
	  				    
		    <span class="custom-control-label">
		    	Tên		    	<!--span class="text-muted">(Decs)</span-->
		    </span>
		  </label> 
	  	  	<label class="custom-control custom-radio">
	  			  		<input type="radio" class="custom-control-input" name="sort" value="created"> 
	  				    
		    <span class="custom-control-label">
		    	Ngày tạo		    	<!--span class="text-muted">(Decs)</span-->
		    </span>
		  </label> 
	  	  	<label class="custom-control custom-radio">
	  			  		<input type="radio" class="custom-control-input" name="sort" value="ordering"> 
	  				    
		    <span class="custom-control-label">
		    	Sắp xếp		    	<!--span class="text-muted">(Decs)</span-->
		    </span>
		  </label> 
	  	</div><!-- /.dropdown-menu -->
</div><!-- /.dropdown -->          </div>
        </div>
        <!-- .table-responsive -->
        <div class="text-muted"> Trang 1/1, đang xem 2/2 kết quả </div>


        <div class="table-responsive">
          <!-- .table -->
          <table class="table">
            <!-- thead -->
            <thead>
              <tr>
                <th colspan="2" style="min-width:320px">
                  <div class="thead-dd dropdown">
                    <span class="custom-control custom-control-nolabel custom-checkbox"><input type="checkbox" class="custom-control-input" id="check-handle"> <label class="custom-control-label" for="check-handle"></label></span>
                    <div class="thead-btn" role="button" id="bulk-actions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <th> Loại </th>
                <th> Áp dụng cho </th>
                <th> Thiết lập </th>
                <th style="width:100px; min-width:100px;"> &nbsp; </th>
              </tr>
            </thead><!-- /thead -->
            <!-- tbody -->
            <tbody>
                 
                  @foreach ($sale_offs as $sale_off)        
              <tr>
                <td class="align-middle col-checker">
                  <div class="custom-control custom-control-nolabel custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p7"> <label class="custom-control-label" for="p7"></label>
                  </div>
                </td>

                <td>

                  <a href="/cms/wholesales/edit/7" class="btn-account" role="button" style="min-width:320px">
              
                    <span class="account-summary">
                      <span class="account-name text-truncate">
                        <strong>{{$sale_off->name}}</strong>
                      </span> 
                      <span class="account-description">
                        <span class="text-success">Khả dụng</span>                                              </span>
                    </span>
                  </a>


                </td>
                <td class="align-middle"> 
                  {{$sale_off->price_type}}                </td>
                <td class="align-middle"> 
                  {{$sale_off->apply}}               </td>
                <td class="align-middle"> 
                  Giảm: {{$sale_off->reduced_value}} {{$sale_off->kind_of_discount}}          </td>
                <td class="align-middle text-right">
                  <!-- message actions -->
                  <div class="list-group-item-figure">
                    <!-- .dropdown -->
<div class="dropdown">
  <button class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></button> <!-- .dropdown-menu -->
  <div class="dropdown-menu dropdown-menu-right">
      <div class="dropdown-arrow"></div>
                
                    <a href="/cms/wholesales/edit/7" class="dropdown-item">Sửa</a>
                            
        
              <form name="post_6103ab148c59b651824517" style="display:none;" method="post" action="/cms/wholesales/delete/7"><input type="hidden" name="_method" value="POST"><input type="hidden" name="_csrfToken" autocomplete="off" value="cc35313ea36cad7b7773fc82fa6b0e4f6dda8a6fdddc175ed274c045fdee4faca27cb8343dee809e2787c13b0b8026e9573da3ed6dbd2e05e239a97b679c4453"></form><a href="#" class="dropdown-item" onclick="if (confirm(&quot;Ba\u0323n co\u0301 ch\u0103\u0301c ch\u0103\u0301n xo\u0301a # 7?&quot;)) { document.post_6103ab148c59b651824517.submit(); } event.returnValue = false; return false;">Xóa</a>                  
            
      
      
    </div>
</div><!-- /.dropdown -->                  </div>
                  <!-- /message actions -->
                </td>
              </tr>
                 @endforeach
                          
                                       </tbody><!-- /tbody -->
          </table><!-- /.table -->
        </div><!-- /.table-responsive -->
       
      </div><!-- /.card-body -->
    </div><!-- /.card -->

</div><!-- /.page-section -->

            
         
@endsection
