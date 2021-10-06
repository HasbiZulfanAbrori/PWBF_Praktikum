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
    return view('layouts/login');
});

Route::get('/posyandu', function () {
    return view('layouts/posyandu');
});

Route::get('/kecamatan', function () {
    return view('layouts/kecamatan');
});

Route::get('/kelurahan', function () {
    return view('layouts/kelurahan');
});

Route::get('/role', function () {
    return view('layouts/role');
});

Route::get('/home', function () {
    return view('template');
});

Route::get('/forgotpassword', function () {
    return view('layouts/forgotpassword');
});

Route::get('/register', function () {
    return view('layouts/register');
});

