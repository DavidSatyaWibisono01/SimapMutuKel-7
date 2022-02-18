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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/pendidik-kependidik', function () {
    return view('pendidik-kependidik');
});

Route::get('/data-diri', function () {
    return view('data-diri');
});

// Evaluasi diri tipe 1
Route::get('/evaluasi-diri', function () {
    return view('evaluasi-diri');
});

// Evaluasi diri tipe 2
Route::get('/evaluasi-diri-user', function () {
    return view('evaluasi-diri-user');
});

Route::get('/lupa-password', function () {
    return view('lupa-password');
});

Route::get('/create-question-pedagogik', function () {
    return view('create-question-pedagogik');
});

Route::get('/evaluasi-guru', function () {
    return view('user-evaluasi-diri');
});
