@extends("layouts.app")
@section("content")


<!-- bread-crumb start here -->
<div class="bread-crumb">
	<img src="{{ url('public/assets/front/images/banner-top.jpg') }}" class="img-responsive" alt="banner-top" title="banner-top">
	<div class="container">
		<div class="matter">
			<h2>{{ $details->{$slug->title} }}</h2>
			<ul class="list-inline">
				<li>
					<a href="{{ url('/') }}">{{ trans("lang.Home") }}</a>
				</li>
				<li>
					<a href="{{ url($lang . '/services') }}">{{ trans("lang.Services") }}</a>
                </li>
                <li>
                    <a href="javascript:;">{{ $details->{$slug->title} }}</a>
                </li>
			</ul>
		</div>
	</div>
</div>
<!-- bread-crumb end here -->

<!-- eventview start here -->	
<div class="eventview">
	<div class="container">
		<div class="row">
                <div class="col-sm-3 col-xs-12 hidden-xs">                        
                        <div class="left">
                            <h4>{{ trans("lang.Other Services") }}</h4>
                            <div class="popular">
                                
                                @foreach($latest_services as $one) 
                                <div class="box">
                                    <img src="{{ url('public/uploads/images/' . $one->image) }}" class="img-responsive" alt="img" title="img" />
                                    <p><a href="{{ url($lang.'/services/details/' . $one->id) }}">{{ $one->{$slug->title} }}</a></p>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>	                
                    </div>                        
			<div class="col-sm-9 col-xs-12">
				<div class="box">
					<div class="image">
						<img src="{{ url('public/uploads/images/'.$details->image) }}" style="width:850px;height:500px;" class="img-responsive" alt="{{ $details->{$slug->title} }}" title="{{ $details->{$slug->title} }}" />
					</div>
					 
				</div>
				<div class="matter">
					<h4>{{ $details->{$slug->title} }}</h4>
 					<p>{{ $details->{$slug->content} }}</p>
					  
				</div>
			</div>
		</div>
	</div>
</div>
<!-- eventview end here -->

@stop

@section("js_files")
	<script>
		var custom = {
			subscribe_url: "{{ url('subscribe') }}"
		};
	</script>
	<script src="assets/front/custom/js/home.js" type="text/javascript"></script>
@stop

