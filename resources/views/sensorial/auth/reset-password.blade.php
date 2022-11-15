@extends('sensorial.auth.parent')

@section('styles')
    <link rel="stylesheet" href="{{ asset('requirement/reset-password/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('requirement/reset-password/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('requirement/reset-password/css/Create-Password.css') }}">
@endsection


@section('content')
    <section class="login-1">
        <div class="box">
            <h1 class="h1">Create New Password</h1>
            <div>
                <p class="p1">Enter your email address you’re using for your account below and we will send you a
                    password reset link </p>
            </div>
            <form action="" method="post" class="form-1">
                <input type="hidden" value="{{ $token }}" name="" id="">

                <p class="p2">New Password </p>
                <input type="password" class="input-1" placeholder="New Password ">
                <span class="text-danger"> @error('password')
                        {{ $message }}
                    @enderror </span>

                <p class="p2">Confirm New Password </p>
                <input type="password" class="input-1" placeholder="Confirm New Password ">
                <span class="text-danger"> @error('password_confirm')
                        {{ $message }}
                    @enderror </span>

                <input typ e="submit" class="input-2" value="Save">
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('require    ment/reset-password/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('requirement/reset-password/js/all.min.js') }}"></script>
@endsection
