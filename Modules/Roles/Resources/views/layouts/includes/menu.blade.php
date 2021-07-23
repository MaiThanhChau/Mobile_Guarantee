<!-- .stacked-menu -->
<nav id="stacked-menu" class="stacked-menu">
        <!-- .menu -->
        <ul class="menu">
            <!-- .menu-item -->
            <li class="menu-item has-active">
                <a href="index.html" class="menu-link">
                    <span class="menu-icon oi oi-dashboard"></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <!-- /.menu-item -->
            <!-- .menu-item -->
            <li class="menu-item has-child">
                <a href="#" class="menu-link">
                    <span class="menu-icon fas fa-boxes"></span>
                    <span class="menu-text">Sản phẩm</span>
                </a>
                <!-- child menu -->
                <ul class="menu">
                    <li class="menu-item">
                        <a href="{{ route('product.index') }}" class="menu-link">Tất Cả Sản Phẩm</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('producttype.index') }}" class="menu-link">Nhóm Sản Phẩm</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('productsupplier.index') }}" class="menu-link">Nhà Cung Cấp</a>
                    </li>
                </ul>
                <!-- /child menu -->
            </li>
            <!-- /.menu-item -->
            <!-- .menu-item -->
            <li class="menu-item has-child">
                <a href="#" class="menu-link">
                    <span class="menu-icon fas fa-users"></span>
                    <span class="menu-text">Nhân viên</span>
                </a>
                <!-- child menu -->
                <ul class="menu">

                    <li class="menu-item">
                        <a href="{{ route('user.index') }}" class="menu-link">Tất Cả Nhân viên</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('usergroup.index') }}" class="menu-link">Nhóm Nhân viên</a>
                    </li>

                </ul>
                <!-- /child menu -->
            </li>
            <!-- /.menu-item -->
            <li class="menu-item">
                <a href="{{ route('order.list') }}" class="menu-link">
                    <span class="menu-icon fas fa-shopping-cart"></span>
                    <span class="menu-text">Đơn hàng</span>
                </a>
            </li>
            <!-- /.menu-item -->
        </ul>
        <!-- /child menu -->
        </li>
        <!-- /.menu-item -->

        <!-- /.menu-item -->
        </ul>
        <!-- /.menu -->
    </nav>
    <!-- /.stacked-menu -->