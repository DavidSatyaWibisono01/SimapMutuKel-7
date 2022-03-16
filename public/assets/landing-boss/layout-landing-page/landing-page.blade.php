@extends('layout-landing-page/index') 

@section('title', 'Landing Page')
@section('container')
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
      <div class="col-lg-6"><img src="{!! asset('assets/images/icons/landing-survey.svg') !!}" alt="..." class="hero-image img-fluid d-none d-lg-block" /></div>
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
      <div class="col-lg-7 mx-auto mt-5"><img src="{!! asset('assets/images/icons/landing-computer.svg') !!}" alt="..." class="intro-image img-fluid" /></div>
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
@endsection
