<li class="nav-item dropdown header-nav-dropdown">
    <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
            class="fas fa-th"></span></a> <!-- .dropdown-menu -->
    <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
        <div class="dropdown-arrow"></div>
        <!-- .dropdown-sheets -->
        <div class="dropdown-sheets">
            <!-- .dropdown-sheet-item -->
            <div class="dropdown-sheet-item">
                <a href="{{ route('order.index') }}" class="tile-wrapper">
                    <span class="tile tile-lg bg-indigo">
                        <i class="fas fa-shopping-cart"></i>
                    </span>
                    <span class="tile-peek">Đơn Hàng</span>
                </a>
            </div>
            <!-- /.dropdown-sheet-item -->
            <!-- .dropdown-sheet-item -->
            <div class="dropdown-sheet-item">
                <a href="{{ route('product.index') }}" class="tile-wrapper">
                    <span class="tile tile-lg bg-teal">
                        <i class="fas fa-boxes"></i>
                    </span>
                    <span class="tile-peek">Sản Phẩm</span>
                </a>
            </div>
            <!-- /.dropdown-sheet-item -->
            <!-- .dropdown-sheet-item -->
            <div class="dropdown-sheet-item">
                <a href="{{ route('user.index') }}" class="tile-wrapper">
                    <span class="tile tile-lg bg-pink">
                        <i class="fa fa-tasks"></i>
                    </span>
                    <span class="tile-peek">Nhân Sự</span>
                </a>
            </div>
            <!-- /.dropdown-sheet-item -->
            <!-- .dropdown-sheet-item -->
            <div class="dropdown-sheet-item">
                <a href="/cms/warehouses" class="tile-wrapper">
                    <span class="tile tile-lg bg-yellow">
                        <i class="fas fa-home"></i>
                    </span>
                    <span class="tile-peek">Kho Hàng</span>
                </a>
            </div>
            <!-- /.dropdown-sheet-item -->
            <!-- .dropdown-sheet-item -->
            <div class="dropdown-sheet-item">
                <a href="{{ route('customers.index') }}" class="tile-wrapper">
                    <span class="tile tile-lg bg-red">
                        <i class="fa fa-users"></i>
                    </span>
                    <span class="tile-peek">Khách Hàng</span>
                </a>
            </div>
            <!-- /.dropdown-sheet-item -->
            <!-- .dropdown-sheet-item -->
            <div class="dropdown-sheet-item">
                <a href="/cms/reports" class="tile-wrapper">
                    <span class="tile tile-lg bg-cyan">
                        <i class="fas fa-chart-bar"></i>
                    </span>
                    <span class="tile-peek">Báo Cáo</span>
                </a>
            </div>
            <!-- /.dropdown-sheet-item -->
        </div>
        <!-- .dropdown-sheets -->
    </div>
    <!-- .dropdown-menu -->
</li>