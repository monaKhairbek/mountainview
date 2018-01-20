<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<!-- Google fonts -->
	<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<!-- modernizr -->
	<script src="{{asset('js/modernizr.js')}}"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!--{{ config('app.name', 'Laravel') }}-->
    <title>NRIAG Space</title>


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
	
	<div class="bannerCustom" id="home"></div>
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 no-padding">
					<div class="col-md-12 text-center user">
						
						<!--<div class="social-icons">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>-->
					</div>
					<!-- nav starts here -->
					<div class="col-md-12">	
						<div class="main-nav" style=" margin-top: 444px; ">
							<nav class="navbar navbar-default">
							  <div class="container-fluid">
							    <!-- Brand and toggle get grouped for better mobile display -->
							    <div class="navbar-header">
							      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							      </button>
							    </div>

							    <!-- Collect the nav links, forms, and other content for toggling -->
							    <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
							      <ul class="nav navbar-nav">
							        <li><a {{ (Request::is('/') ? 'class=active' : '') }} href="{{ URL::to('/') }}">Home</a></li>
							        <li><a {{ (Request::is('aboutus') ? 'class=active' : '') }} href="{{ URL::to('aboutus') }}">About Us</a></li>
							        <li><a {{ (Request::is('browse') ? 'class=active' : '') }} href="{{ URL::to('browse') }}">Browse</a></li>
							      </ul>
							    </div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header><!-- end of header section -->


    @yield('content')
 
	<footer class="footer">
		<!--<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4">
						<h3>about me</h3>
						<p>I'm a Professional Web Developer. I have a great experience for a long time about Front-end and Wordpress theme development. I  try to give the best services.</p>
						<a href="about.html">Read full about me</a>
						<address>
							E-mail: hello@shapedtheme.com <br>
							Phone: +88-0-1723 511 340 <br>
							239/2 NA, Dhaka 1206, BD
						</address>
					</div>
					<div class="col-md-4">
						<h3>Subscribe &amp; Follow</h3>
						<p>Enter your email address to subscribe to this blog and receive notifications.</p>
						<form action="?">
							<input type="email" placeholder="Enter your email">
							<input type="submit" value="SUBSCRIBE NOW">
						</form>
						<div class="socials text-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					<div class="col-md-4 instagram-photos">
						<h3>Follow @ Instagram</h3>
						<!-- place your instagram widget below -->
						<!--<a href="#"><img src="http://placehold.it/100x100" alt=""></a>
						<a href="#"><img src="http://placehold.it/100x100" alt=""></a>
						<a href="#"><img src="http://placehold.it/100x100" alt=""></a>
						<a href="#"><img src="http://placehold.it/100x100" alt=""></a>
						<a href="#"><img src="http://placehold.it/100x100" alt=""></a>
						<a href="#"><img src="http://placehold.it/100x100" alt=""></a>
					</div>
				</div>
			</div>
		</div>
		<div class="text-right">
			<a href="#home"><i class="fa fa-arrow-up"></i></a>
		</div>-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p>&copy; {{ date('Y') }}. Created by NRIAG Space</p>
					</div>
					<div class="col-md-6 footer-menu text-right">
						<ul class="list-inline">
							<li><a href="{{ URL::to('/') }}">Home</a></li>
							<li><a href="{{ URL::to('aboutus') }}">About Us</a></li>
							<li><a href="{{ URL::to('browse') }}">Browse</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

    <!-- Scripts -->

	<script src="{{asset('js/jquery-2.1.1.js')}}"></script>
	<script src="{{asset('js/jquery.mixitup.js')}}"></script>
	<script src="{{asset('js/smoothscroll.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
