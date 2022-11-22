@extends('sensorial.pages.parent')

@section('styles')
\    <link rel="stylesheet" href="{{ asset('requirement/pages/css/New-2.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.0/jquery.toast.min.css" integrity="sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                            <a href="{{ route('viewLecture', $lecture->id) }}" lng-tag="Description">Description</a>
                            <a href="" lng-tag="Reviews">Reviews </a>
                        </div>
                        <div class="person mt-5">
                            <img style="width: 50px" src="{{ asset('requirement/pages/img/person-1.png') }}" alt=""
                                class="img-fluid man">
                            <div class="intruct">
                                <p class="p-15" lng-tag="Instructor name">Instructor name</p>
                                <p class="p-16" lng-tag="posted an announcement · 4 years ago ·">posted an announcement
                                    · 4 years ago · </p>
                            </div>
                        </div>
                        <p class="p-18 lh-lg" lng-tag="hope">I hope that you can find something new and interesting
                            there! <br>
                            Happy designing, and thanks for your thousands of positive reviews on the course :)</p>

                        <div class="profile d-flex align-items-center mt-5">
                            <img src="img/profile.png" alt="" class="img-fluid profil">
                            <form action="" id="comment_form" class="w-100">
                                @csrf
                                <input type="text" name="comment" id="comment" placeholder="write a new comment"
                                    class="form-control comment">
                                <div class="text-right">
                                    <button class="btn btn-info mt-3">add</button>
                                </div>
                            </form>
                        </div>
                        <div class="person mt-4">


                            <div class="intruct">
                              <div class="list">
                                @include('sensorial.pages.view.list' , ['comments' => $comments])
                              </div>
                            </div>
                        </div>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.0/jquery.toast.min.js" integrity="sha512-zv5L1hY+PMayrX2l0ojsUqem6AHpdSIVyDJBlDQH/fMLpH1JgaxPTjpum1b1AlLHdARVonrpomps+GgR0oN3MA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <script>
        $('#comment_form').submit(function(e) {
            e.preventDefault();
            var comment = $('#comment').val();
            var lecture_id = '{{ $id }}';
            var course_id = '{{ $lecture->course_id }}';
            $.ajax({
                url: '{{ route('add_comment') }}',
                type: "post",
                data: {
                    _token: '{{ csrf_token() }}',
                    comment: comment,
                    lecture_id: lecture_id,
                    course_id: course_id,
                },
                success: function(res) {
                    $('#comment').val('')
                    $('.list').html(res);
                    toastr.success('Success messages');
                }
            });


        })
    </script>
@endsection
