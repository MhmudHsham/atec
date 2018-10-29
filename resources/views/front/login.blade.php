@extends("layouts.app")
@section("content")

<!-- bread-crumb start here -->
<div class="bread-crumb">
	<img src="{{ url('public/assets/front/images/banner-top.jpg') }}" class="img-responsive" alt="banner-top" title="banner-top">
	<div class="container">
		<div class="matter">
			<h2>register now</h2>
			<ul class="list-inline">
				<li>
					<a href="{{ url($lang . '/') }}">HOME</a>
				</li>
				<li>
					<a href="{{ url($lang. '/login') }}">Login</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- bread-crumb end here -->

<!-- login start here -->
<div class="login">
	<div class="container"> 
		<div class="col-md-12 col-sm-12 col-xs-12 box padd0">
			<div class="col-md-12 col-sm-12 col-xs-12 bor">
				<h5>sign in</h5>
				<hr>
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">	
						<label>Email*</label>
						<input type="text" name="email" value="" placeholder="Johndoe@example.com" id="input-email" class="form-control" />
					</div>
					<div class="form-group">
						<label>password*</label>
						<input type="text" name="password" value="" placeholder="********" id="input-password" class="form-control" />
					</div>
					<div class="links">
						<input type="checkbox"  name="credit" class="checkclass checkbox-inline"/>Remember me
						<a href="#" class="pull-right">Forgot Password?</a>
					</div>
					<button type="submit" class="btn btn-primary btn-block" >Login Now</button>
				</form>
			</div>			
		</div>
	</div>
</div>
<!-- login end here -->

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