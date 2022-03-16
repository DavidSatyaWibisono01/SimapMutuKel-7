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
    public function pendidik(Request $request)
    {
        $keyword=$request->get('keyword');
        $user = DB::table('users')->where('status', '=', 'Pendidik')->paginate(10);
        if($keyword){
            $user=User::all()->where("name","LIKE","%$keyword%");
        }
        return view('admin.data-pendidik-kependidikan.data-kependidik', compact('user'));
    }

    public function kependidikan()
    {
        $user = DB::table('users')->where('status', '=', 'Kependidik')->paginate(10);
        return view('admin.data-pendidik-kependidikan.data-kependidik', compact('user'));
    }

    public function cari(Request $request)
    {
        $cari=$request->cari;
        $user=DB::table('users')
        ->where('name','like',"%".$cari."%");
        return view('produsen.index',compact('produsen'));
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

        return redirect()->back()->with('status', 'Data Karyawan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.modals.profile.profile-view', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin/modals/profile/aksi/edit-profile', compact('user'));
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
                'name' => $request->nama,
                'jk' => $request->jk,
                'bidang' => $request->bidang,
                'status' => $request->status,
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'level' => $request->level,
            ]);
            if ($user->status == 'Pendidik') {
                return redirect('/data-pendidik')->with('status', 'Data Pengguna Berhasil Diubah');
            } elseif ($user->status == 'Kependidik') {
                return redirect('/data-kependidik')->with('status', 'Data Pengguna Berhasil Diubah');
            }
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
        if ($user->status == 'Pendidik') {
            return redirect('/data-pendidik')->with('status', 'Data Pengguna Berhasil Dihapus');
        } elseif ($user->status == 'Kependidik') {
            return redirect('/data-kependidik')->with('status', 'Data Pengguna Berhasil Dihapus');
        }
    }
}
