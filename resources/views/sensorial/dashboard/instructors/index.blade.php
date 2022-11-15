@extends('sensorial.dashboard.admins.admin-parent')

@section('styles')


    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/dataTables.bootstrap4.min.css') }}">


@endsection

@section('title', 'Instructors')

@section('big-title', 'Instructors')

@section('small-title')

    <a href="{{ route('instructor.index') }}">Index Instructors</a>

@endsection

@section('button')

    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add New
        Instructor
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
                <table id="dataTable"
                    class="table table-hover text-nowrap table-bordered custom-table table-striped datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Instructor Name</th>
                            <th>Salary</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th class="text-right no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($instructors as $key => $instructor)
                            <tr>
                                <td id="row_id">{{ ++$key }}</td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="{{ route('instructor.show', $instructor->id) }}" class="avatar photo"> <img
                                                width="100%" height="100%"
                                                src="{{ asset('requirement/uploads/instructors/' . $instructor->photo) }}"></a>
                                        <a href="{{ route('instructor.show', $instructor->id) }}"
                                            style="text-transform: capitalize;font-weight: 600" class="name_en">
                                            {{ $instructor->name }} <span style="font-weight: 600"></span></a>
                                    </h2>
                                </td>
                                <td>
                                    @if ($instructor->salary)
                                        <label for="" class="salary">${{ $instructor->salary->salary }}</label>
                                    @else
                                        <label for="" class="salary">Not Registerd Yet</label>
                                    @endif
                                </td>
                                <td class="age">{{ $instructor->age }}</td>
                                <td class="gender">{{ $instructor->gender }}</td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item view"
                                                href="{{ route('instructor.show', $instructor->id) }}"><i
                                                    class="fa fa-eye m-r-5"></i> View
                                            </a>
                                            <button class="dropdown-item delete_type"
                                                onclick="confirmDestroy({{ $instructor->id }}, this)"><i
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

    <!-- Add Instructor Modal -->

    <div id="addModal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Instructor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="well form-horizontal" id="contact_form">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Instructor Name</label>
                                    <div class="col-lg-9">
                                        <input style="text-transform: capitalize" name="name_en" id="name_e"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Instructor Photo</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="photo" id="img" type="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Email</label>
                                    <div class="col-lg-9">
                                        <input type="email" name="email" id="mail" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Password</label>
                                    <div class="col-lg-9">
                                        <input type="password" name="password" id="pass" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Age</label>
                                    <div class="col-lg-3">
                                        <input type="number" name="age" id="ag" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Gender</label>
                                    <div class="col-lg-6">
                                        <select id="gend" name="gender" class="select select2-hidden-accessible">
                                            <option selected disabled>Select Gender</option>

                                            <option value="male">Male</option>
                                            <option value="female">Female</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Code</label>
                                    <div class="col-lg-6">
                                        <select id="cod" name="code" class="select select2-hidden-accessible">
                                            <option selected disabled>Select Phone Code</option>

                                            <option value="uk">UK</option>
                                            <option value="us">US</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Phone Number</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="phone_number" id="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Address</label>
                                    <div class="col-lg-9">
                                        <input style="text-transform: capitalize" name="address" id="add"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">University</label>
                                    <div class="col-lg-9">
                                        <input style="text-transform: capitalize" name="unev" id="unev"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Details</label>
                                    <div class="col-lg-9">
                                        <textarea rows="4" cols="5" name="detail" id="detail" class="form-control"
                                            placeholder="Instructor Details"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="button" class="btn btn-primary" onclick="store()">Store</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /Add Instructor Modal -->


@endsection

@section('scripts')
    <script>
        function store() {

            let formData = new FormData();

            formData.append('name_en', document.getElementById('name_e').value);
            formData.append('email', document.getElementById('mail').value);
            formData.append('password', document.getElementById('pass').value);
            formData.append('age', document.getElementById('ag').value);
            formData.append('gender', document.getElementById('gend').value);
            formData.append('code', document.getElementById('cod').value);
            formData.append('phone_number', document.getElementById('phone').value);
            formData.append('address', document.getElementById('add').value);
            formData.append('photo', document.getElementById('img').files[0]);
            formData.append('unev', document.getElementById('unev').value);
            formData.append('detail', document.getElementById('detail').value);


            axios.post('/sensorial/dashboard/instructor/', formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    window.location.href =
                        "/sensorial/dashboard/instructor"; // الانتقال الي الراوت المكتوب عند اضافة عنصر
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
            axios.delete('/sensorial/dashboard/instructor/' + id)
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
    <!-- Select2 JS -->
    <script src="{{ asset('requirement/assets/js/select2.min.js') }}"></script>

    <!-- Datatable JS -->
    <script src="{{ asset('requirement/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('requirement/assets/js/dataTables.bootstrap4.min.js') }}"></script>

@endsection
