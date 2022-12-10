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
    return view('login');
});

Route::get('login', function () {
    return view('login');
});

Route::get('forgot-password', function () {
    return view('forgot-password');
});

Route::get('register', function () {
    return view('register');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('pemberitahuan', function () {
    return view('pemberitahuan');
});

Route::get('pengajuan', function () {
    return view('pengajuan');
});

Route::get('pembayaran', function () {
    return view('pembayaran');
});

Route::get('tempat', function () {
    return view('tempat');
});

Route::get('update-tempat', function () {
    return view('update-tempat');
});

Route::get('tambah', function () {
    return view('tambah');
});