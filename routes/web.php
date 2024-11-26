<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [LoginController::class, 'index'])->name('index');

Route::get('/login', [LoginController::class,'loginPage'])->name('loginPage');

Route::get('/register', [LoginController::class,'registerPage'])->name('registerPage');

Route::post('/register/auth', [LoginController::class, 'register'])->name('register');

Route::post('/login/auth', [LoginController::class,'login'])->name('login');

Route::get('/home', [HomeController::class,'home'])->name('home');

Route::post('/logout', [LoginController::class,'logout'])->name('logout');

Route::get('/home/profile', [ProfileController::class,'profilePage'])->name('profilePage');
