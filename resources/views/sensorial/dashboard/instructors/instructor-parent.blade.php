<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Sensorial Life | @yield('title')</title>

		@yield('styles')
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('requirement/img/logo.png')}}">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('requirement/assets/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('requirement/assets/css/font-awesome.min.css')}}">

		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{asset('requirement/assets/css/line-awesome.min.css')}}">

		<!-- Chart CSS -->
		<link rel="stylesheet" href="{{asset('requirement/assets/plugins/morris/morris.css')}}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('requirement/assets/css/style.css')}}">


		<link rel="stylesheet" href="{{asset('requirement/assets/plugins/toastr/toastr.min.css')}}">

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
                    <a href="index.html" class="logo">
						<img src="{{asset('requirement/img/logo.png')}}" width="70" height="70" alt="">
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

					<!-- Flag -->
					<li class="nav-item dropdown has-arrow flag-nav">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
							<img src="{{asset('requirement/assets/img/flags/us.png')}}" alt="" height="20"> <span>English</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="{{asset('requirement/assets/img/flags/us.png')}}" alt="" height="16"> English
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="{{asset('requirement/assets/img/flags/fr.png')}}" alt="" height="16"> French
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="{{asset('requirement/assets/img/flags/es.png')}}" alt="" height="16"> Spanish
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="{{asset('requirement/assets/img/flags/de.png')}}" alt="" height="16"> German
							</a>
						</div>
					</li>
					<!-- /Flag -->

					<!-- Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="{{asset('requirement/assets/img/profiles/avatar-02.jpg')}}">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="{{asset('requirement/assets/img/profiles/avatar-03.jpg')}}">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="{{asset('requirement/assets/img/profiles/avatar-06.jpg')}}">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="{{asset('requirement/assets/img/profiles/avatar-17.jpg')}}">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="{{asset('requirement/assets/img/profiles/avatar-13.jpg')}}">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
													<p class="noti-time"><span class="notification-time">2 days ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.html">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->

					<!-- Message Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Messages</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="{{asset('requirement/assets/img/profiles/avatar-09.jpg')}}">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Richard Miles </span>
													<span class="message-time">12:28 AM</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="{{asset('requirement/assets/img/profiles/avatar-02.jpg')}}">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">John Doe</span>
													<span class="message-time">6 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="{{asset('requirement/assets/img/profiles/avatar-03.jpg')}}">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Tarah Shropshire </span>
													<span class="message-time">5 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="{{asset('requirement/assets/img/profiles/avatar-05.jpg')}}">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Mike Litorus</span>
													<span class="message-time">3 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-08.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Catherine Manseau </span>
													<span class="message-time">27 Feb</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
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
							<span class="user-img"><img src="{{asset('requirement/uploads/customer_photo/')}}" alt="">
							<span class="status online"></span></span>
							<span style="text-transform: capitalize"></span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile.html">My Profile</a>
							<a class="dropdown-item" href="settings.html">Settings</a>
							<a class="dropdown-item" href="{{route('logout')}}">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->

				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a>
						<a class="dropdown-item" href="login.html">Logout</a>
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
								<a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">

									<li><a href="{{route('instructor.dashboard')}}">Instructor Dashboard</a></li>

								</ul>
							</li>

							<li class="menu-title">
								<span>Tables</span>
							</li>
                            <li class="submenu">
                                <a href="#" class=""><i class="las la-bars"></i> <span>Courses</span> <span
                                        class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="{{ route('course.index') }}">All Courses</a></li>
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
                            <li class="submenu">
                                <a href="#" class=""><i class="las la-pen-alt"></i> <span>Quizzes</span>
                                    <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="{{ route('quiz.index') }}">Show Quizzes</a></li>
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
									<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
									<li class="breadcrumb-item active">@yield('small-title')</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">

								@yield('button')

							</div>
						</div>
					</div>
				</div>
				<!-- Page Content -->
                @yield('content')
				<!-- /Page Content -->

            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="{{asset('requirement/assets/js/jquery-3.5.1.min.js')}}"></script>

		<!-- Bootstrap Core JS -->
        <script src="{{asset('requirement/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('requirement/assets/js/bootstrap.min.js')}}"></script>

		<!-- Slimscroll JS -->
		<script src="{{asset('requirement/assets/js/jquery.slimscroll.min.js')}}"></script>

		<!-- Chart JS -->
		<script src="{{asset('requirement/assets/js/select2.min.js')}}"></script>
		<script src="{{asset('requirement/assets/js/moment.min.js')}}"></script>
		<script src="{{asset('requirement/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
		<script src="{{asset('requirement/assets/plugins/morris/morris.min.js')}}"></script>
		<script src="{{asset('requirement/assets/plugins/raphael/raphael.min.js')}}"></script>
		<script src="{{asset('requirement/assets/js/chart.js')}}"></script>

		<!-- Custom JS -->
		<script src="{{asset('requirement/assets/js/app.js')}}"></script>

		<script src="{{asset('requirement/assets/plugins/toastr/toastr.min.js')}}"></script>
		<script src="{{asset('requirement/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
		@yield('scripts')
    </body>
</html>
