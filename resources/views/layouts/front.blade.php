<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png">

    <title>ATEC | Home Page</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/front/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{!! url('assets/front/css/backendstyle.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/front/css/style.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/front/css/font-awesome.min.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/front/css/font-circle-video.css') !!}" rel="stylesheet">

    <!-- font-family: 'Hind', sans-serif; -->
    <link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,600,700|Hind+Guntur:300,400,500,700'
          rel='stylesheet' type='text/css'>
</head>

<body class="light">
<!-- logo, menu, search, avatar -->
<div class="container-fluid">
    <div class="row">

        <div class="navbar-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-sm-2 col-xs-2">
                        <a class="navbar-brand" href="{{url('/')}}">
                            <img src="{{ url('/uploads/images/logo.jpg') }}" alt="ATEC"
                                                                       class="header-logo"/></a>
                    </div>
                    <div class="col-lg-3 col-sm-10 col-xs-10">
                    </div>
                    <div class="visible-xs visible-sm clearfix"></div>
                    <div class="col-lg-6 col-sm-8 col-xs-12">
                        <form action="search.html" method="post">
                            <div class="topsearch">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i
                                            class="fa fa-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search"
                                           aria-describedby="sizing-addon2">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="cv cvicon-cv-video-file"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                class="caret"></span></button>
                                    </div><!-- /btn-group -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="visible-xs clearfix"></div>
                    <div class="col-lg-2 col-sm-4  col-xs-8">
                        <div class="avatar pull-left">
                            <img src="{{ url('/assets/front/images/avatar.png') }}" alt="avatar"/>
                            <span class="status"></span>
                        </div>
                        <div class="selectuser pull-left">
                            <div class="btn-group pull-right dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Bailey
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/students/login') }}">Login</a></li>
                                    <li><a href="{{ url('/students/signup') }}">Sign up</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /logo -->

