
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
                  <div class="dropdown-arrow"></div>
                  <!-- .custom-control -->
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
                  <div class="dropdown-arrow"></div>
                  <!-- .custom-control -->
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
</header>
<!-- /.page-title-bar -->
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
                        <span class="value"><span class="v_price">{{number_format($order_cart)}} đ</span></span>
                     </p>
                  </a>
                  <!-- /.metric -->
               </div>
               <!-- /metric column -->
               <!-- metric column -->
               <div class="col">
                  <!-- .metric -->
                  <a id="v_order_guarantee" class="metric metric-bordered align-items-center">
                     <h2 class="metric-label"> <span class="v_number">{{$order_quant}}</span> Hóa Đơn Bảo Hành </h2>
                     <p class="metric-value h3">
                        <span class="value"><span class="v_price">{{number_format($quant_price)}} đ</span></span>
                     </p>
                  </a>
                  <!-- /.metric -->
               </div>
               <!-- /metric column -->
               <!-- metric column -->
               <div class="col">
                  <!-- .metric -->
                  <a href="#" id="v_export_damaged" class="metric metric-bordered align-items-center">
                     <h2 class="metric-label"><span class="v_number">{{$order_cancel}}</span> Đơn Hàng Hủy </h2>
                     <p class="metric-value h3">
                        <span class="value"><span class="v_price">{{number_format($price_cancel)}} đ</span></span>
                     </p>
                  </a>
                  <!-- /.metric -->
               </div>
               <!-- /metric column -->
            </div>
         </div>
         <!-- metric column -->
         <div class="col-lg-3 d-none">
            <!-- .metric -->
            <a id="v_revenue" class="metric metric-bordered">
               <h2 class="metric-label"> Doanh Thu </h2>
               <p class="metric-value h3">
                  <span class="value"><span class="v_price">0</span></span>
               </p>
            </a>
            <!-- /.metric -->
         </div>
         <!-- /metric column -->
      </div>
      <!-- /metric row -->
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="card card-fluid">
            <div class="card-body">
               <div class="chartjs-size-monitor">
                  <div class="chartjs-size-monitor-expand">
                     <div class=""></div>
                  </div>
                  <div class="chartjs-size-monitor-shrink">
                     <div class=""></div>
                  </div>
               </div>
               <h3 class="card-title mb-4"> Doanh Thu Hôm nay - (03-08-2021)</h3>
               <canvas id="report-revenue" class="chartjs chartjs-render-monitor" style="display: block; width: 1567px; height: 783px;" width="1567" height="783"></canvas>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="card card-fluid">
            <div class="card-body">
               <div class="chartjs-size-monitor">
                  <div class="chartjs-size-monitor-expand">
                     <div class=""></div>
                  </div>
                  <div class="chartjs-size-monitor-shrink">
                     <div class=""></div>
                  </div>
               </div>
               <h3 class="card-title mb-4"> Doanh Thu Tổng Hợp Các Chi Nhánh Hôm nay - (03-08-2021)</h3>
               <canvas id="report-revenue-branch" class="chartjs chartjs-render-monitor" style="display: block; width: 1567px; height: 783px;" width="1567" height="783"></canvas>
            </div>
         </div>
      </div>
      <div class="col-lg-12">
         <div class="card card-fluid">
            <div class="card-body">
               <div class="chartjs-size-monitor">
                  <div class="chartjs-size-monitor-expand">
                     <div class=""></div>
                  </div>
                  <div class="chartjs-size-monitor-shrink">
                     <div class=""></div>
                  </div>
               </div>
               <h3 class="card-title mb-4"> Doanh Thu Các Chi Nhánh Hôm nay - (03-08-2021)
               </h3>
               <canvas id="report-revenue-branch-bar" class="chartjs chartjs-render-monitor" style="display: block; width: 1567px; height: 783px;" width="1567" height="783"></canvas>
            </div>
         </div>
      </div>
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
</div>
<!-- /.page-section -->
@endsection
@section('script_footer')
<script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
<script>
let chart_labels = '<?= json_encode($report_venue['labels'])?>';
chart_labels = JSON.parse(chart_labels);

let chart_data = '<?= json_encode($report_venue['chart_data'])?>';
chart_data = JSON.parse(chart_data);


var ctx = document.getElementById('report-revenue').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: chart_labels,
        datasets: [{
            label: 'Doanh thu đạt được',
            data: chart_data,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    stepSize: 5000000,
                    callback: function(value, index, values) {
                      value = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'VND' }).format(value);
                      return value;
                    }
                }
            }]
        },
        tooltips: {
            callbacks: {
                label: function(tooltipItem, data) {
                    var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    //value = value +' VND';
                    value = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'VND' }).format(value);

                    var label = data.labels[tooltipItem.index];
                    return value;
                }
            }
        },
    }
});
</script>
@endsection