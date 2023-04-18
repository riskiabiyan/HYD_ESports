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
Route::get('/', 'App\Http\Controllers\Admincontroller@dashboard');

//Controller Auth
Route::get('/login', 'App\Http\Controllers\Authcontroller@login');
Route::get('/register', 'App\Http\Controllers\Authcontroller@register');
Route::post('/cek_login', 'App\Http\Controllers\Authcontroller@cek_login');
Route::post('/simpanuser', 'App\Http\Controllers\Authcontroller@simpanuser');
Route::post('/logout', 'App\Http\Controllers\Authcontroller@logout');

//Controller Admin
Route::get('/admin', 'App\Http\Controllers\Admincontroller@admin');
Route::get('/settings', 'App\Http\Controllers\Admincontroller@settings');