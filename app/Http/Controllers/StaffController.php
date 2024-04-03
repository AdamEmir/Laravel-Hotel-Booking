<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class StaffController extends Controller
{
     public function showDashboard()
    {
        return view('staff.index');
    }

    public function showBooking()
    {
        $bookings = Booking::latest()->paginate(5);
        
        return view('staff.booking', compact('bookings'))->with(request()->input('page'));
    }
}
