<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\jawaban;
use Illuminate\Http\Request;

class HasilIndividuController extends Controller
{
    public function pendidikHasil()
    {
        $sudahisi = Jawaban::select('user_id')->distinct()->get();
        $hasilPendidik = User::where('status','Pendidik')->paginate(10);

        return view('admin.hasil-evaluasi-individu.pendidik', compact('hasilPendidik','sudahisi'));
    }

    public function kependidikHasil()
    {
        $sudahisi = Jawaban::select('user_id')->distinct()->get();
        $hasilKependidik = User::where('status','Kependidik')->paginate(10);

        return view('admin.hasil-evaluasi-individu.kependidik', compact('hasilKependidik','sudahisi'));
    }

    public function hasilEvaluasi(User $user,$id)
    {
        $hasil = jawaban::where('user_id', $id)->get();
        return view('admin.hasil-evaluasi-individu.profil-guru.index', compact('hasil'));
    }
}
