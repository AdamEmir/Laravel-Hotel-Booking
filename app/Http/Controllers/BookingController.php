<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::latest()->paginate(5);
        
        return view('bookings.index', compact('bookings'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //valide the input
        $request->validate([
            'guest_name' => 'required', 
            'email' => 'required', 
            'phone_number' => 'required', 
            'check_in' => 'required', 
            'check_out' => 'required', 
            'guest_number' => 'required',
            'room_type' => 'required', 
            'smoking_preferences' => 'required', 
            'breakfast_buffet' => 'nullable|in:yes,no', 
            'dinner_buffet' => 'nullable|in:yes,no',
            'remarks_questions' => 'required', 
            'damage_remarks' => 'required', 
            'total_fine' => 'required',
            'employee_name'=> 'required', 
            'employee_id' => 'required'
            
        ]);

        //create a new product
        Booking::create($request->all());

        //redirect the use and send friendly message
        return redirect()->route('bookings.index')->with('success','Booking created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('bookings.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {

        //validate the input
        $request->validate([
            'guest_name' => 'required', 
            'email' => 'required', 
            'phone_number' => 'required', 
            'check_in' => 'required', 
            'check_out' => 'required', 
            'guest_number' => 'required',
            'room_type' => 'required', 
            'smoking_preferences' => 'required', 
            'breakfast_buffet' => 'nullable|in:yes,no', 
            'dinner_buffet' => 'nullable|in:yes,no',
            'remarks_questions' => 'required', 
            'damage_remarks' => 'required', 
            'total_fine' => 'required', 
            'employee_name'=> 'required',
            'employee_id' => 'required'
            
        ]);

        //update the booking attributes
        $booking->guest_name = $request->input('guest_name');
        $booking->email = $request->input('email');
        $booking->phone_number = $request->input('phone_number');
        $booking->check_in = $request->input('check_in');
        $booking->check_out = $request->input('check_out');
        $booking->guest_number = $request->input('guest_number');
        $booking->room_type = $request->input('room_type');
        $booking->smoking_preferences = $request->input('smoking_preferences');
        $booking->breakfast_buffet = $request->input('breakfast_buffet');
        $booking->dinner_buffet = $request->input('dinner_buffet');
        $booking->remarks_questions = $request->input('remarks_questions');
        $booking->damage_remarks = $request->input('damage_remarks');
        $booking->total_fine = $request->input('total_fine');
        $booking->employee_name = $request->input('employee_name');
        $booking->employee_id = $request->input('employee_id');

        //save the updated booking
        $booking->save();

        //redirect the user and send friendly message
        return redirect()->route('bookings.index')->with('success','Booking updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
         //delete the product
        $booking->delete();

        //redirect the user and display success message
        return redirect()->route('bookings.index')->with('success','Booking deleted successfully');
    }
}
