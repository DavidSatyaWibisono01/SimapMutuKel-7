@extends('admin/layout-menu-navbar/main')

@section('container')

<!-- page content -->
<div class="right_col">
  <div class="">

    <!-- Title dari Menu -->
    <div  iv class="page-title">
      <div class="title_left">
        <h1>Hasil Evaluasi Kependidikan</h1>
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
                <th>Bidang</th>
                <th>Status</th>
                <th colspan='4' class="ckk-question">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1?>
            @foreach ( $hasilKependidik as $hk )
                @foreach ( $sudahisi as $s)
                    @if ($hk->id == $s->user_id)
                        <tr>
                            <th scope="row">{{$no}}</th>
                            <td>{{$hk->name}}</td>
                            <td>{{$hk->bidang}}</td>
                            <td>{{$hk->status}}</td>
                            <td class="ckk-question"><a href="/hasil-evaluasi-individu-profil-guru/{{$hk->id}}"><i class="fa fi-rr-eye"></i></a></td>
                        </tr>
                        <?php $no++?>
                    @endif
                @endforeach
            @endforeach
          </tbody>
      </table>
    </div>
    <!-- End Table -->

    <!-- Pagination -->
    <!-- End Pagination -->

    <!-- End page content -->
@endsection
