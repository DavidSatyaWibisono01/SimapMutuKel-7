<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\bagianDuaController;
use App\Http\Controllers\bagianSatuController;
use App\Http\Controllers\BerbagaiHalController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\HasilIndividuController;
use App\Http\Controllers\HasilPertanyaanController;
use App\Http\Controllers\KaryaInovatifController;
use App\Http\Controllers\KepribadianController;
use App\Http\Controllers\KompetisiPembelajaranController;
use App\Http\Controllers\PedagogikController;
use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublikasiIlmiahController;
use App\Http\Controllers\SosialController;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
    return view('landing');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/home', [LoginController::class, 'home']);


Route::group(['middleware' => 'auth'], function () {
//admin
Route::group(['middleware' => ['admin']], function () {
Route::get('/dashboard', [AdminController::class, 'index']);

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

Route::get('/hasil-evaluasi-individu-pendidik', [HasilIndividuController::class, 'pendidikHasil']);

Route::get('/hasil-evaluasi-individu-kependidik', [HasilIndividuController::class, 'kependidikHasil']);

Route::get('/hasil-evaluasi-individu-profil-guru/{answer}', [HasilIndividuController::class, 'hasilEvaluasi']);

Route::get('/hasil-evaluasi-pertanyaan-pedagogik', [HasilPertanyaanController::class, 'hasilPedagogik']);

Route::get('/hasil-evaluasi-pertanyaan-kepribadian', [HasilPertanyaanController::class, 'hasilKepribadian']);

Route::get('/hasil-evaluasi-pertanyaan-sosial', [HasilPertanyaanController::class, 'hasilSosial']);

Route::get('/hasil-evaluasi-pertanyaan-profesional', [HasilPertanyaanController::class, 'hasilProfesional']);

// Bagian A
Route::get('/hasil-evaluasi-individu-a-pedagogik', [PedagogikController::class, 'index']);
Route::post('/hasil-evaluasi-individu-a-pedagogik/create', [PedagogikController::class, 'store']);
Route::get('/hasil-evaluasi-individu-a-pedagogik/edit/{pertanyaan}', [PedagogikController::class, 'edit']);
Route::patch('/hasil-evaluasi-individu-a-pedagogik/update/{pertanyaan}', [PedagogikController::class, 'update']);
Route::delete('/hasil-evaluasi-individu-a-pedagogik/delete/{pertanyaan}', [PedagogikController::class, 'destroy']);
// Route::resource('hasil-evaluasi-individu-a-pedagogik','PedagogikController');

Route::get('/hasil-evaluasi-individu-a-kepribadian', [KepribadianController::class, 'index']);
Route::post('/hasil-evaluasi-individu-a-kepribadian/create', [KepribadianController::class, 'store']);
Route::get('/hasil-evaluasi-individu-a-kepribadian/edit/{pertanyaan}', [KepribadianController::class, 'edit']);
Route::patch('/hasil-evaluasi-individu-a-kepribadian/update/{pertanyaan}', [KepribadianController::class, 'update']);
Route::delete('/hasil-evaluasi-individu-a-kepribadian/delete/{pertanyaan}', [KepribadianController::class, 'destroy']);

Route::get('/hasil-evaluasi-individu-a-sosial', [SosialController::class, 'index']);
Route::post('/hasil-evaluasi-individu-a-sosial/create', [SosialController::class, 'store']);
Route::get('/hasil-evaluasi-individu-a-sosial/edit/{pertanyaan}', [SosialController::class, 'edit']);
Route::patch('/hasil-evaluasi-individu-a-sosial/update/{pertanyaan}', [SosialController::class, 'update']);
Route::delete('/hasil-evaluasi-individu-a-sosial/delete/{pertanyaan}', [SosialController::class, 'destroy']);

Route::get('/hasil-evaluasi-individu-a-profesional', [ProfesionalController::class, 'index']);
Route::post('/hasil-evaluasi-individu-a-profesional/create', [ProfesionalController::class, 'store']);
Route::get('/hasil-evaluasi-individu-a-profesional/edit/{pertanyaan}', [ProfesionalController::class, 'edit']);
Route::patch('/hasil-evaluasi-individu-a-profesional/update/{pertanyaan}', [ProfesionalController::class, 'update']);
Route::delete('/hasil-evaluasi-individu-a-profesional/delete/{pertanyaan}', [ProfesionalController::class, 'destroy']);

Route::get('/hasil-evaluasi-individu-a-berbagai-hal', [BerbagaiHalController::class, 'index']);
Route::post('/hasil-evaluasi-individu-a-berbagai-hal/create', [BerbagaiHalController::class, 'store']);
Route::get('/hasil-evaluasi-individu-a-berbagai-hal/edit/{pertanyaan}', [BerbagaiHalController::class, 'edit']);
Route::patch('/hasil-evaluasi-individu-a-berbagai-hal/update/{pertanyaan}', [BerbagaiHalController::class, 'update']);
Route::delete('/hasil-evaluasi-individu-a-berbagai-hal/delete/{pertanyaan}', [BerbagaiHalController::class, 'destroy']);



// Bagian B
Route::get('/hasil-evaluasi-individu-b-publikasi-ilmiah', [PublikasiIlmiahController::class, 'index']);
Route::post('/hasil-evaluasi-individu-b-publikasi-ilmiah/create', [PublikasiIlmiahController::class, 'store']);
Route::get('/hasil-evaluasi-individu-b-publikasi-ilmiah/edit/{pertanyaan}', [PublikasiIlmiahController::class, 'edit']);
Route::patch('/hasil-evaluasi-individu-b-publikasi-ilmiah/update/{pertanyaan}', [PublikasiIlmiahController::class, 'update']);
Route::delete('/hasil-evaluasi-individu-b-publikasi-ilmiah/delete/{pertanyaan}', [PublikasiIlmiahController::class, 'destroy']);

// Bagian C
Route::get('/hasil-evaluasi-individu-c-karya-inovatif', [KaryaInovatifController::class, 'index']);
Route::post('/hasil-evaluasi-individu-c-karya-inovatif/create', [KaryaInovatifController::class, 'store']);
Route::get('/hasil-evaluasi-individu-c-karya-inovatif/edit/{pertanyaan}', [KaryaInovatifController::class, 'edit']);
Route::patch('/hasil-evaluasi-individu-c-karya-inovatif/update/{pertanyaan}', [KaryaInovatifController::class, 'update']);
Route::delete('/hasil-evaluasi-individu-c-karya-inovatif/delete/{pertanyaan}', [KaryaInovatifController::class, 'destroy']);

// Bagian D
Route::get('/hasil-evaluasi-individu-d-kompetensi-pembelajaran-berkualitas', [KompetisiPembelajaranController::class, 'index']);
Route::post('/hasil-evaluasi-individu-d-kompetensi-pembelajaran-berkualitas/create', [KompetisiPembelajaranController::class, 'store']);
Route::get('/hasil-evaluasi-individu-d-kompetensi-pembelajaran-berkualitas/edit/{pertanyaan}', [KompetisiPembelajaranController::class, 'edit']);
Route::patch('/hasil-evaluasi-individu-d-kompetensi-pembelajaran-berkualitas/update/{pertanyaan}', [KompetisiPembelajaranController::class, 'update']);
Route::delete('/hasil-evaluasi-individu-d-kompetensi-pembelajaran-berkualitas/delete/{pertanyaan}', [KompetisiPembelajaranController::class, 'destroy']);

});


//user
Route::get('user-dashboard', [UserController::class, 'index']);

Route::get('/evaluasi-diri-1', function () {
    return view('user/evadir/eval-diri-tipe-1/evaluasi-diri-landingpage');
});

Route::get('/evaluasi-diri-2', function () {
    return view('user/evadir/eval-diri-tipe-2/evaluasi-diri-landingpage');
});

// Evaluasi diri tipe 1
Route::get('/evaluasi-diri-tipe1', [bagianSatuController::class, 'index']);
Route::post('/evaluasi-diri-tipe1/simpanJawaban/{id}', [bagianSatuController::class, 'simpan']);

// Evaluasi diri tipe 2
Route::get('/evaluasi-diri-tipe2', [bagianDuaController::class, 'index']);
Route::post('/evaluasi-diri-tipe2/simpanJawaban/{id}', [bagianDuaController::class, 'simpan']);

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

Route::get('/admin-edit-profile', [ProfileController::class, 'adminEdit']);
Route::get('/user-edit-profile', [ProfileController::class, 'userEdit']);
Route::patch('/edit-profile/update/{user}', [ProfileController::class, 'update']);


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
