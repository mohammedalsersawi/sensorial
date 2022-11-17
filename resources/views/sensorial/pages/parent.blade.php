<?php
use App\Http\Controllers\CartPageController;
use App\Models\Cart;
if (auth()->user()) {
    $user = auth()->user()->id;
    $cart = Cart::where('user_id', '=', $user)->get();
    $count = Cart::where('user_id', $user)->count();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('requirement/img/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sensorial Life | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('requirement/pages/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('requirement/pages/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('requirement/pages/css/style-1.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="{{ asset('requirement/assets/plugins/toastr/toastr.min.css') }}">
    @yield('styles')
</head>
<style>
    header nav .logout {
        position: absolute;
        right: -5.5rem;
        top: 2.5rem;
        background-color: white;
        border-radius: 4px;
        width: 9rem;
        height: 5rem;
        border: 1px solid rgba(0, 0, 0, .15);
        cursor: pointer;
        display: none;
        font-size: 15px;
        font-weight: bold;
    }

    header nav ul li a {
        color: #2e2e2e !important;
        font-weight: 700;
        margin-right: 30px;
    }

    @media (max-width: 1130.98px) {
        header nav .logout {
            right: -1rem;
        }
    }

    header nav .logout.open {
        display: inline-block;
    }

    header nav .logout ul li {
        margin-top: 6px;
        padding: 4px 0 0 8px;
    }

    header nav .logout ul li:hover {
        background-color: #eee;
    }

    header nav .logout svg {
        margin-right: 5px !important;
    }

    header nav .box-1 .img-3 {
        border-radius: 15px;
        width: 65px;
        float: left;
        margin-right: 12px;
    }
</style>

<body id="page-top" onload="translate('en','lng-tag')">

    @auth
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('homeShow') }}"><img
                            src="{{ asset('requirement/pages/img/logo.png') }}" alt="" class="img-fluid"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('homeShow') }}"
                                    lng-tag="Home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('customerShow', auth()->user()->id) }}"
                                    lng-tag="My Profile">My Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about_us" lng-tag="About us">About_us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('coursesShow') }}" lng-tag="Courses">Training
                                    Programs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('categoryShow') }}"
                                    lng-tag="Training program">Categories</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false" lng-tag="More">
                                    More
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#" lng-tag="Team Academy">Team Academy </a>
                                    </li>
                                    <li><a class="dropdown-item" href="#" lng-tag="My Learning">My Learning </a></li>
                                    <li><a class="dropdown-item" href="#" lng-tag="Contact us">Contact us </a></li>
                                    <li><a class="dropdown-item" href="#" lng-tag="F&Q">F&Q</a></li>
                                </ul>
                            </li>
                            <div class="icons">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle drop" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('requirement/pages/img/img-2.png') }}" alt=""
                                            class="img-fluid imgs-2">
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>

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
                                        <input type="search" name="" id="" placeholder="UX UI"
                                            class="form-control">
                                        <i class="fa-solid fa-magnifying-glass glass"></i>
                                    </div>
                                </div>

                               <x-likecourse></x-likecourse>

                                <div class="bell-1 position-relative">
                                    <a href="">
                                        <svg class="bell" xmlns="http://www.w3.org/2000/svg" width="24px"
                                            height="24px" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M12 1C8.318 1 5 3.565 5 7v4.539a3.25 3.25 0 01-.546 1.803l-2.2 3.299A1.518 1.518 0 003.519 19H8.5a3.5 3.5 0 107 0h4.982a1.518 1.518 0 001.263-2.36l-2.2-3.298A3.25 3.25 0 0119 11.539V7c0-3.435-3.319-6-7-6zM6.5 7c0-2.364 2.383-4.5 5.5-4.5s5.5 2.136 5.5 4.5v4.539c0 .938.278 1.854.798 2.635l2.199 3.299a.017.017 0 01.003.01l-.001.006-.004.006-.006.004-.007.001H3.518l-.007-.001-.006-.004-.004-.006-.001-.007.003-.01 2.2-3.298a4.75 4.75 0 00.797-2.635V7zM14 19h-4a2 2 0 104 0z" />
                                        </svg>
                                    </a>
                                    <div class="box-4">
                                        <h6 lng-tag="Notifications">Notifications</h6>
                                        <p class="pp-6" lng-tag="All">All</p>
                                        <p class="pp-7" lng-tag="Unread">Unread</p>
                                        <div class="person">
                                            <img src="{{ asset('requirement/pages/img/person.png') }}" alt=""
                                                class="img-fluid man">
                                            <p class="fw-bold">Lynette Saunders <span>suspendisse lorem erat ullamcorper
                                                    etiam.</span></p>
                                        </div>
                                        <div class="person">
                                            <img src="{{ asset('requirement/pages/img/person.png') }}" alt=""
                                                class="img-fluid man">
                                            <p class="fw-bold">Lynette Saunders <span>suspendisse lorem erat ullamcorper
                                                    etiam.</span></p>
                                        </div>
                                        <div class="person">
                                            <img src="{{ asset('requirement/pages/img/person.png') }}" alt=""
                                                class="img-fluid man">
                                            <p class="fw-bold">Lynette Saunders <span>suspendisse lorem erat ullamcorper
                                                    etiam.</span></p>
                                        </div>
                                    </div>
                                </div>

                                <x-CartCourse></x-CartCourse>
                                <span class="profile-1 position-relative">
                                    <img src="{{ asset('requirement/pages/img/profile.png') }}" alt=""
                                        class="img-fluid profile">

                                    <div class="logout">
                                        <ul class="list-unstyled log">
                                            <li lng-tag="View Profile"> <a style="text-decoration: none"
                                                    href="{{ route('customerShow', auth()->user()->id) }}"><i
                                                        class="fa-regular fa-address-card"></i>My
                                                    Profile</li></a>
                                            <li lng-tag="Log-out"> <a style="text-decoration: none"
                                                    href="{{ route('logout') }}">
                                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>Log-out
                                                </a></li>
                                        </ul>
                                    </div>
                                </span>
                            </div>
                        </ul>

                    </div>
                </div>
            </nav>
        </header>
    @else
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('homeShow') }}"><img
                            src="{{ asset('requirement/pages/img/logo.png') }}" alt="" class="img-fluid"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('homeShow') }}"
                                    lng-tag="Home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" lng-tag="About us">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('coursesShow') }}" lng-tag="Courses">Training
                                    Programs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('categoryShow') }}"
                                    lng-tag="Training program">Categories</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false" lng-tag="More">
                                    More
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#" lng-tag="Team Academy">Team Academy </a>
                                    </li>
                                    <li><a class="dropdown-item" href="#" lng-tag="My Learning">My Learning </a>
                                    </li>
                                    <li><a class="dropdown-item" href="#" lng-tag="Contact us">Contact us </a></li>
                                    <li><a class="dropdown-item" href="#" lng-tag="F&Q">F&Q</a></li>
                                </ul>
                            </li>
                            <div class="icons">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle drop" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('requirement/pages/img/img-2.png') }}" alt=""
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
                                        <input type="search" name="" id="" placeholder="UX UI"
                                            class="form-control">
                                        <i class="fa-solid fa-magnifying-glass glass"></i>
                                    </div>
                                </div>


                                <div class="login">
                                    <a href="{{ route('login') }}" class="h6" lng-tag="Login">Login</a>
                                </div>
                                <a href="{{ route('sign-up') }}"><button type="button"
                                        class="btn btn-danger button-1 button-3" lng-tag="Sign-up">Sign-up</button></a>
                            </div>
                        </ul>

                    </div>
                </div>
            </nav>

        </header>
    @endauth

    @yield('content')

    <footer>
        <div class="container">
            <div class="row align-items-center text-center text-md-start">
                <div class="col-md-6 col-lg-3 mb-2">
                    <div class="image">
                        <img src="{{ asset('requirement/pages/img/logo.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <ul class="list-unstyled">
                        <li class="active" lng-tag="About">About</li>
                        <li lng-tag="Home">Home</li>
                        <li lng-tag="About us">About us</li>
                        <li lng-tag="Training program">Categories</li>
                        <li lng-tag="Courses">course </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <ul class="list-unstyled">
                        <li class="active" lng-tag="MORE">MORE</li>
                        <li lng-tag="Team Academy">Team academy </li>
                        <li lng-tag="Contact us">contact us</li>
                        <li lng-tag="My Learning">My Learning</li>
                        <li lng-tag="F&Q">F&Q </li>
                        <li lng-tag="Favorite">Favorite</li>
                        <li lng-tag="Card">Card</li>
                        <li lng-tag="Notification">Notification</li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <h6 class="active" lng-tag="SOCIAL MEDIA">SOCIAL MEDIA</h6>
                    <p lng-tag="Follow ">Follow us on social media to find out the latest updates on our progress.</p>
                    <div class="icon">
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row align-items-center text-center text-md-start">
                <div class="col-md-3">
                    <p class="pp" lng-tag="flow-ui">© 2020 flow-ui. All rights reserved.</p>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled items">
                        <li lng-tag="Terms of Service">Terms of Service</li>
                        <li lng-tag="Privacy Policy">Privacy Policy</li>
                        <li lng-tag="Security">Security</li>
                        <li lng-tag="Sitemap">Sitemap</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="convert text-center text-md-end">
                        <select name="" id="langSelect">
                            <option value="en" lng-tag="English">English</option>
                            <option value="ar" lng-tag="Arabic">Arabic</option>
                        </select>
                        <!-- <button id="mybtn">Change Style</button> -->
                    </div>
                </div>
            </div>


        </div>
    </footer>
    <!-- section 7 -->





    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.multiple-items').slick({
                arrows: false,
                "dots": true,
                slidesToShow: 3,
                slidesToScroll: 3,
                "responsive": [{
                    "breakpoint": 767,
                    "settings": {
                        "slidesToShow": 1,
                        "slidesToScroll": 1,
                        dots: true
                    }
                }, {
                    "breakpoint": 991,
                    "settings": {
                        "slidesToShow": 2,
                        "slidesToScroll": 2,
                        dots: true
                    }
                }]
            });
        });
    </script>
    <script src="{{ asset('requirement/pages/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/all.min.js') }}"></script>
    <script src="{{ asset('requirement/assets/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('requirement/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script defer src="{{ asset('requirement/pages/js/script_2.js') }}"></script>
    @yield('scripts')

</body>

</html>
