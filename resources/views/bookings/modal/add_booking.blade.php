<div class="modal fade" id="bookingCreateModal" tabindex="-1" role="dialog" aria-labelledby="staticBackDrop"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Room Booking</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/simpanan" method="POST">
                    @csrf
                    <div class="form-group">

                        <div class="container-sm rounded p-4" style="border: 2px solid #adb5bd">
                            <div class="col-lg-7 margin-tb">
                                <div class="pull-left">
                                    <h4>Personel-In-Charge</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 order-1">
                                    <div class="form-group">
                                        <strong>Employee ID:</strong>
                                        <div class="row">
                                            <select class="form-select" name="employee_id" id="employee_id"
                                                class="room-select" aria-label="Default select example">
                                                <option value="10101">10101</option>
                                                <option value="12011">12011</option>
                                                <option value="12431">12431</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8 order-2">
                                    <strong>Employee Name:</strong>
                                    <div class="col-sm-8 order-3">
                                        <input type="text" name="employee_name" class="form-control"
                                            placeholder="Employee Name" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="form-group">
                            <div class="container-sm rounded p-4" style="border: 2px solid #adb5bd">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-left">
                                        <h4>Guest Information</h4>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Full Name: </strong><input type="text" name="guest_name"
                                            class="form-control" placeholder="Full Name" />
                                    </div>
                                </div>
                                <br />
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Phone Number: </strong><input type="text" name="phone_number"
                                            class="form-control" placeholder="Phone Number" />
                                    </div>
                                </div>
                                <br />
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Email: </strong><input type="email" name="email"
                                            class="form-control" placeholder="Email" />
                                    </div>
                                </div>
                                <br />
                                <div class="row align-items-start">
                                    <div class="col-6">
                                        <strong>Check In: </strong><input type="date" name="check_in"
                                            class="form-control" placeholder="Check In" />
                                    </div>
                                    <div class="col-6">
                                        <strong>Check Out: </strong><input type="date" name="check_out"
                                            class="form-control" placeholder="Check Out" />
                                    </div>
                                </div>
                                <br />

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Guest Number: </strong><input type="number" name="guest_number"
                                            class="form-control" placeholder="Guest Number" />
                                    </div>
                                </div>
                                <br />

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <strong>Select Room Type:</strong><br /> <br />
                                        <select class="form-select" name="room_type" id="room_type" class="room-select"
                                            aria-label="Default select example">
                                            <option value="single">Single</option>
                                            <option value="deluxe">Deluxe</option>
                                            <option value="suite">Suite</option>
                                        </select>
                                    </div>
                                    <br />
                                </div>



                                <div class="col-sm-7">
                                    <strong>Smoking Preferences: </strong>
                                    <br /><br />
                                    <div class="row">
                                        <div class="col-sm-1 order-1">
                                            <input type="radio" name="smoking_preferences" id="smoking_preferences"
                                                value="0" class="form-check-input" />
                                        </div>
                                        <div class="col-sm-2 order-2">
                                            <label for="smokeNo">No</label>
                                        </div>
                                        <div class="col-sm-1 order-3">
                                            <input type="radio" name="smoking_preferences" id="smoking_preferences"
                                                value="1" class="form-check-input" />
                                        </div>
                                        <div class="col-sm-2 order-4">
                                            <label for="smokeYes">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2">
                                        <div class="form-group"><br /><br /></div>
                                    </div>
                                </div>
                                <div class="col-sm-5 order-3">
                                    <strong>Food Package: </strong>
                                    <br /><br />
                                    <div class="row">
                                        <div class="col-sm-1 order-1">
                                            <input type="checkbox" name="breakfast_buffet" id="breakfast_buffet"
                                                value="yes" class="form-check-input" />
                                        </div>
                                        <div class="col-sm-5 order-2">
                                            <label for="breakfastbuffet">Breakfast Buffet</label>
                                        </div>
                                        <div class="col-sm-1 order-3">
                                            <input type="checkbox" name="dinner_buffet" id="dinner_buffet"
                                                value="yes" class="form-check-input" />
                                        </div>
                                        <div class="col-sm-4 order-4">
                                            <label for="dinnerbuffet">Dinner Buffet</label>
                                        </div>
                                    </div>
                                    <br />
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Remarks/Questions: </strong>
                                        <textarea class="form-control" style="height: 150px" name="remarks_questions" placeholder="Remarks/Questions"></textarea>
                                    </div>
                                </div>
                                <br />
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Damage Remarks: </strong>
                                        <textarea class="form-control" style="height: 150px" name="damage_remarks" placeholder="Damage Remarks"></textarea>
                                    </div>
                                </div>
                                <br />
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Total Fine: </strong>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">RM</span>
                                            <input type="number" name="total_fine" class="form-control"
                                                aria-label="Amount (to the nearest dollar)" placeholder="0.00" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="container">
                            <div class="row justify-content-end">
                                <button type="button" class="p-10 btn btn-warning col-3 mx-4">
                                    Reset
                                </button>
                                <button type="submit" class="btn btn-primary col-5">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
