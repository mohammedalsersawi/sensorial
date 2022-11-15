@extends('sensorial.auth.parent')

@section('title', 'Sign-Up')

@section('styles')
    <link rel="stylesheet" href="{{ asset('requirement/sign-up/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('requirement/sign-up/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('requirement/sign-up/css/sign-up.css') }}">
@endsection

@section('content')
    <section class="login-1">
        <div class="box">
            <h1 class="h1-1">Create your Account!</h1>
            <p class="p1">Semper vitae et hendrerit lorem tortor, tristique ut eu ornare pede urna, sem
                nunc<br>aliquet
                tellus bibendum,iaculis aliquam curabitur vitae porttitor, ligula mi</p>
            <form action="{{ route('sign-up.store') }}" method="post" class="form-1" enctype="multipart/form-data">

                @csrf

                <p class="p2">Full Name in English </p>
                <input type="text" name="name_en" class="input-2" placeholder="Enter your name">
                <span style="color: red">
                    @error('name_en')
                        {{ $message }}
                    @enderror
                </span>

                <br>

                <p class="p2">Full Name in Arabic </p>
                <input type="text" name="name_ar" class="input-2" placeholder="Enter your name">
                <span style="color: red">
                    @error('name_ar')
                        {{ $message }}
                    @enderror
                </span>

                <br>

                <p class="p2">E-mail Address</p>
                <input type="email" name="email" class="input-2" placeholder="Enter your email address">
                <span style="color: red">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>

                <br>

                <p class="p2">Phone Number</p>

                <div class="select">
                    <select name="code" id="" class="country">
                        <option value="select country"></option>
                        <option value="us">US</option>
                        <option value="uk">UK</option>
                    </select>
                    <input type="tel" name="phone_number" class="input-2 input-private" id="output"
                        placeholder="Enter Phone Number">
                </div>

                <span style="color: red">
                    @error('phone_number')
                        {{ $message }}
                    @enderror
                </span>

                <br>

                <p class="p2">Password</p>
                <input type="password" name="password" class="input-2" placeholder="Password">
                <span style="color: red">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>

                <br>

                <p class="p2">Address</p>
                <input type="text" name="address" class="input-2" placeholder="Please Enter your Address in Detail">
                <span style="color: red">
                    @error('address')
                        {{ $message }}
                    @enderror
                </span>

                <br>

                <p class="p2">ID photo</p>
                <input type="file" name="id_photo" class="file">
                <span style="color: red">
                    @error('id_photo')
                        {{ $message }}
                    @enderror
                </span>

                <br>

                <p class="p2">Your Photo</p>
                <input type="file" name="photo" class="file">
                <span style="color: red">
                    @error('photo')
                        {{ $message }}
                    @enderror
                </span>

                <br>

                <div class="div-1">
                    <input type="checkbox" class="input-3">
                    <span class="span-1">I agree to our <a href="">Terms of Use</a> and <a href="">Privacy
                            Policy</a></span>

                </div>
                <input type="submit" class="input-4" value="Sign up">

                <p class="p4">Already have an account?</p>
                <a href="{{ route('login') }}" class="log-in">Log in</a>
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    {{-- <script>
        function country_code() {
            let val = document.querySelector(".country").value;
            if (val === "select country") {
                document.querySelector("#output").value = "";
            } else if (val === "us") {
                document.querySelector("#output").value = "+1";
            } else if (val === "uk") {
                document.querySelector("#output").value = "+55";
            }
        }
    </script> --}}
@endsection
