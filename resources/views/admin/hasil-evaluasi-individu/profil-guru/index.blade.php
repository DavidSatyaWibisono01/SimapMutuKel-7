@extends('admin/layout-menu-navbar/navbar')

@section('container')

<!-- page content -->
<div class="container-card">
  <div class="">
    
    <!-- Title dari Menu -->
    <div  iv class="page-title">
      <div class="title_left">
        <h1>Biddin Al Asep</h1>
      </div>
      <div class="title_left">
        <h2>Mata Pelajaran : Bahasa Indonesia</h2>
        <h2>Status : Pendidik</h2>
        <h2>Tahun Ajaran : 2021 - 2022</h2>
      </div>
    </div>
    <!-- End Title dari Menu -->
    
    <!-- Button Cari & Tambah -->
    <div class="input-group">
      <input type="text" class="input-search">
      <span class="input-group-btn">
          <button type="button" class="btn btn-search"><i class="fa fi-rr-search"></i> Cari</button>
      </span>
      <form class="col-md-5 mb-3">
          <select class="form-control">
              <option></option>
              <option>Jomblo Fisabililah</option>
              <option>Jomblo Akut</option>
              <option>Perawan tapi kelamin koncol</option>
          </select>
      </form>
    </div>
    <!-- End Button Cari & Tambah -->
      
    <!-- Table -->
    <div class="table-responsive">
      <table class="table table-hover bulk_action">
          <thead>
            <tr>
                <th><b>No</b></th>
                <th colspan='2'><b>Pertanyaan</b></th>
                <th class="ck-question" colspan='5'><b>Hasil Evaluasi</b></th>
            </tr>
            <tr class="bg-table-color">
                <td></td>
                <th colspan='2'><b> Guru dapat mengidentifikasi karakteristik belajar setiap peserta didik di kelasnya </b></th>
                
                <th class="cks-question-dua">Level Kinerja</th>
                <th class="cks-question">Kendala yang dihadapi</th>
            </tr>
          </thead>

          <tbody>
            <tr>
                <td colspan='1'>1</td>
                <td colspan='2'>Mohon kesediaan Anda untuk memberikan penilaian dan masukan kepada GraPari Telkomsel</td>
                <td class="ck-question">Selalu</td>
                <td class="ck-question">Selama PJJ bagi siswa yang tidak aktif atau jarang hadir</td>
            </tr>
          </tbody>
      </table>
    </div>
    <!-- End Table -->

    <!-- End page content -->
@endsection