@extends("layouts.admin")
@section("page_level_script_plugins")
<script src="{!! url('assets/admin/global/plugins/counterup/jquery.waypoints.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/global/plugins/counterup/jquery.counterup.min.js') !!}" type="text/javascript"></script>
@stop
@section("page_level_scripts")
<script src="{!! url('assets/admin/pages/scripts/dashboard.min.js') !!}" type="text/javascript"></script>
@stop
@section("content")
<div style="margin:0 auto;">
<p align="center" style="font-family:curive;font-weight:bold;">
    نظام ATEC فى معاهد العبور والذى يهتم بالطالب بالمعهد من دخولة فى السنة الأولى
<br />
وحتى السنة الأخيرة بل ومشروع تخرجة أيضا 
<br />
يستفيد الطالب من ATEC فى مجال العمل فهو يتدرب على أيدى نخبة من المدربين فى سوق العمل
<br />
والتى سوف تساعدة فيما بعد على التكيف والعمل فى سوق العمل بهمة ونجاح

</p>
</div>
<center>
    <img src="{{ url('/uploads/images/obour.jpg') }}" alt="">
</center>
@stop