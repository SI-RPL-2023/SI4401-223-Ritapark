<?php

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

Route::get("/", function () {
    return view("welcome");
});


Route::group(['middleware' => ["Role"], 'as' => 'adm.'], function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('admin/ticket',TicketController::class);
    Route::get('/admin/ticket/delete/{id}', [TicketController::class,'destroy'])->name('ticket.hapus');
    Route::get('/admin/booking', [BookingController::class, 'index'])->name('booking.index');
});