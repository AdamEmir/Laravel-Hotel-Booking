<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
     public function showDashboard()
    {
        return view('staff.index');
    }
}