<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIM MUTU</title>

    <!-- Bootstrap -->
    <link href="{!! asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="{!! asset('assets/vendors/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{!! asset('assets/vendors/nprogress/nprogress.css" rel="stylesheet') !!}">
    <!-- bootstrap-wysiwyg -->
    <link href="{!! asset('assets/vendors/google-code-prettify/bin/prettify.min.css') !!}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link href="{!! asset('assets/css/custom.min.css') !!}" rel="stylesheet">
  </head>

  <body class="nav-md">
  <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col footer_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="user-dashboard" class="site_title"><img src="{!! asset('assets/images/logo-wk.png') !!} " class="profilebar-img"><span class="title-nav">SIM MUTU</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">

                <ul class="nav side-menu">
                  <li><a href="user-dashboard"><i class="fa fi-rr-home"></i>Dashboard</a></li>

                  <li><a><i class="fa fi-rr-bookmark"></i>Evaluasi Diri</a>
                    <ul class="nav child_menu">
                      <li><a href="/evaluasi-diri-1">Evaluasi Diri Bagian 1</a></li>
                      <li><a href="/evaluasi-diri-2">Evaluasi Diri Bagian 2</a></li>
                    </ul>
                  </li>

              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a><p>&copy; SMK Wikrama Bogor 2022</p></a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fi-rr-list"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        @if(auth()->user()->foto)
                        <img src="/post-images/{{ auth()->user()->foto }}">
                        @else
                        <img src="/post-images/none.png">
                        @endif
                      <i class="fa fi-rr-angle-small-down profile-nav"></i>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item user-profile"  href="javascript:;">
                        @if(auth()->user()->foto)
                        <img src="/post-images/{{ auth()->user()->foto }}">
                        @else
                        <img src="/post-images/none.png">
                        @endif
                          {{ auth()->user()->name }}</a>
                      <a class="dropdown-item"  href="/user-edit-profile">Edit Profil</a>
                      <form action="/logout" method="post">
                        @csrf
                      <button class="dropdown-item" type="submit" ><i class="fa fi-rr-sign-out pull-right"></i> Log Out</button>
                      </form>
                    </div>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- pembatas content -->
        @yield('container')
        <!-- /pembatas content -->

        <!-- footer content -->
        <!-- <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer> -->
        <!-- /footer content -->
    <!-- /compose -->

    <!-- jQuery -->
    <script src="{!! asset('assets/vendors/jquery/dist/jquery.min.js') !!}"></script>
    <!-- Bootstrap -->
   <script src="{!! asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') !!}"></script>
    <!-- FastClick -->
    <script src="{!! asset('assets/vendors/fastclick/lib/fastclick.js') !!}"></script>
    <!-- NProgress -->
    <script src="{!! asset('assets/vendors/nprogress/nprogress.js') !!}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{!! asset('assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') !!}"></script>
    <script src="{!! asset('assets/vendors/jquery.hotkeys/jquery.hotkeys.js') !!}"></script>
    <script src="{!! asset('assets/vendors/google-code-prettify/src/prettify.js') !!}"></script>

    <!-- Custom Theme Scripts -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{!! asset('assets/js/custom.min.js') !!}"></script>

  </body>
</html>
