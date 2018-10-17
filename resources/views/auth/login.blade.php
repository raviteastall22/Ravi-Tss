<!DOCTYPE html>
<html lang="en">
<head>
	<title>TRUX.AI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="{{ asset('public/images/Kryptunit-logo.png') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/fonts/iconic/css/material-design-iconic-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/animate/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/css-hamburgers/hamburgers.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/animsition/css/animsition.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/select2/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/daterangepicker/daterangepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/main.css') }}">
        <style>
            .cus_error{color:red;}
        </style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background: url({{ asset('public/images/background.png') }}), #1865cacf;background-size:cover;background-position:center;">
			<div class="wrap-login100 p-l-25 p-r-25 p-t-30 p-b-30">
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf
					<span class="login100-form-title p-b-35">
						<img src="{{ asset('public/images/Kryptunit_white.png') }}">
					</span>
					<div class="wrap-input100  m-b-23 bdr-bot" > <!--validate-input-->
                        <input id="email" class="input100 {{ $errors->has('email') ? ' form-has-error' : '' }}" type="text" name="email" placeholder="Enter Username" value="{{ old('email') }}" >
                        @if ($errors->has('email'))
                            <small class="form-element-hint cus_error" style="padding-left:53px;">{{ $errors->first('email') }}</small>
                        @endif 
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
                    <div class="wrap-input100  m-b-23 bdr-bot" > <!-- validate-input -->
                        <input class="input100 {{ $errors->has('password') ? ' form-has-error' : '' }}" type="password" name="password" placeholder="Enter Password" id="password">
                        @if ($errors->has('password'))
                            <small class="form-element-hint cus_error" style="padding-left:53px;">{{ $errors->first('password') }}</small>
                        @endif 
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>					
					<div class="text-right p-t-20 p-b-20">
						<a href="#">
							Forgot password?
						</a>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<!--<a href="{{ route('login')}}" class="login100-form-btn">
								Login
                            </a> -->
                            <button class="login100-form-btn" type="submit">Login </button>
						</div>
					</div>
					<div class="flex-c-m">
						
					</div>
					<div class="flex-col-c p-t-35"></div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="{{ asset('public/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('public/vendor/animsition/js/animsition.min.js') }}"></script>
	<script src="{{ asset('public/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('public/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/vendor/select2/select2.min.js') }}"></script>
	<script src="{{ asset('public/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('public/vendor/daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('public/vendor/countdowntime/countdowntime.js') }}"></script>
	<script src="{{ asset('public/js/main.js') }}"></script>

</body>
</html>