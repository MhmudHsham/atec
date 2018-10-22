
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Home</title>
<!-- Bootstrap stylesheet -->
<link href="assets/front/bootstrap/css/bootstrap.css" rel="stylesheet">
<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
<!-- icofont -->
<link href="assets/front/icofont/css/icofont.css" rel="stylesheet" type="text/css" />
<!-- font-awesome -->
<link href="assets/front/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- crousel css -->
<link href="assets/front/js/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
<!--bootstrap select-->
<link href="assets/front/js/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<!-- stylesheet -->
<link href="assets/front/css/style.css" rel="stylesheet" type="text/css"/>
<!-- New stylesheet -->
<link rel="stylesheet" type="text/css" href="assets/front/css/newstyle.css">
</head>
<body>
<!--top start here -->
<div class="top">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<ul class="list-inline pull-left icon">
					<li>
						<a href="contactus.html"><i class="icofont icofont-exclamation-circle"></i>Help center</a>
					</li>
					<li>
						<a href="faq.html"><i class="icofont icofont-support-faq"></i>faq</a>
					</li>
					<li>
						<!--language code start here-->
						<form  method="post" enctype="multipart/form-data" id="language">
							<div class="btn-group">
								<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
									<span class="text"><i class="icofont icofont-globe"></i> Lang : English</span> <i class="icofont icofont-caret-down"></i>
								</button>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<a href="#"><img src="images/flag.jpg" alt="english" title="english" /> English</a>
									</li>
								</ul>
							</div>
						</form>
						<!--language code end here-->
					</li>
				</ul>
				<ul class="list-inline pull-right icon">
					<li>
						<a href="all_courses.html"><i class="icofont icofont-navigation-menu"></i>Browse Courses</a>
					</li>
					<li>
						<a href="login_register.html"><i class="icofont icofont-key"></i>Login</a>
					</li>
					<li>
						<a href="login_register.html"><i class="icofont icofont-ui-user"></i>Register</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--top end here -->

<!-- header start here-->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div id="logo">
					<a href="index-2.html">
						<img class="img-responsive" src="images/1.jpg" alt="logo" title="logo" />
					</a>
				</div>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-12">
				<!-- menu start here -->
				<div id="menu">	
					<nav class="navbar">
						<div class="navbar-header">
							<span class="menutext visible-xs">Menu</span>
							<button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</button>
						</div>
						<div class="collapse navbar-collapse navbar-ex1-collapse padd0">
							<ul class="nav navbar-nav text-right">
								<li>
									<a href="index.html">HOME</a>
								</li>
								<li>
									<a href="about.html">about us</a>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">All courses</a>
									<div class="dropdown-menu repeating">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li>
													<a href="all_courses.html">All courses</a>
												</li>
												<li>
													<a href="all_courses_singleview.html">Single course view</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES</a>
									<div class="dropdown-menu repeating">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li>
													<a href="login_register.html">Login and register</a>
												</li>
												<li>
													<a href="blog.html">Our Blog</a>
												</li>
												<li>
													<a href="blog_detail.html">Blog  Detail</a>
												</li>
												<li>
													<a href="our_team.html">Our Team</a>
												</li>
												<li>
													<a href="price_plan.html">Price Plan</a>
												</li>
												<li>
													<a href="error-404.html">404 error</a>
												</li>
												<li>
													<a href="faq.html">faq</a>
												</li>
												<li>
													<a href="comingsoon.html">Coming soon</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">events</a>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li>
													<a href="event.html">events</a>
												</li>
												<li>
													<a href="event-view.html">event view</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<a href="gallery.html">Gallery</a>
								</li>
								<li>
									<a href="contactus.html">contact us</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<!-- menu end here -->
			</div>
			<!-- <div class="col-md-3 col-sm-3 col-xs-12">
				<ul class="list-inline icon pull-right">
					<li>
						<form class="form-horizontal" method="post" id="srch">
							<fieldset>
								<div class="form-group">
									<input name="s" value="" class="form-control" placeholder="Search" type="text">
								</div>
								<button type="submit" value="submit" class="btn">
									<i class="icofont icofont-search"></i>
								</button>
							</fieldset>
						</form>
					</li>
					<li>
						<button type="button" class="btn-primary">Start free a trail</button>
					</li>
				</ul>
			</div> -->
		</div>
	</div>
</header>
<!-- header end here -->

@yield("content")

