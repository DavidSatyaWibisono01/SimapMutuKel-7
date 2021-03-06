@extends('layout-login.main-login')

@section('container')

	<div class="limiter">
		<div class="container-login100">
            <div class="wrap-login100">
                @if ($message = Session::get('login_error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 {{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @endif

					<span class="login100-form-title p-b-26">
						SIMAP MUTU
					</span>
					<span class="login100-form-title p-b-48">
						<img class="logo-wk-login" src="{!! asset('assets/images/login/logo-wk.png') !!}">
					</span>
                    <form action="{{ url('/login') }}" method="POST">
                    @csrf
					<div class="wrap-input100 validate-input" data-validate = "Masukan Username">
						<input class="input100"  type="text" name="username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukan password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

                    </form>
			</div>
		</div>
	</div>
@endsection
