<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pendidik()
    {
        $user = User::all()->where('status', '=', 'Pendidik');
        return view('admin.data-pendidik-kependidikan.data-kependidik', compact('user'));
    }

    public function kependidikan()
    {
        $user = User::all()->where('status', '=', 'Kependidik');
        return view('admin.data-pendidik-kependidikan.data-kependidik', compact('user'));
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
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'bidang' => 'required',
            'status' => 'required',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',
            // 'foto' => 'image|file|max:2048|mimes:jpg,png,jpeg',
        ]);

        // $imgName = null;
        // if ($request->foto) {
        //     $imgName = $request->foto->getClientOriginalName() . '-' . time() . '-' . $request->foto->extension();

        //     //$imgName=$request->foto->getClientOriginalName();
        //     $request->foto->move(public_path('post-images'), $imgName);
        // }


        //pasien::create($request->all());
        User::create([
            'name' => $request['nama'],
            'jk' => $request['jk'],
            'bidang' => $request['bidang'],
            'status' => $request['status'],
            'username' => $request['username'],
            'password' => bcrypt($request['password']),
            'level' => $request['level'],
            // 'foto' => $imgName,
        ]);

        return redirect('/data-pendidik')->with('status', 'Data Karyawan Berhasil Ditambahkan');
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
    public function update(Request $request, User $user)
    {
        User::where('id', $user->id)
            ->update([
                'nama' => $request->nama,
                'jk' => $request->jk,
                'tgl_lahir' => $request->tgl_lahir,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'pendidikan_terakhir' => $request->pendidikan_terakhir,
                'email' => $request->email,
                'jabatan_id' => $request->jabatan_id,
            ]);
        return redirect('/karyawan')->with('status', 'Data Karyawan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/data-pendidik')->with('status', 'Data Berhasil Dihapus');
    }
}