<!-- footer start here -->
<footer>
	<div class="container">
		<div class="row inner">
			<div class="col-sm-3">
				<img src="images/1.jpg" class="img-responsive img" title="logo" alt="logo">
				<!-- <p class="des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lacinia massa vitae lacus facilisis, id condimentum nibh commodo. integer sagittis magna a magna dignissim lacinia. Etiam nec purus suscipit sem tempor semper vitae vel est. Phasellus consectetur, lacus at auctor gravida.</p>
				<button type="button">start free a trail</button> -->
			</div>
			<div class="col-sm-3 links1">
				<h5>quick links</h5>
				<hr>
				<ul class="list-unstyled">
					<!-- <li>
						<a href="all_courses.html"><i class="fa fa-link"></i>All Courses</a>
					</li>
					<li>
						<a href="event.html"><i class="fa fa-chain-broken"></i>Upcoming Events</a>
					</li>
					<li>
						<a href="blog.html"><i class="fa fa-link"></i>Our Blogs</a>
					</li> -->
					<!-- <li>
						<a href="our_team.html"><i class="fa fa-link"></i>Our Team</a>
					</li> -->
					<li>
						<a href="about.html"><i class="fa fa-link"></i>About us</a>
					</li>
					<li>
						<a href="faq.html"><i class="fa fa-link"></i>FAQ</a>
					</li>
				 	<!-- <li>
						<a href="price_plan.html"><i class="fa fa-link"></i>Price Plan</a>
					</li> -->
					<li>
						<a href="login_register.html"><i class="fa fa-link"></i>Register Now</a>
					</li>
					<li>
						<a href="contactus.html"><i class="fa fa-link"></i>Contact us</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-3 links2">
				<h5>Products</h5>
				<hr>
				<ul class="list-unstyled">
					<li>
						<a href="all_courses.html"><i class="fa fa-link"></i>All Courses</a>
					</li>
					<li>
						<a href="event.html"><i class="fa fa-chain-broken"></i>Upcoming Events</a>
					</li>
					<li>
						<a href="blog.html"><i class="fa fa-link"></i>Our Blogs</a>
					</li>
					<li>
						<a href="our_team.html"><i class="fa fa-link"></i>Our Team</a>
					</li>
					<!-- <li>
						<a href="about.html"><i class="fa fa-link"></i>About us</a>
					</li>
					<li>
						<a href="faq.html"><i class="fa fa-link"></i>FAQ</a>
					</li>
					<li>
						<a href="price_plan.html"><i class="fa fa-link"></i>Price Plan</a>
					</li>
					<li>
						<a href="login_register.html"><i class="fa fa-link"></i>Register Now</a>
					</li>
					<li>
						<a href="contactus.html"><i class="fa fa-link"></i>Contact us</a>
					</li> -->
				</ul>
			</div>
			<!-- <div class="col-sm-3 links2">
				<h5>popular courses</h5>
				<hr>
				<ul class="list-unstyled">
					<li class="box">
						<img src="images/c1.png" class="img-responsive" alt="image" title="image" />
						<p>Introduction to Mobile Application Development</p>
						<span>$39.00</span>
					</li>
					<li class="box">
						<img src="images/c2.png" class="img-responsive" alt="image" title="image" />
						<p>Introduction to Wordpress website Development</p>
						<span class="text">Free</span>
					</li>
					<li class="box">
						<img src="images/c3.png" class="img-responsive" alt="image" title="image" />
						<p>Introduction to Android Application Development</p>
						<span>$39.00</span>
					</li>
				</ul>
			</div> -->
			<div class="col-sm-3 links2">
				<h5>contact us</h5>
				<hr>
				<!-- <p class="des1">Nunc quis viverra nibh. Etiam mauris leo, consequat ut tincidunt ac, lobortis consequat ligula.</p> -->
				<ul class="list-unstyled contact">
					<li>
						<i class="icofont icofont-home"></i> Address : 14/3 Samrala Chownk, Main Road, Ludhiana 141001, India.
					</li>
					<li>
						<i class="icofont icofont-phone"></i> 	Phone Number : +91 123457890<br> Fax : +00 123 456 7890
					</li>
					<li>
						<i class="icofont icofont-globe"></i>Email : educourses@example.com<br>Website : www.educourses.com
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="social">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<ul class="list-inline">
						<li>
							<a href="https://www.facebook.com/" target="_blank"><i class="icofont icofont-social-facebook"></i></a>
						</li>
						<li>
							<a href="https://twitter.com/" target="_blank"><i class="icofont icofont-social-twitter"></i></a>
						</li>
						<li>
							<a href="https://plus.google.com/" target="_blank"><i class="icofont icofont-social-google-plus"></i></a>
						</li>
						<li>
							<a href="https://www.instagram.com/" target="_blank"><i class="icofont icofont-social-instagram"></i></a>
						</li>
						<li>
							<a href="https://www.linkedin.com/uas/login" target="_blank"><i class="icofont icofont-social-linkedin"></i></a>
						</li>
						<li>
							<a href="https://in.pinterest.com/" target="_blank"><i class="icofont icofont-social-pinterest"></i></a>
						</li>
						<li>
							<a href="https://www.skype.com/en/" target="_blank"><i class="icofont icofont-social-skype"></i></a>
						</li>
						<li>
							<a href="https://www.stumbleupon.com/" target="_blank"><i class="icofont icofont-social-stumbleupon"></i></a>
						</li>
						<li>
							<a href="https://www.youtube.com/" target="_blank"><i class="icofont icofont-social-youtube"></i></a>
						</li>
						<li>
							<a href="https://www.tumblr.com/" target="_blank"><i class="icofont icofont-social-tumblr"></i></a>
						</li>
						<li>
							<a href="https://dribbble.com/" target="_blank"><i class="icofont icofont-social-dribbble"></i></a>
						</li>
						<li>
							<a href="https://envato.com/" target="_blank"><i class="icofont icofont-social-envato"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="powered">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<ul class="list-inline">
						<li>
							<a href="index-2.html">Home</a>
						</li>
						<li>
							<a href="all_courses.html">ALL courses</a>
						</li>
						<li>
							<a href="about.html">ABOUT</a>
						</li>
						<li>
							<a href="event.html">Events</a>
						</li>
						<li>
							<a href="blog.html">blog</a>
						</li>
						<li>
							<a href="contactus.html">contact us</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-6 text-right">
					<p>EDU Courses Online Education © 2017 TMD Studio, All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer end here -->

<!-- jquery -->
<script src="assets/front/js/jquery.2.1.1.min.js" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="assets/front/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--bootstrap select-->
<script src="assets/front/js/dist/js/bootstrap-select.js" type="text/javascript"></script>
<!-- owlcarousel js -->
<script src="assets/front/js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<!--internal js-->
<script src="assets/front/js/internal.js" type="text/javascript"></script>
</body>

</html>
