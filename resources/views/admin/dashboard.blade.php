@extends('admin/layout-menu-navbar/main')

@section('container')

<div class="right_col">
    <div class="">

        <!-- Dashboard Container -->
        <div class="col-md-3 col-sm-3  profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="{!! asset('assets/images/profile-dash.png') !!}" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>Samuel Doe</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> SMK Wikrama Bogor
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Kependidikan
                        </li>
                      </ul>

                      <a class="btn btn-edit-profile"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br />

                    </div>
        <!-- End Dashboard Container -->
        
    </div>
</div>

@endsection