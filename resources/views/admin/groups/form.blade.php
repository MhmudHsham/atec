@extends("layouts.admin")
@section("page_title", 'إضافة خبر جديد')
@section("page_header_title", "")
@section("page_level_script_plugins")
<script src="{!! url('assets/admin/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/global/plugins/jquery-validation/js/additional-methods.min.js') !!}" type="text/javascript"></script>
@stop
@section("page_level_scripts")
<script src="{!! url('assets/admin/pages/scripts/form-validation-md.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/mine/generic.js') !!}" type="text/javascript"></script>
<script>
    var custom_config = {
        messages: {
            title: {required: "من فضلك قم بملء هذا الحقل"}, 
        },
        rules: {
            title: {required: true},
        }
    };
</script>
@stop
@section("content")
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green sbold uppercase">إضافة مجموعة جديدة
                </div>
            </div>
            <div class="portlet-body">
                @if($id == 0)
                @php($action = url('/admin/groups'))
                @else
                @php($action = url('/admin/groups/apply_update'). "/" . $id)
                <input type="hidden" value="groups/{{ $id }}" id="show_link">
                @endif
                <!-- BEGIN FORM   -->
                <form action="{{ $action }}" enctype="multipart/form-data" class="form-horizontal" id="current_form" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" id="id" value="{{ $id }}" />
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> لديك بعض المشاكل, من فضلك قم بالمراجعة أولا </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> تم إدخال البيانات بصورة صحيحة  </div>
                        

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">إسم المجموعة 
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                @if(isset($data->title))
                                @php($value = $data->title)
                                @else 
                                @php($value = "")
                                @endif
                                <input type="text" class="form-control" value="{{ $value }}" placeholder="" name="title" id="title" >
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل إسم المجموعة </span>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">الصلاحيات
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9"> 
                                @foreach($pages as $one)
                                <div class="col-md-4">
                                    <div class="col-md-6">
                                        <label>{{ $one->title }}</label>
                                    </div>
                                    <div class="col-md-6">
                                        @php($checked = "")
                                        @if(in_array($one->route, $permissions))
                                        @php($checked = "checked")
                                        @endif
                                        <input type="checkbox" {{ $checked }} id="page_{{ $one->id }}" name="permissions[]" value="{{ $one->route }}" class="make-switch" id="" data-size="mini">
                                    </div>
                                </div>
                                @endforeach
                            </div>
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