<div class="modal fade" id="modalFilterColumns" tabindex="-1" role="dialog" aria-labelledby="modalFilterColumnsLabel"
    aria-hidden="true">
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
                            <label class="">ID sản phẩm</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input text"><input type="text" name="filter[id]" class="form-control f-id"
                                    id="f-id" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row filter-row">
                        <div class="col-lg-4">
                            <label class="">Tên sản phẩm</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input text"><input type="text" name="filter[name]" class="form-control f-name"
                                    id="f-name" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row filter-row">
                        <div class="col-lg-4">
                            <label class="">Mã sản phẩm</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input text"><input type="text" name="filter[sku]" class="form-control f-sku"
                                    id="f-sku" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row filter-row">
                        <div class="col-lg-4">
                            <label class="">Nhóm</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input select">
                                <select name="filter[group_product_id]"
                                    class="form-control custom-select f-group_product_id" id="f-group_product_id">
                                    <option value="">Tất cả</option>
                                    @foreach($product_groups as $product_group)
                                    <option value="{{ $product_group->id }}">{{ $product_group->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group form-row filter-row">
                        <div class="col-lg-4">
                            <label class="">Kho</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input select">
                                <select name="filter[warehouse_id]"
                                    class="form-control custom-select f-warehouse_id" id="f-warehouse_id">
                                    <option value="">Tất cả</option>
                                    <option value="1">Chi Nhánh Q1</option>
                                    <option value="2">Chi Nhánh Phú Nhuận</option>
                                    <option value="8">Kho Tổng</option>
                                    <option value="9">Kho Lỗi</option>
                                </select></div>
                        </div>
                    </div> -->
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
                                    <option value="0">Không khả dụng</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row filter-row">
                        <div class="col-lg-4">
                            <label class="">Thời hạn bảo hành</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input select">
                                <select name="filter[guarantee_time]"
                                    class="form-control custom-select f-guarantee_time" id="f-guarantee_time">
                                    <option value="">Tất cả</option>
                                    <?php $months = [1,3,6,9,12,24]; ?>
                                    @foreach($months as $month)
                                    <option value="{{ $month }}">
                                        @if($month == 1) 1 tháng
                                        @elseif($month == 3) 3 tháng
                                        @elseif($month == 6) 6 tháng
                                        @elseif($month == 9) 9 tháng
                                        @elseif($month == 12) 12 tháng
                                        @elseif($month == 24) 24 tháng
                                        @endif
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row filter-row">
                        <div class="col-lg-4">
                            <label class="">Nhà cung cấp</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input select">
                                <select name="filter[supplier_product_id]"
                                    class="form-control custom-select f-supplier_product_id" id="f-supplier_product_id">
                                    <option value="">Tất cả</option>
                                    @foreach($supplier_products as $supplier_product)
                                    <option value="{{ $supplier_product->id }}">{{ $supplier_product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
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
</div><!-- /#modalFilterColumns -->
<!-- #modalFilterColumns -->