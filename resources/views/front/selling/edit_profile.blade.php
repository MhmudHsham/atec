@extends("layouts.front")
@section('js')
<script type="text/javascript" src="{{ url('/assets/front/mine/edit_seller_profile.js') }}"></script>
@stop
@section("content")
<!-- ======================= Page Title ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Profile Settings</h2>
            <p><a href="#" title="Home">Home</a> <i class="ti-arrow-right"></i> Profile Settings</p>
        </div>
    </div>
</div>
<!-- ======================= End Page Title ===================== -->
<!-- ================ Profile Settings ======================= -->
<section>
    <div class="container">
        
        <div class="row">
            <!-- col-md-6 -->
            <div class="col-md-6 col-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <form action="{{ url('/sellers/update_profile') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="contact-img">                        
                        <img src="{{ url('uploads/sellers/' . \Session::get('seller-data')->image) }}" class="img-circle img-responsive" alt="">                                                
                    </div>
                    
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Upload Profile Picture</label>
                        <input name="logo" type="file" >
                    </div>
                </div>

                <div class="col-md-12">
                
                    <div class="row">
                        

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Mahmoud">
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="***********">
                            </div>
                        </div>
                    </div>
                    
                </div>
                 
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="mhmudhsham8@gmail.com">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="+20 106 385 5615">
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Position</label>
                        <input type="text" name="position" id="position" class="form-control" placeholder="#Web Developer">
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="location" id="location" class="form-control" placeholder="Egypt">
                    </div>
                </div>
            </div>
            
            <!-- col-md-6 -->
            <div class="col-md-6 col-12 padd-top-20">
                
                <!-- col-md-12 -->
                <div class="col-md-12">
                
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" id="gender" class="wide form-control">
                                    <option data-display="Male" value="0">Male</option>
                                    <option value="1">Female</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Experience</label>
                                <select name="experience" id="experience" class="wide form-control">                                    
                                    <option data-display="Entry Level" value="0">Entry Level</option>
                                    <option value="1">Mid Level</option>
                                    <option value="2">Professional Level</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- col-md-12 -->
                
                
                <!-- col-md-12 -->
                <div class="col-md-12">
                
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" id="facebook" name="facebook" class="form-control" placeholder="https://facebook.com/mhmudhsham">
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" id="twitter" name="twitter" class="form-control" placeholder="https://twitter.com/7ooda55">
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- col-md-12 -->
                
                <!-- col-md-12 -->
                <div class="col-md-12">
                
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Linkedin</label>
                                <input type="text" id="linkedin" name="linkedin" class="form-control" placeholder="https://linkedin.com/in/mhmudhsham">
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Google+</label>
                                <input type="text" name="gplus" id="gplus" class="form-control" placeholder="+mhmudhsham">
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- col-md-12 -->
                
                <!-- col-md-12 -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Career</label>
                        <textarea name="career" class="form-control" id="career" cols="30" rows="10" placeholder="World Most Popular Software Development Industry"></textarea>                        
                    </div>
                </div>
                <!-- col-md-12 -->
                
            </div>
            
            <div class="col-md-12 col-12 padd-top-20 text-center">
                <input type="submit" class="btn btn-m theme-btn" value="Update & Exit">                
            </div>
            </form>
        </div>
        
    </div>
</section>
<!-- ================ End Profile Settings ======================= -->
@stop