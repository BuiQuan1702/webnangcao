<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\UserController;

// ==========================
// Giao diện người dùng (User)
// ==========================
Route::get('/', [UserController::class, 'home'])->name('user.home');
Route::get('/rooms', [UserController::class, 'rooms'])->name('user.rooms');
Route::get('/booking', [UserController::class, 'booking'])->name('user.booking');
Route::get('/contact', [UserController::class, 'contact'])->name('user.contact');

// ==========================
// Giao diện quản trị (Admin)
// ==========================
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
    Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
    Route::get('/rooms/{id}/edit', [RoomController::class, 'edit'])->name('rooms.edit');

    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::get('/bookings/{id}', [BookingController::class, 'detail'])->name('bookings.detail');

    Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
});
