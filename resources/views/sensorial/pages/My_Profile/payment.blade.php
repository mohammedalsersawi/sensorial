@extends('sensorial.pages.parent')

@section('title', 'PAYMENT')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/requirement/pages/Work10/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="/requirement/pages/Work10/css/all.min.css">
    <link rel="stylesheet" href="/requirement/pages/Work10/css/style.css">
@endsection

@section('content')
    <!-- section 1 -->
    <section class="Customer">
        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="content-1">
                        <div class="content">
                            <span class="s-1">1</span>
                            <a href="/sensorial/My_Profile/details" style="text-decoration: none">
                                <p class="p-7" lng-tag="CUSTOMER DETAILS">CUSTOMER DETAILS</p>
                            </a>
                        </div>
                        <div class="content">
                            <span class="s-1">2</span>
                            <a href="/sensorial/My_Profile/payment" style="text-decoration: none">
                                <p class="p-7" lng-tag="PAYMENT METHOD">PAYMENT METHOD CUSTOMER DETAILS</p>
                            </a>
                        </div>
                        <div class="content">
                            <span class="s-2">3</span>
                            <a href="#" style="text-decoration: none">
                                <p class="p-7" lng-tag="CONFIRMATION">CONFIRMATION</p>
                            </a>
                        </div>
                    </div>
                    <form action="{{ route('payment.store') }}" method="post" class="form-1 needs-validation" novalidate
                        enctype="multipart/form-data">
                        @csrf
                        {!! csrf_field() !!}
                        <div class="all">
                            <div class="input-div-1">
                                <input type="radio" name="curr" value="mastecard">
                                <img src="/requirement/pages/Work10/img/v.svg" alt="" class="img-border-1">
                            </div>
                            <div class="input-div-2">
                                <input type="radio" name="curr" checked value="visa">
                                <img src="/requirement/pages/Work10/img/visa_2014_logo_detail.svg" alt=""
                                    class="img-border-2">
                            </div>
                            <div class="input-div-3">
                                <input type="radio" name="curr" value="paypal">
                                <img src="/requirement/pages/Work10/img/paypal_2014_logo_detail.svg" alt=""
                                    class="img-border-3">
                            </div>
                        </div>
                        <div class="all-input">
                            <div class="div_1">
                                <label for="" class="label_1" lng-tag="Card number">Card number <span
                                        class="span-p">*</span></label>
                                <input type="number" name="cardnumber" id="" class="input_1">
                                <label for="" class="label_2" lng-tag="Cardholder">Cardholder <span
                                        class="span-p">*</span></label>
                                <input type="number" name="cardholder" id="" class="input_2">
                            </div>
                            <div class="all-input-1">
                                <div class="div_1">
                                    <label for="" class="label_1" lng-tag="Expiry date">Expiry date <span
                                            class="span-p">*</span></label>
                                    <input type="number" name="expirydate" id="" class="input_3">
                                    <label for="" class="label_2" lng-tag="CVC">CVC <span
                                            class="span-p">*</span></label>
                                    <input type="number" name="cvc" id="" class="input_4">
                                </div>
                            </div>
                        </div>
                        <div class="div-checkbox">
                            <input type="checkbox" name="" id="" class="check">
                            <p class="p--1" lng-tag="Save my details for future purchases">Save my details for
                                future
                                purchases</p>
                        </div>
                        <br>
                        <br>


                        <div class="box-1">
                            <div class="inline-div-1">
                                <p class="p3" lng-tag="Subtotal (2 items)">Subtotal (2 items)</p>
                                <p class="p4" lng-tag="$39.98">$39.98</p>
                            </div>
                            <div class="inline-div-2">
                                <img src="/requirement/pages/Work10/img/img.svg" alt="">
                                <p class="p5" lng-tag="Motion Design with Figma: Animations, UX/UI">Motion Design with
                                    Figma:
                                    Animations, UX/UI</p>
                                <p class="p6" lng-tag="$19.99">$19.99</p>
                            </div>
                            <div class="inline-div-2">
                                <img src="/requirement/pages/Work10/img/img.svg" alt="">
                                <p class="p5" lng-tag="Motion Design with Figma: Animations, UX/UI">Motion Design with
                                    Figma:
                                    Animations, UX/UI</p>
                                <p class="p6" lng-tag="$19.99">$19.99</p>
                            </div>
                        </div>
                        <div class="box-2">
                            <p class="p7" lng-tag="TOTAL AMOUNT">TOTAL AMOUNT</p>
                            <p class="p8" lng-tag="$39.98">$39.98</p>
                        </div>
                        <center>
                            <button type="submit" class="btn-4" lng-tag="CONFIRM PAYMENT">CONFIRM PAYMENT</button>
                        </center>
                    </form>

                </div>
            </div>
        </div>

    </section>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="/requirement/pages/Work10/js/bootstrap.bundle.min.js"></script>
    <script src="/requirement/pages/Work10/js/all.min.js"></script>
    <script src="/requirement/pages/Work10/Script-2.js"></script>
    <script src="/requirement/pages/Work10/js/index.js"></script>
    <script src="/requirement/pages/Work10/js/translate.js"></script>
    <script>
        function swapStyleSheet(sheet) {
            document.getElementById('pagestyle').setAttribute('href', sheet);
        }
    </script>
@endsection
