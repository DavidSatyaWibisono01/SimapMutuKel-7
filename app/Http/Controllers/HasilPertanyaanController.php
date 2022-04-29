<?php

namespace App\Http\Controllers;

use App\Models\jawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class HasilPertanyaanController extends Controller
{
    public function hasilPedagogik()
    {
        $pertanyaan = Pertanyaan::where('bab_id', '=', 1)->get();
        $hasil = jawaban::all();
        return view('admin.hasil-evaluasi-pertanyaan.pedagogik', compact('pertanyaan', 'hasil'));

    }
    public function hasilKepribadian()
    {
        $pertanyaan = Pertanyaan::where('bab_id', '=', 2)->get();
        $hasil = jawaban::all();
        return view('admin.hasil-evaluasi-pertanyaan.kepribadian', compact('pertanyaan', 'hasil'));

    }
    public function hasilSosial()
    {
        $pertanyaan = Pertanyaan::where('bab_id', '=', 3)->get();
        $hasil = jawaban::all();
        return view('admin.hasil-evaluasi-pertanyaan.sosial', compact('pertanyaan', 'hasil'));

    }
    public function hasilProfesional()
    {
        $pertanyaan = Pertanyaan::where('bab_id', '=', 4)->get();
        $hasil = jawaban::all();
        return view('admin.hasil-evaluasi-pertanyaan.profesional', compact('pertanyaan', 'hasil'));

    }
}
