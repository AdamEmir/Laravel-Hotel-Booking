 <div class="modal fade" id="bookingModal{{ $booking->id }}" tabindex="-1" role="dialog"
     aria-labelledby="bookingModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="bookingModalLabel">Booking Details</h5>
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
                             <strong>Check in:</strong>
                             {{ $booking->check_in }}
                         </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12">
                         <div class="form-group">
                             <strong>Check out:</strong>
                             {{ $booking->check_out }}
                         </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12">
                         <div class="form-group">
                             <strong>Room type:</strong>
                             {{ $booking->room_type }}
                         </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12">
                         <div class="form-group">
                             <strong>Number of guest:</strong>
                             {{ $booking->guest_number }}
                         </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12">
                         <div class="form-group">
                             <strong>Smoking Preference:</strong>
                             {{ $booking->smoking_preferences }}
                         </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12">
                         <div class="form-group">
                             <strong>Buffet Breakfast:</strong>
                             {{ $booking->breakfast_buffet }}
                         </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12">
                         <div class="form-group">
                             <strong>Buffet Dinner:</strong>
                             {{ $booking->dinner_buffet }}
                         </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12">
                         <div class="form-group">
                             <strong>Guest Request:</strong>
                             {{ $booking->remarks_questions }}
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
