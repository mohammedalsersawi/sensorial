@extends('sensorial.pages.parent')

@section('title', 'Categories')

@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/pages/css/Top-Category.css') }}">
    <link rel="stylesheet" href="{{ asset('requirement/pages/css/style-1.css') }}">
@endsection

@section('content')
    <!-- section 1 -->
    <section class="section-1 mt-5">
        <div class="container">
            <h2 class="text-center h-1" lng-tag="Top Category">Top Category </h2>
            <p class="text-center" lng-tag="devices">All devices come with free delivery or pickup as standard.
                See<br>
                information on
                available shopping options
                for your location.</p>
            <div class="row">
                <form action="../../form-result.php" method="post" target="_blank" class="mt-5">
                    <p class="position-relative">
                        <input type="search" name="modelsearch" list="modelslist" placeholder="Search"
                            class="form-control search">
                        <input type="submit" value="Go" class="position-absolute submit">
                    </p>
                </form>
                <datalist id="modelslist">
                    <option value="Duis molestie ">
                    <option value="Design">
                    <option value="Augue amet">
                    <option value="Fermentum luctus">
                    <option value="Lectuscinia">
                </datalist>
            </div>
    </section>
    <!-- section 1 -->
    @foreach ($categories as $category)
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
                <div class="design d-flex justify-content-between">
                    <p class="fw-bold mb-0" lng-tag="Most Popular Design course" style="text-transform: capitalize">Most
                        Popular <span style="color: #9F007E">{{ $category->category_name }}</span> Courses</p>
                    <a href="#" class="See" lng-tag="See all">See all</a>
                </div>

                <div class="row mt-5 multiple-items" dir="ltr">

                    @foreach ($category->courses as $course)
                        <div class="col-lg-4 col-md-6">
                            <div class="box">
                                <div class="image text-center">
                                    <a href="{{ route('courseShow', $course->id) }}"><img
                                            src="{{ asset('requirement/uploads/course_photo/' . $course->course_photo) }}"
                                            alt="" class="img-fluid width">
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="fw-bold" style="text-transform: capitalize" lng-tag="Motion">
                                        {{ $course->course_name }}<br> {{ $course->course_detail }}</p>
                                    <p class="p1" lng-tag="Dorothy" style="text-transform: capitalize">By
                                        {{ $course->instructor->name }}
                                    </p>
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
    @endforeach


@endsection

@section('scripts')

    <script src="{{ asset('requirement/pages/js/Script-2.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/index.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/script-3.js') }}"></script>

@endsection
