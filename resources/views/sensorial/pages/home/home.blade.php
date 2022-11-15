@extends('sensorial.pages.parent')

@section('title', 'Home')

@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/pages/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('requirement/pages/css/style-1.css') }}">

@endsection

@section('content')

    <!-- section 1 -->
    <section class="section-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 text-center text-md-start">
                    <div class="content">
                        <div class="box" lng-tag="Become">Become a <br>
                            <span>Professional</span><br>
                            in either field
                        </div><br>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipis cing elit, sed diam nonu mmy nibh euismod
                            tincidunt ut laoreet doloremagna aliquam erat volutpat ut wisi enimmniam. quis </p>
                        <br>
                        <form action="" class="position-relative">
                            <i class="fa-solid fa-magnifying-glass position-absolute"></i>
                            <input type="text" name="" id="" placeholder="Search Your Course need"
                                class="form-control">
                            <button class="position-absolute" lng-tag="Search">Search</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-7">
                    <img src="{{ asset('requirement/pages/img/img-1.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- section 1 -->

    <!-- section 2 -->
    <section class="section-2 section-2-private mt-5 text-center">
        <div class="container">
            <h1 lng-tag="begins">Here begins your journey from <br>knowledge to work</h1>
            <p lng-tag="devices">All devices come with free delivery or pickup as standard. See<br> information on
                available
                shopping options
                for your location.</p>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <div class="diamond "></div>
                        <img src="{{ asset('requirement/pages/img/search.png') }}" alt="" class="img-fluid search">
                        <h5 lng-tag="Discover">Discover </h5>
                        <p lng-tag="devices-1">All devices come with free delivery or pickup as standard. See
                            information on
                            available
                            shopping options
                            for your location.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box box-1">
                        <div class="diamond d2"></div>
                        <img src="{{ asset('requirement/pages/img/learn.png') }}" alt="" class="img-fluid search">
                        <h5 lng-tag="Learn">Learn </h5>
                        <p lng-tag="devices-1">All devices come with free delivery or pickup as standard. See
                            information on
                            available
                            shopping options
                            for your location.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box box-2">
                        <div class="diamond d3"></div>
                        <img src="{{ asset('requirement/pages/img/cratification.png') }}" alt=""
                            class="img-fluid search">
                        <h5 lng-tag="Get a certificate">Get a certificate </h5>
                        <p lng-tag="devices-1">All devices come with free delivery or pickup as standard. See
                            information on
                            available
                            shopping options
                            for your location.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 2 -->

    <!-- section 3 -->
    <section class="section-3 section-2-private mt-5 pt-5">
        <div class="container">
            <h1 class="text-center" lng-tag="begins">Here begins your journey from<br>knowledge to work</h1>
            <p class="text-center" lng-tag="devices">All devices come with free delivery or pickup as standard.
                See<br>
                information on available
                shopping options for your location.</p>
            <div class="row align-items-center mt-5">
                <div class="col-sm-6 col-md mt-5 text-center text-md-start">
                    <div class="Number margin">
                        <span>1500+</span>
                        <p lng-tag="Available">Available <br>Course</p>
                    </div>
                    <div class="Number">
                        <span>3000+</span>
                        <p lng-tag="Number">Number of<br>Student</p>
                    </div>

                </div>
                <div class="col-sm-6 col-md mt-5  text-center text-md-start">
                    <div class="Number margin">
                        <span>2000+</span>
                        <p lng-tag="positive">positive<br> Feedback</p>
                    </div>
                    <div class="Number">
                        <span>10+</span>
                        <p lng-tag="set">set of<br>categories</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="image position-relative">
                        <img src="{{ asset('requirement/pages/img/man-wemon.png') }}" alt=""
                            class="img-fluid img-1">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 3 -->

    <!-- section 4 -->
    <section class="section-4 section-2-private">
        <div class="container">
            <h1 class="text-center" lng-tag="Top Category">Top Category </h1>
            <p class="text-center" lng-tag="devices">All devices come with free delivery or pickup as standard.
                See<br>
                information on available
                shopping options for your location.</p>
            <div class="row mt-5">
                @foreach ($categories as $category)
                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <img src="{{ asset('requirement/uploads/category_photo/' . $category->category_photo) }}"
                                alt="" class="img-fluid code">
                            <span lng-tag="Design" style="text-transform: capitalize">{{ $category->category_name }}</span>
                            <p class="mt-3" style="text-transform: capitalize" lng-tag="devices-1">
                                {{ $category->category_details }}.</p>
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="arrow" dir="ltr">
                <a href="#" lng-tag="Browse all">Browse all
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- section 4 -->

    <!-- section 5 -->
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
            <h1 class="text-center" lng-tag="Popular">Most Popular Courses</h1>
            <p class="text-center" lng-tag="devices">All devices come with free delivery or pickup as standard.
                See<br>
                information on available
                shopping options for your location.</p>

            <div class="row mt-5 multiple-items" dir="ltr">
                @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <div class="image text-center">
                                <a href="{{ route('courseShow', $course->id) }}">
                                    <img src="{{ asset('requirement/uploads/course_photo/' . $course->course_photo) }}"
                                        alt="" class="img-fluid width">
                                </a>
                            </div>
                            <div class="content">
                                <p class="fw-bold" style="text-transform: capitalize" lng-tag="Motion">
                                    {{ $course->course_name }}<br>
                                    {{ $course->course_detail }}</p>
                                <p class="p1" style="text-transform: capitalize" lng-tag="Dorothy">By
                                    {{ $course->instructor->name }}</p>
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
                                        @if ($course->price)
                                            <p class="pp-3">${{ $course->price->price }}</p>
                                        @else
                                            <p class="pp-3">Price not found</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- section 5 -->

    <!-- section 6 -->
    <section class="section-6 section-2-private">
        <div class="container">
            <h1 class="text-center" lng-tag="Contact Us">Contact Us</h1>
            <p class="text-center" lng-tag="devices">All devices come with free delivery or pickup as standard.
                See<br>
                information on available
                shopping options for your location.</p>
            @auth
                <div class="row mt-5 align-items-center">
                    <div class="col-md">
                        <form>
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" id="user_id">
                            <div class="email">
                                <label for="" lng-tag="Full Name">Name</label>
                                <input type="text" value="{{ auth()->user()->name_en }}" name="name" id="name"
                                    class="form-control">
                            </div>
                            <div class="email">
                                <label for="" lng-tag="Email Address">Email Address</label>
                                <input type="email" value="{{ auth()->user()->email }}" name="email" id="email"
                                    class="form-control">
                            </div>
                            <div class="email">
                                <label for="" lng-tag="Phone Number">Phone Number</label>
                                <input type="text" value="{{ auth()->user()->phone_number }}" name="phone"
                                    id="phone" class="form-control">
                            </div>
                            <div class="email">
                                <label for="" lng-tag="Address">Address</label>
                                <input type="text" value="{{ auth()->user()->address }}" name="address" id="address"
                                    class="form-control">
                            </div>
                            <label for="" lng-tag="Text Area">Write Message</label>
                            <textarea name="message" placeholder="Enter Your Message" id="message" cols="30" rows="10"
                                class="form-control text-area"></textarea>

                            <button type="button" onclick="store()" class="submit form-control"> Contact Us
                            </button>
                        </form>

                    </div>
                    <div class="col-md-5">
                        <div class="location position-relative">
                            <img src="{{ asset('requirement/pages/img/location.png') }}" alt="" class="img-fluid">
                            <i class="fa-solid fa-location-dot location-1 position-absolute"></i>
                            <i class="fa-solid fa-location-dot location-2 position-absolute"></i>
                            <i class="fa-solid fa-location-dot location-3 position-absolute"></i>
                            <i class="fa-solid fa-location-dot location-4 position-absolute"></i>
                            <i class="fa-solid fa-location-dot location-5 position-absolute"></i>
                            <i class="fa-solid fa-location-dot location-6 position-absolute"></i>
                            <i class="fa-solid fa-location-dot location-7 position-absolute"></i>
                            <i class="fa-solid fa-location-dot location-8 position-absolute"></i>
                        </div>
                        <p class="p1 text-center" lng-tag="pleased">We are pleased to contact you and inquiries with us
                            via the direct
                            number
                            And send your messages via the contact form.</p>
                    </div>
                </div>
            @else
                <div class="row mt-5 align-items-center">
                    <div class="col-md">
                        <form action="{{ route('login') }}">
                            <div class="email">
                                <label for="" lng-tag="Full Name">Full Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="email">
                                <label for="" lng-tag="Email Address">Email Address</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="email">
                                <label for="" lng-tag="Phone Number">Phone Number</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="email">
                                <label for="" lng-tag="Address">Address</label>
                                <input type="text" class="form-control">
                            </div>
                            <label for="" lng-tag="Text Area">Text Area</label>
                            <textarea cols="30" rows="10" class="form-control text-area"></textarea>

                            <button type="button" name="" id="" class="submit form-control"> Contact Us
                            </button>
                        </form>

                    </div>
                    <div class="col-md-5">
                        <div class="location position-relative">
                            <img src="{{ asset('requirement/pages/img/location.png') }}" alt="" class="img-fluid">
                            <i class="fa-solid fa-location-dot location-1 position-absolute"></i>
                            <i class="fa-solid fa-location-dot location-2 position-absolute"></i>
                            <i class="fa-solid fa-location-dot location-3 position-absolute"></i>
                            <i class="fa-solid fa-location-dot location-4 position-absolute"></i>
                            <i class="fa-solid fa-location-dot location-5 position-absolute"></i>
                            <i class="fa-solid fa-location-dot location-6 position-absolute"></i>
                            <i class="fa-solid fa-location-dot location-7 position-absolute"></i>
                            <i class="fa-solid fa-location-dot location-8 position-absolute"></i>
                        </div>
                        <p class="p1 text-center" lng-tag="pleased">We are pleased to contact you and inquiries with us
                            via the direct
                            number
                            And send your messages via the contact form.</p>
                    </div>
                </div>
            @endauth


        </div>
    </section>
    <!-- section 6 -->

    @guest
        <!-- section 8 -->
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <section class="section-8">
                        <div class="container">
                            <h4 class="text-center fw-bold mb-5" lng-tag="Check">Check what our clients are saying</h4>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="image text-center position-relative">
                                        <img src="{{ asset('requirement/pages/img/wemon-slider-top.png') }}" alt=""
                                            class="img-fluid wemon-slider-top">
                                        <img src="{{ asset('requirement/pages/img/wemon-slider.png') }}" alt=""
                                            class="img-fluid wemon-slider">
                                        <img src="{{ asset('requirement/pages/img/wemon-slider-down.png') }}" alt=""
                                            class="img-fluid wemon-slider-down">
                                        <img src="{{ asset('requirement/pages/img/wemon-slider-down.png') }}" alt=""
                                            class="img-fluid wemon-slider-down-1">
                                        <img src="{{ asset('requirement/pages/img/dots-1.png') }}" alt=""
                                            class="img-fluid dots-1">
                                        <img src="{{ asset('requirement/pages/img/dots-2.png') }}" alt=""
                                            class="img-fluid dots-2">

                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="box">
                                        <img src="{{ asset('requirement/pages/img/“.svg') }}" alt=""
                                            class="img-fluid dotss">
                                        <p><svg xmlns="http://www.w3.org/2000/svg" width="20.219" height="19.229"
                                                viewBox="0 0 20.219 19.229">
                                                <path id="Star_Copy_4" data-name="Star Copy 4"
                                                    d="M9.5,14.25,3.916,17.186l1.066-6.218L.465,6.564l6.243-.907L9.5,0l2.792,5.657,6.243.907-4.518,4.4,1.066,6.218Z"
                                                    transform="translate(0.61 1.13)" fill="#fff" stroke="#dae1f5"
                                                    stroke-miterlimit="10" stroke-width="1" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.219" height="19.229"
                                                viewBox="0 0 20.219 19.229">
                                                <path id="Star_Copy_4" data-name="Star Copy 4"
                                                    d="M9.5,14.25,3.916,17.186l1.066-6.218L.465,6.564l6.243-.907L9.5,0l2.792,5.657,6.243.907-4.518,4.4,1.066,6.218Z"
                                                    transform="translate(0.61 1.13)" fill="#fff" stroke="#dae1f5"
                                                    stroke-miterlimit="10" stroke-width="1" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.219" height="19.229"
                                                viewBox="0 0 20.219 19.229">
                                                <path id="Star_Copy_4" data-name="Star Copy 4"
                                                    d="M9.5,14.25,3.916,17.186l1.066-6.218L.465,6.564l6.243-.907L9.5,0l2.792,5.657,6.243.907-4.518,4.4,1.066,6.218Z"
                                                    transform="translate(0.61 1.13)" fill="#fff" stroke="#dae1f5"
                                                    stroke-miterlimit="10" stroke-width="1" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.219" height="19.229"
                                                viewBox="0 0 20.219 19.229">
                                                <path id="Star_Copy_4" data-name="Star Copy 4"
                                                    d="M9.5,14.25,3.916,17.186l1.066-6.218L.465,6.564l6.243-.907L9.5,0l2.792,5.657,6.243.907-4.518,4.4,1.066,6.218Z"
                                                    transform="translate(0.61 1.13)" fill="#fff" stroke="#dae1f5"
                                                    stroke-miterlimit="10" stroke-width="1" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.219" height="19.229"
                                                viewBox="0 0 20.219 19.229">
                                                <path id="Star_Copy_4" data-name="Star Copy 4"
                                                    d="M9.5,14.25,3.916,17.186l1.066-6.218L.465,6.564l6.243-.907L9.5,0l2.792,5.657,6.243.907-4.518,4.4,1.066,6.218Z"
                                                    transform="translate(0.61 1.13)" fill="#fff" stroke="#dae1f5"
                                                    stroke-miterlimit="10" stroke-width="1" />
                                            </svg>
                                        </p>
                                        <p class="p-10" lng-tag="upon">Is be upon sang fond must shew. Really boy law
                                            county she unable her
                                            sister. Feet you
                                            off its like like six. Among sex are leave law built now.</p>
                                        <p class="fw-bold mt-5 p-11" lng-tag="Client Name">Client Name</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="carousel-item">
                    <section class="section-8">
                        <div class="container">
                            <h4 class="text-center fw-bold mb-5" lng-tag="Check">Check what our clients are saying</h4>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="image text-center position-relative">
                                        <img src="{{ asset('requirement/pages/img/wemon-slider-top.png') }}" alt=""
                                            class="img-fluid wemon-slider-top">
                                        <img src="{{ asset('requirement/pages/img/wemon-slider.png') }}" alt=""
                                            class="img-fluid wemon-slider">
                                        <img src="{{ asset('requirement/pages/img/wemon-slider-down.png') }}" alt=""
                                            class="img-fluid wemon-slider-down">
                                        <img src="{{ asset('requirement/pages/img/wemon-slider-down.png') }}" alt=""
                                            class="img-fluid wemon-slider-down-1">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="box">
                                        <img src="{{ asset('requirement/pages/img/“.svg') }}" alt=""
                                            class="img-fluid dotss">
                                        <p><svg xmlns="http://www.w3.org/2000/svg" width="20.219" height="19.229"
                                                viewBox="0 0 20.219 19.229">
                                                <path id="Star_Copy_4" data-name="Star Copy 4"
                                                    d="M9.5,14.25,3.916,17.186l1.066-6.218L.465,6.564l6.243-.907L9.5,0l2.792,5.657,6.243.907-4.518,4.4,1.066,6.218Z"
                                                    transform="translate(0.61 1.13)" fill="#fff" stroke="#dae1f5"
                                                    stroke-miterlimit="10" stroke-width="1" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.219" height="19.229"
                                                viewBox="0 0 20.219 19.229">
                                                <path id="Star_Copy_4" data-name="Star Copy 4"
                                                    d="M9.5,14.25,3.916,17.186l1.066-6.218L.465,6.564l6.243-.907L9.5,0l2.792,5.657,6.243.907-4.518,4.4,1.066,6.218Z"
                                                    transform="translate(0.61 1.13)" fill="#fff" stroke="#dae1f5"
                                                    stroke-miterlimit="10" stroke-width="1" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.219" height="19.229"
                                                viewBox="0 0 20.219 19.229">
                                                <path id="Star_Copy_4" data-name="Star Copy 4"
                                                    d="M9.5,14.25,3.916,17.186l1.066-6.218L.465,6.564l6.243-.907L9.5,0l2.792,5.657,6.243.907-4.518,4.4,1.066,6.218Z"
                                                    transform="translate(0.61 1.13)" fill="#fff" stroke="#dae1f5"
                                                    stroke-miterlimit="10" stroke-width="1" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.219" height="19.229"
                                                viewBox="0 0 20.219 19.229">
                                                <path id="Star_Copy_4" data-name="Star Copy 4"
                                                    d="M9.5,14.25,3.916,17.186l1.066-6.218L.465,6.564l6.243-.907L9.5,0l2.792,5.657,6.243.907-4.518,4.4,1.066,6.218Z"
                                                    transform="translate(0.61 1.13)" fill="#fff" stroke="#dae1f5"
                                                    stroke-miterlimit="10" stroke-width="1" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.219" height="19.229"
                                                viewBox="0 0 20.219 19.229">
                                                <path id="Star_Copy_4" data-name="Star Copy 4"
                                                    d="M9.5,14.25,3.916,17.186l1.066-6.218L.465,6.564l6.243-.907L9.5,0l2.792,5.657,6.243.907-4.518,4.4,1.066,6.218Z"
                                                    transform="translate(0.61 1.13)" fill="#fff" stroke="#dae1f5"
                                                    stroke-miterlimit="10" stroke-width="1" />
                                            </svg>
                                        </p>
                                        <p class="p-10" lng-tag="upon">Is be upon sang fond must shew. Really boy law
                                            county she unable her
                                            sister. Feet you
                                            off its like like six. Among sex are leave law built now.</p>
                                        <p class="fw-bold mt-5 p-11" lng-tag="Client Name">Client Name</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="carousel-item">
                    <section class="section-8">
                        <div class="container">
                            <h4 class="text-center fw-bold mb-5" lng-tag="Check">Check what our clients are saying</h4>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="image text-center position-relative">
                                        <img src="{{ asset('requirement/pages/img/wemon-slider-top.png') }}" alt=""
                                            class="img-fluid wemon-slider-top">
                                        <img src="{{ asset('requirement/pages/img/wemon-slider.png') }}" alt=""
                                            class="img-fluid wemon-slider">
                                        <img src="{{ asset('requirement/pages/img/wemon-slider-down.png') }}" alt=""
                                            class="img-fluid wemon-slider-down">
                                        <img src="{{ asset('requirement/pages/img/wemon-slider-down.png') }}" alt=""
                                            class="img-fluid wemon-slider-down-1">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="box">
                                        <img src="{{ asset('requirement/pages/img/“.svg') }}" alt=""
                                            class="img-fluid dotss">
                                        <p><svg xmlns="http://www.w3.org/2000/svg" width="20.219" height="19.229"
                                                viewBox="0 0 20.219 19.229">
                                                <path id="Star_Copy_4" data-name="Star Copy 4"
                                                    d="M9.5,14.25,3.916,17.186l1.066-6.218L.465,6.564l6.243-.907L9.5,0l2.792,5.657,6.243.907-4.518,4.4,1.066,6.218Z"
                                                    transform="translate(0.61 1.13)" fill="#fff" stroke="#dae1f5"
                                                    stroke-miterlimit="10" stroke-width="1" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.219" height="19.229"
                                                viewBox="0 0 20.219 19.229">
                                                <path id="Star_Copy_4" data-name="Star Copy 4"
                                                    d="M9.5,14.25,3.916,17.186l1.066-6.218L.465,6.564l6.243-.907L9.5,0l2.792,5.657,6.243.907-4.518,4.4,1.066,6.218Z"
                                                    transform="translate(0.61 1.13)" fill="#fff" stroke="#dae1f5"
                                                    stroke-miterlimit="10" stroke-width="1" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.219" height="19.229"
                                                viewBox="0 0 20.219 19.229">
                                                <path id="Star_Copy_4" data-name="Star Copy 4"
                                                    d="M9.5,14.25,3.916,17.186l1.066-6.218L.465,6.564l6.243-.907L9.5,0l2.792,5.657,6.243.907-4.518,4.4,1.066,6.218Z"
                                                    transform="translate(0.61 1.13)" fill="#fff" stroke="#dae1f5"
                                                    stroke-miterlimit="10" stroke-width="1" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.219" height="19.229"
                                                viewBox="0 0 20.219 19.229">
                                                <path id="Star_Copy_4" data-name="Star Copy 4"
                                                    d="M9.5,14.25,3.916,17.186l1.066-6.218L.465,6.564l6.243-.907L9.5,0l2.792,5.657,6.243.907-4.518,4.4,1.066,6.218Z"
                                                    transform="translate(0.61 1.13)" fill="#fff" stroke="#dae1f5"
                                                    stroke-miterlimit="10" stroke-width="1" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.219" height="19.229"
                                                viewBox="0 0 20.219 19.229">
                                                <path id="Star_Copy_4" data-name="Star Copy 4"
                                                    d="M9.5,14.25,3.916,17.186l1.066-6.218L.465,6.564l6.243-.907L9.5,0l2.792,5.657,6.243.907-4.518,4.4,1.066,6.218Z"
                                                    transform="translate(0.61 1.13)" fill="#fff" stroke="#dae1f5"
                                                    stroke-miterlimit="10" stroke-width="1" />
                                            </svg>
                                        </p>
                                        <p class="p-10" lng-tag="upon">Is be upon sang fond must shew. Really boy law
                                            county she unable her
                                            sister. Feet you
                                            off its like like six. Among sex are leave law built now.</p>
                                        <p class="fw-bold mt-5 p-11" lng-tag="Client Name">Client Name</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="prev">
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                <span class="visually-hidden">Previous</span>
                <i class="fa-solid fa-angle-left angle-left"></i>

            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="next">
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                <i class="fa-solid fa-angle-right angle-right"></i>
                <span class="visually-hidden">Next</span>

            </button>
        </div>
        <!-- section 8 -->
    @endguest

@endsection




@section('scripts')

    <script>
        function store() {

            let formData = new FormData();

            formData.append('user_id', document.getElementById('user_id').value);
            formData.append('name', document.getElementById('name').value);
            formData.append('email', document.getElementById('email').value);
            formData.append('phone', document.getElementById('phone').value);
            formData.append('address', document.getElementById('address').value);
            formData.append('message', document.getElementById('message').value);

            axios.post('/sensorial/contact', formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    window.location.reload();
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                    toastr.error(error.response.data.message);
                })
                .then(function() {
                    // always executed
                });
        }
    </script>


    <script src="{{ asset('requirement/pages/js/script-3.js') }}"></script>
    <script defer src="{{ asset('requirement/pages/js/script.js') }}"></script>
    <script defer src="{{ asset('requirement/pages/js/script_1.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/index.js') }}"></script>

@endsection
