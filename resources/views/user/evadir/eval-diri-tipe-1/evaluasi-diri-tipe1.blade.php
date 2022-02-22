@extends('user/layout-navbar/navbar')

@section('container')

<!-- page content -->
<div class="container-card">
  <div class="">
    
    <!-- Title dari Menu -->
    <div  iv class="page-title">
      <div class="title_left">
        <h1>A. Kompetensi Inti</h1>
      </div>
      <div class="title_left mb-3">
        <h2>Pedagogik</h2>
      </div>
    </div>
    <!-- End Title dari Menu -->

    <!-- Button back to home -->
    <div class="btn-home">
      <span class="input-group-btn">
        <a href="/user-dashboard">
          <button type="button" class="btn btn-back">Kembali ke Dashboard</button>
        </a>
      </span>
    </div>
    <!-- End Button back to home -->
      
    <!-- Table -->
    <div class="table-responsive">
      <table class="table table-hover bulk_action">
          <thead>
            <tr>
                <th><b>No</b></th>
                <th colspan='2'><b>Pertanyaan</b></th>
                <th class="ck-question" colspan='5'><b>Hasil Evaluasi</b></th>
                <th class="tds-question" colspan='5'><b>Kendala yang dihadapi</b></th>
            </tr>
            <tr class="bg-table-color">
                <td></td>
                <td colspan='2'><b></b></td>
                
                <td class="td-question">Tidak Pernah</td>
                <td class="td-question">Jarang</td>
                <td class="td-question">Sering</td>
                <td class="td-question">Selalu</td>

                <td class="tds-question" colspan='2'>Harap diisi</td>
            </tr>
          </thead>

          <tbody>
            <tr>
                <td colspan='1'>1</td>
                <td colspan='2'>Mohon kesediaan Anda untuk memberikan penilaian dan masukan kepada GraPari Telkomsel, dimana hal ini sangat bermanfaat untuk meningkatkan kualitas layanan kami.</td>
                <td class="ck-question">
									<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
                </td>
                <td class="ck-question">
									<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
                </td>
                <td class="ck-question">
									<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
                </td>
                <td class="ck-question">
									<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
                </td>
                <td colspan='2'>
                  <textarea class="form-control" rows="3" placeholder="" ></textarea>
                </td>
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