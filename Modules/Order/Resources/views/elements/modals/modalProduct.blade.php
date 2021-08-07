<div id="modal-products" class="modal modal-alert fade" tabindex="-1" role="dialog"
    aria-labelledby="modal-productsLabel" aria-hidden="true">

    <!-- .modal-dialog -->
    <div class="modal-dialog modal-xl" role="document">
        <!-- .modal-content -->
        <div class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h5 id="moda-productsLabel" class="modal-title"> Danh sách sản phẩm</h5>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body">
                <!-- .card -->
                <div class="card card-fluid">

                    <!-- .card-body -->
                    <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form-group -->
                    <div class="form-group">
                      <!-- .input-group -->
                      <div class="input-group input-group-alt">
                        <!-- .input-group-prepend -->
                        <div class="input-group-prepend">
                          <select id="filterBy" class="custom-select">
                            <option value='' selected> Lọc bởi </option>
                            <option value="1"> Tên </option>
                            <option value="2"> Kho </option>
                            <option value="3"> Mã </option>
                            <option value="4"> Giá Nhập </option>
                            <option value="5"> Giá Bán </option>
                          </select>
                        </div><!-- /.input-group-prepend -->
                        <!-- .input-group -->
                        <div class="input-group has-clearable">
                          <button id="clear-search" type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                          <div class="input-group-prepend">
                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                          </div><input id="table-search" type="text" class="form-control" placeholder="Search products">
                        </div><!-- /.input-group -->
                      </div><!-- /.input-group -->
                    </div><!-- /.form-group -->
                    <!-- .table -->
                    <table id="myTable" class="table">
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th colspan="2" style="min-width: 320px;">
                            <div class="thead-dd dropdown">
                              <span class="custom-control custom-control-nolabel custom-checkbox"><input type="checkbox" class="custom-control-input" id="check-handle"> <label class="custom-control-label" for="check-handle"></label></span>
                              <div class="thead-btn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fa fa-caret-down"></span>
                              </div>
                              <div class="dropdown-menu">
                                <div class="dropdown-arrow"></div><a class="dropdown-item" href="#">Select all</a> <a class="dropdown-item" href="#">Unselect all</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Bulk remove</a> <a class="dropdown-item" href="#">Bulk edit</a> <a class="dropdown-item" href="#">Separate actions</a>
                              </div>
                            </div>
                          </th>
                          <th> Tồn kho </th>
                          <th> Mã </th>
                          <th> Giá Nhập </th>
                          <th> Giá Bán </th>
                        </tr>
                      </thead><!-- /thead -->
                      <!-- tbody -->
                      <tbody>
                        <!-- create empty row to passing html validator -->
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          
                        </tr>
                      </tbody><!-- /tbody -->
                    </table><!-- /.table -->
                  </div><!-- /.card-body -->
                    <!-- /.card-body -->
                </div><!-- /.card -->
            </div><!-- /.modal-body -->
            <!-- .modal-footer -->
            <div class="modal-footer pt-1">
                <button type="button" id="insert-products" class="btn btn-primary">Chọn</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Đóng</button>
            </div><!-- /.modal-footer -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->