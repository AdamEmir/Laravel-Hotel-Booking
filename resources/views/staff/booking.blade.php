@extends('staff.layouts.staff')

@section('content')
    <h1 class="pt-2">Hotel Booking</h1>
    <hr class="my-4" />
    <!-- Hoverable Table rows -->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10 text-left">
                    <h5 class=" mt-2">Booking Lists</h5>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>
                <div class="col-2 text-right">
                    <button type="button" class="btn btn-lg btn-primary" data-toggle="modal"
                        data-target="#bookingCreateModal">
                        <span class="tf-icons bx bx-add-to-queue"></span>&nbsp; Book
                    </button>
                </div>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Guest Name</th>
                        <th>Check In Date</th>
                        <th>Check Out Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($bookings as $booking)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $booking->id }}</strong>
                            </td>
                            <td>{{ $booking->guest_name }}</td>
                            <td>{{ $booking->check_in }}</td>
                            <td>{{ $booking->check_out }}</td>
                            <td>
                                <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="demo-inline-spacing">
                                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <button type="button" class="btn btn-icon btn-info" data-toggle="modal"
                                                data-target="#bookingModal{{ $booking->id }}">
                                                <span class="tf-icons bx bx-show"></span>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-primary" data-toggle="modal"
                                                data-target="#bookingEditModal{{ $booking->id }}">
                                                <span class="tf-icons bx bx-pen"></span>
                                            </button>
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-icon btn-danger">
                                                <span class="tf-icons bx bx-trash"></span>
                                            </button>
                                    </div>
                                </form>
                            </td>
                        </tr>

                        @include('staff.modal.show_booking')
                        @include('staff.modal.edit_booking')
                    @endforeach

                </tbody>
            </table>
            {{ $bookings->links() }}

            @include('staff.modal.add_booking')

        </div>
    </div>
    <!--/ Hoverable Table rows -->
    <hr class="my-4" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to handle modal opening when the button is clicked
            $('[data-toggle="modal"]').click(function() {
                var targetModal = $(this).data('target');
                $(targetModal).modal('show');
            });

            // Function to handle modal closing when the close button is clicked
            $('.modal .close, .modal .modal-footer .btn-secondary').click(function() {
                $(this).closest('.modal').modal('hide');
            });

            // Function to handle modal closing when clicking outside the modal
            $('.modal').on('click', function(event) {
                if ($(event.target).is('.modal')) {
                    $(this).modal('hide');
                }
            });
        });
    </script>
@endsection
