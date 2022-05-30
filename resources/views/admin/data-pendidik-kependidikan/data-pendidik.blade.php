@extends('admin/layout-menu-navbar/main')

@section('container')
@if ($message = Session::get('hapus'))
  <?php echo "<script>alert('Data Pengguna Berhasil Dihapus')</script>"; ?>
@endif
@if ($message = Session::get('update'))
  <?php echo "<script>alert('Data Pengguna Berhasil Diubah')</script>"; ?>
@endif
@if ($message = Session::get('simpan'))
  <?php echo "<script>alert('Data Pengguna Berhasil Disimpan')</script>"; ?>
@endif
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
            @foreach ($user as $usr)
            <tr>

                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$usr->name}}</td>
                <td>{{$usr->bidang}}</td>
                <td>{{$usr->status}}</td>
                <td class="ckk-question"><a href="/lihat-pengguna/{{$usr->id}}" ><i class="fi fi-rr-eye"></i></a></td>
                <td class="ckk-question"><a href="/edit-pengguna/{{$usr->id}}" ><i class="fi fi-rr-edit"></i></a></td>
                <form action="hapus-pengguna/{{$usr->id}}" method="post">
                    @method('delete')
                    @csrf
                <td class="ckk-question"><button class="border-0" type="submit" ><i class="fi fi-rr-trash"></i></button></td>
                </form>
                {{-- <td class="ckk-question"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal-Hapus-Profile" data-bs-whatever="@fat"><i class="fi fi-rr-trash">@extends('admin/modals/profile/aksi/delete-profile-modal')</i></a></td> --}}
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
    <!-- End Table -->
    <!-- End page content -->
@endsection
