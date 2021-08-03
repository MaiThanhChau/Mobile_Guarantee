@extends('layouts.master')

@section('content')

<header class="page-title-bar">
  <div class="d-flex flex-column flex-md-row">
    <p class="lead">
     
      <span class="font-weight-bold">Đây là trang tổng quan báo cáo nhanh về tình hình hệ thống</span>
    </p>
    <div class="ml-auto">
        
<form id="form-search" action="" method="GET" style="display: flex;">
	
	<div class="dropdown" style="margin-right: 5px;">
		<button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span>Tất cả chi nhánh</span>
			<i class="fa fa-fw fa-caret-down"></i>
		</button>
		<div class="dropdown-menu dropdown-menu-right dropdown-menu-md stop-propagation">
		  	<div class="dropdown-arrow"></div><!-- .custom-control -->

		    		  	<div class="custom-control custom-radio trigger-submit trigger-submit-delay">
		  				        <input type="radio" class="custom-control-input" id="0" name="warehouse_id" value="0" checked=""> 
		        
		        <label class="custom-control-label d-flex justify-content-between" for="0">
		        	<span>Tất cả chi nhánh</span> 
		        	<span class="text-muted"></span>
		        </label>
		  	</div>
		  			  	<div class="custom-control custom-radio trigger-submit trigger-submit-delay">
		  				        <input type="radio" class="custom-control-input" id="1" name="warehouse_id" value="1"> 	
		        
		        <label class="custom-control-label d-flex justify-content-between" for="1">
		        	<span>Chi Nhánh Q1</span> 
		        	<span class="text-muted"></span>
		        </label>
		  	</div>
		  			  	<div class="custom-control custom-radio trigger-submit trigger-submit-delay">
		  				        <input type="radio" class="custom-control-input" id="2" name="warehouse_id" value="2"> 	
		        
		        <label class="custom-control-label d-flex justify-content-between" for="2">
		        	<span>Chi Nhánh Phú Nhuận</span> 
		        	<span class="text-muted"></span>
		        </label>
		  	</div>
		  			  	<div class="custom-control custom-radio trigger-submit trigger-submit-delay">
		  				        <input type="radio" class="custom-control-input" id="8" name="warehouse_id" value="8"> 	
		        
		        <label class="custom-control-label d-flex justify-content-between" for="8">
		        	<span>Kho Tổng</span> 
		        	<span class="text-muted"></span>
		        </label>
		  	</div>
		  			  	<div class="custom-control custom-radio trigger-submit trigger-submit-delay">
		  				        <input type="radio" class="custom-control-input" id="9" name="warehouse_id" value="9"> 	
		        
		        <label class="custom-control-label d-flex justify-content-between" for="9">
		        	<span>Kho Lỗi</span> 
		        	<span class="text-muted"></span>
		        </label>
		  	</div>
		  	
		</div>
	</div>

	<div id="header-ordering" class="dropdown">
		<button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span>Hôm nay</span> 
			<i class="fa fa-fw fa-caret-down"></i>
		</button>
		<div class="dropdown-menu dropdown-menu-right dropdown-menu-md stop-propagation">
		  	<div class="dropdown-arrow"></div><!-- .custom-control -->
		    
		    		  	<div class="custom-control custom-radio">
		  				        <input type="radio" class="custom-control-input" id="yesterday" name="sort" value="yesterday"> 	
		        		        <label class="custom-control-label d-flex justify-content-between" for="yesterday">
		        	<span>Hôm qua</span> 
		        	<span class="text-muted">02-08-2021</span>
		        </label>
		  	</div>
		  			  	<div class="custom-control custom-radio">
		  				        <input type="radio" class="custom-control-input" id="today" name="sort" value="today" checked=""> 
		        		        <label class="custom-control-label d-flex justify-content-between" for="today">
		        	<span>Hôm nay</span> 
		        	<span class="text-muted">03-08-2021</span>
		        </label>
		  	</div>
		  			  	<div class="custom-control custom-radio">
		  				        <input type="radio" class="custom-control-input" id="last_week" name="sort" value="last_week"> 	
		        		        <label class="custom-control-label d-flex justify-content-between" for="last_week">
		        	<span>Tuần trước</span> 
		        	<span class="text-muted">26-07-2021 -&gt; 01-08-2021</span>
		        </label>
		  	</div>
		  			  	<div class="custom-control custom-radio">
		  				        <input type="radio" class="custom-control-input" id="this_week" name="sort" value="this_week"> 	
		        		        <label class="custom-control-label d-flex justify-content-between" for="this_week">
		        	<span>Tuần này</span> 
		        	<span class="text-muted">02-08-2021 -&gt; 08-08-2021</span>
		        </label>
		  	</div>
		  			  	<div class="custom-control custom-radio">
		  				        <input type="radio" class="custom-control-input" id="this_month" name="sort" value="this_month"> 	
		        		        <label class="custom-control-label d-flex justify-content-between" for="this_month">
		        	<span>Tháng này</span> 
		        	<span class="text-muted">01-08-2021 -&gt; 03-08-2021</span>
		        </label>
		  	</div>
		  			  	<div class="custom-control custom-radio">
		  				        <input type="radio" class="custom-control-input" id="this_year" name="sort" value="this_year"> 	
		        		        <label class="custom-control-label d-flex justify-content-between" for="this_year">
		        	<span>Năm này</span> 
		        	<span class="text-muted">01-01-2021 -&gt; 31-12-2021</span>
		        </label>
		  	</div>
		  			</div>
	</div>
