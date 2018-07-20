@extends("admin.layout")
@section("page_level_styles")
<link href="{{ ADMIN_ASSET . '/global/plugins/bootstrap-toastr/toastr.min.css' }}" rel="stylesheet" type="text/css" />
<link href="{{ ADMIN_ASSET . '/global/plugins/icheck/skins/all.css' }}" rel="stylesheet" type="text/css" />
<link href="{{ ADMIN_ASSET . '/global/plugins/datatables/datatables.min.css' }}" rel="stylesheet" type="text/css" />
<link href="{{ ADMIN_ASSET . '/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css' }}" rel="stylesheet" type="text/css" />
@stop
@section("page_plugins_script")
<script src="{{ ADMIN_ASSET . '/global/plugins/bootstrap-toastr/toastr.min.js' }}" type="text/javascript"></script>
<script src="{{ ADMIN_ASSET . '/global/plugins/icheck/icheck.min.js' }}" type="text/javascript"></script>
<script src="{{ ADMIN_ASSET . '/global/scripts/datatable.js' }}" type="text/javascript"></script>
<script src="{{ ADMIN_ASSET . '/global/plugins/datatables/datatables.min.js' }}" type="text/javascript"></script>
<script src="{{ ADMIN_ASSET . '/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.js' }}" type="text/javascript"></script>
@stop
@section("page_level_scripts")
<script src="{{ ADMIN_ASSET . '/pages/scripts/ui-toastr.min.js' }}" type="text/javascript"></script>
<script src="{{ ADMIN_ASSET . '/pages/scripts/form-icheck.min.js' }}" type="text/javascript"></script>
<script src="{{ ADMIN_ASSET . '/pages/scripts/table-datatables-responsive.min.js' }}" type="text/javascript"></script>
<!-- <script src="{{ ADMIN_ASSET . '/custom/category.js' }}"></script> -->
@stop
@section("content")
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <span class="caption-subject bold uppercase">
                        <a class="btn btn-info" href="{{ url('/admin/categories/create') }}">{{ trans("lang.Add_New") }}</a>
                    </span>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                    <thead>
                        <tr>
                            <th class="all"># </th>
                            <th class="all"> العنوان</th>
                            <th class="all"> الصورة </th>
                            <th class="all"> تاريخ الإضافة </th>
                            <th class="all"> العمليات </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($counter = 1)
                        @foreach($rows as $one)
                        <tr class="tr_{{ $one->id }}">
                            <td class="text-center">{{ $counter }}</td>
                            <td>{{ $one->title_ar }} - {{ $one->title_en }}</td>                             
                            <td><span class="{{ $one->image }}"></span></td> 
                            <td>{{ $one->created_at }}</td>
                            <td>
                                <div class="btn-group ">
                                    <button class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown">{{ trans("lang.Tools") }}
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu ">
                                        <li>
                                            <a href="{{ url("/admin/news/edit/")."/".$one->id }}">
                                                <i class="fa fa-pencil-square-o"></i> {{ trans("lang.Edit") }} </a>
                                        </li>
                                        <li>
                                            <a data-id="{{ $one->id }}" class="delete-url" href="{{ url("/admin/news/destroy/")."/".$one->id }}">
                                                <i class="fa fa-trash-o"></i> {{ trans("lang.Delete") }}</a>
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