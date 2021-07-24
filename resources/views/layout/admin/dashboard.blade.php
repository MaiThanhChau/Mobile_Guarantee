@extends('layout.admin.app')
@section('content')

<!-- .app-main -->
<main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <div class="d-flex flex-column flex-md-row">
                  <p class="lead">
                    <span class="font-weight-bold">Chào, CodeGym.</span> <span class="d-block text-muted">aaaaaaaaaaaa.</span>
                  </p>
                  <div class="ml-auto">
                    <!-- .dropdown -->
                    <div class="dropdown">
                      <button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>This Week</span> <i class="fa fa-fw fa-caret-down"></i></button> <!-- .dropdown-menu -->
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-md stop-propagation">
                        <div class="dropdown-arrow"></div><!-- .custom-control -->
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="dpToday" name="dpFilter" data-start="2019/03/27" data-end="2019/03/27"> <label class="custom-control-label d-flex justify-content-between" for="dpToday"><span>Today</span> <span class="text-muted">Mar 27</span></label>
                        </div><!-- /.custom-control -->
                        <!-- .custom-control -->
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="dpYesterday" name="dpFilter" data-start="2019/03/26" data-end="2019/03/26"> <label class="custom-control-label d-flex justify-content-between" for="dpYesterday"><span>Yesterday</span> <span class="text-muted">Mar 26</span></label>
                        </div><!-- /.custom-control -->
                        <!-- .custom-control -->
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="dpWeek" name="dpFilter" data-start="2019/03/21" data-end="2019/03/27" checked> <label class="custom-control-label d-flex justify-content-between" for="dpWeek"><span>This Week</span> <span class="text-muted">Mar 21-27</span></label>
                        </div><!-- /.custom-control -->
                        <!-- .custom-control -->
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="dpMonth" name="dpFilter" data-start="2019/03/01" data-end="2019/03/27"> <label class="custom-control-label d-flex justify-content-between" for="dpMonth"><span>This Month</span> <span class="text-muted">Mar 1-31</span></label>
                        </div><!-- /.custom-control -->
                        <!-- .custom-control -->
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="dpYear" name="dpFilter" data-start="2019/01/01" data-end="2019/12/31"> <label class="custom-control-label d-flex justify-content-between" for="dpYear"><span>This Year</span> <span class="text-muted">2019</span></label>
                        </div><!-- /.custom-control -->
                        <!-- .custom-control -->
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="dpCustom" name="dpFilter" data-start="2019/03/27" data-end="2019/03/27"> <label class="custom-control-label" for="dpCustom">Custom</label>
                          <div class="custom-control-hint my-1">
                            <!-- datepicker:range -->
                            <input type="text" class="form-control" id="dpCustomInput" data-toggle="flatpickr" data-mode="range" data-disable-mobile="true" data-date-format="Y-m-d"> <!-- /datepicker:range -->
                          </div>
                        </div><!-- /.custom-control -->
                      </div><!-- /.dropdown-menu -->
                    </div><!-- /.dropdown -->
                  </div>
                </div>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                  <!-- metric row -->
                  <div class="metric-row">
                    <div class="col-lg-9">
                      <div class="metric-row metric-flush">
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <a href="user-teams.html" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label"> Nhân Viên </h2>
                            <p class="metric-value h3">
                              <sub><i class="oi oi-people"></i></sub> <span class="value">5</span>
                            </p>
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <a href="user-projects.html" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label"> Công Việc </h2>
                            <p class="metric-value h3">
                              <sub><i class="oi oi-fork"></i></sub> <span class="value">12</span>
                            </p>
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <a href="user-tasks.html" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label"> Nhiệm Vụ </h2>
                            <p class="metric-value h3">
                              <sub><i class="fa fa-tasks"></i></sub> <span class="value">64</span>
                            </p>
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->
                      </div>
                    </div><!-- metric column -->
                    <div class="col-lg-3">
                      <!-- .metric -->
                      <a href="user-tasks.html" class="metric metric-bordered">
                        <div class="metric-badge">
                          <span class="badge badge-lg badge-success"><span class="oi oi-media-record pulse mr-1"></span> TỔNG HỢP</span>
                        </div>
                        <p class="metric-value h3">
                          <sub><i class="oi oi-timer"></i></sub> <span class="value">8</span>
                        </p>
                      </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                  </div><!-- /metric row -->
                </div><!-- /.section-block -->
                <!-- grid row -->
                <div class="row">
                  <!-- grid column -->
                  <div class="col-12 col-lg-12 col-xl-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h3 class="card-title mb-4"> Nhiệm Vụ Hoàn Thành </h3>
                        <div class="chartjs" style="height: 292px">
                          <canvas id="completion-tasks"></canvas>
                        </div>
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->
                  
                  <!-- grid column -->
                  <div class="col-12 col-lg-6 col-xl-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body pb-0">
                        <h3 class="card-title"> Bảng Xếp Hạng </h3><!-- legend -->
                        <ul class="list-inline small">
                          <li class="list-inline-item">
                            <i class="fa fa-fw fa-circle text-light"></i> Nhiệm Vụ </li>
                          <li class="list-inline-item">
                            <i class="fa fa-fw fa-circle text-purple"></i> Hoàn Thành </li>
                          <li class="list-inline-item">
                            <i class="fa fa-fw fa-circle text-teal"></i> Tích Cực </li>
                          <li class="list-inline-item">
                            <i class="fa fa-fw fa-circle text-red"></i> Quá Hạn </li>
                        </ul><!-- /legend -->
                      </div><!-- /.card-body -->
                      <!-- .list-group -->
                      <div class="list-group list-group-flush">
                        <!-- .list-group-item -->
                        <div class="list-group-item">
                          <!-- .list-group-item-figure -->
                          <div class="list-group-item-figure">
                            <a href="user-profile.html" class="user-avatar" data-toggle="tooltip" title="Martha Myers"><img src="assets/images/avatars/uifaces16.jpg" alt=""></a>
                          </div><!-- /.list-group-item-figure -->
                          <!-- .list-group-item-body -->
                          <div class="list-group-item-body">
                            <!-- .progress -->
                            <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-circle text-purple"&gt;&lt;/i&gt; 2065&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-teal"&gt;&lt;/i&gt; 231&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-red"&gt;&lt;/i&gt; 54&lt;/div&gt;'>
                              <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="73.46140163642832" aria-valuemin="0" aria-valuemax="100" style="width: 73.46140163642832%">
                                <span class="sr-only">73.46140163642832% Complete</span>
                              </div>
                              <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="8.217716115261473" aria-valuemin="0" aria-valuemax="100" style="width: 8.217716115261473%">
                                <span class="sr-only">8.217716115261473% Complete</span>
                              </div>
                              <div class="progress-bar bg-red" role="progressbar" aria-valuenow="1.92102454642476" aria-valuemin="0" aria-valuemax="100" style="width: 1.92102454642476%">
                                <span class="sr-only">1.92102454642476% Complete</span>
                              </div>
                            </div><!-- /.progress -->
                          </div><!-- /.list-group-item-body -->
                        </div><!-- /.list-group-item -->
                        <!-- .list-group-item -->
                        <div class="list-group-item">
                          <!-- .list-group-item-figure -->
                          <div class="list-group-item-figure">
                            <a href="user-profile.html" class="user-avatar" data-toggle="tooltip" title="Tammy Beck"><img src="assets/images/avatars/uifaces15.jpg" alt=""></a>
                          </div><!-- /.list-group-item-figure -->
                          <!-- .list-group-item-body -->
                          <div class="list-group-item-body">
                            <!-- .progress -->
                            <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-circle text-purple"&gt;&lt;/i&gt; 1432&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-teal"&gt;&lt;/i&gt; 406&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-red"&gt;&lt;/i&gt; 49&lt;/div&gt;'>
                              <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="54.180855088914115" aria-valuemin="0" aria-valuemax="100" style="width: 54.180855088914115%">
                                <span class="sr-only">54.180855088914115% Complete</span>
                              </div>
                              <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="15.361331819901627" aria-valuemin="0" aria-valuemax="100" style="width: 15.361331819901627%">
                                <span class="sr-only">15.361331819901627% Complete</span>
                              </div>
                              <div class="progress-bar bg-red" role="progressbar" aria-valuenow="1.853953840332955" aria-valuemin="0" aria-valuemax="100" style="width: 1.853953840332955%">
                                <span class="sr-only">1.853953840332955% Complete</span>
                              </div>
                            </div><!-- /.progress -->
                          </div><!-- /.list-group-item-body -->
                        </div><!-- /.list-group-item -->
                        <!-- .list-group-item -->
                        <div class="list-group-item">
                          <!-- .list-group-item-figure -->
                          <div class="list-group-item-figure">
                            <a href="user-profile.html" class="user-avatar" data-toggle="tooltip" title="Susan Kelley"><img src="assets/images/avatars/uifaces17.jpg" alt=""></a>
                          </div><!-- /.list-group-item-figure -->
                          <!-- .list-group-item-body -->
                          <div class="list-group-item-body">
                            <!-- .progress -->
                            <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-circle text-purple"&gt;&lt;/i&gt; 1271&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-teal"&gt;&lt;/i&gt; 87&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-red"&gt;&lt;/i&gt; 82&lt;/div&gt;'>
                              <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="52.13289581624282" aria-valuemin="0" aria-valuemax="100" style="width: 52.13289581624282%">
                                <span class="sr-only">52.13289581624282% Complete</span>
                              </div>
                              <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="3.568498769483183" aria-valuemin="0" aria-valuemax="100" style="width: 3.568498769483183%">
                                <span class="sr-only">3.568498769483183% Complete</span>
                              </div>
                              <div class="progress-bar bg-red" role="progressbar" aria-valuenow="3.3634126333059884" aria-valuemin="0" aria-valuemax="100" style="width: 3.3634126333059884%">
                                <span class="sr-only">3.3634126333059884% Complete</span>
                              </div>
                            </div><!-- /.progress -->
                          </div><!-- /.list-group-item-body -->
                        </div><!-- /.list-group-item -->
                        <!-- .list-group-item -->
                        <div class="list-group-item">
                          <!-- .list-group-item-figure -->
                          <div class="list-group-item-figure">
                            <a href="user-profile.html" class="user-avatar" data-toggle="tooltip" title="Albert Newman"><img src="assets/images/avatars/uifaces18.jpg" alt=""></a>
                          </div><!-- /.list-group-item-figure -->
                          <!-- .list-group-item-body -->
                          <div class="list-group-item-body">
                            <!-- .progress -->
                            <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-circle text-purple"&gt;&lt;/i&gt; 1527&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-teal"&gt;&lt;/i&gt; 205&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-red"&gt;&lt;/i&gt; 151&lt;/div&gt;'>
                              <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="75.18463810930577" aria-valuemin="0" aria-valuemax="100" style="width: 75.18463810930577%">
                                <span class="sr-only">75.18463810930577% Complete</span>
                              </div>
                              <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="10.093549975381585" aria-valuemin="0" aria-valuemax="100" style="width: 10.093549975381585%">
                                <span class="sr-only">10.093549975381585% Complete</span>
                              </div>
                              <div class="progress-bar bg-red" role="progressbar" aria-valuenow="7.434761201378631" aria-valuemin="0" aria-valuemax="100" style="width: 7.434761201378631%">
                                <span class="sr-only">7.434761201378631% Complete</span>
                              </div>
                            </div><!-- /.progress -->
                          </div><!-- /.list-group-item-body -->
                        </div><!-- /.list-group-item -->
                        <!-- .list-group-item -->
                        <div class="list-group-item">
                          <!-- .list-group-item-figure -->
                          <div class="list-group-item-figure">
                            <a href="user-profile.html" class="user-avatar" data-toggle="tooltip" title="Kyle Grant"><img src="assets/images/avatars/uifaces19.jpg" alt=""></a>
                          </div><!-- /.list-group-item-figure -->
                          <!-- .list-group-item-body -->
                          <div class="list-group-item-body">
                            <!-- .progress -->
                            <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-circle text-purple"&gt;&lt;/i&gt; 643&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-teal"&gt;&lt;/i&gt; 265&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-red"&gt;&lt;/i&gt; 127&lt;/div&gt;'>
                              <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="36.89041881812966" aria-valuemin="0" aria-valuemax="100" style="width: 36.89041881812966%">
                                <span class="sr-only">36.89041881812966% Complete</span>
                              </div>
                              <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="15.203671830177854" aria-valuemin="0" aria-valuemax="100" style="width: 15.203671830177854%">
                                <span class="sr-only">15.203671830177854% Complete</span>
                              </div>
                              <div class="progress-bar bg-red" role="progressbar" aria-valuenow="7.286288009179575" aria-valuemin="0" aria-valuemax="100" style="width: 7.286288009179575%">
                                <span class="sr-only">7.286288009179575% Complete</span>
                              </div>
                            </div><!-- /.progress -->
                          </div><!-- /.list-group-item-body -->
                        </div><!-- /.list-group-item -->
                      </div><!-- /.list-group -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->
                </div><!-- /grid row -->
                <!-- card-deck-xl -->
                <div class="card-deck-xl">
                  <!-- .card -->
                  <div class="card card-fluid pb-3">
                    <div class="card-header"> Dự Án Đang Hoạt Động </div><!-- .lits-group -->
                    <div class="lits-group list-group-flush">
                      <!-- .lits-group-item -->
                      <div class="list-group-item">
                        <!-- .lits-group-item-figure -->
                        <div class="list-group-item-figure">
                          <div class="has-badge">
                            <a href="page-project.html" class="tile tile-md bg-purple">LT</a> <a href="#team" class="user-avatar user-avatar-xs"><img src="assets/images/avatars/team4.jpg" alt=""></a>
                          </div>
                        </div><!-- .lits-group-item-figure -->
                        <!-- .lits-group-item-body -->
                        <div class="list-group-item-body">
                          <h5 class="card-title">
                            <a href="page-project.html">Looper Admin Theme</a>
                          </h5>
                          <p class="card-subtitle text-muted mb-1"> Progress in 74% - Last update 1d </p><!-- .progress -->
                          <div class="progress progress-xs bg-transparent">
                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="2181" aria-valuemin="0" aria-valuemax="100" style="width: 74%">
                              <span class="sr-only">74% Complete</span>
                            </div>
                          </div><!-- /.progress -->
                        </div><!-- .lits-group-item-body -->
                      </div><!-- /.lits-group-item -->
                      <!-- .lits-group-item -->
                      <div class="list-group-item">
                        <!-- .lits-group-item-figure -->
                        <div class="list-group-item-figure">
                          <div class="has-badge">
                            <a href="page-project.html" class="tile tile-md bg-indigo">SP</a> <a href="#team" class="user-avatar user-avatar-xs"><img src="assets/images/avatars/team1.jpg" alt=""></a>
                          </div>
                        </div><!-- .lits-group-item-figure -->
                        <!-- .lits-group-item-body -->
                        <div class="list-group-item-body">
                          <h5 class="card-title">
                            <a href="page-project.html">Smart Paper</a>
                          </h5>
                          <p class="card-subtitle text-muted mb-1"> Progress in 22% - Last update 2h </p><!-- .progress -->
                          <div class="progress progress-xs bg-transparent">
                            <div class="progress-bar bg-indigo" role="progressbar" aria-valuenow="867" aria-valuemin="0" aria-valuemax="100" style="width: 22%">
                              <span class="sr-only">22% Complete</span>
                            </div>
                          </div><!-- /.progress -->
                        </div><!-- .lits-group-item-body -->
                      </div><!-- /.lits-group-item -->
                      <!-- .lits-group-item -->
                      <div class="list-group-item">
                        <!-- .lits-group-item-figure -->
                        <div class="list-group-item-figure">
                          <div class="has-badge">
                            <a href="page-project.html" class="tile tile-md bg-yellow">OS</a> <a href="#team" class="user-avatar user-avatar-xs"><img src="assets/images/avatars/team2.png" alt=""></a>
                          </div>
                        </div><!-- .lits-group-item-figure -->
                        <!-- .lits-group-item-body -->
                        <div class="list-group-item-body">
                          <h5 class="card-title">
                            <a href="page-project.html">Online Store</a>
                          </h5>
                          <p class="card-subtitle text-muted mb-1"> Progress in 99% - Last update 2d </p><!-- .progress -->
                          <div class="progress progress-xs bg-transparent">
                            <div class="progress-bar bg-yellow" role="progressbar" aria-valuenow="6683" aria-valuemin="0" aria-valuemax="100" style="width: 99%">
                              <span class="sr-only">99% Complete</span>
                            </div>
                          </div><!-- /.progress -->
                        </div><!-- .lits-group-item-body -->
                      </div><!-- /.lits-group-item -->
                      <!-- .lits-group-item -->
                      <div class="list-group-item">
                        <!-- .lits-group-item-figure -->
                        <div class="list-group-item-figure">
                          <div class="has-badge">
                            <a href="page-project.html" class="tile tile-md bg-blue">BA</a> <a href="#team" class="user-avatar user-avatar-xs"><img src="assets/images/avatars/bootstrap.svg" alt=""></a>
                          </div>
                        </div><!-- .lits-group-item-figure -->
                        <!-- .lits-group-item-body -->
                        <div class="list-group-item-body">
                          <h5 class="card-title">
                            <a href="page-project.html">Booking App</a>
                          </h5>
                          <p class="card-subtitle text-muted mb-1"> Progress in 35% - Last update 4h </p><!-- .progress -->
                          <div class="progress progress-xs bg-transparent">
                            <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="112" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                              <span class="sr-only">35% Complete</span>
                            </div>
                          </div><!-- /.progress -->
                        </div><!-- .lits-group-item-body -->
                      </div><!-- /.lits-group-item -->
                      <!-- .lits-group-item -->
                      <div class="list-group-item">
                        <!-- .lits-group-item-figure -->
                        <div class="list-group-item-figure">
                          <div class="has-badge">
                            <a href="page-project.html" class="tile tile-md bg-teal">SB</a> <a href="#team" class="user-avatar user-avatar-xs"><img src="assets/images/avatars/sketch.svg" alt=""></a>
                          </div>
                        </div><!-- .lits-group-item-figure -->
                        <!-- .lits-group-item-body -->
                        <div class="list-group-item-body">
                          <h5 class="card-title">
                            <a href="page-project.html">SVG Icon Bundle</a>
                          </h5>
                          <p class="card-subtitle text-muted mb-1"> Progress in 32% - Last update 1d </p><!-- .progress -->
                          <div class="progress progress-xs bg-transparent">
                            <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="461" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                              <span class="sr-only">32% Complete</span>
                            </div>
                          </div><!-- /.progress -->
                        </div><!-- .lits-group-item-body -->
                      </div><!-- /.lits-group-item -->
                      <!-- .lits-group-item -->
                      <div class="list-group-item">
                        <!-- .lits-group-item-figure -->
                        <div class="list-group-item-figure">
                          <div class="has-badge">
                            <a href="page-project.html" class="tile tile-md bg-pink">SP</a> <a href="#team" class="user-avatar user-avatar-xs"><img src="assets/images/avatars/team4.jpg" alt=""></a>
                          </div>
                        </div><!-- .lits-group-item-figure -->
                        <!-- .lits-group-item-body -->
                        <div class="list-group-item-body">
                          <h5 class="card-title">
                            <a href="page-project.html">Syrena Project</a>
                          </h5>
                          <p class="card-subtitle text-muted mb-1"> Progress in 93% - Last update 8h </p><!-- .progress -->
                          <div class="progress progress-xs bg-transparent">
                            <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="3981" aria-valuemin="0" aria-valuemax="100" style="width: 93%">
                              <span class="sr-only">93% Complete</span>
                            </div>
                          </div><!-- /.progress -->
                        </div><!-- .lits-group-item-body -->
                      </div><!-- /.lits-group-item -->
                    </div><!-- /.lits-group -->
                  </div><!-- /.card -->
                  
                </div><!-- /card-deck-xl -->
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- .app-footer -->
        
        <!-- /.wrapper -->
      </main><!-- /.app-main -->

@endsection
