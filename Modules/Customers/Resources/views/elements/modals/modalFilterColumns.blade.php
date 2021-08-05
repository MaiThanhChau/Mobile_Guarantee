<div class="modal fade" id="modalFilterColumns" tabindex="-1" customers="dialog" aria-labelledby="modalFilterColumnsLabel"
    aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-dialog-scrollable" customers="document">
        <!-- .modal-content -->
        <div class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h5 class="modal-title" id="modalFilterColumnsLabel"> Lọc nâng cao </h5>
            </div>
            <!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body">
                <!-- #filter-columns -->
                <div id="filter-columns">
                    <!-- .form-row -->
                    <div class="form-group form-row filter-row">
                        <div class="col-lg-4">
                            <label class="">ID khách hàng</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input text"><input type="text" name="filter[id]" class="form-control f-id"
                                    id="f-id" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row filter-row">
                        <div class="col-lg-4">
                            <label class="">Tên khách hàng</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input text"><input type="text" name="filter[name]" class="form-control f-name"
                                    id="f-name" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row filter-row">
                        <div class="col-lg-4">
                            <label class="">Địa chỉ khách hàng</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input text"><input type="text" name="filter[address]" class="form-control f-address"
                                    id="f-address" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row filter-row">
                        <div class="col-lg-4">
                            <label class="">Số điện thoại khách hàng</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input text"><input type="text" name="filter[phone]" class="form-control f-phone"
                                    id="f-phone" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row filter-row">
                        <div class="col-lg-4">
                            <label class="">Nhóm khách hàng</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input select">
                                <select name="filter[customer_group_id]"
                                    class="form-control custom-select f-customer_group_id" id="f-customer_group_id">
                                    <option value="">Tất cả</option>
                                    @foreach($customergroups as $customergroup)
                                    <option value="{{ $customergroup->id }}">{{ $customergroup->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row filter-row">
                        <div class="col-lg-4">
                            <label class="">Trạng thái</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input select">
                                <select name="filter[status]"
                                    class="form-control custom-select f-status" id="f-status">
                                    <option value="">Tất cả</option>
                                    <option value="1">Khả dụng</option>
                                    <option value="2">Không khả dụng</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- .form-row -->
                </div>
                <!-- #filter-columns -->
                <!-- .btn -->
            </div>
            <!-- /.modal-body -->
            <!-- .modal-footer -->
            <div class="modal-footer justify-content-start">
                <button type="submit" class="btn btn-primary" id="apply-filter">Áp dụng</button>
                <button type="button" data-dismiss="modal" class="btn btn-light" id="clear-filter">Hủy</button>
            </div>
            <!-- /.modal-footer -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>