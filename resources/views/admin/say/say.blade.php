@extends('admin.layout.base')
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content no-padding">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="text-success"><a href="{{route('admin_index')}}" title="返回首页" class="tip-bottom"><i class="fa fa-home"></i> 首页</a> /
                                <a href="{{route('say_list')}}" class="current">链接管理</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{csrf_field()}}
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><i class="fa fa-tasks"></i> 说说列表</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-bordered">
                        <thead>
                        <tr class="long-tr">
                            <th width="10%">编号</th>
                            <th width="35%">内容</th>
                            <th width="10%">添加日期</th>
                            <th width="10%">状态</th>
                            <th width="10%">发布地址</th>
                            <th width="10%">发布系统</th>
                            <th width="15%">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $v)
                            <tr class="long-td">
                                <td>{{$v->say_id}}</td>
                                <td>{{mb_substr($v->say_content,0,32)}}....</td>
                                <td>@date('Y-m-d H:i:s',$v->create_time)</td>
                                <td class="state-td">
                                    @if($v->state == 6)
                                        <span class="label label-primary" about="{{$v->say_id}}" url="{{route('say_state')}}">显示</span>
                                    @else
                                        <span class="label label-danger" about="{{$v->say_id}}" url="{{route('say_state')}}">不显示</span>
                                    @endif
                                </td>
                                <td>
                                    <span class="label label-success">{{$v->create_city}}</span>
                                </td>
                                <td>
                                        <span class="label label-info">{{$v->create_os}}</span>
                                </td>
                                <td>
                                    <a href="javascript:;" onclick="return del({{$v->say_id}},'say_del')" class="btn btn-danger">
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
@endsection
@section('footer')
    <script src="{{asset('static/admin/js/advert.js')}}"></script>
@endsection