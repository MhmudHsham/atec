<!-- BEGIN CORE PLUGINS -->
<script src="{{ ADMIN_ASSET . '/global/plugins/jquery.min.js' }}" type="text/javascript"></script>
<script src="{{ ADMIN_ASSET . '/global/plugins/bootstrap/js/bootstrap.min.js' }}" type="text/javascript"></script>
<script src="{{ ADMIN_ASSET . '/global/plugins/js.cookie.min.js' }}" type="text/javascript"></script>
<script src="{{ ADMIN_ASSET . '/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js' }}" type="text/javascript"></script>
<script src="{{ ADMIN_ASSET . '/global/plugins/jquery.blockui.min.js' }}" type="text/javascript"></script>
<script src="{{ ADMIN_ASSET . '/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js' }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
@yield("page_plugins_scripts")
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
@yield("page_level_scripts")
<!-- END PAGE LEVEL SCRIPTS -->