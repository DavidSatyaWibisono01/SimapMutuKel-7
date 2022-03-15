<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title')</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="all,follow" />
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{!! asset('assets/vendor-landing/bootstrap-landing-page/css/bootstrap.min.css') !!}" />
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{!! asset('assets/vendor-landing/font-awesome/css/font-awesome.min.css') !!}" />
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600" />
    <!-- Lightbox-->
    <link rel="stylesheet" href="{!! asset('assets/vendor-landing/lightbox2/css/lightbox.css') !!}" />
    <!-- Custom font icons-->
    <link rel="stylesheet" href="{!! asset('assets/css/css-landing/fontastic.css') !!}" />
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{!! asset('assets/css/css-landing/style.default.css') !!}" />
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{!! asset('assets/css/css-landing/custom-langing-page.css') !!}" />
    <!-- Favicon-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <a href="./" class="navbar-brand"><img src="{!! asset('assets/images/icons/landing-logo.svg') !!}" alt="" class="img-fluid" /></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">
            Menu<i class="fa fa-bars ml-2"></i>
          </button>
          <div id="navbarSupportedContent" class="navbar-collapse">
            <a href="#" class="btn color-button ml-auto">Login </a>
          </div>
        </div>
      </nav>
    </header>

    @yield('container')

    <!-- JavaScript files-->
    <script src="{!! asset('assets/vendor-landing/jquery-landing-page/jquery.min.js') !!} "></script>
    <script src="{!! asset('assets/vendor-landing/bootstrap/js/bootstrap.bundle.min.js') !!} "></script>
    <script src="{!! asset('assets/vendor-landing/jquery.cookie/jquery.cookie.js') !!} "></script>
    <script src="{!! asset('assets/vendor-landing/lightbox2/js/lightbox.js') !!} "></script>
    <script src="{!! asset('assets/js/front.js') !!}"></script>
  </body>
</html>
