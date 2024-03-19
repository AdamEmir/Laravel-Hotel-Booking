<x-layout>
    <div class="row">
        <div class="col-9">
            <h3>Welcome, Adam</h3>
        </div>
        <div class="col-3 d-flex justify-content-center ps-4">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('bookings.create') }}">New Booking</a>
            </div>
        </div>
    </div>
    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-hover">
        <tr>
            <th class="table-dark">ID</th>
            <th class="table-dark">Name</th>
            <th class="table-dark">Check In</th>
            <th class="table-dark">Check Out</th>
            <th class="table-dark" width="280px">Action</th>
        </tr>
        @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->guest_name }}</td>
                <td>{{ $booking->check_in }}</td>
                <td>{{ $booking->check_out }}</td>
                <td class="d-flex justify-content-center">
                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST">
                        <a class="btn btn-info" data-idUpdate="'.$booking->id.'" data-toggle="modal"
                            data-target="#bookingModal">Show</a>
                        <a class="btn btn-primary" href="{{ route('bookings.edit', $booking->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $bookings->links() }}

    <!-- Start Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">Booking Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Guest Name:</strong>
                                {{ $booking->guest_name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Details:</strong>
                                {{ $booking->employee_id }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal --}}
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
</x-layout>
