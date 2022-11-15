@extends('sensorial.dashboard.admins.admin-parent')

@section('title', 'View Category')

@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Tagsinput CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">

@endsection

@section('big-title')

    View Category

@endsection

@section('small-title')

    <a href="{{ route('category.index') }}">Index Categories</a>

@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <h4 class="payslip-title">View {{ $category->category_name }} Category</h4>
            <div class="row">
                <div class="col-sm-6 m-b-20">
                    <img src="{{ asset('requirement/uploads/category_photo/' . $category->category_photo) }}"
                        class="inv-logo" alt="">
                </div>
                <div class="col-sm-6 m-b-20">
                    <div class="invoice-details">
                        <h3 class="text-uppercase">{{ $category->category_name }}</h3>
                        <ul class="list-unstyled">
                            <li>Added At: <span>{{ $category->created_at }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 m-b-20">
                    <ul class="list-unstyled">
                        <li>
                            <h5 class="mb-0 cn" style="text-transform: capitalize"><strong>{{ $category->category_name }}
                                    Category</strong></h5>
                        </li>
                        <br>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="card tab-box">
        <div class="row user-tabs">
            <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                <ul class="nav nav-tabs nav-tabs-bottom">
                    <li class="nav-item"><a href="#description" data-toggle="tab" class="nav-link active">Description</a>
                    </li>
                    <li class="nav-item"><a href="#courses" data-toggle="tab" class="nav-link">Courses</a></li>
                    <li class="nav-item"><a href="#categories" data-toggle="tab" class="nav-link">Other Categories</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="tab-content">

        <!-- Description Tab -->
        <div id="description" class="pro-overview tab-pane fade show active">
            <div class="row">
                <div class="col-md-12 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body category">
                            <h3 class="card-title">Category Details <a href="#" class="edit-icon editCategory"
                                    data-toggle="modal" data-target="#editCategory"><i class="fa fa-pencil"></i></a>
                            </h3>
                            <ul class="personal-info">
                                <li hidden id="category_id">
                                    {{ $category->id }}
                                </li>
                                <li>
                                    <div class="title">Category Name</div>
                                    <div class="text categoryName">{{ $category->category_name }}</div>
                                </li>
                                <li>
                                    <div class="title">Category Details</div>
                                    <div class="text categoryDetail">{{ $category->category_details }}
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Edit Category Modal-->

            <div id="editCategory" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Course Informations</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="well form-horizontal" id="contact_form"
                                action="{{ route('course.update', $category->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Category Name</label>
                                            <div class="col-lg-9">
                                                <input style="text-transform: capitalize" name="category_name"
                                                    id="category_name" type="text" class="form-control">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Category Photo</label>
                                            <div class="col-lg-9">
                                                <input style="text-transform: capitalize" name="category_photo"
                                                    id="category_photo" type="file" class="form-control">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Category Details</label>
                                            <div class="col-lg-9">
                                                <input style="text-transform: capitalize" name="category_detail"
                                                    id="category_detail" type="text" class="form-control">

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

            <!-- /Edit Description Modal-->
        </div>
        <!-- /Description Tab -->

        <!-- Courses Tab -->
        <div class="tab-pane fade" id="courses">
            <div class="row staff-grid-row">

                @foreach ($courses as $course)
                    <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                        <div class="profile-widget">
                            <div class="profile-img">
                                <a href="{{ route('course.show', $course->id) }}" class="avatar"><img
                                        src="{{ asset('requirement/uploads/course_photo/' . $course->course_photo) }}"
                                        alt=""></a>
                            </div>
                            <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a
                                    href="profile.html">{{ $course->course_name }}</a></h4>
                            <div class="small text-muted"></div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <!-- /Courses Tab -->

        <!-- Categories Tab -->
        <div class="tab-pane fade" id="categories">
            <div class="row staff-grid-row">

                @foreach ($categories as $category)
                    <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                        <div class="profile-widget">
                            <div class="profile-img">
                                <a href="{{ route('category.show', $category->id) }}" class="avatar"><img
                                        src="{{ asset('requirement/uploads/category_photo/' . $category->category_photo) }}"
                                        alt=""></a>
                            </div>
                            <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a
                                    href="profile.html">{{ $category->category_name }}</a></h4>
                            <div class="small text-muted">{{ $category->category_details }}</div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <!-- /Categories Tab -->

    </div>

@endsection

@section('scripts')
    <script>
        function update(id) {

            const formData = new FormData();

            formData.append('_method', 'PUT');
            formData.append('category_name', document.getElementById('category_name').value);
            formData.append('category_photo', document.getElementById('category_photo').files[0]);
            formData.append('category_detail', document.getElementById('category_detail').value);

            axios.post('/sensorial/dashboard/category/' + id, formData)
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

    <script>
        $(document).on('click', '.editCategory', function() {
            var _this = $(this).parents('.category');
            var row_id = _this.find('#category_id').text();
            console.log(row_id);
            var first = '<button type="button" onclick="update(';
            var second = ')" class="btn btn-primary">Update</button>';
            var last = first + row_id + second;
            $(document).find('#update_id').html(last);
            $('#category_id').val(_this.find('.categ_id').text());
            $('#category_name').val(_this.find('.categoryName').text());
            $('#category_detail').val(_this.find('.categoryDetail').text());
        });
    </script>

    <script src="{{ asset('reqirement/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>


@endsection
