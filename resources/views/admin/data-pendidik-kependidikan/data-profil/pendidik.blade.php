@extends('admin/layout-menu-navbar/main')

@section('container')

<!-- page content -->
<div class="right_col">
  <div class="">
    
    <!-- Title dari Menu -->
    <div  iv class="page-title">
      <div class="title_left">
        <h1>A. Kompetensi Inti</h1>
      </div>
      <div class="title_left mb-2">
        <h2>Pedagogik</h2>
      </div>
    </div>
    <!-- End Title dari Menu -->
    
    <!-- Button Cari & Tambah -->
    <div class="input-group">
      <input type="text" class="input-search">
      <span class="input-group-btn">
          <button type="button" class="btn btn-search"><i class="fa fa-search"></i> Cari</button>
      </span>
    </div>
    <!-- End Button Cari & Tambah -->
      
    <!-- Table -->
    <div class="table-responsive">
      <table class="table table-hover bulk_action">
          <thead>
            <tr>
                <th><b>No</b></th>
                <th colspan='2'><b>Pertanyaan</b></th>
                <th class="ck-question" colspan='5'><b>Aksi</b></th>
            </tr>
          </thead>

          <tbody>
            <tr class="bg-table-color">
                <td></td>
                <td colspan='2'><b> Guru dapat mengidentifikasi karakteristik belajar setiap peserta didik di kelasnya </b></td>
                
                <td class="ckk-question"><a href=""><i class="fa fa-edit"></i></a></td>
                <td class="ckk-question"><a href=""><i class="fa fa-trash"></i></a></td>
            </tr>
            <tr>
                <td colspan='1'>1</td>
                <td colspan='2'>Mohon kesediaan Anda untuk memberikan penilaian dan masukan kepada GraPari Telkomsel, dimana hal ini sangat bermanfaat untuk meningkatkan kualitas layanan kami.</td>
                <td class="ckk-question"><a href=""><i class="fa fa-edit"></i></a></td>
                <td class="ckk-question"><a href=""><i class="fa fa-trash"></i></a></td>
            </tr>
          </tbody>
      </table>
    </div>
    <!-- End Table -->

    <!-- End page content -->
@endsection