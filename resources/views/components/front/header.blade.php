        <!-- ======================= Start Navigation ===================== -->
        <nav class="navbar navbar-default navbar-mobile navbar-fixed light bootsnav">
            <div class="container">
            
                <!-- Start Logo Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ url('assets/front/img/logo.png') }}" class="logo logo-display" alt="">
                        <img src="{{ url('assets/front/img/logo.png') }}" class="logo logo-scrolled" alt="">
                    </a>

                </div>
                <!-- End Logo Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                
                    <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                    
                        <li>
                            <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                        </li>
                        @if( \Session::get("buyer-data") == null)
                        <li>
                            <a href="{{ url('/selling') }}">Selling</a>
                        </li>
                        @endif
                        @if( \Session::get("seller-data") == null)
                        <li>
                            <a href="{{ url('/buying') }}">Buying</a>
                        </li>
                        @endif
                        <li>
                            <a href="{{ url('/how-it-works') }}">How it Works</a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Categories</a>
                            <ul class="dropdown-menu animated fadeOutUp">
                                @foreach($categories as $one)
                                    <li><a href="{{ url('/') }}">{{ $one->{$slug->title} }}</a></li> 
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/contact-us') }}">Contact us</a>
                        </li>
                        
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        @if( \Session::get("seller-data") != null)
                        <li class="dropdown sign-up">
							<a class="dropdown-toggle btn-signup red-btn" data-toggle="dropdown" href="javascript:void(0);">
								<img src="{{ url('uploads/sellers/' . \Session::get('seller-data')->image) }}" class="img-responsive img-circle" alt="">{{ \Session::get("seller-data")->name }}
							</a>
                            @php($seller_data = \Session::get('seller-data'))
                            @if($seller_data->image != "user.png")
							<ul class="dropdown-menu animated fadeOutUp">
								<li><a href="{{ url('/sellers/profile') }}">Profile</a></li>                            
                                <li><a href="{{ url('/sellers/services/add') }}">Add Service</a></li>                            
                                <li><a href="javascript:void(0);">Messages</a></li> 
								<li><a href="javascript:void(0);">Browse Jobs</a></li>
								<li><a href="{{ url('/sellers/logout') }}">Sign Out</a></li>
							</ul>
                            @else 
                            <ul class="dropdown-menu animated fadeOutUp">
								<li><a href="{{ url('/sellers/edit') }}">Complete Profile</a></li>
								<li><a href="{{ url('/sellers/logout') }}">Sign Out</a></li>
							</ul>
                            @endif
						</li>
                        @elseif(\Session::get("buyer-data") != null)
                        <li class="dropdown sign-up">
							<a class="dropdown-toggle btn-signup red-btn" data-toggle="dropdown" href="javascript:void(0);">
								<img src="{{ url('uploads/sellers/' . \Session::get('buyer-data')->image) }}" class="img-responsive img-circle" alt="">{{ \Session::get("buyer-data")->name }}
							</a>
                            @php($buyer_data = \Session::get('buyer-data'))
                            @if($buyer_data->image != "user.png")
							<ul class="dropdown-menu animated fadeOutUp">
								<li><a href="{{ url('/buyers/profile') }}">Profile</a></li>                            
                                <li><a href="{{ url('/buyers/requests/add') }}">Add Request</a></li>                            
                                <li><a href="javascript:void(0);">Messages</a></li> 
								<li><a href="javascript:void(0);">Browse Jobs</a></li>
								<li><a href="{{ url('/buyers/logout') }}">Sign Out</a></li>
							</ul>
                            @else 
                            <ul class="dropdown-menu animated fadeOutUp">
								<li><a href="{{ url('/buyers/edit') }}">Complete Profile</a></li>
								<li><a href="{{ url('/buyers/logout') }}">Sign Out</a></li>
							</ul>
                            @endif
						</li>
                        @else
                        <li class="br-right"><a href="javascript:void(0)"  data-toggle="modal" data-target="#signin"><i class="login-icon ti-user"></i>Login</a></li>
                        @endif

 



                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-money"></i> Currency</a>
                            <ul class="dropdown-menu animated fadeOutUp">
                                @foreach($currencies as $one)
                                    <li><a href="javascript:void(0);">{{ $one->{$slug->title} }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-language"></i> Language</a>
                            <ul class="dropdown-menu animated fadeOutUp">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Arabic</a></li>
                            </ul>
                        </li>
                    </ul>
                        
                </div>
                <!-- /.navbar-collapse -->
            </div>   
        </nav>
        <!-- ======================= End Navigation ===================== -->
        