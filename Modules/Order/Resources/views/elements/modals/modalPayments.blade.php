<div class="modal fade has-shown add-payments" id="modal-payments" tabindex="-1" role="dialog"
    aria-labelledby="modalPaymentsLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header modal-body-scrolled">
                <h5 class="modal-title" id="modalPaymentsLabel"> Khách thanh
                    toán </h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="payment-status">Hình thức thanh
                        toán</label><select name="payment_status" class="form-control" id="payment-status">
                        <option value="full">Thanh toán đủ</option>
                        <option value="part">Thanh toán một phần</option>
                        <option value="debt">Công nợ</option>
                    </select>
                </div>
                <div class="os_part">
                    <div class="form-row">
                        <label class="col custom-col-label text-bold">Khách
                            cần trả</label>
                        <div class="col">
                            <input type="text" name="final_cart_total"
                                class="price form-control form-control-txt form-control-text cart_total text-bold"
                                id="final-cart-total" readonly="readonly" autocomplete="off" />
                        </div>
                    </div>
                    <div class="form-row">
                        <table class="table table-row-border">
                            <tbody>
                                <tr>
                                    <td class="align-middle">Tiền mặt</td>
                                    <td class="align-middle">

                                    </td>
                                    <td class="align-middle">
                                        <input type="text" name="pay_via_cash" class="form-control form-control-txt"
                                            autocomplete="off" data-mask="currency" id="pay-via-cash" value="0" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Chuyển khoản</td>
                                    <td class="align-middle">
                                        <select name="pay_via_bank_id" class="custom-select" autocomplete="off"
                                            id="pay-via-bank-id">
                                            <option value="0">Chọn tài khoản
                                            </option>
                                            <option value="1">VietinBank -
                                                104867866273</option>
                                            <option value="2">Techcombank -
                                                19027720265024</option>
                                            <option value="3">VietinBank -
                                                104867866273</option>
                                            <option value="5">VIB -
                                                646704060041666</option>
                                        </select>
                                    </td>
                                    <td class="align-middle">
                                        <input type="text" name="pay_via_bank" class="form-control form-control-txt"
                                            autocomplete="off" data-mask="currency" id="pay-via-bank" value="0" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Thẻ</td>
                                    <td class="align-middle">
                                        <select name="pay_via_card_id" class="custom-select" autocomplete="off"
                                            id="pay-via-card-id">
                                            <option value="0">Chọn tài khoản
                                            </option>
                                            <option value="1">VietinBank -
                                                104867866273</option>
                                            <option value="2">Techcombank -
                                                19027720265024</option>
                                            <option value="3">VietinBank -
                                                104867866273</option>
                                            <option value="5">VIB -
                                                646704060041666</option>
                                        </select>
                                    </td>
                                    <td class="align-middle">
                                        <input type="text" name="pay_via_card" class="form-control form-control-txt"
                                            autocomplete="off" data-mask="currency" id="pay-via-card" value="0" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-row">
                        <label class="col custom-col-label text-bold">Khách
                            thanh toán</label>
                        <div class="col">
                            <input type="text" name="payment_cost"
                                class="price form-control form-control-txt form-control-text  text-bold"
                                id="final-payment-cost" readonly="readonly" autocomplete="off" />
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer justify-content-start modal-body-scrolled">
                <button type="button" class="btn btn-primary" id="apply-payments">Áp
                    dụng</button>
                <button type="button" data-dismiss="modal" class="btn btn-light" id="clear-filter">Hủy</button>
            </div>
        </div>
    </div>
</div>