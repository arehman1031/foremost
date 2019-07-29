<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Foremost</title>
		<!-- Loading third party fonts -->
		<link href="{{asset('fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('fonts/novecento-font/novecento-font.css') }}" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{asset('css/style.css')}}">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body class="homepage header-collapse">

		<div id="site-content">

			<header class="site-header">
				<div class="container">
					<a id="branding" href="/">
						<img src="{{asset('images/logo.png')}}" alt="Be U" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">Foremost</h1>
							<small class="site-description">Always Be Yourself</small>
						</div>
					</a> <!-- #branding -->


					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="/">Home</a></li>
							<li class="menu-item"><a href="{{ route('about') }}">About</a></li>
							<li class="menu-item"><a href="{{ route('services') }}">Services</a></li>
							<li class="menu-item"><a href="{{ route('gallery') }}">Gallery</a></li>
							<div class="dropdown">
								<li class="menu-item"><a href="#">Parlour</a>
									<div class="dropdown-content">
										<ul  class="hide">
											@foreach($parlors as $parlor)
											<li class="lii"><a href="{{ $parlor->link }}">{{ $parlor->name }}</a></li>
											@endforeach
										</ul>
									</div>
								</li>
							</div>
							<li class="menu-item"><a href="{{ route('login') }}" class="btn btn-link">Login</a></li> / <li class="menu-item"><a href="{{ route('register') }}" class="btn btn-link">SignUp</a></li>
							{{--
							<input type="text" placeholder="Search.." name="search">
							<button type="submit"><i class="fa fa-search"></i></button>
							--}}
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>

			<div class="hero hero-slider">
				<ul class="slides">
					<li data-bg-image="{{asset('dummy/slideimg1.jpg')}}">
						<div class="container">
							<h3 class="slider-subtitle">What are u looking for?</h3>
							<h2 class="slider-title">Professional</h2>
							<p>This is the platform you are finding where you can book any service in your desired parlor or salon....!</p>
							<a href="#" class="button large">Read more</a>
						</div>
					</li>
					<li data-bg-image="{{asset('dummy/slideimg4.jpg')}}">
						<div class="container">
							<h3 class="slider-subtitle">What are u looking for?</h3>
							<h2 class="slider-title">Professional</h2>
							<p>This is the platform you are finding where you can book any service in your desired parlor or salon....!</p>
							<a href="#" class="button large">Read more</a>
						</div>
					</li>
					<li data-bg-image="{{asset('dummy/slideimg3.jpg')}}">
						<div class="container">
							<h3 class="slider-subtitle">What are u looking for?</h3>
							<h2 class="slider-title">Professional</h2>
							<p>This is the platform you are finding where you can book any service in your desired parlor or salon....!</p>
							<a href="#" class="button large">Read more</a>
						</div>
					</li>
				</ul>
			</div>

			<main class="main-content">
				@yield('content')
			</main>

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="widget contact-widget">
								<h3 class="widget-title">Contact</h3>
								<div class="contact-info">
									<address>
										<img src="{{asset('images/icon-map-small.png')}}" class="icon">
										<p><strong>Foremost</strong> </p>
									</address>
									<a href="mailto:contact@companyname.com" class="mail"><img src="{{asset('images/icon-envelope-small.png')}}" class="icon">contact@Foremost.com</a>
									<a href="tel:(500)942042259" class="phone"><img src="{{asset('images/icon-phone-small.png')}}" class="icon">(021)942042259</a>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Social Media</h3>
								<p>You can join our social media to get up to date with our services.</p>
								<div class="social-links">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>

								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="widget">
								<h3 class="widget-title">Newsletter</h3>
								<p> </p>
								<form action="#" class="subscribe-form">
									<input type="email" placeholder="Enter our email...">
									<input type="submit" value="Sign up">
								</form>
							</div>
						</div>
					</div>

					<div class="colophon">
						<p> All rights reserved by Foremost.</p>
					</div>
				</div>
			</footer>
		</div>




		<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
		<script src="{{asset('js/plugins.js')}}"></script>
		<script src="{{asset('js/app.js')}}"></script>

	</body>

</html>
