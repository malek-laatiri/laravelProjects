<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
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


Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store'])->name('loginstore');

Route::get('/logout',[LogoutController::class,'logout'])->name('logout');


Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/store',[RegisterController::class,'store'])->name('store');

Route::get('/', function () {
    return view('home');
})->name('home');