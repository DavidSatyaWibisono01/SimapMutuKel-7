@extends('admin/layout-menu-navbar/main')

@section('container')

<!-- page content -->
<div class="right_col">
  <div class="">

    <!-- Title dari Menu -->
    <div  iv class="page-title">
      <div class="title_left">
        <h1>Data Profil Pendidik</h1>
      </div>
    </div>
    <!-- End Title dari Menu -->

    <!-- Button Cari & Tambah -->
    <div class="input-group">
      <input type="text" class="input-search">
      <span class="input-group-btn">
          <button type="button" class="btn btn-search"><i class="fi fi-rr-search"></i> Cari</button>
      </span>
        <span class="input-group-btn">
            <button type="button" class="btn btn-tambah-data" data-bs-toggle="modal" data-bs-target="#exampleModal-Tambah-Profile" data-bs-whatever="@fat"><i class="fi fi-rr-add"></i> Tambah</button>
            @extends('admin/modals/profile/aksi/tambah-profile-modal')
        </span>
    </div>
    <!-- End Button Cari & Tambah -->
    <!-- Table -->
    <div class="table-responsive">
      <table class="table table-hover bulk_action">
          <thead>
            <tr>
                <th><b>No</b></th>
                <th><b>Nama</b></th>
                <th><b>Bidang</b></th>
                <th><b>Status</b></th>
                <th colspan='4' class="ckk-question"><b>Aksi</b></th>
            </tr>
          </thead>

          <tbody>
            @foreach ($pendidik as $pndk)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$pndk->name}}</td>
                <td>{{$pndk->bidang}}</td>
                <td>{{$pndk->status}}</td>
                <td>{{$pndk->username}}</td>
                <td>{{$pndk->password}}</td>
                <td>
                  <a href="#"><i class="fa fa-eye"></i></a>
                  <a href="#"><i class="fa fa-edit"></i></a>
                  <a href="#"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
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
