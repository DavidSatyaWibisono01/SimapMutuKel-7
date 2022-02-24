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
            <tr>
                <td>1</td>
                <td>Ono Supriadi</td>
                <td>B. Inggris</td>
                <td>Pendidik</td>
                <td class="ckk-question"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal-Profile" data-bs-whatever="@fat"><i class="fi fi-rr-eye">@extends('admin/modals/profile/profile-modal')</i></a></td>
                <td class="ckk-question"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal-Edit-Profile" data-bs-whatever="@fat"><i class="fi fi-rr-edit">@extends('admin/modals/profile/aksi/edit-profile-modal')</i></a></td>
                <td class="ckk-question"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal-Hapus-Profile" data-bs-whatever="@fat"><i class="fi fi-rr-trash">@extends('admin/modals/profile/aksi/delete-profile-modal')</i></a></td>
            </tr>
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