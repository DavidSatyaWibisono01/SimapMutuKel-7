<?php

namespace App\Http\Controllers;

use App\Models\jawaban;
use App\Models\Pertanyaan;
use App\Models\SubBab;
use Illuminate\Http\Request;

class HasilPertanyaanController extends Controller
{
    public function hasilPedagogik()
    {
        $pertanyaan = Pertanyaan::where('bab_id', '=', 1)->get();
        $sub = SubBab::all()->where('bab_id', '=', 1);
        $hasil = jawaban::all();
        return view('admin.hasil-evaluasi-pertanyaan.pedagogik', compact('pertanyaan', 'hasil', 'sub'));

    }
    public function hasilKepribadian()
    {
        $pertanyaan = Pertanyaan::where('bab_id', '=', 2)->get();
        $sub = SubBab::all()->where('bab_id', '=', 2);
        $hasil = jawaban::all();
        return view('admin.hasil-evaluasi-pertanyaan.kepribadian', compact('pertanyaan', 'hasil', 'sub'));

    }
    public function hasilSosial()
    {
        $pertanyaan = Pertanyaan::where('bab_id', '=', 3)->get();
        $sub = SubBab::all()->where('bab_id', '=', 3);
        $hasil = jawaban::all();
        return view('admin.hasil-evaluasi-pertanyaan.sosial', compact('pertanyaan', 'hasil', 'sub'));

    }
    public function hasilProfesional()
    {
        $pertanyaan = Pertanyaan::where('bab_id', '=', 4)->get();
        $sub = SubBab::all()->where('bab_id', '=', 4);
        $hasil = jawaban::all();
        return view('admin.hasil-evaluasi-pertanyaan.profesional', compact('pertanyaan', 'hasil', 'sub'));

    }
}
