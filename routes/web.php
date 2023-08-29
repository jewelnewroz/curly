<?php

use App\Http\Livewire\Curly;
use App\Http\Livewire\Dashboard;
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

Route::get('/', Curly::class);

Route::get('/dashboard', Dashboard::class)->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
