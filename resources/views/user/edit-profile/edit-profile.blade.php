@extends('user/layout-navbar/main')

@section('container')

<div class="right_col">
    <div class="">

        <!-- Dashboard Container -->
        <div class="profile_pic">
            <div id="crop-avatar">
              <!-- Current avatar -->
              @if(auth()->user()->foto)
              <img class="img-responsive avatar-view" src="/post-images/{{auth()->user()->foto}}" alt="Avatar" title="Change the avatar">
              @else
              <img class="img-responsive avatar-view" src="/post-images/none.png" alt="Avatar" title="Change the avatar">
              @endif
            </div>
        </div>
        <div class="profile_info">
            <h1>{{ auth()->user()->name }}</h1>
            <ul class="list-unstyled user_data">
                <li><i class="fa fi-rr-briefcase user-profile-icon"></i> {{ auth()->user()->status }}</li>
            </ul>
        </div>
        <!-- End Dashboard Container -->

        <!-- Form pengisian Data Pribadi -->
        <div class="x_content">
            <form class="form-group form-data-diri" action="/edit-profile/update/{{$user->id}}" method="post" enctype="multipart/form-data" novalidate>
                @method('patch')
                @csrf
                <span class="section"></span>

                <div class="field item form-group mb-4">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Lengkap<span class="required"> :</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" value="{{ $user->name }}" data-validate-length-range="6" data-validate-words="2" name="nama" placeholder="" required="required" />
                    </div>
                </div>
                <div class="field item form-group mb-4">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin<span class="required"> :</span></label>
                    <div class="col-md-6 col-sm-6">
                        <select name="jk" class="form-control" value="{{ $user->jk }}">
                            <option value="{{ $user->jk }}">{{ $user->jk }}</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="field item form-group mb-4">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Bidang<span class="required"> :</span></label>
                    <div class="col-md-6 col-sm-6">
                        <select name="bidang" class="form-control" value="{{ $user->bidang }}">
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
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Status<span class="required"> :</span></label>
                    <div class="col-md-6 col-sm-6">
                        <select name="status" class="form-control">
                            <option value="{{ $user->status }}">{{ $user->status }}</option>
                            <option value="Pendidik">Pendidik</option>
                            <option value="Kependidikan">Kependidikan</option>
                        </select>
                    </div>
                </div>
                <div class="field item form-group mb-4">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Username<span class="required"> :</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="username" value="{{ $user->username }}" required="required" />
                    </div>
                </div>
                {{-- <div class="field item form-group mb-4">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Password<span class="required"> :</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="password" value="{{ $user->password }}" required="required" />
                    </div>
                </div> --}}

                <div class="field item form-group mb-4">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Foto</label>
                    <div class="col-md-6 col-sm-6">
                    <input type="file" name="foto" value="{{$user->foto}}" class="form-control @error('foto') is-invalid @enderror" placeholder="Masukan foto" required>
                    @error('foto')
                      <div class="invalid-feedback{{$message}}"></div>
                    @enderror
                    <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                   </div>
                </div>

                <div class="field item form-group btn-data col-md-9 col-sm-9">
                    <a href="/user-dashboard" class="btn btn-back">Kembali</a>
                    <button type="submit" class="btn btn-tambah-data">Simpan</button>
                </div>
            </form>
        </div>
        <!-- End Form pengisian Data Pribadi -->

    </div>
</div>

@endsection
