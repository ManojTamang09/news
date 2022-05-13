<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Here</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="user/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="user/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="user/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="user/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="user/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="user/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="user/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="user/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="user/css/util.css">
	<link rel="stylesheet" type="text/css" href="user/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('user/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				 <form method="POST" action="{{ route('login') }}" class="login100-form" enctype="multipart/form-data">
                    @csrf
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23">
						<span class="label-input100">Username</span>

                        <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="focus-input100" role="alert"  data-symbol="&#xf190;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>

					<div class="wrap-input100 validate-input" >
						<span class="label-input100">Password</span>

                        <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="focus-input100" role="alert"  data-symbol="&#xf190;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>

                    <div class="text-right p-t-8 p-b-31">
					&nbsp;
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Login
							</button>
						</div>
					</div>


				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="user/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="user/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="user/vendor/bootstrap/js/popper.js"></script>
	<script src="user/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="user/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="user/vendor/daterangepicker/moment.min.js"></script>
	<script src="user/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="user/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="user/js/main.js"></script>

</body>
</html>


