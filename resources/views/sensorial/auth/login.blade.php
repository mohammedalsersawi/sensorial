@extends('sensorial.auth.parent')

@section('title', 'Login')

@section('styles')
    <link rel="stylesheet" href="{{ asset('requirement/login/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('requirement/login/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('requirement/login/css/login.css') }}">
@endsection

@section('content')

    <div class="box">
        <div class="content">
            <h1 class="h1-1">Welcome!</h1>
            <p class="p1">Semper vitae et hendrerit lorem tortor, tristique ut eu ornare pede urna, sem nunc<br>aliquet
                tellus bibendum,iaculis aliquam curabitur vitae porttitor, ligula mi</p>

            <div class="a position-relative">

                <a href="" class="input-1 form-control">
                    <img src="{{ asset('requirement/icon/google-svgrepo-com.svg') }}" alt="" class="img-1">
                    Login with Google
                </a>

            </div>

            <div class="a position-relative">

                <a href="" class="input-1 form-control">
                    <img src="{{ asset('requirement/icon/facebook-svgrepo-com.svg') }}" alt="" class="img-1">
                    Login with Facebook
                </a>

            </div>

            <div class="a position-relative">

                <a href="" class="input-1 form-control">
                    <img src="{{ asset('requirement/icon/apple-svgrepo-com.svg') }}" alt="" class="img-1">
                    Login with Apple
                </a>

            </div>

            <p class="p2">or</p>


            {{-- @if ($errors->any())
      <span class="text-danger">
        <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </div>
      </span>
      @endif --}}
            <form action="{{ route('login') }}" method="post" class="form-1">
                @method('post')
                @csrf
                @if (Session::has('fail'))
                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @endif

                <p class="p3">Email</p>
                <input type="email" name="email" value="{{ old('email') }}" class="input-2"
                    placeholder="Enter your email">
                <span style="color: red">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>

                {{-- <br> --}}

                <p class="p3">Password</p>
                <input type="password" name="password" class="input-2" placeholder="Password">
                <span style="color: red">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>

                <br>

                <div class="div-1">
                    <input type="checkbox" class="input-3">
                    <span class="span-1">Remmember me</span>
                    <a href="{{ route('forgot-password.view') }}" class="span-2">Forgot password?</a>
                </div>

                <input type="submit" class="input-4" value="Log in">
                <a href="{{ route('instructor_login') }}" class="btn btn-outline-dark">Login As Instructor</a>
                <a href="{{ route('admin_login') }}" class="btn btn-dark">Login As Admin </a>

                <p class="p4">Don’t have an account?</p>
                <a href="{{ route('sign-up') }}" class="sign-up">Sign up</a>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('requirement/login/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('requirement/login/js/all.min.js') }}"></script>
@endsection
