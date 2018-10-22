@extends("layouts.admin")
@section("page_title", "كل الخدمات")
@section("page_header_title", "")
@section("page_level_styles")
<link href="{!! url('assets/admin/global/plugins/bootstrap-toastr/toastr.min.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! url('assets/admin/global/plugins/icheck/skins/all.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! url('assets/admin/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! url('assets/admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}" rel="stylesheet" type="text/css" />
@stop
@section("page_level_script_plugins")
<script src="{!! url('assets/admin/global/plugins/bootstrap-toastr/toastr.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/global/plugins/icheck/icheck.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/global/scripts/datatable.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/global/plugins/datatables/datatables.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}" type="text/javascript"></script>
@stop
@section("page_level_scripts")
<script src="{!! url('assets/admin/pages/scripts/ui-toastr.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/pages/scripts/form-icheck.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/pages/scripts/table-datatables-responsive.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/mine/generic.js') !!}"></script>
@stop

@section("content")
<!--<div class="m-heading-1 border-green m-bordered">-->

<!--</div>-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                @php($action = url('/admin/load-students'))

                <form action="{{ $action }}" enctype="multipart/form-data" class="form-horizontal" id="current_form" method="post">

                    <span class="caption-subject bold uppercase">
                <!-- BEGIN FORM   -->
                        {{ csrf_field() }}                
                        <input type="file" style="display:-webkit-inline-box;font-size: 14px;" name="import_file" id="list" > 
                        <button type="submit" class="btn btn-info" style="margin-right:35px;">حفظ</button>                                
                        <!-- <a class="btn btn-info" href="{{ url('/admin/services/create') }}">إضافة جديد</a> -->
                    </span>
                    </form>

                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                    <thead>
                        <tr>
                            <th class="all"># </th>
                            <th class="all"> عنوان الخدمة</th>
                            <th class="all"> صورة الخدمة </th>
                            <th class="all"> الإعدادات </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table> 
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@stop
