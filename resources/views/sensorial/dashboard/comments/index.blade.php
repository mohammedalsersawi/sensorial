@extends('sensorial.dashboard.admins.admin-parent')

@section('title', 'Comments')

@section('styles')

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap-datetimepicker.min.css') }}">

@endsection

@section('big-title', 'Comments')

@section('small-title')

    <a href="{{ route('comment.index') }}">Index Comments</a>

@endsection

@section('button')

    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add Comment </a>

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
    <div class="card tab-box">
        <div class="row user-tabs">
            <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                <ul class="nav nav-tabs nav-tabs-bottom">
                    <li class="nav-item"><a href="#courses" data-toggle="tab" class="nav-link active">Courses
                            Comments</a>
                    </li>
                    <li class="nav-item"><a href="#instructors" data-toggle="tab" class="nav-link">Instructors Comments</a>
                    </li>
                    <li class="nav-item"><a href="#lectures" data-toggle="tab" class="nav-link">Lectures Comments
                        </a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="tab-content">

        <!-- Courses Tab -->
        <div id="courses" class="pro-overview tab-pane fade show active">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="dataTable"
                            class="table table-hover text-nowrap table-bordered custom-table table-striped datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>Course Comment</th>
                                    <th>Course Name</th>
                                    <th class="text-right no-sort">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($comments as $key => $comment)
                                    <tr>
                                        <td id="row_id">{{ ++$key }}</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{ route('instructor.show', $comment->student->user_id) }}"
                                                    class="avatar photo">
                                                    <img width="100%" height="100%"
                                                        src="{{ asset('requirement/uploads/photo/' . $comment->student->user_id) }}"></a>
                                            </h2>
                                        </td>
                                        <td>{{ $comment->comment_course }}</td>
                                        <td>{{ $comment->course->course_name }}</td>
                                        <td class="text-right">
                                            <div class="btn-group">
                                                <a href="{{ route('instructor.show', $comment->id) }}" type="button"
                                                    class="btn btn-warning">
                                                    <i class="fa fa-eye"></i>
                                                    View
                                                </a>
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
        <!-- /Courses Tab -->

        <!-- Instructors Tab -->
        <div id="instructors" class="tab-pane fade">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="dataTable"
                            class="table table-hover text-nowrap table-bordered custom-table table-striped datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>Instructor Comment</th>
                                    <th>Instructor Name</th>
                                    <th class="text-right no-sort">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($comments as $key => $comment)
                                    <tr>
                                        <td id="row_id">{{ ++$key }}</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{ route('instructor.show', $comment->id) }}"
                                                    class="avatar photo">
                                                    <img width="100%" height="100%"
                                                        src="{{ asset('requirement/uploads/instructors/' . $comment->photo) }}"></a>
                                                <a href="{{ route('instructor.show', $comment->id) }}"
                                                    style="text-transform: capitalize;font-weight: 600" class="name_en">
                                                    {{ $comment->name }} <span style="font-weight: 600"></span></a>
                                            </h2>
                                        </td>
                                        <td>{{ $comment->comment_instructor }}</td>
                                        <td>{{ $comment->instructor->instructor_name }}</td>
                                        <td class="text-right">
                                            <div class="btn-group">
                                                <a href="{{ route('instructor.show', $comment->id) }}" type="button"
                                                    class="btn btn-warning">
                                                    <i class="fa fa-eye"></i>
                                                    View
                                                </a>
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
        <!-- /Instructors Tab -->

        <!-- Lectures Tab -->
        <div id="lectures" class="tab-pane fade">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="dataTable"
                            class="table table-hover text-nowrap table-bordered custom-table table-striped datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>Lecture Comment</th>
                                    <th>Lecture Name</th>
                                    <th class="text-right no-sort">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($comments as $key => $comment)
                                    <tr>
                                        <td id="row_id">{{ ++$key }}</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{ route('instructor.show', $comment->id) }}"
                                                    class="avatar photo">
                                                    <img width="100%" height="100%"
                                                        src="{{ asset('requirement/uploads/instructors/' . $comment->photo) }}"></a>
                                                <a href="{{ route('instructor.show', $comment->id) }}"
                                                    style="text-transform: capitalize;font-weight: 600" class="name_en">
                                                    {{ $comment->name }} <span style="font-weight: 600"></span></a>
                                            </h2>
                                        </td>
                                        <td>{{ $comment->comment_lecture }}</td>
                                        <td>{{ $comment->lecture->lecture_name }}</td>
                                        <td class="text-right">
                                            <div class="btn-group">
                                                <a href="{{ route('instructor.show', $comment->id) }}" type="button"
                                                    class="btn btn-warning">
                                                    <i class="fa fa-eye"></i>
                                                    View
                                                </a>
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
        <!-- /Lectures Tab -->


    </div>



    <!-- /Page Content -->

@endsection


@section('scripts')



@endsection
