@extends("layouts.admin")
@section("page_title", "إعدادات الموقع")
@section("page_header_title", "")
@section("page_level_script_plugins")
<script src="{!! url('assets/admin/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/global/plugins/jquery-validation/js/additional-methods.min.js') !!}" type="text/javascript"></script>
@stop
@section("page_level_scripts")
<script src="{!! url('assets/admin/pages/scripts/form-validation-md.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/mine/settings.js') !!}" type="text/javascript"></script>
@stop
@section("content")
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">

            <div class="portlet-body">
                <!-- BEGIN FORM   -->
                <form action="{{ url('/admin/store_settings') }}" class="form-horizontal" id="settings_form" method="post">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> {{ trans("lang.You_have_some_form_errors._Please_check_below.") }} </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> {{ trans("lang.Your_form_validation_is_successful!") }} </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">إسم الموقع بالعربية
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" name="site_title_ar" id="site_title_ar" value="{{ $settings['site_title_ar'] }}">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل إسم الموقع بالعربية</span>
                            </div>
                        </div>  

                         <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">إسم الموقع بالإنجليزية
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" name="site_title_en" id="site_title_en" value="{{ $settings['site_title_en'] }}">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل إسم الموقع بالإنجليزية </span>
                            </div>
                        </div>  

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">الكلمات الدلالية بالعربية
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <textarea rows="5" class="form-control" placeholder="" name="site_keywords_ar" id="site_keywords_ar" >{{ $settings['site_keywords_ar'] }}</textarea>
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل الكلمات الدلالية بالعربية</span>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">الكلمات الدلالية بالإنجليزية
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <textarea rows="5" class="form-control" placeholder="" name="site_keywords_en" id="site_keywords_en" >{{ $settings['site_keywords_en'] }}</textarea>
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل الكلمات الدلالية بالإنجليزية</span>
                            </div>
                        </div>


                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">وصف الموقع بالعربية
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <textarea rows="5" class="form-control" placeholder="" name="site_description_ar" id="site_description_ar" >{{ $settings['site_description_ar'] }}</textarea>
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل وصف الموقع بالعربية</span>
                            </div>
                        </div>



                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">وصف الموقع بالإنجليزية
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <textarea rows="5" class="form-control" placeholder="" name="site_description_en" id="site_description_en" >{{ $settings['site_description_en'] }}</textarea>
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل وصف الموقع بالإنجليزية</span>
                            </div>
                        </div>


                        
                    </div>

                    <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="form_control_1">Facebook
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="facebook" id="facebook" value="{{ $settings['facebook'] }}">
                            <div class="form-control-focus"> </div>
                            <span class="help-block">{{ trans("lang.Enter_facebook_account") }}</span>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="form_control_1">Twitter
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="twitter" id="twitter" value="{{ $settings['twitter'] }}">
                            <div class="form-control-focus"> </div>
                            <span class="help-block">{{ trans("lang.Enter_twitter_account") }}</span>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="form_control_1">Youtube
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="" name="youtube" id="youtube" value="{{ $settings['youtube'] }}">
                            <div class="form-control-focus"> </div>
                            <span class="help-block">{{ trans("lang.Enter_youtube_account") }}</span>
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">حفظ</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>

</div>
@stop