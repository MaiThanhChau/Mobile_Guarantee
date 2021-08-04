<form action="{{ route('importwarehouses.index') }}" method="GET" id="form-search">
    <input type="hidden" name="sort_by" id="sort_by" value="">
    <div class="input-group input-group-alt">
        <div class="input-group-prepend">
            <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#modalFilterColumns">Tìm
                nâng cao</button>
        </div>
        <div class="input-group has-clearable">
            <button type="button" class="close trigger-submit trigger-submit-delay" aria-label="Close">
                <span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
            </button>
            <div class="input-group-prepend trigger-submit">
                <span class="input-group-text"><span class="fas fa-search"></span></span>
            </div>
            <input type="text" class="form-control" name="search" value="{{ $_GET['search'] ?? '' }}"
                placeholder="Tìm nhanh theo cú pháp (Tên khách hàng hoặc số điện thoại)">
        </div>
        <div class="input-group-append">
            <button class="btn btn-secondary" data-toggle="modal" data-target="#modalSaveSearch" type="button">Lưu bộ
                lọc</button>
        </div>
    </div>
    @include('importwarehouses::elements.modals.modalFilterColumns')
    @include('importwarehouses::elements.modals.modalSaveSearch')
</form>