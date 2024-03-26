<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Route::get('/bookings.index', function () {
//     return view('bookings.index');
// })->middleware(['auth', 'verified'])->name('bookings.index');

// Route::middleware('auth')->as('bookings.')->group(function () {
//     Route::get('/', [BookingController::class, 'index']);
//     Route::get('/tambah', [BookingController::class, 'create'])->name('create');
//     Route::get('/kemaskini', [BookingController::class, 'edit'])->name('edit');
//     Route::get('/tunjuk', [BookingController::class, 'show'])->name('show');
//     Route::get('/simpan', [BookingController::class, 'store'])->name('store');
//     Route::get('/home', [BookingController::class, 'index'])->name('index');    
//     Route::delete('/hapus/{booking}', [BookingController::class, 'destroy'])->name('destroy');
//     Route::post('/simpanan', [BookingController::class, 'store'])->name('store');
//     Route::post('/kemaskini/{booking}', [BookingController::class, 'update'])->name('update');
//     Route::delete('/hapus/{booking}', [BookingController::class, 'destroy'])->name('destroy');
// });

require __DIR__.'/auth.php';
