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
					<a href="{{ url('/') }}">HOME</a>
				</li>
				<li>
					<a href="{{ url('about-us') }}">About us</a>
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
					{{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p> --}}
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


@stop

@section("js_files")
	<script>
		var custom = {
			subscribe_url: "{{ url('subscribe') }}"
		};
	</script>
	<script src="assets/front/custom/js/home.js" type="text/javascript"></script>
@stop