</form>

    </div>
  </div>
</header><!-- /.page-title-bar -->
<!-- .page-section -->

<div class="page-section">
  <!-- .section-block -->
  <div class="section-block">
    <!-- metric row -->
    <div class="metric-row">
      <div class="col-lg-12">
        <div class="metric-row metric-flush">
          <!-- metric column -->
          <div class="col">
            <!-- .metric -->
            <a href="#" id="v_order_sale_product" class="metric metric-bordered align-items-center">
              <h2 class="metric-label"> <span class="v_number">{{$order_number}}</span> Hóa Đơn Bán Hàng </h2>
              <p class="metric-value h3">
                <span class="value"><span class="v_price">{{number_format($order_cart)}}</span></span>
              </p>
            </a> <!-- /.metric -->
          </div><!-- /metric column -->
          <!-- metric column -->
          <div class="col">
            <!-- .metric -->
            <a id="v_order_guarantee" class="metric metric-bordered align-items-center">
              <h2 class="metric-label"> <span class="v_number">0</span> Hóa Đơn Bảo Hành </h2>
              <p class="metric-value h3 d-none">
                <span class="value"><span class="v_price">0</span></span>
              </p>
            </a> <!-- /.metric -->
          </div><!-- /metric column -->
          
          <!-- metric column -->
          <div class="col">
            <!-- .metric -->
            <a href="#" id="v_export_damaged" class="metric metric-bordered align-items-center">
              <h2 class="metric-label"><span class="v_number">0</span> Đơn Hàng Hủy </h2>
              <p class="metric-value h3">
                <span class="value"><span class="v_price">0</span></span>
              </p>
            </a> <!-- /.metric -->
          </div><!-- /metric column -->
        </div>
      </div><!-- metric column -->
      <div class="col-lg-3 d-none">
        <!-- .metric -->
        <a id="v_revenue" class="metric metric-bordered">
          <h2 class="metric-label"> Doanh Thu </h2>
          <p class="metric-value h3">
            <span class="value"><span class="v_price">0</span></span>
          </p>
        </a> <!-- /.metric -->
      </div><!-- /metric column -->
    </div><!-- /metric row -->
  </div>

  <script type="text/javascript">
    jQuery( document ).ready( function(){
      function get_value_report( obj , type ){
        var ajaxData = jQuery('#form-search').serialize();
        ajaxData += '&type='+type;
        jQuery.ajax({
            url: '/cms/home/get_value_report',
            type: "POST",
            dataType: "json",
            headers : {
              "X-CSRF-Token" : csrfToken
            },
            data : ajaxData
        }).done(function( res ) {
          jQuery(obj).find('.v_number').text( res.v_number );
          jQuery(obj).find('.v_price').text( res.v_price );
        });
      }

      get_value_report('#v_order_sale_product','v_order_sale_product');
      get_value_report('#v_order_guarantee','v_order_guarantee');
      get_value_report('#v_export_damaged','v_export_damaged');
      get_value_report('#v_revenue','v_revenue');

    });
  </script>  <!-- /.section-block -->
  <!-- grid row -->

    <div class="row">
    <div class="col-lg-12">
      <div class="card card-fluid">      
	<div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <h3 class="card-title mb-4"> Doanh Thu Hôm nay - (03-08-2021)</h3>
	  <canvas id="report-revenue" class="chartjs chartjs-render-monitor" style="display: block; width: 1567px; height: 783px;" width="1567" height="783"></canvas>
	</div>
