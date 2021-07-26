@extends('layouts.master')
@section('content')
<header class="page-title-bar">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="#">
                    <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Forms</a>
            </li>
        </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto"> Tạo đơn hàng </h1>
        <!-- .btn-toolbar -->
        <div class="btn-toolbar">
            <button type="button" class="btn btn-secondary" onclick="window.history.go(-1); return false;">TRỞ
                VỀ</button>
        </div>
    </div>
</header>
<!-- /.page-title-bar -->
<!-- .page-section -->
<form method="post" accept-charset="utf-8" action="/cms/orders/edit?type=orders">
    <div style="display:none;"><input type="hidden" name="_method" value="POST" /><input type="hidden" name="_csrfToken"
            autocomplete="off"
            value="95817fe0b6595ebce7a53b6b3d049b7cd3d6fb8b063203203478300fdf58b996e7d95aa7a33f6b44a50c0f08faea93891e6400e66fa11a4c34d26d031abb9e54" />
    </div>
    <style type="text/css">
    .add-new-qty {
        cursor: pointer;
    }
    </style>
    <div class="page-section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card card-fluid">
                    <div class="card-header pb-0">
                        <h5 class="card-title">TẠO ĐƠN HÀNG </h5>

                    </div>
                    <div class="card-body">
                        <input type="hidden" name="guarantee_id" value="">


                        <div class="form-group">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modal-products">
                                <i class="fa fa-plus"></i>
                                Thêm sản phẩm
                            </button>


                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modal-excel-products">
                                <i class="fa fa-plus"></i>
                                Nhập từ File Excel
                            </button>



                        </div>


                        <div class="table-responsive mg-top-15">
                            <table class="table table-colored table-inverse table-hover">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th style="width: 150px;">Số lượng</th>
                                        <th>Giá</th>
                                        <th>Thành tiền</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="fixed_products_results">
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="publisher keep-focus focus active">
                                    <label for="order-note" class="publisher-label">Ghi chú</label>
                                    <!-- .publisher-input -->
                                    <div class="publisher-input">
                                        <textarea name="order_note" class="form-control"
                                            placeholder="Nhập ghi chú đơn hàng" id="order-note" rows="5"></textarea>
                                    </div><!-- /.publisher-input -->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <table class="table-normal table-none-border table-color-gray-text">
                                    <tbody>
                                        <tr>
                                            <td class="text-left color-subtext">Tổng giá trị sản phẩm
                                            </td>
                                            <td class="text-right pl10">
                                                <input type="text" name="cart_subtotal"
                                                    class="price form-control form-control-txt form-control-text cart_subtotal"
                                                    readonly="readonly" autocomplete="off" id="cart-subtotal"
                                                    value="0" />
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-left color-subtext">
                                                <a href="javascript:;" data-toggle="modal" class="hover-underline"
                                                    data-target=".add-discounts"><i class="fa fa-plus-circle"></i> Thêm
                                                    khuyến
                                                    mãi</a>
                                                <div id="discounted-msg">
                                                </div>
                                            </td>
                                            <td class="text-right pl20">
                                                <input type="text" name="discounted_value"
                                                    class="price form-control form-control-txt form-control-text discounted_value"
                                                    readonly="readonly" autocomplete="off" id="discounted-value"
                                                    value="0" />
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-left color-subtext mt10">
                                                Chi phí vận chuyển
                                            </td>
                                            <td class="text-right p-none-b pl10 ">
                                                <input type="text" name="cost"
                                                    class="i-currency form-control form-control-txt cart_cost"
                                                    autocomplete="off" data-mask="currency" id="cost" value="0" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left color-subtext mt10">
                                                Số tiền phải thanh toán
                                            </td>
                                            <td class="text-right p-none-b pl10">
                                                <input type="text" name="cart_total"
                                                    class="price form-control form-control-txt form-control-text cart_total"
                                                    readonly="readonly" autocomplete="off" id="cart-total" value="0" />
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-left color-subtext mt10">
                                                Khách thanh toán
                                                <span class="btn-show-payments text-success"
                                                    title="Cập nhật hình thức thanh toán">
                                                    <i class="fa fa-credit-card"></i>
                                                </span>
                                                <div class="string-payments d-none">Tiền mặt</div>
                                            </td>
                                            <td class="text-right p-none-b pl10">

                                                <input type="text" name="payment_cost"
                                                    class="i-currency form-control form-control-txt cart_total os_part_value"
                                                    autocomplete="off" data-mask="currency" id="payment-cost" />
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

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
                                                    <button class="btn btn-secondary btn-discount_type active"
                                                        value="fixed_amount" type="button">đ</button>
                                                </div>
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-secondary btn-discount_type"
                                                        value="percentage" type="button">%</button>
                                                </div>
                                                <input type="text" name="discount_amount" class="form-control price"
                                                    id="discount-amount" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text cr_symbol">đ</span>
                                                </div>
                                            </div>
                                            <input type="hidden" name="discount_type" class="d-none" id="discount-type"
                                                value="fixed_amount" />
                                        </div>
                                        <div class="form-group">
                                            Hoặc
                                        </div>

                                        <div class="form-group">
                                            <label for="wholesale-id">Bảng giá áp
                                                dụng</label><select name="wholesale_id"
                                                class="form-control custom-select" id="wholesale-id">
                                                <option value="">Không áp dụng</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            Hoặc
                                        </div>
                                        <div class="form-group">
                                            <label for="discounted-code">Mã giảm giá</label>
                                            <div class="input-group has-clearable">
                                                <button type="button" class="close trigger-submit trigger-submit-delay"
                                                    aria-label="Close">
                                                    <span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
                                                </button>
                                                <input type="text" name="discounted_code" id="discounted_code"
                                                    class="form-control" autocomplete="off" maxlength="255" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-start modal-body-scrolled">
                                        <button type="button" class="btn btn-primary" id="apply-coupon">Áp
                                            dụng</button>
                                        <button type="button" data-dismiss="modal" class="btn btn-light"
                                            id="clear-filter">Hủy</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script type="text/javascript">
                        jQuery(document).ready(function() {
                            jQuery('.btn-discount_type').on('click', function() {
                                jQuery('.btn-discount_type').removeClass('active');
                                jQuery(this).addClass('active');
                                var symbol = jQuery(this).text();
                                symbol.trim();
                                jQuery('.cr_symbol').text(symbol);
                                jQuery('#discount-type').val(jQuery(this).val());

                            });
                            jQuery('body').on('click', '#apply-coupon', function() {
                                var obj = jQuery(this);
                                var coupon = jQuery('#discounted_code').val();
                                var d_amount = jQuery('#discount-amount').val();
                                var d_type = jQuery('#discount-type').val();
                                var wholesale_id = jQuery('#wholesale-id').val();

                                var cart_subtotal = jQuery('#cart-subtotal').val();
                                if (cart_subtotal == 0) {
                                    alert(
                                        'Tổng giá trị sản phẩm cần phải lớn hơn 0');
                                } else {
                                    var products = new Array();
                                    jQuery('.price-item').each(function(key, val) {
                                        products.push(jQuery(val).data(
                                            'product-id'));
                                    });
                                }

                                var applied = new Array();
                                if (coupon.length > 0) {
                                    applied.push('coupon');
                                }
                                if (wholesale_id > 0) {
                                    applied.push('wholesale_id');
                                }
                                if (d_amount > 0) {
                                    applied.push('d_amount');
                                }

                                if (applied.length == 1) {
                                    app_apply_coupon(coupon, wholesale_id,
                                        cart_subtotal, products, d_amount, d_type);
                                } else if (applied.length > 1) {
                                    alert('Chỉ có thể áp dụng một hình thức !');
                                }

                                if (applied.length == 0) {
                                    app_apply_coupon(coupon, wholesale_id,
                                        cart_subtotal, products, d_amount, d_type);
                                }

                            });
                        });
                        </script>
                        <div class="modal fade has-shown add-note" id="modal-note" tabindex="-1" role="dialog"
                            aria-labelledby="modalNoteLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header modal-body-scrolled">
                                        <h5 class="modal-title" id="modalNoteLabel"> Thêm ghi chú </h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="order-item-note">Nhập nội dung ghi
                                                chú</label><textarea name="order_item_note" class="form-control"
                                                id="order-item-note" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-start modal-body-scrolled">
                                        <button type="button" class="btn btn-primary" id="apply-note">Áp dụng</button>
                                        <button type="button" data-dismiss="modal" class="btn btn-light"
                                            id="clear-filter">Hủy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                        jQuery(document).ready(function() {
                            jQuery('body').on('click', '.note-tr-product', function() {
                                var p_id = jQuery(this).closest('tr.price-item').data(
                                    'id');
                                var p_name = jQuery(this).closest('tr').find('.p-name')
                                    .text();
                                var qty = jQuery(this).closest('tr').find('.qty').val();
                                jQuery('#active-product-id').val(p_id);
                                jQuery('#modalNoteLabel').text('Ghi chú cho ' +
                                    p_name);

                                var cr_note = jQuery('.price-item-id-' + p_id).find(
                                    '.notes p').text();
                                cr_note.trim();
                                jQuery('#order-item-note').val(cr_note)

                                jQuery('#modal-note').modal('show');
                            });

                            jQuery('#apply-note').on('click', function() {
                                var pr_id = jQuery('#active-product-id').val();
                                var note = jQuery('#order-item-note').val();
                                if (note.length > 0) {
                                    note +=
                                        '<input type="hidden" name="order_items[note][]" value="' +
                                        note + '">';
                                    note = '<p>' + note + '</p>';
                                }

                                jQuery('.price-item-id-' + pr_id).find('.notes').html(
                                    note);
                                jQuery('#modal-note').modal('hide');
                            });


                        });
                        </script>
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
                                                toán</label><select name="payment_status" class="form-control"
                                                id="payment-status">
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
                                                                <input type="text" name="pay_via_cash"
                                                                    class="form-control form-control-txt"
                                                                    autocomplete="off" data-mask="currency"
                                                                    id="pay-via-cash" value="0" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="align-middle">Chuyển khoản</td>
                                                            <td class="align-middle">
                                                                <select name="pay_via_bank_id" class="custom-select"
                                                                    autocomplete="off" id="pay-via-bank-id">
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
                                                                <input type="text" name="pay_via_bank"
                                                                    class="form-control form-control-txt"
                                                                    autocomplete="off" data-mask="currency"
                                                                    id="pay-via-bank" value="0" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="align-middle">Thẻ</td>
                                                            <td class="align-middle">
                                                                <select name="pay_via_card_id" class="custom-select"
                                                                    autocomplete="off" id="pay-via-card-id">
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
                                                                <input type="text" name="pay_via_card"
                                                                    class="form-control form-control-txt"
                                                                    autocomplete="off" data-mask="currency"
                                                                    id="pay-via-card" value="0" />
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
                                                        id="final-payment-cost" readonly="readonly"
                                                        autocomplete="off" />
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="modal-footer justify-content-start modal-body-scrolled">
                                        <button type="button" class="btn btn-primary" id="apply-payments">Áp
                                            dụng</button>
                                        <button type="button" data-dismiss="modal" class="btn btn-light"
                                            id="clear-filter">Hủy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                        jQuery(document).ready(function() {


                            jQuery('body').on('click', '.btn-show-payments', function() {
                                if (jQuery('#cart-total').val() == 0) {
                                    alert('Số tiền phải thanh toán phải lớn hơn 0 ');
                                    return false;
                                }
                                jQuery('#modal-payments').modal('show');
                            });

                            jQuery('#apply-payments').on('click', function() {
                                var fn_cost = jQuery('#final-payment-cost').val();
                                fn_cost = app_number_format(fn_cost);
                                jQuery('#payment-cost').val(fn_cost);
                                jQuery('#modal-payments').modal('hide');
                            });


                            jQuery('#pay-via-cash, #pay-via-bank, #pay-via-card').on(
                                'change keyup',
                                function() {
                                    var fn_cost = 0;
                                    var via_cash = jQuery('#pay-via-cash').val();
                                    var via_bank = jQuery('#pay-via-bank').val();
                                    var via_card = jQuery('#pay-via-card').val();

                                    if (via_cash != '') {
                                        via_cash = via_cash.replace(/,/g, '');
                                    } else {
                                        via_cash = 0;
                                    }
                                    if (via_bank != '') {
                                        via_bank = via_bank.replace(/,/g, '');
                                    } else {
                                        via_bank = 0;
                                    }
                                    if (via_card != '') {
                                        via_card = via_card.replace(/,/g, '');
                                    } else {
                                        via_card = 0;
                                    }

                                    fn_cost += parseFloat(via_cash);
                                    fn_cost += parseFloat(via_bank);
                                    fn_cost += parseFloat(via_card);

                                    jQuery('#final-payment-cost').val(fn_cost);

                                    jQuery('#payment-status').find('option').removeAttr(
                                        'selected');

                                    var cart_total = jQuery('#cart-subtotal').val();
                                    if (fn_cost == 0) {
                                        jQuery('#payment-status').find(
                                            'option[value="debt"]').attr('selected',
                                            'selected');
                                        jQuery('#payment-status').val('debt');
                                    }

                                    if (fn_cost > 0 && fn_cost < cart_total) {
                                        jQuery('#payment-status').find(
                                            'option[value="part"]').attr('selected',
                                            'selected');
                                        jQuery('#payment-status').val('part');
                                    }
                                    if (fn_cost >= cart_total) {
                                        jQuery('#payment-status').find(
                                            'option[value="full"]').attr('selected',
                                            'selected');
                                        jQuery('#payment-status').val('full');
                                    }

                                    jQuery('#payment-status').trigger('change');

                                });


                        });
                        </script>
                        <script type="text/javascript">
                        jQuery(document).ready(function() {
                            app_call_subtotal('.cart_subtotal');

                            function reset_key_items() {
                                jQuery('.price-item').each(function(key, val) {
                                    var product_id = jQuery(val).data('product-id');
                                    jQuery(val).attr('class',
                                        'price-item price-item-id-' + key +
                                        ' product-item-id-' + product_id);
                                    jQuery(val).attr('data-id', key);

                                    var price_item = jQuery(val);
                                    var price = price_item.find('.p-price-value').val();
                                    var price_value = price.replace(/,/g, '');
                                    //price_item.find('.p-price-value').val(price_value)

                                    var qty = price_item.find('.qty').val();
                                    var price = price_value;
                                    var p_subtotal = qty * price;
                                    var price_org = price_item.find('.p-price-org')
                                        .val();
                                    jQuery('.price').number(true);
                                    app_change_price_dynamic(price_item);
                                });
                            }


                            jQuery('body').on('click', '.add-new-qty', function() {
                                jQuery(this).val(1);

                                var obj_clone = jQuery(this).closest('.price-item')
                                    .clone();
                                obj_clone.clone().appendTo('#fixed_products_results');

                                setTimeout(function() {
                                    reset_key_items();
                                }, 500);
                            });



                            jQuery("input.qty").on('change keyup', function() {
                                var price_item = jQuery(this).closest('.price-item');
                                app_change_price_dynamic(price_item);
                            });

                            jQuery('.price').number(true);



                            jQuery('body').on('click', '.delete-tr-product', function() {
                                var obj = jQuery(this);
                                var r = confirm('Bạn có chắc chắn muốn xóa ?');
                                if (r === true) {
                                    jQuery(this).closest('tr').remove();
                                    app_call_subtotal('.cart_subtotal');

                                    jQuery('#apply-coupon').trigger('click');
                                }
                            });

                            jQuery('body').on('change keyup', '.p-price-value, .cart_cost',
                                function() {
                                    var price_item = jQuery(this).closest('.price-item');
                                    app_change_price_dynamic(price_item);
                                });
                            jQuery('#insert-products').on('click', function() {
                                var selectedRows = jQuery(
                                    'input[name="selectedRow[]"]:checked');
                                if (selectedRows.length > 0) {

                                    jQuery.each(selectedRows, function(key, val) {
                                        var obj = jQuery(val);
                                        var id = jQuery(val).val();
                                        var name = obj.closest('tr').find(
                                            '.f-name').html();
                                        var sku = obj.closest('tr').find(
                                            '.f-sku').text();
                                        var collection_id = obj.closest('tr')
                                            .find('.f-collection_id').text();
                                        var price = obj.closest('tr').find(
                                            '.f-price').text();
                                        var price_value = price.replace(/,/g,
                                            '');

                                        var inventory = obj.closest('tr').find(
                                            '.f-inventory').text();
                                        var guarantee_times = obj.closest('tr')
                                            .find('.f-guarantee_times ').text();
                                        var guarantee_times_string = '';
                                        if (guarantee_times) {
                                            guarantee_times_string =
                                                '- (Bảo hành: ' +
                                                guarantee_times + ' ngày)';
                                        }

                                        var oder_key = '';
                                        var xhtml = '';
                                        xhtml +=
                                            '<tr class="price-item price-item-id-0 product-item-id-' +
                                            id +
                                            '" data-id="0" data-product-id="' +
                                            id + '">';
                                        xhtml += '<td class="align-middle">';
                                        xhtml += '<span class="p-name">' +
                                            name + '</span> <br><small>(' +
                                            sku + ') ' +
                                            guarantee_times_string + '</small>';

                                        xhtml += '<div class="imeis">';
                                        xhtml += '<span class="wrap-imei">';
                                        xhtml +=
                                            '<span class="badge badge-danger">';
                                        xhtml +=
                                            '<span class="imei_val">Không chọn</span> - Không chọn';
                                        xhtml += '</span>';
                                        xhtml +=
                                            '<input type="hidden" class="ac_imei_val" value="Không có" name="order_items[imeis][' +
                                            oder_key + ']">';
                                        xhtml +=
                                            '<input type="hidden" class="ac_sp_val" value="0" name="order_items[supporters][' +
                                            oder_key + ']">';

                                        xhtml += '</span>';
                                        xhtml += '</div>';
                                        xhtml += '<div class="notes"></div>';
                                        xhtml += '</td>';

                                        xhtml += '<td class="align-middle">';
                                        xhtml +=
                                            '<input type="hidden" value="' +
                                            id + '" name="order_items[id][' +
                                            oder_key + ']">';

                                        xhtml +=
                                            '<div class="input-group input-group-alt">';
                                        xhtml +=
                                            '<input name="order_items[qty][' +
                                            oder_key +
                                            ']" value="1" type="text" class="form-control qty" readonly>';
                                        xhtml +=
                                            '<div class="input-group-append">';
                                        xhtml +=
                                            '<span class="input-group-text add-new-qty">+</span>';
                                        xhtml += '</div>';
                                        xhtml += '</div>';

                                        xhtml += '</td>';
                                        xhtml += '<td class="align-middle">';
                                        xhtml +=
                                            '<input type="text" class="i-currency form-control form-control-txt p-price-value" autocomplete="off" data-mask="currency"  name="order_items[price][' +
                                            oder_key + ']" value="' + price +
                                            '">';
                                        xhtml +=
                                            '<input type="hidden" class="price p-price-org"   value="' +
                                            price_value + '">';
                                        xhtml +=
                                            '<input type="hidden" class="price p-subtotal-value"   value="' +
                                            price_value + '">';
                                        xhtml +=
                                            '<p class="text-danger" style=""><small class="p-price-discounted">Đã giảm : 0</small></p>';
                                        xhtml += '</td>';
                                        xhtml +=
                                            '<td class="p-subtotal align-middle">' +
                                            price + '</td>';
                                        xhtml +=
                                            '<td class="text-center align-middle">';

                                        xhtml +=
                                            '<a href="javascript:;" title="Cập nhật IMEI" class="text-success edit-tr-product">';
                                        xhtml += '<i class="fa fa-tasks"></i>';
                                        xhtml += '</a>';

                                        xhtml +=
                                            '<a href="javascript:;" title="Cập nhật Ghi chú" class="text-success note-tr-product">';
                                        xhtml +=
                                            '<i class="fa fa-plus-circle"></i>';
                                        xhtml += '</a>';

                                        xhtml +=
                                            '<a href="javascript:;" title="Xóa"  class="text-danger delete-tr-product">';
                                        xhtml +=
                                            '<i class="far fa-trash-alt"></i>';
                                        xhtml += '</a>';
                                        xhtml += '</td>';
                                        xhtml += '</tr>';

                                        if (jQuery('#fixed_products_results')
                                            .find('.price-item-product_id-' +
                                                oder_key).length == 0) {
                                            jQuery('#fixed_products_results')
                                                .append(xhtml);
                                            jQuery('.price').number(true);
                                            const numberMask = textMaskAddons
                                                .createNumberMask({
                                                    prefix: '',
                                                });

                                            vanillaTextMask.maskInput({
                                                inputElement: document
                                                    .querySelector(
                                                        '.i-currency'),
                                                mask: numberMask,
                                            });

                                        }


                                    });

                                    jQuery("input.qty").on('change keyup', function() {
                                        var price_item = jQuery(this).closest(
                                            '.price-item');
                                        app_change_price_dynamic(price_item);
                                    });

                                    setTimeout(function() {
                                        reset_key_items();
                                    }, 500);

                                    app_call_subtotal('.cart_subtotal');
                                    jQuery('#modal-products').modal('hide');
                                    jQuery('#payment-cost').trigger('change');
                                    jQuery('#pay-via-cash').trigger('change');

                                    jQuery('#apply-coupon').trigger('click');
                                }
                            });

                            jQuery('#payment-cost').on('change keyup', function() {
                                var payment_cost = jQuery(this).val();
                                var cart_total = jQuery('#cart-subtotal').val();

                                jQuery('#payment-status').find('option').removeAttr(
                                    'selected');

                                jQuery('#final-cart-total').val(payment_cost);
                                jQuery('#pay-via-cash').val(payment_cost);
                                jQuery('#pay-via-bank').val(0);
                                jQuery('#pay-via-card').val(0);
                                jQuery('#pay-via-cash').trigger('change');


                                //jQuery('#final-payment-cost').val(payment_cost);

                                if (payment_cost == 0) {
                                    jQuery('#payment-status').find(
                                        'option[value="debt"]').attr('selected',
                                        'selected');
                                }

                                if (payment_cost < cart_total) {
                                    jQuery('#payment-status').find(
                                        'option[value="part"]').attr('selected',
                                        'selected');
                                }

                            });
                        });
                        </script>





                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="card-title">VẬN CHUYỂN & THANH TOÁN</h5>
                                <div class="form-group">
                                    <label for="shipping-method-id">Phương thức vận
                                        chuyển</label><select name="shipping_method_id" class="custom-select"
                                        id="shipping-method-id">
                                        <option value="1">Bán hàng tại điểm</option>
                                        <option value="2">Chuyển cho khách</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="payment-method-id">Phương thức thanh
                                        toán</label><select name="payment_method_id" class="custom-select"
                                        id="payment-method-id">
                                        <option value="1">Thanh toán trực tiếp</option>
                                        <option value="2">Thanh toán khi giao hàng</option>
                                    </select>
                                </div>


                            </div>
                            <div class="col-lg-6">
                                <h5 class="card-title">NHÂN VIÊN PHỤ TRÁCH </h5>

                                <div class="form-group">
                                    <label for="supporter-ids">Nhân viên kinh doanh</label><select name="supporter_ids"
                                        class="custom-select" data-toggle="select2"
                                        data-placeholder="Chọn nhân viên kinh doanh" id="supporter-ids">
                                        <option value="18">Triskins sale Q1</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!--div class="row">
              <div class="col-lg-12">
                              </div>
            </div-->


                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-fluid">
                    <div class="card-body">
                        <h5 class="card-title">THÔNG TIN XUẤT HÀNG</h5>
                        <div class="form-group d-none">
                            <label for="type">Loại xuất</label><select name="type" class="custom-select" id="type">
                                <option value="SaleProduct">Bán Hàng</option>
                                <option value="Guarantee">Bảo Hành</option>
                            </select>
                        </div>



                        <div class="form-group">
                            <label for="warehouse-id">Xuất từ kho hàng</label><select name="warehouse_id"
                                class="custom-select" id="warehouse-id">
                                <option value="1" selected="selected">Chi Nhánh Q1</option>
                                <option value="2">Chi Nhánh Phú Nhuận</option>
                                <option value="8">Kho Tổng</option>
                                <option value="9">Kho Lỗi</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="source-id">Nguồn đơn hàng</label><select name="source_id"
                                class="custom-select" id="source-id">
                                <option value="1">Bán tại điểm</option>
                                <option value="2">Website</option>
                                <option value="3">Phone</option>
                                <option value="4">Facebook</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <h5 class="card-title">KHÁCH HÀNG</h5>
                        <div class="form-group">

                            <label for="customer-id">Chọn khách hàng trong hệ thống</label><select
                                name="customer_id" class="ajax-sellect form-control" id="customer-id"></select><small
                                class="text-muted">Để trống nếu như
                                là khách hàng mới</small>
                            <div><small class="text-success applying-wholesale" style="display: none;">Đang áp dụng
                                    bảng giá</small></div>
                        </div>

                        <div class="form-group">
                            <label for="name">Tên khách hàng</label><input type="text" name="name"
                                class="form-control" required="required" maxlength="255" id="name" />
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label><input type="tel" name="phone"
                                class="form-control" required="required" maxlength="255" id="phone" />
                        </div>

                        <div class="form-group">
                            <label for="birthday">Ngày sinh</label>

                            <input type="text" name="birthday" class="form-control" autocomplete="off"
                                placeholder="25/09/1970" data-mask="date" id="birthday" value="" />
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ</label><input type="text" name="address" class="form-control"
                                required="required" maxlength="255" id="address" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label><input type="email" name="email" class="form-control"
                                required="required" maxlength="255" id="email" value="" />
                        </div>
                    </div>
                    <div class="card-body border-top">

                        <div class="form-group">
                            <label for="order-status">Trạng thái đơn hàng</label><select name="order_status"
                                class="form-control" id="order-status">
                                <option value="new">Mới</option>
                                <option value="pending">Đang chờ</option>
                                <option value="processing">Đang xử lý</option>
                                <option value="on-hold">Tạm giữ</option>
                                <option value="completed">Hoàn thành</option>
                                <option value="canceled">Hủy</option>
                                <option value="refunded">Hoàn tiền</option>
                                <option value="failed">Thất bại</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tags">Thẻ đơn hàng</label><input type="hidden" name="tags" value="" /><select
                                name="tags[]" multiple="multiple" class="custom-select" data-toggle="select2"
                                data-placeholder="Thẻ đơn hàng" id="tags">
                                <option value="1">Thẻ 1</option>
                                <option value="2">Thẻ 2</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="birthday">Ngày tạo</label>
                            <div class="input-group input-group-alt flatpickr">
                                <input type="text" name="created" class="form-control" disabled="disabled"
                                    required="required" data-input="" id="created" value="2021-07-22" />
                            </div>
                        </div>
                        <hr>



                        <!-- .form-actions -->
                        <div class="form-actions">
                            <button type="submit" name="save_draff" class="btn btn-warning">Tạo Đơn
                            </button>

                            <button type="submit" name="save_request" class="btn btn-info save_request">Xuất Kho
                            </button>



                        </div><!-- /.form-actions -->


                    </div>
                </div>
            </div>
        </div>
</form>
<!-- /.page-section -->
</div>
@endsection
@section('script_footer')
<script src="{{ asset('assets/javascript/pages/table-demo.js') }}"></script>
@endsection