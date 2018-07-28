@extends("layouts.admin")
@section("page_title", 'إضافة مدرب جديد')
@section("page_header_title", "")
@section("page_level_styles")
<link href="{!! url('assets/admin/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}" rel="stylesheet" type="text/css" />
@end
@section("page_level_script_plugins")
<script src="{!! url('assets/admin/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/global/plugins/jquery-validation/js/additional-methods.min.js') !!}" type="text/javascript"></script>
@stop
@section("page_level_scripts")
<script src="{!! url('assets/admin/pages/scripts/form-validation-md.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/mine/generic.js') !!}" type="text/javascript"></script>
<script>
    var custom_config = {
        messages: {
            name: {required: "من فضلك قم بملء هذا الحقل"},
            position: {required: "من فضلك قم بملء هذا الحقل"},
            image: {required: "من فضلك قم بملء هذا الحقل"},
            email: {required: "من فضلك قم بملء هذا الحقل", email: "البريد الإلكترونى غير صحيح"},
            bio: {required: "من فضلك قم بملء هذا الحقل"},
            password: {required: "من فضلك قم بملء هذا الحقل"},
            confirm_password: {required: "من فضلك قم بملء هذا الحقل", equalTo:"غير مساوى لكلمة السر"},
        },
        rules: {
            name: {required: true},
            position: {required: true},
            image: {required: true},
            bio: {required: true},
            email: {required: true, email: true},
            password: {required: true},
            confirm_password: {required: true, equalTo:"#password"}
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
                    <span class="caption-subject font-green sbold uppercase">إضافة مدرب جديد
                </div>
            </div>
            <div class="portlet-body">
                @if($id == 0)
                @php($action = url('/admin/instructors'))
                @else
                @php($action = url('/admin/instructors/apply_update'). "/" . $id)
                <input type="hidden" value="instructors/show/{{ $id }}" id="show_link">
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
                            <label class="col-md-2 control-label" for="form_control_1">صورة المدرب
                                
                            </label>
                            <div class="col-md-9">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                                    <div>
                                        <span class="btn red btn-outline btn-file">
                                            <span class="fileinput-new"> اختر صورة </span>
                                            <span class="fileinput-exists"> تغيير </span>
                                            <input type="file" name="image" id="image" > </span>
                                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
 

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">المجموعة
                                
                            </label>
                            <div class="col-md-9">
                                <select id="group_id" name="group_id" class="form-control">
                                    @foreach($groups as $one)
                                    <option value="{{ $one->id }}">{{ $one->title }}</option>
                                    @endforeach
                                </select>                                
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل المجموعة</span>
                            </div>
                        </div>


                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">الإسم
                                
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" name="name" id="name">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل الإسم</span>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">كلمة السر
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" placeholder="" name="password" id="password">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل كلمة السر</span>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">تأكيد كلمة السر
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" placeholder="" name="confirm_password" id="confirm_password">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل كلمة السر</span>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">البريد الإلكترونى
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" name="email" id="email">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل البريد الإلكترونى</span>
                            </div>
                        </div>


                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">الوظيفة
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" name="position" id="position">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل الوظيفة</span>
                            </div>
                        </div>


                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">السيرة
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                            <textarea class="form-control" placeholder="" name="bio" id="bio" rows="5"></textarea>                                
                                <div class="form-control-focus"> </div>
                                <span class="help-block">ادخل السيرة</span>
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