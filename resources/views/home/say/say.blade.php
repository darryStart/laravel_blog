@extends('home.layout.base')
@section('title',$title)
@section('header')
    <style type="text/css">
         .express{position:relative;/*相对，参考对象*/}
         .express .face{width:390px; height:160px; background:#fff; padding:10px;
            border:1px solid #ddd; box-shadow:2px 2px 3px #666;
            position:absolute;/*绝对定位*/ top:21px; left:30px;
            display:none;/*隐藏*/}
         .express .face ul li{width:22px;height:22px;
            list-style-type:none;/*去掉圆点*/ float:left;
            margin:2px; cursor:pointer;}
        .express .face img{
            margin-left: 0;
        }

         /*.say-content{width:560px; height:70px;margin:0px auto; outline:none;*/
    </style>
    @endsection
@section('body')
    <div class="xl12 xm8">
        <div class="line-small">
            <div class="xs12">
                {{--<volist name="list" id="vo">--}}
                @foreach($data as $v)
                    <div class="clearfix articlebox">
                        <div class="liuyan_a">
                        </div>
                        <div class="said_img">
                            <img src="{{asset($v->user_face)}}" class="radius-circle" width="60px" height="60px" />
                            <div class="liuyan_t">
                                <span class="icon-user"></span>&nbsp;&nbsp;<a>{{$v->user_name}}</a>&nbsp;&nbsp;</span>
                                <span class="icon-paper-plane"></span>&nbsp;@date('Y-m-d H:i:s',$v->create_time)&nbsp;</span>
                                <span class="tag bg-dot">北京</span>&nbsp;&nbsp;<span class="icon-map-marker"></span>&nbsp;{{$v->create_ip}}
                            </div>
                            <div class="liuyan_c">
                                {!! $v->say_content !!}
                                <span title="回复" class="icon-comment reply-icon"></span>
                            </div>
                            <div class="reply-div">
                                {{--<div class="say-content" contentEditable='true'></div>--}}
                                <textarea class="input input-auto say-content" cols="90%" rows="4" placeholder="@ {{$v->user_name }}" contentEditable='true'></textarea>
                                <div class="express">
                                    <img src="{{asset('static/face/bba_thumb.gif')}}" class='bq'/>
                                    <!--face begin-->
                                    <div class="face">
                                        <ul>
                                            <li><img src="{{asset('static/face/zz2_thumb.gif')}}" title="[织]" ></li>
                                            <li><img src="{{asset('static/face/horse2_thumb.gif')}}" title="神马]"></li>
                                            <li><img src="{{asset('static/face/fuyun_thumb.gif')}}" title="[浮云]"></li>
                                            <li><img src="{{asset('static/face/zz2_thumb.gif')}}" title="[织]" ></li>
                                            <li><img src="{{asset('static/face/horse2_thumb.gif')}}" title="神马]"></li>
                                            <li><img src="{{asset('static/face/fuyun_thumb.gif')}}" title="[浮云]"></li>
                                            <li><img src="{{asset('static/face/zz2_thumb.gif')}}" title="[织]" ></li>
                                            <li><img src="{{asset('static/face/horse2_thumb.gif')}}" title="神马]"></li>
                                            <li><img src="{{asset('static/face/fuyun_thumb.gif')}}" title="[浮云]"></li>
                                            <li><img src="{{asset('static/face/zz2_thumb.gif')}}" title="[织]" ></li>
                                            <li><img src="{{asset('static/face/horse2_thumb.gif')}}" title="神马]"></li>
                                            <li><img src="{{asset('static/face/fuyun_thumb.gif')}}" title="[浮云]"></li>
                                            <li><img src="{{asset('static/face/zz2_thumb.gif')}}" title="[织]" ></li>
                                            <li><img src="{{asset('static/face/horse2_thumb.gif')}}" title="神马]"></li>
                                            <li><img src="{{asset('static/face/fuyun_thumb.gif')}}" title="[浮云]"></li>
                                            <li><img src="{{asset('static/face/zz2_thumb.gif')}}" title="[织]" ></li>
                                            <li><img src="{{asset('static/face/horse2_thumb.gif')}}" title="神马]"></li>
                                            <li><img src="{{asset('static/face/fuyun_thumb.gif')}}" title="[浮云]"></li>
                                        </ul>
                                    </div>
                                    <!--face end-->
                                    <button class="button bg-blue reply-sub" type="button">发表</button>
                                </div>

                            </div>
                        </div>

                        <!--回复-->
                        {{--<if condition="$vo.c_content neq ''">--}}
                            <div class="f_liuyan">
                                <hr />
                                <div class="liuyan_a">
                                </div>
                                <div class="said_img">
                                    <img src="{{asset('static/home/images/Portrait/99.jpg')}}" class="radius-circle" width="60px" height="60px" />
                                    <div class="liuyan_t">
                                        <span class="icon-user"></span>&nbsp;&nbsp;任何人名称&nbsp;&nbsp;</span>
                                        <span class="icon-paper-plane"></span>&nbsp;&nbsp;2017-8-19&nbsp;&nbsp;
                                        <span>回复 @<a>darry</a> 中说到：</span>
                                    </div>
                                    <div class="liuyan_c">
                                        我也相信你能搞定这个问题，其实深究不难发现的
                                        <a class="reply" data="1992">
                                            <span title="回复" class="icon-comment icon-comment-color"></span>
                                        </a>
                                    </div>
                                    <div style="margin-bottom: 15px;display: none">
                                        <input class="input input-auto" style="width: 71%;"placeholder="@darry"/>
                                        <button class="button bg-blue" type="button">发表</button>
                                    </div>
                                </div>
                            </div>
                        {{--</if>--}}
                    </div>
                    <br />
                @endforeach
                <br />
                <div class="pages" style=" text-align: center; margin-bottom: 30px">
                    {!! $data->links() !!}
                </div>

                <div class="panel border-sub">
                    <div class="panel-head border-sub bg-sub">
                        <h3>说 说</h3>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body">
                            <form action="{:U('Home/liuyan/addContent')}" id="say-form" class="form form-block">
                                <div class="form-group">
                                    <div class="field">
                                        <textarea class="input" rows="5" name="content" id="content" cols="50" placeholder="说点什么吧...."></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="field">
                                        <div class="input-group">
                                            <span class="addon">验证码</span>
                                            <input type="text" style="width: 300px;" class="input" id="txt_check" name="txt_check" placeholder="请输入右侧验证码" />
                                            <img style="margin-top: -32px;margin-left: 50%;display: block;border: 1px solid #C7C7C7;" onclick="javascript:re_captcha();" src="{{url('captcha',1) }}"  alt="验证码" title="刷新图片" width="100" height="34" class="captcha" border="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button class="button bg-blue button-big button-block" id="say-submit" type="button">提 交</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <br />
        <br />
    </div>


