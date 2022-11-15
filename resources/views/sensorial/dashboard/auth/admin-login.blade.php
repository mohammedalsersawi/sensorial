@extends('sensorial.dashboard.auth.parent')

@section('title', 'Admin Login')

@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/assets/plugins/toastr/toastr.min.css') }}">

@endsection

@section('content')

    <div class="main-wrapper">
        <div class="account-content">
            <div class="container">

                <!-- Account Logo -->
                <div class="account-logo">
                    <a href="index.html"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
                </div>
                <!-- /Account Logo -->

                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Admin Login</h3>
                        <p class="account-subtitle">Welcome Instructor Login to access your dashboard</p>
                        <!-- Account Form -->
                        <form>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Email</label>
                                    </div>
                                </div>
                                <input name="email" class="form-control" id="email" type="email">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Password</label>
                                    </div>
                                </div>
                                <input name="password" class="form-control" id="password" type="password">
                            </div>
                            <div class="form-group text-center">
                                <button type="button" onclick="login()" class="btn btn-primary btn-block"> Sign In
                                </button>
                            </div>
                            <p style="text-transform:capitalize">if you you're instructor <a
                                    href="{{ route('instructor_login') }}">click here</a> to login as instructor</p>

                                    <p style="text-transform:capitalize">if you you're user <a
                                        href="{{ route('login') }}">click here</a> to login as user</p>
                            </form>

                        <!-- /Account Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('requirement/assets/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('requirement/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        function login() {
            axios.post('/sensorial/dashboard/ad/login', {
                    email: document.getElementById('email').value,
                    password: document.getElementById('password').value,
                })
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    window.location.href = "/sensorial/dashboard"; // الانتقال الي الراوت المكتوب عند اضافة عنصر
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                    toastr.error(error.response.data.message);
                })
                .then(function() {
                    // always executed
                });
        }
    </script>
@endsection
