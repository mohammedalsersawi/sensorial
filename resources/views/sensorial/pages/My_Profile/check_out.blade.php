@extends('sensorial.pages.parent')

@section('title', 'check_out')

@section('styles')
<link rel="stylesheet" href="/requirement/pages/Work8/css/bootstrap.min.css">
<link rel="stylesheet" href="/requirement/pages/Work8/css/all.min.css">
<link rel="stylesheet" href="/requirement/pages/Work8/css/style.css">
@endsection

@section('content')
    <!-- section 1 -->
    <section class="Check-out">
        <div class="container">
            <div class="row">
                <div class="box">
                    <h1 class="h1-1" lng-tag="Check Out">Check Out</h1>
                    <p class="p1" lng-tag="Semper vitae">Semper vitae et hendrerit lorem tortor, tristique ut eu ornare
                        pede
                        urna, sem
                        nunc<br>aliquet
                        tellus bibendum,iaculis aliquam curabitur vitae porttitor, ligula mi</p>
                    <form action="" class="form-1">
                        <p class="p2" lng-tag="Choose Address">Choose Address</p>
                        <div class="img-div">
                            <img src="/requirement/pages/Work12/img/Icon metro-my-location.svg" alt="" class="image">
                            <input type="text" class="input-2" placeholder="Choose Address">
                        </div>
                        <p class="p2" lng-tag="Choose Date">Choose Date</p>
                        <input type="date" class="input-2" placeholder="Choose Date">
                        <input type="submit" class="input-4" value="Confirm">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="/requirement/pages/Work8/js/bootstrap.bundle.min.js"></script>
<script src="/requirement/pages/Work8/js/all.min.js"></script>
<script src="/requirement/pages/Work8/Script-2.js"></script>
<script src="/requirement/pages/Work8/js/index.js"></script>
<script src="/requirement/pages/Work8/js/translate.js"></script>
<script>
function swapStyleSheet(sheet) {
    document.getElementById('pagestyle').setAttribute('href', sheet);
}

</script>
@endsection
