@extends('sensorial.pages.parent')

@section('title', 'Profile')

@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/pages/css/Profile.css') }}">
    <link rel="stylesheet" href="{{ asset('requirement/pages/css/style-1.css') }}">

@endsection

@section('content')
    <!-- section 1 -->
    <section class="section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="box" style="text-transform: capitalize">
                        <h1 class="mt-5" lng-tag="Dorothy Park">{{ $instructor->name }}</h1>
                        <p class="p-6 fw-bold mb-0" lng-tag="Professor">Professor, School of Electrical & Electronic
                            Engineering</p>
                        <p class="p-7" lng-tag="Director">Director , communication & networking , electronic
                            laboratory </p>
                        <div class="content">
                            <p class="fw-bold mb-0 fs-5">259,300</p>
                            <p class="fw-bold " lng-tag="ToTal Student">Total Student</p>
                        </div>
                        <div class="content">
                            <p class="fw-bold mb-0 fs-5">{{ count($courses) }}</p>
                            <p class="fw-bold " lng-tag="Courses">Courses </p>
                        </div>
                        <div class="content">
                            <p class="fw-bold mb-0 fs-5">122,660</p>
                            <p class="fw-bold " lng-tag="Review">Review</p>
                        </div>

                        <div class="about mt-5">
                            <h5 class="fw-bold pt-3" lng-tag="About">About</h5>
                            <p class="text-black-50 fw-bold p-8" lng-tag="text">{{ $instructor->details }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="image mt-5">
                        <img src="img/person-2.png" alt="" class="img-fluid person-2">
                    </div>
                    <div class="Facebook mt-4 mb-3">
                        <i class="fa-brands fa-facebook-f facebook"></i>
                        <span class="fw-bold span-1" lng-tag="Facebook">Facebook</span>
                    </div>
                    <div class="Twitter mb-3">
                        <i class="fa-brands fa-twitter twitter"></i>
                        <span class="fw-bold span-1" lng-tag="twitter">twitter</span>
                    </div>
                    <div class="Linkedin-in mb-3">
                        <i class="fa-brands fa-linkedin-in linkedin-in"></i>
                        <span class="fw-bold span-1" lng-tag="linkedin-in">linkedin-in</span>
                    </div>
                    <div class="Youtube mb-3">
                        <i class="fa-brands fa-youtube youtube"></i>
                        <span class="fw-bold span-1" lng-tag="Youtube">Youtube</span>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- section 1 -->
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
            <h5 class="fw-bold" lng-tag="My Courses" style="text-transform: capitalize">{{ $instructor->name }} Courses</h5>

            <div class="row mt-5 multiple-items" dir="ltr">
                @foreach ($instructor->courses as $course)
                    <div style="text-transform: capitalize" class="col-lg-4 col-md-6">
                        <div class="box">
                            <div class="image text-center">
                                <img src="{{ asset('requirement/uploads/course_photo/' . $course->course_photo) }}"
                                    alt="" class="img-fluid width">
                            </div>
                            <div class="content">
                                <p class="fw-bold" lng-tag="Motion">{{ $course->course_name }}<br>
                                    {{ $course->course_detail }}</p>
                                <p class="p1" lng-tag="Dorothy">by {{ $course->instructor->name }}</p>
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
                @endforeach
            </div>
        </div>
    </section>

    <!-- section 5 -->
@endsection

@section('scripts')
@endsection
