@extends('sensorial.dashboard.admins.admin-parent')

@section('title', 'View Student')

@section('styles')

    <!-- Tagsinput CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

@endsection

@section('big-title', 'View Student')

@section('small-title')

    <a href="{{ route('student.index') }}">Students</a>

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
                                        src="{{ asset('requirement/uploads/photo/' . $student->user->photo) }}"></a>
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 mb-0" style="text-transform: capitalize">
                                            {{ $student->user->name_en }}</h3>
                                        <h6 class="text-muted">Student</h6>
                                        <br>
                                        <div class="staff-id">Employee ID : {{ $student->user->id }}</div>
                                        <div class="small doj text-muted">Date of Join :
                                            {{ $student->created_at->isoFormat('LLLL') }}</div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Phone:</div>
                                            <div class="text"><a href="#">{{ $student->user->phone_number }}</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="title">Email:</div>
                                            <div class="text"><a href="#">{{ $student->user->email }}</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Address:</div>
                                            <div class="text">{{ $student->user->address }}</div>
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
                    <li class="nav-item"><a href="#courses" data-toggle="tab" class="nav-link">Courses</a></li>
                    <li class="nav-item"><a href="#details" data-toggle="tab" class="nav-link">Details</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="tab-content">

        <!-- Profile Info Tab -->
        <div id="profile" class="pro-overview tab-pane fade show active">
            <div class="row">
                <div class="col-md-12 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Personal Informations <a href="#" class="edit-icon"
                                    data-toggle="modal" data-target="#personal_info_modal"><i class="fa fa-pencil"></i></a>
                            </h3>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Student Name</div>
                                    <div class="text" style="text-transform: capitalize;">{{ $student->user->name_en }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">Phone</div>
                                    <div class="text">{{ $student->user->phone_number }}</div>
                                </li>
                                <li>
                                    <div class="title">E-mail</div>
                                    <div class="text">{{ $student->user->email }}</div>
                                </li>
                                <li>
                                    <div class="title">Address</div>
                                    <div class="text">{{ $student->user->address }}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Profile Info Tab -->

        <!-- Courses Tab -->
        <div class="tab-pane fade" id="courses">
            <div class="row staff-grid-row">

                @foreach ($courses as $course)
                    <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                        <div class="profile-widget">
                            <div class="profile-img">
                                <a href="{{ route('course.show', $course->id) }}" class="avatar"><img
                                        src="{{ asset('requirement/uploads/course_photo/' . $course->course_photo) }}"
                                        alt=""></a>
                            </div>
                            <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a
                                    href="profile.html">{{ $course->course_name }}</a></h4>
                            <div class="small text-muted"></div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <!-- /Courses Tab -->

        <!-- Bank Statutory Tab -->
        <div class="tab-pane fade" id="details">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"> Basic Salary Information</h3>
                    <form>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Salary basis <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select salary basis type</option>
                                        <option>Hourly</option>
                                        <option>Daily</option>
                                        <option>Weekly</option>
                                        <option>Monthly</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Salary amount <small class="text-muted">per
                                            month</small></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Type your salary amount"
                                            value="0.00">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Payment type</label>
                                    <select class="select">
                                        <option>Select payment type</option>
                                        <option>Bank transfer</option>
                                        <option>Check</option>
                                        <option>Cash</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Bank Statutory Tab -->

    </div>
    </div>
    <!-- /Page Content -->

    <!-- Personal Info Modal -->
    <div id="personal_info_modal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Personal Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap edit-img">
                                    <img class="inline-block"
                                        src="{{ asset('requirement/uploads/photo/' . $student->user->photo) }}"
                                        alt="user">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="photo" id="photo" class="upload" type="file">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Student Name</label>
                                            <input type="text" class="form-control" name="name_en" id="name_en"
                                                value="{{ $student->user->name_en }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Student Name</label>
                                            <input type="text" class="form-control" name="name_ar" id="name_ar"
                                                value="{{ $student->user->name_ar }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                value="{{ $student->user->email }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        value="{{ $student->user->address }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State Code</label>
                                    <select name="code" id="code" value="{{ $student->user->code }}"
                                        class="select form-control">
                                        <option value="us">US</option>
                                        <option value="uk">UK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone_number" id="phone_number" class="form-control"
                                        value="{{ $student->user->phone_number }}">
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button type="button" onclick="update({{ $student->user->id }})"
                                class="btn btn-primary submit-btn">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Personal Info Modal -->
@endsection

@section('scripts')

    <script>
        function update(id) {
            const formData = new FormData();
            formData.append('_method', 'PUT');
            formData.append('name_en', document.getElementById('name_en').value);
            formData.append('name_ar', document.getElementById('name_ar').value);
            formData.append('email', document.getElementById('email').value);
            formData.append('code', document.getElementById('code').value);
            formData.append('phone_number', document.getElementById('phone_number').value);
            formData.append('address', document.getElementById('address').value);
            formData.append('photo', document.getElementById('photo').files[0]);

            axios.post('/sensorial/dashboard/customer/' + id, formData)
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

    <!-- Tagsinput JS -->
    <script src="{{ asset('requirement/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>

@endsection
