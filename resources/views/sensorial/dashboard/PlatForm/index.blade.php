@extends('sensorial.dashboard.admins.admin-parent')

@section('title', 'Sections')

@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap-datetimepicker.min.css') }}">


@endsection

@section('big-title', 'Sections')

@section('small-title')

    <a href="{{ route('platForm.index') }}">Index platForm</a>

@endsection

@section('button')

    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add New PlatForm
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
                            <th>Title</th>
                            <th>Details</th>
                            <th>Image</th>
                            <th class="text-right no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($biographys as $key => $biography)
                            <tr>
                                <td id="row_id">{{ ++$key }}</td>
                                <td class="section" style="font-weight: 600">{{ $biography->title }}</td>
                                <td class="section" style="font-weight: 600">{{ $biography->dest }}</td>

                                <td class="course">{{ $biography->image }}</td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#staticBackdrop">
                                                <i class="fa fa-eye m-r-5">  Edit</i>
                                              </button>
                                            {{-- <a class="dropdown-item" href="{{ route('platForm.show', $biography->id) }}"><i
                                                    class="fa fa-eye m-r-5" data-toggle="modal" data-target="#staticBackdrop"></i> edite </a> --}}

                                            <a class="dropdown-item" href="#"
                                                onclick="confirmDestroy({{ $biography->id }}, this)"><i
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
                    <h5 class="modal-title">Create New Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="well form-horizontal" id="contact_form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Title</label>
                                    <div class="col-lg-9">
                                        <input style="text-transform: capitalize" name="title" id="title"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Details</label>
                                    <div class="col-lg-9">
                                        <textarea class="form-control" style="text-transform: capitalize" name="dest" id="dest" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Image</label>
                                    <div class="col-lg-9">
                                        <input type="file" class="form-control" style="text-transform: capitalize" id="image" name="image">
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
<!-- Button trigger modal -->

<
  <div id="staticBackdrop" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit PlatForm </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="" class="well form-horizontal" id="contact_form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Title</label>
                                <div class="col-lg-9">
                                    <input style="text-transform: capitalize" name="title" id="title"
                                        type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Details</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control" style="text-transform: capitalize" name="dest" id="dest" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Image</label>
                                <div class="col-lg-9">
                                    <input type="file" class="form-control" style="text-transform: capitalize" id="image" name="image">
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

@endsection

@section('scripts')
    <script>
        function store() {

            let formData = new FormData();
            formData.append('title', document.getElementById('title').value);
            formData.append('dest', document.getElementById('dest').value);
            formData.append('image', document.getElementById('image').files[0]);


            axios.post('/sensorial/dashboard/platForm', formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    window.location.href = "/sensorial/dashboard/platForm"; // الانتقال الي الراوت المكتوب عند اضافة عنصر
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
            axios.delete('/sensorial/dashboard/admin/' + id)
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
