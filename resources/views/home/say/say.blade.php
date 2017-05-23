@extends('home.layout.base')
@section('title',$title)
@section('body')
    <div class="xl12 xm8">
        <div class="line-small">
            <div class="xs12">
                {{csrf_field()}}
                @foreach($data as $v)
                    <div class="clearfix articlebox">
                        <div class="liuyan_a"></div>
                        <div class="said_img message">
                            <img src="{{asset($v->user_face)}}" class="radius-circle" width="60px" height="60px" />
                            <div class="liuyan_t">
                                <span class="icon-user"></span>&nbsp;&nbsp;<a>{{$v->user_name}}</a>&nbsp;&nbsp;</span>
                                <span class="icon-paper-plane"></span>&nbsp;@date('Y-m-d H:i:s',$v->create_time)&nbsp;</span>
                                <span class="tag bg-dot">{{$v->create_os}}</span>&nbsp;&nbsp;<span class="icon-map-marker"></span>&nbsp;{{$v->create_city}}
                            </div>
                            <div class="liuyan_c">
                                {!! $v->say_content !!}
                                <span title="回复" class="icon-comment reply-icon"></span>
                            </div>
                            <div class="reply-div">
                                <div class="say-content" contentEditable='true'></div>
                                <div class="express">
                                    <img src="{{asset('static/face/bba_thumb.gif')}}" class='bq'/>
                                    <!--face begin-->

                                    <!--face end-->
                                    <button class="button bg-blue reply-sub" data-id="{{$v->say_id}}" data-name="{{$v->user_name}}" type="button">发表</button>
                                </div>
                            </div>
                        </div>
                        <!--回复-->
                        @foreach($v->reply as $vv)
                            <div class="f_liuyan">
                                <hr />
                                <div class="liuyan_a">
                                </div>
                                <div class="said_img message">
                                    <img src="{{asset($vv->reply_user_face)}}" class="radius-circle" width="60px" height="60px" />
                                    <div class="liuyan_t">
                                        <span class="icon-user"></span>&nbsp;&nbsp;{{$vv->reply_user_name}}&nbsp;&nbsp;</span>
                                        <span class="icon-paper-plane"></span>&nbsp;&nbsp;@date('Y-m-d H:i:s',$vv->create_time)&nbsp;&nbsp;
                                        <span>回复 @<a>{{$vv->be_reply_user_name}}</a> 中说到：</span>
                                    </div>
                                    <div class="liuyan_c">
                                        {!! $vv->content !!}
                                        <span title="回复" class="icon-comment reply-icon"></span>
                                    </div>
                                    <div class="reply-div">
                                        <div class="say-content" contentEditable='true'></div>
                                        <div class="express">
                                            <img src="{{asset('static/face/bba_thumb.gif')}}" class='bq'/>

                                            <button class="button bg-blue reply-sub child-btn" data-id="{{$v->say_id}}" data-name="{{$vv->reply_user_name}}" type="button">发表</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                            <form action="{{route('say_add')}}" id="say-form" class="form form-block" url="{{route('say')}}">
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
                                    <button class="button bg-blue button-big button-block" data-code="{{url('captcha_check')}}" data-url="{{route('say_add')}}" data-href="{{route('say')}}" id="say-submit" type="button">提 交</button>
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

    <div class="face" style="display: none" >
        <ul>
            <li><img src="{{asset('static/face/zz2_thumb.gif')}}" title="[织]" ></li>
            <li><img src="{{asset('static/face/horse2_thumb.gif')}}" title="神马]"></li>
            <li><img src="{{asset('static/face/fuyun_thumb.gif')}}" title="[浮云]"></li>
            <li><img src="{{asset('static/face/geili_thumb.gif')}}" title="[给力]"></li>
            <li><img src="{{asset('static/face/wg_thumb.gif')}}" title="[围观]"></li>
            <li><img src="{{asset('static/face/vw_thumb.gif')}}" title="[威武]"></li>
            <li><img src="{{asset('static/face/panda_thumb.gif')}}" title="[熊猫]"></li>
            <li><img src="{{asset('static/face/rabbit_thumb.gif')}}" title="兔子]"></li>
            <li><img src="{{asset('static/face/otm_thumb.gif')}}" title="[奥特曼]"></li>
            <li><img src="{{asset('static/face/j_thumb.gif')}}" title="[囧]"></li>
            <li><img src="{{asset('static/face/hufen_thumb.gif')}}" title="[互粉]"></li>
            <li><img src="{{asset('static/face/liwu_thumb.gif')}}" title="[礼物]"></li>
            <li><img src="{{asset('static/face/smilea_thumb.gif')}}" title="呵呵]"></li>
            <li><img src="{{asset('static/face/tootha_thumb.gif')}}" title="嘻嘻]"></li>
            <li><img src="{{asset('static/face/laugh.gif')}}" title="[哈哈]"></li>
            <li><img src="{{asset('static/face/tza_thumb.gif')}}" title="[可爱]"></li>
            <li><img src="{{asset('static/face/kl_thumb.gif')}}" title="[可怜]"></li>
            <li><img src="{{asset('static/face/kbsa_thumb.gif')}}" title="[挖鼻屎]"></li>
            <li><img src="{{asset('static/face/cj_thumb.gif')}}" title="[吃惊]"></li>
            <li><img src="{{asset('static/face/shamea_thumb.gif')}}" title="[害羞]"></li>
            <li><img src="{{asset('static/face/zy_thumb.gif')}}" title="[挤眼]"></li>
            <li><img src="{{asset('static/face/bz_thumb.gif')}}" title="[闭嘴]"></li>
            <li><img src="{{asset('static/face/bs2_thumb.gif')}}" title="[鄙视]"></li>
            <li><img src="{{asset('static/face/lovea_thumb.gif')}}" title="[爱你]"></li>
            <li><img src="{{asset('static/face/sada_thumb.gif')}}" title="[泪]"></li>
            <li><img src="{{asset('static/face/heia_thumb.gif')}}" title="[偷笑]"></li>
            <li><img src="{{asset('static/face/qq_thumb.gif')}}" title="[亲亲]"></li>
            <li><img src="{{asset('static/face/sb_thumb.gif')}}" title="[生病]"></li>
            <li><img src="{{asset('static/face/mb_thumb.gif')}}" title="[太开心]"></li>
            <li><img src="{{asset('static/face/ldln_thumb.gif')}}" title="[懒得理你]"></li>
            <li><img src="{{asset('static/face/yhh_thumb.gif')}}" title="[右哼哼]"></li>
            <li><img src="{{asset('static/face/zhh_thumb.gif')}}" title="[左哼哼]"></li>
            <li><img src="{{asset('static/face/x_thumb.gif')}}" title="[嘘]"></li>
            <li><img src="{{asset('static/face/cry.gif')}}" title="[衰]"></li>
            <li><img src="{{asset('static/face/wq_thumb.gif')}}" title="[委屈]"></li>
            <li><img src="{{asset('static/face/t_thumb.gif')}}" title="[吐]"></li>
            <li><img src="{{asset('static/face/k_thumb.gif')}}" title="[打哈气]"></li>
            <li><img src="{{asset('static/face/bba_thumb.gif')}}" title="[抱抱]"></li>
            <li><img src="{{asset('static/face/angrya_thumb.gif')}}" title="[怒]"></li>
            <li><img src="{{asset('static/face/yw_thumb.gif')}}" title="[疑问]"></li>
            <li><img src="{{asset('static/face/cza_thumb.gif')}}" title="[馋嘴]"></li>
            <li><img src="{{asset('static/face/88_thumb.gif')}}" title="[拜拜]"></li>
            <li><img src="{{asset('static/face/sk_thumb.gif')}}" title="[思考]"></li>
            <li><img src="{{asset('static/face/sweata_thumb.gif')}}" title="[汗]"></li>
            <li><img src="{{asset('static/face/sleepya_thumb.gif')}}" title="[困]"></li>
            <li><img src="{{asset('static/face/sleepa_thumb.gif')}}" title="[睡觉]"></li>
            <li><img src="{{asset('static/face/money_thumb.gif')}}" title="[钱]"></li>
            <li><img src="{{asset('static/face/sw_thumb.gif')}}" title="[失望]"></li>
            <li><img src="{{asset('static/face/cool_thumb.gif')}}" title="[酷]"></li>
            <li><img src="{{asset('static/face/hsa_thumb.gif')}}" title="[花心]"></li>
            <li><img src="{{asset('static/face/hatea_thumb.gif')}}" title="[哼]"></li>
            <li><img src="{{asset('static/face/gza_thumb.gif')}}" title="[鼓掌]"></li>
            <li><img src="{{asset('static/face/dizzya_thumb.gif')}}" title="[晕]"></li>
            <li><img src="{{asset('static/face/bs_thumb.gif')}}" title="[悲伤]"></li>
            <li><img src="{{asset('static/face/crazya_thumb.gif')}}" title="[抓狂]"></li>
            <li><img src="{{asset('static/face/h_thumb.gif')}}" title="[黑线]"></li>
            <li><img src="{{asset('static/face/yx_thumb.gif')}}" title="[阴险]"></li>
            <li><img src="{{asset('static/face/nm_thumb.gif')}}" title="[怒骂]"></li>
            <li><img src="{{asset('static/face/hearta_thumb.gif')}}" title="[心]"></li>
            <li><img src="{{asset('static/face/unheart.gif')}}" title="[伤心]"></li>
            <li><img src="{{asset('static/face/pig.gif')}}" title="[猪头]"></li>
            <li><img src="{{asset('static/face/ok_thumb.gif')}}" title="[ok]"></li>
            <li><img src="{{asset('static/face/ye_thumb.gif')}}" title="[耶]"></li>
            <li><img src="{{asset('static/face/good_thumb.gif')}}" title="[good]"></li>
            <li><img src="{{asset('static/face/no_thumb.gif')}}" title="[不要]"></li>
            <li><img src="{{asset('static/face/z2_thumb.gif')}}" title="[赞]"></li>
            <li><img src="{{asset('static/face/come_thumb.gif')}}" title="[来]"></li>
            <li><img src="{{asset('static/face/sad_thumb.gif')}}" title="[弱]"></li>
            <li><img src="{{asset('static/face/lazu_thumb.gif')}}" title="[蜡烛]"></li>
            <li><img src="{{asset('static/face/clock_thumb.gif')}}" title="[钟]"></li>
            <li><img src="{{asset('static/face/cake.gif')}}" title="[蛋糕]"></li>
            <li><img src="{{asset('static/face/m_thumb.gif')}}" title="[话筒]"></li>
            <li><img src="{{asset('static/face/weijin_thumb.gif')}}" title="[围脖]"></li>
            <li><img src="{{asset('static/face/lxhzhuanfa_thumb.gif')}}" title="[转发]"></li>
            <li><img src="{{asset('static/face/lxhluguo_thumb.gif')}}" title="[路过这儿]"></li>
            <li><img src="{{asset('static/face/bofubianlian_thumb.gif')}}" title="[bofu变脸]"></li>
            <li><img src="{{asset('static/face/gbzkun_thumb.gif')}}" title="[gbz困]"></li>
            <li><img src="{{asset('static/face/boboshengmenqi_thumb.gif')}}" title="[生闷气]"></li>
            <li><img src="{{asset('static/face/chn_buyaoya_thumb.gif')}}" title="[不要啊]"></li>
            <li><img src="{{asset('static/face/daxiongleibenxiong_thumb.gif')}}" title="[dx泪奔]"></li>
            <li><img src="{{asset('static/face/cat_yunqizhong_thumb.gif')}}" title="[运气中]"></li>
            <li><img src="{{asset('static/face/youqian_thumb.gif')}}" title="[有钱]"></li>
            <li><img src="{{asset('static/face/cf_thumb.gif')}}" title="[冲锋]"></li>
            <li><img src="{{asset('static/face/camera_thumb.gif')}}" title="[照相机]"></li>
        </ul>
    </div>
