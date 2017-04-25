@extends('admin.layout.base')
@section('body')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content no-padding">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <p class="text-success"><a href="{{url('admin/index')}}" title="返回首页" class="tip-bottom"><i class="fa fa-home"></i> 首页</a> /
                                    <a href="{{url('admin/advert/index')}}" class="tip-bottom">广告管理</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{url('admin/advert/add')}}" class="btn btn-primary">添加广告</a>
        <br />
        <br />
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><i class="fa fa-tasks"></i> 广告管理</h5>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="long-tr">
                                <th>图片</th>
                                <th>标题</th>
                                <th>关键字</th>
                                <th>链接</th>
                                <th>排序</th>
                                <th>点击次数</th>
                                <th>添加时间</th>
                                <th>更新时间</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{csrf_field()}}
                            @foreach($data as $v)
                                <tr class="long-td">
                                    <td><a href="/{{$v->img_url}}" target="_blank"><img src="/{{$v->img_url}}" style="width: 100px;height: 60px" /></a></td>
                                    <td>{{$v->title}}</td>
                                    <td>{{$v->desc}}</td>
                                    <td>{{$v->link}}</td>
                                    <td>{{$v->order_num}}</td>
                                    <td>{{$v->click_count}}</td>
                                    <td>@date('Y-m-d',$v->add_time)</td>
                                    <td>@date('Y-m-d',$v->update_time)</td>
                                    <td class="state-td">
                                        @if($v->state == 6)
                                            <span class="label label-primary" about="{{$v->id}}" url="{{url('admin/advert/state')}}">开启</span>
                                        @else
                                            <span class="label label-danger" about="{{$v->id}}" url="{{url('admin/advert/state')}}">关闭</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{url('admin/advert/edit',$v->id)}}" class="btn btn-primary btn-mini">
                                            <i class="fa fa-pencil"></i> 编辑</a>&nbsp;&nbsp;
                                        <a href="javascript:;" onclick="return del({{$v->id}},'del');" class="btn btn-danger">
                                            <i class="fa fa-trash-o"></i> 删除
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pages" style=" text-align: center;">
                            {!! $data->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script src="{{asset('static/admin/js/advert.js')}}"></script>
@endsection