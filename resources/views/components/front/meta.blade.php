<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield("page_title")</title>
<!-- Bootstrap stylesheet -->
@if($lang == "en")
    <link href="{{ url('public/assets/front/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
@else
    <link href="{{ url('public/assets/front/bootstrap/css/bootstrap-rtl.css') }}" rel="stylesheet">
@endif
<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<!-- icofont -->
<link href="{{ url('public/assets/front/icofont/css/icofont.css') }}" rel="stylesheet" type="text/css"/>
<!-- font-awesome -->
<link href="{{ url('public/assets/front/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
<!-- crousel css -->
<link href="{{ url('public/assets/front/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css"/>
<!--bootstrap select-->
<link href="{{ url('public/assets/front/js/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css"/>
@if($lang == "en")
    <link href="{{ url('public/assets/front/css/style_en.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/front/css/newstyle_en.css') }}">
@else
    <link href="{{ url('public/assets/front/css/style_ar.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/front/css/newstyle_ar.css') }}">
@endif