<div class="modal fade" id="exampleModal-Tambah-Question" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="/hasil-evaluasi-individu-a-pedagogik/create" method="POST">
        @csrf
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Pertanyaan</h5>
            <a href="#" arial-label="close" data-bs-dismiss="modal"><i class="fa fa-close"></i></a>
        </div>


        <div class="modal-body">
            <label for="message-text" class="col-form-label">Masukkan Pertanyaan</label>
            <input type="text" class="form-control" id="message-text" name="question">
        </div>

        <div class="modal-body">
            <label for="message-text" class="col-form-label">Bagian</label>
		  	    <select class="form-control" name="sub_bab_id">
                @foreach($sub as $sub)
                <option value="{{$sub->id}}"{{old('sub')==$sub->nama_bab? 'selected':null}}>{{$sub->nama_bab}}</option>
                @endforeach
            </select>
		    </div>

        <div class="modal-body">
            <label for="message-text" class="col-form-label">Nomor</label>
            <select class="form-control" name="nomor">
              <option></option>
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

        <div class="modal-footer">
          <button class="btn btn-back" data-bs-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-tambah-data">Simpan</button>
        </div>
        </form>
    </div>
  </div>
</div>
