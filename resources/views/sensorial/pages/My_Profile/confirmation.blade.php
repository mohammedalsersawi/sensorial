@extends('sensorial.pages.parent')

@section('title', 'confirmation')

@section('styles')
<link rel="stylesheet" href="/requirement/pages/Work5/css/bootstrap.min.css">
<link rel="stylesheet" href="/requirement/pages/Work5/css/all.min.css">
<link rel="stylesheet" href="/requirement/pages/Work5/css/style.css">
@endsection

@section('content')
<!-- section 1 -->
<section class="Check-out">
    <div class="container">
        <div class="row">
            <div class="box pt-5">
                <div class="content-1">
                    <div class="content">
                        <span class="s-1">1</span>
                        <p class="p-7" lng-tag="CUSTOMER DETAILS">CUSTOMER DETAILS</p>
                    </div>
                    <div class="content">
                        <span class="s-1">2</span>
                        <p class="p-7" lng-tag="PAYMENT METHOD">PAYMENT METHODCUSTOMER DETAILS</p>
                    </div>
                    <div class="content">
                        <span class="s-1">3</span>
                        <p class="p-7" lng-tag="CONFIRMATION">CONFIRMATION</p>
                    </div>
                </div>

                <div class="div-img">
                    <img src="/requirement/pages/Work5/img/Group 291.png" alt="" class="img-fluid">
                </div>
                <h1 class="h1" lng-tag="operation accomplished successfully">operation accomplished successfully
                </h1>
                <p class="p-1" lng-tag="You have successfully">You have successfully participated in the course
                    and<br> will
                    be included in my
                    learning
                    list
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="/requirement/pages/Work5/js/bootstrap.bundle.min.js"></script>
<script src="/requirement/pages/Work5/js/all.min.js"></script>
<script src="/requirement/pages/Work5/Script-2.js"></script>
<script src="/requirement/pages/Work5/js/index.js"></script>
<script src="/requirement/pages/Work5/js/translate.js"></script>
<script>
function swapStyleSheet(sheet) {
    document.getElementById('pagestyle').setAttribute('href', sheet);
}

</script>
@endsection