@endsection
@section('footer')
    <script src="{{asset('static/home/js/say.js')}}"></script>
    <script>
        $(function () {
            $('.reply-sub').on('click', function () {
                var _this = $(this);
                var _content = _this.parents('.message').find('.say-content').html();
                if (_content == '') {
                    _this.parents().find('.say-content').css("border-color", "red");
                    return false;
                } else {
                    var say_id = _this.attr('data-id');
                    var data_name = _this.attr('data-name');
                    $.ajax({
                        'url': "{{route('reply')}}",
                        'type': 'post',
                        'async': true,
                        'data': {
                            'content': _content,
                            'be_reply_user_name': data_name,
                            'say_id': say_id,
                            '_token': '{{csrf_token()}}'
                        },
                        success: function (msg) {
                            if (msg > 0) {
                                var str = '';
                                str += '<div class="f_liuyan">';
                                str += '<hr />';
                                str += '<div class="liuyan_a"></div>';
                                str += '<div class="said_img message">';
                                str += '<img src="{{asset(session("login_user.user_face"))}}" class="radius-circle" width="60px" height="60px" />';
                                str += '<div class="liuyan_t">';
                                str += '<span class="icon-user"></span>&nbsp;&nbsp;{{session("login_user.user_name")}}&nbsp;&nbsp;</span>';
                                str += '<span class="icon-paper-plane"></span>&nbsp;&nbsp;@date('Y-m-d H:i:s')&nbsp;&nbsp;';
                                str += '<span>回复 @<a>';
                                str += data_name;
                                str += '</a> 中说到：</span>';
                                str += '</div>';
                                str += '<div class="liuyan_c">';
                                str += _content;
                                str += '</div>';
                                str += '</div>';
                                _this.parents('.clearfix').append(str);
                            } else {
                                layer.msg('回复出错了！');
                            }
                        },
                        error: function () {
                            layer.msg('回复出错了！');
                        }
                    });
                    $('.say-content').html('');
                    _this.parents().find('.reply-div').hide();
                }
            })
        });
    </script>

@endsection