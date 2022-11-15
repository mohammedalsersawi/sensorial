@extends('sensorial.pages.parent')

@section('title', 'details')

@section('styles')
    <link rel="stylesheet" href="/requirement/pages/Work9/css/bootstrap.min.css">
    <link rel="stylesheet" href="/requirement/pages/Work9/css/all.min.css">
    <link rel="stylesheet" href="/requirement/pages/Work9/css/style.css">
@endsection

@section('content')
    <!-- section 1 -->
    <section class="Customer">
        <div class="container">
            <div class="row">
                <div class="box">
                    <h1 class="h1-1" lng-tag="CUSTOMER DETAILS">CUSTOMER DETAILS</h1>
                    <p class="p1" lng-tag="Semper vitae">Semper vitae et hendrerit lorem tortor, tristique ut eu ornare
                        pede
                        urna, sem
                        nunc<br>aliquet
                        tellus bibendum,iaculis aliquam curabitur vitae porttitor, ligula mi</p>
                    <form action="" class="form-1">
                        <p class="p2" lng-tag="Full Name">Full Name</p>
                        <input type="text" class="input-2" placeholder="Enter your name">
                        <p class="p2" lng-tag="Phone number">Phone number</p>
                        <input type="tel" class="input-2" placeholder="Phone number">
                    </form>
                    <div class="box-1">
                        <div class="inline-div-1">
                            <p class="p3" lng-tag="Subtotal (2 items)">Subtotal (2 items)</p>
                            <p class="p4" lng-tag="$39.98">$39.98</p>
                        </div>
                        <div class="inline-div-2">
                            <img src="/requirement/pages/Work9/img/img.svg" alt="">
                            <p class="p5" lng-tag="Motion Design with Figma: Animations, UX/UI">Motion Design with
                                Figma:
                                Animations, UX/UI</p>
                            <p class="p6" lng-tag="$19.99">$19.99</p>
                        </div>
                        <div class="inline-div-2">
                            <img src="/requirement/pages/Work9/img/img.svg" alt="">
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
                    <button type="button" class="btn-4" lng-tag="Continue">Continue</button>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="/requirement/pages/Work9/js/bootstrap.bundle.min.js"></script>
    <script src="/requirement/pages/Work9/js/all.min.js"></script>
    <script src="/requirement/pages/Work9/Script-2.js"></script>
    <script src="/requirement/pages/Work9/js/index.js"></script>
    <script src="/requirement/pages/Work9/js/translate.js"></script>
    <script>
        function swapStyleSheet(sheet) {
            document.getElementById('pagestyle').setAttribute('href', sheet);
        }
    </script>
@endsection
