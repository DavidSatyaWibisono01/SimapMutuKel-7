@extends('user/layout-navbar/navbar')

@section('container')

<!-- page content -->
<div class="container-card">
  <div class="">
    
    <!-- Title dari Menu -->
    <div  iv class="page-title">
      <div class="title_left">
        <h1>A. Kompetensi Inti</h1>
      </div>
      <div class="title_left mb-3">
        <h2>Pedagogik</h2>
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
              <th>No.</th>
              <th class="td-question">Pertanyaan</th>
              <th class="td-question">Level Kinerja</th>
              <th class="td-question">Kendala yang Dihadapi</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <th scope="row">1</th>
                <td class="td-question">Guru dapat mengidentifikasi karakteristik belajar setiap peserta didik di kelasnya.</td>
                <td class="ck-question">
                  <div class="radio">
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
									</div>
                </td>
                <td class="td-question">
                    <div class="form-group row">
                        <div class="col-md-9 col-sm-9 ">
                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
              <th scope="row">2</th>
                <td class="td-question">Guru memberi kesempatan kepada peserta didik untuk menguasai materi pembelajaran sesuai usia dan kemampuan belajarnya melalui pengaturan proses pembelajaran dan aktivitas yang bervariasi.</td>
                <td>
                  <div class="radio">
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
									</div>
                </td>
                <td class="td-question">
                    <div class="form-group row">
                        <div class="col-md-9 col-sm-9 ">
                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
              <th scope="row">3</th>
                <td class="td-question">Guru memberi kesempatan kepada peserta didik untuk menguasai materi pembelajaran sesuai usia dan kemampuan belajarnya melalui pengaturan proses pembelajaran dan aktivitas yang bervariasi.</td>
                <td>
                  <div class="radio">
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
									</div>
                </td>
                <td class="td-question">
                    <div class="form-group row">
                        <div class="col-md-9 col-sm-9 ">
                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
              <th scope="row">4</th>
                <td class="td-question">Guru memberi kesempatan kepada peserta didik untuk menguasai materi pembelajaran sesuai usia dan kemampuan belajarnya melalui pengaturan proses pembelajaran dan aktivitas yang bervariasi.</td>
                <td>
                  <div class="radio">
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
									</div>
                </td>
                <td class="td-question">
                    <div class="form-group row">
                        <div class="col-md-9 col-sm-9 ">
                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
              <th scope="row">5</th>
                <td class="td-question">Guru memberi kesempatan kepada peserta didik untuk menguasai materi pembelajaran sesuai usia dan kemampuan belajarnya melalui pengaturan proses pembelajaran dan aktivitas yang bervariasi.</td>
                <td>
                <div class="radio">
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
										<label>
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> selalu
										</label>
									</div>
                </td>
                <td class="td-question">
                    <div class="form-group row">
                        <div class="col-md-9 col-sm-9 ">
                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
          </tbody>
      </table>
    </div>
    <!-- End Table -->

    <!-- Pagination -->
    <div class="field item form-group btn-data">
        <button type="button" class="btn btn-next">Selanjutnya</button>
    </div>
    <!-- End Pagination -->

    <!-- End page content -->
@endsection