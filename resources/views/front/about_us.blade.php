@extends("layouts.app")
@section("content")


<!-- bread-crumb start here -->
<div class="bread-crumb">
	<img src="{{ url('assets/front/images/banner-top.jpg') }}" class="img-responsive" alt="banner-top" title="banner-top">
	<div class="container">
		<div class="matter">
			<h2>About us</h2>
			<ul class="list-inline">
				<li>
					<a href="{{ url($lang . '/') }}">HOME</a>
				</li>
				<li>
					<a href="{{ url($lang . '/about-us') }}">About us</a>
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
					<h2>{{ trans("lang.About us") }}</h2>
					<hr>
				</div>
			</div>	
			<div class="col-sm-6 col-xs-12">
				<p class="des">
					{{ $settings['about_us_en'] }}					
				</p>				
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="image">
					<img src="{{ url('public/uploads/images/obour.jpg') }}" class="img-responsive" alt="img" title="img" />
				</div>
			</div>
		</div>
	</div>
</div>
<!-- abouts end here -->



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