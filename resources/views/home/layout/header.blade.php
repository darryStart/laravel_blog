<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>{{config('site.site_name')}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="{{config('site.site_desc','博客')}}"/>
    <meta name="keywords" content="{{config('site.site_seo','博客')}}"/>
    <link rel="stylesheet" href="{{asset('static/Home/css/lunbo.css')}}" />
    <link rel="stylesheet" href="{{asset('static/Home/css/pintuer.css')}}">
    <link rel="stylesheet" href="{{asset('static/Home/css/my.css')}}">
    <link rel="stylesheet" href="{{asset('static/Home/css/page_css.css')}}">
    <link rel="stylesheet" href="{{asset('static/Home/css/gotop.css')}}" />
    <script src="{{asset('static/Home/js/jquery.js')}}"></script>
    <script src="{{asset('static/Home/js/pintuer.js')}}"></script>
    <script src="{{asset('static/Home/js/respond.js')}}"></script>
    <script src="{{asset('static/Home/layer/layer.js')}}"></script>
    <script src="{{asset('static/Home/js/gotop.js')}}" ></script>
    <script src="{{asset('static/Home/js/jquery.touchSlider.js')}}"></script>
    <script src="{{asset('static/Home/js/jquery.touchSlider.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".main_visual").hover(function(){
                $("#btn_prev,#btn_next").fadeIn()
            },function(){
                $("#btn_prev,#btn_next").fadeOut()
            });
            $dragBln = false;
            $(".main_image").touchSlider({
                flexible : true,
                speed : 600,//轮播播放速度，单位是毫秒
                btn_prev : $("#btn_prev"),
                btn_next : $("#btn_next"),
                paging : $(".flicking_con a"),
                counter : function (e){
                    $(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
                }
            });
            $(".main_image").bind("mousedown", function() {
                $dragBln = false;
            });
            $(".main_image").bind("dragstart", function() {
                $dragBln = true;
            });
            $(".main_image a").click(function(){
                if($dragBln) {
                    return false;
                }
            });
            timer = setInterval(function(){
                $("#btn_next").click();
            }, 4000); //轮播间隔时间，单位是毫秒

            $(".main_visual").hover(function(){
                clearInterval(timer);
            },function(){
                timer = setInterval(function(){
                    $("#btn_next").click();
                },4000);
            });

            $(".main_image").bind("touchstart",function(){
                clearInterval(timer);
            }).bind("touchend", function(){
                timer = setInterval(function(){
                    $("#btn_next").click();
                }, 4000);
            });

        });
    </script>
    @yield('header')
</head>
<body>
