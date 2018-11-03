@extends("layouts.admin")
@section("page_title", "معرض الصور")
@section("page_header_title", "")
@section("page_level_styles")
<link href="{!! url('public/assets/admin/global/plugins/bootstrap-toastr/toastr.min.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! url('public/assets/admin/global/plugins/icheck/skins/all.css') !!}" rel="stylesheet" type="text/css" />
@stop
@section("page_level_script_plugins")
<script src="{!! url('public/assets/admin/global/plugins/bootstrap-toastr/toastr.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('public/assets/admin/global/plugins/icheck/icheck.min.js') !!}" type="text/javascript"></script>
@stop
@section("page_level_scripts")
<script src="{!! url('public/assets/admin/pages/scripts/ui-toastr.min.js') !!}" type="text/javascript"></script>
{{-- <script src="{!! url('public/assets/admin/mine/generic.js') !!}"></script> --}}
<script src="{!! url('public/assets/admin/mine/gallery.js') !!}"></script>
@stop

@section("content")
<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit bordered">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green bold uppercase">معرض الصور</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="mt-element-card mt-element-overlay">
                    <div class="row">
                        
                    <div class="col-md-12">                           
            <div class="portlet-body">
                @php($action = url('/admin/gallery'))
                <!-- BEGIN FORM   -->
                <form action="{{ $action }}" class="form-horizontal" id="gallery_form" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}                    
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> {{ trans("lang.You_have_some_form_errors._Please_check_below.") }} </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> {{ trans("lang.Your_form_validation_is_successful!") }} </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">الصورة
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-4">
                                <input type="file" class="form-control" placeholder="" name="image[]" multiple id="image">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">{{ trans("lang.Enter_title_(AR)") }}</span>                                
                            </div>
                            <div class="col-5-4">
                                <button type="submit" class="btn green">حفظ</button>                                
                            </div>
                        </div>                        
                    </div>
                </form>
                <!-- END FORM-->
        </div>
    </div>



                    
                    
                    
                    @foreach($rows as $one)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 tr_{{$one->id}}">
                            <div class="mt-card-item">
                                <div class="mt-card-avatar mt-overlay-1">
                                    <img src="{{ url('public/uploads/images/'.$one->image) }}" />
                                    <div class="mt-overlay">
                                        <ul class="mt-info">
                                            <li>                                                
                                                <a data-id="{{ $one->id }}" class="btn default btn-outline delete-url" href="{{ url("/admin/gallery/")."/".$one->id }}">x</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                    @endforeach
                       



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
