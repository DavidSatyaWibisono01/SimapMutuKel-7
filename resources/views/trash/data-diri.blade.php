@extends('admin/layout-menu-navbar/main')

@section('container')

    <div class="right_col">
        <div class="">

        <!-- Title Page -->
        <div  iv class="page-title">
            <div class="title_left">
                <h1>Data Pribadi</h1>
            </div>
        </div>
        <!-- End Title Page -->

        <!-- Form pengisian Data Pribadi -->
        <div class="x_content">
            <form class="form-group form-data-diri" action="" method="" novalidate>
                <span class="section"></span>
                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Sekolah<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" />
                    </div>
                </div>
                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" />
                    </div>
                </div>
                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Guru<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" />
                    </div>
                </div>
                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Kecamatan<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" />
                    </div>
                </div>
                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Tahun Pelajaran<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" />
                    </div>
                </div>
                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Kompetensi Guru<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" />
                    </div>
                </div>
                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">No. Statistik Sekolah<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" />
                    </div>
                </div>
                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Kabupaten / Kota<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" />
                    </div>
                </div>
                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" class='date' type="date" name="date" required='required'>
                    </div>
                </div>
                <div class="field item form-group btn-data">
                        <button type="button" class="btn btn-back">Kembali</button>
                        <button type="button" class="btn btn-next">Lanjut</button>
                </div>
            </form>
        </div>
        <!-- End Form pengisian Data Pribadi -->
        </div>
    </div>

@endsection