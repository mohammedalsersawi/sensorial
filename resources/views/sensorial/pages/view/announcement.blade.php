@extends('sensorial.pages.view.parent')

@section('styles')
    <link rel="stylesheet" href="{{ asset('requirement/pages/css/New-3.css') }}">
@endsection

@section('content')
    <!-- section 1 -->
    <section class="section-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mt-5">
                    <div class="box-1">
                        <p class="p-8" lng-tag="Course Full Name">Course Full Name</p>

                        <div class="accordion">
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    <div class="content-acc">
                                        <p class="p-101 fw-bold" lng-tag="Week1">week 1</p>
                                    </div>
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">

                                        <div class="body-content">
                                            <a href="#" class="a-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20">
                                                    <g id="Group_303" data-name="Group 303"
                                                        transform="translate(-189 -2700)">
                                                        <circle id="Ellipse_306" data-name="Ellipse 306" cx="10"
                                                            cy="10" r="10" transform="translate(189 2700)" />
                                                        <path id="Polygon_4" data-name="Polygon 4" d="M4,0,8,6H0Z"
                                                            transform="translate(203 2706) rotate(90)" fill="#fff" />
                                                    </g>
                                                </svg>
                                                <p class="m-0 p-9" lng-tag="video name">video name</p>
                                            </a>
                                        </div>

                                        <div class="body-content">
                                            <a href="#" class="a-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20">
                                                    <g id="Group_303" data-name="Group 303"
                                                        transform="translate(-189 -2700)">
                                                        <circle id="Ellipse_306" data-name="Ellipse 306" cx="10"
                                                            cy="10" r="10" transform="translate(189 2700)" />
                                                        <path id="Polygon_4" data-name="Polygon 4" d="M4,0,8,6H0Z"
                                                            transform="translate(203 2706) rotate(90)" fill="#fff" />
                                                    </g>
                                                </svg>
                                                <p class="m-0 p-9" lng-tag="video name">video name</p>
                                            </a>
                                        </div>

                                        <div class="body-content">
                                            <a href="#" class="a-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20">
                                                    <g id="Group_303" data-name="Group 303"
                                                        transform="translate(-189 -2700)">
                                                        <circle id="Ellipse_306" data-name="Ellipse 306" cx="10"
                                                            cy="10" r="10" transform="translate(189 2700)" />
                                                        <path id="Polygon_4" data-name="Polygon 4" d="M4,0,8,6H0Z"
                                                            transform="translate(203 2706) rotate(90)" fill="#fff" />
                                                    </g>
                                                </svg>
                                                <p class="m-0 p-9" lng-tag="video name">video name</p>
                                            </a>
                                        </div>
                                        <div class="body-content mt-2">
                                            <a href="#" class="a-1">
                                                <div class="back">
                                                    <img src="img/Test.svg" alt="">
                                                </div>
                                                <p class="m-0 p-9" lng-tag="Test">Test</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-6 mt-4">
                    <div class="box">
                        <a href="#">
                            <p class="p-1" lng-tag="Course name">Course name</p>
                        </a><img src="img/arrow-circle-right-svgrepo-com.svg" alt="" class="img-fluid arrow">
                        <a href="#">
                            <p class="p-1" lng-tag="Week1">week 1</p>
                        </a><img src="img/arrow-circle-right-svgrepo-com.svg" alt="" class="img-fluid arrow">
                        <a href="#">
                            <p class="p-1" lng-tag="video name">video name</p>
                        </a>
                        <video width="100%" height="300px" controls>
                            <source src="img/vedio on nature.mp4" type="video/mp4">
                        </video>
                        <div class="href mt-4">
                            <a href="" lng-tag="Description">Description</a>
                            <a href="" lng-tag="Announcement">Announcement </a>
                            <a href="" lng-tag="Reviews">Reviews </a>
                        </div>
                        <div class="person mt-5">
                            <img src="img/person-1.png" alt="" class="img-fluid man">
                            <div class="intruct">
                                <p class="p-15" lng-tag="Instructor name">Instructor name</p>
                                <p class="p-16" lng-tag="posted an announcement · 4 years ago ·">posted an announcement
                                    · 4 years ago · </p>
                            </div>
                        </div>
                        <p class="p-17 fw-bold mt-4" lng-tag="just">I just updated my resources page!</p>
                        <p class="p-18 lh-lg" lng-tag="hope">I hope that you can find something new and interesting
                            there! <br>
                            Happy designing, and thanks for your thousands of positive reviews on the course :)</p>

                        <div class="profile d-flex align-items-center mt-5">
                            <img src="img/profile.png" alt="" class="img-fluid profil">
                            <form action="" class="w-100">
                                <input type="text" name="" id="" placeholder="write a new comment"
                                    class="form-control comment">
                            </form>
                        </div>
                        <div class="person mt-4">
                            <img src="img/weman-profile.png" alt="" class="img-fluid profil">
                            <div class="intruct">
                                <p class="p-15" lng-tag="student name">student name</p>
                                <p class="p-16" lng-tag="Jonas Please">Jonas Please, I've subscribed to your mailing
                                    list but I haven't</p>
                            </div>
                        </div>
                        <div class="person mt-4 mb-2">
                            <img src="img/weman-profile.png" alt="" class="img-fluid profil">
                            <div class="intruct">
                                <p class="p-15" lng-tag="student name">student name</p>
                                <p class="p-16" lng-tag="Jonas Please">Jonas Please, I've subscribed to your mailing
                                    list but I haven't</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 mt-5">
                    <div class="box-2">
                        <p class="fw-bold p-13" lng-tag="Recourses">Recourses'</p>
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
