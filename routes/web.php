<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerbagaiHalController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\KepribadianController;
use App\Http\Controllers\PedagogikController;
use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\SosialController;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);

Route::group(['middleware' => 'auth'], function () {
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth');

Route::get('user-dashboard', [UserController::class, 'index'])->middleware('auth');

Route::get('/data-pendidik', [DataUserController::class, 'pendidik']);

Route::get('/data-kependidik', [DataUserController::class, 'kependidikan']);

Route::post('/tambah-pengguna', [DataUserController::class, 'store']);

Route::delete('/hapus-pengguna/{user}', [DataUserController::class, 'destroy']);

Route::get('/lihat-pengguna/{user}', [DataUserController::class, 'show']);
Route::get('/edit-pengguna/{user}', [DataUserController::class, 'edit']);
Route::patch('/update-pengguna/{user}', [DataUserController::class, 'update']);

Route::get('/data-diri', function () {
    return view('trash/data-diri');
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

// Bagian A
Route::get('/hasil-evaluasi-individu-a-pedagogik', [PedagogikController::class, 'index']);
Route::post('/hasil-evaluasi-individu-a-pedagogik/create', [PedagogikController::class, 'store']);
Route::delete('/hasil-evaluasi-individu-a-pedagogik/delete/{pertanyaan}', [PedagogikController::class, 'destroy']);
// Route::resource('hasil-evaluasi-individu-a-pedagogik','PedagogikController');

Route::get('/hasil-evaluasi-individu-a-kepribadian', [KepribadianController::class, 'index']);

Route::get('/hasil-evaluasi-individu-a-sosial', [SosialController::class, 'index']);

Route::get('/hasil-evaluasi-individu-a-profesional', [ProfesionalController::class, 'index']);

Route::get('/hasil-evaluasi-individu-a-berbagai-hal', [BerbagaiHalController::class, 'index']);

// Bagian B
Route::get('/hasil-evaluasi-individu-b-publikasi-ilmiah', function () {
    return view('admin/hasil-evaluasi-diri/bagian-b/publikasi-ilmiah');
});
// Bagian C
Route::get('/hasil-evaluasi-individu-c-karya-inovatif', function () {
    return view('admin/hasil-evaluasi-diri/bagian-c/karya-inovatif');
});
// Bagian D
Route::get('/hasil-evaluasi-individu-d-kompetensi-pembelajaran-berkualitas', function () {
    return view('admin/hasil-evaluasi-diri/bagian-d/kompetensi-pembelajaran-berkualitas');
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

Route::get('/page-edit-profil', function () {
    return view('trash/page-edit-profil');
});

Route::get('/admin-edit-profile', function () {
    return view('admin/edit-profile/edit-profile');
});

Route::get('/user-edit-profile', function () {
    return view('user/edit-profile/edit-profile');
});

});

//pengecekan level user login
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', AdminController::class);
    });
});
