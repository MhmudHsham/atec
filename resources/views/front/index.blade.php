@extends("layouts.front")
@section("content")
<!-- ======================= Start Banner ===================== -->
<div class="main-banner" style="background-image:url(./assets/img/slider-2.jpg);">
    <div class="container">
        <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
        
            <div class="caption text-center cl-white">
                <h2>Find Your Career. You Deserve it.</h2>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
            </div>
            
            <form>
                <fieldset class="home-form-1 icon-field">
                    <div class="col-md-4 col-sm-4 col-xs-12 padd-0">
                        <div class="form-group">
                            <div class="icon-addon addon-lg">
                                <select class="wide form-control br-1">
                                    <option data-display="All Categories">All Categories</option>
                                    @foreach($categories as $one)
                                        <option value="{{ $one->id }}">{{ $one->{$slug->title} }}</option>
                                    @endforeach
                                </select>
                                <label class="fa fa-edit"></label>
                            </div>
                        </div>
                    </div>						

                    <div class="col-md-3 col-sm-3 col-xs-12 padd-0">
                        <div class="form-group">
                            <div class="icon-addon addon-lg">
                                <select class="wide form-control br-1">
                                    <option data-display="Range">Range</option>
                                    <option value="1">2000-3000</option>
                                    <option value="2">3000-5000</option>
                                    <option value="3">40000-55500</option>
                                    <option value="4">9000000</option>
                                </select>
                                <label class="fa fa-money"></label>
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-md-3 col-sm-3 col-xs-12 padd-0">
                        <div class="form-group">
                            <div class="icon-addon addon-lg">
                                <select class="wide form-control">
                                    <option data-display="Status">Status</option>
                                    <option value="1">Online</option>
                                    <option value="2">Offline</option>
                                </select>
                                <label class="fa fa-star"></label>
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-md-2 col-sm-2  col-xs-12 padd-0">
                        <button type="submit" class="btn theme-btn cl-white seub-btn">FIND JOB</button>
                    </div>
                        
                </fieldset>
            </form>
            
            <div class="text-center">
                <div class="choose-opt">
                    <div class="choose-opt-box"><span>OR</span></div>
                </div>
                <a href="?page=create-job_en" class="btn btn-hiring btn-m mrg-5"><span class="ti-briefcase padd-r-5"></span>Post a Job for Free</a>
            </div>
            
        </div>
    </div>
</div>
<!-- ======================= End Banner ===================== -->

<!-- ====================== Advance Features ================= -->
<section class="how-it-works">
    <div class="container">
        
        <div class="row" data-aos="fade-up">
            <div class="col-md-12">
                <div class="heading">
                    <h2>How It Works?</h2>
                    <p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
                </div>
            </div>
        </div>
        
        <div class="row">
        
            <div class="col-md-4 col-sm-4">
                <div class="work-process">
                    <span class="process-icon bg-danger-light">
                        <i class="ti-user"></i>
                        <span class="process-count bg-danger cl-white">1</span>
                    </span>
                    <h4>Create An Account</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-4">
                <div class="work-process step-2">
                    <span class="process-icon bg-success-light">
                        <i class="ti-pencil-alt"></i>
                        <span class="process-count bg-success cl-white">2</span>
                    </span>
                    <h4>Find & Hire</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-4">
                <div class="work-process step-3">
                    <span class="process-icon bg-purple-light">
                        <i class="ti-thumb-up"></i>
                        <span class="process-count bg-purple cl-white">3</span>
                    </span>
                    <h4>Start Work</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
            
        </div>
        
    </div>
</section>
<!-- ====================== Tag Section ============================ -->

<section class="gray-bg">
    <div class="container">
    
        <div class="row" data-aos="fade-up">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Browse By Category</h2>
                    <p>Each month, more than 7 million Jobhunt turn to website in their search for work, making over<br>160,000 applications every day.</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            
            
            @foreach($categories as $one)
                <div class="col-md-3 col-sm-6">
                    <div class="category-box" data-aos="fade-up">
                        <div class="category-desc">
                            <div class="category-icon">
                                <i class="{{ $one->icon }}"></i>
                            </div>

                            <div class="category-detail category-desc-text">
                                <a href="" title=""><h4>{{ $one->{$slug->title} }}</h4></a>
                                <p>122 Jobs</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
            
        
    
            @if(count($categories) > 6)
            <div class="col-md-12">
                <div class="text-center">
                    <a href="?page=category-details_en" class="btn theme-btn btn-m">Browse All Category</a>
                </div>
            </div>
            @endif
            
        </div>
        
    </div>
</section>
<!-- =================== End Tag Section ==================== -->
<!-- ======================= All Jobs ==================================== -->
<section>
    <div class="container">
        <div class="table-responsive"> 
            <table class="table table-lg table-hover">
                <thead>
                    <tr>
                        <th>Service Title</th>
                        <th>Seller</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Apply</th>
                    </tr>
                </thead>
                
                <tbody>


                    @foreach($services as $one)
                    <tr>
                        <td>
                            <a href="javascript:void(0);">
                                <img src="{{ url('/uploads/services/'.$one->image) }}" class="avatar-lg" alt="{{ $one->{$slug->title} }}">{{ $one->{$slug->title} }}
                            </a>
                        </td>
                        <td><i class=""></i> {{ $one->seller->name }}</td>
                        <td><div class="full-type">{{ $one->category->{$slug->title} }}</div></td>                
                        <td><i class=""></i> {{ $one->price }} {{ $one->currency->{$slug->title} }}</td>
                        <td>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#apply-job" class="apply-job-btn btn btn-radius theme-btn">Apply</a>
                        </td>
                    </tr>
                    @endforeach
                    
                    
                  
                    
                </tbody>
            </table>
            
            <!-- flexbox -->
            <!-- <div class="flexbox padd-10">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">»</span>
                        <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </div> -->
            <!-- /.flexbox -->
    
        </div>
    </div>
</section>
<!-- ====================== End All jobs ============================ -->
<!-- ================ Opening job Section ============================== -->
<section class="gray-bg">
    <div class="container">
    
        <div class="row" data-aos="fade-up">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Latest Employers</h2>
                    <p>Each month, more than 7 million Jobhunt turn to website in their search for work, making over<br>160,000 applications every day.</p>
                </div>
            </div>
        </div>
        
        <div class="row" data-aos="fade-up">
            <div class="employer-slide">
            

            @foreach($requests as $one)
                <!-- Single Employer -->
                <div class="employer-widget">
                    <div class="u-content">
                        <div class="avatar box-80">
                            <a href="javascript:void(0);">
                                <img class="img-responsive" src="{{ url('/uploads/requests/'.$one->image) }}" alt="">
                            </a>
                        </div>
                        <h5><a href="javascript:void(0);">{{ $one->category->{$slug->title} }}</a></h5>
                        <p class="text-muted">{{ $one->{$slug->title} }}</p>
                    </div>
                    <div class="job-type-grid">
                        <a href="javascript:void(0);" class="employer-browse-btn btn-radius br-light">Request Now</a>
                    </div>
                </div>
                @endforeach
               


                
            </div>
        </div>
        
    </div>
</section>
@stop