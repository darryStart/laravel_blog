@extends('home.layout.base')
@section('title',$title)
@section('body')
    <div class="xl12 xm8">
        <div class="line-small">
                <div class="xs12">
                    @foreach($new_art as $v)
                        <div class="clearfix articlebox">
                            <div class="detail_a">
                                @if($v->art_type == '6')
                                    <span class="tag bg-dot">原 创</span>&nbsp;&nbsp;
                                @else
                                    <span class="tag bg-green">转 载</span>&nbsp;&nbsp;
                                @endif

                                <a href="{{url('article',$v->art_id)}}" style="font-size: 16px;">{{$v->art_title}}</a>

                                <div class="a_tuijian">
                                    @if($v->art_red == '6')
                                        <img src="{{asset('static/home/images/tuijian.gif')}}" style="width:70px" />
                                    @endif
                                </div>
                            </div>
                            <div class="article">
                                <ul class="icourse-course">
                                    <li>
                                        <a href="{{url('article',$v->art_id)}}">
                                            <div class="icourse-img">
                                                <img src="{{asset($v->art_face)}}" onerror="this.src='{{asset('static/home/images/default.jpg')}}'" class="img" title="{$v.a_title}" width="100%" height="200px" />
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="remark">
                                    {{$v->art_remark}}
                                </div>
                            </div>
                            <div class="write">
                                <span class="icon-paper-plane"></span>&nbsp;
                                @date('Y-m-d H:i:s',$v->create_time)&nbsp;&nbsp;
                                作者：{{$v->art_writer}}&nbsp;&nbsp;
                                分类：[&nbsp;{{$v->art_cate->cate_name}}&nbsp;]
                                <span class="hidden-xs">&nbsp;&nbsp;点击：[&nbsp;{{$v->art_views}}&nbsp;]</span>
                            </div>
                            <div class="look-all">
                                <a href="{{url('article',$v->art_id)}}" class="button border-blue" role="button">查看全部</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <hr />
                <div class="pages">
                    {!! $new_art->links() !!}
                </div>
        </div>
        <br />
        <br />
        <br />
    </div>
@endsection