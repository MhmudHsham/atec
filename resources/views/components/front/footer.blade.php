<!-- ================ End Opening job Section ============================== -->
<a href="#" id="scrollup" title="Scroll to Top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        <!-- ================= footer start ========================= -->
<footer class="dark-bg footer">
    <div class="container">
        
        <!-- Row Start -->
        <div class="row">
        
            <div class="col-md-8 col-sm-8">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h4>Micro Jobs</h4>
                        <ul>
                            <li><a href="?page=index_en">Company</a></li>
                            <li><a href="?page=about_en">About Us</a></li>
                            <li><a href="?page=contact_en">Contact Us</a></li>
                            <li><a href="?page=how-it-works_en">How Arab Micro Job Works</a></li>
                            <li><a href="?page=community_en">Community</a></li>
                            <li><a href="?page=blog_en">Blog</a></li>
                            <li><a href="?page=affiliates_en">Affiliates</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h4>Terms</h4>
                        <ul>
                            <li><a href="?page=terms_en">Terms and Conditions</a></li>
                            <li><a href="?page=acceptable_en">Acceptable Use Policy </a></li>
                            <li><a href="?page=privacy_en">Privacy Policy </a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="?page=contact_en">Contact Support</a></li>
                            <li><a href="?page=selling_en">Selling</a></li>
                            <li><a href="?page=buying_en">Buying</a></li>
                            <li><a href="?page=payment_en">Payment Methods</a></li>
                            <li><a href="?page=visa_en">Visa - Mastercard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-4">
                <h4>Contact Info</h4>
                <!-- Newsletter -->
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter Email">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default"><i class="fa fa-location-arrow font-20"></i></button>
                    </span>
                </div>
                
                <!-- Social Box -->
                <div class="f-social-box">
                    <ul>
                        <li><a href="#" target="_blank"><i class="fa fa-facebook facebook-cl"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-google google-plus-cl"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter twitter-cl"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-pinterest pinterest-cl"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-instagram instagram-cl"></i></a></li>
                    </ul>
                </div>
                
                <!-- App Links -->
                <div class="f-app-box">
                    <ul>
                        <li><a href="#" target="_blank"><i class="fa fa-apple"></i>App Store</a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-android"></i>Play Store</a></li>
                    </ul>
                </div>
                
            </div>
            
        </div>
        
        <!-- Row Start -->
        <div class="row">
            <div class="col-md-12">
                <div class="copyright text-center">
                    <p>&copy; Copyright 2018 Arabmicrojob | Powerd By <a href="#" target="_blank" title="Tacweed">Tacweed</a></p>
                </div>
            </div>
        </div>
        
    </div>
</footer>

<!-- Apply Job Popup -->
<div class="modal fade" id="apply-job" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="myModalLabel2">
            <div class="modal-body">
                <div class="text-center">
                    <img src="./assets/img/logo.png" class="img-responsive" alt="">
                    <h4 class="mrg-0">Front End Designer</h4>
                    <span> 2708 Scenic Way, Sutter</span>
                </div>
                
                <form>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
            

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="Phone">
                    </div>

                    <div class="form-group">
                        <label>Upload CV</label>
                        <div class="custom-file-upload">
                            <input type="file" id="file" name="myfiles[]" multiple />
                        </div>
                    </div>
            
                    <div class="form-group">
                        <textarea class="form-control height-120" placeholder="Pase CV"></textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="button" class="btn theme-btn btn-m">Save & Apply</button>
                    </div>
                    
                </form>
                    
            </div>
        </div>
    </div>
</div>   
<!-- Apply Job Popup -->

<!-- Sign Up Window Code -->
<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="myModalLabel1">
            <div class="modal-body">
                <div class="text-center"><img src="{{ url('assets/front/img/logo.png') }}" class="img-responsive" alt=""></div>
                
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-advance theme-bg" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link" data-toggle="tab" href="#employer" role="tab">
                        <i class="ti-user"></i> Seller</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#candidate" role="tab">
                        <i class="ti-user"></i> Buyer</a>
                    </li>
                </ul>
                <!-- Nav tabs -->
                    
                <!-- Tab panels -->
                <div class="tab-content">
                
                    <!-- Employer Panel 1-->
                    <div class="tab-pane fade in show active" id="employer" role="tabpanel">
                        <form method="post" action="{{ url('/sellers/apply_login') }}">
                            <input type="hidden" name="type" value="seller">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="*********">
                            </div>
                                                        
                            <div class="form-group">
                                <a href="{{ url('/sellers/register') }}" title="Forget"  class="fl-left"><i class="fa fa-user-plus"></i> Create New Account?</a>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn theme-btn full-width btn-m">Login </button>
                            </div>
                            
                        </form>
                        
                        <div class="log-option"><span>OR</span></div>
                        
                        <div class="row mrg-bot-20">
                            <div class="col-md-6">
                                <a href="#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i>Sign In With Facebook</a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google-plus"></i>Sign In With Google+</a>
                            </div>
                        </div>
            
                    </div>
                    <!--/.Panel 1-->
                    
                    <!-- Candidate Panel 2-->
                    <div class="tab-pane fade" id="candidate" role="tabpanel">
                    <form method="post" action="{{ url('/buyers/apply_login') }}">
                            <input type="hidden" name="type" value="seller">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="*********">
                            </div>
                                                        
                            <div class="form-group">
                                <a href="{{ url('/buyers/register') }}" title="Forget"  class="fl-left"><i class="fa fa-user-plus"></i> Create New Account?</a>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn theme-btn full-width btn-m">Login </button>
                            </div>
                            
                        </form>
                        
                        <div class="log-option"><span>OR</span></div>
                        
                        <div class="row mrg-bot-20">
                            <div class="col-md-6">
                                <a href="#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i>Sign In With Facebook</a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google-plus"></i>Sign In With Google+</a>
                            </div>
                        </div>
                        
                    </div>
                    <!--/.Panel 2-->
                    
                </div>
                <!-- Tab panels -->
            </div>
        </div>
    </div>
</div>   
<!-- End Sign Up Window -->
    
<!-- =================== START JAVASCRIPT ================== -->
<!-- Jquery js-->
<script src="{{ url('assets/front/js/jquery.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ url('assets/front/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Bootsnav js-->
<script src="{{ url('assets/front/plugins/bootstrap/js/bootsnav.js') }}"></script>
<script src="{{ url('assets/front/js/viewportchecker.js') }}"></script>

<!-- Slick Slider js-->
<script src="{{ url('assets/front/plugins/slick-slider/slick.js') }}"></script>

<!-- wysihtml5 editor js -->
<script src="{{ url('assets/front/plugins/bootstrap/js/wysihtml5-0.3.0.js') }}"></script>
<script src="{{ url('assets/front/plugins/bootstrap/js/bootstrap-wysihtml5.js') }}"></script>

<!-- Aos Js -->
<script src="{{ url('assets/front/plugins/aos-master/aos.js') }}"></script>

<!-- Nice Select -->
<script src="{{ url('assets/front/plugins/nice-select/js/jquery.nice-select.min.js') }}"></script>

<!-- Custom Js -->
<script src="{{ url('assets/front/js/custom.js') }}"></script>

<script>
    AOS.init();
</script>
<script>
    $('#paypal').on('click', function(){
        $(this).parent().find('a').trigger('click')
    })

    $('#stripe').on('click', function(){
        $(this).parent().find('a').trigger('click')
    })
    
    $('#debit').on('click', function(){
        $(this).parent().find('a').trigger('click')
    })
</script>

@yield('js')