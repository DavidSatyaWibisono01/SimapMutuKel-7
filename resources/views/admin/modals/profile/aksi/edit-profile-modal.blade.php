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
		    		<option>Wanita</option>
		    		<option>Laki-laki</option>
		    		<option> - </option>
		    	</select>
            </form>
            <form>
                <label for="message-text" class="col-form-label">Bidang</label>
		    	<select class="form-control">
		    		<option></option>
		    		<option>Bahasa Sunda</option>
		    		<option>Bahasa Indonesia</option>
		    		<option>PPLG</option>
		    	</select>
            </form>
            <form>
                <label for="message-text" class="col-form-label">Status</label>
		    	<select class="form-control">
		    		<option></option>
		    		<option>Pendidik</option>
		    		<option>Kependidikan</option>
		    	</select>
            </form>
            <form>
                <label for="message-text" class="col-form-label">Tahun Ajaran</label>
		    	<select class="form-control">
		    		<option></option>
		    		<option>2021-2022</option>
		    	</select>
            </form>
            <form>
                <label for="message-text" class="col-form-label">Username</label>
                <input class="form-control" placeholder="Tes" id="message-text"></input>
            </form>
            <form>
                <label for="message-text" class="col-form-label">Password</label>
                <input class="form-control" placeholder="12345" id="message-text"></input>
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