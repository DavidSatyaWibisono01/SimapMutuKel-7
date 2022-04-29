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

    <!-- Pagination -->
    <div class="pagination pagi-right">
      <li class="page-item">
        <button type="button" class="btn btn-pagination"><i class="fa fi-rr-arrow-left"></i></button>
      </li>
        <button type="button" class="btn btn-pagination">1</button>
        <button type="button" class="btn btn-pagination">2</button>
        <button type="button" class="btn btn-pagination">3</button>
      <li class="page-item">
        <button type="button" class="btn btn-pagination"><i class="fa fi-rr-arrow-right"></i></button>
      </li>
    </div>
    <!-- End Pagination -->

    <!-- End page content -->
@endsection
