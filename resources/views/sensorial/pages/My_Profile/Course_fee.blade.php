@extends('sensorial.pages.parent')

@section('title', 'Course_fee')

@section('styles')
<link rel="stylesheet" href="/requirement/pages/Work6/css/bootstrap.min.css">
<link rel="stylesheet" href="/requirement/pages/Work6/css/all.min.css">
<link rel="stylesheet" href="/requirement/pages/Work6/css/style.css">
@endsection

@section('content')
<!-- section 1 -->
<section class="Check-out">
    <div class="container">
        <div class="row">
            <div class="box">
                <h1 class="h1" lng-tag="Check Out">Check Out</h1>
                <p class="p1" lng-tag="Semper vitae">Semper vitae et hendrerit lorem tortor, tristique ut eu ornare
                    pede
                    urna, sem nunc<br>
                    aliquet
                    tellus bibendum, iaculis aliquam curabitur vitae porttitor, ligula mi
                </p>
                <div class="div-all">
                    <form action="/action_page.php" class="form___1">
                        <p class="p2" lng-tag="Course fee payment methods">Course fee payment methods</p>
                        <div class="div--1">
                            <input type="radio" name="sample" class="input-1">
                            <label for="" class="label-1" lng-tag="Pay in full">Pay in full</label>
                            <div class="inline-div">
                                <input type="radio" name="sample" class="input-2" checked>
                                <label for="" class="label-1" lng-tag="Payment in installments">Payment in
                                    installments</label>
                            </div>
                        </div>
                        <p class="p2" lng-tag="Choose how many months you want to pay the course fee">Choose how
                            many
                            months you want to pay the course fee</p>
                        <div>
                            <select class="select__1" name="" id="" onfocus='this.size=6;' onblur='this.size=0;'
                                onchange='this.size=1; this.blur();'>
                                <option value="select" lng-tag="Select a duration">Select a duration</option>
                                <option value="" lng-tag="Less than 1 Month">Less than 1 Month</option>
                                <option value="" lng-tag="1 to 3 Month">1 to 3 Month</option>
                                <option value="" lng-tag="1 to 6 Month">1 to 6 Month</option>
                                <option value="" lng-tag="More than 6 Month">More than 6 Month</option>
                            </select>
                        </div>


                        <div class="row div--2">
                            <div class="col-lg-4 col-md-6">
                                <label for="" class="label-2" lng-tag="First Week">First Week</label>
                                <input type="text" class="input--3">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label for="" class="label-2" lng-tag="Date">Date</label>
                                <input type="date" class="input--3">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="Div">
                                    <label for="" class="label-2" lng-tag="Money Amount">Money Amount</label>
                                    <input type="number" class="input--4">
                                </div>
                            </div>
                        </div>
                        <div class="row div--2">
                            <div class="col-lg-4 col-md-6">
                                <label for="" class="label-2" lng-tag="Second Week">Second Week</label>
                                <input type="text" class="input--3">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label for="" class="label-2" lng-tag="Date">Date</label>
                                <input type="date" class="input--3">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="Div">
                                    <label for="" class="label-2" lng-tag="Money Amount">Money Amount</label>
                                    <input type="number" class="input--4">
                                </div>
                            </div>
                        </div>
                        <div class="div-btn">
                            <button class="btn"><i class="fa-sharp fa-solid fa-plus"></i lng-tag="Add More">Add
                                More</button>
                        </div>
                        <p class="p2" lng-tag="Choose the method by which you want to pay the installments">Choose
                            the
                            method by which you want to pay the installments</p>
                        <div class="div--3">
                            <input type="radio" name="pay" class="input-1">
                            <label for="" class="label-3" lng-tag="Pay inside Jordan">Pay inside Jordan</label>
                            <div class="inline-div-1">
                                <input type="radio" name="pay" class="input-2" checked>
                                <label for="" class="label-3" lng-tag="Pay outside Jordan">Pay outside
                                    Jordan</label>
                            </div>
                        </div>
                        <p class="p2" lng-tag="Pay Within">Pay Within</p>
                        <div class="div--4">
                            <input type="radio" name="bank" class="input-1" checked>
                            <label for="" class="label-4">western Union </label>
                            <div class="inline-div-2">
                                <input type="radio" name="bank" class="input-2">
                                <label for="" class="label-4">bank deposit</label>
                            </div>
                        </div>
                        <div class="div-btn-1">
                            <input type="submit" value="Continue" class="btn-1">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="/requirement/pages/Work6/js/bootstrap.bundle.min.js"></script>
<script src="/requirement/pages/Work6/js/all.min.js"></script>
<script src="/requirement/pages/Work6/Script-2.js"></script>
<script src="/requirement/pages/Work6/js/index.js"></script>
<script src="/requirement/pages/Work6/js/translate.js"></script>
<script>
function swapStyleSheet(sheet) {
    document.getElementById('pagestyle').setAttribute('href', sheet);
}

</script>
@endsection
