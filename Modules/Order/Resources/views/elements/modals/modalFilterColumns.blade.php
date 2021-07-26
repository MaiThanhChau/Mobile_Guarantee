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
                                <label class="">Loại Đơn</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input select"><select name="filter[type]"
                                        class="form-control custom-select f-type" id="type">
                                        <option value="">Tất cả</option>
                                        <option value="SaleProduct">Bán Hàng</option>
                                        <option value="Guarantee">Bảo Hành</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="form-group form-row filter-row">
                            <div class="col-lg-4">
                                <label class="">Hình thức thanh toán</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input select"><select name="filter[type_payment]"
                                        class="form-control custom-select f-bank" id="type-payment">
                                        <option value="">Tất cả</option>
                                        <option value="cash">Tiền mặt</option>
                                        <option value="bank">Chuyển khoản</option>
                                        <option value="card">Thẻ</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="form-group form-row filter-row r-payment t-bank" style="display: none;">
                            <div class="col-lg-4">
                                <label class="">Ngân Hàng</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input select"><select name="filter[pay_via_bank_id]"
                                        class="form-control custom-select f-pay_via_bank_id" id="pay-via-bank-id">
                                        <option value="">Tất cả</option>
                                        <option value="1">VietinBank - 104867866273
                                        </option>
                                        <option value="2">Techcombank - 19027720265024
                                        </option>
                                        <option value="3">VietinBank - 104867866273
                                        </option>
                                        <option value="5">VIB - 646704060041666</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="form-group form-row filter-row r-payment t-card" style="display: none;">
                            <div class="col-lg-4">
                                <label class="">Thẻ</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input select"><select name="filter[pay_via_card_id]"
                                        class="form-control custom-select f-pay_via_card_id" id="pay-via-card-id">
                                        <option value="">Tất cả</option>
                                        <option value="1">VietinBank - 104867866273
                                        </option>
                                        <option value="2">Techcombank - 19027720265024
                                        </option>
                                        <option value="3">VietinBank - 104867866273
                                        </option>
                                        <option value="5">VIB - 646704060041666</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="form-group form-row filter-row">
                            <div class="col-lg-4">
                                <label class="">Tên khách hàng</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input text"><input type="text" name="filter[name]"
                                        class="form-control f-name" id="name" /></div>
                            </div>
                        </div>
                        <div class="form-group form-row filter-row">
                            <div class="col-lg-4">
                                <label class="">Số điện thoại</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input tel"><input type="tel" name="filter[phone]"
                                        class="form-control f-phone" id="phone" /></div>
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
                                        <option value="1">Chi Nhánh Q1</option>
                                        <option value="2">Chi Nhánh Phú Nhuận</option>
                                        <option value="8">Kho Tổng</option>
                                        <option value="9">Kho Lỗi</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="form-group form-row filter-row">
                            <div class="col-lg-4">
                                <label class="">Thẻ đơn hàng</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input select"><select name="filter[tags]"
                                        class="form-control custom-select f-tags" id="tags">
                                        <option value="">Tất cả</option>
                                        <option value="1">Thẻ 1</option>
                                        <option value="2">Thẻ 2</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="form-group form-row filter-row">
                            <div class="col-lg-4">
                                <label class="">Thời gian</label>
                            </div>
                            <div class="col-lg-8">
                                <input id="report_time" type="text" name="filter[report_time]"
                                    class="form-control f-report_time" data-toggle="flatpickr" data-mode="range"
                                    data-date-format="d-m-Y" data-default-dates='""' value="">
                            </div>
                        </div>
                        <div class="form-group form-row filter-row">
                            <div class="col-lg-4">
                                <label class="">Trạng thái xuất kho</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input select"><select name="filter[string_status]"
                                        class="form-control custom-select f-string_status" id="string-status">
                                        <option value="">Tất cả</option>
                                        <option value="draft">Chưa tạo</option>
                                        <option value="request">Chưa Yêu Cầu</option>
                                        <option value="completed">Đã Yêu Cầu</option>
                                        <option value="exported">Đã Xuất</option>
                                        <option value="canceled">Đã Hủy</option>
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