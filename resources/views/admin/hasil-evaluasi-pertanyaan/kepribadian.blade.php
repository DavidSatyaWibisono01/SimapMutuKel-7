@extends('admin/layout-menu-navbar/main')

@section('container')

<!-- page content -->
<div class="right_col">
  <div class="">
    
    <!-- Title dari Menu -->
    <div  iv class="page-title">
      <div class="title_left">
        <h1>Hasil Evaluasi Pertanyaan Kepribadian</h1>
      </div>
    </div>
    <!-- End Title dari Menu -->
    
    <!-- Button Cari & Tambah -->
    <div class="input-group">
      <input type="text" class="input-search">
      <span class="input-group-btn">
          <button type="button" class="btn btn-search"><i class="fa fi-rr-search"></i> Cari</button>
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
                <th class="ck-question" colspan='5'><b>Hasil Evaluasi</b></th>
            </tr>
            <tr class="bg-table-color">
                <td></td>
                <td colspan='2'><b> Guru dapat mengidentifikasi karakteristik belajar setiap peserta didik di kelasnya </b></td>
                
                <td class="td-question">Tidak Pernah</td>
                <td class="td-question">Jarang</td>
                <td class="td-question">Sering</td>
                <td class="td-question">Selalu</td>
            </tr>
          </thead>

          <tbody>
            <tr>
                <td colspan='1'>1</td>
                <td colspan='2'>Mohon kesediaan Anda untuk memberikan penilaian dan masukan kepada GraPari Telkomsel, dimana hal ini sangat bermanfaat untuk meningkatkan kualitas layanan kami.</td>
                <td class="ck-question">23</td>
                <td class="ck-question">88</td>
                <td class="ck-question">72</td>
                <td class="ck-question">90</td>
            </tr>
          </tbody>
      </table>
    </div>
    <!-- End Table -->

    <!-- Pagination -->
    <div class="field item form-group btn-data">
        <button type="button" class="btn btn-next">Selanjutnya</button>
    </div>
    <!-- End Pagination -->

    <!-- End page content -->
@endsection