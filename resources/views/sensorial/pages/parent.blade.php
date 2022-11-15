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

                                <div class="heart-1 position-relative">
                                    <a href="{{ route('viewWishlist') }}">
                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                            x="0px" y="0px" viewBox="0 0 490.4 490.4"
                                            style="enable-background:new 0 0 490.4 490.4;" xml:space="preserve">
                                            <path
                                                d="M222.5,453.7c6.1,6.1,14.3,9.5,22.9,9.5c8.5,0,16.9-3.5,22.9-9.5L448,274c27.3-27.3,42.3-63.6,42.4-102.1    c0-38.6-15-74.9-42.3-102.2S384.6,27.4,346,27.4c-37.9,0-73.6,14.5-100.7,40.9c-27.2-26.5-63-41.1-101-41.1    c-38.5,0-74.7,15-102,42.2C15,96.7,0,133,0,171.6c0,38.5,15.1,74.8,42.4,102.1L222.5,453.7z M59.7,86.8    c22.6-22.6,52.7-35.1,84.7-35.1s62.2,12.5,84.9,35.2l7.4,7.4c2.3,2.3,5.4,3.6,8.7,3.6l0,0c3.2,0,6.4-1.3,8.7-3.6l7.2-7.2    c22.7-22.7,52.8-35.2,84.9-35.2c32,0,62.1,12.5,84.7,35.1c22.7,22.7,35.1,52.8,35.1,84.8s-12.5,62.1-35.2,84.8L251,436.4    c-2.9,2.9-8.2,2.9-11.2,0l-180-180c-22.7-22.7-35.2-52.8-35.2-84.8C24.6,139.6,37.1,109.5,59.7,86.8z" />
                                        </svg>
                                    </a>
                                    <div class="box-1 box-private">
                                        <img src="{{ asset('requirement/pages/img/wishlist.png') }}" alt=""
                                            class="img-fluid img-3 img-4">
                                        <div class="content-1">
                                            <p class="pp" lng-tag="Motion">Motion Design with Figma: Animations,
                                                Motion Graphics, UX/UI</p>
                                            <p class="pp-1" lng-tag="Dorothy">by Dorothy Parks</p>
                                            <p class="pp-2" lng-tag="$19.99">$19.99<del class="pp-3">$84.99</del></p>
                                        </div>

                                        <img src="{{ asset('requirement/pages/img/wishlist.png') }}" alt=""
                                            class="img-fluid img-3 img-4">
                                        <div class="content-1">
                                            <p class="pp" lng-tag="Motion">Motion Design with Figma: Animations,
                                                Motion Graphics, UX/UI</p>
                                            <p class="pp-1" lng-tag="Dorothy">by Dorothy Parks</p>
                                            <p class="pp-2">$19.99<del class="pp-3">$84.99</del></p>
                                        </div>
                                        <a href=""><button type="button" class="btn btn-danger button-1"
                                                lng-tag="wishlist">Go to
                                                wishlist</button></a>
                                        <a href=""><button type="button" class="btn btn-danger button-2"
                                                lng-tag="cart">Go to
                                                cart</button></a>
                                    </div>
                                </div>

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

                                <span class="basket position-relative">
                                    <div class="basket-1">
                                        <a href="{{ route('viewCart') }}">
                                            <svg class="baskets" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40"
                                                viewBox="0 0 40 40">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                        <rect id="Rectangle_4" data-name="Rectangle 4" width="40"
                                                            height="40" transform="translate(1521 -0.473)"
                                                            fill="none" stroke="#707070" stroke-width="1" />
                                                    </clipPath>
                                                </defs>
                                                <g id="Mask_Group_2" data-name="Mask Group 2"
                                                    transform="translate(-1521 0.473)" clip-path="url(#clip-path)">
                                                    <g id="Xnix_Line_shopping-bag_3" data-name="Xnix/Line/shopping-bag_3"
                                                        transform="translate(1521 6.48)">
                                                        <rect id="Rectangle_8" data-name="Rectangle 8" width="39.789"
                                                            height="30.545" transform="translate(0 4.727)"
                                                            fill="none" />
                                                        <g id="Vector" transform="translate(6.575)">
                                                            <path id="basket"
                                                                d="M28.432,14.285l-2.021,7.143c-1.682,5.2-3.061,6.693-6.064,7.046a17.421,17.421,0,0,1-2.021.1H10.245a17.422,17.422,0,0,1-2.021-.1c-2.992-.357-4.382-1.845-6.064-7.046L.14,14.285C-.866,8.953,3.718,7.159,8.163,7.143V5.58C8.094,2.56,10.834.062,14.286,0c3.452.062,6.192,2.56,6.123,5.58V7.143C24.854,7.159,29.436,8.951,28.432,14.285Z"
                                                                transform="translate(0)" fill="none" stroke="#222121"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" fill-rule="evenodd" />
                                                            <path id="basket"
                                                                d="M30.279,20.333H20.332m9.947,2.545v1.273m-9.947-1.273v1.273"
                                                                transform="translate(-11.02 -12.717)" fill="none"
                                                                stroke="#222121" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                fill-rule="evenodd" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span class="position-absolute three">{{ $count }}</span>
                                        </a>
                                        <div class="box-1">
                                            @foreach ($cart as $course)
                                                <div>
                                                    <img src="{{ asset('requirement/uploads/course_photo/' . $course->course->course_photo) }}"
                                                        alt="" class="img-fluid img-3">
                                                    <div class="content-1">
                                                        <p class="pp" lng-tag="Motion">
                                                            {{ $course->course->course_name }} Course</p>
                                                        <p class="pp-1" lng-tag="Dorothy"
                                                            style="text-transform:capitalize">by
                                                            {{ $course->instructor->name }}</p>
                                                        <p class="pp-2" style="color: #9f007e">${{ $course->price }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr>
                                            @endforeach


                                            <hr>
                                            <p class="pp-4" lng-tag="Total">Total:</p>
                                            <span class="pp-5">$39.98</span>
                                            <del class="pp-3">$169.98</del>
                                            <br><br>
                                            <a href=""><button type="button" class="btn btn-danger button-1"
                                                    lng-tag="cart">Go to
                                                    cart</button></a>
                                            <a href=""><button type="button" class="btn btn-danger button-2"
                                                    lng-tag="Checkout">Checkout</button></a>

                                        </div>
                                    </div>
                                </span>
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
