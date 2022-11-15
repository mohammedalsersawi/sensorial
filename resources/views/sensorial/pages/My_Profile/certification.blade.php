@extends('sensorial.pages.parent')

@section('title', 'My Certification')

@section('styles')
<link rel="stylesheet" href="/requirement/pages/css/bootstrap.min.css">
<link rel="stylesheet" href="/requirement/pages/css/all.min.css">
<link rel="stylesheet" href="/requirement/pages/css/New-7.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.0/css/intlTelInput.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>
.iti__flag {
    background-image: url("path/to/flags.png");
}

@media (-webkit-min-device-pixel-ratio: 2),
(min-resolution: 192dpi) {
    .iti__flag {
        background-image: url("path/to/flags@2x.png");
    }
}
</style>
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
                                                    <circle id="Ellipse_306" data-name="Ellipse 306" cx="10" cy="10"
                                                        r="10" transform="translate(189 2700)" />
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
                                                    <circle id="Ellipse_306" data-name="Ellipse 306" cx="10" cy="10"
                                                        r="10" transform="translate(189 2700)" />
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
                                                    <circle id="Ellipse_306" data-name="Ellipse 306" cx="10" cy="10"
                                                        r="10" transform="translate(189 2700)" />
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
                                                <img src="/requirement/pages/img/Test.svg" alt="">
                                            </div>
                                            <p class="m-0 p-9" lng-tag="Test">Test</p>
                                        </a>
                                    </div>

                                    <div class="body-content mt-2">
                                        <a href="#" class="a-1">
                                            <div class="back">
                                                <img src="/requirement/pages/img/cratification.png" alt=""
                                                    class="cratifi">
                                            </div>
                                            <p class="m-0 p-9" lng-tag="Get certification">Get certification</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 mt-4">
                <div class="box-2">
                    <div class="image">
                        <img src="/requirement/pages/img/cer.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-4">
                <div class="box-3">
                    <div class="Edit">
                        <a href="#" class="a-1" lng-tag="About Student">About Student</a>
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                            lng-tag="Edit">
                            Edit
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel" lng-tag="Edit Personal Info">
                                            Edit Personal Info</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="">
                                            <label for="" class="label--1" lng-tag="Full Name in English">Full Name
                                                in English </label><br />
                                            <input type="text" name="" id="" placeholder="Enter your name"
                                                class="input__1"><br />
                                            <label for="" class="label--1" lng-tag="Email">Email</label><br />
                                            <input type="email" name="" id="" placeholder="Enter your Email"
                                                class="input__1"><br />
                                            <label for="" class="label--1" lng-tag="Phone Number">Phone
                                                Number</label><br />
                                            <input type="tel" name="" class="input__1" id="phone"><br />
                                            <label for="" class="label--1" lng-tag="Address">Address</label><br />
                                            <input type="text" name="" id="" placeholder="Enter your Address"
                                                class="input__1"><br />
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn__1" data-bs-dismiss="modal"
                                            lng-tag="Cancel">Cancel</button>
                                        <button type="button" class="btn___1" lng-tag="Save">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="student">
                        <label for="" class="label-1" lng-tag="Student Name :">Student Name :</label>
                        <p class="p-20" lng-tag="Wesam Awad">Wesam Awad</p>
                    </div>
                    <div class="student">
                        <label for="" class="label-1" lng-tag="Student Email :">Student Email :</label>
                        <p class="p-20">nn5613470@gmail.com</p>
                    </div>
                    <div class="student">
                        <label for="" class="label-1" lng-tag="Student phone :">Student phone :</label>
                        <p class="p-20">0592373805</p>
                    </div>
                    <div class="student">
                        <label for="" class="label-1" lng-tag="Student Address :">Student Address :</label>
                        <p class="p-20" lng-tag="Palestine - gaza">Palestine - gaza</p>
                    </div>
                    <div class="student">
                        <label for="" class="label-1" lng-tag="Payment Status :">Payment Status :</label>
                        <p class="p-20 p-21" lng-tag="Paid">Paid</p>
                    </div>
                </div>
                <div class="Download">
                    <a href="#" class="a-3 form-control" lng-tag="Download">Download</a>
                    <a href="#" class="a-3 a-4 form-control" lng-tag="Share">Share</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section 1 -->
@endsection

@section('scripts')
<script src="/requirement/pages/js/bootstrap.bundle.min.js"></script>
<script src="/requirement/pages/js/all.min.js"></script>
<script src="/requirement/pages/js/Script-2.js"></script>
<script src="/requirement/pages/js/Script-4.js"></script>
<script src="/requirement/pages/js/index.js"></script>
<!--     <script src="script-model.js"></script> -->
<script src="/requirement/pages/js/translate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.0/js/intlTelInput.min.js"></script>
<script>
var input = document.querySelector("#phone");
var iti = window.intlTelInput(input, {
    initialCountry: "jo",
    separateDialCode: true,
    utilsScript: 'js/utils.js'
})
</script>
@endsection