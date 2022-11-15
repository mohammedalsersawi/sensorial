@extends('sensorial.dashboard.admins.admin-parent')

@section('title', 'View Admin')

@section('styles')

    <!-- Tagsinput CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

@endsection

@section('big-title', 'View Admin')

@section('small-title')

    <a href="{{ route('admin.index') }}">Admin</a>

@endsection

@section('content')
    <!-- Page Content -->
    <div class="card mb-0">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="#"><img alt=""
                                        src="{{ asset('requirement/uploads/photo/' . $admin->photo) }}"></a>
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 mb-0" style="text-transform: capitalize">
                                            {{ $admin->name }}</h3>
                                        <h6 class="text-muted">admin</h6>
                                        <br>
                                        <div class="staff-id">admin ID : {{ $admin->id }}</div>
                                        <div class="small doj text-muted">Date of Join : {{ $admin->created_at }}</div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Phone:</div>
                                            <div class="text"><a href="#">{{ $admin->phone_number }}</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Email:</div>
                                            <div class="text"><a href="#">{{ $admin->email }}</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Address:</div>
                                            <div class="text">{{ $admin->address }}</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card tab-box">
        <div class="row user-tabs">
            <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                <ul class="nav nav-tabs nav-tabs-bottom">
                    <li class="nav-item"><a href="#profile" data-toggle="tab" class="nav-link active">Profile
                            Information</a></li>
                    {{-- <li class="nav-item"><a href="#courses" data-toggle="tab" class="nav-link">Courses</a></li>
                    <li class="nav-item"><a href="#students" data-toggle="tab" class="nav-link">Students</a></li> --}}
                </ul>
            </div>
        </div>
    </div>

    <div class="tab-content">
    </div>
    </div>

    <!-- /Page Content -->
@endsection

@section('scripts')

    <script>
        function update(id) {
            const formData = new FormData();
            formData.append('_method', 'PUT');
            formData.append('name_en', document.getElementById('name_en').value);
            formData.append('password', document.getElementById('password').value);
            formData.append('email', document.getElementById('email').value);
            formData.append('age', document.getElementById('age').value);
            formData.append('gender', document.getElementById('gender').value);
            formData.append('code', document.getElementById('code').value);
            formData.append('phone_number', document.getElementById('phone_number').value);
            formData.append('address', document.getElementById('address').value);
            formData.append('photo', document.getElementById('photo').files[0]);
            formData.append('univ', document.getElementById('univ').value);
            formData.append('detail', document.getElementById('detail').value);

            axios.post('/sensorial/dashboard/instructor/' + id, formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    // window.location.href =
                    //     "/sensorial/dashboard/instructor"; // الانتقال الي الراوت المكتوب عند اضافة عنصر
                    window.location.reload();
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

    <script>
        $(document).on('click', '.editInstructor', function() {
            var _this = $(this).parents('.instructor');
            var row_id = _this.find('#inst_id').text();
            console.log(row_id);
            var first = '<button type="button" onclick="update(';
            var second = ')" class="btn btn-primary">Update</button>';
            var last = first + row_id + second;
            $(document).find('#update_id').html(last);
            $('#instructor_id').val(_this.find('.inst_id').text());
            $('#name_en').val(_this.find('.inst_name').text());
            $('#email').val(_this.find('.inst_email').text());
            $('#age').val(_this.find('.inst_age').text());
            $('#gender').val(_this.find('.inst_gender').text());
            $('#address').val(_this.find('.inst_address').text());
            $('#code').val(_this.find('.inst_code').text());
            $('#phone_number').val(_this.find('.inst_phone').text());
            $('#detail').val(_this.find('.inst_detail').text());
            $('#photo').val(_this.find('.inst_photo').files[0]);
            $('#univ').val(_this.find('.inst_university').text());
        });
    </script>

    <!-- Tagsinput JS -->
    <script src="{{ asset('requirement/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>

@endsection
