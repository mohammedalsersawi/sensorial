@extends('sensorial.auth.parent')

@section('styles')
    <link rel="stylesheet" href="{{ asset('requirement/forgot-password/css/forgot- password.css') }}">
    <link rel="stylesheet" href="{{ asset('requirement/forgot-password/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('requirement/forgot-password/css/all.min.css') }}">
@endsection

@section('content')
    <section class="login-1">
        <div class="box">
            <h1 class="h1">Did you forgot your password?</h1>
            <div>
                <p class="p1">Enter your email address you’re using for your account below and we will send you a
                    password reset link </p>
            </div>
            <form action="{{ route('forgot-password.link') }}" class="form-1" method="POST">

                @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @csrf

                <p class="p2">Email Address</p>

                <input type="email" value="{{ old('email') }}" name="email" class="input-1"
                    placeholder="Enter your email">
                <span class="text-danger"> @error('email')
                        {{ $message }}
                    @enderror </span>
                <input type="submit" class="input-2" value="Request Reset Link">

                <a href="{{ route('login') }}" class="back-to">Back to Sign In</a>
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('requirement/forgot-password/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('requirement/forgot-password/js/all.min.js') }}"></script>
@endsection
