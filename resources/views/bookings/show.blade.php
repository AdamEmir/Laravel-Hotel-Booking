<x-layout>
    <div class="row">
        <div class="col-9">
            <h3>Booking Information</h3>
        </div>
        <div class="col-3 d-flex justify-content-center ps-4">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('bookings.index') }}">Back</a>
            </div>
        </div>
    </div>
    <br>

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
    <!-- Button to trigger the modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookingModal">
        Open Modal
    </button>


</x-layout>
