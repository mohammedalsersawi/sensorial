@extends('sensorial.dashboard.admins.admin-parent')
@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/dataTables.bootstrap4.min.css') }}">

@endsection

@section('title', 'Admins')

@section('big-title', 'Admins')

@section('small-title')

    <a href="{{ route('admin.index') }}">Index Admins</a>

@endsection

@section('button')

    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add Admin
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
                <table class="table table-hover text-nowrap table-bordered custom-table datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>En. Name</th>
                            <th>Ar. Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Admin Access</th>
                            <th>ID Photo</th>
                            <th class="text-right no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $key => $admin)
                            <tr>
                                <td id="row_id">{{ ++$key }}</td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="{{ route('admin.show', $admin->id) }}" class="avatar"> <img width="100%"
                                                height="100%"
                                                src="{{ asset('requirement/uploads/photo/' . $admin->photo) }}"></a>
                                        <a href="{{ route('admin.show', $admin->id) }}"
                                            style="text-transform: capitalize;font-weight: 600" class="name_en">
                                            {{ $admin->name_en }}</a>
                                    </h2>


                                </td>
                                <td class="name_ar" style="font-weight: 600">{{ $admin->name_ar }}</td>
                                <td class="email">{{ $admin->email }}</td>
                                <td class="phone_number">{{ $admin->phone_number }}</td>
                                <td class="address">{{ $admin->address }}</td>
                                <td id="admin"><span style="color: #fff; font-size: 14px;"
                                        class="badge @if ($admin->admin_access == '1') bg-inverse-success @else bg-inverse-danger @endif">
                                        @if ($admin->admin_access == '1')
                                            Active
                                        @else
                                            Disabled
                                        @endif
                                    </span>
                                </td>
                                <td class="id_photo">
                                    <a href="" class="avatar"> <img width="100%" height="100%"
                                            src="{{ asset('requirement/uploads/id_photo/' . $admin->id_photo) }}"></a>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item edit" data-toggle="modal" data-target="#editModal"><i
                                                    class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <button class="dropdown-item delete_type"
                                                onclick="confirmDestroy({{ $admin->id }}, this)"><i
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
                    <h5 class="modal-title">Add New Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="well form-horizontal" id="contact_form">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Name in English</label>
                                    <div class="col-lg-9">
                                        <input style="text-transform: capitalize" name="name_en" id="name_e"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Name in Arabic</label>
                                    <div class="col-lg-9">
                                        <input style="text-transform: capitalize" name="name_ar" id="name_a"
                                            type="text" class="form-control">
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
                                    <label class="col-lg-3 col-form-label">State</label>
                                    <div class="col-lg-9">
                                        <select name="code" id="cod" class="select select2-hidden-accessible"
                                            data-select2-id="select2-data-4-c9tq" tabindex="-1" aria-hidden="true">
                                            <option value="us">US</option>
                                            <option value="uk">UK</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Phone Number</label>
                                    <div class="col-lg-9">
                                        <input type="number" name="phone_number" id="phone" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Address</label>
                                    <div class="col-lg-9">
                                        <input style="text-transform: capitalize" name="address" id="add"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">ID Photo</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="id_photo" id="id_img" type="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Customer Photo</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="photo" id="img" type="file">
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

    <!-- /Add Admin Modal-->

    <!-- Edit Admin Modal-->

    <div id="editModal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="well form-horizontal" id="contact_form">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Name in English</label>
                                    <div class="col-lg-9">
                                        <input style="text-transform: capitalize" name="name_en" id="name_en"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Name in Arabic</label>
                                    <div class="col-lg-9">
                                        <input style="text-transform: capitalize" name="name_ar" id="name_ar"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Email</label>
                                    <div class="col-lg-9">
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">State</label>
                                    <div class="col-lg-9">
                                        <select name="code" id="code" class="select select2-hidden-accessible">
                                            <option value="us">US</option>
                                            <option value="uk">UK</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Phone Number</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="phone_number" id="phone_number"
                                            class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Address</label>
                                    <div class="col-lg-9">
                                        <input style="text-transform: capitalize" name="address" id="address"
                                            type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">ID Photo</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="id_photo" id="id_photo" type="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Customer Photo</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="photo" id="photo" type="file">
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

    <!-- /Edit Admin Modal-->

@endsection

@section('scripts')
    <script>
        function store() {

            let formData = new FormData();

            formData.append('name_en', document.getElementById('name_e').value);
            formData.append('name_ar', document.getElementById('name_a').value);
            formData.append('email', document.getElementById('mail').value);
            formData.append('code', document.getElementById('cod').value);
            formData.append('phone_number', document.getElementById('phone').value);
            formData.append('password', document.getElementById('pass').value);
            formData.append('address', document.getElementById('add').value);
            formData.append('id_photo', document.getElementById('id_img').files[0]);
            formData.append('photo', document.getElementById('img').files[0]);

            axios.post('/sensorial/dashboard/admin', formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    window.location.href = "/sensorial/dashboard/admin"; // الانتقال الي الراوت المكتوب عند اضافة عنصر
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
            formData.append('name_en', document.getElementById('name_en').value);
            formData.append('name_ar', document.getElementById('name_ar').value);
            formData.append('email', document.getElementById('email').value);
            formData.append('phone_number', document.getElementById('phone_number').value);
            formData.append('address', document.getElementById('address').value);
            formData.append('id_photo', document.getElementById('id_photo').files[0]);
            formData.append('photo', document.getElementById('photo').files[0]);

            axios.post('/sensorial/dashboard/admin/' + id, formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    window.location.href = "/sensorial/dashboard/admin"; // الانتقال الي الراوت المكتوب عند اضافة عنصر
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
            $('#e_id').val(_this.find('.e_id').text());
            $('#name_en').val(_this.find('.name_en').text());
            $('#name_ar').val(_this.find('.name_ar').text());
            $('#email').val(_this.find('.email').text());
            $('#code').val(_this.find('.code').text());
            $('#phone_number').val(_this.find('.phone_number').text());
            $('#address').val(_this.find('.address').text());
            $('#photo').val(_this.find('.photo').text());
            $('#id_photo').val(_this.find('.id_photo').text());




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
    <script src="{{ asset('requirement/assets/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('requirement/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Datatable JS -->
    <script src="{{ asset('requirement/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('requirement/assets/js/dataTables.bootstrap4.min.js') }}"></script>
@endsection
