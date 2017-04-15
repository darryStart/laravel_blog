<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>操作提示</title>
        <link rel="stylesheet" type="text/css" href="{{asset('static/notice/jump.css')}}"/>
        <script src="{{asset('static/notice/jquery-2.0.3.min.js')}}"></script>
        <script src="{{asset('static/notice/jump.js')}}"></script>
    </head>
    <body>
        <div class="system-message">
            @if($code == 200)
                <script>
                    swal({
                        title: "成功提示",
                        type: "success",
                        html: true,
                        text: '<h3>{{$message}}</h3><br /><span><span id="wait">{{$waitSecond}}</span>秒之后自动跳转</span>',
                        showConfirmButton: true
                    });
                </script>
            @else
                <script>
                    swal({
                        title: "失败提示",
                        type: "error",
                        html: true,
                        text: '<h3>{{$message}}</h3><br /><span><span id="wait">{{$waitSecond}}</span>秒之后自动跳转</span>',
                        showConfirmButton: true
                    });
                </script>
            @endif
            <b style = "display:none;" >{{$waitSecond}}</b>
        </div >
        <script type = "text/javascript" >
            (function () {
                var wait = document.getElementById('wait'), href = document.getElementById('href').href;
                var interval = setInterval(function () {
                    var time = --wait.innerHTML;
                    if (time <= 0) {
                        location.href = href;
                        clearInterval(interval);
                    }
                    ;
                }, 1500);
            })();
        </script>
    </body>
</html>
