
<div class="top-bar">
   <!-- .top-bar-brand -->
   <div class="top-bar-brand">
    <a href="{{ url('/') }}">
        <img src="https://crm.triskins.vn/img/logo.png" alt="Trang chủ"></a>  
    </div>
   <!-- /.top-bar-brand -->
   <!-- .top-bar-list -->
   <div class="top-bar-list">
      <!-- .top-bar-item -->
      <div class="top-bar-item px-2">
         <!-- toggle menu -->
         <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span
            class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
      </div>
      <!-- /.top-bar-item -->
      <!-- .top-bar-item -->
      <div class="top-bar-item top-bar-item-full">
         <!-- .top-bar-search -->
         <div class="top-bar-search">
            <h3 class="wc d-none d-md-block">Chúc các bạn làm việc hăng say và hiệu quả !!</h3>
         </div>
         <!-- /.top-bar-search -->
      </div>
      <!-- /.top-bar-item -->
      <!-- .top-bar-item -->
      <!-- .top-bar-item -->
      <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
         <!-- .nav -->
         <ul class="header-nav nav">
            <!-- activities -->
            @include('roles::layouts.includes.activities')   
            <!-- /.activities -->
            <!-- messages -->
            @include('roles::layouts.includes.messages')   
            <!-- /messages -->
            <!-- shortcodes -->
            @include('roles::layouts.includes.shortcodes')
            <!-- /shortcodes -->
         </ul>
         <!-- /.nav -->
         <!-- .btn-account -->
         @include('roles::layouts.includes.account')
         <!-- /.btn-account -->
      </div>
      <!-- /.top-bar-item -->
      <!-- /.top-bar-item -->
   </div>
   <!-- /.top-bar-list -->
</div>