<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StaffController;
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
//     return view('welcome');
// });

//Route for login

Route::controller(LoginController::class)->as('authentications.')->group(function(){
    Route::get('/', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LoginController::class, 'logout']);
});

//Route for regiter new user

Route::controller(RegisterController::class)->as('registers.')->group(function(){
    Route::get('/daftar', [RegisterController::class, 'showRegister'])->name('index');
    Route::post('/register',[RegisterController::class, 'register']);
});

// For Admin
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin-dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');
// });

Route::middleware(['auth', 'admin'])->as('admin.')->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'showDashboard'])->name('index');
});

// For Staff
Route::middleware(['auth', 'staff'])->group(function () {
    Route::get('/staff-dashboard', [StaffController::class, 'showDashboard'])->name('index');
    Route::get('/staff-booking', [StaffController::class, 'showBooking'])->name('booking');

    //Route for index CRUD
    Route::prefix('tempah')
    ->as('bookings.')
    ->group(function (){
    Route::get('/mula', [BookingController::class, 'index'])->name('booking');
    Route::post('/simpan', [BookingController::class, 'store'])->name('store');
    Route::post('/kemaskini/{booking}', [BookingController::class, 'update'])->name('edit');
    Route::get('/tunjuk', [BookingController::class, 'show'])->name('show');
    Route::get('/home', [StaffController::class, 'showDashboard'])->name('index');
    Route::delete('/hapus/{booking}', [BookingController::class, 'destroy'])->name('destroy');
});
});




