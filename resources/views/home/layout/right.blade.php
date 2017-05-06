
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
                        <a class="float-left" href="{{url('article',$v->art_id)}}"><img src="{{asset($v->art_face)}}" onerror="this.src='{{asset('static/home/images/default.jpg')}}'" class="radius"></a>
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
                <li><a href="#tab-css2">最多点击</a> </li>
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
                <li style="margin-bottom:8px"><h4>
                        <a href="/Article/index/a_id/61.html"><span class="icon-leaf"></span> 关于ThinkPHP下使用Uploadify插件 仅有火狐提示HTTP Error (302)错误的解决办法(26299)</a>
                    </h4></li><li style="margin-bottom:8px"><h4>
                        <a href="/Article/index/a_id/66.html"><span class="icon-leaf"></span> 解决PHPExcel导出长数字末尾几位数为0的问题(8278)</a>
                    </h4></li><li style="margin-bottom:8px"><h4>
                        <a href="/Article/index/a_id/72.html"><span class="icon-leaf"></span> APICloud微信、QQ登录分享实现方法及注意事项(8093)</a>
                    </h4></li><li style="margin-bottom:8px"><h4>
                        <a href="/Article/index/a_id/56.html"><span class="icon-leaf"></span> Sublime text 3的安装与使用方法(1565)</a>
                    </h4></li><li style="margin-bottom:8px"><h4>
                        <a href="/Article/index/a_id/46.html"><span class="icon-leaf"></span> PHP人民币金额数字转中文大写的函数代码(1434)</a>
                    </h4></li><li style="margin-bottom:8px"><h4>
                        <a href="/Article/index/a_id/13.html"><span class="icon-leaf"></span> 字号与像素的转换(1287)</a>
                    </h4></li><li style="margin-bottom:8px"><h4>
                        <a href="/Article/index/a_id/26.html"><span class="icon-leaf"></span> 基于腾讯手Q样式规范Frozen UI(1251)</a>
                    </h4></li><li style="margin-bottom:8px"><h4>
                        <a href="/Article/index/a_id/57.html"><span class="icon-leaf"></span> 代码高亮插件SyntaxHighlighter(1225)</a>
                    </h4></li><li style="margin-bottom:8px"><h4>
                        <a href="/Article/index/a_id/5.html"><span class="icon-leaf"></span> PHP初学者必须掌握的10个知识点(1166)</a>
                    </h4></li><li style="margin-bottom:8px"><h4>
                        <a href="/Article/index/a_id/58.html"><span class="icon-leaf"></span> Apache开启伪静态(1153)</a>
                    </h4></li><li style="margin-bottom:8px"><h4>
                        <a href="/Article/index/a_id/4.html"><span class="icon-leaf"></span> Thinkphp常用配置(1144)</a>
                    </h4></li><li style="margin-bottom:8px"><h4>
                        <a href="/Article/index/a_id/52.html"><span class="icon-leaf"></span> PHP实现时间轴函数(1130)</a>
                    </h4></li>			</div>
            <div class="tab-panel" id="tab-units2">
                <div class="panel-body">
                    正在开发中，敬请期待。。。。
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
