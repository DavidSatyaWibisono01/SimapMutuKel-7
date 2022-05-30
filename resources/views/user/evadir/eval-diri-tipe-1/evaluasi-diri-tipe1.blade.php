@extends('user/layout-navbar/navbar')

@section('container')
@if ($message = Session::get('success'))
  <?php echo "<script>alert('Anda telah menyelesaikan pengisian form Evaluasi Diri Bagian 1')</script>"; ?>
@endif
<!-- page content -->
<div class="container-card">
  <div class="">

    <!-- Title dari Menu -->
    <div  iv class="page-title">
      <div class="title_left">
        <h1>Evaluasi Diri Bagian 1</h1>
      </div>
    </div>
    <!-- End Title dari Menu -->

    <!-- Button back to home -->
    <div class="btn-home">
      <span class="input-group-btn">
        <a href="/user-dashboard">
          <button type="button" class="btn btn-back">Kembali ke Dashboard</button>
        </a>
      </span>
    </div>
    <!-- End Button back to home -->

    <!-- Table -->
    <div class="table-responsive">
      <table class="table table-hover bulk_action">
        <thead>
            <tr>
                <th><b>No</b></th>
                <th colspan='2'><b>Pertanyaan</b></th>
                <th class="ck-question" colspan='5'><b>Level Kinerja</b></th>
                <th class="tds-question" colspan='5'><b>Kendala yang dihadapi</b></th>
            </tr>
            <tr class="bg-table-color">
                <td></td>
                <td colspan='2'></td>

                <td class="td-question">Tidak Pernah</td>
                <td class="td-question">Jarang</td>
                <td class="td-question">Sering</td>
                <td class="td-question">Selalu</td>

                <td class="tds-question" colspan='2'>Harap diisi</td>
            </tr>
        </thead>
        @foreach ($pertanyaan as $p)
        <tbody>
            <form action="{{url('evaluasi-diri-tipe1/simpanJawaban/'.$p->id)}}" method="POST">
                @csrf
                <input type="hidden" name="bagian" value="{{$p->bagian}}">
                <tr>
                    <td colspan='1'>{{$loop->iteration}}</td>
                    <td colspan='2'>{{$p->question}}</td>
                    <td class="ck-question">
                                      <input type="radio" value="Tidak Pernah" name="option[{{$p->id}}]" required>
                    </td>
                    <td class="ck-question">
                                      <input type="radio" value="Jarang" name="option[{{$p->id}}]" required>
                    </td>
                    <td class="ck-question">
                                      <input type="radio" value="Sering" name="option[{{$p->id}}]" required>
                    </td>
                    <td class="ck-question">
                                      <input type="radio" value="Selalu" name="option[{{$p->id}}]" required>
                    </td>
                    <td colspan='2'>
                      <textarea class="form-control" rows="3" name="kendala[{{$p->id}}]" placeholder="" ></textarea>
                    </td>
                </tr>
        </tbody>
        @endforeach
      </table>
    </div>
    <!-- End Table -->

    <!-- Pagination -->
    <div class="field item form-group btn-data">
        <button type="submit" class="btn btn-next">Selesai</button>
    </form>
    </div>
    <!-- End Pagination -->
  </div>
</div>
    <!-- End page content -->
@endsection
