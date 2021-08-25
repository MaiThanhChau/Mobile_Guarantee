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
                                <label class="">Trạng thái đơn hàng</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input select"><select name="filter[status]"
                                        class="form-control custom-select f-type" id="status">
                                        <option value="">Tất cả</option>
                                        <option value="save_draff">Đã lưu nháp</option>
                                        <option value="save_request">Đã gửi yêu cầu</option>
                                        <option value="save_ok">Đã hoàn thành</option>
                                        <option value="save_canceled">Đã hủy</option>
                                    </select></div>
                            </div>
                        </div>
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
                                <div class="input select"><select name="filter[payment_method_id]"
                                        class="form-control custom-select f-bank" id="payment_method_id">
                                        <option value="">Tất cả</option>
                                        <option value="1">Thanh toán trực tiếp</option>
                                        <option value="2">Thanh toán khi giao hàng</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="form-group form-row filter-row">
                            <div class="col-lg-4">
                                <label class="">Phương thức vận chuyển</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input select"><select name="filter[shipping_method_id]"
                                        class="form-control custom-select f-bank" id="shipping_method_id">
                                        <option value="">Tất cả</option>
                                        <option value="1">Bán hàng tại điểm</option>
                                        <option value="2">Chuyển cho khách</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="form-group form-row filter-row">
                            <div class="col-lg-4">
                                <label class="">Tên khách hàng</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input text"><input type="text" name="filter[customer_name]"
                                        class="form-control f-name" id="customer_name" /></div>
                            </div>
                        </div>
                        <div class="form-group form-row filter-row">
                            <div class="col-lg-4">
                                <label class="">Số điện thoại</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input tel"><input type="tel" name="filter[customer_phone]"
                                        class="form-control f-phone" id="customer_phone" /></div>
                            </div>
                        </div>
                        <div class="form-group form-row filter-row">
                            <div class="col-lg-4">
                                <label class="">Nguồn đơn hàng</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input select">
                                    <select name="filter[source_id]"
                                        class="form-control custom-select  f-warehouse_id" id="source_id">
                                        <option value="">Tất cả</option>
                                        @foreach($source_id as $key => $source_id_item)
                                        <option value="{{$key}}">{{$source_id_item}}</option>
                                        @endforeach
                                    </select>
                                </div>
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
                        <div class="form-group form-row filter-row">
                            <div class="col-lg-4">
                                <label class="">Trạng thái xuất kho</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="input select"><select name="filter[order_status]"
                                        class="form-control custom-select  f-warehouse_id" id="order_status">
                                        <option value="">Tất cả</option>
                                        @foreach($order_status as $key => $order_status_item)
                                        <option value="{{$key}}">{{$order_status_item}}</option>
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