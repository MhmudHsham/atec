<!--top start here -->
<div class="top">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<ul class="list-inline pull-left icon">
					<li>
						<a href="{{ url($lang . '/contact-us') }}"><i class="icofont icofont-exclamation-circle"></i>{{ trans("lang.Help Center") }}</a>
					</li>
					<li>
						<a href="{{ url($lang . '/faq') }}"><i class="icofont icofont-support-faq"></i>{{ trans("lang.FAQ") }}</a>
					</li>
					<li>
						<!--language code start here-->
						<form  method="post" enctype="multipart/form-data" id="language">
							<div class="btn-group">
								<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
									<span class="text"><i class="icofont icofont-globe"></i>
										{{ trans("lang.Lang") }} : {{ LaravelLocalization::getCurrentLocaleName() }}</span> 
										 <i class="icofont icofont-caret-down"></i>
								</button>
								<ul class="dropdown-menu dropdown-menu-right">
									@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
									@if($lang != $localeCode)
									<li>
										<a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
											<i class="la la-language"></i>
											{{ $properties['native'] }}
										</a>
									</li>
									@endif
									@endforeach
								</ul>
							</div>
						</form>
						<!--language code end here-->
					</li>
				</ul>
				<ul class="list-inline pull-right icon">
					<li>
						<a href="{{ url($lang . '/courses') }}"><i class="icofont icofont-navigation-menu"></i>{{ trans("lang.Browse Courses") }}</a>
					</li>
					<li>
						<a href="{{ url($lang.'/login') }}"><i class="icofont icofont-key"></i>{{ trans("lang.Login") }}</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--top end here -->

<!-- header start here-->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div id="logo">
					<a href="{{ url($lang . '/') }}">
						<img class="img-responsive" src="{{ url('public/assets/front/images/1.jpg') }}" alt="logo" title="logo" />
					</a>
				</div>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-12">
				<!-- menu start here -->
				<div id="menu">	
					<nav class="navbar">
						<div class="navbar-header">
							<span class="menutext visible-xs">{{ trans("lang.Menu") }}</span>
							<button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</button>
						</div>
						<div class="collapse navbar-collapse navbar-ex1-collapse padd0">
							<ul class="nav navbar-nav text-right">
								<li>
									<a href="{{ url($lang.'/') }}">{{ trans("lang.Home") }}</a>
								</li>
								<li>
									<a href="{{ url($lang.'/about-us') }}">{{ trans("lang.About us") }}</a>
								</li>
								<li>
									<a href="{{ url($lang.'/courses') }}">{{ trans("lang.All Courses") }}</a>
								</li>									
								<li>
									<a href="{{ url($lang.'/news') }}">{{ trans("lang.News") }}</a>
								</li>
								<li>
									<a href="{{ url($lang.'/services') }}">{{ trans("lang.Services") }}</a>
								</li>
								<li>
									<a href="{{ url($lang.'/contact-us') }}">{{ trans("lang.Contact us") }}</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<!-- menu end here -->
			</div>			
		</div>
	</div>
</header>
<!-- header end here -->