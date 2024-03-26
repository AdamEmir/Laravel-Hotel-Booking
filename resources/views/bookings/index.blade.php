<x-layout>
    <div class="row">
        <div class="col-9">
            <h3>Welcome, Adam</h3>
        </div>
        <div class="col-3 d-flex justify-content-center ps-4">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#bookingCreateModal">New
                    Booking</button>
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
                        <a class="btn btn-info" data-toggle="modal"
                            data-target="#bookingModal{{ $booking->id }}">Show</a>
                        <a class="btn btn-primary" data-toggle="modal"
                            data-target="#bookingEditModal{{ $booking->id }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

            @include('bookings.modal.show_booking')
            @include('bookings.modal.edit_booking')
        @endforeach
    </table>

    {{ $bookings->links() }}

    @include('bookings.modal.add_booking')

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
