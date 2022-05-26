@extends('admin/layout-menu-navbar/main')

@section('container')

<!-- page content -->
<div class="right_col">
  <div class="">

    <!-- Title dari Menu -->
    <div  iv class="page-title">
      <div class="title_left">
        <h1>A. Kompetensi Inti</h1>
      </div>
      <div class="title_left mb-2">
        <h2>Profesional</h2>
      </div>
    </div>
    <!-- End Title dari Menu -->

    <!-- Button Cari & Tambah -->
    <div class="input-group">
      <span class="input-group-btn">
          <button type="button" class="btn btn-tambah-data"  data-bs-toggle="modal" data-bs-target="#exampleModal-Tambah-Question" data-bs-whatever="@fat"><i class="fa fi-rr-add"></i> Tambah Pertanyaan</button>
          @extends('admin/hasil-evaluasi-diri/bagian-a/profesional/create-question')
      </span>
    </div>
    <!-- End Button Cari & Tambah -->

    <!-- Table -->
    <div class="table-responsive">
      <table class="table table-hover bulk_action">
          <thead>
            <tr>
                <th><b>No</b></th>
                <th colspan='2'><b>Pertanyaan</b></th>
                <th class="ck-question" colspan='5'><b>Aksi</b></th>
            </tr>
            {{-- @if ($sub != null)

            @foreach ($sub as $sb )
            <tr class="bg-table-color">
                <td></td>
                <td colspan='4'><b> {{$sb->nama_bab}} </b></td>
            </tr>
            @endforeach
            @endif --}}
          </thead>

          <tbody>
            <?php $no=1 ?>
            @if ($sub != null)
            @foreach ($sub as $sb )
            <tr class="bg-table-color">
                <td></td>
                <td colspan='4'><b> {{$sb->nama_bab}} </b></td>
            </tr>
                @foreach ($pertanyaan as $prtn)
                @if ($prtn->bab_id == 4)
                    @if ($prtn->sub_bab_id == $sb->id)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$prtn->question}}</td>
                            <td class="ckk-question"><a href="/hasil-evaluasi-individu-a-profesional/edit/{{$prtn->id}}" ><i class="fi fi-rr-edit"></i></a></td>
                            <form action="/hasil-evaluasi-individu-a-profesional/delete/{{$prtn->id}}" method="post">
                                @method('delete')
                                @csrf
                            <td class="ckk-question"><button class="border-0" type="submit" ><i class="fi fi-rr-trash"></i></button></td>
                            </form>
                        </tr>
                        <?php $no++?>
                    @endif
                @endif
                @endforeach
            @endforeach
            @endif
          </tbody>
      </table>
    </div>
    <!-- End Table -->

    <!-- End page content -->
@endsection
