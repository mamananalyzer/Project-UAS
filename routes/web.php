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

Route::get('/', function () {
    return view('auth/index');
});
Route::get('/loginkar', function () {
    return view('auth/loginkar');
});
Route::get('/loginadm', function () {
    return view('auth/loginadm');
});

Route::get('/karyawan', function () {
    return view('karyawan/index');
});

Route::get('/about', function () {
    return view('welcome');
});
