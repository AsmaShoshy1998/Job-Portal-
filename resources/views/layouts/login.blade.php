<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<link rel="stylesheet" href="{{url('/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('/css/my-login.css')}}">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
			
					<div class="cardx fat mt-5">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" action="">
                                @csrf

								@if ( Session::get('success'))
									 <div class="alert alert-success">
										 {{ Session::get('success') }}
									 </div>
								@endif
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus placeholder="Enter email">
                                   
								</div>

								<div class="form-group">
									<label for="password">Password
										
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye placeholder="Enter password">
                                    
								</div>

								</div>

								<div class="text-center">
									<button type="submit" class="btn btn-primary">
										Login
									</button>
								</div>
								
							</form>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</section>


	<script src="{{url('/js/popper.js')}}"></script>
	<script src="{{url('/js/bootstrap.js')}}"></script>
	<script src="{{url('/js/my-login.js')}}"></script>
</body>
</html>