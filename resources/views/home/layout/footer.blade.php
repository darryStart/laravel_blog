
<div class="container-layout bg-black">
    <div class="border-top padding-top foot">
        <div class="text-center">
            <ul class="nav nav-inline">
                <li><a>网站首页</a> </li>
                <li><a>技术反馈</a> </li>
                <li><a>留言反馈</a> </li>
                <li><a>联系方式</a> </li>
            </ul>
        </div>
        <div class="text-center height-big">
            {{config('site.site_copyright')}}&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; {!! config('site.site_keep_record') !!} &nbsp;&nbsp;&nbsp;</a>
            | &nbsp;&nbsp;&nbsp;<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1256135378'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1256135378' type='text/javascript'%3E%3C/script%3E"));</script>
        </div>
    </div>
</div>
</body>
</html>
@yield('footer')
