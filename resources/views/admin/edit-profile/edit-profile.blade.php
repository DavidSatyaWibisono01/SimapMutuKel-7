@extends('admin/layout-menu-navbar/main')

@section('container')

<div class="right_col">
    <div class="">

        <!-- Dashboard Container -->
        <div class="profile_pic">
            <div id="crop-avatar">
              <!-- Current avatar -->
              <img class="img-responsive avatar-view" src="{!! asset('assets/images/login/logo-wk.png') !!}" alt="Avatar" title="Change the avatar">
            </div>
        </div>
        <div class="profile_info">
            <h1>Biddin Jasmat</h1>
            <ul class="list-unstyled user_data">
                <li><i class="fa fi-rr-briefcase user-profile-icon"></i> Pendidik</li>
            </ul>
            <a class="btn btn-tambah-data"><i class="fa fi-rr-edit mr-2"></i>Ubah Foto</a>
        </div>
        <!-- End Dashboard Container -->

        <!-- Form pengisian Data Pribadi -->
        <div class="x_content">
            <form class="form-group form-data-diri" action="" method="" novalidate>
                <span class="section"></span>

                <div class="field item form-group mb-4">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Lengkap<span class="required"> :</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" />
                    </div>
                </div>
                <div class="field item form-group mb-4">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Bidang<span class="required"> :</span></label>
                    <div class="col-md-6 col-sm-6">
                        <select class="form-control">
                            <option></option>
                            <option>1.1</option>
                            <option>1.2</option>
                            <option>1.3</option>
                            <option>1.5</option>
                            <option>1.6</option>
                          </select>
                    </div>
                </div>
                <div class="field item form-group mb-4">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin<span class="required"> :</span></label>
                    <div class="col-md-6 col-sm-6">
                        <select class="form-control">
                            <option></option>
                            <option>1.1</option>
                            <option>1.2</option>
                            <option>1.3</option>
                            <option>1.5</option>
                            <option>1.6</option>
                          </select>
                    </div>
                </div>
                <div class="field item form-group mb-4">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Status<span class="required"> :</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" />
                    </div>
                </div>
                <div class="field item form-group mb-4">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Username<span class="required"> :</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" />
                    </div>
                </div>
                <div class="field item form-group mb-4">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Password<span class="required"> :</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" />
                    </div>
                </div>

                <div class="field item form-group btn-data col-md-9 col-sm-9">
                    <a href="/dashboard" class="btn btn-back">Batal</a>
                    <button type="submit" class="btn btn-tambah-data">Simpan</button>
                </div>
            </form>
        </div>
        <!-- End Form pengisian Data Pribadi -->

    </div>
</div>

@endsection
