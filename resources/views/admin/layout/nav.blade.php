<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle" src="{{asset(session('admin_session.userimg'))}}" width="70px" height="70px"/></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong>{{session('admin_session.user')}}</strong></span>
                                <span class="text-muted text-xs block">
                                    @if(session('admin_session.role') == '10')
                                        超级管理员
                                    @elseif(session('admin_sesion') != '10')
                                        普通管理员
                                    @endif
                                    <b class="caret"></b></span>
                                </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="{{url('admin/edit_pwd')}}">修改密码</a>
                            </li>
                            <li><a href="{{url('admin/clear')}}">清除缓存</a>
                            </li>
                            <li><a href="{{url('Site/index')}}">设置</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="javascript:;" id="logout">退出系统</a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">D+
                    </div>
                </li>
                <li>
                    <li @if(strstr(Request::fullUrl(),route('admin_index'))) class="active" @endif>
                        <a href="{{route('admin_index') }}">
                            <i class="icon fa fa-home"></i><span>首页</span>
                            <span class="label label-danger pull-right">NEW</span>
                        </a>
                    </li>

                    <li class="submenu
                        @if(strstr(Request::fullUrl(),route('site')) or strstr(Request::fullUrl(),route('site_add')) or strstr(Request::fullUrl(),route('site_list')) or strstr(Request::fullUrl(),route('site_edit')))
                            active
                        @endif">
                        <a><i class="icon fa fa-envelope"></i> <span>网站管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li
                            @if(strstr(Request::fullUrl(),route('site')))
                                class="active"
                            @endif
                            ><a href="{{url('admin/site/index')}}">网站设置</a></li>
                            <li
                            @if(strstr(Request::fullUrl(),route('site_add')) or strstr(Request::fullUrl(),route('site_list')) or strstr(Request::fullUrl(),route('site_edit')))
                             class="active"
                            @endif
                            ><a href="{{url('admin/site/site_list')}}">设置列表</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="icon fa fa-gears"></i> <span>系统管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="/index.php?s=/Admin/system/role.html">角色管理</a></li>
                            <li><a href="/index.php?s=/Admin/system/userlist.html">用户管理</a></li>
                            <li><a href="/index.php?s=/Admin/system/indexnotice.html">系统消息</a></li>
                            <li><a href="/index.php?s=/Admin/system/carousel_list.html">轮播管理</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="icon fa fa-flask"></i> <span>新闻管理</span>
                            <span class="fa arrow">
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="/index.php?s=/Admin/news/index.html">新闻管理</a></li>
                            <li><a href="/index.php?s=/Admin/news/newscate.html">新闻分类</a></li>
                        </ul>
                    </li>
                    <li class="submenu @if(strstr(Request::fullUrl(),route('advert'))  or strstr(Request::fullUrl(),route('advert_add')) or strstr(Request::fullUrl(),route('advert_edit'))) active @endif">
                        <a href="#"><i class="icon fa fa-cloud"></i> <span>广告管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li @if(strstr(Request::fullUrl(),route('advert'))  or strstr(Request::fullUrl(),route('advert_add')) or strstr(Request::fullUrl(),route('advert_edit'))) class="active" @endif><a href="{{url('admin/advert/index')}}">广告管理</a></li>
                        </ul>
                    </li>
                    <li class="submenu @if(strstr(Request::fullUrl(),route('article')) or strstr(Request::fullUrl(),route('article_add')) or strstr(Request::fullUrl(),route('article_edit')) or strstr(Request::fullUrl(),route('categroy')) or strstr(Request::fullUrl(),route('categroy_add')) or strstr(Request::fullUrl(),route('categroy_edit'))) active @endif">
                        <a href="#"><i class="icon fa fa-paste"></i> <span>文章管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li @if(strstr(Request::fullUrl(),route('categroy')) or strstr(Request::fullUrl(),route('categroy_add')) or strstr(Request::fullUrl(),route('categroy_edit'))) class="active" @endif ><a href="{{url('admin/article/categroy_list')}}">文章分类</a></li>
                            <li @if(strstr(Request::fullUrl(),route('article')) or strstr(Request::fullUrl(),route('article_add')) or strstr(Request::fullUrl(),route('article_edit'))) class="active" @endif><a href="{{url('admin/article/article_list')}}">文章管理</a></li>
                        </ul>
                    </li>
                    <li class="submenu @if(strstr(Request::fullUrl(),route('say_list'))) active @endif">
                        <a><i class="icon fa fa-comments"></i> <span>说说管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li @if(strstr(Request::fullUrl(),route('say_list'))) class='active' @endif><a href="{{route('say_list')}}">说说管理</a></li>
                        </ul>
                    </li>
                    <li class="submenu @if(strstr(Request::fullUrl(),route('message_list'))) active @endif">
                        <a href="#"><i class="icon fa fa-thumbs-up"></i> <span>留言管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li @if(strstr(Request::fullUrl(),route('message_list'))) class="active" @endif><a href="{{route('message_list')}}">留言管理</a></li>
                        </ul>
                    </li>
                    <li class="submenu @if(strstr(Request::fullUrl(),route('link'))  or strstr(Request::fullUrl(),route('link_add')) or strstr(Request::fullUrl(),route('link_edit'))) active @endif"">
                        <a href="#"><i class="icon fa fa-link"></i> <span>链接管理</span><span class="fa arrow"></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{route('link')}}">链接管理</a></li>
                        </ul>
                    </li>
                </li>
            </ul>
        </div>
    </nav>


    <script type="text/javascript">
        $(document).ready(function () {
            $("#logout").click(function () {
                layer.confirm('你确定要退出吗？', {icon: 3}, function (index) {
                    layer.close(index);
                    window.location.href = "{{url('admin/logout')}}";
                });
            });
        });


    </script>
    <div id="page-wrapper" class="gray-bg dashbard-1">