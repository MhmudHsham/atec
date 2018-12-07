@extends("layouts.app")
@section("content")


<!-- bread-crumb start here -->
<div class="bread-crumb">
	<img src="{{  url('public/assets/front/images/banner-top.jpg') }}" class="img-responsive" alt="banner-top" title="banner-top">
	<div class="container">
		<div class="matter">
			<h2>{{ $details->{$slug->title} }}</h2>
			<ul class="list-inline">
				<li>
					<a href="{{ url('/' . $lang) }}">{{ trans("lang.Home") }}</a>
				</li>
				<li>
					<a href="javascript:void(0);">{{ $details->{$slug->title} }}</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- bread-crumb end here -->

<!-- coures start here -->
<div class="coures">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-xs-12 hidden-xs">			
				<div class="left">
					<h4>{{ trans("lang.Other Courses") }}</h4>
					<div class="popular">
						@foreach($latest_courses as $one)
						<div class="box">
							<img src="{{ url('public/uploads/images/' . $one->image) }}" class="img-responsive" alt="img" title="img" />
							<p><a href="{{ url($lang.'/courses/details/'.$one->id) }}">{{ $one->{$slug->title} }}</a></p>
							<span>{{ $one->year->year }}</span>
						</div>
						@endforeach						
					</div>
				</div>	
			</div>
			<div class="col-sm-9 col-xs-12 details">
				{{--  <h4>Developing Mobiles Apps <span>$29.00</span></h4>
				<ul class="list-inline text">
					<li>Technology</li>
					<li class="pull-right">
						<i class="icofont icofont-star"></i>
						<i class="icofont icofont-star"></i>
						<i class="icofont icofont-star"></i>
						<i class="icofont icofont-star"></i>
						<i class="icofont icofont-star"></i>
						<span>(10 Reviews)</span>
					</li>
				</ul>  --}}
				<div class="image">
					<img  style="width:850px;height:400px;" src="{{ url('public/uploads/images/' . $one->image) }}" class="img-responsive" alt="{{ $details->{$slug->title} }}" title="{{ $details->{$slug->title} }}" />
					<p>{{ $details->{$slug->title} }}</p>					
				</div>
				{{--  <ul class="list-inline icon">
					<li>
						<a href="#"><i class="icofont icofont-ui-user"></i>15</a>
					</li>
					<li>
						<a href="#"><i class="icofont icofont-comment"></i>10</a>
					</li>
				</ul>  --}}
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#tab-description" data-toggle="tab">{{ trans("lang.Description") }}</a>
					</li>
					<li>
						<a href="#tab-information" data-toggle="tab">{{ count($details->materials) }} {{ trans("lang.lessons") }}</a>
					</li>
					<li>
						<a href="#tab-tutorials" data-toggle="tab">{{ trans("lang.Tutorials") }}</a>
					</li>
					{{--  <li class="inreview">
						<a href="#tab-review" data-toggle="tab">all reviews</a>
					</li>  --}}
					{{--  <li class="pull-right">
						<a href="#"><i class="icofont icofont-plus-circle"></i>add review</a>
					</li>  --}}
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab-description">
						<p>{{ $details->{$slug->content} }}</p>
					</div>
					<div class="tab-pane" id="tab-information">
						<div class="panel-group" id="accordion">
							
							@if(count($details->materials) > 0)
								@foreach ($details->materials as $counter => $material)														
								<div class="panel panel-default">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $material->id }}">
											<h4 class="panel-title">{{ $counter+1 }}. lesson - {{ $material->{$slug->title} }}
												<i class="icofont icofont-thin-double-right"></i>
											</h4>
										</a>
									</div>
									<div id="collapse{{ $material->id }}" class="panel-collapse collapse">
										<div class="panel-body">
											<h6>
												{{ $material->{$slug->content} }}
												<br>
												@if($material->file)
												{{ trans("lang.Download Material Click ") }}
												<a target="_blank" href="{{ url('/public/uploads/images') . '/' . $material->file }}">{{ trans("lang.here") }}</a>
												@endif
											</h6>
										</div>
									</div>
								</div>
								@endforeach
							@endif
							
							

						</div> 
					</div>



					<div class="tab-pane" id="tab-tutorials">
						<div class="row">
							@if(count($details->materials) > 0)
								@foreach ($details->materials as $counter => $material)	
									@if($material->video)	
										<div class="col-sm-4">
											<div class="image1">												
												@php(parse_str(parse_url( $material->video, PHP_URL_QUERY ), $my_array_of_vars ))										
												<iframe width="265" height="190" src="https://www.youtube.com/embed/{{ $my_array_of_vars['v'] }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>												
											</div>
										</div>
									@endif
								@endforeach
							@endif
						</div>
					</div>
				
				</div>
			
			@if($instructor_data)
				<div class="outreview">
					<h6>ABOUT INSTRUCTOR</h6>
					<div class="box">
						<img style="width:100px;height:100px;" src="{{ url('/public/uploads/images') . '/' . $instructor_data['image'] }}" class="img-responsive" alt="{{ $instructor_data['name'] }}" title="{{ $instructor_data['name'] }}" />
						<div class="caption">
							<h2>{{ $instructor_data['name'] }}</h2>
							<span>{{ $instructor_data['position'] }}</span>
							<p>{{ $instructor_data['bio'] }}</p>							
						</div>
					</div>					
				</div>	
			@endif
		</div>
	</div>
</div>
<!-- coures end here -->



@stop