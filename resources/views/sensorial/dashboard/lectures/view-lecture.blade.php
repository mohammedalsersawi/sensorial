@extends('sensorial.dashboard.admins.admin-parent')

@section('styles')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Tagsinput CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
@endsection

@section('title', 'View Lecture')

@section('big-title')

    View Lecture

@endsection

@section('small-title')

    <a href="{{ route('course.index') }}">Index Courses</a>

@endsection

@section('content')
    <div class="card mb-0">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="payslip-title">View {{ $lecture->lecture_name }} Lecture</h4>
                            <div class="row">
                                <div class="col-lg-12 m-b-20">
                                    <ul class="list-unstyled">
                                        <li>
                                            <h5 class="mb-0 cn" style="text-transform: capitalize">
                                                <strong>{{ $lecture->lecture_name }} Lecture</strong>
                                            </h5>
                                        </li>
                                        <br>
                                    </ul>
                                </div>
                            </div>

                            <div class="card tab-box">
                                <div class="row user-tabs">
                                    <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                                        <ul class="nav nav-tabs nav-tabs-bottom">
                                            <li class="nav-item"><a href="#lecture" data-toggle="tab"
                                                    class="nav-link active">Lecture</a></li>
                                            <li class="nav-item"><a href="#announcements" data-toggle="tab"
                                                    class="nav-link">Announcement</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content">

                                <!-- Lecture Tab -->

                                <div id="lecture" class="pro-overview tab-pane fade show active">
                                    <div class="row">
                                        <div class="col-md-12 d-flex">
                                            <div class="card profile-box flex-fill">
                                                <div class="card-body">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- /End Lecture Modal-->

                                <!-- announcements Tab -->

                                <div id="announcements" class="pro-overview tab-pane fade show active">
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-lg-12 d-flex">
                                            <div class="card flex-fill">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">Announcement Post</h5>
                                                </div>
                                                {{-- <div class="card-body">
                                                    <h3>Post Content</h3>
                                                    <p class="card-text">{{ $lecture->announcement->announcement_text }}</p>
                                                    <hr>
                                                    <div class="row">
                                                        @foreach ($lecture->announcement->announce_comments as $comment)
                                                            <div class="col-12 col-md-6 col-lg-4 d-flex">
                                                                <div class="card flex-fill">
                                                                    <div class="card-header">
                                                                        <ul role="tablist"
                                                                            class="nav nav-tabs card-header-tabs float-right">
                                                                            <li class="nav-item">
                                                                                <a href="#tab-1" data-toggle="tab"
                                                                                    class="nav-link active">Comment &
                                                                                    Replies</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="tab-content pt-0">
                                                                            <div role="tabpanel" id="tab-1"
                                                                                class="tab-pane fade text-center active show">
                                                                                <h2 class="table-avatar">
                                                                                    <a href="{{ route('student.show', $comment->student->id) }}"
                                                                                        class="avatar"> <img width="100%"
                                                                                            height="100%"
                                                                                            src="{{ asset('requirement/uploads/photo/' . $comment->student->user->photo) }}"></a>
                                                                                    <a href="{{ route('student.show', $comment->student->id) }}"
                                                                                        style="color: #222;text-transform: capitalize;font-weight: 600; font-size: 18px"
                                                                                        class="name_en">{{ $comment->student->user->name_en }}
                                                                                        <span
                                                                                            style="font-weight: 600">Student</span></a>
                                                                                </h2>
                                                                                <h4>{{ $comment->comment }}</h4>
                                                                                <hr>
                                                                                <p>Replies: </p>
                                                                                @if (count($comment->replies) > 0)
                                                                                    @foreach ($comment->replies as $replay)
                                                                                        <h2 class="table-avatar">
                                                                                            <a href="{{ route('student.show', $replay->student->id) }}"
                                                                                                class="avatar"> <img
                                                                                                    width="100%"
                                                                                                    height="100%"
                                                                                                    src="{{ asset('requirement/uploads/photo/' . $replay->student->user->photo) }}"></a>
                                                                                            <a href="{{ route('student.show', $replay->student->id) }}"
                                                                                                style="color: #222;text-transform: capitalize;font-weight: 600; font-size: 14px"
                                                                                                class="name_en">{{ $replay->student->user->name_en }}
                                                                                                <span
                                                                                                    style="font-weight: 600">Student</span></a>
                                                                                        </h2>
                                                                                        <h4>{{ $replay->replay }}</h4>
                                                                                    @endforeach
                                                                                @else
                                                                                    <h4>No one are replayed</h4>
                                                                                @endif

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div> --}}
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


@endsection

@section('scripts')

@endsection
