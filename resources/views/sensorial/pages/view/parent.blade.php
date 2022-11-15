@extends('sensorial.pages.parent')

@section('styles')
    <link rel="stylesheet" href="{{ asset('requirement/pages/css/New-1.css') }}">
@endsection

@section('title')
@endsection

@section('content')
    @auth

        <!-- section 1 -->
        <section class="section-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 mt-5">
                        <div class="box-1">
                            <p class="p-8" lng-tag="Course Full Name" style="text-transform: capitalize">
                                {{ $course->course_name }}</p>
                            <a href="{{ route('viewCourse', $course->id) }}" class="a-2">
                                <p class="p-9 mt-3" lng-tag="Grade">Course Material</p>
                            </a>
                            <a href="#" class="a-2">
                                <p class="p-9 mt-3" lng-tag="Grade">Grade</p>
                            </a>
                            <a href="#" class="a-2">
                                <p class="p-10" lng-tag="Course info">Course info</p>
                            </a>
                        </div>

                    </div>

                    @yield('content-1')
                </div>
            </div>
        </section>
        <!-- section 1 -->

    @endauth
@endsection

@section('scripts')
    <script src="{{ asset('requirement/pages/js/Script-2.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/index.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/Script-4.js') }}"></script>
@endsection
