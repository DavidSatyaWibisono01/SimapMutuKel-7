@extends('admin/layout-menu-navbar/main')

@section('container')
<div class="right_col">
    <div class="">
        <div  iv class="page-title mb-4">
            <div class="title_left">
              <h1>Edit Data Pengguna</h1>
            </div>
          </div>

        {{-- <div class="text-left">
            <img src="{!! asset('assets/images/logo-wk.png') !!}" class="rounded" alt="...">
        </div> --}}

        <form method="post" action="/update-pengguna/{{$user->id}}">
            @method('patch')
            @csrf
        <div class="card-body">
            <div class="field item form-group mt-4 mb-4">
                <label for="message-text" class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
                <div class="col-md-6 col-sm-6">
                <input name="nama" value="{{$user->name}}" class="form-control" id="message-text">
                </div>
            </div>
            <div class="field item form-group mb-4">
                <label for="message-text" class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
                <div class="col-md-6 col-sm-6">
                <select name="jk" class="form-control" value="{{$user->jk}}">
                    <option value="{{ $user->jk }}">{{ $user->jk }}</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                </div>
            </div>
            <div class="field item form-group mb-4">
                <label for="message-text" class="col-form-label col-md-3 col-sm-3 label-align">Bidang</label>
                <div class="col-md-6 col-sm-6">
                <select name="bidang" class="form-control" value="{{$user->bidang}}">
                    <option value="{{ $user->bidang }}">{{ $user->bidang }}</option>
                    <option value="Matematika">Matematika</option>
                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                    <option value="Bahasa Sunda">Bahasa Sunda</option>
                    <option value="PIPAS">PIPAS</option>
                    <option value="PKK">PKK</option>
                    <option value="Agama">Agama</option>
                    <option value="PPKn">PPKn</option>
                    <option value="Sejarah">Sejarah</option>
                    <option value="PJOK">PJOK</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Program Keahlian PPLG">Program Keahlian PPLG</option>
                    <option value="Program Keahlian TJKT">Program Keahlian TJKT</option>
                    <option value="Program Keahlian DKV">Program Keahlian DKV</option>
                    <option value="Program Keahlian MPLB">Program Keahlian MPLB</option>
                    <option value="Program Keahlian PMN">Program Keahlian PMN</option>
                    <option value="Program Keahlian HTL">Program Keahlian HTL</option>
                    <option value="Program Keahlian KLN">Program Keahlian KLN</option>
                </select>
                </div>
            </div>
        <div class="field item form-group mb-4">
            <label for="message-text" class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
            <div class="col-md-6 col-sm-6">
            <select name="status" class="form-control" value="{{$user->status}}">
                <option value="{{ $user->status }}">{{ $user->status }}</option>
                <option value="Pendidik">Pendidik</option>
                <option value="Kependidikan">Kependidikan</option>
            </select>
            </div>
        </div>
        <div class="field item form-group mb-4">
            <label for="message-text" class="col-form-label col-md-3 col-sm-3 label-align">Username</label>
            <div class="col-md-6 col-sm-6">
            <input type="text" class="form-control" name="username" value="{{$user->username}}" id="message-text">
            </div>
        </div>
        <div class="field item form-group mb-4">
            <label for="message-text" class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
            <div class="col-md-6 col-sm-6">
            <input type="text" class="form-control" name="password" value="{{$user->password}}" id="message-text">
            </div>
        </div>
        <div class="field item form-group mb-4">
            <label for="message-text" class="col-form-label col-md-3 col-sm-3 label-align">level</label>
            <div class="col-md-6 col-sm-6">
            <select name="level" class="form-control" >
                <option value="{{$user->level}}">{{$user->level}}</option>
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            </div>
        </div>
    </div>


        <div class="field item form-group btn-data col-md-9 col-sm-9">
          <button class="btn btn-back" data-bs-dismiss="modal" >Kembali</button>
          <button type="submit" class="btn btn-tambah-data">Simpan</button>
        </div>
        </form>
    </div>
  </div>
</div>
@endsection
