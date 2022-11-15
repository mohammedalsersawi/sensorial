@extends('sensorial.dashboard.admins.admin-parent')

@section('title', 'Students')

@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

@endsection

@section('big-title', 'Students')

@section('small-title')

    <a href="{{ route('student.index') }}">Index Students</a>

@endsection

@section('button')

    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add Student
    </a>

@endsection

@section('content')

    <!-- Page Content -->

    <!-- Search Filter -->
    <div class="row filter-row">
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Employee ID</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Employee Name</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus select-focus">
                <select class="select floating">
                    <option>Select Designation</option>
                    <option>Web Developer</option>
                    <option>Web Designer</option>
                    <option>Android Developer</option>
                    <option>Ios Developer</option>
                </select>
                <label class="focus-label">Designation</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <a href="#" class="btn btn-success btn-block"> Search </a>
        </div>
    </div>
    <!-- Search Filter -->

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover text-nowrap table-bordered custom-table table-striped datatable">
                    <thead>
                        <tr style="text-align: center">
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Course Name</th>
                            <th>Status</th>
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
                                <td id="row_id">{{ ++$key }}</td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="{{ route('student.show', $student->user->id) }}" class="avatar"> <img
                                                width="100%" height="100%"
                                                src="{{ asset('requirement/uploads/photo/' . $student->user->photo) }}"></a>
                                        <a href="{{ route('student.show', $student->user->id) }}"
                                            style="text-transform: capitalize;font-weight: 600"
                                            class="name_en">{{ $student->user->name_en }} <span
                                                style="font-weight: 600">Student</span></a>
                                    </h2>
                                </td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="{{ route('course.show', $student->course->id) }}" class="avatar"> <img
                                                width="100%" height="100%"
                                                src="{{ asset('requirement/uploads/course_photo/' . $student->course->course_photo) }}"></a>
                                        <a href="{{ route('course.show', $student->course->id) }}"
                                            style="text-transform: capitalize;font-weight: 600"
                                            class="course">{{ $student->course->course_name }} <span
                                                style="font-weight: 600">Course</span></a>
                                    </h2>
                                </td>
                                <td id="admin"><span style="color: #fff; font-size: 14px;"
                                        class="badge @if ($student->status == '1') bg-inverse-success @else bg-inverse-danger @endif">
                                        @if ($student->status == '1')
                                            Active
                                        @else
                                            Disabled
                                        @endif
                                    </span></td>
                                <td><i class="las la-calendar"></i> <span
                                        class="date">{{ $student->created_at->isoFormat('LLLL') }}</span></td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item view" data-toggle="modal" data-target="#editModal"><i
                                                    class="fa fa-eye m-r-5"></i> View</a>
                                            {{-- <a class="dropdown-item" href="#"
                                                onclick="confirmDestroy({{ $student->id }}, this)"><i
                                                    class="fa fa-trash-o m-r-5"></i>
                                                Delete
                                            </a> --}}
                                            <button class="dropdown-item delete_type"
                                            onclick="confirmDestroy({{ $student->id }}, this)"><i
                                                class="fa fa-trash-o m-r-5"></i>
                                            Delete</button>
                                        </div>
                                    </div>
                                </td>
                                <td hidden class="address">{{ $student->user->address }}</td>
                                <td hidden class="code">{{ $student->user->code }}</td>
                                <td hidden class="phone">{{ $student->user->phone_number }}</td>
                                <td hidden class="email">{{ $student->user->email }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <!-- /Page Content -->

    <!-- Add Student Modal -->

    <div id="addModal" class="modal custom-modal fade" role="dialog">
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
                                    <label class="col-lg-3 col-form-label">Student Name</label>
                                    <div class="col-lg-9">
                                        <select id="user_id" name="user_id" class="select select2-hidden-accessible">
                                            <option selected disabled>Select Student</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name_en }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Course Name</label>
                                    <div class="col-lg-9">
                                        <select id="course_id" name="course_id" class="select select2-hidden-accessible">
                                            <option selected disabled>Select Course</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}">
                                                    {{ $course->course_name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Status</label>
                                    <div class="col-lg-9">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" name="status"
                                                id="status">
                                            <label class="custom-control-label" for="status">Active</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group text-right">
                                    <button type="button" class="btn btn-primary" onclick="store()">Store</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /Add Student Modal -->

    <!-- view Student Modal -->

    <div id="editModal" class="modal custom-modal fade" role="dialog">
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
                                    <label class="col-lg-3 col-form-label">Student Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" readonly class="form-control" id="name"
                                            style="text-transform: capitalize">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Course Name</label>
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
                                    <label class="col-lg-3 col-form-label">Phone Number</label>
                                    <div class="col-lg-9">
                                        <input type="text" readonly class="form-control" id="phone"
                                            style="text-transform: capitalize">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Date of Join</label>
                                    <div class="col-lg-9">
                                        <input type="text" readonly class="form-control" id="date"
                                            style="text-transform: capitalize">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Status</label>
                                    <div class="col-lg-9">
                                        <div class="custom-control custom-switch">
                                            <input readonly type="checkbox" class="custom-control-input" id="status"
                                                @if ($student->status) checked @endif>
                                            <label class="custom-control-label" for="status">
                                                @if ($student->status)
                                                    Active
                                                @else
                                                    Disabled
                                                @endif
                                            </label>
                                        </div>
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
    </div>

    <!-- /view Student Modal -->
@endsection

@section('scripts')
    <script>
        function store() {

            let formData = new FormData();

            formData.append('user_id', document.getElementById('user_id').value);
            formData.append('course_id', document.getElementById('course_id').value);
            formData.append('status', document.getElementById('status').value);

            axios.post('/sensorial/dashboard/student', formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    window.location.href = "/sensorial/dashboard/student"; // الانتقال الي الراوت المكتوب عند اضافة عنصر
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
        $(document).on('click', '.view', function() {
            var _this = $(this).parents('tr');
            var row_id = _this.find('#row_id').text();
            console.log(row_id);
            var first = '<button type="button" onclick="update(';
            var second = ')" class="btn btn-primary">Update</button>';
            var last = first + row_id + second;
            $(document).find('#update_id').html(last);
            $('#name').val(_this.find('.name_en').text());
            $('#course').val(_this.find('.course').text());
            $('#code').val(_this.find('.code').text());
            $('#address').val(_this.find('.address').text());
            $('#phone').val(_this.find('.phone').text());
            $('#email').val(_this.find('.email').text());
            $('#date').val(_this.find('.date').text());
        });
    </script>

@endsection
