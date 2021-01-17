@extends('master')
@section("content")
@if(Session::has('user'))
	<? redirect('welcome'); ?>
@else
	<div class="container login-page">
		<div class="row">
			<div class="col-md-4 offset-md-4 custome-login text-center">
				<h3 class="text-center mb-3 main-title"><span class="text-primary">STORE</span> ADMIN</h3>
				<form action="/" method="POST">
					<div class="form-group">
						@csrf
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text rounded-0" id="basic-addon1"><i class="fad fa-envelope"></i></span>
							</div>
							<input type="text" name="email" class="form-control rounded-0" placeholder="Email Id*" aria-label="Email Id" aria-describedby="basic-addon1" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text rounded-0" id="basic-addon1"><i class="fad fa-lock-alt"></i></span>
							</div>
							<input type="password" name="password" class="form-control rounded-0" placeholder="Password*" aria-label="password" aria-describedby="basic-addon1" required="required">
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-block rounded-0 mb-3">LOGIN <i class="fad fa-sign-in-alt"></i></button>
					<a href="register">Create an account</a> | <a href="forgot">Forgot Passwort?</a>
				</form>
			</div>
		</div>
	</div>
@endif
@endsection