</div>	

<script type="text/javascript">

  jQuery( document ).ready( function(){
    var canvas = $('#report-revenue')[0].getContext('2d');

    var data = {
        labels: ['0'],
        datasets: [{
          backgroundColor: Looper.getColors('brand').indigo,
          borderColor: Looper.getColors('brand').indigo,
          data: [0]
        }]
    }; 
    var map_settings = {
      type: 'bar',
      data: data,
      options: {
        responsive: true,
        legend: {
          display: false
        },
        title: {
          display: false
        },
        tooltips: {
            callbacks: {
                label: function(tooltipItem, data) {
                    var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    value = app_number_format(value)+' VND';
                    var label = data.labels[tooltipItem.index];
                    return value;
                }
            }
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: true,
              drawBorder: false,
              drawOnChartArea: false
            },
            ticks: {
              maxRotation: 0,
              maxTicksLimit: 3
            }
          }],
          yAxes: [{
            gridLines: {
              display: true,
              drawBorder: false
            },
            ticks: {
              beginAtZero: true,
              stepSize: 5000000,
              callback: function(value, index, values) {
                value = app_number_format(value)+' VND';
                return value;
              }
            }
          }]
        }
      }
    };
    
    var report_revenue = new Chart(canvas, map_settings);

    var ajaxData = jQuery('#form-search').serialize();
    jQuery.ajax({
      url: '/cms/home/get_report_revenue',
      type: "POST",
      dataType: "json",
      headers : {
      "X-CSRF-Token" : csrfToken
      },
      data : ajaxData
    }).done(function( res ) {
      map_settings.data.labels = res.labels;
      map_settings.data.datasets.forEach(function (dataset) {
        dataset.data = res.data;
      });
		  report_revenue.update();
    });
	
  });
	
</script>    </div>
  </div>
    <div class="row">
    <div class="col-lg-12">
      
<div class="card card-fluid">      
	<div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <h3 class="card-title mb-4"> Doanh Thu Tổng Hợp Các Chi Nhánh Hôm nay - (03-08-2021)</h3>
	  <canvas id="report-revenue-branch" class="chartjs chartjs-render-monitor" style="display: block; width: 1567px; height: 783px;" width="1567" height="783"></canvas>
	</div>
</div>	

<script type="text/javascript">

  jQuery( document ).ready( function(){
    var canvas = $('#report-revenue-branch')[0].getContext('2d');

    var map_settings = {
		type: 'pie',
		data: {
			datasets: [{
				data: [
					0,
					0,
				],
				backgroundColor: [
					'#346cb0',
					'orange',
				],
				label: 'Dataset 1'
			}],
			labels: [
				'',
				'',
			]
		},
		options: {
			responsive: true,
			tooltips: {
	            callbacks: {
	                label: function(tooltipItem, data) {
	                    var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
	                    value = app_number_format(value)+' VND';
	                    var label = data.labels[tooltipItem.index];
	                    return label+' : '+ value;
	                }
	            }
	        }
		}
	};

	
    
    var report_revenue = new Chart(canvas, map_settings);

    var ajaxData = jQuery('#form-search').serialize();
    jQuery.ajax({
      url: '/cms/home/get_report_revenue_branch',
      type: "POST",
      dataType: "json",
      headers : {
      "X-CSRF-Token" : csrfToken
      },
      data : ajaxData
    }).done(function( res ) {
      map_settings.data.labels = res.labels;
      map_settings.data.datasets.forEach(function (dataset) {
        dataset.data = res.data;
      });
		report_revenue.update();
    });
	
  });
	
