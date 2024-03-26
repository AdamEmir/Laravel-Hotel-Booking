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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('guest_name');
            $table->String('email');
            $table->String('phone_number');
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('guest_number');
            $table->String('room_type');
            $table->enum('smoking_preferences', ['yes', 'no'])->default('no');
            $table->enum('breakfast_buffet', ['yes', 'no'])->default('no');
            $table->enum('dinner_buffet', ['yes', 'no'])->default('no');
            $table->string('remarks_questions');
            $table->string('damage_remarks');
            $table->double('total_fine', 8, 2);
            $table->string('employee_id');
            $table->String('employee_name');
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
        Schema::dropIfExists('bookings');
    }
};
