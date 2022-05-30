<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bab;
use App\Models\Pertanyaan;
use App\Models\SubBab;

class KaryaInovatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = Pertanyaan::all()->where('bab_id', '=', 7);
        $sub = SubBab::all()->where('bab_id', '=', 7);

        return view('admin.hasil-evaluasi-diri.bagian-c.karya-inovatif', compact('pertanyaan', 'sub'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
        ]);

        $babID = 7;

        Pertanyaan::create([
            'bagian' => 2,
            'bab_id' => $babID,
            'sub_bab_id' => $request->sub_bab_id,
            'question' => $request->question,
        ]);

        return redirect('/hasil-evaluasi-individu-c-karya-inovatif')->with('simpan', 'pertanyaan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pertanyaan $pertanyaan)
    {
        $sub = SubBab::all()->where('bab_id', '=', 7);

        return view('admin.hasil-evaluasi-diri.bagian-c.edit-question', compact('pertanyaan', 'sub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pertanyaan $pertanyaan)
    {
        $babID = 7;
        Pertanyaan::where('id', $pertanyaan->id)
            ->update([
                'bagian' => 2,
                'bab_id' => $babID,
                'sub_bab_id' => $request->sub_bab_id,
                'question' => $request->question,
            ]);

                return redirect('/hasil-evaluasi-individu-c-karya-inovatif')->with('update', 'pertanyaan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertanyaan $pertanyaan)
    {
        Pertanyaan::destroy($pertanyaan->id);
        return redirect('/hasil-evaluasi-individu-c-karya-inovatif')->with('hapus', 'Data Berhasil Dihapus');
    }
}
