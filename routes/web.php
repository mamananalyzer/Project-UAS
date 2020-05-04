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

Route::get('/loginadm', 'AuthadmController@login')->name('login');
Route::post('/postloginadm', 'AuthadmController@postlogin');
Route::get('/logout', 'AuthadmController@logout');

Route::get('/loginkar', 'AuthkarController@login')->name('login');
Route::post('/postloginkar', 'AuthkarController@postlogin');
Route::get('/logout', 'AuthkarController@logout');

Route::get('/admins', 'AdminsController@index');
Route::get('/admins/{employees}', 'AdminsController@show');
Route::get('/karyawan/create', 'AdminsController@create');


Route::get('/employees', 'EmployeesController@index');


Route::get('/', function () {
    return view('auths/index');
});
// Route::get('/loginkar', function () {
//     return view('auth/loginkar');
// });
// Route::get('/loginadm', function () {
//     return view('auth/loginadm');
// });

Route::get('/karyawan', function () {
    return view('karyawan/index');
});

// Route::get('/about', function () {
//     return view('welcome');
// });
