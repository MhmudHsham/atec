@extends("layouts.front");
@section("content")

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
						<img class="img-responsive" src="images/logo.png" alt="logo" title="logo" />
					</a>
				</div>
			</div>		
			<div class="col-md-6 col-sm-6 col-xs-12">
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
									<a href="index-2.html">HOME</a>
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
									<a href="contactus.html">contact us</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<!-- menu end here -->
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
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
			</div>
		</div>
	</div>
</header>
<!-- header end here -->

<!-- bread-crumb start here -->
<div class="bread-crumb">
	<img src="images/banner-top.jpg" class="img-responsive" alt="banner-top" title="banner-top">
	<div class="container">
		<div class="matter">
			<h2>About us</h2>
			<ul class="list-inline">
				<li>
					<a href="index-2.html">HOME</a>
				</li>
				<li>
					<a href="about.html">About us</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- bread-crumb end here -->

<!-- abouts start here -->
<div class="abouts">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="commontop text-center">
					<h2>About us</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>
					<hr>
				</div>
			</div>	
			<div class="col-sm-6 col-xs-12">
				<p class="des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis feugiat sem. Proin sed blandit lectus. Curabitur luctus molestie nibh, ornare commodo dui tincidunt sed. Maecenas magna risus, varius vitae quam egat, bibendum eleifend dui. Aliquam fringilla dignissim velit, sit amet lobortis elit euismod in. Aenean iaculis ex sagittis ornare tincidunt. Quisque erat elit,congue eget nisl ut, accumsan dapibus dui. Morbi sodales libero tellus, ac aliquet ligula aliquet ut.</p>
				<ul class="list-unstyled">
					<li>
						<i class="icofont icofont-arrow-right"></i>	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</li>
					<li>
						<i class="icofont icofont-arrow-right"></i>	Integer consectetur ligula sed condimentum facilisis.
					</li>
					<li>
						<i class="icofont icofont-arrow-right"></i>	Ut pulvinar nunc aliquet luctus vehicula.
					</li>
					<li>
						<i class="icofont icofont-arrow-right"></i>	Proin porta lacus id sagittis vulputate.
					</li>
					<li>
						<i class="icofont icofont-arrow-right"></i>	Nam vitae lacus dignissim arcu posuere ultricies.
					</li>
					<li>
						<i class="icofont icofont-arrow-right"></i>	Mauris malesuada dolor at ligula mollis tempus.
					</li>
					<li>
						<i class="icofont icofont-arrow-right"></i>	Nulla efficitur libero non commodo egestas
					</li>
				</ul>
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="image">
					<img src="images/about-img.jpg" class="img-responsive" alt="img" title="img" />
					<div class="icon">
						<div class="ico">
							<a href="#"><i class="icofont icofont-ui-play"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- abouts end here -->

<!-- inner start here -->
<div class="inner">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-xs-12 feature">
				<div class="commontop text-left">
					<h2>our features</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
					<hr>
				</div>
				<p class="des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco... <a href="#">view more</a></p>
				<div class="box">
					<img src="images/icon01.png" class="img-responsive" alt="icon" title="icon" />
					<p>Learn Courses online</p>
					<a href="#">View more</a>
				</div>
				<div class="box">
					<img src="images/icon02.png" class="img-responsive" alt="icon" title="icon" />
					<p>Online Library Store</p>
					<a href="#">View more</a>
				</div>
				<img src="images/ads.jpg" class="img-responsive" alt="ads" title="ads" />
			</div>
			<div class="col-sm-4 col-xs-12 feature">
				<div class="commontop text-left">
					<h2>why study best</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
					<hr>
				</div>
				<p class="des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco... <a href="#">view more</a></p>
				<div class="panel-group" id="accordion">
					<div class="panel panel-default active">
						<div class="panel-heading">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
								<h4 class="panel-title">Learn Anything Courses online <i class="fa fa-minus" aria-hidden="true"></i></h4>
							</a>
						</div>
						<div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
								<h6>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi...<a href="#">VIEW MORE</a></h6>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
								<h4 class="panel-title">Basic to Advance Courses?  <i class="fa fa-plus" aria-hidden="true"></i></h4>
							</a>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
							<div class="panel-body">
								<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</h6>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
								<h4 class="panel-title">Free Videos Tutorials? <i class="fa fa-plus" aria-hidden="true"></i></h4>
							</a>
						</div>
						<div id="collapse3" class="panel-collapse collapse">
							<div class="panel-body">
								<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</h6>
							</div>
						</div>
					</div>
				</div> 	
			</div>
			<div class="col-sm-4 col-xs-12 feature">
				<img src="images/ads1.jpg" class="img-responsive ad1" alt="ads" title="ads" />
			</div>
		</div>
	</div>
</div>
<!-- inner end here -->

<!-- aboutweek start here -->
<div class="aboutweek">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="box">
					<div class="caption">	
						<img src="images/icon.png" class="img-responsive" alt="img" title="img" />
						<h1>New Student Join Every Week Hurry Up!</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porta semper sagittis. Integer sit amet rhoncus elit.</p>
					</div>	
					<button type="button">APPLY NOW</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- aboutweek end here -->