<!-- goto -->
<div class="container-fluid">
    <div class="row">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed toggle-menu visible-xs-block"
                            data-toggle="collapse" data-target="#bs-mega-menu-one" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-mega-menu-one">


                    <ul class="exo-menu display">
                        <li><a class="active" href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
                        
                        <li><a href="{{ url('/services') }}"><i class="fa fa-cogs"></i> Services</a></li>
                        <!-- <li><a href="#"><i class="fa fa-briefcase"></i> Portfolio</a></li> -->
                        <!-- <li class="mega-drop-down"><a href="#"><i class="fa fa-list"></i> Mega Menu</a>
                            <div class="animated fadeIn mega-menu">
                                <div class="mega-menu-wrap">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4 class="row mega-title">Feature</h4>
                                            <img class="img-responsive"
                                                 src="https://3.bp.blogspot.com/-rUk36pd-LbM/VcLb48X4f-I/AAAAAAAAGCI/Y_UxBAgEqwA/s1600/Magento_themes.jpg">
                                        </div>
                                        <div class="col-md-2">
                                            <h4 class="row mega-title">Standers</h4>
                                            <ul class="stander">
                                                <li><a href="#">Mobile</a></li>
                                                <li><a href="#">Computer</a></li>
                                                <li><a href="#">Watch</a></li>
                                                <li><a href="#">laptop</a></li>
                                                <li><a href="#">Camera</a></li>
                                                <li><a href="#">I pad</a></li>
                                                <li><a class="view-more btn- btn-sm" href="#">View more</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h4 class="row mega-title">Description</h4>
                                            <ul class="description">
                                                <li><a href="#">Women</a>
                                                    <span>Description of Women</span>
                                                </li>
                                                <li><a href="#">Men</a>
                                                    <span>Description of men Cloths</span>
                                                </li>
                                                <li><a href="#">Kids</a>
                                                    <span>Description of Kids Cloths</span>
                                                </li>
                                                <li><a href="#">Others</a>
                                                    <span>Description of Others Cloths</span>
                                                </li>
                                                <li>
                                                    <a class="view-more btn btn-sm " href="#">View more</a>

                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h4 class="row mega-title">Icon + Description</h4>
                                            <ul class="icon-des">
                                                <li><a href="#"><i class="fa fa-globe"></i>Web</a></li>
                                                <li><a href="#"><i class="fa fa-mobile"></i>Mobile</a></li>
                                                <li><a href="#"><i class="fa fa-arrows-h"></i>Responsive</a></li>
                                                <li><a href="#"><i class="fa fa-desktop"></i>Desktop</a></li>
                                                <li><a href="#"><i class="fa fa-paint-brush"></i>UI/UX</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li> -->
                        <li class="blog-drop-down"><a href="#"><i class="fa fa-bullhorn"></i> News</a>
                            <div class="Blog animated fadeIn">
                                @foreach($header_news as $one)
                                <div class="col-md-4">
                                    <img class="img-responsive"
                                         src="{{ url('/uploads/images/'.$one->image) }}">
                                    <div class="blog-des">
                                        <h4 class="blog-title">{{ $one->title_en }}</h4>
                                        <p>{{ mb_substr($one->content_en, 0, 120) }}</p>
                                        <a class="view-more btn- btn-sm" href="{{ url('/news/details/'.$one->id) }}">Read More</a>
                                    </div>
                                </div> 
                                @endforeach


                            </div>
                        </li>
                        <li class="images-drop-down"><a href="#"><i class="fa fa-photo"></i> Images</a>
                            <div class="Images animated fadeIn">
                                <div class="col-md-3">
                                    <h4>Images Title </h4>
                                    <img class="img-responsive"
                                         src="https://2.bp.blogspot.com/-VG_e0pKfrDo/VcLb6JwZqfI/AAAAAAAAGCk/8ZgA9kZqTQ8/s1600/images3.jpg">
                                </div>
                                <div class="col-md-3">
                                    <h4>Images Title </h4>
                                    <img class="img-responsive"
                                         src="https://3.bp.blogspot.com/-hUt5FrdZHio/VcLb5dlwTBI/AAAAAAAAGCU/UUH5N1JkoQc/s1600/images1.jpg">
                                </div>
                                <div class="col-md-3">
                                    <h4>Images Title </h4>
                                    <img class="img-responsive"
                                         src="https://4.bp.blogspot.com/-A7U1uPlSq6Y/VcLb5kKHCkI/AAAAAAAAGCc/7WghyndTEuY/s1600/images2.jpg">
                                </div>
                                <div class="col-md-3">
                                    <h4>Images Title </h4>
                                    <img class="img-responsive"
                                         src="https://3.bp.blogspot.com/-hGrnZIjzL2k/VcLb47kyQKI/AAAAAAAAGCQ/J6Q2IAHIQvQ/s1600/image4.jpg">
                                </div>

                            </div>

                        </li>
                        <li><a href="{{ url('/contact-us') }}"><i class="fa fa-envelope"></i> Contact</a>
                            <div class="contact">

                            </div>
                        </li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

    </div>
</div>
<!-- /goto -->

@yield("content")


<!-- footer -->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="container padding-def">
                <div class="col-lg-1  col-sm-2 col-xs-12 footer-logo">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ url('/uploads/images/logo.jpg') }}" alt="Project name" class="logo"/>
                    </a>
                </div>
                <div class="col-lg-7  col-sm-7 col-xs-12">
                    <div class="f-links">
                        <ul class="list-inline">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <div class="delimiter"></div>
                    <div class="f-copy">
                        <ul class="list-inline">
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li>Copyrights 2018 <a href="#">Mohamed Ragab</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-3 col-sm-3 col-xs-12">
                    <div class="f-icon pull-left">
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <div class="f-lang pull-right">
                        <!-- Small button group -->
                        <div class="btn-group dropup pull-right">
                            <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                Language <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /footer -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{!! url('assets/front/js/jquery.min.js') !!}"></script>
<script src="{!! url('assets/front/bootstrap/js/bootstrap.min.js') !!}"></script>
<script src="{!! url('assets/front/js/custom.js') !!}"></script>

</body>
</html>
