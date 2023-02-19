<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', 'App\Http\Controllers\HomeController@test')->name('test');
//Route::match(['get', 'post'],'/request', [HomeController::class,'Filter'])->name('filter');

Auth::routes();

Route::resource('previews','App\Http\Controllers\Preview\PreviewController');
Route::resource('tags','App\Http\Controllers\Tags\TagController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
