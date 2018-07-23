@extends("layouts.front")
@section("content")
<!-- ======================= Page Title ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Buying Job</h2>
            <p><a href="#" title="Home">Home</a> <i class="ti-arrow-right"></i> Buying Job</p>
        </div>
    </div>
</div>
<!-- ======================= End Page Title ===================== -->

<!-- ====================== Start Job Detail 2 ================ -->
<section>
    <div class="container">
        
        <!-- row -->
        <div class="row">
            <!-- Start Sidebar -->
            <div class="col-md-3 col-sm-4">
            
                <div class="widget-boxed padd-bot-0">
                    <div class="widget-boxed-body">
                        <div class="search_widget_job">
                            <div class="field_w_search">
                                <input type="text" class="form-control" placeholder="Search Keywords">
                            </div>
                            <div class="field_w_search">
                                <input type="text" class="form-control" placeholder="All Locations">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="widget-boxed padd-bot-0">
                    <div class="widget-boxed-header">
                        <h4>Offerd Salary</h4>
                    </div>
                    <div class="widget-boxed-body">
                        <div class="side-list no-border">
                            <ul>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="1">
                                        <label for="1"></label>
                                    </span>
                                    Under $10,000
                                    <span class="pull-right">102</span>
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="2">
                                        <label for="2"></label>
                                    </span>
                                    $10,000 - $15,000
                                    <span class="pull-right">78</span>
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="3">
                                        <label for="3"></label>
                                    </span>
                                    $15,000 - $20,000
                                    <span class="pull-right">12</span>
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="4">
                                        <label for="4"></label>
                                    </span>
                                    $20,000 - $30,000
                                    <span class="pull-right">85</span>
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="5">
                                        <label for="5"></label>
                                    </span>
                                    $30,000 - $40,000
                                    <span class="pull-right">307</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="widget-boxed padd-bot-0">
                    <div class="widget-boxed-header">
                        <h4>Job Type</h4>
                    </div>
                    <div class="widget-boxed-body">
                        <div class="side-list no-border">
                            <ul>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="a1">
                                        <label for="a1"></label>
                                    </span>
                                    Full Time
                                    <span class="pull-right">102</span>
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="b1">
                                        <label for="b1"></label>
                                    </span>
                                    Part Time
                                    <span class="pull-right">78</span>
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c1">
                                        <label for="c1"></label>
                                    </span>
                                    Internship
                                    <span class="pull-right">12</span>
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="d1">
                                        <label for="d1"></label>
                                    </span>
                                    Freelancer
                                    <span class="pull-right">85</span>
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="e1">
                                        <label for="e1"></label>
                                    </span>
                                    Contract Base
                                    <span class="pull-right">307</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="widget-boxed padd-bot-0">
                    <div class="widget-boxed-header br-0">
                        <h4>Designation <a href="#designation" data-toggle="collapse"><i class="pull-right ti-plus" aria-hidden="true"></i></a></h4>
                    </div>
                    <div class="widget-boxed-body collapse" id="designation">
                        <div class="side-list no-border">
                            <ul>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="a">
                                        <label for="a"></label>
                                    </span>
                                    Web Designer
                                    <span class="pull-right">102</span>
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="b">
                                        <label for="b"></label>
                                    </span>
                                    Php Developer
                                    <span class="pull-right">78</span>
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="c">
                                        <label for="c"></label>
                                    </span>
                                    Project Manager
                                    <span class="pull-right">12</span>
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="d">
                                        <label for="d"></label>
                                    </span>
                                    Human Resource
                                    <span class="pull-right">85</span>
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="e">
                                        <label for="e"></label>
                                    </span>
                                    CMS Developer
                                    <span class="pull-right">307</span>
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="f">
                                        <label for="f"></label>
                                    </span>
                                    App Developer
                                    <span class="pull-right">256</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="widget-boxed padd-bot-0">
                    <div class="widget-boxed-header br-0">
                        <h4>Experince <a href="#experince" data-toggle="collapse"><i class="pull-right ti-plus" aria-hidden="true"></i></a></h4>
                    </div>
                    <div class="widget-boxed-body collapse" id="experince">
                        <div class="side-list no-border">
                            <ul>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="11">
                                        <label for="11"></label>
                                    </span>
                                    1Year To 2Year
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="21">
                                        <label for="21"></label>
                                    </span>
                                    2Year To 3Year
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="31">
                                        <label for="31"></label>
                                    </span>
                                    3Year To 4Year
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="41">
                                        <label for="41"></label>
                                    </span>
                                    4Year To 5Year
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="51">
                                        <label for="51"></label>
                                    </span>
                                    5Year To 7Year
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="61">
                                        <label for="61"></label>
                                    </span>
                                    7Year To 10Year
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="widget-boxed padd-bot-0">
                    <div class="widget-boxed-header br-0">
                        <h4>Qualification <a href="#qualification" data-toggle="collapse"><i class="pull-right ti-plus" aria-hidden="true"></i></a></h4>
                    </div>
                    <div class="widget-boxed-body collapse" id="qualification">
                        <div class="side-list no-border">
                            <ul>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="12">
                                        <label for="12"></label>
                                    </span>
                                    High School
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="22">
                                        <label for="22"></label>
                                    </span>
                                    Intermediate
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="32">
                                        <label for="32"></label>
                                    </span>
                                    Graduation
                                </li>
                                <li>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="42">
                                        <label for="42"></label>
                                    </span>
                                    Master Degree
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!-- Start Job List -->
            <div class="col-md-9 col-sm-8">
                
                <div class="row mrg-bot-20">
                    <div class="col-sm-5">
                        <h4>98 Jobs &amp; Vacancies</h4>
                    </div>
                    
                    <div class="col-sm-7">
                        
                        <div class="fl-right">
                            <div class="search-wide">
                                <h5>Short By</h5>
                            </div>
                            
                            <div class="search-wide full">
                                <select class="wide form-control">
                                    <option value="1">Most Recent</option>
                                    <option value="2">Most Viewed</option>
                                    <option value="4">Most Search</option>
                                </select>
                            </div>
                            
                            <div class="search-wide full">
                                <select class="wide form-control">
                                    <option>10 Per Page</option>
                                    <option value="1">20 Per Page</option>
                                    <option value="2">30 Per Page</option>
                                    <option value="4">50 Per Page</option>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                </div>
        
                <!-- Single Verticle job -->
                <div class="job-verticle-list">
                    <div class="vertical-job-card">
                        <div class="vertical-job-header">
                            <div class="vrt-job-cmp-logo">
                                <a href="?page=job-detail_en"><img src="assets/img/c-1.png" class="img-responsive" alt="" /></a>
                            </div>
                            <h4><a href="?page=job-detail_en">Apple LTD</a></h4>
                            <span class="com-tagline">Software Development</span>
                            <span class="pull-right vacancy-no">No. <span class="v-count">2</span></span>
                        </div>
                        <div class="vertical-job-body">
                            <div class="row">
                                <div class="col-md-9 col-sm-8">
                                    <ul class="can-skils">
                                        <li><strong>Job Id: </strong>G58726</li>
                                        <li><strong>Job Type: </strong>Full Time</li>
                                        <li><strong>Skills: </strong>
                                            <span class="skill-tag">HTML</span>
                                            <span class="skill-tag">css</span>
                                            <span class="skill-tag">java</span>
                                            <span class="skill-tag">php</span>
                                            <span class="skill-tag">bootstrap</span>
                                        </li>
                                        <li><strong>Experience: </strong>3 Year</li>
                                        <li><strong>Location: </strong>2844 Counts Lane, KY 45241</li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="vrt-job-act">
                                        <a href="?page=apply-job_en" data-toggle="modal" data-target="#apply-job" class="btn-job theme-btn job-apply">Apply Now</a>
                                        <a href="?page=job-detail_en" title="" class="btn-job light-gray-btn">View Job</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-job-footer">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="cmp-job-rating">
                                        <ul>
                                            <li><strong>Rating: </strong>
                                                <i class="rate fa fa-star"></i>
                                                <i class="rate fa fa-star"></i>
                                                <i class="rate fa fa-star"></i>
                                                <i class="rate fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span class="rating-counter">4.7/5</span>
                                            </li>
                                            <li><a href="#" title="">(570 Review)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="cmp-job-review">
                                        <ul>
                                            <li><a href="#" title="">Write Review<i class="theme-color fa fa-pencil"></i></a></li>
                                            <li><a href="#" title="">Show Review<i class="theme-color fa fa-comments-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Single Verticle job -->
                <div class="job-verticle-list">
                    <div class="vertical-job-card">
                        <div class="vertical-job-header">
                            <div class="vrt-job-cmp-logo">
                                <a href="?page=job-detail_en"><img src="assets/img/c-2.png" class="img-responsive" alt="" /></a>
                            </div>
                            <h4><a href="?page=job-detail_en">Google LTD</a></h4>
                            <span class="com-tagline">Software Development</span>
                            <span class="pull-right vacancy-no">No. <span class="v-count">2</span></span>
                        </div>
                        <div class="vertical-job-body">
                            <div class="row">
                                <div class="col-md-9 col-sm-8">
                                    <ul class="can-skils">
                                        <li><strong>Job Id: </strong>G58726</li>
                                        <li><strong>Job Type: </strong>Full Time</li>
                                        <li><strong>Skills: </strong>
                                            <span class="skill-tag">HTML</span>
                                            <span class="skill-tag">css</span>
                                            <span class="skill-tag">java</span>
                                            <span class="skill-tag">php</span>
                                            <span class="skill-tag">bootstrap</span>
                                        </li>
                                        <li><strong>Experience: </strong>3 Year</li>
                                        <li><strong>Location: </strong>2844 Counts Lane, KY 45241</li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="vrt-job-act">
                                        <a href="?page=apply-job_en" data-toggle="modal" data-target="#apply-job" class="btn-job theme-btn job-apply">Apply Now</a>
                                        <a href="?page=job-detail_en" title="" class="btn-job light-gray-btn">View Job</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-job-footer">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="cmp-job-rating">
                                        <ul>
                                            <li><strong>Rating: </strong>
                                                <i class="rate fa fa-star"></i>
                                                <i class="rate fa fa-star"></i>
                                                <i class="rate fa fa-star"></i>
                                                <i class="rate fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span class="rating-counter">4.7/5</span>
                                            </li>
                                            <li><a href="#" title="">(570 Review)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="cmp-job-review">
                                        <ul>
                                            <li><a href="#" title="">Write Review<i class="theme-color fa fa-pencil"></i></a></li>
                                            <li><a href="#" title="">Show Review<i class="theme-color fa fa-comments-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Single Verticle job -->
                <div class="job-verticle-list">
                    <div class="vertical-job-card">
                        <div class="vertical-job-header">
                            <div class="vrt-job-cmp-logo">
                                <a href="?page=job-detail_en"><img src="assets/img/c-3.png" class="img-responsive" alt="" /></a>
                            </div>
                            <h4><a href="?page=job-detail_en">Laxol LTD</a></h4>
                            <span class="com-tagline">Frond End Designer</span>
                            <span class="pull-right vacancy-no">No. <span class="v-count">2</span></span>
                        </div>
                        <div class="vertical-job-body">
                            <div class="row">
                                <div class="col-md-9 col-sm-8">
                                    <ul class="can-skils">
                                        <li><strong>Job Id: </strong>G58726</li>
                                        <li><strong>Job Type: </strong>Full Time</li>
                                        <li><strong>Skills: </strong>
                                            <span class="skill-tag">HTML</span>
                                            <span class="skill-tag">css</span>
                                            <span class="skill-tag">java</span>
                                            <span class="skill-tag">php</span>
                                            <span class="skill-tag">bootstrap</span>
                                        </li>
                                        <li><strong>Experience: </strong>3 Year</li>
                                        <li><strong>Location: </strong>2844 Counts Lane, KY 45241</li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="vrt-job-act">
                                        <a href="?page=apply-job_en" data-toggle="modal" data-target="#apply-job" class="btn-job theme-btn job-apply">Apply Now</a>
                                        <a href="?page=job-detail_en" title="" class="btn-job light-gray-btn">View Job</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-job-footer">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="cmp-job-rating">
                                        <ul>
                                            <li><strong>Rating: </strong>
                                                <i class="rate fa fa-star"></i>
                                                <i class="rate fa fa-star"></i>
                                                <i class="rate fa fa-star"></i>
                                                <i class="rate fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span class="rating-counter">4.7/5</span>
                                            </li>
                                            <li><a href="#" title="">(570 Review)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="cmp-job-review">
                                        <ul>
                                            <li><a href="#" title="">Write Review<i class="theme-color fa fa-pencil"></i></a></li>
                                            <li><a href="#" title="">Show Review<i class="theme-color fa fa-comments-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Single Verticle job -->
                <div class="job-verticle-list">
                    <div class="vertical-job-card">
                        <div class="vertical-job-header">
                            <div class="vrt-job-cmp-logo">
                                <a href="?page=job-detail_en"><img src="assets/img/c-4.png" class="img-responsive" alt="" /></a>
                            </div>
                            <h4><a href="?page=job-detail_en">Sirix LTD</a></h4>
                            <span class="com-tagline">CMS Development</span>
                            <span class="pull-right vacancy-no">No. <span class="v-count">2</span></span>
                        </div>
                        <div class="vertical-job-body">
                            <div class="row">
                                <div class="col-md-9 col-sm-8">
                                    <ul class="can-skils">
                                        <li><strong>Job Id: </strong>G58726</li>
                                        <li><strong>Job Type: </strong>Full Time</li>
                                        <li><strong>Skills: </strong>
                                            <span class="skill-tag">HTML</span>
                                            <span class="skill-tag">css</span>
                                            <span class="skill-tag">java</span>
                                            <span class="skill-tag">php</span>
                                            <span class="skill-tag">bootstrap</span>
                                        </li>
                                        <li><strong>Experience: </strong>3 Year</li>
                                        <li><strong>Location: </strong>2844 Counts Lane, KY 45241</li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="vrt-job-act">
                                        <a href="?page=apply-job_en" data-toggle="modal" data-target="#apply-job" class="btn-job theme-btn job-apply">Apply Now</a>
                                        <a href="?page=job-detail_en" title="" class="btn-job light-gray-btn">View Job</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-job-footer">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="cmp-job-rating">
                                        <ul>
                                            <li><strong>Rating: </strong>
                                                <i class="rate fa fa-star"></i>
                                                <i class="rate fa fa-star"></i>
                                                <i class="rate fa fa-star"></i>
                                                <i class="rate fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span class="rating-counter">4.7/5</span>
                                            </li>
                                            <li><a href="#" title="">(570 Review)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="cmp-job-review">
                                        <ul>
                                            <li><a href="#" title="">Write Review<i class="theme-color fa fa-pencil"></i></a></li>
                                            <li><a href="#" title="">Show Review<i class="theme-color fa fa-comments-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Single Verticle job -->
                <div class="job-verticle-list">
                    <div class="vertical-job-card">
                        <div class="vertical-job-header">
                            <div class="vrt-job-cmp-logo">
                                <a href="?page=job-detail_en"><img src="assets/img/c-5.png" class="img-responsive" alt="" /></a>
                            </div>
                            <h4><a href="?page=job-detail_en">Indico LTD</a></h4>
                            <span class="com-tagline">PHP Development</span>
                            <span class="pull-right vacancy-no">No. <span class="v-count">2</span></span>
                        </div>
                        <div class="vertical-job-body">
                            <div class="row">
                                <div class="col-md-9 col-sm-8">
                                    <ul class="can-skils">
                                        <li><strong>Job Id: </strong>G58726</li>
                                        <li><strong>Job Type: </strong>Full Time</li>
                                        <li><strong>Skills: </strong>
                                            <span class="skill-tag">HTML</span>
                                            <span class="skill-tag">css</span>
                                            <span class="skill-tag">java</span>
                                            <span class="skill-tag">php</span>
                                            <span class="skill-tag">bootstrap</span>
                                        </li>
                                        <li><strong>Experience: </strong>3 Year</li>
                                        <li><strong>Location: </strong>2844 Counts Lane, KY 45241</li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="vrt-job-act">
                                        <a href="?page=apply-job_en" data-toggle="modal" data-target="#apply-job" class="btn-job theme-btn job-apply">Apply Now</a>
                                        <a href="?page=job-detail_en" title="" class="btn-job light-gray-btn">View Job</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-job-footer">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="cmp-job-rating">
                                        <ul>
                                            <li><strong>Rating: </strong>
                                                <i class="rate fa fa-star"></i>
                                                <i class="rate fa fa-star"></i>
                                                <i class="rate fa fa-star"></i>
                                                <i class="rate fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span class="rating-counter">4.7/5</span>
                                            </li>
                                            <li><a href="#" title="">(570 Review)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="cmp-job-review">
                                        <ul>
                                            <li><a href="#" title="">Write Review<i class="theme-color fa fa-pencil"></i></a></li>
                                            <li><a href="#" title="">Show Review<i class="theme-color fa fa-comments-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center">
                    <button type="button" class="btn theme-btn btn-m">Load More...</button>
                </div>
                
            </div>
            
        </div>
        <!-- End Row -->
        
    </div>
</section>

<!-- ====================== End Job Detail 2 ================ -->
@stop