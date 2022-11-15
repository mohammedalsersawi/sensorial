@extends('sensorial.dashboard.admins.admin-parent')

@section('title', 'Contacts')

@section('styles')

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('requirement/assets/css/bootstrap-datetimepicker.min.css') }}">

@endsection

@section('big-title', 'Contact Us')

@section('small-title')

    <a href="{{ route('contact.index') }}">Show Messages</a>

@endsection

@section('content')

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
        <!-- Search Filter -->

        <!-- Page Content -->

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover text-nowrap table-stripped table-bordered custom-table datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Message</th>
                                <th>Sending Date</th>
                                <th class="text-right no-sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $key => $message)
                                <tr style="max-width: 50px; height: 150px">
                                    <td id="row_id">{{ ++$key }}</td>
                                    <td class="user">{{ $message->name }}</td>
                                    <td class="mail">{{ $message->email }}</td>
                                    <td class="phone_number">{{ $message->phone }}</td>
                                    <td class="add">{{ $message->address }}</td>
                                    <td class="msg">{{ $message->message }}</td>
                                    <td><i class="las la-calendar"></i> <span
                                            class="date">{{ $message->created_at->isoFormat('LLLL') }}</span></td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item view" data-toggle="modal" data-target="#editModal"
                                                    href="#"><i class="fa fa-eye m-r-5"></i> View
                                                </a>
                                                <button class="dropdown-item delete_type"
                                                    onclick="confirmDestroy({{ $message->id }}, this)"><i
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

        <!-- view Message Modal -->

        <div id="editModal" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">User Message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="well form-horizontal" id="contact_form">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">User Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" readonly class="form-control" id="user"
                                                style="text-transform: capitalize">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">E-mail</label>
                                        <div class="col-lg-9">
                                            <input type="text" readonly class="form-control" id="mail">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Phone Number</label>
                                        <div class="col-lg-9">
                                            <input type="text" readonly class="form-control" id="phone_number">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Address</label>
                                        <div class="col-lg-9">
                                            <input type="text" readonly class="form-control" id="add"
                                                style="text-transform: capitalize">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sending Date</label>
                                        <div class="col-lg-9">
                                            <input type="text" readonly class="form-control" id="date"
                                                style="text-transform: capitalize">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Message</label>
                                        <div class="col-lg-9">
                                            <textarea class="form-control" id="msg" readonly></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group text-right">

                                        <button class="btn btn-success" data-dismiss="modal" aria-label="Close">
                                            Close <i class="las la-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- /view Message Modal -->


    </div>

@endsection

@section('scripts')

    <script>
        $(document).on('click', '.view', function() {
            var _this = $(this).parents('tr');
            var row_id = _this.find('#row_id').text();
            console.log(row_id);
            var first = '<button type="button" onclick="update(';
            var second = ')" class="btn btn-primary">Update</button>';
            var last = first + row_id + second;
            $(document).find('#update_id').html(last);
            $('#user').val(_this.find('.user').text());
            $('#mail').val(_this.find('.mail').text());
            $('#add').val(_this.find('.add').text());
            $('#phone_number').val(_this.find('.phone_number').text());
            $('#date').val(_this.find('.date').text());
            $('#msg').val(_this.find('.msg').text());
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
            axios.delete('/sensorial/dashboard/contact/' + id)
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

@endsection
