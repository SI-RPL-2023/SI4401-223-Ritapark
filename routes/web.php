<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\WahanaController;
use App\Http\Controllers\TestimoniController;
use App\Http\Middleware;

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

Route::get('/', [FrontendController::class,'index'])->name('home');

Route::group(['middleware' => ["Role"], 'as' => 'adm.'], function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('admin/ticket', TicketController::class);
    Route::resource('admin/wahana', WahanaController::class);
    Route::get('/admin/ticket/delete/{id}', [TicketController::class, 'destroy'])->name('ticket.hapus');
    Route::get('/admin/wahana/delete/{id}', [WahanaController::class, 'destroy'])->name('wahana.hapus');
    Route::get('/admin/booking', [BookingController::class, 'index'])->name('booking.index');
});

// Route::get('/', [UserController::class, 'welcome'])->name('welcome');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login-attempt', [UserController::class, 'loginScript'])->name('loginS');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/register/attempt', [UserController::class, 'registerScript'])->name('registerS');

Route::get('/booking', [TicketsController::class,'booking'])->name('booking');
Route::get('/about', [FrontendController::class,'about'])->name('about');
Route::get('/wahana', [FrontendController::class,'wahana'])->name('wahana');
Route::get('/promo', [FrontendController::class,'promo'])->name('promo');
Route::get('/contact', [FrontendController::class,'contact'])->name('contact');
Route::get('/testimoni', [FrontendController::class,'testimoni'])->name('testimoni');
Route::get('/my_ticket', [TicketsController::class,'my_ticket'])->name('my_ticket');

Route::post('/booking_store', [TicketsController::class,'booking_store'])->name('booking.store');
Route::get('/payment/{id}', [TicketsController::class,'payment'])->name('payment');
Route::post('/booking_confirmation', [TicketsController::class,'booking_confirmation'])->name('booking.confirmation');
Route::get('/ticket/{id}', [TicketsController::class,'ticket'])->name('ticket');

Route::post('/add_testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');