@extends("layouts.app")
@section("content")



<!-- bread-crumb start here -->
<div class="bread-crumb">
	<img src="{{ url('assets/front/images/banner-top.jpg') }}" class="img-responsive" alt="banner-top" title="banner-top">
	<div class="container">
		<div class="matter">
			<h2>Contact us</h2>
			<ul class="list-inline">
				<li>
					<a href="{{ url('/') }}">HOME</a>
				</li>
				<li>
					<a href="{{ url('contact-us') }}">Contact us</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- bread-crumb end here -->

<!-- contactus start here -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3445.5252614402566!2d31.475563685442296!3d30.279104981797538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145805bed9b8923b%3A0x41b5ccabb7c832c2!2z2YXYudmH2K8g2KfZhNi52KjZiNixINin2YTYudin2YTZiQ!5e0!3m2!1sar!2seg!4v1540623733749" frameborder="0" style="border:0" allowfullscreen></iframe>
	{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219104.85983086875!2d75.71658808151895!3d30.90026973769041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a837462345a7d%3A0x681102348ec60610!2sLudhiana%2C+Punjab!5e0!3m2!1sen!2sin!4v1482266274532"></iframe> --}}
</div>
<div class="contactus">
	<div class="container"> 
		<div class="row">
			<div class="col-sm-9 col-xs-12">
				<form method="post" enctype="multipart/form-data" class="form-horizontal">
					<h5>get in touch</h5>
					<hr />
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<label>Name*</label>
							<input name="name" value="" id="input-name" class="form-control" placeholder="John doe" type="text">
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<label>Email*</label>
							<input name="email" value="" id="input-email" class="form-control" placeholder="Johndoe@example.com" type="text">
						</div>
					</div>
					<div class="form-group">	
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Website*</label>
							<input name="phone" value="" id="input-phone" class="form-control" placeholder="www.example.com" type="text">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<label>Message*</label>
							<textarea name="enquiry" id="input-enquiry" class="form-control"></textarea>
						</div>
					</div>
					<input class="btn btn-primary" value="Send Message" type="submit">
				</form>
			</div>
			<div class="col-sm-3 col-xs-12">
				<div class="address">
					<h5>Contact Info</h5>
					<hr>
					<p>Nunc quis viverra nibh. Etiam mauris leo, consequat ut tincidunt ac, lobortis consequat ligula.</p>
					<ul class="list-unstyled">
						<li>
							<i class="icofont icofont-home"></i> 14/3 Samrala Chownk, Main Road, Ludhiana 141001, India.
						</li>
						<li>
							<i class="icofont icofont-phone"></i> +91 123 456 7890
						</li>
						<li>
							<i class="icofont icofont-fax"></i> +00 123 456 7890
						</li>
						<li>
							<i class="icofont icofont-envelope"></i> <a href="#">educourses@example.com</a>
						</li>
						<li>
							<i class="icofont icofont-globe"></i> <a href="#">www.educourses.com</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- contactus end here -->



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

@section("js_files")
	<script>
		var custom = {
			subscribe_url: "{{ url('subscribe') }}"
		};
	</script>
	<script src="assets/front/custom/js/home.js" type="text/javascript"></script>
@stop