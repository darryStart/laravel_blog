@extends('home.layout.base')
@section('title','文章正文')
@section('body')
    <div class="xl12 xm8">
        <div class="line-small">
            <div class="xs12">
                <div class="a_title">{{$data->art_title}}</div>
                <div class="a-write">时间：&nbsp;@date('Y-m-d',$data->create_time)&nbsp;&nbsp;作者：<a>{{$data->art_writer}}</a>&nbsp;&nbsp;阅读：（{{$data->art_views}}）</div>
                <div class="a-content"  style="width:700px">
                    {!! $data->art_content  !!}
                </div>
                <div class="a-write hidden-xs">
                    @if($data->art_type == '6')
                        本文为原创，转载请注明出处:&nbsp;&nbsp;<a>{{Request::fullUrl()}}</a>
                    @endif
                    &nbsp;&nbsp关键词：&nbsp;{{$data->art_keyword?$data->art_keyword:'暂无标签'}}
                </div>
                <br />
                <div class="bdsharebuttonbox fenxiang">
                    <a class="bds_more" href="#" data-cmd="more"></a>
                    <a title="分享到QQ空间" class="bds_qzone" href="#" data-cmd="qzone"></a>
                    <a title="分享到腾讯微博" class="bds_tqq" href="#" data-cmd="tqq"></a>
                    <a title="分享到微信" class="bds_weixin" href="#" data-cmd="weixin"></a>
                    <a title="分享到百度贴吧" class="bds_tieba" href="#" data-cmd="tieba"></a>
                    <a title="分享到百度云收藏" class="bds_bdysc" href="#" data-cmd="bdysc"></a>
                    <a title="分享到QQ好友" class="bds_sqq" href="#" data-cmd="sqq"></a>
                </div>
            </div>
            <hr />
            <div class="a-up">
                <p>上一篇：
                    @if($pre)
                        <a title='{{$pre->art_title}}' href="{{route('show_article',$pre->art_id)}}">{{$pre->art_title}}</a>
                        @else
                        <a title='没有了'>&nbsp;没有了</a>
                    @endif
                </p>
            </div>
            <div class="a-down">
                <p>下一篇：
                    @if($next)
                        <a title='{{$next->art_title}}' href="{{route('show_article',$next->art_id)}}">{{$next->art_title}}</a>
                    @else
                        <a title='没有了'>&nbsp;没有了</a>
                    @endif
                </p>
            </div>
        </div>
        <br />
        <br />
        <br />
    </div>
@endsection
@section('footer')
    <script>
        window._bd_share_config = {
            "common": {
                "bdSnsKey": {},
                "bdText": "{{config('site.site_name')}}的分享",
                "bdMini": "2",
                "bdMiniList": false,
                "bdPic": "http://tianjianlong.com.cn//Public/Img/logo.png",
                "bdStyle": "1",
                "bdSize": "24"
            },
            "share": {}
        };
        with(document)
            0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
    </script>
@endsection