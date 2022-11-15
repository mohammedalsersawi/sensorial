@extends('sensorial.dashboard.admins.admin-parent')

@section('title')
    Question
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap-datetimepicker.min.css') }}">
@endsection

@section('big-title')
    Question
@endsection

@section('button')
    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#addOption"><i class="fa fa-plus"></i>Add New
        Option
    </a>
@endsection

@section('small-title')
    <a href="{{ route('quiz.show', $question->quiz->id) }}">Index Questions</a>
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
                            <th hidden></th>
                            <th>ID</th>
                            <th>Question Name</th>
                            <th>Option Text</th>
                            <th>Points</th>
                            <th>Correct Option</th>
                            <th>Quiz Name</th>
                            <th class="text-right no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($question->options as $key => $option)
                            <tr>
                                <td hidden id="row_id">{{ $option->id }}</td>
                                <td>{{ ++$key }}</td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="{{ route('question.show', $option->question->id) }}"
                                            style="text-transform: capitalize;font-weight: 600">
                                            <label for=""class="question"
                                                style="cursor: pointer">{{ $option->question->question_name }}</label>
                                            <span style="font-weight: 600">Question</span></a>
                                    </h2>
                                </td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="{{ route('question.show', $option->id) }}"
                                            style="text-transform: capitalize;font-weight: 600">
                                            <label for=""class="o_name"
                                                style="cursor: pointer">{{ $option->option_text }}</label>
                                            <span style="font-weight: 600">Option {{ $key }}</span></a>
                                    </h2>
                                </td>
                                <td><label for="" class="pnt">{{ $option->points }}</label></td>
                                <td><span style="color: #fff; font-size: 14px;"
                                        class="badge @if ($option->points > '0') bg-inverse-success @else bg-inverse-danger @endif">
                                        @if ($option->points > '0')
                                            True Answer
                                        @else
                                            False Answer
                                        @endif
                                    </span>
                                </td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="#" style="text-transform: capitalize;font-weight: 600">
                                            <label for=""class="quiz_name"
                                                style="cursor: pointer">{{ $option->question->quiz->quiz_name }}</label>
                                            <span style="font-weight: 600">Quiz
                                                {{ $option->question->quiz->id }}</span></a>
                                    </h2>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item editOption" data-toggle="modal"
                                                data-target="#editOption"><i class="fa fa-pencil m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#"
                                                onclick="confirmDestroyOption({{ $option->id }}, this)"><i
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

    <!-- Add Option Modal-->

    <div id="addOption" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Option</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="well form-horizontal" id="contact_form">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Option Text</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="option_text" id="option_text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Points</label>
                                    <div class="col-lg-9">
                                        <input type="text" value="0" class="form-control" name="points"
                                            id="points">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Question</label>
                                    <div class="col-lg-9">
                                        <input type="hidden" name="question_id" id="question_id"
                                            value="{{ $question->id }}">
                                        <input type="text" name="question" id="question" readonly
                                            value="{{ $question->question_name }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button type="button" class="btn btn-primary" onclick="store()">Add
                                        Option</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /Add Option Modal -->

    <!-- Edit Option Modal-->

    <div id="editOption" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Option</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="well form-horizontal" id="contact_form">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Option Text</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="o_name" id="o_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Points</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="pnt" id="pnt">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Question Name</label>
                                    <div class="col-lg-9">
                                        <input type="hidden" value="{{ $question->id }}" name="o_id"
                                            id="o_id">
                                        <input type="text" value="{{ $question->question_name }}" readonly
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group text-right" id="update_id">

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /Edit Option Modal -->
@endsection

@section('scripts')
    <script>
        function store() {

            let formData = new FormData();

            formData.append('option_text', document.getElementById('option_text').value);
            formData.append('question_id', document.getElementById('question_id').value);
            formData.append('points', document.getElementById('points').value);

            axios.post('/sensorial/dashboard/option', formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('create-form').reset(); //عمل اعادة تحدث للصفحة بعد اضافة عنصر
                    // window.location.href = "/sensorial/dashboard/section"; // الانتقال الي الراوت المكتوب عند اضافة عنصر
                    window.location.reload();
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
            formData.append('o_name', document.getElementById('o_name').value);
            formData.append('o_id', document.getElementById('o_id').value);
            formData.append('pnt', document.getElementById('pnt').value);

            axios.post('/sensorial/dashboard/option/' + id, formData)
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
        $(document).on('click', '.editOption', function() {
            var _this = $(this).parents('tr');
            var row_id = _this.find('#row_id').text();
            console.log(row_id);
            var first = '<button type="button" onclick="update(';
            var second = ')" class="btn btn-primary">Update</button>';
            var last = first + row_id + second;
            $(document).find('#update_id').html(last);
            $('#o_name').val(_this.find('.o_name').text());
            $('#pnt').val(_this.find('.pnt').text());
        });
    </script>

    <script>
        function confirmDestroyOption(id, reference) {
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
            axios.delete('/sensorial/dashboard/option/' + id)
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
