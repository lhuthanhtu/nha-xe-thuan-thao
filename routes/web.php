<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminAuthController;
Route::view('/', 'welcome')->name('home');

Route::get('/dat-ve', [BookingController::class, 'index'])->name('booking');
Route::post('/dat-ve', [BookingController::class, 'store'])->name('booking.store');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/
Route::get('/admin/dat-ve', [BookingController::class, 'list'])
    ->name('admin.booking.index');

/* FORM SỬA */
Route::get('/admin/dat-ve/{id}/edit', [BookingController::class, 'edit'])
    ->name('admin.booking.edit');

/* LƯU SỬA */
Route::put('/admin/dat-ve/{id}', [BookingController::class, 'update'])
    ->name('admin.booking.update');

/* XOÁ */
Route::delete('/admin/dat-ve/{id}', [BookingController::class, 'destroy'])
    ->name('admin.booking.destroy');
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.submit');

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
    ->name('admin.logout');
Route::view('/lien-he', 'contact')->name('contact');

