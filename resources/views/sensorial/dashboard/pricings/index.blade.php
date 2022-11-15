@extends('sensorial.dashboard.admins.admin-parent')

@section('title', 'Courses Price')

@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap-datetimepicker.min.css') }}">


@endsection

@section('big-title', 'Courses Pricing')

@section('small-title')

    <a href="{{ route('price.index') }}">Pricings</a>

@endsection

@section('button')

    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add Price
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
                    <thead style="text-align: center">
                        <tr>
                            <th>#Course ID</th>
                            <th>Course Name</th>
                            <th>Course Price</th>
                            <th class="text-right no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center ;text-transform: capitalize">
                        @foreach ($pricings as $price)
                            <tr>
                                <td class="e_id" id="row_id">{{ $price->course_id }}</td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="{{ route('course.show', $price->course->id) }}" class="avatar">
                                            <img width="100%" height="100%"
                                                src="{{ asset('requirement/uploads/course_photo/' . $price->course->course_photo) }}"></a>
                                        <a href="{{ route('course.show', $price->course->id) }}"
                                            style="text-transform: capitalize;font-weight: 600"
                                            class="course">{{ $price->course->course_name }}</a>
                                    </h2>
                                </td>
                                <td style="text-align: center; font-size: 19px">
                                    <label href="#" class="pri">{{ $price->price }}</label> $
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item edit" data-toggle="modal" data-target="#editModal"><i
                                                    class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <button class="dropdown-item delete_type"
                                                onclick="confirmDestroy({{ $price->id }}, this)"><i
                                                    class="fa fa-trash-o m-r-5"></i>
                                                Delete</button>
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
                    <h5 class="modal-title">Create New Section</h5>
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
                                        <select id="course_id" name="course_id" class="select select2-hidden-accessible">
                                            <option selected disabled>Select Instructor</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Course Price</label>
                                    <div class="col-lg-9">
                                        <input style="text-transform: capitalize" name="price" id="price"
                                            type="text" class="form-control">
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

    <!-- /Add Admin Modal-->

    <!-- Edit Salary Modal-->

    <div id="editModal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Salaries</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="well form-horizontal" id="contact_form">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Course ID</label>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control" name="csc" id="csc">
                                    </div>
                                    <label class="col-lg-3 col-form-label">Course Name</label>
                                    <div class="col-lg-3">
                                        <input type="text" style="text-transform: capitalize" readonly
                                            class="form-control" name="course" id="course">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Price</label>
                                    <div class="col-lg-9">
                                        <input style="text-transform: capitalize" name="pri" id="pri"
                                            type="text" class="form-control">
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

    <!-- /Edit Salary Modal-->

@endsection

@section('scripts')
    <script>
        function store() {

            let formData = new FormData();

            formData.append('course_id', document.getElementById('course_id').value);
            formData.append('price', document.getElementById('price').value);

            axios.post('/sensorial/dashboard/price', formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    window.location.href = "/sensorial/dashboard/price"; // الانتقال الي الراوت المكتوب عند اضافة عنصر
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
        function update(id) {

            const formData = new FormData();

            formData.append('_method', 'PUT');
            formData.append('csc', document.getElementById('csc').value);
            formData.append('pri', document.getElementById('pri').value);

            axios.post('/sensorial/dashboard/price/' + id, formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    window.location.href = "/sensorial/dashboard/price"; // الانتقال الي الراوت المكتوب عند اضافة عنصر
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
        $(document).on('click', '.edit', function() {
            var _this = $(this).parents('tr');
            var row_id = _this.find('#row_id').text();
            console.log(row_id);
            var first = '<button type="button" onclick="update(';
            var second = ')" class="btn btn-primary">Update</button>';
            var last = first + row_id + second;
            $(document).find('#update_id').html(last);
            $('#csc').val(_this.find('.e_id').text());
            $('#pri').val(_this.find('.pri').text());
            $('#course').val(_this.find('.course').text());
        });
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
            axios.delete('/sensorial/dashboard/price/' + id)
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

@endsection
