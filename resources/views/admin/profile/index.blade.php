<!DOCTYPE html>
<html lang="en" dir="rtl"> 
    <head>
        <meta charset="utf-8" />
        <title>Metronic Admin RTL Theme #1 | Ticket Support Staff Page</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin RTL Theme #1 for manage your ticket support staff" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{!! url('public/assets/admin/global/plugins/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('public/assets/admin/global/plugins/simple-line-icons/simple-line-icons.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('public/assets/admin/global/plugins/bootstrap/css/bootstrap-rtl.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('public/assets/admin/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css') !!}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{!! url('public/assets/admin/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('public/assets/admin/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('public/assets/admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{!! url('public/assets/admin/global/css/components-rtl.min.css') !!}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{!! url('public/assets/admin/global/css/plugins-rtl.min.css') !!}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{!! url('public/assets/admin/pages/css/profile-rtl.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('public/assets/admin/apps/css/ticket-rtl.min.css') !!}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{!! url('public/assets/admin/layouts/layout/css/layout-rtl.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('public/assets/admin/layouts/layout/css/themes/darkblue-rtl.min.css') !!}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{!! url('public/assets/admin/layouts/layout/css/custom-rtl.min.css') !!}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white page-sidebar-closed">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="index.html">
                            <img src="{!! url('public/assets/admin/layouts/layout/img/logo.png') !!}" alt="logo" class="logo-default" /> </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">            
                            @php($name = Auth::user()->name)
                            @php($user_id = Auth::user()->id)
                            @php($image = \App\Instructor::where("user_id", $user_id)->pluck("image")[0])                
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="{{ url('/public/uploads/images') . '/' . $image }}" />
                                    <span class="username username-hide-on-mobile"> {{ $name }} </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="{{ url('/admin/profile') }}">
                                            <i class="icon-user"></i> الصفحة الشخصية </a>
                                    </li>                         
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown">
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" class="dropdown-toggle">
                                    <i class="icon-logout"></i>
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                   <div class="page-sidebar navbar-collapse collapse">
                        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-closed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                             
                            <li class="nav-item">
                <a href="{{ url("/admin") }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">الرئيسية</span>
                    <span class="selected"></span>
                </a>
            </li>
           
            <li class="nav-item">
                <a href="{{ url("/admin/groups") }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">مجموعات المستخدمين</span>
                    <span class="selected"></span>
                </a>
            </li>

             <li class="nav-item">
                <a href="{{ url("/admin/users") }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">المستخدمين</span>
                    <span class="selected"></span>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{ url("/admin/news") }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">الأخبار</span>
                    <span class="selected"></span>
                </a>
            </li>

              <li class="nav-item">
                <a href="{{ url("/admin/courses") }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">الكورسات</span>
                    <span class="selected"></span>
                </a>
            </li>

              <li class="nav-item">
                <a href="{{ url("/admin/years") }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">السنين</span>
                    <span class="selected"></span>
                </a>
            </li>

              <li class="nav-item">
                <a href="{{ url("/admin/services") }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">الخدمات</span>
                    <span class="selected"></span>
                </a>
            </li>

              <li class="nav-item">
                <a href="{{ url("/admin/gallery") }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">معرض الصور</span>
                    <span class="selected"></span>
                </a>
            </li>

              <li class="nav-item">
                <a href="{{ url("/admin/messages") }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">الرسائل</span>
                    <span class="selected"></span>
                </a>
            </li>

              <li class="nav-item">
                <a href="{{ url("/admin/instructors") }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">المدربين</span>
                    <span class="selected"></span>
                </a>
            </li>

              <li class="nav-item">
                <a href="{{ url("/admin/sliders") }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">السلايدر</span>
                    <span class="selected"></span>
                </a>
            </li>

                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                            </ul> 
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> الصفحة الشخصية
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN PROFILE SIDEBAR -->
                                <div class="profile-sidebar">
                                    <!-- PORTLET MAIN -->
                                    <div class="portlet light profile-sidebar-portlet ">
                                        <!-- SIDEBAR USERPIC -->
                                        <div class="profile-userpic">
                                            <img src="{{ url('/public/uploads/images') . '/' . $details->image }}" class="img-responsive" alt=""> </div>
                                        <!-- END SIDEBAR USERPIC -->
                                        <!-- SIDEBAR USER TITLE -->
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name"> {{ Auth::user()->name }} </div>
                                            <div class="profile-usertitle-job"> {{ $details->position }} </div>
                                        </div>
                                        <!-- END SIDEBAR USER TITLE -->
                                        <!-- SIDEBAR MENU -->
                                        <div class="profile-usermenu">
                                            <ul class="nav">
                                                <li>
                                                    <a href="{{ url('/admin/profile') }}">
                                                        <i class="icon-home"></i> عرض الصفحة الشخصية </a>
                                                </li>
                                                <li class="">
                                                    <a href="{{ url('/admin/update_info') }}">
                                                        <i class="icon-settings"></i> تحديث البيانات </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- END MENU -->
                                    </div>
                                    <!-- END PORTLET MAIN -->
                                    <!-- PORTLET MAIN -->
                                    <div class="portlet light ">
                                        
                                        <div>
                                            <h4 class="profile-desc-title">البيانات الشخصية</h4>
                                            <span class="profile-desc-text"> 
                                                {{ $details->bio }}
                                            </span>
                                        </div>
                                    </div>
                                    <!-- END PORTLET MAIN -->
                                </div>
                                <!-- END BEGIN PROFILE SIDEBAR -->
                                <!-- BEGIN TICKET LIST CONTENT -->
                                <div class="app-ticket app-ticket-list">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portlet light ">
                                                <div class="portlet-title tabbable-line">
                                                    <div class="caption caption-md">
                                                        <i class="icon-globe theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">المواد الدراسية</span>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">                                                    
                                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                                        <thead>
                                                            <tr>
                                                                <th> # </th>
                                                                <th> إسم المادة </th>
                                                                <th> الصورة </th>
                                                                <th> الكورس </th>
                                                                <th> السنة </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php($counter = 1)
                                                            @foreach($materials as $one)
                                                            <tr class="odd gradeX"> 
                                                                <td> {{ $counter }} </td>
                                                                <td> {{ $one->title_ar }} </td>
                                                                <td><img style="width:80px;height:80px;" src="{{ url('/public/uploads/images') . '/' . $one->image }}" /></td> 
                                                                <td> {{ $one->course->title_ar }} </td>                                                                
                                                                <td> {{ $one->course->year->year }}</td>             
                                                            </tr>
                                                            @php($counter++)
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PROFILE CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                 
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            @include("components.admin.footer")
            <!-- END FOOTER -->
        </div>
        <!-- BEGIN QUICK NAV -->
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
        <script src="{!! url('public/assets/admin/global/plugins/respond.min.js') !!}"></script>
        <script src="{!! url('public/assets/admin/global/plugins/excanvas.min.js') !!}"></script> 
        <script src="{!! url('public/assets/admin/global/plugins/ie8.fix.min.js') !!}"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{!! url('public/assets/admin/global/plugins/jquery.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('public/assets/admin/global/plugins/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('public/assets/admin/global/plugins/js.cookie.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('public/assets/admin/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('public/assets/admin/global/plugins/jquery.blockui.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('public/assets/admin/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') !!}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{!! url('public/assets/admin/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}" type="text/javascript"></script>
        <script src="{!! url('public/assets/admin/global/plugins/jquery.sparkline.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('public/assets/admin/global/scripts/datatable.js') !!}" type="text/javascript"></script>
        <script src="{!! url('public/assets/admin/global/plugins/datatables/datatables.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('public/assets/admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{!! url('public/assets/admin/global/scripts/app.min.js') !!}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{!! url('public/assets/admin/pages/scripts/profile.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('public/assets/admin/pages/scripts/table-datatables-managed.min.js') !!}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{!! url('public/assets/admin/layouts/layout/scripts/layout.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('public/assets/admin/layouts/layout/scripts/demo.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('public/assets/admin/layouts/global/scripts/quick-sidebar.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('public/assets/admin/layouts/global/scripts/quick-nav.min.js') !!}" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>