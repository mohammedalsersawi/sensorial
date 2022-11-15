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
            <p class="p-1" lng-tag="3 Courses in Cart">{{ $count }} Courses in Cart</p>
            <div class="row">
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('fail'))
                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @endif
                <div class="col-lg-8 col-md-12">
                    @foreach ($cart as $course)
                        <div class="box" id="box">
                            <img src="{{ asset('requirement/uploads/course_photo/' . $course->course->course_photo) }}"
                                alt="" class="img-fluid">
                            <div class="content-1">
                                <p class="p" lng-tag="Motion">{{ $course->course->course_name }}
                                </p>
                                <p class="p-1" lng-tag="Dorothy P" style="text-transform: capitalize">by
                                    {{ $course->instructor->name }}
                                    <span class="star"><i class="fa-solid fa-star star"></i>5.0</span><span
                                        class="span-1">(+100k)</span>
                                </p>
                            </div>
                            <div class="content-2">
                                <a href="{{ route('removeItem', $course->id) }}">Remove</a>
                            </div>
                            <div class="content-3">
                                <span>${{ $course->price }}</span><br>
                                <del>$84.99</del>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-4">
                    <div class="box-1">
                        <p class="total" lng-tag="Total">Total:</p>
                        <span class="span-2">$39.98</span><br>
                        <del>$169.98</del>
                        <form action="">
                            <input type="submit" name="" id="" value="Check out"
                                class="form-control input-1">
                        </form>
                        <p class="Promotions" lng-tag="Promotions">Promotions</p>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control input-2" placeholder="Enter Coupon"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary apply" type="button" id="button-addon2"
                                lng-tag="Apply">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 1 -->

    <!-- section 5 -->
    <section class="section-5 section-2-private">
        <div class="container position-relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="23.905" height="21.105" viewBox="0 0 23.905 21.105">
                <defs>
                    <symbol id="heart" viewBox="0 0 23.905 21.105">
                        <path class="heart-box" data-name="Icon feather-heart"
                            d="M22.539,6.186a5.764,5.764,0,0,0-8.153,0L13.275,7.3,12.164,6.186a5.765,5.765,0,1,0-8.153,8.153L5.122,15.45,13.275,23.6l8.153-8.153,1.111-1.111a5.764,5.764,0,0,0,0-8.153Z"
                            transform="translate(-1.323 -3.497)" fill="none" stroke="#9f007e" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="1" />

                    </symbol>

                    <symbol id="heart-fill" viewBox="0 0 23.905 21.105">
                        <path
                            d="M22.539,6.186a5.764,5.764,0,0,0-8.153,0L13.275,7.3,12.164,6.186a5.765,5.765,0,1,0-8.153,8.153L5.122,15.45,13.275,23.6l8.153-8.153,1.111-1.111a5.764,5.764,0,0,0,0-8.153Z"
                            fill="#9f007e" stroke="#9f007e" transform="translate(-1.323 -3.497)" fill="none"
                            stroke="#9f007e" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                    </symbol>

                </defs>
            </svg>

            <p class="p-26" lng-tag="You might also like">You might also like</p>

            <div class="row mt-5 multiple-items" dir="ltr">
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-1.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">

                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-2.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">
                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-3.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">
                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-3.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">
                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-3.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">
                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="image text-center">
                            <img src="img/baby-3.png" alt="" class="img-fluid width">
                        </div>
                        <div class="content">
                            <p class="fw-bold" lng-tag="Motion">Motion Design with Figma:<br> Animations, Motion
                                Graphics, UX/UI</p>
                            <p class="p1" lng-tag="Dorothy">by Dorothy Parks</p>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>

                            <span class="num"><span class="number">5.0s</span>(+100k)</span>

                            <div class="end-box position-relative">
                                <div class="heart-boxx">
                                    <div id="icon">
                                        <svg width="30" height="30" fill="currentColor">
                                            <use href="#heart">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <i class="fa-solid fa-bars bar"></i>
                                <div class="end">
                                    <del>$84.99</del>
                                    <span>$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 5 -->

@endsection

@section('scripts')

    <script src="{{ asset('requirement/pages/js/Script-2.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/index.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/script-3.js') }}"></script>

@endsection
