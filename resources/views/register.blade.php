
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Extrash - Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/my-login.css') }}">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</head>
<style>
	 .select2-container {
        width: 100% !important;
    }
</style>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="{{ asset('frontend/img/logo.png')}}" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title"><center>Register</center></h4>
							<form method="POST" class="my-login-validation" action="{{ route('actionregister') }}" novalidate="">
								@csrf
								<div class="form-group">
									<label for="email">Nama Lengkap</label>
									<input type="text" class="form-control" name="name" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div> 
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>
								<div class="form-group">
									<label for="password">BSU </label>
									<select class="select2 form-control" name="id_bsu">
										@foreach($bsu as $t)
											<option value="{{ $t->id }}">{{ $t->name }}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label for="password">Alamat </label>
									<textarea class="form-control" cols="6" name="alamat"></textarea>
								</div>
								<div class="form-group">
									<label for="password">Password 
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>
<!-- 
								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div> -->

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Registrasi
									</button>
								</div>
								<!-- <div class="mt-4 text-center">
									Don't have an account? <a href="register.html">Create One</a>
								</div> -->
								<div class="mt-4 text-center">
									Back To home ? <a href="/">Home</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2023 &mdash; Extrash
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="{{ asset('frontend/js/my-login.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.select2').select2({})
		})
	</script>
</body>
</html>
