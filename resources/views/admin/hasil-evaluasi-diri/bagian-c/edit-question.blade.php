@extends('admin/layout-menu-navbar/main')

@section('container')
<div class="right_col">
    <div class="">
        <div  iv class="page-title mb-4">
            <div class="title_left">
              <h1>Edit Pertanyaan</h1>
            </div>
          </div>

    <form method="post" action="/hasil-evaluasi-individu-c-karya-inovatif/update/{{$pertanyaan->id}}">
      @method('patch')
      @csrf
      <div class="card-body">
        <div class="field item form-group mt-4 mb-4">
                <label for="message-text" class="col-form-label col-md-3 col-sm-3 label-align">Masukkan Pertanyaan</label>
                <div class="col-md-6 col-sm-6">
                <input type="text" class="form-control" id="message-text" name="question" value="{{$pertanyaan->question}}">
                </div>
        </div>

        <div class="field item form-group mb-4">
            <label for="message-text" class="col-form-label col-md-3 col-sm-3 label-align">Bagian</label>
            <div class="col-md-6 col-sm-6">
		    	<select class="form-control" name="sub_bab_id">
		    		<option>{{$pertanyaan->subBab->nama_bab}}</option>
		    		@foreach($sub as $sub)
                    <option value="{{$sub->id}}"{{old('sub')==$sub->nama_bab? 'selected':null}}>{{$sub->nama_bab}}</option>
                    @endforeach
		    	</select>
            </div>
		</div>

      </div>
      <div class="field item form-group btn-data col-md-9 col-sm-9">
        <a class="btn btn-back" href="{{ url()->previous() }}">Kembali</a>
        <button type="submit" class="btn btn-tambah-data">Simpan</button>
      </div>
    </form>
    </div>
  </div>
@endsection
