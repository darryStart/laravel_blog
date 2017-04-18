<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            {{--<form role="search" class="navbar-form-custom" method="post" action="search_results.html">--}}
                {{--<div class="form-group">--}}
                    {{--<input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">--}}
                {{--</div>--}}
            {{--</form>--}}
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
				<span class="m-r-sm text-muted welcome-message">
					<a href="{:U('Index/index')}" title="返回首页"><i class="fa fa-home"></i></a>欢迎使用{{config('site.site_name','博客')}}管理系统
					{{--<span class="label label-danger pull-right">{$Os}</span>--}}
				</span>
            </li>
            {{--<li class="hidden-xs">--}}
                {{--<a href="http://tianjianlong.com.cn" class="J_menuItem" data-index="0"><i class="fa fa-cart-arrow-down"></i> 购买</a>--}}
            {{--</li>--}}
            <li>
                <a href="javascript:;"  id="loginout">
                    <i class="fa fa-sign-out"></i> 退出
                </a>
            </li>
        </ul>
    </nav>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#loginout").click(function(){
            layer.confirm('你确定要退出吗？', {icon: 3}, function(index){
                layer.close(index);
                location.href="{{url('admin/logout')}}";
            });
        });
    });
</script>