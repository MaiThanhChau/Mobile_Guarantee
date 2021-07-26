<form action="{{ route('order.index') }}" method="GET" id="form-search">
    @csrf
    <input type="hidden" name="sort" value="">
    <input type="hidden" name="direction" value="desc">
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
            <input type="text" class="form-control" name="search" value=""
                placeholder="Tìm nhanh theo cú pháp (ma:Mã kết quả hoặc ten:Tên kết quả)">
        </div>
        <div class="input-group-append">
            <button class="btn btn-secondary" data-toggle="modal" data-target="#modalSaveSearch" type="button">Lưu bộ
                lọc</button>
        </div>
    </div>
    @include('order::elements.modals.modalFilterColumns')
    @include('order::elements.modals.modalSaveSearch')

</form>