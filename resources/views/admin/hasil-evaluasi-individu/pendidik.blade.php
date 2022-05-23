@extends('admin/layout-menu-navbar/main')

@section('container')

<!-- page content -->
<div class="right_col">
  <div class="">

    <!-- Title dari Menu -->
    <div  iv class="page-title">
      <div class="title_left">
        <h1>Hasil Evaluasi Pendidik</h1>
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
                <th>No</th>
                <th>Nama</th>
                <th>dang</th>
                <th>Status</th>
                <th colspan='4' class="ckk-question">Aksi</th>
            </tr>
          </thead>

          <tbody>
              <?php $no = 1?>
            @foreach ( $hasilPendidik as $hp )
                @foreach ( $sudahisi as $s)
                    @if ($hp->id == $s->user_id)
                        <tr>
                            <th scope="row">{{$no}}</th>
                            <td>{{$hp->name}}</td>
                            <td>{{$hp->bidang}}</td>
                            <td>{{$hp->status}}</td>
                            <td class="ckk-question"><a href="/hasil-evaluasi-individu-profil-guru/{{$hp->id}}"><i class="fa fi-rr-eye"></i></a></td>
                        </tr>
                        <?php $no++?>
                    @endif
                @endforeach
            @endforeach
          </tbody>
      </table>
    </div>
    <!-- End Table -->

    <!-- End page content -->
@endsection
