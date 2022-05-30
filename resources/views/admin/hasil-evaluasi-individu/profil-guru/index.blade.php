@extends('admin/layout-menu-navbar/navbar')

@section('container')

<form action="" method="GET">
<!-- page content -->
<div class="container-card">
  <div class="">

    <!-- Title dari Menu -->
    <div  iv class="page-title">
      <div class="title_left">
        <h1>{{ $hasil[0]->User->name }}</h1>
      </div>
      <div class="title_left">
        <h2>Pelajaran : {{ $hasil[0]->User->bidang }}</h2>
        <h2>Status : {{ $hasil[0]->User->status }}</h2>
      </div>
    </div>
    <!-- End Title dari Menu -->

    <!-- Button Cari & Tambah -->
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
                <th colspan="2"></th>
                <th class="cks-question-dua">Level Kinerja</th>
                <th class="cks-question">Kendala yang dihadapi</th>
            </tr>
          </thead>

          <tbody>
          @foreach ($hasil as $h)
          <tr>
              <td colspan='1'>{{$loop->iteration}}</td>
              <td colspan='2'>{{$h->Pertanyaan->question}}</td>
              <td class="ck-question">{{$h->answer}}</td>
              <td class="ck-question">{{$h->kendala}}</td>
          </tr>
          @endforeach
          </tbody>
      </table>
    </div>
    <!-- End Table -->

    <!-- End page content -->
</form>
@endsection
