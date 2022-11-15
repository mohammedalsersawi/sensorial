@extends('sensorial.pages.parent')

@section('title', 'bank')

@section('styles')
    <link rel="stylesheet" href="/requirement/pages/Work4/css/bootstrap.min.css">
    <link rel="stylesheet" href="/requirement/pages/Work4/css/all.min.css">
    <link rel="stylesheet" href="/requirement/pages/Work4/css/style.css">
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
                        <p class="p2" lng-tag="Bank Name">Bank Name</p>
                        <input type="text" class="input-2" placeholder="Bank Name" data-translate="Bank Name">
                        <p class="p2" lng-tag="Account Owner Name">Account Owner Name</p>
                        <input type="text" class="input-2" placeholder="Account Owner Name" lng-tag="Account Owner Name">
                        <p class="p2" lng-tag="Account Number">Account Number</p>
                        <input type="text" class="input-2" placeholder="Account Number" lng-tag="Account Number">
                        <p class="p2" lng-tag="IBAN Number">IBAN Number</p>
                        <input type="text" class="input-2" placeholder="IBAN Number" lng-tag="IBAN Number">
                        <label class="p2" lng-tag="transfer picture Drive link">transfer picture Drive link</label>
                        <input type="file" class="file-input">
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
    <script src="/requirement/pages/Work4/js/bootstrap.bundle.min.js"></script>
    <script src="/requirement/pages/Work4/js/all.min.js"></script>
    <script src="/requirement/pages/Work4/Script-2.js"></script>
    <script src="/requirement/pages/Work4/js/index.js"></script>
    <script src="/requirement/pages/Work4/js/translate.js"></script>
    <script>
        function swapStyleSheet(sheet) {
            document.getElementById('pagestyle').setAttribute('href', sheet);
        }

    @endsection
