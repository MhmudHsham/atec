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
					<a href="{{ url('/') }}">{{ trans("lang.Home") }}</a>
                </li>
                <li>
                    <a href="{{ url($lang . '/news') }}">{{ trans("lang.News") }}</a>
                </li>
				<li>
					<a href="javascript:void(0);">{{ $details->{$slug->title} }}</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- bread-crumb end here -->

<!-- blog start here -->	
<div class="blog-detail">
	<div class="container">
		<div class="row">
				<div class="col-sm-3 col-xs-12 hidden-xs">                        
                        <div class="left">
                            <h4>{{ trans("lang.Popular Blogs") }}</h4>
                            <div class="popular">
                                
                                @foreach($latest_news as $one) 
                                <div class="box">
                                    <img src="{{ url('public/uploads/images/' . $one->image) }}" class="img-responsive" alt="img" title="img" />
                                    <p><a href="{{ url($lang.'/news/details/' . $one->id) }}">{{ $one->{$slug->title} }}</a></p>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>	                
                    </div>
			<div class="col-md-9 col-sm-9 col-lg-9 col-xs-12">
				<div class="bloggs owl-carousel">
					<div class="item">
						<div class="image">
							<a href="javascript:void(0);">
								<img style="width:850px;height:400px;" src="{{ url('public/uploads/images/' . $details->image) }}" alt="{{ $details->{$slug->title} }}" title="{{ $details->{$slug->title} }}" class="img-responsive" />
							</a>
						</div>
						<div class="caption">
							<ul class="list-inline">
								<li>
									<a href="javascript:;"><i class="icofont icofont-ui-calendar"></i>{{ $details->created_at }}</a>
								</li>
							</ul>
							<h3>Photoshop</h3>
							<h4>How to create Smoke Effect in Photoshop?</h4>
							<p class="des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci tellus, fermentum nec imperdiet sed, pulvinar et sem, Fusce hendrerit faucibus sollicitudin. Duis eu tristique elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci tellus, fermentum nec imperdiet sed, pulvinar et sem, Fusce hendrerit faucibus sollicitudin. Duis eu tristique elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci tellus, fermentum nec imperdiet sed, pulvinar et sem, Fusce hendrerit faucibus sollicitudin. Duis eu tristique elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Duis eu tristique elit.</p>
							<h5>01. Nulla tellus dolor, porttitor et, interdum vehicula libero.</h5>
							<p class="des">Nunc orci tellus, fermentum nec imperdiet sed, pulvinar et sem, Fusce hendrerit faucibus sollicitudin. Duis eu tristique elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci tellus, fermentum nec imperdiet sed, pulvinar et sem, Fusce hendrerit faucibus sollicitudin. Duis eu tristique elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Nunc orci tellus, fermentum nec imperdiet sed, pulvinar et sem, Fusce hendrerit faucibus sollicitudin. Duis eu tristique elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci tellus, fermentum nec imperdiet sed, pulvinar et sem, Fusce hendrerit faucibus sollicitudin. Duis eu tristique elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci tellus, fermentum nec imperdiet sed, pulvinar et sem, Fusce hendrerit faucibus sollicitudin. Duis eu tristique elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci tellus, fermentum nec imperdiet sed, pulvinar et sem, Fusce hendrerit faucibus sollicitudin.</p>
							<h5>02. Morbi eget pellentesque nisl, sed auctor neque.</h5>
							<p class="des">Nunc orci tellus, fermentum nec imperdiet sed, pulvinar et sem, Fusce hendrerit faucibus sollicitudin. Duis eu tristique elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci tellus, fermentum nec imperdiet sed, pulvinar et sem, Fusce hendrerit faucibus sollicitudin. Duis eu tristique elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Nunc orci tellus, fermentum nec imperdiet sed, pulvinar et sem, Fusce hendrerit faucibus sollicitudin. Duis eu tristique elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci tellus, fermentum nec imperdiet sed, pulvinar et sem, Fusce hendrerit faucibus sollicitudin. Duis eu tristique elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci tellus, fermentum nec imperdiet sed, pulvinar et sem, Fusce hendrerit faucibus sollicitudin. Duis eu tristique elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci tellus, fermentum nec imperdiet sed, pulvinar et sem, Fusce hendrerit faucibus sollicitudin.</p>
						</div>
					</div>
				
				</div>
				
			</div>
		</div>
	</div>
</div>
<!-- blog end here -->


@stop

@section("js_files")
	<script>
		var custom = {
			subscribe_url: "{{ url('subscribe') }}"
		};
	</script>
	<script src="assets/front/custom/js/home.js" type="text/javascript"></script>
@stop