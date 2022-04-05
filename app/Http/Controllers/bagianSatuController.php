<?php

namespace App\Http\Controllers;

use App\Models\jawaban;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use Illuminate\Support\Facades\Auth;
class bagianSatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = Pertanyaan::all()->where('bagian', '=', 1);
        return view('user/evadir/eval-diri-tipe-1/evaluasi-diri-tipe1', compact('pertanyaan'));
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
    public function simpan(Request $request,$id){
        $request->validate([
            'option' => 'required',
            'kendala' => 'required',
        ]);
        $count = Pertanyaan::select('id')->get();
        for ($i=0; $i < count($count); $i++) {
            jawaban::create([
            'user_id' => Auth::user()->id,
            'question_id' => $count[$i]->id,
            'answer' => $request->option[$count[$i]->id],
            'kendala' => $request->kendala[$count[$i]->id],
        ]);
        }

        return redirect('/evaluasi-diri-tipe1')->with('status', 'pertanyaan Berhasil Ditambahkan');
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
