<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
'guest_name', 'email', 'phone_number', 'check_in', 'check_out', 'guest_number',
'room_type', 'smoking_preferences', 'breakfast_buffet', 'dinner_buffet',
'remarks_questions', 'damage_remarks', 'total_fine', 'employee_id','employee_name'
    ];
}
