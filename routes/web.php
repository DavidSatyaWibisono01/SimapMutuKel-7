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

Route::get('/hasil-evaluasi-individu-pendidik', function () {
    return view('admin/hasil-evaluasi-individu/pendidik');
});

Route::get('/hasil-evaluasi-individu-kependidik', function () {
    return view('admin/hasil-evaluasi-individu/kependidik');
});

Route::get('/hasil-evaluasi-individu-profil-guru', function () {
    return view('admin/hasil-evaluasi-individu/profil-guru/index');
});

Route::get('/hasil-evaluasi-pertanyaan-pedagogik', function () {
    return view('admin/hasil-evaluasi-pertanyaan/pedagogik');
});

Route::get('/hasil-evaluasi-pertanyaan-kepribadian', function () {
    return view('admin/hasil-evaluasi-pertanyaan/kepribadian');
});

Route::get('/hasil-evaluasi-pertanyaan-sosial', function () {
    return view('admin/hasil-evaluasi-pertanyaan/sosial');
});

Route::get('/hasil-evaluasi-pertanyaan-profesional', function () {
    return view('admin/hasil-evaluasi-pertanyaan/profesional');
});

Route::get('/hasil-evaluasi-individu-a-pedagogik', function () {
    return view('admin/hasil-evaluasi-diri/bagian-a/pedagogik');
});
Route::get('/hasil-evaluasi-individu-a-kepribadian', function () {
    return view('admin/hasil-evaluasi-diri/bagian-a/kepribadian');
});
Route::get('/hasil-evaluasi-individu-a-sosial', function () {
    return view('admin/hasil-evaluasi-diri/bagian-a/sosial');
});
Route::get('/hasil-evaluasi-individu-a-profesional', function () {
    return view('admin/hasil-evaluasi-diri/bagian-a/profesional');
});
Route::get('/hasil-evaluasi-individu-a-berbagai-hal', function () {
    return view('admin/hasil-evaluasi-diri/bagian-a/berbagai-hal');
});

Route::get('/hasil-evaluasi-pertanyaan', function () {
    return view('admin/hasil-evaluasi-pertanyaan/pedagogik');
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
    return view('trash/test-modal');
});

Route::get('/data-profil-kependidik', function () {
    return view('admin/data-pendidik-kependidikan/data-profil/pendidik');
});