@extends('admin.layout.base')
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content no-padding">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="text-success"><a href="{{route('admin_index')}}" title="返回首页" class="tip-bottom"><i class="fa fa-home"></i> 首页</a> /
                                <a class="tip-bottom">链接管理</a> /<a href="{{route('link_add')}}" class="current">链接管理</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{csrf_field()}}
    <a href="{{route('link_add')}}" class="btn btn-primary">添加友链</a>
    <br />
    <br />
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><i class="fa fa-tasks"></i> 链接列表</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-bordered">
                        <thead>
                        <tr class="long-tr">
                            <th>名称</th>
                            <th>域名</th>
                            <th width="15%">添加日期</th>
                            <th width="15%">更新日期</th>
                            <th>排序</th>
                            <th>状态</th>
                            <th width="20%">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $v)
                            <tr class="long-td">
                                <td>{{$v->link_name}}</td>
                                <td><a href="{{$v->link_url}}" target="_blank">{{$v->link_url}}</a></td>
                                <td>@date('Y-m-d',$v->create_time)</td>
                                <td>@date('Y-m-d',$v->update_time)</td>
                                <td>{{$v->order_num}}</td>
                                <td>
                                    @if($v->state == 6)
                                        <span class="label label-primary" about="{{$v->id}}" url="{{route('link_state')}}">开启</span>
                                    @else
                                        <span class="label label-danger" about="{{$v->id}}" url="{{route('link_state')}}">关闭</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('link_edit',$v->id)}}" class="btn btn-primary">
                                        <i class="fa fa-pencil"></i> 编辑</a>&nbsp;&nbsp;
                                    <a href="javascript:;" onclick="return del({{$v->id}},'link_del');" class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i> 删除</a>
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
@endsection
@section('footer')
    <script src="{{asset('static/admin/js/advert.js')}}"></script>
@endsection