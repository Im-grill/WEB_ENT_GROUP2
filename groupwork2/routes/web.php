<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Auth\AuthLoginController;

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

// Homepage
Route::get('/index', [WebsiteController::class, 'index'])->name('homepage');

// Add student
Route::get('/add', [WebsiteController::class, 'add_view'])->name('add_view');
Route::post('/add-submit', [WebsiteController::class, 'add_submit'])->name('add_submit');


// Login
Route::get('/login', [AuthLoginController::class, 'login_view'])->name('login');
Route::post('/login-submit', [AuthLoginController::class, 'login_submit'])->name('login_submit');

// Logout
Route::get('/logout', [AuthLoginController::class, 'logout'])->name('logout');

// Register
Route::get('/register', [AuthLoginController::class, 'register_view'])->name('register');