@extends('admin/layout-menu-navbar/main')

@section('container')
<div class="right_col">
    <div class="">
        <div  iv class="page-title mb-4">
            <div class="title_left">
              <h1>Edit Pertanyaan</h1>
            </div>
          </div>

    <form method="post" action="/hasil-evaluasi-individu-a-profesional/update/{{$pertanyaan->id}}">
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
		    		<option>{{$pertanyaan->sub_bab_id}}</option>
		    		@foreach($sub as $sub)
                    <option value="{{$sub->id}}"{{old('sub')==$sub->nama_bab? 'selected':null}}>{{$sub->nama_bab}}</option>
                    @endforeach
		    	</select>
            </div>
		</div>

        <div class="field item form-group mb-4">
            <label for="message-text" class="col-form-label col-md-3 col-sm-3 label-align">Nomor</label>
            <div class="col-md-6 col-sm-6">
			<select class="form-control" name="nomor">
				<option value="{{$pertanyaan->nomor}}">{{$pertanyaan->nomor}}</option>
				<option value="1.1">1.1</option>
                <option value="1.2">1.2</option>
                <option value="1.3">1.3</option>
                <option value="1.4">1.4</option>
                <option value="1.5">1.5</option>
                <option value="1.6">1.6</option>
                <option value="1.7">1.7</option>
                <option value="1.8">1.8</option>
                <option value="1.9">1.9</option>
			</select>
            </div>
		</div>
      </div>
      <div class="field item form-group btn-data col-md-9 col-sm-9">
        <button type="button" class="btn btn-back" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-tambah-data">Simpan</button>
      </div>
    </form>
    </div>
  </div>
@endsection
