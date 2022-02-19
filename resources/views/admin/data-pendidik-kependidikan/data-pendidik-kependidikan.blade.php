@extends('admin/layout-menu/main')

@section('container')

<!-- page content -->
<div class="right_col">
  <div class="">

    <!-- Breadcreumb -->
    <div  iv class="page-title">
      <div class="title_left">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrum-page">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      </div>
    </div>
    <!-- End Breadcreumb -->
    
    <!-- Title dari Menu -->
    <div  iv class="page-title">
      <div class="title_left">
        <h1>Data Pendidik dan Kependidikan</h1>
      </div>
    </div>
    <!-- End Title dari Menu -->
    
    <!-- Button Cari & Tambah -->
    <div class="input-group">
      <input type="text" class="input-search">
      <span class="input-group-btn">
          <button type="button" class="btn btn-search"><i class="fa fa-search"></i> Cari</button>
      </span>
        <span class="input-group-btn">
            <button type="button" class="btn btn-tambah-data"><i class="fa fa-plus"></i> Tambah</button>
        </span>
    </div>
    <!-- End Button Cari & Tambah -->
    
    <!-- Table -->
    <div class="table-responsive">
      <table class="table table-hover bulk_action">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Bidang</th>
              <th>Status</th>
              <th>Apa Aja</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <th scope="row">1</th>
                <td>Mark wtwtwete wetete</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>
                  <a href="#"><i class="fa fa-eye"></i></a>
                  <a href="#"><i class="fa fa-edit"></i></a>
                  <a href="#"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
              <th scope="row">2</th>
                <td>Jacob etwtewt</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
                <td>
                  <a href="#"><i class="fa fa-eye"></i></a>
                  <a href="#"><i class="fa fa-edit"></i></a>
                  <a href="#"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
              <th scope="row">3</th>
                <td>Jacob etwtewt</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
                <td>
                  <a href="#"><i class="fa fa-eye"></i></a>
                  <a href="#"><i class="fa fa-edit"></i></a>
                  <a href="#"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
              <th scope="row">4</th>
                <td>Jacob etwtewt</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
                <td>
                  <a href="#"><i class="fa fa-eye"></i></a>
                  <a href="#"><i class="fa fa-edit"></i></a>
                  <a href="#"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
              <th scope="row">5</th>
                <td>Jacob etwtewt</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
                <td>
                  <a href="#"><i class="fa fa-eye"></i></a>
                  <a href="#"><i class="fa fa-edit"></i></a>
                  <a href="#"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
              <th scope="row">6</th>
                <td>Jacob etwtewt</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
                <td>
                  <a href="#"><i class="fa fa-eye"></i></a>
                  <a href="#"><i class="fa fa-edit"></i></a>
                  <a href="#"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
          </tbody>
      </table>
    </div>
    <!-- End Table -->

    <!-- Pagination -->
    <div class="pagination pagi-right">
      <li class="page-item">
        <button type="button" class="btn btn-pagination"><i class="fa fa-long-arrow-left"></i></button>
      </li>
        <button type="button" class="btn btn-pagination">1</button>
        <button type="button" class="btn btn-pagination">2</button>
        <button type="button" class="btn btn-pagination">3</button>
      <li class="page-item">
        <button type="button" class="btn btn-pagination"><i class="fa fa-long-arrow-right"></i></button>
      </li>
    </div>
    <!-- End Pagination -->

    <!-- End page content -->
@endsection