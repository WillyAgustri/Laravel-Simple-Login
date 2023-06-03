<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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


// Uji coba Website



// Route Login dan Pendaftaran
Route::get('/', [RegisterController::class, 'create']);
Route::resource('register', RegisterController::class);


Route::get('/login', [LoginController::class, 'index']);
Route::post('/welcome', [LoginController::class, 'check'])->name('check');

// Route::post('register', [RegisterController::class, 'store'])->name('register');


// Route::resource('login', LoginController::class);