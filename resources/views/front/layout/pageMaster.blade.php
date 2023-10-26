<!DOCTYPE html>
<html lang="en">
<head>
	<title>
@yield('title')
</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="{{ asset('/') }}public/front/logo.png" />
<link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front/styles/bootstrap4/bootstrap.min.css">
<link href="{{asset('/')}}public/front/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front/styles/responsive.css">
<link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front/styles/about.css">
<link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front/styles/about_responsive.css">

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>+8801742069354</div>
									</li>
									<li class="ml-5">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>soumicahmed22@gmail.com</div>
									</li>
								</ul>
								
							</div>
						</div>
						<div class="col" style="float:right;text-align: right;">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>001-1234-88888</div>
									</li>
									<li class="" style="margin-left:350px; ">
										<i class="fa fa-facebook-square" aria-hidden="true" style="font-size:25px;"></i>
										
									</li>
									
								</ul>
								
							</div>
						</div>
                     
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="{{route('home')}}">
									<div class="logo_text"><img src="{{asset('/public/front/logo.png')}}"></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="{{route('home')}}">Home</a></li>
									<li><a href="{{route('about')}}">About</a></li>
									<li><a href="{{route('gallery')}}">Gellery</a></li>
									
									<li><a href="{{route('contact')}}">Contact</a></li>
								</ul>
								
								<!-- Hamburger -->

								
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

				
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="{{route('home')}}">Home</a></li>
				<li class="menu_mm"><a href="{{route('about')}}">About</a></li>
				<li class="menu_mm"><a href="{{route('gallery')}}">Gellery</a></li>
				<li class="menu_mm"><a href="{{route('contact')}}">Contact</a></li>
			</ul>
		</nav>
	</div>
	
	@yield('content')

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(public/front/images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text"><img src="{{asset('/public/front/logo.png')}}"></div>
										</a>
									</div>
									
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="offset-md-5 col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: soumicahmed22@gmail.com</li>
											<li>Phone:  +8801742069354</li>
											
										</ul>
									</div>
								</div>
								
							</div>

							
						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site is developed by <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" style="color:green">CodeTree</a>
</div>
						
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="{{asset('/')}}public/front/js/jquery-3.2.1.min.js"></script>
<script src="{{asset('/')}}public/front/styles/bootstrap4/popper.js"></script>
<script src="{{asset('/')}}public/front/styles/bootstrap4/bootstrap.min.js"></script>
<script src="{{asset('/')}}public/front/plugins/greensock/TweenMax.min.js"></script>
<script src="{{asset('/')}}public/front/plugins/greensock/TimelineMax.min.js"></script>
<script src="{{asset('/')}}public/front/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{asset('/')}}public/front/plugins/greensock/animation.gsap.min.js"></script>
<script src="{{asset('/')}}public/front/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="{{asset('/')}}public/front/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{asset('/')}}public/front/plugins/easing/easing.js"></script>
<script src="{{asset('/')}}public/front/plugins/parallax-js-master/parallax.min.js"></script>
<script src="{{asset('/')}}public/front/js/custom.js"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e50bfa82dd38c7f"></script>

</body>
</html>