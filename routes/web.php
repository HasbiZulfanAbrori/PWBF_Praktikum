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
    return view('layouts/template');
});

Route::get('/posyandu', function () {
    return view('posyandu');
});

Route::get('/kecamatan', function () {
    return view('kecamatan');
});

Route::get('/kelurahan', function () {
    return view('kelurahan');
});

Route::get('/role', function () {
    return view('role');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});

Route::get('/register', function () {
    return view('register');
});
