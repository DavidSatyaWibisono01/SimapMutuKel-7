<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HasilIndividuController extends Controller
{
    public function pendidikHasil()
    {
        $hasilPendidik = DB::table('users')->where('status', '=', 'Pendidik')->paginate(10);

        return view('admin.hasil-evaluasi-individu.pendidik', compact('hasilPendidik'));
    }

    public function kependidikHasil()
    {
        $hasilKependidik = DB::table('users')->where('status', '=', 'Kependidik')->paginate(10);

        return view('admin.hasil-evaluasi-individu.kependidik', compact('hasilKependidik'));
    }

    public function hasilEvaluasi(User $user)
    {
        $hasil = DB::table('answer')->where('user_id', '=', $user);

        return view('admin.hasil-evaluasi-individu.profil-guru.index', compact('hasil'));
    }
}
