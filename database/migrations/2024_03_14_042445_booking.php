<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->String('email');
            $table->String('phone_number');
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('guest_number');
            $table->String('room_type');
            $table->boolean('smoking_preferences');
            $table->boolean('breakfast_buffet');
            $table->boolean('dinner_buffet');
            $table->text('remarks_questions');
            $table->text('damage_remarks');
            $table->double('total_fine', 8, 2);
            $table->string('employee_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
};
