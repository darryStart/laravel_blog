<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>{{Config::get('web.web_title')}}</title>
    <meta name="keywords" content="{:C('SITENAME')}">
    <meta name="description" content="{:C('SITENAME')}">
    <link rel="stylesheet" href="{{asset('static/admin/css/bootstrap.min.css')}}">
    <link href="{{asset('static/admin/css/font-awesome.min.css?v=4.4.0')}}" rel="stylesheet">
    <link href="{{asset('static/admin/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('static/admin/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('static/admin/css/login.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('static/admin/login/supersized.css')}}">
    <script type="text/javascript">
        var url = '{{asset('static')}}';
    </script>
    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html"/>
    <![endif]-->
    <script>
        if (window.top !== window.self) {
            window.top.location = window.location
        }
        ;
    </script>

</head>

<body class="signin" style="font-size: 14px;">
<div class="signinpanel">
    <div class="row">
        <div class="col-sm-7">
            <div class="signin-info">
                <div class="logopanel m-b">
                    <h1>[ H+ ]</h1>
                </div>
                <div class="m-b"></div>
                <h4>欢迎使用 <strong>{{Config::get('web.web_title')}}</strong></h4>
                <ul class="m-b">
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势一</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势二</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势三</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势四</li>
                    <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 优势五</li>
                </ul>
                <strong>还没有账号？ <a href="#">立即注册&raquo;</a></strong>
            </div>
        </div>
        <div class="col-sm-5">
            <form method="post" action="{:U('index/dologin')}">
                {{csrf_field()}}
                <h4 class="no-margins">登录：</h4>
                <p class="m-t-md">登录到H+后台主题UI框架</p>
                <input type="text" class="form-control uname" id="username" name="user" placeholder="用户名"/>
                <input type="password" class="form-control pword m-b" id="password" name="password" placeholder="密码"/>
                <a href="">忘记密码了？</a>
                <a type="submit" id="btn_login" class="btn btn-success btn-block">登&nbsp;&nbsp;&nbsp;录</a>
            </form>
        </div>
    </div>
    <div class="signup-footer">
        <div class="pull-left">
            {{config('site.site_copyright')}}
        </div>
    </div>
</div>
<script src="{{asset('static/admin/login/jquery-1.8.2.min.js')}}"></script>
<script src="{{asset('static/admin/login/supersized.3.2.7.min.js')}}"></script>
<script src="{{asset('static/admin/login/supersized-init.js')}}"></script>
<script src="{{asset('static/admin/js/jquery.min.js?v=2.1.4')}}"></script>
<script src="{{asset('static/admin/js/bootstrap.min.js?v=3.3.5')}}"></script>
<script src="{{asset('static/admin/layer/layer.js')}}"></script>
<script src="{{asset('static/admin/js/login.js')}}"></script>
</body>

</html>