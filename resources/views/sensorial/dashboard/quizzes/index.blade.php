@extends('sensorial.dashboard.admins.admin-parent')

@section('title', 'Quizzes')

@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap-datetimepicker.min.css') }}">

@endsection

@section('big-title', 'Quizzes')

@section('small-title')

    <a href="{{ route('quiz.index') }}">Index Quizzes</a>

@endsection


@section('content')

    <!-- /Page Content -->

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
                <table class="table table-hover text-nowrap table-stripped table-bordered custom-table datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Quiz Name</th>
                            <th>Course</th>
                            <th>Section</th>
                            <th class="text-right no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($quizzes as $key => $quiz)
                            <tr>
                                <td id="row_id">{{ ++$key }}</td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="{{ route('quiz.show', $quiz->id) }}"
                                            style="text-transform: capitalize;font-weight: 600">
                                            <label for=""class="quiz_name"
                                                style="cursor: pointer">{{ $quiz->quiz_name }}</label>
                                            <span style="font-weight: 600">Quiz {{ $quiz->id }}</span></a>
                                    </h2>
                                </td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="{{ route('course.show', $quiz->course->id) }}" class="avatar"> <img
                                                width="100%" height="100%"
                                                src="{{ asset('requirement/uploads/course_photo/' . $quiz->course->course_photo) }}"></a>
                                        <a href="{{ route('course.show', $quiz->course->id) }}"
                                            style="text-transform: capitalize;font-weight: 600">
                                            <label for=""class="course"
                                                style="cursor: pointer">{{ $quiz->course->course_name }}</label>
                                            <span style="font-weight: 600">Course {{ $quiz->course->id }}</span></a>
                                    </h2>
                                </td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="#" style="text-transform: capitalize;font-weight: 600">
                                            <label for=""class="quiz_name"
                                                style="cursor: pointer">{{ $quiz->section->section_name }}</label>
                                            <span style="font-weight: 600">Section</span></a>
                                    </h2>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('quiz.show', $quiz->id) }}"><i
                                                    class="fa fa-eye m-r-5"></i> View Quiz </a>
                                            <a class="dropdown-item" href="#"
                                                onclick="confirmDestroy({{ $quiz->id }}, this)"><i
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


@endsection

@section('scripts')


@endsection
