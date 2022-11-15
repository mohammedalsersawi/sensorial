@extends('sensorial.pages.parent')

@section('title', 'My_Profile')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/requirement/pages/css/work11.css') }}">

@endsection

@section('content')
    <!-- section 1 -->
    <section class="public-info">
        <div class="flex">
            <row class="row">
                <div class="col-lg-2 left-side">
                    <div class="list">
                        <a href="" class="a_1" lng-tag="Profile">Profile</a>
                        <a href="/sensorial/My_Profile/about_course" class="a_2" lng-tag="My Courses">My Courses</a>
                        <a href="/sensorial/My_Profile/payment" class="a_3" lng-tag="Payment Method">Payment Method</a>
                        <a href="/sensorial/My_Profile/certification" class="a_4" lng-tag="My Certification">My
                            Certification</a>
                    </div>
                </div>
            </row>
            <row class="row_1">
                <div class="col-lg-9 right_side">
                    <div class="description">
                        <h1 class="heading" lng-tag="Public Profile Information">Public Profile Information</h1>
                        <div class="para">
                            <p class="paragraph" lng-tag="All devices">All devices come with free delivery or
                                pickup as
                                standard. See
                                information<br>
                                on available
                                shopping options for your location.</p>
                        </div>
                        <form class="inp_div" action="">
                            <label for="" class="label" lng-tag="Full Name">Full Name</label>
                            <input type="text" class="input_1" placeholder="Enter your name">
                            <label for="" class="label" lng-tag="Email">Email</label>
                            <input type="email" class="input_1" placeholder="Email">
                            <label for="" class="label" lng-tag="Address">Address</label>
                            <input type="text" class="input_1" placeholder="Enter your Address">
                            <label for="" class="label" lng-tag="Facebook Link">Facebook Link</label>
                            <input type="text" class="input_1" placeholder="Enter your link">
                        </form>
                    </div>
                </div>
            </row>
        </div>
    </section>
@endsection

@section('scripts')

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="/requirement/pages/Work11/js/bootstrap.bundle.min.js"></script>
    <script src="/requirement/pages/Work11/js/all.min.js"></script>
    <script src="/requirement/pages/Work11/Script-2.js"></script>
    <script src="/requirement/pages/Work11/js/index.js"></script>
    <script src="/requirement/pages/Work11/js/translate.js"></script>
    <script>
        function swapStyleSheet(sheet) {
            document.getElementById('pagestyle').setAttribute('href', sheet);
        }
    </script>
@endsection
