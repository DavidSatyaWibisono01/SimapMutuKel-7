@extends('user/evadir/eval-diri-tipe-1/layout-nav/nav-bread')

@section('container')

    <div class="container-card">
        <div class="">
            
            <!-- Title dari Menu -->
            <div class="page-title">
                <div class="title_left page-title-left">
                    <h1>Evaluasi Diri Guru Untuk Rencana Pengembangan
                    Keprofesian Berkelanjutan Bagian 1</h1>
                </div>
            </div>
            <!-- End Title dari Menu -->

            <div class="clearfix"></div>
            <div class="card card-body-color">
                <div class="card-body">
                    <div class="title-left title-left-card">
                        <h2><b>Pertanyaan akan dibagi dalam Beberapa Bagian :</b></h2>
                    </div>

                    <div class="page-title">
                        <div class="title_left">
                        <h5><b>A.</b> Kompetensi inti</h5>
                            <ul>
                                <li>Pedagogik</li>
                                <li>Kepribadian</li>
                                <li>Sosial</li>
                                <li>Profesi</li>
                            </ul>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="field item form-group btn-card-user">
                <p>Total : 91 Pertanyaan</p>
                <a href="/evaluasi-diri-tipe1">
                    <button type="button" class="btn btn-next-card">Mulai</button>
                </a>
            </div>

        </div>
    </div>

@endsection