@extends('sensorial.dashboard.admins.admin-parent')

@section('title', 'View Instructor')

@section('styles')

    <!-- Tagsinput CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

@endsection

@section('big-title', 'View Instructor')

@section('small-title')

    <a href="{{ route('instructor.index') }}">Instructors</a>

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
                                        src="{{ asset('requirement/uploads/instructors/' . $instructor->photo) }}"></a>
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 mb-0" style="text-transform: capitalize">
                                            {{ $instructor->name }}</h3>
                                        <h6 class="text-muted">Instructor</h6>
                                        <br>
                                        <div class="staff-id">Instructor ID : {{ $instructor->id }}</div>
                                        <div class="small doj text-muted">Date of Join : {{ $instructor->created_at }}</div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Phone:</div>
                                            <div class="text"><a href="#">{{ $instructor->phone_number }}</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Email:</div>
                                            <div class="text"><a href="#">{{ $instructor->email }}</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Address:</div>
                                            <div class="text">{{ $instructor->address }}</div>
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
                    <li class="nav-item"><a href="#students" data-toggle="tab" class="nav-link">Students</a></li>
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
                        <div class="card-body instructor">
                            <h3 class="card-title">Instructor Informations <a href="#"
                                    class="edit-icon editInstructor" data-toggle="modal" data-target="#editInstructor"><i
                                        class="fa fa-pencil"></i></a>
                            </h3>
                            <ul class="personal-info">
                                <li hidden id="inst_id">
                                    {{ $instructor->id }}
                                </li>
                                <li>
                                    <div class="title">Name</div>
                                    <div class="text" style="text-transform: capitalize;">
                                        <span class="text inst_name">{{ $instructor->name }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">Code</div>
                                    <div class="text" style="text-transform: capitalize;">
                                        <span class="text inst_code">{{ $instructor->code }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">Phone</div>
                                    <div class="text inst_phone">{{ $instructor->phone_number }}</div>
                                </li>
                                <li>
                                    <div class="title">E-mail</div>
                                    <div class="text inst_email">{{ $instructor->email }}</div>
                                </li>
                                <li>
                                    <div class="title">Gender</div>
                                    <div class="text inst_gender">{{ $instructor->gender }}</div>
                                </li>
                                <li>
                                    <div class="title">Age</div>
                                    <div class="text inst_age">{{ $instructor->age }}</div>
                                </li>
                                <li>
                                    <div class="title">Address</div>
                                    <div class="text inst_address">{{ $instructor->address }}</div>
                                </li>
                                <li>
                                    <div class="title">Salary</div>
                                    <div class="text">$<span class="inst_salary">{{ $instructor->salary->salary }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">University</div>
                                    @if ($instructor->university)
                                        <div class="text inst_university">{{ $instructor->university }}</div>
                                    @else
                                        <div class="text">None</div>
                                    @endif

                                </li>
                                <li>
                                    <div class="title">Detail</div>
                                    <div class="text inst_detail">{{ $instructor->details }}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Personal Info Modal -->
            <div id="editInstructor" class="modal custom-modal fade" role="dialog">
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
                                                src="{{ asset('requirement/uploads/instructors/' . $instructor->photo) }}"
                                                alt="user">
                                            <div class="fileupload btn">
                                                <span class="btn-text">edit</span>
                                                <input class="upload" type="file" name="photo" id="photo">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Instructor Name</label>
                                                    <input type="text" class="form-control" name="name_en"
                                                        id="name_en">
                                                    <input type="hidden" class="form-control" name="password"
                                                        value="{{ $instructor->password }}" id="password">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="email"
                                                        id="email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <select name="gender" id="gender" class="select form-control">
                                                        <option selected value="{{ $instructor->gender }}">
                                                            {{ $instructor->gender }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Age</label>
                                                    <input type="number" class="form-control" name="age"
                                                        id="age">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" id="address" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State Code</label>
                                            <select name="code" id="code" class="select form-control">
                                                <option selected value="{{ $instructor->code }}">{{ $instructor->code }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" name="phone_number" id="phone_number"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>University</label>
                                            <input type="text" name="univ" id="univ" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Instructor Details</label>
                                            <input type="text" class="form-control" name="detail" id="detail">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right " id="update_id">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Personal Info Modal -->
        </div>
        <!-- /Profile Info Tab -->

        <!-- Courses Tab -->
        <div class="tab-pane fade" id="courses">
            <div class="row staff-grid-row">

                @foreach ($courses as $course)
                    <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                        <input type="text" value="{{ $course->instructor->id }}">
                        <div class="profile-widget">
                            <div class="profile-img">
                                <a href="{{ route('course.show', $course->id) }}" class="avatar"><img
                                        src="{{ asset('requirement/uploads/course_photo/' . $course->course_photo) }}"
                                        alt=""></a>
                            </div>
                            <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a
                                    href="{{ route('course.show', $course->id) }}"
                                    style="text-transform: capitalize">{{ $course->course_name }}</a></h4>
                            <div class="small text-muted" style="text-transform: capitalize">By
                                {{ $course->instructor->name }} Instructor</div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <!-- /Courses Tab -->

        <!-- Students Tab -->

        <div class="tab-pane fade" id="students">
            <div class="row">
                <div class="col-md-12 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Students</h3>
                            <a href="#" class="btn add-btn" data-toggle="modal" data-target="#addStudent"><i
                                    class="fa fa-plus"></i>Add New
                                Student
                            </a>
                            <br>
                            <br>
                            <br>
                            <div class="table-responsive">
                                <table style="width: 100%"
                                    class="table table-hover text-nowrap table-bordered custom-table table-striped datatable">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th hidden></th>
                                            <th>ID</th>
                                            <th>Student Name</th>
                                            <th>Course Name</th>
                                            <th>Date of Join</th>
                                            <th class="text-right no-sort">Action</th>
                                            <th hidden></th>
                                            <th hidden></th>
                                            <th hidden></th>
                                            <th hidden></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $key => $student)
                                            <tr>
                                                <td hidden id="rowStudent_id">{{ $student->id }}
                                                </td>
                                                <td>{{ ++$key }}</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="{{ route('student.show', $student->user->id) }}"
                                                            class="avatar"> <img width="100%" height="100%"
                                                                src="{{ asset('requirement/uploads/photo/' . $student->user->photo) }}"></a>
                                                        <a href="{{ route('student.show', $student->user->id) }}"
                                                            style="text-transform: capitalize;font-weight: 600">
                                                            <label for=""class="name_en"
                                                                style="cursor: pointer">{{ $student->user->name_en }}</label>
                                                            <span style="font-weight: 600">Student</span></a>
                                                    </h2>
                                                </td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="{{ route('course.show', $student->course->id) }}"
                                                            class="avatar"> <img width="100%" height="100%"
                                                                src="{{ asset('requirement/uploads/course_photo/' . $student->course->course_photo) }}"></a>
                                                        <a href="{{ route('course.show', $student->course->id) }}"
                                                            style="text-transform: capitalize;font-weight: 600">
                                                            <label for=""class="course"
                                                                style="cursor: pointer">{{ $student->course->course_name }}</label>
                                                            <span style="font-weight: 600">Course</span></a>
                                                    </h2>
                                                </td>
                                                <td><i class="las la-calendar"></i> <span
                                                        class="date">{{ $student->created_at->isoFormat('LLLL') }}</span>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-toggle="dropdown" aria-expanded="false"><i
                                                                class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item viewStudent" data-toggle="modal"
                                                                data-target="#editStudent"><i class="fa fa-eye m-r-5"></i>
                                                                View</a>
                                                            <a class="dropdown-item" href="#"
                                                                onclick="confirmDestroyStudent({{ $student->id }}, this)"><i
                                                                    class="fa fa-trash-o m-r-5"></i>
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td hidden>
                                                    <span class="address">{{ $student->user->address }}</span>
                                                </td>
                                                <td hidden>
                                                    <span class="code">{{ $student->user->code }}</span>
                                                </td>
                                                <td hidden>
                                                    <span class="phone">{{ $student->user->phone_number }}</span>
                                                </td>
                                                <td hidden>
                                                    <span class="email">{{ $student->user->email }}</span>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Add Student Modal-->

            <!-- Add Student Modal -->

            {{-- <div id="addStudent" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Student</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="well form-horizontal" id="contact_form">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Student
                                                Name</label>
                                            <div class="col-lg-9">
                                                <select id="user_id" name="user_id"
                                                    class="select select2-hidden-accessible">
                                                    <option selected disabled>Select Student
                                                    </option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">
                                                            {{ $user->name_en }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Course
                                                Name</label>
                                            <div class="col-lg-9">
                                                <input type="hidden" value="{{ $course->id }}">
                                                <input type="text" name="course_id" id="course_id" readonly
                                                    value="{{ $course->course_name }}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group text-right">
                                            <button type="button" class="btn btn-primary"
                                                onclick="addStudent()">Store</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- /Add Student Modal -->

            <!-- View Student Modal -->

            {{-- <div id="editStudent" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Student Informations</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="well form-horizontal" id="contact_form">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Student
                                                Name</label>
                                            <div class="col-lg-9">
                                                <input type="text" readonly class="form-control" id="name"
                                                    style="text-transform: capitalize">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Course
                                                Name</label>
                                            <div class="col-lg-9">
                                                <input type="text" readonly class="form-control" id="course"
                                                    style="text-transform: capitalize">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">E-mail</label>
                                            <div class="col-lg-9">
                                                <input type="text" readonly class="form-control" id="email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Address</label>
                                            <div class="col-lg-9">
                                                <input type="text" readonly class="form-control" id="address"
                                                    style="text-transform: capitalize">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Code</label>
                                            <div class="col-lg-9">
                                                <input type="text" readonly class="form-control" id="code"
                                                    style="text-transform: capitalize">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Phone
                                                Number</label>
                                            <div class="col-lg-9">
                                                <input type="text" readonly class="form-control" id="phone"
                                                    style="text-transform: capitalize">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Date of
                                                Join</label>
                                            <div class="col-lg-9">
                                                <input type="text" readonly class="form-control" id="date"
                                                    style="text-transform: capitalize">
                                            </div>
                                        </div>

                                        <div class="form-group text-right">

                                            <button class="btn btn-success" data-dismiss="modal" aria-label="Close">
                                                Close <i class="las la-times"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- /View Student Modal -->

        </div>

        <!-- /Student Tab -->

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
