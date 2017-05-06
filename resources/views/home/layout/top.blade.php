<div style="display: none;" id="rocket-to-top">
    <div style="opacity:0;display: block;" class="level-2"></div>
    <div class="level-3"></div>
</div>
<div class="demo-nav padding-big-top fixed">
    <div class="container padding-top padding-bottom">
        <div class="line">
            <div class="xl12 xs3 xm3 xb2">
                <button class="button icon-navicon float-right" data-target="#header-demo"></button>
                <a href="/">
                    <img src="{{asset(config('site.site_logo'))}}" class="ring-hover"/>
                </a>
            </div>
            <div class=" xl12 xs9 xm9 xb10 nav-navicon" id="header-demo">
                <div class="xs8 xm6 xb8 padding-small">
                    <ul class="nav nav-menu nav-inline nav-big">
                        <li class="l_active"><a href="{{url('/')}}">首页</a></li>
                        <li>
                            <a href="#">分类<span class="arrow"></span></a>
                            <ul class="drop-menu">
                                @foreach($cate as $v)
                                <li>
                                    <a href="{{route('home',['cate' => $v->cate_id])}}">{{$v->cate_name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="/said.html">说说</a></li>
                        <li><a href="/liuyan.html">留言板</a></li>
                        <li><a href="/friend.html">访客</a></li>
                        <li><a href="/about.html">关于我</a></li>
                    </ul>
                </div>
                <div class="xs4 xm3 xb4">
                    <form>
                        <div class="input-group padding-little-top">
                            <input type="text" class="input border-main" name="keywords" size="30"
                                   placeholder="请输入关键词"/>
                            <span class="addbtn"><button type="button"
                                                         class="button bg-main icon-search"></button></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main_visual">
    <div class="flicking_con">
        @foreach($advert as $k => $v)
            <a>{{$k}}</a>
        @endforeach
    </div>
    <div class="main_image">
        <ul>
            @foreach($advert as $v)
                <li><span class="img"><img src="{{asset($v->img_url)}}"  width="100%" height="400px"/></span></li>
            @endforeach
        </ul>
        <a href="javascript:;" id="btn_prev"></a>
        <a href="javascript:;" id="btn_next"></a>
    </div>
</div>
<br/>





