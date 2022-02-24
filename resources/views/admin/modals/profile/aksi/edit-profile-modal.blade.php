<div class="modal fade" id="exampleModal-Edit-Profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Profile Guru</h5>
            <a href="#" arial-label="close" data-bs-dismiss="modal"><i class="fa fa-close"></i></a>
        </div>

        <div class="text-center">
            <img src="{!! asset('assets/images/logo-wk.png') !!}" class="rounded" alt="...">
        </div>

        <div class="modal-body">
            <form>
                <label for="message-text" class="col-form-label">Nama</label>
                <input class="form-control" placeholder="Biddin Abizar" id="message-text"></input>
            </form>
            <form>
                <label for="message-text" class="col-form-label">Jenis Kelamin</label>
		    	<select class="form-control">
		    		<option></option>
		    		<option>Setengah Cewe</option>
		    		<option>Setengah Cowo</option>
		    		<option>Gapunya Kelamin</option>
		    	</select>
            </form>
            <form>
                <label for="message-text" class="col-form-label">Bidang</label>
		    	<select class="form-control">
		    		<option></option>
		    		<option>OPM - Operasi Pelajar Mengajar</option>
		    		<option>Cara jadi Komunis</option>
		    		<option>Cara Menjajah Amerika</option>
		    	</select>
            </form>
            <form>
                <label for="message-text" class="col-form-label">Status</label>
		    	<select class="form-control">
		    		<option></option>
		    		<option>Jomblo Fisabililah</option>
		    		<option>Jomblo Akut</option>
		    		<option>Perawan tapi kelamin koncol</option>
		    	</select>
            </form>
            <form>
                <label for="message-text" class="col-form-label">Tahun Ajaran</label>
		    	<select class="form-control">
		    		<option></option>
		    		<option>2012-2020</option>
		    		<option>2081-3021</option>
		    		<option>1 Masehi - 1.5 Masehi</option>
		    	</select>
            </form>
            <form>
                <label for="message-text" class="col-form-label">Username</label>
                <input class="form-control" placeholder="Bekerja di PT. Mencari Cinta Sejati" id="message-text"></input>
            </form>
            <form>
                <label for="message-text" class="col-form-label">Password</label>
                <input class="form-control" placeholder="Rahasia banget" id="message-text"></input>
            </form>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-back" data-bs-dismiss="modal" >Kembali</button>
          <button type="button" class="btn btn-tambah-data" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Simpan</button>
          @extends('admin/modals/profile/aksi/confirm-profile-modal')
        </div>
    </div>
  </div>
</div>