</script>    </div>
    <div class="col-lg-12">
      <div class="card card-fluid">      
	<div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    
    <h3 class="card-title mb-4"> Doanh Thu Các Chi Nhánh Hôm nay - (03-08-2021)
    </h3>
	  <canvas id="report-revenue-branch-bar" class="chartjs chartjs-render-monitor" style="display: block; width: 1567px; height: 783px;" width="1567" height="783"></canvas>
	</div>
</div>	

<script type="text/javascript">

  jQuery( document ).ready( function(){
    var canvas = $('#report-revenue-branch-bar')[0].getContext('2d');

    var data = {
        labels: ['0'],
        datasets: [
        	{
	          label: 'Dataset 1',
	          backgroundColor: '#4BAC4D',
	          borderColor: '#4BAC4D',
	          data: [0]
	        },
	        {
	           label: 'Dataset 2',
	          backgroundColor: 'orange',
	          borderColor: 'orange',
	          data: [0]
	        }
        ]
    }; 
    var map_settings = {
      type: 'bar',
      data: data,
      options: {
        responsive: true,
        legend: {
          display: true
        },
        title: {
          display: false
        },
        tooltips: {
            mode: 'index',
            intersect: false,
            callbacks: {
                label: function(tooltipItem, data) {
                    var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    value = app_number_format(value)+' VND';
                    var label = data.labels[tooltipItem.index];
                    return value;
                }
            }
        },
        scales: {
            xAxes: [{
              stacked: true
            }],
            yAxes: [{
              stacked: true,
              ticks: {
                beginAtZero: true,
                stepSize: 5000000,
                callback: function(value, index, values) {
                  value = app_number_format(value)+' VND';
                  return value;
                }
              }
            }]
        },
        // scales: {
        //   xAxes: [{
        //     gridLines: {
        //       display: true,
        //       drawBorder: false,
        //       drawOnChartArea: false
        //     },
        //     ticks: {
        //       maxRotation: 0,
        //       maxTicksLimit: 3
        //     }
        //   }],
        //   yAxes: [{
        //     gridLines: {
        //       display: true,
        //       drawBorder: false
        //     },
        //     ticks: {
        //       beginAtZero: true,
        //       stepSize: 5000000,
        //       callback: function(value, index, values) {
        //         value = app_number_format(value)+' VND';
        //         return value;
        //       }
        //     }
        //   }]
        // }
      }
    };
    
    var report_revenue_branch_bar = new Chart(canvas, map_settings);

    var ajaxData = jQuery('#form-search').serialize();
    jQuery.ajax({
      url: '/cms/home/get_report_revenue_branch_bar',
      type: "POST",
      dataType: "json",
      headers : {
      "X-CSRF-Token" : csrfToken
      },
      data : ajaxData
    }).done(function( res ) {
      console.log(res);
      map_settings.data.labels = res.labels;
      map_settings.data.datasets = res.datasets;
	  report_revenue_branch_bar.update();
    });
	
  });
	
</script>    </div>
  </div>
    <div class="row">
    <div class="col-lg-12">
      <div class="card card-fluid">
   <div class="card-header">
   		<h3 class="card-title mb-4"> Top 10 hàng hóa bán chạy</h3>
		<ul class="nav nav-tabs card-header-tabs">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#tp1">Theo doanh thu</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " data-toggle="tab" href="#tp2">Theo số lượng</a>
			</li>
		</ul>
   </div>
   <div class="card-body">
   		<div class="tab-content">
	        <div class="tab-pane fade active show" id="tp1">
	        		        	Chưa có dữ liệu
	        		        </div>
	        <div class="tab-pane fade " id="tp2">
	        		        	Chưa có dữ liệu
	        		        </div>
	    </div>
   </div>
</div>
    </div>
  </div>
  
  </div><!-- /.page-section -->
           
@endsection
