@extends("layouts.app")
@section("content")


<!-- bread-crumb start here -->
<div class="bread-crumb">
	<img src="{{ url('assets/front/images/banner-top.jpg') }}" class="img-responsive" alt="banner-top" title="banner-top">
	<div class="container">
		<div class="matter">
			<h2>Our Blog</h2>
			<ul class="list-inline">
				<li>
					<a href="{{ url('/') }}">HOME</a>
				</li>
				<li>
					<a href="{{ url('news') }}">News</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- bread-crumb end here -->

<!-- blog start here -->
<div class="blogs">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-xs-12 hidden-xs">
				<div class="left">
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
				</div>	
				<div class="left">
					<h4>CATEGORIES</h4>
					<div class="filter">
						<ul class="list-unstyled">
							<li>
								<input type="radio"  name="credit" class="checkclass checkbox-inline"/>Education
							</li>
							<li>
								<input type="radio"  name="courses" class="checkclass checkbox-inline"/>Courses
							</li>
							<li>
								<input type="radio"  name="blogs" class="checkclass checkbox-inline"/>Blogs
							</li>
							<li>
								<input type="radio"  name="administion" class="checkclass checkbox-inline"/>Administion
							</li>
							<li>
								<input type="radio"  name="materials" class="checkclass checkbox-inline"/>Materials
							</li>
							<li>
								<input type="radio"  name="buy" class="checkclass checkbox-inline"/>Buy Courses
							</li>
							<li>
								<input type="radio"  name="other" class="checkclass checkbox-inline"/>Other
							</li>
						</ul>
					</div>
				</div>
				<div class="left">
					<h4>LATEST BLOGS</h4>
					<div class="popular">
						<div class="box">
							<img src="images/p1.jpg" class="img-responsive" alt="img" title="img" />
							<p>Introduction to Mobile Application Develop..</p>
						</div>
						<div class="box">
							<img src="images/p2.jpg" class="img-responsive" alt="img" title="img" />
							<p>Introduction to PHP Website Development</p>
						</div>
						<div class="box">
							<img src="images/p3.jpg" class="img-responsive" alt="img" title="img" />
							<p>Android Application Development</p>
						</div>
						<div class="box">
							<img src="images/p1.jpg" class="img-responsive" alt="img" title="img" />
							<p>Introduction to Mobile Application Develop..</p>
						</div>
						<div class="box">
							<img src="images/p2.jpg" class="img-responsive" alt="img" title="img" />
							<p>Introduction to PHP Website Development</p>
						</div>
					</div>
				</div>	
				<div class="left">
					<h4>ARCHIVES</h4>
					<div class="archive">
						<div class="form-group">
							<select id="input-sort" class="form-control selectpicker bs-select-hidden">
								<option value="" selected="selected">Select Month</option>
								<option value="">Jan</option>
								<option value="">Feb</option>
								<option value="">Mar</option>
								<option value="">April</option>
								<option value="">May</option>
							</select>
						</div>
					</div>
				</div>	
				<div class="left">
					<h4>TAGS</h4>
					<div class="tag">
						<ul class="list-inline">
							<li>
								<a href="#">Online</a>
							</li>
							<li>
								<a href="#">Tutorials</a>
							</li>
							<li>
								<a href="#">Video</a>
							</li>
							<li>
								<a href="#">Wordpress Developing</a>
							</li>
							<li>
								<a href="#">Online</a>
							</li>
							<li>
								<a href="#">PHP Developing</a>
							</li>
						</ul>
					</div>
				</div>	
			</div>
			<div class="col-sm-9 col-xs-12">





                @foreach($news as $one)
				<div class="box">
					<div class="image">
						<a href="{{ url('news/details/' . $one->id) }}">
							<img style="width:850px;height:390px;" src="{{ url('uploads/images/' . $one->image) }}" class="img-responsive" alt="img" title="img" />
						</a>
					</div>
					<div class="caption">
						<ul class="list-inline">
							<li>
								<a href="javascript:void(0);">
                                    <i class="icofont icofont-ui-calendar"></i>{{ $one->created_at }}
                                </a>
							</li>
							<li>
								{{-- <a href="#"><i class="icofont icofont-comment"></i>10</a> --}}
							</li>
						</ul>
						<h3>{{ $one->title_en }}</h3>
						<h4>{{ substr($one->content_en, 0, 150) }}</h4>
					</div>
				</div>
				@endforeach





				<!--pagination code start here-->
				<div class="row">		
					<div class="col-sm-12 col-xs-12">		
						{{ $news->links() }}
					</div>
				</div>	
				<!--pagination code end here-->
			</div>
		</div>
	</div>
</div>
<!-- blog end here -->

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