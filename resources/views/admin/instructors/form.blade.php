@extends("layouts.admin")
@section("page_title", trans("lang.Add_New_Category"))
@section("page_header_title", "")
@section("page_level_script_plugins")
<script src="{!! url('assets/admin/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/global/plugins/jquery-validation/js/additional-methods.min.js') !!}" type="text/javascript"></script>
@stop
@section("page_level_scripts")
<script src="{!! url('assets/admin/pages/scripts/form-validation-md.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/mine/category.js') !!}" type="text/javascript"></script>
@stop
@section("content")
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green sbold uppercase">Add New Category
                </div>
            </div>
            <div class="portlet-body">
                @if($id == 0)
                @php($action = url('/admin/categories/store'))
                @else
                @php($action = url('/admin/categories/update'). "/" . $id)
                @endif
                <!-- BEGIN FORM   -->
                <form action="{{ $action }}" class="form-horizontal" id="category_form" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" id="id" value="{{ $id }}" />
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> {{ trans("lang.You_have_some_form_errors._Please_check_below.") }} </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> {{ trans("lang.Your_form_validation_is_successful!") }} </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">{{ trans("lang.Title_(AR)") }}
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" name="title_ar" id="title_ar">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">{{ trans("lang.Enter_title_(AR)") }}</span>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">{{ trans("lang.Title_(EN)") }}
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" name="title_en" id="title_en">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">{{ trans("lang.Enter_title_(EN)") }}</span>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Icon
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" name="icon" id="icon">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">Enter Icon</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">{{ trans("lang.save") }}</button>
                                <button type="reset" class="btn default">{{ trans("lang.clear") }}</button>
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