@extends('layout/main')

@section('container')

<!-- page content -->
<div class="right_col">
  <div class="">

    <!-- Breadcreumb -->
    <div  iv class="page-title">
      <div class="title_left">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrum-page">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      </div>
    </div>
    <!-- End Breadcreumb -->
    
    <!-- Title dari Menu -->
    <div  iv class="page-title">
      <div class="title_left">
        <h1>A. Kompetensi Inti</h1>
      </div>
      <div class="title_right_info">
        <span>lorem ipsum bebeledagan pasti jaya</span>
      </div>
    </div>
    <div class="page-title">
    </div>
    <!-- End Title dari Menu -->
      
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
                    <div class="checkbox">
						<label>
							<input type="checkbox" value=""> Tidak Pernah
							<input type="checkbox" value=""> Jarang
							<input type="checkbox" value=""> Sering
							<input type="checkbox" value=""> Selalu
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
                <td>Thornton</td>
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
                <td>Thornton</td>
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
                <td>Thornton</td>
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
                <td>Thornton</td>
                <td class="td-question">
                    <div class="form-group row">
                        <div class="col-md-9 col-sm-9 ">
                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
              <th scope="row">6</th>
                <td class="td-question">Guru memberi kesempatan kepada peserta didik untuk menguasai materi pembelajaran sesuai usia dan kemampuan belajarnya melalui pengaturan proses pembelajaran dan aktivitas yang bervariasi.</td>
                <td>Thornton</td>
                <td class="td-question">
                    <div class="form-group row">
                        <div class="col-md-9 col-sm-9 ">
                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                        </div>
                    </div>
                </td>
            </tr>
          </tbody>
      </table>
    </div>
    <!-- End Table -->

    <!-- Pagination -->
    <div class="pagination pagi-right">
      <li class="page-item">
        <button type="button" class="btn btn-pagination"><i class="fa fa-long-arrow-left"></i></button>
      </li>
        <button type="button" class="btn btn-pagination">1</button>
        <button type="button" class="btn btn-pagination">2</button>
        <button type="button" class="btn btn-pagination">3</button>
      <li class="page-item">
        <button type="button" class="btn btn-pagination"><i class="fa fa-long-arrow-right"></i></button>
      </li>
    </div>
    <!-- End Pagination -->

    <!-- End page content -->
@endsection