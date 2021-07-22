<section class="aside-menu has-scrollable">
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
          <span class="menu-icon oi oi-grid-two-up"></span>
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
        </ul>
        <!-- /child menu -->
      </li>
      <!-- /.menu-item -->
      <!-- .menu-item -->
      <li class="menu-item has-child">
        <a href="#" class="menu-link">
          <span class="menu-icon oi oi-bar-chart"></span>
          <span class="menu-text">Khách Hàng</span>
        </a>
        <!-- child menu -->
        <ul class="menu">
          
          <li class="menu-item">
            <a href="{{ route('user.index') }}" class="menu-link">Tất Cả Khách Hàng</a>
          </li>
          <li class="menu-item">
            <a href="{{ route('usergroup.index') }}" class="menu-link">Nhóm Khách Hàng</a>
          </li>
          
        </ul>
        <!-- /child menu -->
      </li>
      <!-- /.menu-item -->
    </ul>
    <!-- /.menu -->
  </nav>
  <!-- /.stacked-menu -->
</section>