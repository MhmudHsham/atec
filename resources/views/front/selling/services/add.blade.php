@extends("layouts.front")
@section("content")
<!-- ======================= Start Page Title ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Create Job</h2>
            <p><a href="{{ url('/') }}" title="Home">Home</a> <i class="ti-arrow-right"></i> Create Job</p>
        </div>
    </div>
</div>
<!-- ======================= End Page Title ===================== -->

<!-- ======================= Create Job ===================== -->
<section class="create-job">

    <div class="container">
    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <form class="c-form" method="post" action="{{ url('/sellers/services/store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
            
            <!-- General Information -->
            <div class="box">
                <div class="box-header">
                    <h4>General Information</h4>
                </div>
                <div class="box-body">
                    <div class="row">
                    
                        <div class="col-sm-6">
                            <label>Title (AR)</label>
                            <input type="text" name="title_ar" class="form-control">
                        </div>
                        
                        <div class="col-sm-6">
                            <label>Title (EN)</label>
                            <input type="text" name="title_en" class="form-control">
                        </div>
                        
                        <div class="col-sm-6">
                            <label>Category</label>
                            <select name="category_id" class="wide form-control">
                                @foreach($categories as $one)                                
                                <option value="{{ $one->id }}">{{ $one->{$slug->title} }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="col-sm-6">
                            <label>Skills (Seperate with Comma)</label>
                            <input type="text" name="skills" class="form-control">
                        </div>
                        
                        <div class="col-sm-4">
                            <label>Image</label>
                            <div class="custom-file-upload">
                                <input type="file" id="file" name="logo"  />
                            </div>
                        </div>
                         
                        
                        <div class="col-sm-4">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control">
                        </div>

                        <div class="col-sm-4">
                            <label>Currency</label>
                            <select name="currency_id" class="wide form-control">
                                @foreach($currencies as $one)                                
                                <option value="{{ $one->id }}">{{ $one->{$slug->title} }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        

                        <div class="col-sm-6">
                            <label>Description (AR)</label>                            
                            <textarea name="description_ar" id="" cols="10" class="form-control" rows="5"></textarea>
                        </div>

                        <div class="col-sm-6">
                            <label>Description (EN)</label>                            
                            <textarea name="description_en" id="" cols="10" class="form-control" rows="5"></textarea>
                        </div>
                        
                    </div>
                </div>
            </div>
            
          
            <div class="text-center">
                <button type="submit" class="btn btn-m theme-btn">Submit & Exit</button>
            </div>
            
        </form>
    </div>
</section>

<!-- ====================== End Create Job ================ -->
@stop