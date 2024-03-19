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

        //create a new product
        $booking->update($request->all());

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
