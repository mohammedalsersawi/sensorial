@extends('sensorial.pages.parent')

@section('title', 'Cart')

@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/pages/css/shopping-cart.css') }}">

@endsection


@section('content')

    <!-- section 1 -->
    <section class="section-1 pt-5 pb-5">
        <div class="container">
            <h5 class="h5" lng-tag="Shopping Cart">Shopping Cart</h5>
            <p class="p-1" lng-tag="3 Courses in Cart">Courses in Cart</p>
            <div class="row">

                <div class="col-lg-8 col-md-12">
                        <div class="" id="box">
                            <script src="https://eu-test.oppwa.com/v1/paymentWidgets.js?checkoutId={{ $checkoutId }}"></script>
                        <form action="{{ route('site.thanks') }}" class="paymentWidgets" data-brands="VISA MASTER AMEX"></form>

                        </div>
                </div>

                <div class="col-lg-4">
                    <div class="box-1">
                        <p class="total" lng-tag="Total">Total:</p>
                        <span class="span-2">{{ $totel }}$</span><br>
                        {{-- <del>${{ $totel }}</del> --}}

                        {{-- <p class="Promotions" lng-tag="Promotions">Promotions</p>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control input-2" placeholder="Enter Coupon"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary apply" type="button" id="button-addon2"
                                lng-tag="Apply">Apply</button>
                        </div> --}}
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

@endsection
