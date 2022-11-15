@extends('sensorial.pages.parent')

@section('styles')
    <link rel="stylesheet" href="{{ asset('requirement/pages/css/New-2.css') }}">
@endsection

@section('content')
    <!-- section 1 -->
    <section class="section-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mt-5">
                    <div class="box-1">
                        <p class="p-8" lng-tag="Course Full Name" style="text-transform: capitalize">
                            {{ $lecture->course->course_name }}</p>


                        <div class="accordion">
                            @foreach ($lecture->course->sections as $section)
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        <div class="content-acc">
                                            <p class="p-101 fw-bold" lng-tag="Week1">{{ $section->section_name }}</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item-body">
                                        <div class="accordion-item-body-content">
                                            @foreach ($section->lectures as $lecture)
                                                <div class="body-content">
                                                    @if ($lecture->count() <= 0)
                                                        Nothing Found
                                                    @else
                                                        <span class="a-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 20 20">
                                                                <g id="Group_303" data-name="Group 303"
                                                                    transform="translate(-189 -2700)">
                                                                    <circle id="Ellipse_306" data-name="Ellipse 306"
                                                                        cx="10" cy="10" r="10"
                                                                        transform="translate(189 2700)" />
                                                                    <path id="Polygon_4" data-name="Polygon 4"
                                                                        d="M4,0,8,6H0Z"
                                                                        transform="translate(203 2706) rotate(90)"
                                                                        fill="#fff" />
                                                                </g>
                                                            </svg>
                                                            <a style="text-decoration: none; color: #000"
                                                                href="{{ route('viewLecture', $lecture->id) }}">
                                                                <p class="m-0 p-9" style="text-transform: capitalize"
                                                                    lng-tag="video name">{{ $lecture->lecture_name }}
                                                                </p>
                                                            </a>
                                                        </span>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>
                <div class="col-lg-6 mt-4">
                    <div class="box">
                        <a href="#">
                            <p class="p-1" lng-tag="Course name" style="text-transform: capitalize">
                                {{ $lecture->course->course_name }}</p>
                        </a><img src="{{ asset('requirement/pages/img/arrow-circle-right-svgrepo-com.svg') }}"
                            alt="" class="img-fluid arrow">
                        <a href="#">
                            <p class="p-1" lng-tag="video name">{{ $lecture->id }}</p>
                        </a>

                        <video width="100%" controls>
                            <source src="{{ asset('requirement/pages/img/vedio on nature.mp4') }}" type="video/mp4">
                        </video>

                        <div class="href mt-4">
                            <a href="" lng-tag="Description">Description</a>
                            <a href="{{ route('viewAnnouncement', $lecture->id) }}" lng-tag="Announcement">Announcement </a>
                            <a href="" lng-tag="Reviews">Reviews </a>
                        </div>
                        <p class="p-11 mt-4" lng-tag="Intellectual">Intellectual Property in Augmented Reality
                            Applications
                            In much the same way that virtual content has questions surrounding it in all media,
                            augmented reality shares those same dilemmas and problems. If you purchase a book and have
                            it on your bookshelf at home, you would be quite upset if the publisher came and removed
                            that book from your bookshelf. However, if that content was available on a website and the
                            publisher removed or altered the information, it feels much less invasive. Likewise, if one
                            procures an augmented reality application, does the model for the content follow the model
                            of a physical book or is it more like material available on a website?</p>
                    </div>

                </div>
                <div class="col-lg-3 mt-4">
                    <div class="box-2">
                        <p class="fw-bold p-13" lng-tag="Recourses'">Recourses'</p>
                        <div class="content">
                            <img src="img/pin.png" alt="" class="pin">
                            <p class="p-12" lng-tag="Course 1">Course 1 Week 1 - Glossary <br><span class="span-1">Docx
                                    File</span></p>
                        </div>
                        <div class="content">
                            <img src="img/pin.png" alt="" class="pin">
                            <p class="p-12" lng-tag="Course 1">Course 1 Week 1 - Glossary <br><span class="span-1">Docx
                                    File</span></p>
                        </div>
                        <div class="content">
                            <img src="img/pin.png" alt="" class="pin">
                            <p class="p-12" lng-tag="Course 1">Course 1 Week 1 - Glossary <br><span class="span-1">Docx
                                    File</span></p>
                        </div>
                        <div class="content">
                            <img src="img/pin.png" alt="" class="pin">
                            <p class="p-12" lng-tag="Course 1">Course 1 Week 1 - Glossary <br><span class="span-1">Docx
                                    File</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 1 -->
@endsection

@section('scripts')
    <script src="{{ asset('requirement/pages/js/Script-2.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/index.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/Script-4.js') }}"></script>
@endsection
