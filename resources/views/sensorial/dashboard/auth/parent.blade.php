<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <meta name="description" content="Smarthr - Bootstrap Admin Template" />
    <meta
      name="keywords"
      content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects"
    />
    <meta name="author" content="Dreamguys - Bootstrap Admin Template" />
    <meta name="robots" content="noindex, nofollow" />
    <title>Sensorial Life | @yield('title')</title>

    <!-- Favicon -->
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{asset('requirement/img/logo.png')}}"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('requirement/assets/css/bootstrap.min.css')}}" />

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('requirement/assets/css/font-awesome.min.css')}}" />

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{asset('requirement/assets/css/line-awesome.min.css')}}" />

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{asset('requirement/assets/css/dataTables.bootstrap4.min.css')}}" />

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{asset('requirement/assets/css/select2.min.css')}}" />

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{asset('requirement/assets/css/bootstrap-datetimepicker.min.css')}}" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('requirement/assets/css/style.css')}}" />
    @yield('styles')

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
      <!-- Header -->
      <div class="header">
        <!-- Logo -->
        <div class="header-left">
          <a href="#" class="logo">
            <img src="{{asset('requirement/img/logo.png')}}" width="60" height="60" alt="" />
          </a>
        </div>
        <!-- /Logo -->

        <!-- Header Title -->
        <div class="page-title-box float-left">
          <h3>Sensorial Life</h3>
        </div>
        <!-- /Header Title -->

        <!-- Header Menu -->
        <ul class="nav user-menu">
          <!-- Search -->
          <li class="nav-item">
            <div class="top-nav-search">
              <a href="javascript:void(0);" class="responsive-search">
                <i class="fa fa-search"></i>
              </a>
              <form action="search.html">
                <input
                  class="form-control"
                  type="text"
                  placeholder="Search here"
                />
                <button class="btn" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </form>
            </div>
          </li>
          <!-- /Search -->

          <!-- Flag -->
          <li class="nav-item dropdown has-arrow flag-nav">
            <a
              class="nav-link dropdown-toggle"
              data-toggle="dropdown"
              href="#"
              role="button"
            >
              <img src="assets/img/flags/us.png" alt="" height="20" />
              <span>English</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="javascript:void(0);" class="dropdown-item">
                <img src="assets/img/flags/us.png" alt="" height="16" /> English
              </a>
              <a href="javascript:void(0);" class="dropdown-item">
                <img src="assets/img/flags/fr.png" alt="" height="16" /> French
              </a>
              <a href="javascript:void(0);" class="dropdown-item">
                <img src="assets/img/flags/es.png" alt="" height="16" /> Spanish
              </a>
              <a href="javascript:void(0);" class="dropdown-item">
                <img src="assets/img/flags/de.png" alt="" height="16" /> German
              </a>
            </div>
          </li>
          <!-- /Flag -->

          <li class="nav-item">
            
          </li>
        </ul>
        <!-- /Header Menu -->

        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
          <a
            href="#"
            class="nav-link dropdown-toggle"
            data-toggle="dropdown"
            aria-expanded="false"
            ><i class="fa fa-ellipsis-v"></i
          ></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
          </div>
        </div>
        <!-- /Mobile Menu -->
      </div>
      <!-- /Header -->

      <!-- Page Wrapper -->
      <div class="">

        <!-- Page Content -->

        @yield('content')

      </div>
      
      <!-- /Page Wrapper -->
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{asset('requirement/assets/js/jquery-3.5.1.min.js')}}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{asset('requirement/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('requirement/assets/js/bootstrap.min.j')}}s"></script>

    <!-- Slimscroll JS -->
    <script src="{{asset('requirement/assets/js/jquery.slimscroll.min.j')}}s"></script>

    <!-- Select2 JS -->
    <script src="{{asset('requirement/assets/js/select2.min.js')}}"></script>

    <!-- Datatable JS -->
    <script src="{{asset('requirement/assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('requirement/assets/js/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Datetimepicker JS -->
    <script src="{{asset('requirement/assets/js/moment.min.j')}}s"></script>
    <script src="{{asset('requirement/assets/js/bootstrap-datetimepicker.min.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('requirement/assets/js/app.js')}}"></script>
    @yield('scripts')
  </body>
</html>
