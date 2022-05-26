<div class="modal fade" id="exampleModal-Tambah-Profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Profile Guru</h5>
            <a href="#" arial-label="close" data-bs-dismiss="modal"><i class="fa fa-close"></i></a>
        </div>

        <div class="text-center">
            <img src="{!! asset('assets/images/logo-wk.png') !!}" class="rounded" alt="...">
        </div>
    <form action="/tambah-pengguna" method="POST">
        @csrf
            <div class="modal-body">
                <div>
                    <label for="message-text" class="col-form-label">Nama</label>
                    <input name="nama" class="form-control" id="message-text">
                </div>
                <div>
                    <label for="message-text" class="col-form-label">Jenis Kelamin</label>
                    <select name="jk" class="form-control">
                        <option></option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div>
                    <label for="message-text" class="col-form-label">Bidang</label>
                    <select name="bidang" class="form-control">
                        <option></option>
                        <option value="Matematika">Matematika</option>
                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                        <option value="Bahasa Sunda">Bahasa Sunda</option>
                        <option value="PIPAS">PIPAS</option>
                        <option value="PKK">PKK</option>
                        <option value="Agama">Agama</option>
                        <option value="PPKn">PPKn</option>
                        <option value="Sejarah">Sejarah</option>
                        <option value="PJOK">PJOK</option>
                        <option value="Informatika">Informatika</option>
                        <option value="Program Keahlian PPLG">Program Keahlian PPLG</option>
                        <option value="Program Keahlian TJKT">Program Keahlian TJKT</option>
                        <option value="Program Keahlian DKV">Program Keahlian DKV</option>
                        <option value="Program Keahlian MPLB">Program Keahlian MPLB</option>
                        <option value="Program Keahlian PMN">Program Keahlian PMN</option>
                        <option value="Program Keahlian HTL">Program Keahlian HTL</option>
                        <option value="Program Keahlian KLN">Program Keahlian KLN</option>
                    </select>
                </div>
            <div>
                <label for="message-text" class="col-form-label">Status</label>
		    	<select name="status" class="form-control">
                    <option></option>
		    		<option value="Pendidik">Pendidik</option>
		    		<option value="Kependidikan">Kependidikan</option>
		    	</select>
            </div>
            <div>
                <label for="message-text" class="col-form-label">Username</label>
                <input type="text" class="form-control" name="username" id="message-text">
            </div>
            <div>
                <label for="message-text" class="col-form-label">Password</label>
                <input type="text" class="form-control" name="password" id="message-text">
            </div>
            <div>
                <label for="message-text" class="col-form-label">level</label>
                <select name="level" class="form-control">
                    <option></option>
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                </select>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-back" data-bs-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-tambah-data">Simpan</button>
        </div>
    </form>
    </div>
</div>
</div>
