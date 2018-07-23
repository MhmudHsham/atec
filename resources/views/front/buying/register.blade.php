@extends("layouts.front")
@section('content')
<!-- ======================= Start Page Title ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Create An Account</h2>
            <p><a href="javascript:void(0);" title="Home">Home</a> <i class="ti-arrow-right"></i> Signup</p>
        </div>
    </div>
</div>
<!-- ======================= End Page Title ===================== -->

<!-- ====================== Start Signup Form ============= -->
<section>
    <div class="container">
        <div class="container">
    
            <div class="log-box">
                <form class="log-form" action="{{ url('/buyers/apply_register') }}" method="post">
                    {{csrf_field()}}
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Your Email..">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="********">
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password"  name="rpassword"  class="form-control" placeholder="********">
                            </div>
                        </div> -->
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group text-center mrg-top-15">
                                <button type="submit" class="btn theme-btn btn-m">Create An Account</button>
                            </div>
                        </div>
                    </div>
                    
                </form>
                
                <div class="log-option"><span>OR</span></div>
                
                <div class="row">
                    <div class="col-md-6">
                        <a href="javascript:void(0);" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i>SignUP With Facebook</a>
                    </div>
                    <div class="col-md-6">
                        <a href="javascript:void(0);" title="" class="gplus-log-btn log-btn"><i class="fa fa-google-plus"></i>SignUp With Google+</a>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</section>
<!-- ====================== End Signup Form ============= -->
@stop