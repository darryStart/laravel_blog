
<div class="xl12 xm4">
    <div>
        <h3><span class="icon-user"></span> 用户登录</h3>
        <br />
        <form method="post" class="form-x form-auto">
            <div class="form-group">
                <div class="label">
                    <label for="username">
                        用户名</label>
                </div>
                <div class="field">
                    <input type="text" class="input input-auto" id="username" name="username" size="30" data-validate="required:必填" placeholder="手机/邮箱/账号" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="detail">
                        密&nbsp;&nbsp;码</label>
                </div>
                <div class="field">
                    <input type="text" class="input input-auto" id="username" name="username" size="30" data-validate="required:必填" placeholder="密码" />
                </div>
            </div>
            <div class="form-button">
                <button class="button bg-blue" type="submit">
                    登录</button>&nbsp;&nbsp;&nbsp;&nbsp;

                <a class="button bg" href="/Base/loginQq.html"><img height="20px" src="http://ilunhui.cn/Public/Home/images/qq.png" /> QQ登录</a>

            </div>
        </form>
    </div>
    <br /><hr />
    <div>
        <h3><span class="icon-wrench"></span> 我的标签</h3>
        <h4>
            <div class="tag-ul">
                @foreach($label as $v)
                    @switch($v->art_id % 6)
                        @case(0)
                            <a class="button button-little bg-green shake-hover" href="{{url('article',$v->art_id)}}">{{$v->art_keyword}}</a>
                        @break
                        @case(1)
                            <a class="button button-little bg-main shake-hover" href="{{url('article',$v->art_id)}}">{{$v->art_keyword}}</a>
                        @break
                        @case(2)
                            <a class="button button-little bg-sub shake-hover" href="{{url('article',$v->art_id)}}">{{$v->art_keyword}}</a>
                        @break
                        @case(3)
                            <a class="button button-little bg-red shake-hover" href="{{url('article',$v->art_id)}}">{{$v->art_keyword}}</a>
                        @break
                        @case(4)
                            <a class="button button-little bg-yellow shake-hover" href="{{url('article',$v->art_id)}}">{{$v->art_keyword}}</a>
                        @break
                        @case(5)
                            <a class="button button-little bg-blue shake-hover" href="{{url('article',$v->art_id)}}">{{$v->art_keyword}}</a>
                        @break
                        @default
                            <a class="button button-little bg-green shake-hover" href="{{url('article',$v->art_id)}}">{{$v->art_keyword}}</a>
                        @break
                    @endswitch
                @endforeach
            </div>
        </h4>
    </div>
    <hr />
    <h2 class="bg-main text-white padding">随机文章</h2>
    <div class="padding-big bg">
        <ul class="list-media list-underline">
            @foreach($random_art as $v)
                <li>
                    <div class="media media-x img-small">
                        <a class="float-left" href="{{route('show_article',$v->art_id)}}"><img src="{{asset($v->art_face)}}" onerror="this.src='{{asset('static/home/images/default.jpg')}}'" class="radius"></a>
                        <div class="media-body">
                            <strong>
                                {{mb_substr($v->art_title,0,22,'utf-8')}}...
                            </strong>
                            {{mb_substr($v->art_remark,0,35,'utf-8')}}...
                            <a class="button button-little border-red swing-hover" href="{{route('show_article',$v->art_id)}}">查看详情</a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <br />
    <div class="tab border-main" data-toggle="hover" style="height: 470px;">
        <div class="tab-head">

            <ul class="tab-nav">
                <li class="active"><a href="#tab-start2">最新留言</a> </li>
                <li><a href="#tab-css2">热门文章</a> </li>
                <li><a href="#tab-units2">申请友链</a> </li>
            </ul>
        </div>
        <div class="tab-body ">
            <div class="tab-panel active" id="tab-start2">
                <div class="panel-group" style="border-top: solid 0px #ddd;">
                    <div class="media media-x">
                        <a class="float-left" href="/Liuyan/index.html">
                            <img src="http://q.qlogo.cn/qqapp/101250624/57852C83E8DD7171B6621FBE221767F5/100" class="radius-circle" width="60px" height="60px">
                        </a>
                        <div class="media-body">
                            <strong><span class="icon-paper-plane"></span>  MSilence</strong>
                            <span class="tag bg-dot">Win 7</span> 压缩文件解压还需要密码...
                        </div>
                    </div>
                </div><div class="panel-group" style="border-top: solid 0px #ddd;">
                    <div class="media media-x">
                        <a class="float-left" href="/Liuyan/index.html">
                            <img src="http://q.qlogo.cn/qqapp/101250624/3BF9C9565AA7FA95A57882BC217F4B74/100" class="radius-circle" width="60px" height="60px">
                        </a>
                        <div class="media-body">
                            <strong><span class="icon-paper-plane"></span>  锕bin</strong>
                            <span class="tag bg-dot">Unknown</span> 群加不进去 请问源码哪里能获取？...
                        </div>
                    </div>
                </div><div class="panel-group" style="border-top: solid 0px #ddd;">
                    <div class="media media-x">
                        <a class="float-left" href="/Liuyan/index.html">
                            <img src="http://q.qlogo.cn/qqapp/101250624/3A0ABDB7F75CE58D55B1974CB6210556/100" class="radius-circle" width="60px" height="60px">
                        </a>
                        <div class="media-body">
                            <strong><span class="icon-paper-plane"></span>  深圳市卢敖科技有限公司</strong>
                            <span class="tag bg-dot">Unknown</span> 加不了群，发下源码到邮箱吧！...
                        </div>
                    </div>
                </div><div class="panel-group" style="border-top: solid 0px #ddd;">
                    <div class="media media-x">
                        <a class="float-left" href="/Liuyan/index.html">
                            <img src="http://q.qlogo.cn/qqapp/101250624/2C8271DA9213DFC29170F0A058AC1C2F/100" class="radius-circle" width="60px" height="60px">
                        </a>
                        <div class="media-body">
                            <strong><span class="icon-paper-plane"></span>  Baby)不哭...[̲̅V̲̅I̲̅P̅]</strong>
                            <span class="tag bg-dot">Win 7</span> 支持支持哦...
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-panel" id="tab-css2" >
                @foreach($hot_art as $v)
                    <li style="margin-bottom:8px">
                        <h4>
                            <a href="{{route('show_article',$v->art_id)}}"><span class="icon-leaf"></span> {{$v->art_title}}({{$v->art_views}})</a>
                        </h4>
                    </li>
                @endforeach
            </div>
            <div class="tab-panel" id="tab-units2">
                <div class="panel-body" style="border:1px solid #00aa88;border-radius:5px">
                    <form method="post">
                        <div style="margin: 10px">
                            <div>
                                <label style="font-weight: bold">
                                    友链名称:&nbsp;&nbsp;&nbsp; <input type="text" id="link_name" class="input input-auto" name="link_name" size="27"/>
                                </label>
                            </div>
                        </div>
                        <div  style="margin: 10px">
                            <div>
                                <label style="font-weight: bold">
                                    友情链接:&nbsp;&nbsp;&nbsp; <input type="text" id="link" class="input input-auto" name="link_" size="27" />
                                </label>
                            </div>
                        </div>
                        <div  style="margin: 10px">
                            <div>
                                <label style="font-weight: bold">
                                    联系邮箱:&nbsp;&nbsp;&nbsp; <input type="text" id="email" class="input input-auto" name="username" size="27"/>
                                </label>
                            </div>
                        </div>
                        <div  style="margin: 10px">
                            <div>
                                <label style="font-weight: bold">
                                    &nbsp;验&nbsp;证&nbsp;码:&nbsp;&nbsp;&nbsp; <input type="text"  id="cartcha_val" class="input input-auto" size="14" placeholder="验证码"/>
                                    <img onclick="javascript:re_captcha();" src="{{url('captcha',1) }}"  alt="验证码" title="刷新图片" width="100" height="34" id="captcha" border="0">
                                </label>
                            </div>
                        </div>
                        <div class="form-button">
                            <button class="button bg-blue" type="button" id="link-submit" style="width: 90%;margin-left: 4%"><span style="font-weight: bold;font-size: 16px;">申&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h3><span class="icon-retweet"></span> 友情链接</h3>
        <br />
        <div class="links">
            <a href="http://thinkphp.cn" target="_blank" class="button border-blue" role="button">ThinkPHP</a>&nbsp;<a href="http://www.bootcss.com/" target="_blank" class="button border-blue" role="button">Bootstrap中文网</a>&nbsp;<a href="http://www.loveteemo.com" target="_blank" class="button border-blue" role="button">青春博客</a>&nbsp;<a href="http://www.blogxuan.com/" target="_blank" class="button border-blue" role="button">玄玄博客</a>&nbsp;<a href="http://www.dawnfly.cn" target="_blank" class="button border-blue" role="button">破晓博客</a>&nbsp;<a href="http://www.phpbst.com" target="_blank" class="button border-blue" role="button">PHP百事通</a>&nbsp;<a href="http://www.twbk.net/" target="_blank" class="button border-blue" role="button">老谭博客</a>&nbsp;<a href="http://www.xawzjs.net" target="_blank" class="button border-blue" role="button">西安网站建设</a>&nbsp;<a href="http://www.xuexiaofeng.com/" target="_blank" class="button border-blue" role="button">风色幻想</a>&nbsp;<a href="http://www.bloggl.com" target="_blank" class="button border-blue" role="button">Aler's  blog</a>&nbsp;<a href="http://www.bnyone.com/" target="_blank" class="button border-blue" role="button">繁华分享</a>&nbsp;<a href="http://www.qsblog.cn" target="_blank" class="button border-blue" role="button">情殇博客</a>&nbsp;<a href="http://www.momolove.cn/" target="_blank" class="button border-blue" role="button">暧学习</a>&nbsp;<a href="http://www.ice-breaker.cn" target="_blank" class="button border-blue" role="button">破冰者博客</a>&nbsp;<a href="http://www.amuker.com" target="_blank" class="button border-blue" role="button">慕轲博客</a>&nbsp;<a href="http://www.pengyaohui.cn" target="_blank" class="button border-blue" role="button">回忆博客</a>&nbsp;		</div>
    </div>
    <br />
    <hr />
    <br />
