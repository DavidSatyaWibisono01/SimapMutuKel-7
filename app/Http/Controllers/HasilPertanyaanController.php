<?php

namespace App\Http\Controllers;

use App\Models\jawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class HasilPertanyaanController extends Controller
{
    public function hasilPedagogik()
    {
        $pertanyaan = Pertanyaan::all()->where('bab_id', '=', 1);
        $hasil = jawaban::all();
        return view('admin.hasil-evaluasi-pertanyaan.pedagogik', compact('pertanyaan', 'hasil'));

    }
    public function hasilKepribadian()
    {
        $pertanyaan = Pertanyaan::all()->where('bab_id', '=', 2);
        $hasil = jawaban::all();
        return view('admin.hasil-evaluasi-pertanyaan.pedagogik', compact('pertanyaan', 'hasil'));

    }
    public function hasilSosial()
    {
        $pertanyaan = Pertanyaan::all()->where('bab_id', '=', 3);
        $hasil = jawaban::all();
        return view('admin.hasil-evaluasi-pertanyaan.pedagogik', compact('pertanyaan', 'hasil'));

    }
    public function hasilProfesional()
    {
        $pertanyaan = Pertanyaan::all()->where('bab_id', '=', 4);
        $hasil = jawaban::all();
        return view('admin.hasil-evaluasi-pertanyaan.pedagogik', compact('pertanyaan', 'hasil'));

    }
}
