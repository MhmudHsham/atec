<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="arabmicrojob.com">
    <meta name="keywords" content="arabmicrojob.com">
    <meta name="robots" content="index,follow">
    <title>Arabmicrojob</title>
        <!-- Favicons -->
    <link rel="icon" href="{{ url('assets/front/img/icon.png') }}">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ url('assets/front/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Bootstrap Select Option css -->
    <link rel="stylesheet" href="{{ url('assets/front/plugins/bootstrap/css/bootstrap-select.min.css') }}">
    <!-- Icons -->
    <link href="{{ url('assets/front/plugins/icons/css/icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/front/plugins/icons/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Nice Select Option css -->
    <link rel="stylesheet" href="{{ url('assets/front/plugins/nice-select/css/nice-select.css') }}">
    <!-- Animate -->
    <link href="{{ url('assets/front/plugins/animate/animate.css') }}" rel="stylesheet">
    <!-- Bootsnav -->
    <link href="{{ url('assets/front/plugins/bootstrap/css/bootsnav.css') }}" rel="stylesheet">
    <!-- Aos Css -->
    <link href="{{ url('assets/front/plugins/aos-master/aos.css') }}" rel="stylesheet">
    <!-- Slick Slider -->
    <link href="{{ url('assets/front/plugins/slick-slider/slick.css') }}" rel="stylesheet">    
    <!-- Custom style -->
    <link href="{{ url('assets/front/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('assets/front/css/custom-en.css') }}" rel="stylesheet">
    <link href="{{ url('assets/front/css/responsiveness.css') }}" rel="stylesheet">
    <!-- Custom Color -->
    <link href="{{ url('assets/front/css/skin/default.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        var config = {
            admin_url: "{{ url('/admin') }}",
            base_url: "{{ url('/') }}"
        };
        var lang = {
            this_field_is_required: "{{ trans('lang.this_field_is_required') }}",
            deleted_successfully: "{{ trans('lang.deleted_successfully') }}",
            email_not_valid: "{{ trans('lang.email_not_valid') }}",
            not_number: "{{ trans('lang.not_number') }}",
            url_not_valid: "{{ trans('lang.url_not_valid') }}"
        };
    </script>
</head>