<div class="footer" style="position: fixed;z-index: 999;bottom: 0;width: 89%;">
    <div class="pull-right">{:C('address')}</div>
</div>
</div>
</div>
<script type="text/javascript" src="{{asset('static/admin/js/jquery.min.js?v=2.1.4')}}"></script>
<script type="text/javascript" src="{{asset('static/admin/js/bootstrap.min.js?v=3.3.5')}}"></script>
<script type="text/javascript" src="{{asset('static/admin/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script type="text/javascript" src="{{asset('static/admin/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<!--<script type="text/javascript" src="{{asset('static/admin/js/plugins/layer/layer.min.js')}}"></script>-->
<script type="text/javascript" src="{{asset('static/admin/js/hplus.min.js?v=4.0.0')}}"></script>
<script type="text/javascript" src="{{asset('static/admin/js/contabs.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/admin/js/plugins/pace/pace.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/admin/js/plugins/chosen/chosen.jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('static/admin/js/plugins/iCheck/icheck.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/admin/js/plugins/sweetalert/sweetalert.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/admin/js/jquery.form.js')}}"></script>
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>
</body>
</html>
@yield('footer')
