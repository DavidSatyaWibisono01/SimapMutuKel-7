<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\Pertanyaan;
use App\Models\SubBab;
use Illuminate\Http\Request;

class PedagogikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = Pertanyaan::all()->where('bab_id', '=', 1);
        $sub = SubBab::all()->where('bab_id', '=', 1);

        return view('admin.hasil-evaluasi-diri.bagian-a.pedagogik', compact('pertanyaan', 'sub'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bagian = SubBab::all();
        return view('admin.modals.question.create-modal-question', compact('bagian'));
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
            'sub_bab_id' => 'required',
            'nomor' => 'required',
            'question' => 'required',
        ]);

        $babID = 1;

        Pertanyaan::create([
            'bab_id' => $babID,
            'sub_bab_id' => $request->sub_bab_id,
            'nomor' => $request->nomor,
            'question' => $request->question,
        ]);

        return redirect('hasil-evaluasi-individu-a-pedagogik')->with('status', 'pertanyaan Berhasil Ditambahkan');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        return redirect('/hasil-evaluasi-individu-a-pedagogik')->with('status', 'Data Berhasil Dihapus');
    }
}
