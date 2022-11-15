@extends('sensorial.dashboard.admins.admin-parent')

@section('title', 'Lectures')

@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap-datetimepicker.min.css') }}">

@endsection

@section('big-title', 'Lectures')

@section('small-title')

    <a href="{{ route('lecture.index') }}">Index Lectures</a>

@endsection

@section('button')
    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add New
        Lecture
    </a>
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
                            <th>Lecture</th>
                            <th>Section</th>
                            <th>Course</th>
                            <th class="text-right no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lectures as $key => $lecture)
                            <tr>
                                <td id="row_id">{{ ++$key }}</td>
                                <td>{{ $lecture->lecture_name }}</td>
                                <td>{{ $lecture->section->section_name }}</td>
                                <td>{{ $lecture->section->course->course_name }}</td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('lecture.show', $lecture->id) }}"><i
                                                    class="fa fa-eye m-r-5"></i> View </a>
                                            <a class="dropdown-item" href="#"
                                                onclick="confirmDestroy({{ $lecture->id }}, this)"><i
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

    <!-- /Page Content -->

    <!-- Add Admin Modal-->

    <div id="addModal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New Lecture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="well form-horizontal" id="contact_form">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Lecture Name</label>
                                    <div class="col-lg-9">
                                        <input style="text-transform: capitalize" placeholder="Enter Lecture Name"
                                            name="lecture_name" id="lecture_name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Section Name</label>
                                    <div class="col-lg-9">
                                        <select id="section_id" name="section_id" class="select select2-hidden-accessible">
                                            <option selected disabled>Add to Section</option>
                                            @foreach ($sections as $section)
                                                <option value="{{ $section->id }}">{{ $section->section_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Lecture Video</label>
                                    <div class="col-lg-9">
                                        <input name="video" id="video" type="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Announcement</label>
                                    <div class="col-lg-9">
                                        <input style="text-transform: capitalize" name="announcement" id="announcement"
                                            type="text" placeholder="Enter Announcement" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Hours</label>
                                    <div class="col-lg-3">
                                        <input style="text-transform: capitalize" value="0" placeholder="Hours"
                                            name="hours" id="hours" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Minutes</label>
                                    <div class="col-lg-3">
                                        <input style="text-transform: capitalize" value="0" placeholder="Minutes"
                                            name="minutes" id="minutes" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Details</label>
                                    <div class="col-lg-9">
                                        <textarea rows="4" cols="5" name="description" id="description" class="form-control"
                                            placeholder="Lecture Details"></textarea>
                                    </div>
                                </div>

                                <div class="form-group text-right">
                                    <button type="button" class="btn btn-primary" onclick="store()">Create</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /Add Admin Modal-->

@endsection


@section('scripts')

    <script>
        function store() {

            let formData = new FormData();

            formData.append('lecture_name', document.getElementById('lecture_name').value);
            formData.append('section_id', document.getElementById('section_id').value);
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
                    window.location.href = "/sensorial/dashboard/lecture"; // الانتقال الي الراوت المكتوب عند اضافة عنصر
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
        // Get a reference to the file input element
        const inputElement = document.querySelector('input[id="video"]');

        // Create a FilePond instance
        const pond = FilePond.create(inputElement);

        FilePond.setOptions({
            server: {
                url: '/sensorial/dashboard/lecture',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                }
            }
        });
    </script>

@endsection
