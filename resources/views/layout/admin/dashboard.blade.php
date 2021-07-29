@extends('layouts.master')
@section('content')



              <header class="page-title-bar">
                <div class="d-flex flex-column flex-md-row">
                  <p class="lead">
                    <span class="font-weight-bold">Chào bạn, chúc bạn một ngày làm việc thành công và hiệu quả !</span> 
                  </p>
                  
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
                          <a href="{{ route('product.index') }}" class="metric metric-bordered align-items-center">
                          <h4 > Quản lý sản phẩm </h4>
                            
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <a href="{{ route('order.index') }}" class="metric metric-bordered align-items-center">
                            <h4 > Quản lý đơn hàng </h4>
                            
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <a href="{{ route('user.index') }}" class="metric metric-bordered align-items-center">
                          <h4 > Quản lý nhân sự </h4>
                            
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->
                        <div class="col">
                      <!-- .metric -->
                      <a href="{{ route('customers.index') }}" class="metric metric-bordered align-items-center">
                      <h4 > Quản lý khách hàng </h4>
                            
                          </a> <!-- /.metric -->
                        
                      </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                  
                      </div>
                      
                    </div><!-- metric column -->
                    
                </div><!-- /.section-block -->
                <!-- grid row -->
                <div class="row">

                <div class="col-12 col-lg-12 col-xl-12">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                       <h3 style="color:#0179a8;text-align:center"> Hệ thống quản lý Bảo hành điện thoại Triskins</h3>
                       <p></p>
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                    
                    
                  </div><!-- /grid column -->

                  <!-- grid column -->
                  <div class="col-12 col-lg-12 col-xl-12">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <div class="chartjs" style="height: 300px">
                          <img src="{{asset('/assets/images/TRISKINS.png')}}" style="width: 550px;height: 280px;display: block; margin-left: auto; margin-right: auto;" alt="">
                        </div>
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                    
                    
                  </div><!-- /grid column -->
                  
                  
                
               
              </div><!-- /.page-section -->
           

@endsection
