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
    return view('admin/dashboard');
});

Route::get('/user-dashboard', function () {
    return view('user/dashboard');
});

Route::get('/data-pendidik', function () {
    return view('admin/data-pendidik-kependidikan/data-pendidik');
});

Route::get('/data-kependidik', function () {
    return view('admin/data-pendidik-kependidikan/data-kependidik');
});

Route::get('/data-diri', function () {
    return view('data-diri');
});

Route::get('/evaluasi-diri-1', function () {
    return view('user/evadir/eval-diri-tipe-1/evaluasi-diri-landingpage');
});

Route::get('/evaluasi-diri-2', function () {
    return view('user/evadir/eval-diri-tipe-2/evaluasi-diri-landingpage');
});

// Evaluasi diri tipe 1
Route::get('/evaluasi-diri-tipe1', function () {
    return view('user/evadir/eval-diri-tipe-1/evaluasi-diri-tipe1');
});

// Evaluasi diri tipe 2
Route::get('/evaluasi-diri-tipe2', function () {
    return view('user/evadir/eval-diri-tipe-2/evaluasi-diri-tipe2');
});

Route::get('/lupa-password', function () {
    return view('lupa-password');
});

Route::get('/create-question-pedagogik', function () {
    return view('admin/pertanyaan/create-question-pedagogik');
});

Route::get('/test-modal', function () {
    return view('test-modal');
});

