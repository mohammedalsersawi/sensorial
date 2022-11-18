@extends('sensorial.pages.parent')

@section('title', 'Cart')

@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/pages/css/shopping-cart.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

@endsection


@section('content')

    <!-- section 1 -->
    <section class="section-1 pt-5 pb-5">
        <div class="container">
            <h5 class="h5" lng-tag="Shopping Cart">Shopping Cart</h5>
            <p class="p-1" lng-tag="3 Courses in Cart">{{ $count }} Courses in Cart</p>
            <div class="row">
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('fail'))
                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @endif
                <div class="col-lg-8 col-md-12">
                    @foreach ($cart as $course)
                        <div class="box" id="box">
                            <img src="{{ asset('requirement/uploads/course_photo/' . $course->course->course_photo) }}"
                                alt="" class="img-fluid">
                            <div class="content-1">
                                <p class="p" lng-tag="Motion">{{ $course->course->course_name }}
                                </p>
                                <p class="p-1" lng-tag="Dorothy P" style="text-transform: capitalize">by
                                    {{ $course->instructor->name }}
                                    <span class="star"><i class="fa-solid fa-star star"></i>5.0</span><span
                                        class="span-1">(+100k)</span>
                                </p>
                            </div>
                            <div class="content-2">
                                <a href="{{ route('removeItem', $course->id) }}">Remove</a>
                            </div>
                            <div class="content-3">
                                <span>${{ $course->price }}</span><br>
                                {{-- <del>$84.99</del> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-4">
                    <div class="box-1">
                        <p class="total" lng-tag="Total">Total:</p>
                        <span class="span-2">${{ $totel }}</span><br>
                        {{-- <del>$169.98</del> --}}
                        <form action="">

                        </form>
                        <a href="{{ route('checkout') }}">
                            <input type="submit" name="" id="" value="Pay in full"
                                class="form-control input-1">
                        </a>


                        <!-- Button trigger modal -->
                        <button type="button" class="form-control input-1" data-toggle="modal" data-target="#exampleModal">
                            Pay in installments
                        </button>
                        <a href="{{ route('checkout.premium') }}">
                            <input type="submit" name="" id="" value="Pay a premium"
                                class="form-control input-1">
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="h6" lng-tag="Choose how many months you want to pay the course fee">
                                            <b>Choose how many months you want to pay the course fee</b>
                                        </p>
                                        <br>
                                        <form action="{{ route('installments') }}" method="POST" id="form">
                                            @csrf
                                            <select class="custom-select" name="installment" id="installment">
                                                <option disabled value="select" lng-tag="Select a duration">Select a
                                                    duration</option>
                                                <option value="3" lng-tag="Less than 1 Month">Less than 1 Month
                                                </option>
                                                <option value="6" lng-tag="1 to 2 Month">1 to 2 Month</option>
                                                <option value="9" lng-tag="1 to 6 Month">1 to 3 Month</option>
                                            </select>
                                            <br>
                                            <br>
                                            <select class="custom-select" name="course_id" id="course_id">
                                                <option disabled value="select" lng-tag="Select a duration">Select a
                                                    duration</option>
                                                <option value="1" >1</option>
                                                <option value="2" >2</option>
                                                <option value="3" >3</option>
                                            </select>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="form-control input-1">Go</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 1 -->

    <!-- section 5 -->


    <!-- section 5 -->

@endsection

@section('scripts')

    <script src="{{ asset('requirement/pages/js/Script-2.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/index.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/script-3.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    <script>
        $('select[name="installment"]').on('change', function(e) {
            e.preventDefault();
            var time_installment = $('#installment').val();
            $.ajax({
                url: "{{ URL::to('sensorial/thanksInstallment') }}/" + time_installment ,
                type: "GET",
                dataType: "json",
            });
        });
        // $('select[name="course_id"]').on('change', function(e) {
        //     e.preventDefault();
        //     var course_id = $('#course_id').val();
        //     alert(course_id);
        //     $.ajax({
        //         url: "{{ URL::to('sensorial/course_id') }}/" + course_id,
        //         type: "GET",
        //         dataType: "json",
        //     });

    </script>

@endsection
