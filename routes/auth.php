<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
   Route::get('login', [AuthController::class, 'index'])->name('login');
   Route::post('login', [AuthController::class, 'login'])->name('login');
});
