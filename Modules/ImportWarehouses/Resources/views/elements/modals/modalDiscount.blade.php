<div class="modal fade has-shown add-discounts" id="modalDiscount" tabindex="-1" role="dialog"
    aria-labelledby="modalDiscountLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header modal-body-scrolled">
                <h5 class="modal-title" id="modalDiscountLabel"> Thêm khuyến mãi
                </h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Giảm giá đơn hàng này theo </label>
                    <div class="input-group input-group-alt">
                        <div class="input-group-prepend">
                            <button class="btn btn-secondary btn-discount_type active" value="fixed_amount"
                                type="button">đ</button>
                        </div>
                        <div class="input-group-prepend">
                            <button class="btn btn-secondary btn-discount_type" value="percentage"
                                type="button">%</button>
                        </div>
                        <input type="text" name="discount_amount" class="form-control price" id="discount-amount" />
                        <div class="input-group-append">
                            <span class="input-group-text cr_symbol">đ</span>
                        </div>
                    </div>
                    <input type="hidden" name="discount_type" class="d-none" id="discount-type" value="fixed_amount" />
                </div>
                <div class="form-group">
                    Hoặc
                </div>

                <div class="form-group">
                    <label for="wholesale-id">Bảng giá áp
                        dụng</label><select name="wholesale_id" class="form-control custom-select" id="wholesale-id">
                        <option value="">Không áp dụng</option>
                    </select>
                </div>
                <div class="form-group">
                    Hoặc
                </div>
                <div class="form-group">
                    <label for="discounted-code">Mã giảm giá</label>
                    <div class="input-group has-clearable">
                        <button type="button" class="close trigger-submit trigger-submit-delay" aria-label="Close">
                            <span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
                        </button>
                        <input type="text" name="discounted_code" id="discounted_code" class="form-control"
                            autocomplete="off" maxlength="255" />
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-start modal-body-scrolled">
                <button type="button" class="btn btn-primary" id="apply-coupon">Áp
                    dụng</button>
                <button type="button" data-dismiss="modal" class="btn btn-light" id="clear-filter">Hủy</button>
            </div>
        </div>
    </div>
</div>