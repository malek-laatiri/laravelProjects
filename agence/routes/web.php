<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;

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
Route::get('/','PagesController@index');
Route::resource('/blog',PostController::class);
Route::get('/post/create', 'PostController@create')->name('create');
Route::post('/post/store', 'PostController@store')->name('store');

Route::get('/posts/{post}/edit', 'PostController@edit')->name('edit');
Route::put('/posts/{post}/update', 'PostController@update')->name('update');

Route::get('/post/delete', 'PostController@destroy')->name('destroy');
Route::get('/posts/', 'PostController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

