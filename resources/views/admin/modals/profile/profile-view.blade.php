@extends('admin/layout-menu-navbar/main')

@section('container')
<div class="right_col">
    <div class="">
        <div  iv class="page-title mb-4">
            <div class="title_left">
              <h1>Profile Pengguna</h1>
            </div>
          </div>

        {{-- <div class="text-center">
            <img src="{!! asset('assets/images/logo-wk.png') !!}" class="rounded" alt="...">
        </div> --}}

        <div class="modal-body">
            <div class="field item form-group mt-4 mb-4">
                <label for="message-text" class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" value="{{$user->name}}" id="message-text" disabled>
                </div>
            </div>
            <div class="field item form-group mb-4">
                <label for="message-text" class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" value="{{$user->jk}}" id="message-text" disabled>
                </div>
            </div>
            <div class="field item form-group mb-4">
                <label for="message-text" class="col-form-label col-md-3 col-sm-3 label-align">Bidang</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" value="{{$user->bidang}}" id="message-text" disabled>
                </div>
            </div>
            <div class="field item form-group mb-4">
                <label for="message-text" class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" value="{{$user->status}}" id="message-text" disabled>
                </div>
            </div>
            <div class="field item form-group mb-4">
                <label for="message-text" class="col-form-label col-md-3 col-sm-3 label-align">Level</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" value="{{$user->level}}" id="message-text" disabled>
                </div>
            </div>
        </div>

        <div class="field item form-group btn-data col-md-9 col-sm-9">
          <button onclick="history.back()" class="btn btn-back" data-bs-dismiss="modal">Kembali</button>
        </div>
    </div>
  </div>
</div>
@endsection
