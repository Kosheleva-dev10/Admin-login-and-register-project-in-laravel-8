@extends('master')
@section("content")
	<div class="container login-page">
		<div class="row">
			<div class="col-md-4 offset-md-4 custome-login text-center">
				<h3 class="text-center mb-3 font-weight-bold"><span class="text-primary">FORGOT</span> PASSWORD</h3>
				<form action="forgot" method="POST">
					<div class="form-group">
						@csrf
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text rounded-0" id="basic-addon1"><i class="fad fa-envelope"></i></span>
							</div>
							<input type="text" name="email" class="form-control rounded-0" placeholder="Email Id*" aria-label="Email Id*" aria-describedby="basic-addon1" required="required">
						</div>
					</div>
					<a href="/" class="btn btn-light border mb-3 rounded-0 pr-3 btn-50">BACK TO HOME</a>
					<button type="submit" class="btn btn-primary rounded-0 mb-3 btn-50">SUBMIT <i class="fad fa-sign-in-alt"></i></button>
				</form>
			</div>
		</div>
	</div>
@endsection