@extends('user/layout-navbar/navbar')

@section('container')

    <div class="container-card">
        <div class="">
            
            <!-- Title dari Menu -->
            <div class="page-title">
                <div class="title_left page-title-left">
                    <h1>Evaluasi Diri Guru untuk Rencana Pengembangan Keprofesian Berkelanjutan</h1>
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
                                <li>Berbagai hal terkait dengan pemenuhan peningkatan kompetensi inti tersebut</li>
                            </ul>
                            <h5><b>B.</b> Kompetensi Menghasilkan Publikasi Ilmiah.</h5>
                            <h5><b>C.</b> Kompetensi Menghasilkan Karya Inovatif.</h5>
                            <h5><b>D.</b> Kompetensi Untuk Penunjang Pelaksanaan Pembelajaran Berkualitas (TIK, Bahasa Asing, Dsb).</h5>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="field item form-group btn-card-user">
                <p>Total : 91 Pertanyaan</p>
                <a href="/evaluasi-diri-tipe2">
                    <button type="button" class="btn btn-next-card">Mulai</button>
                </a>
            </div>

        </div>
    </div>

@endsection