@extends('user/layout-navbar/main')

@section('container')

<div class="right_col">
    <div class="">

        <!-- Dashboard Container -->
        <div class="col-md-3 col-sm-3  profile_left">
          <div class="profile_img">
            <div id="crop-avatar">
              <!-- Current avatar -->
              <img class="img-responsive avatar-view img-circle" src="/post-images/{{ auth()->user()->foto }}" alt="Avatar" title="Change the avatar">
            </div>
          </div>
          <h3>{{ auth()->user()->name }}</h3>
          <ul class="list-unstyled user_data">
            <li><i class="fa fi-rr-map-marker user-profile-icon"></i> SMK Wikrama Bogor
            </li>
            <li>
              <i class="fa fi-rr-briefcase user-profile-icon"></i> {{ auth()->user()->status }}
            </li>
          </ul>
          <a href="/user-edit-profile"class="btn btn-tambah-data"><i class="fa fi-rr-edit mr-2"></i>Edit Profile</a>
          <br />
        </div>
        <!-- End Dashboard Container -->
    </div>
</div>

@endsection
