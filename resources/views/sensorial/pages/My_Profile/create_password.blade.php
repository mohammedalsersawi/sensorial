@extends('sensorial.pages.parent')

@section('title', 'create_password')

@section('styles')
    <link rel="stylesheet" href="/requirement/pages/Work3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/requirement/pages/Work3/css/all.min.css">
    <link rel="stylesheet" href="/requirement/pages/Work3/css/style.css">
@endsection

@section('content')
    <!-- section 1 -->
    <section class="login-1">
        <div class="container">
            <div class="row">


                <div class="box">
                    <h1 class="h1" lng-tag="Create New Password">Create New Password</h1>
                    <div>
                        <p class="p1" lng-tag="Enter your">Enter your email address you’re using for your account below
                            and we
                            will send
                            you a
                            password reset link </p>
                    </div>
                    <form action="" class="form-1">
                        <p class="p2" lng-tag="New Password">New Password</p>
                        <input type="text" class="input-1" placeholder="New Password ">
                        <p class="p2" lng-tag="Confirm New Password">Confirm New Password</p>
                        <input type="text" class="input-1" placeholder="Confirm New Password ">
                        <input type="submit" class="input-2" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="/requirement/pages/Work3/js/bootstrap.bundle.min.js"></script>
    <script src="/requirement/pages/Work3/js/all.min.js"></script>
    <script src="/requirement/pages/Work3/js/index.js"></script>
    <script src="/requirement/pages/Work3/js/translate.js"></script>
    <script>
        function swapStyleSheet(sheet) {
            document.getElementById('pagestyle').setAttribute('href', sheet);
        }
    </script>
@endsection
