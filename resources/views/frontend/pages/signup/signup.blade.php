<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Meditation') }} - Signup</title>
	<!------- FONTS ------->
	<link rel="stylesheet" href="{{ asset('') }}asset/frontend/fonts/fonts.css">
	<!----- CSS HERE ----->
	<link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/bootstrap-grid.min.css" />
	<link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/style.css" />
	<link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/reuseble-code.css" />
	<link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/responsive.css" />
</head>

<body>

	<main>

		<section class="">
			<div class="container-fluid px-sm-0">
				<div class="row g-5">
					<div class="col-xl-5 col-lg-6 order-2 order-sm-1">
						<div class="sign-img p-relative">
							<img src="{{ asset('') }}asset/frontend/images/reg.png" alt="Sign In" class="img sign-img-main signup-img-main">

							<div class="sign-img-text">
								<img src="{{ asset('') }}asset/frontend/svg-icon/quote-2.svg" alt="qout">
								<p class="ps-400 cff s20">
									I always observe the people who pass by when I ride an escalator. I will never see most of them again, so I imagine a lot of things about their lives... about the day ahead of them.
								</p>
								<p class="ps-400 cff s20">Hideo Kojima</p>
							</div>
							<img src="{{ asset('') }}asset/frontend/images/reg-logo.png" alt="reg-logo" class="reg-logo">
						</div>
					</div>
					<div class="col-xl-7 col-lg-6 d-flex align-items-lg-end p-relative order-1 order-sm-2 s-column s-column-2">
						<a href="{{ url('') }}" class="ps-700 c86 s16 back-link d-flex align-items-lg-center">
							<img src="{{ asset('') }}asset/frontend/svg-icon/arrow_back.svg" alt="arrow_back"> <span>Back</span>
						</a>
						<div class="sign-content mx-auto">
							<h2 class="ps-700 c00 s30 reg-title">Register Individual Account!</h2>
							<p class="ps-400 c869 s18">For the purpose of gamers regulation, your details are required.</p>
							<form action="javascript:void(0)">
								<div class="sign-form">
									<label for="email" class="c69 ps-400 s16">
										Email address*
									</label>
									<input type="email" id="email" placeholder="Enter email address" class="s14 c869 w-100">
								</div>
								<div class="sign-form">
									<label for="pass" class="c69 ps-400 s16">
										Create password*
									</label>
									<input type="password" name="" id="pass" placeholder="Password" class="s14 c869 w-100">
								</div>
								<div class="sign-form">
									<label for="pass" class="c69 ps-400 s16">
										Repeat password*
									</label>
									<input type="password" name="" id="pass" placeholder="Repeat password" class="s14 c869 w-100">
								</div>
								<div class="sign-form d-flex align-items-end">
									<label class="check__main ps-400 c69 s16">I agree to terms & conditions
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="sign-btn sign-form">
									<input type="submit" value="Register Account" class="cff s16 ps-400 w-100 tc">
								</div>
							</form>
							<div class="tc or-text">
								<p class="ps-400 cba s14 p-relative">Or</p>
							</div>
							<a href="javascript:void(0)" class="reg-google d-block">
								<ul class="d-flex align-items-center justify-content-center">
									<li>
										<img src="{{ asset('') }}asset/frontend/svg-icon/reg-google.svg" alt="google">
									</li>
									<li class="ps-400 c00 s16">
										Register with Google
									</li>
								</ul>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>

</body>

</html>
