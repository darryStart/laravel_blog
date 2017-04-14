<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{config('web.web_name')}}管理后台</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{--框架静态--}}
    <link href="{{asset('static/admin/css/bootstrap.min.css?v=3.3.5')}}" rel="stylesheet">
    <link href="{{asset('static/admin/css/font-awesome.min.css?v=4.4.0')}}" rel="stylesheet">
    <link href="{{asset('static/admin/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
    <link href="{{asset('static/admin/css/plugins/chosen/chosen.css')}}" rel="stylesheet">
    <link href="{{asset('static/admin/css/plugins/colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('static/admin/css/plugins/cropper/cropper.min.css')}}" rel="stylesheet">
    <link href="{{asset('static/admin/css/plugins/switchery/switchery.css')}}" rel="stylesheet">
    <link href="{{asset('static/admin/css/plugins/jasny/jasny-bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('static/admin/css/plugins/nouslider/jquery.nouislider.css')}}" rel="stylesheet">
    <link href="{{asset('static/admin/css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('static/admin/css/plugins/clockpicker/clockpicker.css')}}" rel="stylesheet">
    <link href="{{asset('static/admin/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('static/admin/css/style.min.css?v=4.0.0')}}" rel="stylesheet">
    <link href="{{asset('static/admin/layer/skin/layer.css')}}" rel="stylesheet">
    <link href="{{asset('static/admin/css/uploadfile.css')}}" rel="stylesheet">
    <script src="{{asset('static/admin/js/jquery.min.js?v=2.1.4')}}"></script>
    <script src="{{asset('static/admin/layer/layer.js')}}"></script>

    {{--自定义静态--}}
    <link rel="stylesheet" href="{{asset('static/admin/css/admin.css')}}">
    @yield('header')
</head>
<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">