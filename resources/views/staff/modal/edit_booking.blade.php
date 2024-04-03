<div class="modal fade" id="bookingEditModal{{ $booking->id }}" tabindex="-1" role="dialog"
    aria-labelledby="staticBackDrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Room Booking</h5>
            </div>
            <div class="modal-body">
                <form action="/tempah/kemaskini/{{ $booking->id }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5>Guest Information</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                    class="bx bx-user"></i></span>
                                            <input type="text" class="form-control" id="guest_name" name="guest_name"
                                                placeholder="John Doe" aria-label="John Doe"
                                                value="{{ $booking->guest_name }}"
                                                aria-describedby="basic-icon-default-fullname2" />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-company">Buffet</label>
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="checkbox" id="breakfast_buffet"
                                                name="breakfast_buffet" value="yes"
                                                {{ $booking->breakfast_buffet === 'yes' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="inlineCheckbox1">Breakfast</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="dinner_buffet"
                                                name="dinner_buffet" value="yes"
                                                {{ $booking->dinner_buffet === 'yes' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="inlineCheckbox2">Dinner</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-company">Smoking
                                            Preference?</label>
                                        <div class="form-check form-check-inline mt-3">
                                            <input name="smoking_preferences" class="form-check-input" type="radio"
                                                value="no" id="smoking_preferences"
                                                {{ $booking->smoking_preferences === 'no' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="defaultRadio1"> No </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="smoking_preferences" class="form-check-input" type="radio"
                                                value="yes" id="smoking_preferences"
                                                {{ $booking->smoking_preferences === 'yes' ? 'checked' : '' }} />
                                            <label class="form-check-label" for="defaultRadio1"> Yes </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-phone">Phone No</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                    class="bx bx-phone"></i></span>
                                            <input type="text" id="phone_number" name="phone_number"
                                                class="form-control phone-mask" placeholder="01X-XXXXXXX"
                                                aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2"
                                                value="{{ $booking->phone_number }}" />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-email">Email</label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                            <input type="text" id="email" name="email" class="form-control"
                                                placeholder="john.doe" aria-label="john.doe"
                                                aria-describedby="basic-icon-default-email2"
                                                value="{{ $booking->email }}" />
                                            <span id="basic-icon-default-email2"
                                                class="input-group-text">@example.com</span>
                                        </div>
                                        <div class="form-text">You can use letters, numbers & periods</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="check_in" class="col-md-2 col-form-label">Check in</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="date" id="check_in"
                                                name="check_in" value="{{ $booking->check_in }}" />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="check_out" class="col-md-2 col-form-label">Check
                                            Out</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="date" id="check_out"
                                                name="check_out" value="{{ $booking->check_out }}" />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="guest_number" class="col-md-2 col-form-label">Number of
                                            Guest</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number"
                                                value="{{ $booking->guest_number }}" id="guest_number"
                                                name="guest_number" />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="defaultSelect" class="form-label">Room Type</label>
                                        <select id="room_type" name="room_type" class="form-select">
                                            <option value="{{ $booking->room_type }}">
                                                {{ $booking->room_type }}</option>
                                            <option value="Single">Single</option>
                                            <option value="Deluxe">Deluxe</option>
                                            <option value="Suite">Suite</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Remarks /
                                            Questions</label>
                                        <textarea class="form-control" id="remarks_questions" name="remarks_questions" rows="3">{{ $booking->remarks_questions }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Damage
                                            Remarks</label>
                                        <textarea class="form-control" id="damage_remarks" name="damage_remarks" rows="3">{{ $booking->damage_remarks }}</textarea>
                                    </div>
                                    <div class="mb-5">
                                        <label for="exampleFormControlTextarea1" class="form-label">Total Fine</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">RM</span>
                                            <input type="number" name="total_fine" class="form-control"
                                                aria-label="Amount (to the nearest dollar)" placeholder="0.00"
                                                value="{{ $booking->total_fine }}" />
                                        </div>
                                    </div>

                                    <div class="align-items-right"><button type="submit"
                                            class="btn btn-primary">Submit</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
