@extends("layouts.app")
@section("content")

<!-- bread-crumb start here -->
<div class="bread-crumb">
	<img src="{{ url('public/assets/front/images/banner-top.jpg') }}" class="img-responsive" alt="banner-top" title="banner-top">
	<div class="container">
		<div class="matter">
			<h2>{{ trans("lang.Services") }}</h2>
			<ul class="list-inline">
				<li><a href="{{ url('') }}">{{ trans("lang.Home") }}</a></li>
				<li><a href="{{ url('services') }}">{{ trans("lang.Services") }}</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- bread-crumb end here -->

<!-- event start here -->	
<div class="event">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
                
                
                @foreach($services as $one)
                <div class="box">
					<div class="image">
						<img style="width:270px;height:207px;" src="{{ url('public/uploads/images/' . $one->image) }}" class="img-responsive" alt="{{ $one->title_en }}" title="{{ $one->title_en }}" />
					</div>
					<div class="caption">
						<h4>{{ $one->{$slug->title} }}<span class="pull-right">{{ $one->created_at }}</span></h4>
						<ul class="list-inline">
							<li>9.00 am to 4.00 pm</li>
							{{--  <li><i class="icofont icofont-social-google-map"></i> New Chownk, A Plaza, Newyork 1000</li>  --}}
							<li class="pull-right">Wednesday</li>
						</ul>
						<p>{{ substr($one->{$slug->content}, 0, 350) }}</p>
						<button type="button" onclick="location.href='{{ url($lang.'/services/details/' . $one->id) }}'">Register</button>
					</div>
                </div>
                @endforeach
                

			</div>
			<!--pagination code start here-->
			<div class="col-sm-12 col-xs-12">		
				<ul class="list-inline pagination">
                    {{ $services->links() }}
				</ul>
			</div>
			<!--pagination code end here-->
		</div>
	</div>
</div>
<!-- event end here -->

@stop

@section("js_files")
	<script>
		var custom = {
			subscribe_url: "{{ url('subscribe') }}"
		};
	</script>
	<script src="assets/front/custom/js/home.js" type="text/javascript"></script>
@stop