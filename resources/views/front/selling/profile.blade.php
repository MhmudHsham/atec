@extends("layouts.front")
@section("content")
<!-- ======================= Start Page Title ===================== -->
<div class="page-title">
    <div class="container">
        <div class="col-sm-12">
            <div class="page-caption">
                <h2>Profile</h2>
                <p>
                    <a href="{{ url('/') }}" title="Home">Home</a> 
                    <i class="ti-arrow-right"></i> Profile
                </p>
            </div>
        </div>
    </div>
</div>
<!-- ======================= End Page Title ===================== -->


<!-- ====================== Resume Detail ================ -->
<section>
    <div class="container">
        <!-- row -->
        <div class="row">
            
            <div class="col-md-8 col-sm-8">
           
                
                <div class="detail-wrapper">
                    <div class="detail-wrapper-body">
                    
                        <div class="text-center mrg-bot-30">
                            <img src="{{ url('uploads/sellers/'.$details->image) }}" class="img-circle width-100" alt=""/>
                            <h4 class="meg-0">{{ $details->name }}</h4>
                            <span>{{ $details->position }}</span>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-4 mrg-bot-10">
                                <i class="ti-location-pin padd-r-10"></i>{{ $details->location }}
                            </div>
                            <div class="col-sm-4 mrg-bot-10">
                                <i class="ti-email padd-r-10"></i>{{$details->email}}
                            </div>
                            <div class="col-sm-4 mrg-bot-10">
                                <i class="ti-mobile padd-r-10"></i>{{$details->phone}}
                            </div>
                            <div class="col-sm-4 mrg-bot-10">
                                <i class="ti-shield padd-r-10"></i>{{$details->experience}}
                            </div>
                            <!-- <div class="col-sm-4 mrg-bot-10">
                                <span class="skill-tag">css</span>
                                <span class="skill-tag">HTML</span>
                                <span class="skill-tag">Photoshop</span>
                            </div> -->
                        </div>
                        
                    </div>
                </div>
                
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Career</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        <p>
                            {{$details->career}}
                        </p>
                    </div>
                </div>
<!--                 
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Education</h4>
                    </div>
                    <div class="detail-wrapper-body">
                    
                        <div class="edu-history info">
                            <i></i>
                            <div class="detail-info">
                                <h3>University</h3>
                                <i>2008 - 2012</i>
                                <span>Middle East Technical University <i>Computer Science</i></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                            </div>
                        </div>
                        
                        <div class="edu-history danger">
                            <i></i>
                            <div class="detail-info">
                                <h3>Intermediate School</h3>
                                <i>2008 - 2012</i>
                                <span>Middle East Technical University <i>Computer Science</i></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                            </div>
                        </div>
                        
                        <div class="edu-history success">
                            <i></i>
                            <div class="detail-info">
                                <h3>High School</h3>
                                <i>2008 - 2012</i>
                                <span>Middle East Technical University <i>Computer Science</i></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Work & Experience</h4>
                    </div>
                    <div class="detail-wrapper-body">
                    
                        <div class="edu-history info">
                            <i></i>
                            <div class="detail-info">
                                <h3>Php Developer <span>Infox Studio</span></h3>
                                <i>2008 - 2012</i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                            </div>
                        </div>
                        
                        <div class="edu-history danger">
                            <i></i>
                            <div class="detail-info">
                                <h3>Java Developer <span>Itare Studio</span></h3>
                                <i>2012 - 2014</i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                            </div>
                        </div>
                        
                        <div class="edu-history success">
                            <i></i>
                            <div class="detail-info">
                                <h3>CMS Developer <span>Dexlo Studio</span></h3>
                                <i>2014 - 2018</i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                
            </div>
            
            <!-- Sidebar -->
            <div class="col-md-4 col-sm-4">
                <div class="sidebar">
                
                    <!-- Start: Opening hour -->
                    <div class="widget-boxed">
                        <div class="widget-boxed-body">
                            <!-- <a href="#" class="btn btn-m theme-btn full-width mrg-bot-10"><i class="ti-heart"></i>Bookmark This</a> -->
                            <a href="{{ url('/sellers/edit') }}" class="btn btn-m light-gray-btn full-width">
                                <i class="ti-check"></i>Edit Profile
                            </a>
                        </div>
                    </div>
                    <!-- End: Opening hour -->
                    
                    <!-- Start: Job Overview -->
                    <div class="widget-boxed">
                        <div class="widget-boxed-header">
                            <h4><i class="ti-location-pin padd-r-10"></i>Location</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="side-list no-border">
                                <ul>
                                    <li><i class="ti-credit-card padd-r-10"></i> {{ $details->location }}</li>
                                    @if($details->facebook != "")<li><i class="ti-facebook padd-r-10"></i>{{ $details->facebook }}</li>@endif
                                    <li><i class="ti-mobile padd-r-10"></i>{{ $details->phone }}</li>
                                    <li><i class="ti-email padd-r-10"></i>{{ $details->email }}</li>
                                    <li><i class="ti-pencil-alt padd-r-10"></i>{{ $details->gender }}</li>
                                    <li><i class="ti-shield padd-r-10"></i>{{ $details->experience }}</li>
                                </ul>
                                <h5>Share Job</h5>
                                <ul class="side-list-inline no-border social-side">
                                    <li><a href="#"><i class="fa fa-facebook theme-cl"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus theme-cl"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter theme-cl"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin theme-cl"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest theme-cl"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End: Job Overview -->
                        
                </div>
                
            </div>
            <!-- End Sidebar -->
            
        </div>
        <!-- End Row -->
        
    </div>
</section>

<!-- ====================== End Resume Detail ================ -->
@stop