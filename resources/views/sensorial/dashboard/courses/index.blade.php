@extends('sensorial.dashboard.admins.admin-parent')

@section('title', 'Courses')

@section('styles')

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap-datetimepicker.min.css') }}">

@endsection

@section('big-title', 'Courses')

@section('small-title')

    <a href="{{ route('course.index') }}">Index Courses</a>

@endsection

@section('button')

    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Create New
        Course
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

    <div class="row staff-grid-row">

        @foreach ($courses as $course)
            <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                <div class="profile-widget" id="course">
                    <div class="profile-img">
                        <a href="{{ route('course.show', $course->id) }}" class="avatar"><img
                                src="{{ asset('requirement/uploads/course_photo/' . $course->course_photo) }}"
                                alt=""></a>
                    </div>
                    <h4 class="user-name m-t-10 mb-0 text-ellipsis" style="text-transform: capitalize"><a
                            href="{{ route('course.show', $course->id) }}">{{ $course->course_name }}</a></h4>
                    <div class="text-muted" style="text-transform: capitalize">Category:
                        {{ $course->category->category_name }}</div>
                    <div class="text-muted" style="text-transform: capitalize">Instructor:
                        {{ $course->instructor->name }}</div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" type="button" href="#"
                                onclick="confirmDestroy({{ $course->id }}, this)"><i class="fa fa-trash-o m-r-5"></i>
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>


    <!-- /Page Content -->

    <!-- Add Course Modal-->

    <div id="addModal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="well form-horizontal" id="contact_form">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Course Name</label>
                                    <div class="col-lg-9">
                                        <input style="text-transform: capitalize;" placeholder="Enter Course Name"
                                            name="course_name" id="course_name" type="text" class="form-control">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Course Photo</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="course_photo" id="course_photo" type="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Course Detail</label>
                                    <div class="col-lg-9">
                                        <input style="text-transform: capitalize;" placeholder="Enter Course Detail"
                                            name="course_detail" id="course_detail" type="text" class="form-control">

                                    </div>
                                </div>
                                <div class="form-group row" data-select2-id="select2-data-12-1fss">
                                    <label class="col-lg-3 col-form-label">Add to Category</label>
                                    <div class="col-lg-9" data-select2-id="select2-data-11-lw53">
                                        <select name="category_id" id="category_id"
                                            class="select select2-hidden-accessible" data-select2-id="select2-data-1-bgy2"
                                            tabindex="-1" aria-hidden="true">
                                            <option selected disabled>Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Instructor Name</label>
                                    <div class="col-lg-9">
                                        <select name="instructor_id" id="instructor_id"
                                            class="select select2-hidden-accessible">
                                            <option selected disabled>Select Instructor</option>
                                            @foreach ($instructors as $instructor)
                                                <option value="{{ $instructor->id }}">{{ $instructor->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Note</label>
                                    <div class="col-lg-9">
                                        <input style="text-transform: capitalize;" placeholder="Wirte a Note"
                                            name="note" id="note" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description</label>
                                    <div class="col-lg-9">
                                        <textarea rows="4" cols="5" name="description" id="description" class="form-control"
                                            placeholder="Write a Description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="button" class="btn btn-primary" onclick="store()">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /Add Course Modal-->




@endsection

@section('scripts')

    <script>
        function store() {

            let formData = new FormData();

            formData.append('course_name', document.getElementById('course_name').value);
            formData.append('course_detail', document.getElementById('course_detail').value);
            formData.append('course_photo', document.getElementById('course_photo').files[0]);
            formData.append('category_id', document.getElementById('category_id').value);
            formData.append('instructor_id', document.getElementById('instructor_id').value);
            formData.append('note', document.getElementById('note').value);
            formData.append('description', document.getElementById('description').value);


            axios.post('/sensorial/dashboard/course', formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    window.location.href = "/sensorial/dashboard/course"; // الانتقال الي الراوت المكتوب عند اضافة عنصر
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
        function confirmDestroy(id, reference) {
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
            axios.delete('/sensorial/dashboard/course/' + id)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    reference.closest('#course').remove();
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
    <!-- Select2 JS -->
    <script src="{{ asset('requirement/assets/js/select2.min.js') }}"></script>
@endsection
