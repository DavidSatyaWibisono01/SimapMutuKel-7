@extends('admin/layout-menu-navbar/main')

@section('container')
    
    <div class="right_col">
    <!-- Button Cari & Tambah -->
    <div class="input-group">
      <input type="text" class="input-search">
      <span class="input-group-btn">
          <button type="button" class="btn btn-search"><i class="fa fa-search"></i> Cari</button>
      </span>
        <span class="input-group-btn">
            <button type="button" class="btn btn-tambah-data" data-bs-toggle="modal" data-bs-target="#exampleModal-Profile" data-bs-whatever="@fat"><i class="fa fa-plus"></i> Tambah</button>
            @extends('admin/modals/profile/profile-modal')
        </span>

    </div>


    <span class="input-group-btn">
        <button type="button" class="btn btn-tambah-data" data-bs-toggle="modal" data-bs-target="#exampleModal-Edit-Profile" data-bs-whatever="@fat"><i class="fa fa-plus"></i> Cek Keun Dude</button>
        @extends('admin/modals/profile/aksi/edit-profile-modal')
    </span>
    <!-- End Button Cari & Tambah -->
    </div>

@endsection