</div>
<script>
    function re_captcha() {
        var url = "{{url('captcha')}}" + "/" + Math.random();
        document.getElementById('captcha').src=url;
    }

    $(function () {
        $('#link-submit').click(function () {

            $.ajax({
                url:"{{url('captcha_check')}}",
                data:{'code':$("#cartcha_val").val(),'_token':'{{csrf_token()}}'},
                type:'post',
                async:true,
                success:function (msg) {
                    if(msg != '200'){
                        $("#cartcha_val").css("border-color","red");
                        re_captcha();
                        return;
                    }else{
                        $("#cartcha_val").css('border-color','#00aaee')
                    }
                },
                error:function () {
                    $("#cartcha_val").css("border-color","pink");
                    return;
                }
            });


            if($('#link_name').val() == ''){
                $("#link_name").css("border-color","red");
                return false;
            }else {
                $("#link_name").css('border-color','#00aaee')
            }

            if($('#link').val() == ''){
                $("#link").css("border-color","red");
                return false;
            }else {
                $("#link").css('border-color','#00aaee')
            }

            var email = $("#email").val();
            var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
            if(reg.test(email)){
                $("#email").css('border-color','#00aaee')
            }else {
                $("#email").css("border-color","red");
                return false;
            }

            $.ajax({
                'url':"{{route('home_link')}}",
                'data':{'link_name':$('#link_name').val(),'link_url':$('#link').val(),'apply_email':email,'_token':"{{csrf_token()}}"},
                'type':'post',
                success:function (msg) {
                    console.log(msg);
//                    if(msg == '200'){
//                        alert('200');
//                    }else{
//                        alert('400');
//                    }
                },
                error:function () {
                    alert('4001');
                }
            });

        });
    })


</script>
