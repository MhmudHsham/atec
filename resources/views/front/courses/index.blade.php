@extends("layouts.app")
@section("content")

<!-- bread-crumb start here -->
<div class="bread-crumb">
	<img src="{{  url('public/assets/front/images/banner-top.jpg') }}" class="img-responsive" alt="banner-top" title="banner-top">
	<div class="container">
		<div class="matter">
			<h2>{{ trans("lang.All Courses") }}</h2>
			<ul class="list-inline">
				<li>
					<a href="{{ url($lang . '/') }}">{{ trans("lang.Home") }}</a>
				</li>
				<li>
					<a href="{{ url($lang . 'courses') }}">{{ trans("lang.All Courses") }}</a>
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
				{{--  <div class="left">
					<h4>SEARCH</h4>
					<div class="search">
						<form class="form-horizontal" method="post">
							<fieldset>
								<div class="form-group">
									<input name="s" value="" class="form-control" placeholder="Search Keyword" type="text">
									<button type="submit" value="submit" class="btn">
										<i class="icofont icofont-search"></i>
									</button>
								</div>
							</fieldset>
						</form>
					</div>
				</div>	  --}}
				{{--  <div class="left">
					<h4>FILTERS</h4>
					<div class="filter">
						<ul class="list-unstyled">
							<li>
								<input type="radio"  name="info" class="checkclass checkbox-inline"/>Information Technology
							</li>
							<li>
								<input type="radio"  name="business" class="checkclass checkbox-inline"/>Business
							</li>
							<li>
								<input type="radio"  name="design" class="checkclass checkbox-inline"/>Web Design
							</li>
							<li>
								<input type="radio"  name="language" class="checkclass checkbox-inline"/>Language
							</li>
							<li>
								<input type="radio"  name="marketing" class="checkclass checkbox-inline"/>Marketing
							</li>
							<li>
								<input type="radio"  name="sales" class="checkclass checkbox-inline"/>Sales
							</li>
							<li>
								<input type="radio"  name="auto" class="checkclass checkbox-inline"/>Auto Mobile
							</li>
						</ul>
					</div>
					<h4>COST TYPE</h4>
					<div class="cost">
						<ul class="list-unstyled">
							<li>
								<input type="radio"  name="all" class="checkclass checkbox-inline"/>All
							</li>
							<li>
								<input type="radio"  name="free" class="checkclass checkbox-inline"/>Free
							</li>
							<li>
								<input type="radio"  name="paid" class="checkclass checkbox-inline"/>Paid
							</li>
						</ul>
					</div>
					<h3>SEARCH FILTERS</h3>
				</div>  --}}
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
			<div class="col-sm-9 col-xs-12 mainpage">
				<div class="col-sm-12 sort">
					<div class="col-md-6 col-sm-5">
						<h3>{{ trans("lang.All Courses") }}</h3>
						<p>{{ trans("Total") }} {{ $count }} {{ trans("lang.Courses") }}</p>
					</div>
					{{--  <div class="col-md-4 col-sm-4">
						<div class="form-group">
							<select id="input-sort" class="form-control selectpicker bs-select-hidden">
								<option value="" selected="selected">Select Categories</option>
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
							</select>
						</div>
					</div>  --}}
					<div class="col-md-2 col-sm-3 list hidden-xs">
						<div class="btn-group btn-group-sm">
							<button type="button" id="grid-view" class="btn btn-default btngrid" data-toggle="tooltip" title="Grid"><i class="fa fa-th-large" aria-hidden="true"></i></button>
							<button  type="button" id="list-view" class="btn btn-default btngrid" data-toggle="tooltip" title="List"><i class="fa fa-list-ul" aria-hidden="true"></i></button>
						</div>
					</div>
				</div>
				<div class="row">



					@foreach ($courses as $one)
					<div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12" style="max-height: 300px;">
						<div class="product-thumb">
							<div class="image">
								<a href="{{ url($lang.'/courses/details/'.$one->id) }}">
									<img style="width:265px;height:175px;" src="{{ url('public/uploads/images/' . $one->image) }}" class="img-responsive" alt="{{ $one->{$slug->title} }}" title="{{ $one->{$slug->title} }}" />
								</a>
							</div>
							<div class="caption">
								<h3>{{ $one->year->year }} </h3>
								<h4>{{ $one->{$slug->title} }}</h4>
								{{--  <h5>Developing Mobiles Apps <span class="price">$29.00</span></h5>  --}}
								<h6>{{ $one->year->year }} - {{ $one->{$slug->title} }}</h6>
								<p>{{ substr($one->{$slug->content}, 0, 150) }}</p>
								{{--  <ul class="list-inline">
									<li>
										<a href="#"><i class="icofont icofont-ui-user"></i>15</a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-comment"></i>10</a>
									</li>
									<li>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</li>
								</ul>  --}}
							</div>
						</div>
					</div>	
					@endforeach
										
					<!--pagination code start here-->
					<div class="col-sm-12 col-xs-12">		
						{{ $courses->links() }}
					</div>
					<!--pagination code end here-->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- coures end here -->


@stop