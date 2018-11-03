<!-- newsletter start here -->
<div id="newsletter">
	<div class="container">
		<div class="row">
			<div id="subscribe">
				<form class="form-horizontal" name="subscribe" id="subscribe-form">
					<div class="col-sm-12"> 
						<p class="news">{{ trans("lang.Subscribe to our newsletter") }}</p>
					</div>
					<div class="col-sm-12 form-group">
						<div class="input-group">
							<input  value="" name="subscribe_email" id="subscribe_email" placeholder="{{ trans('lang.Type your e-mail...') }}" type="text">
							<button class="btn btn-news" type="submit" value="submit">{{ trans("lang.Submit") }}</button>
						</div>
					</div>
				</form>
			</div> 
		</div>
	</div>
</div>
<!-- newsletter end here -->



<!-- footer start here -->
<footer>
	<div class="container">
		<div class="row inner">
			<div class="col-sm-3">
				<img src="{{ url('public/assets/front/images/1.jpg') }}" class="img-responsive img" title="logo" alt="logo">
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
						<a href="about.html"><i class="fa fa-link"></i>About us</a>
					</li>
					<li>
						<a href="faq.html"><i class="fa fa-link"></i>FAQ</a>
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
	<div class="powered">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<ul class="list-inline">
						<li>
							<a href="index-2.html">Home</a>
						</li>
						<li>
							<a href="all_courses.html">Courses</a>
						</li>
						<li>
							<a href="about.html">ABOUT</a>
						</li>
						<li>
							<a href="event.html">Events</a>
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
<script src="{{ url('public/assets/front/js/jquery.2.1.1.min.js') }}" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="{{ url('public/assets/front/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!--bootstrap select-->
<script src="{{ url('public/assets/front/js/dist/js/bootstrap-select.js') }}" type="text/javascript"></script>
<!-- owlcarousel js -->
<script src="{{ url('public/assets/front/js/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
<!--internal js-->
<script src="{{ url('public/assets/front/js/internal.js') }}" type="text/javascript"></script>
<script>
	var custom = {
		subscribe_url: "{{ url('subscribe') }}"
	};
</script>
<script src="{{ url('public/assets/front/custom/js/app.js') }}" type="text/javascript"></script>