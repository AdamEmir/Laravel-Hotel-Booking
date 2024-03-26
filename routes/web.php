<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('bookings.index');
// });


Route::prefix('tempah')
->as('bookings.')
->group(function (){
    Route::get('/', [BookingController::class, 'index']);
    Route::get('/tambah', [BookingController::class, 'create'])->name('create');
    Route::get('/kemaskini', [BookingController::class, 'edit'])->name('edit');
    Route::get('/tunjuk', [BookingController::class, 'show'])->name('show');
    Route::get('/simpan', [BookingController::class, 'store'])->name('store');
    Route::get('/home', [BookingController::class, 'index'])->name('index');
    Route::delete('/hapus/{booking}', [BookingController::class, 'destroy'])->name('destroy');
});

// Route::resource('bookings', BookingController::class);

Route::controller(BookingController::class)->group(function(){
    Route::post('/tambah','store');
    Route::post('/kemaskini/{booking}','update');
    Route::delete('/hapus', [BookingController::class, 'destroy'])->name('destroy');
});