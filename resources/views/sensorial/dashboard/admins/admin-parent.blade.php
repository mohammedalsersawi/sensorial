<?php
use App\Http\Controllers\DashboardController;
use App\Models\Contact;

$messages = Contact::orderBy('created_at', 'DESC')->get();
$messagesCount = Contact::all()->count();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dashboard | @yield('title')</title>

    @yield('styles')
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('requirement/img/logo.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/font-awesome.min.css') }}">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/line-awesome.min.css') }}">

    <!-- Chart CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/plugins/morris/morris.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/style.css') }}">


    <link rel="stylesheet" href="{{ asset('requirement/assets/plugins/toastr/toastr.min.css') }}">


    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/dataTables.bootstrap4.min.css') }}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
   <script src="assets/js/html5shiv.min.js"></script>
   <script src="assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <div id="loader-wrapper">
            <div id="loader">
                <div class="loader-ellips">
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                </div>
            </div>
        </div>
        <!-- Header -->
        <div class="header">

            <!-- Logo -->
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="{{ asset('requirement/img/logo.png') }}" width="70" height="70" alt="">
                </a>
            </div>
            <!-- /Logo -->

            <a id="toggle_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <!-- Header Title -->
            <div class="page-title-box">
                <h3>Sensorial Life</h3>
            </div>
            <!-- /Header Title -->

            <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

            <!-- Header Menu -->
            <ul class="nav user-menu">

                <!-- Search -->
                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                        </a>
                        <form action="search.html">
                            <input class="form-control" type="text" placeholder="Search here">
                            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </li>
                <!-- /Search -->

                <!-- Message Notifications -->
                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fa fa-comment-o"></i> <span class="badge badge-pill">{{ $messagesCount }}</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Messages</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                @foreach ($messages as $message)
                                    <li class="notification-message">
                                        <a href="#">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar">
                                                        <img alt="{{ $message->name }}"
                                                            src="{{ asset('requirement/assets/img/profiles/avatar-09.jpg') }}">
                                                    </span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author"
                                                        style="text-transform: capitalize">{{ $message->name }}
                                                    </span>
                                                    <span
                                                        class="message-time">{{ $message->created_at->isoFormat('LLLL') }}</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content"
                                                        style="text-transform: capitalize">{{ $message->message }}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="chat.html">View all Messages</a>
                        </div>
                    </div>
                </li>
                <!-- /Message Notifications -->

                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img
                                src="{{ asset('requirement/uploads/photo/' . Auth::user()->photo) }}" alt="">
                            <span class="status online"></span></span>
                        <span style="text-transform: capitalize">{{ Auth::user()->name_en }}</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">My Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>
                </li>
            </ul>
            <!-- /Header Menu -->

            <!-- Mobile Menu -->
            <div class="dropdown mobile-user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                        class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="logout">Logout</a>
                </div>
            </div>
            <!-- /Mobile Menu -->
        </div>
        <!-- /Header -->

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">

                                <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                                <li><a href="{{ route('homeShow') }}">User Dashboard</a></li>

                            </ul>
                        </li>

                        <li class="menu-title">
                            <span>Users</span>
                        </li>
                        <li class="submenu">
                            <a href="#" class="noti-dot"><i class="las la-user-shield"></i> <span>Admin</span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('admin.index') }}">Show Admin</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#" class="noti-dot"><i class="las la-chalkboard-teacher"></i>
                                <span>Instructors</span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('instructor.index') }}">All Instuctors</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#" class="noti-dot"><i class="las la-user-graduate"></i>
                                <span>Students</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('student.index') }}">All Students</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Tables</span>
                        </li>
                        <li class="submenu">
                            <a href="#" class=""><i class="las la-bars"></i>
                                <span>Categories</span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('category.index') }}">All Categories</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#" class=""><i class="las la-school"></i> <span>Courses</span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('course.index') }}">All Courses</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Operations</span>
                        </li>
                        <li class="submenu">
                            <a href="#" class=""><i class="las la-pen-alt"></i> <span>Quizzes</span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('quiz.index') }}">Show Quizzes</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#" class=""><i class="las la-bars"></i> <span>Sections</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('section.index') }}">All Sections</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#" class=""><i class="las la-photo-video"></i></i>
                                <span>Lectures</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('lecture.index') }}">All Lectures</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">
                            <span>Operations</span>
                        </li>
                        <li class="submenu">
                            <a href="#" class=""><i class="las la-money-check-alt"></i>
                                <span>Salaries</span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('salary.index') }}">Show Salaries</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#" class=""><i class="las la-money-check-alt"></i>
                                <span>Pricings</span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('price.index') }}">Show Pricings</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Operations</span>
                        </li>
                        <li class="submenu">
                            <a href="#" class=""><i class="las la-envelope"></i> <span>Messages</span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('contact.index') }}">Show Messages</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#" class=""><i class="las la-comment"></i> <span>Comments</span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('comment.index') }}">Show Comments</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">@yield('big-title')</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">@yield('small-title')</li>
                            </ul>
                        </div>
                        <div class="col-auto float-right ml-auto">

                            @yield('button')

                        </div>
                    </div>
                </div>

                <!-- Page Content -->

                @yield('content')

            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('requirement/assets/js/jquery-3.5.1.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('requirement/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('requirement/assets/js/bootstrap.min.js') }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('requirement/assets/js/jquery.slimscroll.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('requirement/assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('requirement/assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('requirement/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('requirement/assets/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('requirement/assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('requirement/assets/js/chart.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('requirement/assets/js/app.js') }}"></script>

    <!-- Datatable JS -->
    <script src="{{ asset('requirement/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('requirement/assets/js/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('requirement/assets/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('requirement/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    @yield('scripts')
</body>

</html>
