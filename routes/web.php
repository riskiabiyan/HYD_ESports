<?php

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


// ControllerHome
Route::get('/', 'App\Http\Controllers\Homecontroller@home');

//Controller Auth
Route::get('/login', 'App\Http\Controllers\Authcontroller@login');
Route::get('/register', 'App\Http\Controllers\Authcontroller@register');
Route::post('/cek_login', 'App\Http\Controllers\Authcontroller@cek_login');
Route::post('/simpanuser', 'App\Http\Controllers\Authcontroller@simpanuser');
Route::post('/logout', 'App\Http\Controllers\Authcontroller@logout');