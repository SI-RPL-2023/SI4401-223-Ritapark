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
use App\Http\Controllers\ForgotPassController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromoController;

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

Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::group(['middleware' => ["Role"], 'as' => 'adm.'], function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('admin/ticket', TicketController::class);
    Route::resource('admin/wahana', WahanaController::class);
    Route::get('/admin/ticket/delete/{id}', [TicketController::class, 'destroy'])->name('ticket.hapus');
    Route::get('/admin/wahana/delete/{id}', [WahanaController::class, 'destroy'])->name('wahana.hapus');
    Route::get('/admin/booking', [BookingController::class, 'index'])->name('booking.index');
    Route::put('/admin/booking/konfirmasi/{id}', [BookingController::class, 'konfirmasi'])->name('booking.konfirmasi');
    Route::get('/admin/roles', [DashboardController::class, 'RolesView'])->name('RolesView');
    Route::post('/admin/roles/{id}', [DashboardController::class, 'update'])->name('update');
    Route::delete('admin/roles/hapus/{id}', [DashboardController::class, 'hapus'])->name('hapus');

    Route::get('/admin/promo', [PromoController::class, 'index'])->name('promo.index');
    Route::get('/admin/promo/create', [PromoController::class, 'create'])->name('promo.create');
    Route::post('/admin/promo', [PromoController::class, 'store'])->name('promo.store');
    Route::get('/admin/promo/{promo}/edit', [PromoController::class, 'edit'])->name('promo.edit');
    Route::put('/admin/promo/{promo}', [PromoController::class, 'update'])->name('promo.update');
    Route::delete('/admin/promo/{promo}', [PromoController::class, 'destroy'])->name('promo.destroy');

    Route::get('/admin/refund', [RefundController::class, 'adminConfirmation'])->name('refundConfirmation');
    Route::post('/admin/refund/{refundId}/confirm', [RefundController::class, 'confirmRefund'])->name('refundconfirm');
    Route::post('/admin/refund/{refundId}/tolak', [RefundController::class, 'tolakRefund'])->name('refundtolak');
});

Route::get('/profile', [ProfileController::class,'profile'])->name('profile');
Route::get('/profile/ubah', [ProfileController::class,'profileubah'])->name('profileubah');

Route::post('/profile/ubah/attempt', [ProfileController::class,'profileubahattempt'])->name('profileubahattempt');

Route::get('/profile', [ProfileController::class,'profile'])->name('profile');
Route::get('/profile/ubah', [ProfileController::class,'profileubah'])->name('profileubah');

Route::post('/profile/ubah/attempt', [ProfileController::class,'profileubahattempt'])->name('profileubahattempt');

Route::get('/profile/password', [ProfileController::class,'resetpassword'])->name('resetpassword');
Route::post('/profile/password/attempt', [ProfileController::class,'resetattempt'])->name('resetattempt');
// Route::post('/forgotS', [ForgotPassController::class,'forgotS'])->name('forgotS');

// Route::get('/', [UserController::class, 'welcome'])->name('welcome');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login-attempt', [UserController::class, 'loginScript'])->name('loginS');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/register/attempt', [UserController::class, 'registerScript'])->name('registerS');

Route::get('/booking', [TicketsController::class, 'booking'])->name('booking');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/wahana', [FrontendController::class, 'wahana'])->name('wahana');
Route::get('/promo', [FrontendController::class, 'promo'])->name('promo');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/testimoni', [FrontendController::class, 'testimoni'])->name('testimoni');
Route::get('/tentangkami', [FrontendController::class, 'about'])->name('about');
Route::get('/my_ticket', [TicketsController::class, 'my_ticket'])->name('my_ticket');

Route::post('/booking_store', [TicketsController::class,'booking_store'])->name('booking.store');
Route::get('/payment/{id}', [TicketsController::class,'payment'])->name('payment');
Route::post('/payment2/{id}', [TicketsController::class, 'payment2'])->name('payment2');
Route::get('/bayarTiket/{id}', [TicketsController::class, 'tiketBayar'])->name('tiketBayar');
Route::put('/payment_confirmation', [TicketsController::class, 'payment_confirmation'])->name('payment.confirmation');
Route::get('/ticket/{id}', [TicketsController::class,'ticket'])->name('ticket');

Route::post('/booking_confirmation', [TicketsController::class, 'booking_confirmation'])->name('booking.confirmation');
Route::post('/add_testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');

Route::view('/refund', 'refund');

Route::get('/forgot', [ForgotPassController::class,'forgot'])->name('forgot');
Route::post('/forgotS', [ForgotPassController::class,'forgotS'])->name('forgotS');

Route::get('/promo', [PromoController::class, 'halamanPromo'])->name('halamanPromo');
Route::get('/booking/promo/{kode_promo}', [TicketsController::class,'bookingPromo'])->name('bookingPromo');
Route::get('/refund', [RefundController::class, 'refundForm'])->name('refund.form');
  
// Rute untuk mengirimkan formulir refund tiket
Route::post('/refund', [RefundController::class, 'refundSubmit'])->name('refund.submit');

