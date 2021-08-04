<div id="modal-excel-products" class="modal modal-alert fade" tabindex="-1" role="dialog"
    aria-labelledby="modal-productsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="post" enctype="multipart/form-data" accept-charset="utf-8" id="ajax-upload"
                action="/cms/orders/import">
                <div class="modal-header">
                    <h5 id="moda-productsLabel" class="modal-title"> Nhập dữ liệu từ file excel</h5>
                </div>
                <div class="modal-body">
                    <div class="card card-fluid">
                        <div class="card-body">
                            <div id="status"></div>
                            <label>
                                Vui lòng click vào đây để chọn tập tin từ máy tính hoặc kéo tập tin vào khu vực này.<br>
                                Chỉ chấp nhận các tập tin có định dạng *.xls hoặc *.xlsx.<br>
                            </label>
                            <div class="custom-file">
                                <input type="file"
                                    accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                                    class="custom-file-input" id="fileupload-customInput" name="file" required>
                                <label class="custom-file-label" for="fileupload-customInput">Chọn Tệp</label>
                            </div>
                            <input type="hidden" name="disable_save" value="1" hidden="hidden">
                            <input type="hidden" name="task" value="import_products" hidden="hidden">
                            <input type="hidden" name="id" value="" hidden="hidden">
                            <input type="hidden" name="warehouse_id" value="1" hidden="hidden">
                            <input type="hidden" name="type" value="" hidden="hidden">
                            <input type="hidden" name="allow_exs" value="xls,xlsx" hidden="hidden">
                            <input type="hidden" name="cr_controller" value="Orders" hidden="hidden">

                        </div>
                    </div>
                </div>
                <div class="modal-footer pt-1">
                    <button type="submit" id="import-products" class="btn btn-primary">Tiến Hành</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Đóng</button>
                </div>
            </form>
        </div>
    </div>
</div>