<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title>  Triskins Login </title>
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/all.css')}}"/>    <!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/theme.min.css')}}"/>    
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/custom.css')}}"/>    <!-- Disable unused skin immediately -->

    <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript">
     var base_url = 'https://crm.triskins.vn/';
     var csrfToken = "06e485a4769b109e540841f258d2b6e8cc1d09033b93589f8a32976ef660a9531fab4a6228588f98eb5d28bf0611f35eb804a76caa456e1290b266e130ca836d";
    </script>

  </head>
  <body>
    <!--[if lt IE 10]>
    <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
    <![endif]-->
    <!-- .auth -->
    <main class="auth">
      <header id="auth-header" class="auth-header" style="background-image: url(https://crm.triskins.vn/assets/images/illustration/img-1.png);">
        <h1>
          <a href="/"><img src="{{ asset('/assets/images/logo.png')}}" alt="TRISKINS"/></a>        </h1>
              </header><!-- form -->
              <canvas class="particles-js-canvas-el" width="1583" height="200" style="width: 100%; height: 100%;"></canvas>
        <!-- .page-message -->
                <!-- /.page-message -->
     <form method="post" accept-charset="utf-8" id="form-login" class="auth-form form-validate" action="{{ route('PostLogin') }}"><div style="display:none;"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="06e485a4769b109e540841f258d2b6e8cc1d09033b93589f8a32976ef660a9531fab4a6228588f98eb5d28bf0611f35eb804a76caa456e1290b266e130ca836d"/></div>   
<!-- .form-group -->{{ csrf_field() }}
<div class="form-group">
    <label for="email-or-phone">Email</label><input type="text" name="email" class="form-control" placeholder="Email"  id="email-or-phone"/></div><!-- /.form-group -->
<!-- .form-group -->
<div class="form-group">
    <label class="d-flex justify-content-between" for="password">
      <span>Mật khẩu</span> 
      <a href="#password" data-toggle="password"><i class="fa fa-fw fa-eye"></i> <span style="display: none;">Hiện</span></a></label>
    <input type="password" name="password" class="form-control" placeholder="Mật khẩu"  id="password"/></div><!-- /.form-group -->
    @if (Session::has('success'))
								<div>
									<p style="color:red">{{ Session::get('success') }}</p>
								</div>
							@endif 
<!-- .form-group -->
<div class="form-group">
  <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
</div><!-- /.form-group -->
<!-- .form-group -->
<div class="form-group text-center">
  <div class="custom-control custom-control-inline custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="remember-me" name="remember"> 
    <label class="custom-control-label" for="remember-me">Ghi nhớ đăng nhập</label>
  </div>
</div><!-- /.form-group -->
<!-- recovery links -->
<div class="text-center pt-3">
  <a href="/users/forgot" class="link">Quên mật khẩu?</a>
</div><!-- /recovery links -->
</form> 

    
      <!-- copyright -->
      <footer class="auth-footer"> © 2021 All Rights Reserved. 
      </footer>
    </main><!-- /.auth -->
    <!-- BEGIN BASE JS -->
        <script src="{{ asset('assets/vendor/bootstrap/js/popper.min.js')}}"></script>    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>   
    <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="{{ asset('assets/vendor/particles.js/particles.min.js')}}"></script>    <script>
      /**
       * Keep in mind that your scripts may not always be executed after the theme is completely ready,
       * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
       */
      $(document).on('theme:init', () =>
      {
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('auth-header', 'https://crm.triskins.vn/assets/javascript/pages/particles.json');
      })
    </script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="{{ asset('assets/javascript/theme.js')}}"></script>    <!-- END THEME JS -->

  </body>
</html>