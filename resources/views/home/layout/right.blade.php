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
                <div class="panel-body link-box">
                    <form method="post" id="link_form">
                        <div class="link-input" >
                            <div>
                                <label>
                                    友链名称:&nbsp;&nbsp;&nbsp; <input type="text" id="link_name" class="input input-auto" size="27"/>
                                </label>
                            </div>
                        </div>
                        <div class="link-input">
                            <div>
                                <label >
                                    友情链接:&nbsp;&nbsp;&nbsp; <input type="text" id="link" class="input input-auto" size="27" />
                                </label>
                            </div>
                        </div>
                        <div  class="link-input">
                            <div>
                                <label>
                                    &nbsp;验&nbsp;证&nbsp;码:&nbsp;&nbsp;&nbsp; <input type="text"  id="cartcha_val" class="input input-auto" size="14" placeholder="验证码"/>
                                    <img onclick="javascript:re_captcha();" src="{{url('captcha',1) }}"  alt="验证码" title="刷新图片" width="100" height="34" class="captcha" border="0">
                                </label>
                            </div>
                        </div>
                        <div class="form-button">
                            <button class="button bg-blue link-button" type="button" id="link-submit"><span>申&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请</span></button>
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
            @foreach($link as $v)
                <a href="{{$v->link_url}}" target="_blank" class="button border-blue" role="button">{{$v->link_name}}</a>&nbsp;
            @endforeach
    </div>
    <br />
    <hr />
    <br />
</div>
<script>

    function re_captcha() {
        var url = "{{url('captcha')}}" + "/" + Math.random();
        $('.captcha').attr('src',url);
    }
    $(function () {


        $('#link-submit').click(function () {
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

            $.ajax({
                url:"{{url('captcha_check')}}",
                data:{'code':$("#cartcha_val").val(),'_token':'{{csrf_token()}}'},
                type:'post',
                async:true,
                success:function (msg) {
                    if(msg != '200'){
                        $("#cartcha_val").css("border-color","red");
                        re_captcha();
                        return false;
                    }else{
                        $("#cartcha_val").css('border-color','#00aaee')

                        $("#link-submit").attr('disabled',true);
                        $("#link-submit").html('正在申请中...');

                        $.ajax({
                            'url':"{{route('home_link')}}",
                            'data':{'link_name':$('#link_name').val(),'link_url':$('#link').val(),'_token':"{{csrf_token()}}"},
                            'type':'post',
                            success:function (msg) {
                                $('#link_form')[0].reset();
                                if(msg == '200'){
                                    $('#link-submit').html('申请成功,等待审核');
                                }else{
                                    $('#link-submit').html('申请失败,请重新申请');
                                }

                            },
                            error:function () {
                                layer.msg('网络错误!');
                            }
                        });
                    }
                },
                error:function () {
                    $("#cartcha_val").css("border-color","pink");
                    return false;
                }
            });
        });
    })
</script>
