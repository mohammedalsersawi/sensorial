@extends('sensorial.pages.parent')

@section('title', 'Courses')

@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/pages/css/result-baby.css') }}">
    <style>
        .button {
            background-color: Transparent;
            background-repeat: no-repeat;
            border: none;
            cursor: pointer;
            overflow: hidden;
        }


    </style>

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
                            fill="#9f007e"stroke="#9f007e" transform="translate(-1.323 -3.497)" fill="none"
                            stroke="#9f007e" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                    </symbol>

                </defs>
            </svg>
            <div class="row">
                <div class="col-md-3">

                    <div class="accordion">
                        <form>
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    <div class="content-acc">
                                        <p class="p-101 fw-bold" lng-tag="Topic">Topic</p>
                                    </div>
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        @foreach ($courses as $course)
                                            <div class="body-content">
                                                <input type="checkbox" name="" id="">
                                                <p class="mb-0 ms-1" lng-tag="Baby">Baby </p>
                                            </div>
                                        @endforeach

                                        <button type="submit" class="btn-outline-primary">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form action="{{ route('coursesShow') }}" method="get">
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    <div class="content-acc">
                                        <p class="p-101 fw-bold" lng-tag="Rating">Rating </p>
                                    </div>
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <div class="content-c">
                                            <input type="checkbox" name="sarech[]" value="5" id=""
                                                class="me-1">
                                            <p class="m-0"><i class="fa-solid fa-star sta"></i><i
                                                    class="fa-solid fa-star sta"></i><i class="fa-solid fa-star sta"></i><i
                                                    class="fa-solid fa-star sta"></i><i class="fa-solid fa-star sta"></i>
                                                <span lng-tag="4.5 and up">5 and up</span>
                                            </p>
                                        </div>
                                        <div class="content-c">
                                            <input type="checkbox" name="sarech[]" value="4" id=""
                                                class="me-1">
                                            <p class="m-0"><i class="fa-solid fa-star sta"></i><i
                                                    class="fa-solid fa-star sta"></i><i class="fa-solid fa-star sta"></i><i
                                                    class="fa-solid fa-star sta"></i><i class="fa-solid fa-star 1"></i>
                                                <span lng-tag="4.5 and up">4 and up</span>
                                            </p>
                                        </div>
                                        <div class="content-c">
                                            <input type="checkbox" name="sarech[]" value="3" id=""
                                                class="me-1">
                                            <p class="m-0"><i class="fa-solid fa-star sta"></i><i
                                                    class="fa-solid fa-star sta"></i><i class="fa-solid fa-star sta"></i><i
                                                    class="fa-solid fa-star "></i><i class="fa-solid fa-star "></i>
                                                <span lng-tag="4.5 and up">3 and up</span>
                                            </p>
                                        </div>
                                        <div class="content-c">
                                            <input type="checkbox" name="sarech[]" value="2" id=""
                                                class="me-1">
                                            <p class="m-0"><i class="fa-solid fa-star sta"></i><i
                                                    class="fa-solid fa-star sta"></i><i class="fa-solid fa-star "></i><i
                                                    class="fa-solid fa-star "></i><i class="fa-solid fa-star "></i>
                                                <span lng-tag="4.5 and up">2 and up</span>
                                            </p>
                                        </div>
                                        <div class="content-c">
                                            <input type="checkbox" name="sarech[]" value="1" id=""
                                                class="me-1">
                                            <p class="m-0"><i class="fa-solid fa-star sta"></i><i
                                                    class="fa-solid fa-star "></i><i class="fa-solid fa-star "></i><i
                                                    class="fa-solid fa-star "></i><i class="fa-solid fa-star "></i>
                                                <span lng-tag="4.5 and up">1 and up</span>
                                            </p>
                                        </div>
                                        <button type="submit" class="btn-outline-primary">Filter</button>



                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-9">
                    @foreach ($courses as $course)
                        <div class="box">
                            <div class="image">
                                <a href="{{ route('courseShow', $course->id) }}">
                                    <img src="{{ asset('requirement/uploads/course_photo/' . $course->course_photo) }}"
                                        alt="" width="" class="img-fluid baby" style="">
                                </a>
                            </div>
                            <div class="content">
                                <a href="{{ route('courseShow', $course->id) }}"
                                    style="text-decoration: none; color:#000">
                                    <p class="fw-bold pp-1" style="text-transform: capitalize; font-size: 20px"
                                        lng-tag="Motion">
                                        {{ $course->course_name }}</p>
                                </a>
                                <p class="pp-2" lng-tag="Aprende">{{ $course->course_detail }}</p>
                                <p class="p1" lng-tag="Dorothy" style="text-transform: capitalize">By
                                    <u>{{ $course->instructor->name }}</u>
                                </p>

                                <span class="number">({{ $course->rate }})</span>


                                @php
                                    $rating = $course->rate;
                                    $starcount = floor($rating);
                                    $fraction = $rating - $starcount;
                                @endphp
                                @if ($rating == 0)
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                @else
                                    @foreach (range(1, $starcount) as $i)
                                        <i class="fa-solid fa-star star"></i>
                                    @endforeach

                                    @if ($rating != 5)
                                        @if ($fraction == 0)
                                            <i class="fa-solid fa-star"></i>
                                        @elseif ($fraction > 0.5)
                                            <i class="fa-solid fa-star star"></i>
                                        @else
                                            <i class="fa-solid fa-star"></i>
                                        @endif
                                    @endif

                                    @if ($starcount != 4 && $rating != 5)
                                        @foreach (range(1, 4 - $starcount) as $i)
                                            <i class="fa-solid fa-star "></i>
                                        @endforeach
                                    @elseif($starcount != 4 && $starcount < 0.5 && $rating != 5)
                                        <i class="fa-solid fa-star "></i>
                                    @endif
                                @endif




                                <span class="num"><span class="number"></span>({{ $course->rateall->count() }})</span>
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
                                    {{-- <form id="formlike"  method="post" action="{{route('courseLike')}}"> --}}
                                    {{--    <input id="inputlike{{$course->id}}" name="like" type="hidden" value=""> --}}
                                    @auth()
                                        <button onclick="like({{ $course->id }})" id="button" class="button">
                                            <div id="icon">
                                                <svg class="svg-1" width="30" height="30" fill="currentColor">
                                                    <use href="{{ in_array($course->id, $like) ? '#heart-fill' : '#heart' }}">
                                                    </use>

                                                </svg>
                                            </div>
                                        </button>
                                    @endauth

                                    {{-- </form> --}}

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

    <script>
        function like(id) {
            // $('#formlike').submit(function(e){
            // const like=$('#inputlike'+id).val('1');
            $.ajax({
                type: 'post',
                url: '{{ route('courseLike') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    // like:like,
                    course: id
                },
                success: function(res) {
                    $('#inputlike' + id).val('0');
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            })
        }
        // )}
    </script>
@endsection
