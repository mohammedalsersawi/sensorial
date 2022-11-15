@extends('sensorial.pages.parent')

@section('title', 'Courses')

@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/pages/css/result-baby.css') }}">

@endsection

@section('content')
    <!-- section 1 -->
    <section class="result-baby mt-5">
        <div class="container">
            <svg xmlns="http://www.w3.org/2000/svg" width="23.905" height="21.105" viewBox="0 0 23.905 21.105">
                <defs>
                    <symbol id="heart" viewBox="0 0 23.905 21.105">
                        <path class="heart-box" data-name="Icon feather-heart"
                            d="M22.539,6.186a5.764,5.764,0,0,0-8.153,0L13.275,7.3,12.164,6.186a5.765,5.765,0,1,0-8.153,8.153L5.122,15.45,13.275,23.6l8.153-8.153,1.111-1.111a5.764,5.764,0,0,0,0-8.153Z"
                            transform="translate(-1.323 -3.497)" fill="none" stroke="black" stroke-linecap="round"
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
            <div class="row">
                <div class="col-md-3">

                    <div class="accordion">
                        <div class="accordion-item">
                            <div class="accordion-item-header">
                                <div class="content-acc">
                                    <p class="p-101 fw-bold" lng-tag="Topic">Topic</p>
                                </div>
                            </div>
                            <div class="accordion-item-body">
                                <div class="accordion-item-body-content">
                                    <div class="body-content">
                                        <input type="checkbox" name="" id="">
                                        <p class="mb-0 ms-1" lng-tag="Baby">Baby </p>
                                    </div>
                                    <div class="body-content">
                                        <input type="checkbox" name="" id="">
                                        <p class="mb-0 ms-1" lng-tag="Baby">Baby </p>
                                    </div>
                                    <div class="body-content">
                                        <input type="checkbox" name="" id="">
                                        <p class="mb-0 ms-1" lng-tag="Baby">Baby </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-item-header">
                                <div class="content-acc">
                                    <p class="p-101 fw-bold" lng-tag="Rating">Rating </p>
                                </div>
                            </div>
                            <div class="accordion-item-body">
                                <div class="accordion-item-body-content">
                                    <div class="content-c">
                                        <input type="checkbox" name="" id="" class="me-1">
                                        <p class="m-0"><i class="fa-solid fa-star sta"></i><i
                                                class="fa-solid fa-star sta"></i><i class="fa-solid fa-star sta"></i><i
                                                class="fa-solid fa-star sta"></i><i class="fa-solid fa-star sta"></i>
                                            <span lng-tag="4.5 and up">4.5 and up</span>
                                        </p>
                                    </div>
                                    <div class="content-c">
                                        <input type="checkbox" name="" id="" class="me-1">
                                        <p class="m-0"><i class="fa-solid fa-star sta"></i><i
                                                class="fa-solid fa-star sta"></i><i class="fa-solid fa-star sta"></i><i
                                                class="fa-solid fa-star sta"></i><i class="fa-solid fa-star sta"></i>
                                            <span lng-tag="4.5 and up">4.5 and up</span>
                                        </p>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-9">
                    @foreach ($courses as $course)
                        <div class="box">
                            <div class="image">
                                <a href="{{ route('courseShow', $course->id) }}">
                                    <img src="{{ asset('requirement/uploads/course_photo/' . $course->course_photo) }}"
                                        alt="" width="" class="img-fluid baby">
                                </a>
                            </div>
                            <div class="content">
                                <a href="{{ route('courseShow', $course->id) }}" style="text-decoration: none; color:#000">
                                    <p class="fw-bold pp-1" style="text-transform: capitalize; font-size: 20px"
                                        lng-tag="Motion">
                                        {{ $course->course_name }}</p>
                                </a>
                                <p class="pp-2" lng-tag="Aprende">{{ $course->course_detail }}</p>
                                <p class="p1" lng-tag="Dorothy" style="text-transform: capitalize">By
                                    <u>{{ $course->instructor->name }}</u>
                                </p>
                                <span class="number">4.5</span>

                                <i class="fa-solid fa-star star"></i>
                                <i class="fa-solid fa-star star"></i>
                                <i class="fa-solid fa-star star"></i>
                                <i class="fa-solid fa-star star"></i>
                                <i class="fa-solid fa-star star"></i>

                                <span class="num"><span class="number"></span>(+100k)</span>
                                <ul>
                                    @if ($course->lectures)
                                        @if (count($course->lectures) === 1)
                                            <li lng-tag="130 lectures">{{ count($course->lectures) }} Lecture</li>
                                        @else
                                            <li lng-tag="130 lectures">{{ count($course->lectures) }} Lectures</li>
                                        @endif
                                    @else
                                        <li lng-tag="130 lectures">0 Lecture</li>
                                    @endif
                                    <li lng-tag="All Levels">All Levels</li>
                                </ul>

                            </div>
                            <div class="end">
                                @if ($course->price)
                                    <p class="pp-3">{{ $course->price->price }} $</p>
                                @else
                                    <p class="pp-3">Price not found</p>
                                @endif

                                <div class="icon">

                                    <div id="icon">
                                        <svg class="svg-1" width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- section 1 -->

@endsection
@section('scripts')

    <script src="{{ asset('requirement/pages/js/result-baby.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/Script-2.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/script-3.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/Script-4.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/index.js') }}"></script>

@endsection
