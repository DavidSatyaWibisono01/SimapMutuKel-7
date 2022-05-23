@extends('admin/layout-menu-navbar/main')

@section('container')

<!-- page content -->
<div class="right_col">
  <div class="">

    <!-- Title dari Menu -->
    <div  iv class="page-title">
      <div class="title_left">
        <h1>Hasil Evaluasi Pertanyaan Sosial</h1>
      </div>
    </div>
    <!-- End Title dari Menu -->
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
          </thead>
          <tr class="bg-table-color">
            <td></td>
            <td colspan='2'><b> Guru dapat mengidentifikasi karakteristik belajar setiap peserta didik di kelasnya </b></td>

            <td class="td-question">Tidak Pernah</td>
            <td class="td-question">Jarang</td>
            <td class="td-question">Sering</td>
            <td class="td-question">Selalu</td>
        </tr>
          @foreach ($pertanyaan as $p)
          <tbody>
            <tr>
                <td colspan='1'>{{$loop->iteration}}</td>
                <td colspan='2'>{{$p->question}}</td>
                <td class="ck-question">{{$hasil->where('answer', 'Tidak Pernah')->where('question_id', $p->id)->count()}}</td>
                <td class="ck-question">{{$hasil->where('answer', 'Jarang')->where('question_id', $p->id)->count()}}</td>
                <td class="ck-question">{{$hasil->where('answer', 'Sering')->where('question_id', $p->id)->count()}}</td>
                <td class="ck-question">{{$hasil->where('answer', 'Selalu')->where('question_id', $p->id)->count()}}</td>
            </tr>
          </tbody>
          @endforeach
      </table>
    </div>
    <!-- End Table -->

    <!-- Pagination -->
    {{-- <div class="field item form-group btn-data">
        <button type="button" class="btn btn-next">Selanjutnya</button>
    </div> --}}
    <!-- End Pagination -->

    <!-- End page content -->
@endsection
