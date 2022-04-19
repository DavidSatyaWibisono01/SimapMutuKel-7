<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\jawaban;
use Illuminate\Support\Facades\Auth;

class bagianDuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = Pertanyaan::all()->where('bagian', '=', 2);
        return view('user/evadir/eval-diri-tipe-2/evaluasi-diri-tipe2', compact('pertanyaan'));
    }

    public function simpan(Request $request,$id){
        $request->validate([
            'kinerja' => 'required',
            'kendala' => 'required',
        ]);
        $count = Pertanyaan::select('id')->where('bagian',$request->bagian)->get();
        for ($i=0; $i < count($count); $i++) {
            jawaban::create([
            'user_id' => Auth::user()->id,
            'question_id' => $count[$i]->id,
            'answer' => $request->kinerja[$count[$i]->id],
            'kendala' => $request->kendala[$count[$i]->id],
        ]);
        }

        return redirect('/evaluasi-diri-tipe2')->with('status', 'pertanyaan Berhasil Ditambahkan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
