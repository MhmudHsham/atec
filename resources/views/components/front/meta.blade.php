<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Home</title>
<!-- Bootstrap stylesheet -->
<link href="{{ url('assets/front/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
<!-- icofont -->
<link href="{{ url('assets/front/icofont/css/icofont.css') }}" rel="stylesheet" type="text/css" />
<!-- font-awesome -->
<link href="{{ url('assets/front/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
<!-- crousel css -->
<link href="{{ url('assets/front/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
<!--bootstrap select-->
<link href="{{ url('assets/front/js/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
<!-- stylesheet -->
<link href="{{ url('assets/front/css/style.css') }}" rel="stylesheet" type="text/css"/>
<!-- New stylesheet -->
<link rel="stylesheet" type="text/css" href="{{ url('assets/front/css/newstyle.css') }}">
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