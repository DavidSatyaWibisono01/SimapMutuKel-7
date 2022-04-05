<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function adminEdit(Request $request)
    {
        return view('admin.edit-profile.edit-profile', [
            'user' => $request->user()
        ]);
    }

    public function userEdit(Request $request)
    {
        return view('user.edit-profile.edit-profile', [
            'user' => $request->user()
        ]);
    }

    public function update(Request $request)
    {
        $imgName = null;
        if ($request->foto) {
            $imgName = $request->foto->getClientOriginalName() . '-' . time() . '-' . $request->foto->extension();

            //$imgName=$request->foto->getClientOriginalName();
            $request->foto->move(public_path('post-images'), $imgName);
        }

        User::where('id', $request->user()->id)
            ->update([
                'name' => $request->nama,
                'jk' => $request->jk,
                'bidang' => $request->bidang,
                'status' => $request->status,
                'username' => $request->username,
                // 'password' => bcrypt($request->password),
                'foto' => $imgName,
            ]);
        return redirect()->back()->with('status', 'Data Karyawan Berhasil Diubah');
    }
}
