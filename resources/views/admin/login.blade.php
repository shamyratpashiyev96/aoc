<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('assets/admin_assets/vendors/core/core.css')}}">

	<link rel="stylesheet" href="{{asset('admin_assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('admin_assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="{{asset('admin_assets/css/demo_1/style.css')}}">
</head>
<body>
<div class="main-wrapper">
	<div class="page-wrapper full-page">
		@if (Session::get('success'))
			<div class="alert alert-success text-center">
				<strong>
					{{Session::get('success')}}
				</strong>
			</div>
		@endif
		<div class="page-content d-flex align-items-center justify-content-center">
			<div class="row w-100 mx-0 auth-page">
				<div class="col-md-8 col-xl-6 mx-auto">
					<div class="card">
						<div class="row">
							<div class="col-md-4 pr-md-0">
								<div class="auth-left-wrapper">

								</div>
							</div>
							<div class="col-md-8 pl-md-0">
								<div class="auth-form-wrapper px-4 py-5">
									<a href="#" class="noble-ui-logo d-block mb-2">Admin</a>
									{{-- <h5 class="text-muted font-weight-normal mb-4">
										@if ($errors->any())
											
										@else
											Hoş geldiňiz! Hasabyňyza giriň.
										@endif
									</h5> --}}
									<form class="forms-sample" action="{{ route('loginPost') }}" method="POST">
										@csrf
										<div class="form-group">
											<label for="exampleInputEmail1">Ulanyjy adyňyz</label>
											<input type="text" class="form-control" name="email" value="{{old('email')}}" type="email" autocomplete="new-password"
														 id="exampleInputEmail1" placeholder="Ulanyjy adyňyz">
											@error('email')
												<span style="color: red">
													{{ $message }}
												</span>	
											@enderror
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Açar sözüňiz</label>
											<input type="password" class="form-control" name="password" value="{{old('password')}}" autocomplete="new-password"
														 id="exampleInputPassword1" autocomplete="current-password" placeholder="Açar sözüňiz">
											@error('password')
												<span style="color: red">
													{{ $message }}
												</span>	
											@enderror
										</div>
										<div class="mt-3">
											<button class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Giriň</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

	<script src="{{asset('admin_assets/vendors/core/core.js')}}"></script>
	<script src="{{asset('admin_assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('admin_assets/js/template.js')}}"></script>
</body>
</html>