@endsection

@section('footer')
    <script>
        $(function () {
            //回复框显示
            $('.reply-icon').click(function (e) {
                var _this = $(this).parent().next();
                _this.show();
                _this.find('textarea').focus();
                e.stopPropagation();   //阻止冒泡事件
            });


            //点击div空白处关闭
            $('.clearfix').click(function(){
                $(".reply-div").hide();
                return false;
            });

            $(".reply-div").click(function() {
                return false;
            });



            //点击小图片，显示表情
            $(".bq").click(function(e){
                $(".face").slideDown();//慢慢向下展开
                e.stopPropagation();   //阻止冒泡事件
            });

            //点击关闭
            $('.face').click(function(){
                $(".face").slideUp();//慢慢向上收
            });

            //点击小图标时，添加功能
            $(".face ul li").click(function(){
                var simg=$(this).find("img").clone();
                $(this).parents().find('.say-content').append(simg);
//                console.log(simg);
//                var _content = .val(simg);
//                var _val = _content.val() +simg;
//                console.log(_val);
//                _content().val();
//                $(".say-content").append(simg);
            });

            //点击发表按扭，发表内容
            $("span.submit").click(function(){
                var txt=$(".say-content").html();
                if(txt==""){
                    $('.say-content').focus();//自动获取焦点
                    return;
                }
            });

            //发表说说
            $('#say-submit').click(function () {
                if($('#content').val() == ''){
                    $("#content").css("border-color","red");
                    return false;
                }else {
                    $("#content").css("border-color","");
                }

                $.ajax({
                    url:"{{url('captcha_check')}}",
                    data:{'code':$("#txt_check").val(),'_token':'{{csrf_token()}}'},
                    type:'post',
                    async:true,
                    success:function (msg) {
                        if(msg != '200'){
                            $("#txt_check").css("border-color","red");
                            re_captcha();
                            return false;
                        }else{
                            $("#txt_check").css("border-color","");

                            $("#say-submit").attr('disabled',true);
                            $("#say-submit").html('正在发表中...');

                            $.ajax({
                                'url':"{{route('say_add')}}",
                                'data':{'content':$('#content').val(),'_token':"{{csrf_token()}}"},
                                'type':'post',
                                success:function (msg) {
                                    if(msg == '200'){
                                        location.href = '{{route('say')}}';
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



        });




    </script>
@endsection