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
    <link rel="stylesheet" href="{!! asset('assets/landing-boss/vendor-landing/bootstrap-landing-page/css/bootstrap.min.css') !!}" />
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{!! asset('assets/landing-boss/vendor-landing/font-awesome/css/font-awesome.min.css') !!}" />
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600" />
    <!-- Lightbox-->
    <link rel="stylesheet" href="{!! asset('assets/landing-boss/vendor-landing/lightbox2/css/lightbox.css') !!}" />
    <!-- Custom font icons-->
    <link rel="stylesheet" href="{!! asset('assets/landing-boss/css-landing/fontastic.css') !!}" />
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{!! asset('assets/landing-boss/css-landing/style.default.css') !!}" />
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{!! asset('assets/landing-boss/css-landing/custom-langing-page.css') !!}" />
    <!-- Favicon-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <a href="./" class="navbar-brand"><img src="{!! asset('assets/landing-boss/icons/landing-logo.svg') !!}" alt="" class="img-fluid" /></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">
            Menu<i class="fa fa-bars ml-2"></i>
          </button>
          <div id="navbarSupportedContent" class="navbar-collapse">
            <a href="/login" class="btn color-button ml-auto">Login </a>
          </div>
        </div>
      </nav>
    </header>

    <!-- Hero Section-->
<section class="hero bg-gray">
    <div class="container mb-5">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1 class="hero-heading mb-0">SIM MUTU</h1>
          <div class="row">
            <div class="col-lg-10">
              <p class="lead text-muted mt-4 mb-4">Sim Mutu adalah aplikasi survey untuk mendata kinerja dari setiap guru.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6"><img src="{!! asset('assets/landing-boss/icons/landing-survey.svg') !!}" alt="..." class="hero-image img-fluid d-none d-lg-block" /></div>
      </div>
    </div>
  </section>
  <!-- Intro Section-->
  <section>
    <div class="container">
      <div class="text-center">
        <h2>Aplikasi survey berbasis web</h2>
        <p class="lead text-muted mt-2">Mari gunakan Sim Mutu demi kemajuan tenaga pendidik dan kependidik.</p>
        <!-- <a href="#" class="btn color-button">Learn More</a> -->
      </div>
      <div class="row">
        <div class="col-lg-7 mx-auto mt-5"><img src="{!! asset('assets/landing-boss/icons/landing-computer.svg') !!}" alt="..." class="intro-image img-fluid" /></div>
      </div>
    </div>
  </section>
  <!-- Get Started Section-->
  <section class="get-started bg-blue">
    <div class="container text-center">
      <h2>Ayo mulai isi sekarang</h2>
      <div class="row">
        <div class="col-lg-8 m-auto">
          <p class="lead text-muted mt-2">Klik Login untuk masuk dan mulai isi evaluasi diri masing-masing.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <form action="#" class="subscription-form mt-5">
            <div class="form-group">
              <input type="name" name="name" placeholder="masukan saran mu" class="form-control" />
              <button type="submit" class="btn color-button">Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

    <!-- JavaScript files-->
    <script src="{!! asset('assets/landing-boss/vendor-landing/jquery-landing-page/jquery.min.js') !!} "></script>
    <script src="{!! asset('assets/landing-boss/vendor-landing/bootstrap/js/bootstrap.bundle.min.js') !!} "></script>
    <script src="{!! asset('assets/landing-boss/vendor-landing/jquery.cookie/jquery.cookie.js') !!} "></script>
    <script src="{!! asset('assets/landing-boss/vendor-landing/lightbox2/js/lightbox.js') !!} "></script>
    <script src="{!! asset('assets/landing-boss/js/front.js') !!}"></script>
  </body>
</html>
