<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('requirement/img/logo.png') }}">
    <title>Sensorial Life | @yield('title')</title>

    @yield('styles')
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed">
            <div class="container">
                <a class="navbar-brand" href="home" target="__blank"><img
                        src="{{ asset('requirement/login/img/logo.png') }}" alt="" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('homeShow') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about_us') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Training program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Courses</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <div class="icons">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle drop" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('requirement/login/img/img-2.png') }}" alt=""
                                        class="img-fluid imgs-2">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>

                            <div class="search-1 position-relative">
                                <a href="">
                                    <svg class="search" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <title />
                                        <g fill="none" fill-rule="evenodd" class="search" stroke="none"
                                            stroke-width="1">
                                            <g id="导航图标" transform="translate(-327.000000, -142.000000)">
                                                <g id="编组" transform="translate(327.000000, 142.000000)">
                                                    <rect fill="#FFFFFF" fill-opacity="0.01" fill-rule="nonzero"
                                                        height="24" id="矩形" width="24" x="0"
                                                        y="0" />
                                                    <path
                                                        d="M10.5,19 C15.1944,19 19,15.1944 19,10.5 C19,5.8056 15.1944,2 10.5,2 C5.8056,2 2,5.8056 2,10.5 C2,15.1944 5.8056,19 10.5,19 Z"
                                                        id="search" stroke="#212121" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <path
                                                        d="M13.3284,7.17155 C12.60455,6.4477 11.60455,6 10.5,6 C9.39545,6 8.39545,6.4477 7.67155,7.17155"
                                                        id="search" stroke="#212121" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5" />
                                                    <line id="search" stroke="#212121" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5" x1="16.6109"
                                                        x2="20.85355" y1="16.6109" y2="20.85355" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>


                                <div class="box-5">
                                    <input type="text" name="" id="" placeholder="UX UI"
                                        class="form-control">
                                    <i class="fa-solid fa-magnifying-glass glass"></i>
                                </div>
                            </div>


                            <div class="login">
                                <a href="{{ route('login') }}" class="h6">Login</a>
                            </div>
                            <a href="{{ route('sign-up') }}"><button type="button"
                                    class="btn btn-danger button-1 button-3">Sign-up</button></a>
                        </div>
                    </ul>

                </div>
            </div>
        </nav>

    </header>

    <section class="login-1">

        @yield('content')

    </section>

    <script>
        @yield('scripts')
    </script>

</body>

</html>
