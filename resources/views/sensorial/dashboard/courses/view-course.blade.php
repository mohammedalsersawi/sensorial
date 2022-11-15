@extends('sensorial.dashboard.admins.admin-parent')

@section('title', 'View Course')

@section('styles')

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Tagsinput CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">


@endsection

@section('big-title')

    View Course

@endsection

@section('small-title')

    <a href="{{ route('course.index') }}">Index Courses</a>

@endsection

@section('content')

    <div class="card mb-0">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="payslip-title">View {{ $course->course_name }} Course</h4>
                            <div class="row">
                                <div class="col-sm-6 m-b-20">
                                    <img src="{{ asset('requirement/uploads/course_photo/' . $course->course_photo) }}"
                                        class="inv-logo" alt="">
                                </div>
                                <div class="col-sm-6 m-b-20">
                                    <div class="invoice-details">
                                        <h3 class="text-uppercase">{{ $course->course_name }}</h3>
                                        <ul class="list-unstyled">
                                            <li>Latest Added: <span>{{ $course->created_at }}</span></li>
                                            <li>Latest Updated: <span>{{ $course->updated_at }}</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 m-b-20">
                                    <ul class="list-unstyled">
                                        <li>
                                            <h5 class="mb-0 cn" style="text-transform: capitalize">
                                                <strong>{{ $course->course_name }} Course</strong>
                                            </h5>
                                        </li>
                                        <br>
                                    </ul>
                                </div>
                            </div>

                            <div class="card tab-box">
                                <div class="row user-tabs">
                                    <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                                        <ul class="nav nav-tabs nav-tabs-bottom">
                                            <li class="nav-item"><a href="#description" data-toggle="tab"
                                                    class="nav-link active">Informations</a></li>
                                            <li class="nav-item"><a href="#sections" data-toggle="tab"
                                                    class="nav-link">Sections</a></li>
                                            <li class="nav-item"><a href="#lectures" data-toggle="tab"
                                                    class="nav-link">Lectures</a></li>
                                            <li class="nav-item"><a href="#learns" data-toggle="tab"
                                                    class="nav-link">Content Learn</a></li>
                                            <li class="nav-item"><a href="#students" data-toggle="tab"
                                                    class="nav-link">Students</a></li>
                                            <li class="nav-item"><a href="#quizzes" data-toggle="tab"
                                                    class="nav-link">Quizzes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content">

                                <!-- Description Tab -->

                                <div id="description" class="pro-overview tab-pane fade show active">
                                    <div class="row">
                                        <div class="col-md-6 d-flex">
                                            <div class="card profile-box flex-fill">
                                                <div class="card-body">
                                                    <h3 class="card-title">Course Details <a href="#"
                                                            class="edit-icon editDescription" data-toggle="modal"
                                                            data-target="#editDescription"><i class="fa fa-pencil"></i></a>
                                                    </h3>
                                                    <ul class="personal-info">
                                                        <li>
                                                            <div class="title">Course Name</div>
                                                            <div class="text csName" style="text-transform: capitalize;">
                                                                {{ $course->course_name }}</div>
                                                        </li>
                                                        <li>
                                                            <div class="title">Course Detail</div>
                                                            <div class="text csDetail">{{ $course->course_detail }}</div>
                                                        </li>
                                                        <li>
                                                            <div class="title">Sections</div>
                                                            <div class="text">
                                                                @if (count($course->sections) == 1 || 0)
                                                                    {{ count($course->sections) }} Section
                                                                @else
                                                                    {{ count($course->sections) }} Sections
                                                                @endif
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="title">Lectures</div>
                                                            <div class="text">
                                                                @if (count($course->lectures) == 1 || 0)
                                                                    {{ count($course->lectures) }} Lecture
                                                                @else
                                                                    {{ count($course->lectures) }} Lectures
                                                                @endif
                                                            </div>
                                                        </li>
                                                        {{-- <li>
                                                            <div class="title csPrice">Price</div>
                                                            <div class="text" style="text-transform: capitalize">
                                                                ${{ $course->price->price }}</div>
                                                        </li> --}}
                                                        <li>
                                                            <div class="title csDescription">Description</div>
                                                            <div class="text">{{ $course->description }}</div>
                                                        </li>
                                                        <li>
                                                            <div class="title csDescription">Note</div>
                                                            <div class="text">{{ $course->note }}</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex">
                                            <div class="card profile-box flex-fill">
                                                <div class="card-body">
                                                    <h3 class="card-title">Instructor Information <a href="#"
                                                            class="edit-icon viewInstructor" data-toggle="modal"
                                                            data-target="#viewInstructor"><i class="fa fa-eye"></i></a></h3>
                                                    <ul class="personal-info">
                                                        <li>
                                                            <div class="title">Name</div>
                                                            <div class="text"><a style="text-transform: capitalize"
                                                                    href="{{ route('instructor.show', $course->instructor->id) }}">{{ $course->instructor->name }}</a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="title">Email</div>
                                                            <div class="text">{{ $course->instructor->email }}</div>
                                                        </li>
                                                        <li>
                                                            <div class="title">Phone</div>
                                                            <div class="text">{{ $course->instructor->phone_number }}
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="title">Address</div>
                                                            <div class="text">{{ $course->instructor->address }}
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="title">Gender</div>
                                                            <div class="text">{{ $course->instructor->gender }}
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <hr>
                                                    <ul class="personal-info">
                                                        <li>
                                                            <div class="title">Salary</div>
                                                            <div class="text">${{ $course->instructor->salary->salary }}
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 d-flex">
                                            <div class="card profile-box flex-fill">
                                                <div class="card-body">
                                                    <h3 class="card-title">Course Price<a href="#"
                                                            class="edit-icon editPrice" data-toggle="modal"
                                                            data-target="#editPrice"><i class="fa fa-eye"></i></a>
                                                    </h3>
                                                    <br>
                                                    <ul class="personal-info">
                                                        <li>
                                                            <div class="title">Course Price</div>
                                                            <div class="text">${{ $course->price->price }}
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit Description Modal-->

                                <div id="editDescription" class="modal custom-modal fade" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Course Informations</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="well form-horizontal" id="contact_form"
                                                    action="{{ route('course.update', $course->id) }}" method="POST">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Course Name</label>
                                                                <div class="col-lg-9">
                                                                    <input style="text-transform: capitalize"
                                                                        name="curs_name"
                                                                        value="{{ $course->course_name }}" id="curs_name"
                                                                        type="text" class="form-control">

                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Course
                                                                    Detail</label>
                                                                <div class="col-lg-9">
                                                                    <input style="text-transform: capitalize"
                                                                        type="text" class="form-control"
                                                                        name="course_detail"
                                                                        value="{{ $course->course_detail }}"
                                                                        id="course_detail">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Course
                                                                    Photo</label>
                                                                <div class="col-lg-9">
                                                                    <input style="text-transform: capitalize"
                                                                        type="file" class="form-control"
                                                                        name="course_photo"
                                                                        value="{{ $course->course_photo }}"
                                                                        id="course_photo">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Instructor
                                                                    Name</label>
                                                                <div class="col-lg-9">
                                                                    <select class="form-control">
                                                                        <option selected
                                                                            value="{{ $course->instructor->id }}">
                                                                            {{ $course->instructor->name }}</option>
                                                                        @foreach ($instructors as $instructor)
                                                                            <option value="{{ $instructor->id }}">
                                                                                {{ $instructor->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Category
                                                                    Name</label>
                                                                <div class="col-lg-9">
                                                                    <select name="categ_id" id="categ_id">
                                                                        <option selected
                                                                            value="{{ $course->category->id }}">
                                                                            {{ $course->category->category_name }}</option>
                                                                        @foreach ($categories as $category)
                                                                            <option value="{{ $category->id }}">
                                                                                {{ $category->category_name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Course
                                                                    Price</label>
                                                                <div class="col-lg-9">
                                                                    <input style="text-transform: capitalize"
                                                                        type="text" class="form-control"
                                                                        value="{{ $course->price->price }}"
                                                                        name="cs_price" id="cs_price">
                                                                    <input type="hidden" class="form-control"
                                                                        value="{{ $course->id }}" name="cours_id"
                                                                        id="cours_id">
                                                                </div>
                                                            </div> --}}
                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Course
                                                                    Note</label>
                                                                <div class="col-lg-9">
                                                                    <input style="text-transform: capitalize"
                                                                        type="text" class="form-control"
                                                                        value="{{ $course->note }}" name="note"
                                                                        id="note">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Course
                                                                    Description</label>
                                                                <div class="col-lg-9">
                                                                    <input style="text-transform: capitalize"
                                                                        type="text" class="form-control"
                                                                        value="{{ $course->description }}"
                                                                        name="course_description" id="course_description">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group text-right " id="Desc_id">
                                                        <input type="submit" class="btn btn-primary"
                                                            value="Update Course">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- /Edit Description Modal-->

                                <!-- View Instructor Modal -->

                                <div id="viewInstructor" class="modal custom-modal fade" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">View Instructor Informations</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="well form-horizontal" id="contact_form">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Instructor
                                                                    Name</label>
                                                                <div class="col-lg-9">
                                                                    <input type="text" readonly class="form-control"
                                                                        style="text-transform: capitalize"
                                                                        value="{{ $course->instructor->name }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">E-mail</label>
                                                                <div class="col-lg-9">
                                                                    <input type="text" readonly class="form-control"
                                                                        value="{{ $course->instructor->email }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">phone Number</label>
                                                                <div class="col-lg-9">
                                                                    <input type="text" readonly class="form-control"
                                                                        value="{{ $course->instructor->phone_number }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Address</label>
                                                                <div class="col-lg-9">
                                                                    <input type="text" readonly class="form-control"
                                                                        style="text-transform: capitalize"
                                                                        value="{{ $course->instructor->address }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Code</label>
                                                                <div class="col-lg-9">
                                                                    <input type="text" readonly class="form-control"
                                                                        style="text-transform: capitalize"
                                                                        value="{{ $course->instructor->code }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Courses</label>
                                                                <div class="col-lg-9">
                                                                    <input type="text" readonly class="form-control"
                                                                        style="text-transform: capitalize"
                                                                        value="{{ count($course->instructor->courses) }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Date of
                                                                    Join</label>
                                                                <div class="col-lg-9">
                                                                    <input type="text" readonly class="form-control"
                                                                        style="text-transform: capitalize"
                                                                        value="{{ $course->instructor->created_at }}">
                                                                </div>
                                                            </div>

                                                            <div class="form-group text-right">

                                                                <button class="btn btn-success" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    Close <i class="las la-times"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- /View Instructor Modal -->

                                <!-- Edit Price Modal -->

                                <div id="editPrice" class="modal custom-modal fade" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Course Price</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="well form-horizontal"
                                                    action="{{ route('price.update', $course->id) }}" id="contact_form">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label">Course Price</label>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control"
                                                                        style="text-transform: capitalize"
                                                                        value="{{ $course->price->price }}"
                                                                        name="pri" id="pri">
                                                                    <input type="hidden" name="csc" id="csc"
                                                                        value="{{ $course->id }}">
                                                                </div>
                                                            </div>

                                                            <div class="form-group text-right " id="price_id">
                                                                <input type="submit" class="btn btn-primary"
                                                                    value="Update Price">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- /Edit Price Modal -->

                                <!-- /Description Tab -->

                                <!-- Sections Tab -->
                                <div class="tab-pane fade" id="sections">
                                    <div class="row">
                                        <div class="col-md-12 d-flex">
                                            <div class="card profile-box flex-fill">
                                                <div class="card-body">
                                                    <h3 class="card-title"><i class="las la-bars"></i> Sections</h3>
                                                    <a href="#" class="btn add-btn" data-toggle="modal"
                                                        data-target="#addSection"><i class="fa fa-plus"></i> Add New
                                                        Section
                                                    </a>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <div class="table-responsive">
                                                        <table style="width: 100% " id="dataTable"
                                                            class="table table-hover text-nowrap table-bordered custom-table table-striped datatable">
                                                            <thead>
                                                                <tr>
                                                                    <th hidden></th>
                                                                    <th>ID</th>
                                                                    <th>Section Name</th>
                                                                    <th>Course Name</th>
                                                                    <th class="text-right no-sort">Action</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($course->sections as $key => $section)
                                                                    <tr>
                                                                        <td hidden id="row_id">{{ $section->id }}</td>
                                                                        <td>{{ ++$key }}</td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="#"
                                                                                    style="text-transform: capitalize;font-weight: 600">
                                                                                    <label for=""class="sect_name"
                                                                                        style="cursor: pointer">{{ $section->section_name }}</label><span
                                                                                        style="font-weight: 600">Section</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="{{ route('student.show', $section->course->id) }}"
                                                                                    style="text-transform: capitalize;font-weight: 600">{{ $section->course->course_name }}
                                                                                    <span
                                                                                        style="font-weight: 600">Course</span></a>
                                                                            </h2>
                                                                        </td>

                                                                        <td class="text-right">
                                                                            <div class="dropdown dropdown-action">
                                                                                <a href="#"
                                                                                    class="action-icon dropdown-toggle"
                                                                                    data-toggle="dropdown"
                                                                                    aria-expanded="false"><i
                                                                                        class="material-icons">more_vert</i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-right">
                                                                                    <a class="dropdown-item editSection"
                                                                                        data-toggle="modal"
                                                                                        data-target="#editSection"><i
                                                                                            class="fa fa-pencil m-r-5"></i>
                                                                                        Edit</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#"
                                                                                        onclick="confirmDestroySection({{ $section->id }}, this)"><i
                                                                                            class="fa fa-trash-o m-r-5"></i>
                                                                                        Delete
                                                                                    </a>
                                                                                </div>
                                                                            </div>
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

                                    <!-- Add Section Modal-->

                                    <div id="addSection" class="modal custom-modal fade" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Create New Section</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="well form-horizontal" id="contact_form">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Section
                                                                        Name</label>
                                                                    <div class="col-lg-9">
                                                                        <input style="text-transform: capitalize"
                                                                            name="section_name" id="section_name"
                                                                            type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Course
                                                                        Name</label>
                                                                    <div class="col-lg-9">
                                                                        <select id="course_id" name="course_id"
                                                                            class="select select2-hidden-accessible">
                                                                            <option value="{{ $course->id }}" selected
                                                                                disabled>
                                                                                {{ $course->course_name }}
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group text-right">
                                                            <button type="button" class="btn btn-primary"
                                                                onclick="store()">Create</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /Add Section Modal-->

                                    <!-- Edit Section Modal-->

                                    <div id="editSection" class="modal custom-modal fade" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Section</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="well form-horizontal" id="contact_form">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Section
                                                                        Name</label>
                                                                    <div class="col-lg-9">
                                                                        <input style="text-transform: capitalize"
                                                                            name="sec_name" id="sec_name" type="text"
                                                                            class="form-control">

                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Course
                                                                        Name</label>
                                                                    <div class="col-lg-9">
                                                                        <input style="text-transform: capitalize"
                                                                            type="hidden" class="form-control"
                                                                            value="{{ $course->id }}" name="cs_name"
                                                                            id="cs_name">
                                                                        <input style="text-transform: capitalize"
                                                                            type="text" readonly class="form-control"
                                                                            value="{{ $course->course_name }}">
                                                                    </div>
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

                                    <!-- /Edit Section Modal-->

                                </div>

                                <!-- /Sections Tab -->

                                <!-- Lectures Tab -->

                                <div class="tab-pane fade" id="lectures">
                                    <div class="row">
                                        <div class="col-md-12 d-flex">
                                            <div class="card profile-box flex-fill">
                                                <div class="card-body">
                                                    <h3 class="card-title">Lectures</h3>
                                                    <a href="#" class="btn add-btn" data-toggle="modal"
                                                        data-target="#addLecture"><i class="fa fa-plus"></i> Add New
                                                        Lecture
                                                    </a>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <div class="table-responsive">
                                                        <table id="dataTable" style="width: 100%"
                                                            class="table table-hover text-nowrap table-bordered custom-table table-striped datatable">
                                                            <thead>
                                                                <tr>
                                                                    <th hidden></th>
                                                                    <th>ID</th>
                                                                    <th>Lecture Name</th>
                                                                    <th>Section Name</th>
                                                                    <th>Video</th>
                                                                    <th>Announcement</th>
                                                                    <th>Hours</th>
                                                                    <th>Minutes</th>
                                                                    <th>Description</th>
                                                                    <th class="text-right no-sort">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($lectures as $key => $lecture)
                                                                    <tr>
                                                                        <td hidden id="lecture_id">{{ $lecture->id }}
                                                                        </td>
                                                                        <td>{{ ++$key }}</td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="{{ route('instructor.show', $lecture->id) }}"
                                                                                    style="text-transform: capitalize;font-weight: 600"
                                                                                    class="lec_name">{{ $lecture->lecture_name }}<span
                                                                                        style="font-weight: 600"></span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td class="sect_id">
                                                                            {{ $lecture->section->section_name }}
                                                                        </td>
                                                                        <td class="vid">
                                                                            <img width="100px" height="100px"
                                                                                src="{{ asset('requirement/uploads/lectures_videos/' . $lecture->video) }}"
                                                                                alt="">
                                                                        </td>
                                                                        <td><span
                                                                                class="ann">{{ $lecture->announcement }}</span>
                                                                        </td>
                                                                        <td class="hs">{{ $lecture->hours }}</td>
                                                                        <td class="mn">{{ $lecture->minutes }}</td>
                                                                        <td class="description">
                                                                            <span>{{ $lecture->description }}</span>
                                                                        </td>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <div class="dropdown dropdown-action">
                                                                                <a href="#"
                                                                                    class="action-icon dropdown-toggle"
                                                                                    data-toggle="dropdown"
                                                                                    aria-expanded="false"><i
                                                                                        class="material-icons">more_vert</i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-right">
                                                                                    <a class="dropdown-item editLecture"
                                                                                        data-toggle="modal"
                                                                                        data-target="#editLecture"><i
                                                                                            class="fa fa-pencil m-r-5"></i>
                                                                                        Edit</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#"
                                                                                        onclick="confirmDestroyLecture({{ $lecture->id }}, this)"><i
                                                                                            class="fa fa-trash-o m-r-5"></i>
                                                                                        Delete
                                                                                    </a>
                                                                                </div>
                                                                            </div>
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


                                    <!-- Add Lecture Modal-->

                                    <div id="addLecture" class="modal custom-modal fade" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Create New Lecture</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="well form-horizontal" id="fileUploadForm">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Lecture
                                                                        Name</label>
                                                                    <div class="col-lg-9">
                                                                        <input style="text-transform: capitalize"
                                                                            placeholder="Enter Lecture Name"
                                                                            name="lecture_name" id="lecture_name"
                                                                            type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Section
                                                                        Name</label>
                                                                    <div class="col-lg-9">
                                                                        <select id="section_id" name="section_id"
                                                                            class="select select2-hidden-accessible">
                                                                            <option selected disabled>Add to Section
                                                                            </option>
                                                                            @foreach ($course->sections as $lecture)
                                                                                <option value="{{ $lecture->id }}">
                                                                                    {{ $lecture->section_name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Section
                                                                        Name</label>
                                                                    <div class="col-lg-9">
                                                                        <select id="course_id" name="course_id"
                                                                            class="select select2-hidden-accessible">
                                                                            <option value="{{ $course->id }}" selected
                                                                                disabled>
                                                                                {{ $course->course_name }}
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>


                                                                <div class="form-group row">
                                                                    <label
                                                                        class="col-lg-3 col-form-label">Announcement</label>
                                                                    <div class="col-lg-9">
                                                                        <input style="text-transform: capitalize"
                                                                            name="announcement" id="announcement"
                                                                            type="text"
                                                                            placeholder="Enter Announcement"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Hours</label>
                                                                    <div class="col-lg-3">
                                                                        <input style="text-transform: capitalize"
                                                                            value="0" placeholder="Hours"
                                                                            name="hours" id="hours" type="number"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Minutes</label>
                                                                    <div class="col-lg-3">
                                                                        <input style="text-transform: capitalize"
                                                                            value="0" placeholder="Minutes"
                                                                            name="minutes" id="minutes" type="number"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label
                                                                        class="col-lg-3 col-form-label">Description</label>
                                                                    <div class="col-lg-9">
                                                                        <textarea rows="4" cols="5" name="description" id="description" class="form-control"
                                                                            placeholder="Lecture Description"></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Lecture
                                                                        Video</label>
                                                                    <div class="col-lg-9">
                                                                        <input name="video" id="video"
                                                                            type="file">
                                                                    </div>
                                                                </div>
                                                                <div class="progress" id="progress_bar">
                                                                    <div class="progress-bar progress-bar-striped bg-danger"
                                                                        id="progress_bar_process" role="progressbar"
                                                                        style="width: 0%" aria-valuenow="100"
                                                                        aria-valuemin="0" aria-valuemax="100">0%</div>
                                                                </div>
                                                                <div class="row mt-5" id="uploaded_image"></div>
                                                                <br>
                                                                <br>
                                                                <div class="form-group text-right">
                                                                    <button type="button" class="btn btn-primary"
                                                                        onclick="create()">Create</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /Add Lecture Modal-->

                                    <!-- Edit Lecture Modal-->

                                    <div id="editLecture" class="modal custom-modal fade" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Lecture</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="well form-horizontal" id="contact_form">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Lecture
                                                                        Name</label>
                                                                    <div class="col-lg-9">
                                                                        <input style="text-transform: capitalize"
                                                                            placeholder="Enter Lecture Name"
                                                                            name="lec_name" id="lec_name" type="text"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Section
                                                                        Name</label>
                                                                    <div class="col-lg-9">
                                                                        <select id="sect_id" name="sect_id"
                                                                            class="select select2-hidden-accessible">
                                                                            <option selected disabled>Add to Section
                                                                            </option>
                                                                            @foreach ($course->sections as $lecture)
                                                                                <option value="{{ $lecture->id }}">
                                                                                    {{ $lecture->section_name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Section
                                                                        Name</label>
                                                                    <div class="col-lg-9">
                                                                        <input type="text" readonly
                                                                            class="form-control"
                                                                            value="{{ $course->course_name }}">
                                                                        <input type="hidden" class="form-control"
                                                                            value="{{ $course->id }}" name="cse_id"
                                                                            id="cse_id">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Lecture
                                                                        Video</label>
                                                                    <div class="col-lg-9">
                                                                        <input name="vid" id="vid"
                                                                            type="file">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label
                                                                        class="col-lg-3 col-form-label">Announcement</label>
                                                                    <div class="col-lg-9">
                                                                        <input style="text-transform: capitalize"
                                                                            name="ann" id="ann" type="text"
                                                                            placeholder="Enter Announcement"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Hours</label>
                                                                    <div class="col-lg-3">
                                                                        <input style="text-transform: capitalize"
                                                                            value="0" placeholder="Hours"
                                                                            name="hs" id="hs" type="number"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Minutes</label>
                                                                    <div class="col-lg-3">
                                                                        <input style="text-transform: capitalize"
                                                                            value="0" placeholder="Minutes"
                                                                            name="mn" id="mn" type="number"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label
                                                                        class="col-lg-3 col-form-label">Description</label>
                                                                    <div class="col-lg-9">
                                                                        <input type="text" name="desc"
                                                                            class="form-control" id="desc">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group text-right " id="updateLecture_id">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /Edit Lecture Modal-->
                                </div>

                                <!-- /Lecture Tab -->

                                <!-- Learns Tab -->

                                <div class="tab-pane fade" id="learns">
                                    <div class="row">
                                        <div class="col-md-12 d-flex">
                                            <div class="card profile-box flex-fill">
                                                <div class="card-body">
                                                    <h3 class="card-title">What You Will Learn</h3>
                                                    <a href="#" class="btn add-btn" data-toggle="modal"
                                                        data-target="#addLearn"><i class="fa fa-plus"></i> Add Learns
                                                    </a>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <div class="table-responsive">
                                                        <table style="width: 100%" id="dataTable"
                                                            class="table table-hover text-nowrap table-bordered custom-table table-striped datatable">
                                                            <thead>
                                                                <tr>
                                                                    <th hidden></th>
                                                                    <th>ID</th>
                                                                    <th>Learn</th>
                                                                    <th>Course Name</th>
                                                                    <th class="text-right no-sort">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($learns as $key => $learn)
                                                                    <tr>
                                                                        <td hidden id="learn_id">{{ $learn->id }}</td>
                                                                        <td>{{ ++$key }}</td>
                                                                        <td class="learn_name">{{ $learn->learn }}</td>
                                                                        <td>
                                                                            {{ $learn->course->course_name }}
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <div class="dropdown dropdown-action">
                                                                                <a href="#"
                                                                                    class="action-icon dropdown-toggle"
                                                                                    data-toggle="dropdown"
                                                                                    aria-expanded="false"><i
                                                                                        class="material-icons">more_vert</i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-right">
                                                                                    <a class="dropdown-item editLearn"
                                                                                        data-toggle="modal"
                                                                                        data-target="#editLearn"><i
                                                                                            class="fa fa-pencil m-r-5"></i>
                                                                                        Edit</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#"
                                                                                        onclick="confirmDestroyLearn({{ $learn->id }}, this)"><i
                                                                                            class="fa fa-trash-o m-r-5"></i>
                                                                                        Delete
                                                                                    </a>
                                                                                </div>
                                                                            </div>
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


                                    <!-- Add Learn Modal-->

                                    <div id="addLearn" class="modal custom-modal fade" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add New Learns</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="well form-horizontal" id="contact_form">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Learn</label>
                                                                    <div class="col-lg-9">
                                                                        <input style="text-transform: capitalize"
                                                                            placeholder="Enter Learn" name="learn"
                                                                            id="learn" type="text"
                                                                            class="form-control">
                                                                        <input type="hidden" name="course_id"
                                                                            id="course_id"
                                                                            value="{{ $lecture->course_id }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group text-right">
                                                                    <button type="button" class="btn btn-primary"
                                                                        onclick="addLearn()">Create</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /Add Learn Modal-->

                                    <!-- Edit Learn Modal-->

                                    <div id="editLearn" class="modal custom-modal fade" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Section</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="well form-horizontal" id="contact_form">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Learn</label>
                                                                    <div class="col-lg-9">
                                                                        <input style="text-transform: capitalize"
                                                                            name="learn_name" id="learn_name"
                                                                            type="text" class="form-control">

                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Course
                                                                        Name</label>
                                                                    <div class="col-lg-9">
                                                                        <input style="text-transform: capitalize"
                                                                            type="hidden" class="form-control"
                                                                            value="{{ $course->id }}"
                                                                            name="course_learn" id="course_learn">
                                                                        <input style="text-transform: capitalize"
                                                                            type="text" readonly class="form-control"
                                                                            value="{{ $course->course_name }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group text-right " id="updateLearn_id">

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /Edit Learn Modal-->

                                </div>

                                <!-- /Learns Tab -->

                                <!-- Students Tab -->

                                <div class="tab-pane fade" id="students">
                                    <div class="row">
                                        <div class="col-md-12 d-flex">
                                            <div class="card profile-box flex-fill">
                                                <div class="card-body">
                                                    <h3 class="card-title">Students</h3>
                                                    <a href="#" class="btn add-btn" data-toggle="modal"
                                                        data-target="#addStudent"><i class="fa fa-plus"></i>Add New
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
                                                                                    class="avatar"> <img width="100%"
                                                                                        height="100%"
                                                                                        src="{{ asset('requirement/uploads/photo/' . $student->user->photo) }}"></a>
                                                                                <a href="{{ route('student.show', $student->user->id) }}"
                                                                                    style="text-transform: capitalize;font-weight: 600">
                                                                                    <label for=""class="name_en"
                                                                                        style="cursor: pointer">{{ $student->user->name_en }}</label>
                                                                                    <span
                                                                                        style="font-weight: 600">Student</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="{{ route('course.show', $student->course->id) }}"
                                                                                    class="avatar"> <img width="100%"
                                                                                        height="100%"
                                                                                        src="{{ asset('requirement/uploads/course_photo/' . $student->course->course_photo) }}"></a>
                                                                                <a href="{{ route('course.show', $student->course->id) }}"
                                                                                    style="text-transform: capitalize;font-weight: 600">
                                                                                    <label for=""class="course"
                                                                                        style="cursor: pointer">{{ $student->course->course_name }}</label>
                                                                                    <span
                                                                                        style="font-weight: 600">Course</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td><i class="las la-calendar"></i> <span
                                                                                class="date">{{ $student->created_at->isoFormat('LLLL') }}</span>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <div class="dropdown dropdown-action">
                                                                                <a href="#"
                                                                                    class="action-icon dropdown-toggle"
                                                                                    data-toggle="dropdown"
                                                                                    aria-expanded="false"><i
                                                                                        class="material-icons">more_vert</i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-right">
                                                                                    <a class="dropdown-item viewStudent"
                                                                                        data-toggle="modal"
                                                                                        data-target="#editStudent"><i
                                                                                            class="fa fa-eye m-r-5"></i>
                                                                                        View</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#"
                                                                                        onclick="confirmDestroyStudent({{ $student->id }}, this)"><i
                                                                                            class="fa fa-trash-o m-r-5"></i>
                                                                                        Delete
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td hidden>
                                                                            <span
                                                                                class="address">{{ $student->user->address }}</span>
                                                                        </td>
                                                                        <td hidden>
                                                                            <span
                                                                                class="code">{{ $student->user->code }}</span>
                                                                        </td>
                                                                        <td hidden>
                                                                            <span
                                                                                class="phone">{{ $student->user->phone_number }}</span>
                                                                        </td>
                                                                        <td hidden>
                                                                            <span
                                                                                class="email">{{ $student->user->email }}</span>
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

                                    <div id="addStudent" class="modal custom-modal fade" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add New Student</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
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
                                                                        <input type="hidden"
                                                                            value="{{ $course->id }}">
                                                                        <input type="text" name="course_id"
                                                                            id="course_id" readonly
                                                                            value="{{ $course->course_name }}"
                                                                            class="form-control">
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
                                    </div>

                                    <!-- /Add Student Modal -->

                                    <!-- View Student Modal -->

                                    <div id="editStudent" class="modal custom-modal fade" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Student Informations</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
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
                                                                        <input type="text" readonly
                                                                            class="form-control" id="name"
                                                                            style="text-transform: capitalize">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Course
                                                                        Name</label>
                                                                    <div class="col-lg-9">
                                                                        <input type="text" readonly
                                                                            class="form-control" id="course"
                                                                            style="text-transform: capitalize">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">E-mail</label>
                                                                    <div class="col-lg-9">
                                                                        <input type="text" readonly
                                                                            class="form-control" id="email">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Address</label>
                                                                    <div class="col-lg-9">
                                                                        <input type="text" readonly
                                                                            class="form-control" id="address"
                                                                            style="text-transform: capitalize">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Code</label>
                                                                    <div class="col-lg-9">
                                                                        <input type="text" readonly
                                                                            class="form-control" id="code"
                                                                            style="text-transform: capitalize">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Phone
                                                                        Number</label>
                                                                    <div class="col-lg-9">
                                                                        <input type="text" readonly
                                                                            class="form-control" id="phone"
                                                                            style="text-transform: capitalize">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Date of
                                                                        Join</label>
                                                                    <div class="col-lg-9">
                                                                        <input type="text" readonly
                                                                            class="form-control" id="date"
                                                                            style="text-transform: capitalize">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group text-right">

                                                                    <button class="btn btn-success" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                        Close <i class="las la-times"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /View Student Modal -->

                                </div>

                                <!-- /Student Tab -->

                                <!-- Quizzes Tab -->

                                <div class="tab-pane fade" id="quizzes">
                                    <div class="row">
                                        <div class="col-md-12 d-flex">
                                            <div class="card profile-box flex-fill">
                                                <div class="card-body">
                                                    <h3 class="card-title">Quizzes</h3>
                                                    <a href="#" class="btn add-btn" data-toggle="modal"
                                                        data-target="#addQuiz"><i class="fa fa-plus"></i>Add New
                                                        Quiz
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
                                                                    <th>Quiz Name</th>
                                                                    <th>Course Name</th>
                                                                    <th>Section Name</th>
                                                                    <th>Added Date</th>
                                                                    <th class="text-right no-sort">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($course->quizzes as $key => $quiz)
                                                                    <tr>
                                                                        <td hidden id="rowStudent_id">{{ $quiz->id }}
                                                                        </td>
                                                                        <td>{{ ++$key }}</td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="#"
                                                                                    style="text-transform: capitalize;font-weight: 600">
                                                                                    <label for=""class="quiz_name"
                                                                                        style="cursor: pointer">{{ $quiz->quiz_name }}</label>
                                                                                    <span
                                                                                        style="font-weight: 600">Quiz</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="{{ route('course.show', $quiz->course->id) }}"
                                                                                    class="avatar"> <img width="100%"
                                                                                        height="100%"
                                                                                        src="{{ asset('requirement/uploads/course_photo/' . $quiz->course->course_photo) }}"></a>
                                                                                <a href="{{ route('course.show', $quiz->course->id) }}"
                                                                                    style="text-transform: capitalize;font-weight: 600">
                                                                                    <label for=""class="course"
                                                                                        style="cursor: pointer">{{ $quiz->course->course_name }}</label>
                                                                                    <span
                                                                                        style="font-weight: 600">Course</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>{{ $quiz->section->section_name }}</td>
                                                                        <td><i class="las la-calendar"></i> <span
                                                                                class="date">{{ $quiz->created_at->isoFormat('LLLL') }}</span>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <div class="dropdown dropdown-action">
                                                                                <a href="#"
                                                                                    class="action-icon dropdown-toggle"
                                                                                    data-toggle="dropdown"
                                                                                    aria-expanded="false"><i
                                                                                        class="material-icons">more_vert</i></a>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-right">
                                                                                    <a class="dropdown-item"
                                                                                        href="{{ route('quiz.show', $quiz->id) }}"><i
                                                                                            class="fa fa-eye m-r-5"></i>
                                                                                        View Quiz</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#"
                                                                                        onclick="confirmDestroyQuiz({{ $quiz->id }}, this)"><i
                                                                                            class="fa fa-trash-o m-r-5"></i>
                                                                                        Delete
                                                                                    </a>
                                                                                </div>
                                                                            </div>
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


                                    <!-- Add Quiz Modal-->

                                    <div id="addQuiz" class="modal custom-modal fade" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add New Quiz</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="well form-horizontal" id="contact_form">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Quiz
                                                                        Name</label>
                                                                    <div class="col-lg-9">
                                                                        <input type="text" class="form-control"
                                                                            name="quiz_name" id="quiz_name">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Course
                                                                        Name</label>
                                                                    <div class="col-lg-9">
                                                                        <input type="hidden" name="quiz_course_id"
                                                                            id="quiz_course_id"
                                                                            value="{{ $course->id }}">
                                                                        <input type="text" name="cse_id"
                                                                            id="cse_id" readonly
                                                                            value="{{ $course->course_name }}"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Section
                                                                        Name</label>
                                                                    <div class="col-lg-9">
                                                                        <select id="quiz_section_id"
                                                                            name="quiz_section_id"
                                                                            class="select select2-hidden-accessible">
                                                                            <option selected disabled>Add to Section
                                                                            </option>
                                                                            @foreach ($course->sections as $section)
                                                                                <option value="{{ $section->id }}">
                                                                                    {{ $section->section_name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group text-right">
                                                                    <button type="button" class="btn btn-primary"
                                                                        onclick="addQuiz()">Create Quiz</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /Add Quiz Modal -->

                                    <!-- View Student Modal -->

                                    {{-- <div id="editStudent" class="modal custom-modal fade" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Student Informations</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
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
                                                                        <input type="text" readonly
                                                                            class="form-control" id="name"
                                                                            style="text-transform: capitalize">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Course
                                                                        Name</label>
                                                                    <div class="col-lg-9">
                                                                        <input type="text" readonly
                                                                            class="form-control" id="course"
                                                                            style="text-transform: capitalize">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">E-mail</label>
                                                                    <div class="col-lg-9">
                                                                        <input type="text" readonly
                                                                            class="form-control" id="email">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Address</label>
                                                                    <div class="col-lg-9">
                                                                        <input type="text" readonly
                                                                            class="form-control" id="address"
                                                                            style="text-transform: capitalize">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Code</label>
                                                                    <div class="col-lg-9">
                                                                        <input type="text" readonly
                                                                            class="form-control" id="code"
                                                                            style="text-transform: capitalize">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Phone
                                                                        Number</label>
                                                                    <div class="col-lg-9">
                                                                        <input type="text" readonly
                                                                            class="form-control" id="phone"
                                                                            style="text-transform: capitalize">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label">Date of
                                                                        Join</label>
                                                                    <div class="col-lg-9">
                                                                        <input type="text" readonly
                                                                            class="form-control" id="date"
                                                                            style="text-transform: capitalize">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group text-right">

                                                                    <button class="btn btn-success" data-dismiss="modal"
                                                                        aria-label="Close">
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

                                <!-- /Quizzes Tab -->


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <!----------------------------------------------------- Store Functions --------------------------------------------------->

    <script>
        function store() {

            let formData = new FormData();

            formData.append('section_name', document.getElementById('section_name').value);
            formData.append('course_id', document.getElementById('course_id').value);

            axios.post('/sensorial/dashboard/section', formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    // window.location.href = "/sensorial/dashboard/section"; // الانتقال الي الراوت المكتوب عند اضافة عنصر
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

        function create() {

            let formData = new FormData();

            formData.append('lecture_name', document.getElementById('lecture_name').value);
            formData.append('section_id', document.getElementById('section_id').value);
            formData.append('course_id', document.getElementById('course_id').value);
            formData.append('video', document.getElementById('video').files[0]);
            formData.append('announcement', document.getElementById('announcement').value);
            formData.append('description', document.getElementById('description').value);
            formData.append('hours', document.getElementById('hours').value);
            formData.append('minutes', document.getElementById('minutes').value);

            axios.post('/sensorial/dashboard/lecture', formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    // window.location.href = "/sensorial/dashboard/lecture"; // الانتقال الي الراوت المكتوب عند اضافة عنصر
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

        function addLearn() {

            let formData = new FormData();

            formData.append('learn', document.getElementById('learn').value);
            formData.append('course_id', document.getElementById('course_id').value);

            axios.post('/sensorial/dashboard/learn', formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    // window.location.href = "/sensorial/dashboard/section"; // الانتقال الي الراوت المكتوب عند اضافة عنصر
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

        function addStudent() {

            let formData = new FormData();

            formData.append('user_id', document.getElementById('user_id').value);
            formData.append('course_id', document.getElementById('course_id').value);

            axios.post('/sensorial/dashboard/student', formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    window.location.reload(); // الانتقال الي الراوت المكتوب عند اضافة عنصر
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

        function addQuiz() {

            let formData = new FormData();

            formData.append('quiz_name', document.getElementById('quiz_name').value);
            formData.append('quiz_course_id', document.getElementById('quiz_course_id').value);
            formData.append('quiz_section_id', document.getElementById('quiz_section_id').value);

            axios.post('/sensorial/dashboard/quiz', formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    // window.location.href = "/sensorial/dashboard/section"; // الانتقال الي الراوت المكتوب عند اضافة عنصر
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

    <!----------------------------------------------------- Update Functions --------------------------------------------------->

    <script>
        function updateDescription(id) {

            const formData = new FormData();

            formData.append('_method', 'PUT');
            formData.append('curs_name', document.getElementById('curs_name').value);
            formData.append('course_detail', document.getElementById('course_detail').value);
            formData.append('course_photo', document.getElementById('course_photo').value);
            formData.append('inst_id', document.getElementById('inst_id').value);
            formData.append('note', document.getElementById('note').value);
            formData.append('categ_id', document.getElementById('categ_id').value);
            formData.append('course_description', document.getElementById('course_description').value);

            axios.post('/sensorial/dashboard/course/' + id, formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    window.location.reload(); // الانتقال الي الراوت المكتوب عند اضافة عنصر
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

        function updateSection(id) {

            const formData = new FormData();

            formData.append('_method', 'PUT');
            formData.append('sec_name', document.getElementById('sec_name').value);
            formData.append('cs_name', document.getElementById('cs_name').value);

            axios.post('/sensorial/dashboard/section/' + id, formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    window.location.reload(); // الانتقال الي الراوت المكتوب عند اضافة عنصر
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

        function updateLecture(id) {

            const formData = new FormData();

            formData.append('_method', 'PUT');
            formData.append('lec_name', document.getElementById('lec_name').value);
            formData.append('sect_id', document.getElementById('sect_id').value);
            formData.append('cse_id', document.getElementById('cse_id').value);
            formData.append('vid', document.getElementById('vid').files[0]);
            formData.append('ann', document.getElementById('ann').value);
            formData.append('desc', document.getElementById('desc').value);
            formData.append('hs', document.getElementById('hs').value);
            formData.append('mn', document.getElementById('mn').value);

            axios.post('/sensorial/dashboard/lecture/' + id, formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    window.location.reload(); // الانتقال الي الراوت المكتوب عند اضافة عنصر
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

        function updateLearn(id) {

            const formData = new FormData();

            formData.append('_method', 'PUT');
            formData.append('learn_name', document.getElementById('learn_name').value);
            formData.append('course_learn', document.getElementById('course_learn').value);

            axios.post('/sensorial/dashboard/learn/' + id, formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    window.location.reload(); // الانتقال الي الراوت المكتوب عند اضافة عنصر
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

    <!----------------------------------------------------- Table Values Functions --------------------------------------------------->

    <script>
        $(document).on('click', '.editSection', function() {
            var _this = $(this).parents('tr');
            var row_id = _this.find('#row_id').text();
            console.log(row_id);
            var first = '<button type="button" onclick="updateSection(';
            var second = ')" class="btn btn-primary">Update</button>';
            var last = first + row_id + second;
            $(document).find('#update_id').html(last);
            $('#sec_name').val(_this.find('.sect_name').text());
        });
    </script>

    <script>
        $(document).on('click', '.editLecture', function() {
            var _this = $(this).parents('tr');
            var row_id = _this.find('#lecture_id').text();
            console.log(row_id);
            var first = '<button type="button" onclick="updateLecture(';
            var second = ')" class="btn btn-primary">Update</button>';
            var last = first + row_id + second;
            $(document).find('#updateLecture_id').html(last);
            $('#lec_name').val(_this.find('.lec_name').text());
            $('#cse_id').val(_this.find('.cse_id').text());
            $('#sect_id').val(_this.find('.sect_id').text());
            $('#ann').val(_this.find('.ann').text());
            $('#vid').val(_this.find('.vid').text());
            $('#hs').val(_this.find('.hs').text());
            $('#mn').val(_this.find('.mn').text());
            $('#desc').val(_this.find('.description').text());
        });
    </script>

    <script>
        $(document).on('click', '.editLearn', function() {
            var _this = $(this).parents('tr');
            var row_id = _this.find('#learn_id').text();
            console.log(row_id);
            var first = '<button type="button" onclick="updateLearn(';
            var second = ')" class="btn btn-primary">Update</button>';
            var last = first + row_id + second;
            $(document).find('#updateLearn_id').html(last);
            $('#learn_name').val(_this.find('.learn_name').text());
        });
    </script>

    <script>
        $(document).on('click', '.viewStudent', function() {
            var _this = $(this).parents('tr');
            var row_id = _this.find('#rowStudent_id').text();
            console.log(row_id);
            var first = '<button type="button" onclick="update(';
            var second = ')" class="btn btn-primary">Update</button>';
            var last = first + row_id + second;
            $(document).find('#updateStudent_id').html(last);
            $('#name').val(_this.find('.name_en').text());
            $('#course').val(_this.find('.course').text());
            $('#code').val(_this.find('.code').text());
            $('#address').val(_this.find('.address').text());
            $('#phone').val(_this.find('.phone').text());
            $('#email').val(_this.find('.email').text());
            $('#date').val(_this.find('.date').text());
        });
    </script>

    <!----------------------------------------------------- Destroy Functions --------------------------------------------------->

    <script>
        function confirmDestroySection(id, reference) {
            console.log("ID: " + id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    destroy(id, reference);
                }
            })
        }

        function destroy(id, reference) {
            axios.delete('/sensorial/dashboard/section/' + id)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    reference.closest('tr').remove();
                    showMessage(response.data);
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                    showMessage(error.response.data);
                })
                .then(function() {
                    // always executed
                });
        }

        function showMessage(data) {
            Swal.fire({
                icon: data.icon,
                title: data.title,
                text: data.text,
                showConfirmButton: false,
                timer: 1500
            })
        }

        function confirmDestroyLearn(id, reference) {
            console.log("ID: " + id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    destroy(id, reference);
                }
            })
        }

        function destroy(id, reference) {
            axios.delete('/sensorial/dashboard/learn/' + id)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    reference.closest('tr').remove();
                    showMessage(response.data);
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                    showMessage(error.response.data);
                })
                .then(function() {
                    // always executed
                });
        }

        function showMessage(data) {
            Swal.fire({
                icon: data.icon,
                title: data.title,
                text: data.text,
                showConfirmButton: false,
                timer: 1500
            })
        }

        function confirmDestroyLecture(id, reference) {
            console.log("ID: " + id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    destroy(id, reference);
                }
            })
        }

        function destroy(id, reference) {
            axios.delete('/sensorial/dashboard/lecture/' + id)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    reference.closest('tr').remove();
                    showMessage(response.data);
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                    showMessage(error.response.data);
                })
                .then(function() {
                    // always executed
                });
        }

        function showMessage(data) {
            Swal.fire({
                icon: data.icon,
                title: data.title,
                text: data.text,
                showConfirmButton: false,
                timer: 1500
            })
        }

        function confirmDestroyStudent(id, reference) {
            console.log("ID: " + id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    destroy(id, reference);
                }
            })
        }

        function destroy(id, reference) {
            axios.delete('/sensorial/dashboard/student/' + id)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    reference.closest('tr').remove();
                    showMessage(response.data);
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                    showMessage(error.response.data);
                })
                .then(function() {
                    // always executed
                });
        }

        function showMessage(data) {
            Swal.fire({
                icon: data.icon,
                title: data.title,
                text: data.text,
                showConfirmButton: false,
                timer: 1500
            })
        }

        function confirmDestroyQuiz(id, reference) {
            console.log("ID: " + id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    destroy(id, reference);
                }
            })
        }

        function destroy(id, reference) {
            axios.delete('/sensorial/dashboard/quiz/' + id)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    reference.closest('tr').remove();
                    showMessage(response.data);
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                    showMessage(error.response.data);
                })
                .then(function() {
                    // always executed
                });
        }

        function showMessage(data) {
            Swal.fire({
                icon: data.icon,
                title: data.title,
                text: data.text,
                showConfirmButton: false,
                timer: 1500
            })
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script>
        $(function() {
            $(document).ready(function() {
                $('#fileUploadForm').ajaxForm({
                    beforeSend: function() {
                        var percentage = '0';
                    },
                    uploadProgress: function(event, position, total, percentComplete) {
                        var percentage = percentComplete;
                        $('.progress .progress-bar').css("width", percentage + '%', function() {
                            return $(this).attr("aria-valuenow", percentage) + "%";
                        })
                    },
                    complete: function(xhr) {
                        console.log('File has uploaded');
                    }
                });
            });
        });
    </script>

    <!-- Select2 JS -->
    <script src="{{ asset('requirement/assets/js/select2.min.js') }}"></script>

@endsection
