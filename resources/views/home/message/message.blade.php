@extends('home.layout.base')
@section('title',$title)
@section('header')
    <link rel="stylesheet" type="text/css" href="{{asset('static/home/email/completer.css')}}"/>
    @endsection
@section('body')
    <div class="xl12 xm8">
        <div class="line-small">
            <div class="xs12">
                @foreach($data as $v)
                    <div class="clearfix articlebox">
                        <div class="liuyan_a">
                        </div>
                        <div class="said_img">
                            <img src="{{asset($v->photo)}}" class="radius-circle" width="60px" height="60px" />
                            <div class="liuyan_t">
                                <span class="icon-user"></span>&nbsp;&nbsp;<a>{{$v->username}}</a>&nbsp;&nbsp;</span>
                                <span class="icon-paper-plane"></span>&nbsp;@date('Y-m-d H:i:s',$v->add_time)&nbsp;&nbsp;</span>
                                <span class="tag bg-dot">{{$v->from}}</span>&nbsp;&nbsp;<span class="icon-map-marker"></span>&nbsp;{{$v->ip}}
                            </div>
                            <div class="liuyan_c">
                                {{$v->content}}
                            </div>
                        </div>

                        <!--回复-->
                        @if($v->c_content != '')
                            <div class="f_liuyan">
                                <hr />
                                <div class="liuyan_a">
                                </div>
                                <div class="said_img">
                                    <img src="{{asset($v->c_photo)}}" class="radius-circle" width="60px" height="60px" />
                                    <div class="liuyan_t">
                                        <span class="icon-user"></span>&nbsp;&nbsp;管理员&nbsp;&nbsp;</span>
                                        <span class="icon-paper-plane"></span>&nbsp;&nbsp;@date('Y-m-d H:i:s',$v->c_time)&nbsp;&nbsp;
                                        <span>回复 @<a>{{$v->username}}</a> 中说到：</span>
                                    </div>
                                    <div class="liuyan_c">
                                        {{$v->c_content}}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <br />
                @endforeach
                <br />
                <div class="pages" style=" text-align: right;">
                    {!! $data->links() !!}
                </div>
                <br />
                <hr />
                {{csrf_field()}}
                <div class="panel border-sub">
                    <div class="panel-head border-sub bg-sub">
                        <h3>留  言</h3>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body">
                            <form action="{{route('add_message')}}" name="signupForm" id="message-form" method="post" class="form form-block">
                                <div class="form-group">
                                    <div class="field">
                                        <div class="input-group">
                                            <span class="addon">昵称</span>
                                            <input type="text" class="input" name="username" value="{{session('login_user.user_name')}}" readonly="readonly" placeholder="请输入昵称" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="field">
                                        <div class="input-group">
                                            <span class="addon">邮箱</span>
                                            <input type="text" class="input"  id="email" name="email" placeholder="请输入正确的邮箱地址" />
                                        </div>
                                    </div>
                                </div>
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
                                    <button class="button bg-blue button-big button-block" id="msg-submit"  data-code="{{url('captcha_check')}}" data-url="{{route('add_message')}}" data-href="{{route('message')}}" type="button">
                                        提 交</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <br />
            </div>
            <hr />
        </div>
        <br />
        <br />
        <br />
    </div>
@endsection
@section('footer')
    <script src="{{asset('static/home/email/completer.min.js')}}"></script>
    <script src="{{asset('static/home/js/message.js')}}"></script>
@endsection