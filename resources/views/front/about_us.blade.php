@extends("layouts.app")
@section("content")


<!-- bread-crumb start here -->
<div class="bread-crumb">
	<img src="{{ url('public/assets/front/images/banner-top.jpg') }}" class="img-responsive" alt="banner-top" title="banner-top">
	<div class="container">
		<div class="matter">
			<h2>{{ trans("lang.About us") }}</h2>
			<ul class="list-inline">
				<li>
					<a href="{{ url($lang . '/') }}">{{ trans("lang.Home") }}</a>
				</li>
				<li>
					<a href="{{ url($lang . '/about-us') }}">{{ trans("lang.About us") }}</a>
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
					@if($lang == "en")
						{{ $settings['about_us_en'] }}					
					@else 
						{{ $settings['about_us_ar'] }}					
					@endif
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

@stop

@section("js_files")

@stop