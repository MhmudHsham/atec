@extends("layouts.admin")
@section("page_title", "كل مجموعات المستخدمين")
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
                    <span class="caption-subject bold uppercase">
                        <a class="btn btn-info" href="{{ url('/admin/groups/create') }}">إضافة جديد</a>
                    </span>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                    <thead>
                        <tr>
                            <th class="all"># </th>
                            <th class="all"> إسم المجموعة</th>
                            <th class="all"> عدد المستخدمين</th> 
                            <th class="all"> الإعدادات </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($counter = 1)
                        @foreach($rows as $one)
                        <tr class="tr_{{ $one->id }}">
                            <td class="text-center">{{ $counter }}</td>
                            <td>{{ $one->title }} </td>   
                            <td>{{ $one->users_count }} </td>   
                            <td>
                                <div class="btn-group pull-right">
                                    <button class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown">الإعدادات
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="{{ url("/admin/groups/")."/".$one->id . "/edit" }}">
                                                <i class="fa fa-pencil-square-o"></i> تعديل </a>
                                        </li>
                                        <li>
                                            <a data-id="{{ $one->id }}" class="delete-url" href="{{ url("/admin/groups/")."/".$one->id }}">
                                                <i class="fa fa-trash-o"></i> حذف</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @php($counter++)
                        @endforeach
                    </tbody>
                </table> 
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@stop
