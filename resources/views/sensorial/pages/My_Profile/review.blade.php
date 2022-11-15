@extends('sensorial.pages.parent')

@section('title', 'review')

@section('styles')
    <link rel="stylesheet" href="/requirement/pages/Work12/css/bootstrap.min.css">
    <link rel="stylesheet" href="/requirement/pages/Work12/css/all.min.css">
    <link rel="stylesheet" href="/requirement/pages/Work12/css/style.css">
@endsection

@section('content')
    <!-- section 1 -->
    <section class="check">
        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="image"><img src="/requirement/pages/Work12/img/Group 315.svg" alt=""
                            class="img_1"></div>
                    <div class="description">
                        <h1 class="heading" lng-tag="Your Account Will Be Review within 24 hour">Your Account Will Be
                            Review
                            within 24 hour</h1>
                    </div>
                    <div class="para">
                        <p class="p1" lng-tag="An email will be">An email will be sent to the email you entered if the
                            account
                            is approved</p>
                    </div>
                    <div class="btton">
                        <button class="btn" lng-tag="Ok">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="/requirement/pages/Work12/js/bootstrap.bundle.min.js"></script>
    <script src="/requirement/pages/Work12/js/all.min.js"></script>
    <script src="/requirement/pages/Work12/Script-2.js"></script>
    <script src="/requirement/pages/Work12/js/index.js"></script>
    <script src="/requirement/pages/Work12/js/translate.js"></script>
    <script>
        function swapStyleSheet(sheet) {
            document.getElementById('pagestyle').setAttribute('href', sheet);
        }
    </script>
@endsection
