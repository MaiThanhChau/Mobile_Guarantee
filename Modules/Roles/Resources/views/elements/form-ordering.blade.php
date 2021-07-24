<div class="dropdown" id="header-ordering">
    <button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Tùy biến
        <span class="fa fa-caret-down"></span></button> <!-- .dropdown-menu -->
    <div class="dropdown-menu dropdown-menu-right stop-propagation">
        <div class="dropdown-arrow"></div>
        <h6 class="dropdown-header"> Sắp xếp </h6>
        <label class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" name="sort_by" value="id_desc"
            <?= ( @$_GET['sort_by'] == 'id_desc' ) ? 'checked' : '' ?> 
            onclick="document.getElementById('sort_by').value=this.value; document.getElementById('form-search').submit(); "
            >
            <span class="custom-control-label">
                Mới nhất trước
            </span>
        </label>

        <label class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" name="sort_by" value="id_asc"
            <?= ( @$_GET['sort_by'] == 'id_asc' ) ? 'checked' : '' ?> 
            onclick="document.getElementById('sort_by').value=this.value; document.getElementById('form-search').submit(); "
            >
            <span class="custom-control-label">
                Cũ nhất trước
            </span>
        </label>

    </div>
    <!-- /.dropdown-menu -->
</div>
<!-- /.dropdown -->