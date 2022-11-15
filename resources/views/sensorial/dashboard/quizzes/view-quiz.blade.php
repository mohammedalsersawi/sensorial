@extends('sensorial.dashboard.admins.admin-parent')

@section('styles')
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap-datetimepicker.min.css') }}">
@endsection

@section('title')
    {{ $quiz->quiz_name }} Quiz
@endsection


@section('big-title', 'View Quiz')

@section('small-title')
    <a href="{{ route('quiz.index') }}">Index Quizzes</a>
@endsection

@section('content')
    <div class="card mb-0">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>{{ $quiz->quiz_name }} Quiz</h3>
                            <div class="card tab-box">
                                <div class="row user-tabs">
                                    <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                                        <ul class="nav nav-tabs nav-tabs-bottom">
                                            <li class="nav-item"><a href="#quiz" data-toggle="tab"
                                                    class="nav-link active">Quiz</a></li>
                                            <li class="nav-item"><a href="#table" data-toggle="tab"
                                                    class="nav-link">Table</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content">
                                <div id="quiz" class="pro-overview tab-pane fade show active">
                                    <div class="row">
                                        <div class="col-md-12 d-flex">
                                            <div class="card profile-box flex-fill">
                                                <div class="card-body">
                                                    <h4>{{ $quiz->course->course_name }} Course <i
                                                            class="fa fa-arrow-right m-r-5"></i>
                                                        {{ $quiz->section->section_name }} Section <i
                                                            class="fa fa-arrow-right m-r-5"></i>
                                                        {{ $quiz->quiz_name }} Quiz</h4>
                                                    <h2 class="card-title" style="text-align: center; font-size: 22px">
                                                        {{ $quiz->quiz_name }}
                                                        Quiz</h2>
                                                    <hr>
                                                    @foreach ($quiz->questions as $key => $question)
                                                        <div class="form-group">
                                                            <label style="font-size: 18px; color:red" class="d-block">*
                                                                Question
                                                                {{ ++$key }}:
                                                                <span
                                                                    style="font-size: 16px; color: black">{{ $question->question_name }}</span></label>
                                                            @foreach ($question->options as $option)
                                                                <div class="form-check form-check-inline">

                                                                    <input class="form-check-input" type="radio">
                                                                    <label
                                                                        class="form-check-label">{{ $option->option_text }}</label>

                                                                </div>

                                                                <br>
                                                            @endforeach
                                                            <br>
                                                            <label for="">Answer:
                                                                <span style="color: #fff; font-size: 14px;"
                                                                    class="badge @if ($option->points > '0') bg-inverse-success @else bg-inverse-danger @endif">
                                                                    @if ($option->points > '0')
                                                                        {{ $option->option_text }}
                                                                    @else
                                                                        Doesn't Answer Yet !
                                                                    @endif
                                                                </span>

                                                            </label>
                                                        </div>
                                                        <hr>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- announcements Tab -->
                                <div class="tab-pane fade" id="table">
                                    <div class="row">
                                        <div class="col-md-12 d-flex">
                                            <div class="card profile-box flex-fill">
                                                <div class="card-body">
                                                    <h2 style="font-size: 25px" class="card-title"></i>Questions</h2>
                                                    <a href="#" class="btn add-btn" data-toggle="modal"
                                                        data-target="#addQuestion"><i class="fa fa-plus"></i> Add New
                                                        Question
                                                    </a>
                                                    <div class="table-responsive">
                                                        <table style="width: 100%"
                                                            class="table table-hover text-nowrap table-stripped table-bordered custom-table datatable">
                                                            <thead>
                                                                <tr>
                                                                    <th hidden></th>
                                                                    <th>ID</th>
                                                                    <th>Question Name</th>
                                                                    <th>Quiz Name</th>
                                                                    <th>Course Name</th>
                                                                    <th class="text-right no-sort">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($quiz->questions as $key => $question)
                                                                    <tr>
                                                                        <td id="row_id" class="q_id" hidden>
                                                                            {{ $question->id }}</td>
                                                                        <td>{{ ++$key }}</td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="{{ route('question.show', $question->id) }}"
                                                                                    style="text-transform: capitalize;font-weight: 600">
                                                                                    <label for=""class="q_name"
                                                                                        style="cursor: pointer">{{ $question->question_name }}</label>
                                                                                    <span style="font-weight: 600">Question
                                                                                        {{ $key }}</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="#"
                                                                                    style="text-transform: capitalize;font-weight: 600">
                                                                                    <label for=""class="quiz"
                                                                                        style="cursor: pointer">{{ $question->quiz->quiz_name }}</label>
                                                                                    <span
                                                                                        style="font-weight: 600">Quiz</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <a href="#"
                                                                                    style="text-transform: capitalize;font-weight: 600">
                                                                                    <label for=""class="quiz_name"
                                                                                        style="cursor: pointer">{{ $question->quiz->course->course_name }}</label>
                                                                                    <span
                                                                                        style="font-weight: 600">Course</span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <div class="dropdown dropdown-action">
                                                                                <a href="#"
                                                                                    class="action-icon dropdown-toggle"
                                                                                    data-toggle="dropdown"
                                                                                    aria-expanded="false"><i
                                                                                        class="material-icons">more_vert</i></a>
                                                                                <div
                                                                                    class="dropdown-menu editQuestion dropdown-menu-right">
                                                                                    <a class="dropdown-item"
                                                                                        href="{{ route('question.show', $question->id) }}"><i
                                                                                            class="fa fa-plus m-r-5"></i>
                                                                                        Add Options</a>
                                                                                    <a class="dropdown-item editQuestion"
                                                                                        data-toggle="modal"
                                                                                        data-target="#editQuestion"><i
                                                                                            class="fa fa-pencil m-r-5"></i>
                                                                                        Edit</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#"
                                                                                        onclick="confirmDestroyQuestion({{ $question->id }}, this)"><i
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /End announcements Tab-->


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Question Modal-->
    <div id="addQuestion" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Question</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="well form-horizontal" id="contact_form">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Question Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="question_name"
                                            id="question_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Quiz Name</label>
                                    <div class="col-lg-9">
                                        <input type="hidden" name="quiz_id" id="quiz_id"
                                            value="{{ $quiz->id }}">
                                        <input type="text" name="quiz" id="quiz" readonly
                                            value="{{ $quiz->quiz_name }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button type="button" class="btn btn-primary" onclick="store()">Add
                                        Question</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Question Modal -->

    <!-- Edit Question Modal-->
    <div id="editQuestion" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Question</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="well form-horizontal" id="contact_form">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Question Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="q_name" id="q_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Quiz Name</label>
                                    <div class="col-lg-9">
                                        <input type="hidden" value="{{ $quiz->id }}" name="q_id"
                                            id="q_id">
                                        <input type="text" name="edit_quiz" id="edit_quiz" readonly
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
    <!-- /Edit Question Modal -->
@endsection

@section('scripts')
    <script>
        function store() {

            let formData = new FormData();

            formData.append('question_name', document.getElementById('question_name').value);
            formData.append('quiz_id', document.getElementById('quiz_id').value);

            axios.post('/sensorial/dashboard/question', formData)
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
            formData.append('q_name', document.getElementById('q_name').value);
            formData.append('q_id', document.getElementById('q_id').value);

            axios.post('/sensorial/dashboard/question/' + id, formData)
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
        $(document).on('click', '.editQuestion', function() {
            var _this = $(this).parents('tr');
            var row_id = _this.find('#row_id').text();
            console.log(row_id);
            var first = '<button type="button" onclick="update(';
            var second = ')" class="btn btn-primary">Update</button>';
            var last = first + row_id + second;
            $(document).find('#update_id').html(last);
            $('#q_name').val(_this.find('.q_name').text());
            $('#edit_quiz').val(_this.find('.quiz').text());
        });
    </script>

    <script>
        function confirmDestroyQuestion(id, reference) {
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
            axios.delete('/sensorial/dashboard/question/' + id)
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
