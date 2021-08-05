    <!-- #modalFilterColumns -->
    <div class="modal fade" id="modalFilterColumns" tabindex="-1" role="dialog"
        aria-labelledby="modalFilterColumnsLabel" aria-hidden="true">
        <!-- .modal-dialog -->
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <!-- .modal-content -->
            <div class="modal-content">
                <!-- .modal-header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="modalFilterColumnsLabel"> Lọc nâng cao
                    </h5>
                </div><!-- /.modal-header -->
                <!-- .modal-body -->
                <div class="modal-body">
                    <!-- #filter-columns -->
                    <div id="filter-columns">
                        <!-- .form-row -->
                        <div class="form-group form-row filter-row">
                            <div class="col-lg-4">
                                <label class="">Trạng thái</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input select"><select name="filter[status]"
                                        class="form-control custom-select f-status" id="status">
                                        <option value="">Tất cả</option>
                                        <option value="save_draff">Nháp</option>
                                        <option value="save_request">Yêu cầu</option>
                                        <option value="save_ok">Hoàn thành</option>
                                        <option value="save_canceled">Đã hủy</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="form-group form-row filter-row">
                            <div class="col-lg-4">
                                <label class="">ID sản phẩm</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input text"><input type="text" name="filter[id]"
                                        class="form-control f-id" id="id" /></div>
                            </div>
                        </div>
                        <div class="form-group form-row filter-row">
                            <div class="col-lg-4">
                                <label class="">Ngày tạo</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input tel"><input type="date" name="filter[created_at]"
                                        class="form-control f-created_at" id="created_at" /></div>
                            </div>
                        </div>
                        <div class="form-group form-row filter-row">
                            <div class="col-lg-4">
                                <label class="">Chi Nhánh</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input select"><select name="filter[warehouse_id]"
                                        class="form-control custom-select  f-warehouse_id" id="warehouse-id">
                                        <option value="">Tất cả</option>
                                        @foreach($warehouses as $warehouse)
                                        <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                                        @endforeach
                                    </select></div>
                            </div>
                        </div>
                    </div><!-- #filter-columns -->
                    <!-- .btn -->
                </div><!-- /.modal-body -->
                <!-- .modal-footer -->
                <div class="modal-footer justify-content-start">
                    <button type="submit" class="btn btn-primary" id="apply-filter">Áp
                        dụng</button>
                    <button type="button" data-dismiss="modal" class="btn btn-light" id="clear-filter">Hủy</button>
                </div><!-- /.modal-footer -->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /#modalFilterColumns -->