<!-- service start here -->
<div class="service">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="commontop text-center">
					<h2>our best service for you</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<hr>
				</div>
			</div>
			<div class="col-sm-3 col-xs-12 box text-center">
				<div class="icons">
					<div class="icon">
						<img src="images/icon_01.png" class="img-responsive" alt="icon" title="icon" />
					</div>
				</div>
				<h4>Professional Courses</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="col-sm-3 col-xs-12 box text-center">
				<div class="icons">
					<div class="icon">
						<img src="images/icon_02.png" class="img-responsive" alt="icon" title="icon" />
					</div>
				</div>
				<h4>Experienced Instructors</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="col-sm-3 col-xs-12 box text-center">
				<div class="icons">
					<div class="icon">
						<img src="images/icon_03.png" class="img-responsive" alt="icon" title="icon" />
					</div>
				</div>
				<h4>Practical Traning</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="col-sm-3 col-xs-12 box text-center">
				<div class="icons">
					<div class="icon">
						<img src="images/icon_04.png" class="img-responsive" alt="icon" title="icon" />
					</div>
				</div>
				<h4>Validated Certificated</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>
	</div>
</div>
<!-- service end here -->

<!-- featured start here -->
<div class="featured">
	<div class="image"><img src="images/features/bg.jpg" class="img-responsive" alt="bg" title="bg" /></div>
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<ul class="list-inline">
						<li>
							<div class="box">
								<div class="icon">
									<div class="icons">
										<img src="images/features/icon1.png" class="img-responsive" alt="image" title="image" />	
									</div>
								</div>
								<h4>Country Reached</h4>
								<p>15</p>
							</div>
						</li>
						<li>
							<div class="box">
								<div class="icon">
									<div class="icons">
										<img src="images/features/icon2.png" class="img-responsive" alt="image" title="image" />	
									</div>
								</div>
								<h4>User Registers</h4>
								<p>25k</p>
							</div>
						</li>
						<li>
							<div class="box">
								<div class="icon">
									<div class="icons">
										<img src="images/features/icon3.png" class="img-responsive" alt="image" title="image" />	
									</div>
								</div>
								<h4>Staff Members</h4>
								<p>566</p>
							</div>
						</li>
						<li>
							<div class="box">
								<div class="icon">
									<div class="icons">
										<img src="images/features/icon4.png" class="img-responsive" alt="image" title="image" />	
									</div>
								</div>
								<h4>Courses Published</h4>
								<p>1150</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- featured end here -->

<!-- team start here -->
<div class="team">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="commontop text-center">
					<h2>experts team members</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<hr>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="box">
					<div class="image">
						<a href="our_team.html">
							<img src="images/t1.jpg" class="img-responsive" alt="img" title="img" />
						</a>
					</div>
					<div class="caption">
						<h4>John Doe</h4>
						<h3>Photoshop Designer</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum tortor vitae sodales laoreet. Nulla facilisi. Sed condimentum egestas viverra...</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="box">
					<div class="image">
						<a href="our_team.html">
							<img src="images/t2.jpg" class="img-responsive" alt="img" title="img" />
						</a>
					</div>
					<div class="caption">
						<h4>Jassica Smith</h4>
						<h3>PHP Developer</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum tortor vitae sodales laoreet. Nulla facilisi. Sed condimentum egestas viverra...</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="box">
					<div class="image">
						<a href="our_team.html">
							<img src="images/t3.jpg" class="img-responsive" alt="img" title="img" />
						</a>
					</div>
					<div class="caption">
						<h4>Johnson Smith</h4>
						<h3>Wordpress Developer</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum tortor vitae sodales laoreet. Nulla facilisi. Sed condimentum egestas viverra...</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- team end here -->

<!-- testimonail start here -->
<div class="testimonail">
	<div class="image">
		<img src="images/test_bg.jpg" class="img-responsive" alt="bg" title="bg" />
	</div>
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="box">
						<div class="icon">
							<img src="images/test.png" class="img-responsive" alt="image" title="image" />	
						</div>
						<h4>John Doe</h4>
						<h5>Graphic Designer</h5>
						<p><i class="icofont icofont-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- testimonail end here -->

<!-- newsletter start here -->
<div id="newsletter">
	<div class="container">
		<div class="row">
			<div id="subscribe">
				<form class="form-horizontal" name="subscribe">
					<div class="col-sm-12"> 
						<p class="news">SUBSCribe to our <span>newsletter</span></p>
					</div>
					<div class="col-sm-12 form-group">
						<div class="input-group">
							<input  value="" name="subscribe_email" id="subscribe_email" placeholder="Type your e-mail..." type="text">
							<button class="btn btn-news" type="submit" value="submit">Submit</button>
						</div>
					</div>
				</form>
			</div> 
		</div>
	</div>
</div>
<!-- newsletter end here -->


@stop