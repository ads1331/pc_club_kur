<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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



Route::get('/',[MainController::class,'index'])->name('index');
Route::get('/games',[MainController::class,'game'])->name('game');

Route::get('/booking',[MainController::class,'booking'])->name('booking');
Route::post('/booking', [MainController::class, 'book'])->name('booking.submit');

Route::get('/computer',[MainController::class,'computer'])->name('computer');

require __DIR__.'/auth.php';
