@extends('sensorial.pages.parent')

@section('styles')
    <link rel="stylesheet" href="{{ asset('requirement/pages/css/Customer.css') }}">
@endsection

@section('title', 'My Profile')

@section('content')

    <!-- section 1 -->
    <section class="section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="box">
                        <h3 class=" mt-5 h-1" lng-tag="Good Afternoon Nancy" style="text-transform: capitalize">Welcome
                            {{ auth()->user()->name_en }} </h3>
                        <p class="fw-bold text-black-50 mt-4 w-75" lng-tag="Learn about networking">

                        </p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="image text-center mt-4">
                        <img src="{{ asset('requirement/pages/img/wemon-group.png') }}" alt=""
                            class="img-fluid wemon-group">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 1 -->


    <!-- section-2 -->
    <section class="section-5 gray pt-5 pb-5">
        <div class="container position-relative">
            <h3 class="h-1" lng-tag="Course you are taking">Course you are taking </h3>
            <div class="row mt-5 multiple-items">
                @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <div class="image text-center">
                                <img src="{{ asset('requirement/uploads/course_photo/' . $course->course->course_photo) }}"
                                    alt="" class="img-fluid width">
                            </div>
                            <div class="content">
                                <p class="fw-bold" lng-tag="Motion" style="text-transform: capitalize">
                                    {{ $course->course->course_name }}</p>
                            </div>
                            <div class="content-1">
                                <p class="fw-bold text-black-50 p-7" lng-tag="Lesson 5 from 20"><img
                                        src="{{ asset('requirement/pages/img/book.svg') }}" alt=""
                                        class="img-fluid book">Lesson 5
                                    from 20</p>
                                <span class="span-1">5%</span>
                            </div>
                            <a class="form-control fw-bold continue mt-2"
                                href="{{ route('viewCourse', $course->course->id) }}" lng-tag="Countinue">Countinue <i
                                    class="fa-solid fa-arrow-right arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- section-2 -->

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

            <p class="p-25" lng-tag="What to learn next">What to learn next</p>

            <div class="row mt-5 multiple-items" dir="ltr">
                @foreach ($coursesShow as $course)
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


@endsection

@section('scripts')

    <script src="{{ asset('requirement/pages/js/Script-2.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/index.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/script-3.js') }}"></script>

@endsection
