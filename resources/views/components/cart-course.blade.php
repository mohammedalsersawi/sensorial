<span class="basket position-relative">
    <div class="basket-1">
        <a href="{{ route('viewCart') }}">
            <svg class="baskets" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40"
                viewBox="0 0 40 40">
                <defs>
                    <clipPath id="clip-path">
                        <rect id="Rectangle_4" data-name="Rectangle 4" width="40"
                            height="40" transform="translate(1521 -0.473)"
                            fill="none" stroke="#707070" stroke-width="1" />
                    </clipPath>
                </defs>
                <g id="Mask_Group_2" data-name="Mask Group 2"
                    transform="translate(-1521 0.473)" clip-path="url(#clip-path)">
                    <g id="Xnix_Line_shopping-bag_3" data-name="Xnix/Line/shopping-bag_3"
                        transform="translate(1521 6.48)">
                        <rect id="Rectangle_8" data-name="Rectangle 8" width="39.789"
                            height="30.545" transform="translate(0 4.727)"
                            fill="none" />
                        <g id="Vector" transform="translate(6.575)">
                            <path id="basket"
                                d="M28.432,14.285l-2.021,7.143c-1.682,5.2-3.061,6.693-6.064,7.046a17.421,17.421,0,0,1-2.021.1H10.245a17.422,17.422,0,0,1-2.021-.1c-2.992-.357-4.382-1.845-6.064-7.046L.14,14.285C-.866,8.953,3.718,7.159,8.163,7.143V5.58C8.094,2.56,10.834.062,14.286,0c3.452.062,6.192,2.56,6.123,5.58V7.143C24.854,7.159,29.436,8.951,28.432,14.285Z"
                                transform="translate(0)" fill="none" stroke="#222121"
                                stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" fill-rule="evenodd" />
                            <path id="basket"
                                d="M30.279,20.333H20.332m9.947,2.545v1.273m-9.947-1.273v1.273"
                                transform="translate(-11.02 -12.717)" fill="none"
                                stroke="#222121" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2"
                                fill-rule="evenodd" />
                        </g>
                    </g>
                </g>
            </svg>
            <span class="position-absolute three">{{ $count }}</span>
        </a>
        <div class="box-1">
            @foreach ($cart as $course)
            <div>
                <img src="{{ asset('requirement/uploads/course_photo/' . $course->course->course_photo) }}"
                    alt="" class="img-fluid img-3">
                <div class="content-1">
                    <p class="pp" lng-tag="Motion">
                        {{ $course->course->course_name }} Course</p>
                    <p class="pp-1" lng-tag="Dorothy"
                        style="text-transform:capitalize">by
                        {{ $course->instructor->name }}</p>
                    <p class="pp-2" style="color: #9f007e">${{ $course->price }}
                    </p>
                </div>
            </div>
            <hr>
        @endforeach


            <hr>
            {{-- <p class="pp-4" lng-tag="Total">Total:</p>
            <span class="pp-5">$39.98</span>
            <del class="pp-3">$169.98</del> --}}
            <br><br>
            <a href=""><button type="button" class="btn btn-danger button-1"
                    lng-tag="cart">Go to
                    cart</button></a>
            <a href=""><button type="button" class="btn btn-danger button-2"
                    lng-tag="Checkout">Checkout</button></a>

        </div>
    </div>
</span>
