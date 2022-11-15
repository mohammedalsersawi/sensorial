@extends('sensorial.pages.parent')

@section('title', 'Wishlist')

@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/pages/css/Wishlist .css') }}">

@endsection

@section('content')

    <!-- section 1 -->
    <section class="section-1 mt-5">
        <div class="container">
            <h3 class="h-1" lng-tag="Wishlist">Wishlist </h3>
            <p class="text-black-50 fw-bold" lng-tag="devices">All devices come with free delivery or pickup as
                standard. See
                information on available
                shopping
                options for your location.</p>
            <div class="row">
                <div class="col-md-4 mt-4">
                    <div class="box">
                        <div class="content">
                            <div class="baby">
                                <img src="img/baby-11.png" alt="" class="img-fluid baby-1">
                                <img src="img/baby-22.png" alt="" class="img-fluid baby-1">
                            </div>
                            <div class="baby-1">
                                <img src="img/baby-33.png" alt="" class="img-fluid baby-3">
                            </div>
                        </div>
                        <div class="content-1">
                            <div class="cont">
                                <p class="p-7 mt-2 mb-2" lng-tag="My list">My list</p>
                                <i class="fa-solid fa-ellipsis dots"></i>
                            </div>
                            <p class="p-8 mb-3" lng-tag="Number of courses (3)">Number of courses (3)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="box">
                        <div class="content">
                            <div class="baby">
                                <img src="img/baby-11.png" alt="" class="img-fluid baby-1">
                                <img src="img/baby-22.png" alt="" class="img-fluid baby-1">
                            </div>
                            <div class="baby-1">
                                <img src="img/baby-33.png" alt="" class="img-fluid baby-3">
                            </div>
                        </div>
                        <div class="content-1">
                            <div class="cont">
                                <p class="p-7 mt-2 mb-2" lng-tag="My list">My list</p>
                                <i class="fa-solid fa-ellipsis dots"></i>
                            </div>
                            <p class="p-8 mb-3" lng-tag="Number of courses (3)">Number of courses (3)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 1 -->

    <!-- section 2 -->
    <section class="section-5 section-2-private">
        <div class="container position-relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="23.905" height="21.105" viewBox="0 0 23.905 21.105">
                <defs>
                    <symbol id="heart" viewBox="0 0 23.905 21.105">
                        <path class="heart-box" data-name="Icon feather-heart"
                            d="M22.539,6.186a5.764,5.764,0,0,0-8.153,0L13.275,7.3,12.164,6.186a5.765,5.765,0,1,0-8.153,8.153L5.122,15.45,13.275,23.6l8.153-8.153,1.111-1.111a5.764,5.764,0,0,0,0-8.153Z"
                            transform="translate(-1.323 -3.497)" fill="none" stroke="#9f007e" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="1" />

                    </symbol>

                    <symbol id="heart-fill" viewBox="0 0 23.905 21.105">
                        <path
                            d="M22.539,6.186a5.764,5.764,0,0,0-8.153,0L13.275,7.3,12.164,6.186a5.765,5.765,0,1,0-8.153,8.153L5.122,15.45,13.275,23.6l8.153-8.153,1.111-1.111a5.764,5.764,0,0,0,0-8.153Z"
                            fill="#9f007e" stroke="#9f007e" transform="translate(-1.323 -3.497)" fill="none"
                            stroke="#9f007e" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                    </symbol>

                </defs>
            </svg>
            <p class="fw-bold" lng-tag="Based">Based on the services that have been saved, there are some suggested
                similar services</p>

            <div class="row mt-5 multiple-items" dir="ltr">
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-1.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">

                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-2.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">
                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-3.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">
                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-3.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">
                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-3.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">
                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-3.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">
                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 2 -->

@endsection


@section('scripts')

    <script src="{{ asset('requirement/pages/js/index.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/script-3.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/Script-2.js') }}"></script>

@endsection
