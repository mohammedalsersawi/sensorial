@extends('sensorial.dashboard.admins.admin-parent')

@section('title', 'Categories')

@section('styles')

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap-datetimepicker.min.css') }}">

@endsection

@section('big-title', 'Categories')

@section('small-title')

    <a href="{{ route('category.index') }}">Index Categories</a>

@endsection

@section('button')

    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add New Category
    </a>

@endsection

@section('content')
    <!--  Page Content -->
    <div class="content container-fluid">

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
        <!-- /End Search Filter -->

        {{-- الادارة و العرض --}}
        <div class="row staff-grid-row">

            @foreach ($categories as $category)
                <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                    <div class="profile-widget" id="category">
                        <div class="profile-img">
                            <a href="{{ route('category.show', $category->id) }}" class="avatar"><img
                                    src="{{ asset('requirement/uploads/category_photo/' . $category->category_photo) }}"
                                    alt=""></a>
                        </div>
                        <div class="dropdown profile-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" type="button" href="#"
                                    onclick="confirmDestroy({{ $category->id }}, this)"><i class="fa fa-trash-o m-r-5"></i>
                                    Delete
                                </a>
                            </div>
                        </div>
                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a
                                href="{{ route('category.show', $category->id) }}"
                                style="text-transform: capitalize">{{ $category->category_name }}</a>
                        </h4>
                        <div class="small text-muted">{{ $category->category_details }}</div>
                    </div>
                </div>
            @endforeach

        </div>
        {{-- / الادارة و العرض --}}

        <!-- /End Page Content -->
        {{-- ***********************************************صفحة الاضافة******************************************************** --}}
        <!-- Add Category Modal-->
        <div id="addModal" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="well form-horizontal" id="contact_form">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category Name</label>
                                        <div class="col-lg-9">
                                            <input style="text-transform: capitalize" name="name" id="name"
                                                type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category Photo</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" name="photo" id="photo" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Details</label>
                                        <div class="col-lg-9">
                                            <textarea rows="4" cols="5" name="detail" id="detail" class="form-control"
                                                placeholder="Write a Details"></textarea>
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
        <!-- /End Add Category Modal-->
    </div>

@endsection

@section('scripts')

    <script>
        function store() {

            let formData = new FormData();

            formData.append('name', document.getElementById('name').value);
            formData.append('photo', document.getElementById('photo').files[0]);
            formData.append('detail', document.getElementById('detail').value);

            axios.post('/sensorial/dashboard/category', formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    window.location.href =
                        "/sensorial/dashboard/category"; // الانتقال الي الراوت المكتوب عند اضافة عنصر
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

    {{-- <script>
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
    </script> --}}

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
            axios.delete('/sensorial/dashboard/category/' + id)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    reference.closest('#category').remove();
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

@endsection
