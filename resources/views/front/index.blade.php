@extends("layouts.app")
@section("content")
    <!-- slider start here -->
    <div class="slide">
        <div class="slideshow owl-carousel">
            @foreach($sliders as $one)
                <div class="item">
                    <img style="height: 500px;" src="{{ url('/public/uploads/images/' . $one->image) }}" alt="banner"
                         title="banner" class="img-responsive"/>
                </div>
            @endforeach
        </div>
        <!-- slide-detail start here -->
        <div class="slide-detail">
            <div class="container">
                <div class="matter">
                    {{-- <p class="text">Get started with online education</p> --}}
                    <h4>{{ $sliders[0]->{$slug->title} }}</h4>
                    {{-- <p class="des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. ut et nulla erat. Nunc lacinia eros neque, eget fringilla dui ullamcorper vitae. vivamus at turpis condimentum.</p> --}}
                </div>
            </div>
        </div>
        <!-- slide-detail end here -->

    </div>
    <!-- slider end here -->

    <!-- service start here -->
    <div class="service">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="commontop text-center">
                        <h2>{{ trans("lang.our best service for you") }}</h2>
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                        <hr>
                    </div>
                </div>

                @foreach($services as $one)
                    <div class="col-sm-3 col-xs-12 box text-center">
                        <div class="icons">
                            <div class="icon">
                                <img style="width:100%;height: 100%;"
                                     src="{{ url('public/uploads/images/' . $one->image) }}" class="img-responsive"
                                     alt="{{ $one->{$slug->title} }}" title="{{ $one->{$slug->title} }}"/>
                            </div>
                        </div>
                        <h4>{{ $one->{$slug->title} }}</h4>
                        <p>{{ substr($one->{$slug->content}, 0, 150) }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- service end here -->

    <!-- about start here -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <div class="commontop text-left">
                        <h2>{{ trans("About us") }}</h2>
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.</p>--}}
                        <hr>
                    </div>
                    <p class="des">
                        @if($lang == "en")
                            {{ $settings['about_us_en'] }}
                        @else
                            {{ $settings['about_us_ar'] }}
                        @endif
                        <a href="{{ url($lang.'/about-us') }}">[ .... ]</a>
                    </p>
                    {{--<div class="image">--}}
                    {{--<img src="{{ url('public/uploads/images/obour.jpg') }}" class="img-responsive" alt="img" title="img"/>--}}
                    {{--<div class="icon">--}}
                    {{--<div class="ico"><a href="#"><i class="icofont icofont-ui-play"></i></a></div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
                <div class="col-sm-4 col-xs-12 feature">
                    <div class="commontop text-left">
                        <h2>our Institute</h2>
                        <img class="obour" src="{{ url('public/uploads/images/obour.jpg') }}">
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor--}}
                        {{--incididunt.</p>--}}
                        <hr>
                    </div>
                {{--<p class="des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor--}}
                {{--incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation--}}
                {{--ullamco... <a href="about.html">view more</a></p>--}}
                {{--<div class="box">--}}
                {{--<img src="images/icon01.png" class="img-responsive" alt="icon" title="icon"/>--}}
                {{--<p>Learn Courses online</p>--}}
                {{--<a href="#">View more</a>--}}
                {{--</div>--}}
                {{--<div class="box">--}}
                {{--<img src="images/icon02.png" class="img-responsive" alt="icon" title="icon"/>--}}
                {{--<p>Online Library Store</p>--}}
                {{--<a href="#">View more</a>--}}
                {{--</div>--}}
                <!-- <img src="images/ads.jpg" class="img-responsive" alt="ads" title="ads" /> -->
                </div>
            </div>
        </div>
    </div>
    <!-- about end here -->

    <!-- courses start here -->
    <div class="course">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="commontop text-center">
                        <h2>{{ trans("lang.our best popular courses for you") }}</h2>
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut--}}
                        {{--labore et dolore magna aliqua.</p>--}}
                        <hr>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="courses owl-carousel">


                    @foreach($courses as $one)
                        <div class="item">
                            <div class="col-sm-12 col-xs-12">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="{{ url('courses/details/' . $one->id . '/' . str_replace(' ', '-', $one->{$slug->title})) }}">
                                            <img style="width: 260px;height: 190px;"
                                                 src="{{ url('public/uploads/images/' . $one->image) }}"
                                                 class="img-responsive"
                                                 alt="{{ $one->{$slug->title} }}" title="{{ $one->{$slug->title} }}"/>
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h3>Technology </h3>
                                        <h4>{{ $one->{$slug->title} }}</h4>
                                        <p>{{ substr($one->{$slug->content}, 0, 150) }}</p>
                                        {{-- <ul class="list-inline">
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
                                        </ul> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <!-- courses end here -->

    <!-- featured start here -->
    <div class="featured">
        <div class="image">
            <img src="{{ url('public/assets/front/images/features/bg.jpg') }}" class="img-responsive" alt="bg"
                 title="bg"/>
        </div>
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="list-inline">
                            <li>
                                <div class="box">
                                    <div class="icon">
                                        <div class="icons">
                                            <img src="{{ url('public/assets/front/images/features/icon1.png') }}"
                                                 class="img-responsive" alt="image" title="image"/>
                                        </div>
                                    </div>
                                    <h4>Country Reached</h4>
                                    <p>15</p>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <div class="icon">
                                        <div class="icons">
                                            <img src="{{ url('public/assets/front/images/features/icon2.png') }}"
                                                 class="img-responsive" alt="image" title="image"/>
                                        </div>
                                    </div>
                                    <h4>User Registers</h4>
                                    <p>25k</p>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <div class="icon">
                                        <div class="icons">
                                            <img src="{{ url('public/assets/front/images/features/icon3.png') }}"
                                                 class="img-responsive" alt="image" title="image"/>
                                        </div>
                                    </div>
                                    <h4>Staff Members</h4>
                                    <p>566</p>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <div class="icon">
                                        <div class="icons">
                                            <img src="{{ url('public/assets/front/images/features/icon4.png') }}"
                                                 class="img-responsive" alt="image" title="image"/>
                                        </div>
                                    </div>
                                    <h4>Courses Published</h4>
                                    <p>1150</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured end here -->

    <!-- blog start here -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="commontop text-center">
                        <h2>{{ trans("lang.our blog get up to date with us") }}</h2>
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut--}}
                        {{--labore et dolore magna aliqua.</p>--}}
                        <hr>
                    </div>
                </div>

                @foreach($news as $one)
                    <div class="col-sm-4 col-xs-12">
                        <div class="box">
                            <div class="image">
                                <a href="{{ url('news/details/' . $one->id . '/' . str_replace(' ', '-', $one->{$slug->title})) }}">
                                    <img style="width: 360px;height: 250px;"
                                         src="{{ url('public/uploads/images/' . $one->image) }}" class="img-responsive"
                                         alt="{{ $one->{$slug->title} }}" title="{{ $one->{$slug->title} }}"/>
                                </a>
                            </div>
                            <div class="caption">
                                <ul class="list-inline">
                                    <li>
                                        <a href="javascript:void(0);"><i
                                                    class="icofont icofont-ui-calendar"></i>{{ $one->created_at }}</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont icofont-comment"></i>10</a>
                                    </li>
                                </ul>
                                <h3>{{ substr($one->{$slug->title}, 0, 30) }}</h3>
                                <h4>{{ substr($one->{$slug->content}, 0, 60) }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach


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
    <script src="public/assets/front/custom/js/home.js" type="text/javascript"></script>
@stop