@extends('admin.layout.base')
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content no-padding">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="text-success"><a href="{{route('admin_index')}}" title="返回首页" class="tip-bottom"><i class="fa fa-home"></i> 首页</a> /
                                <a href="{{route('message_list')}}" class="current">留言管理</a></p>
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
                    <h5><i class="fa fa-tasks"></i> 留言列表</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-bordered">
                        <thead>
                        <tr class="long-tr">
                            <th width="5%">编号</th>
                            <th width="10%">昵称</th>
                            <th>留言内容</th>
                            <th width="15%">留言日期</th>
                            <th width="10%">来自</th>
                            <th width="12%">状态</th>
                            <th width="20%">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $v)
                            <tr class="long-td">
                                <td>{{$v->msg_id}}</td>
                                <td>{{$v->username}}</td>
                                <td style="text-align:left">{{mb_substr($v->content,0,64)}}...</td>
                                <td>@date('Y-m-d H:i:s',$v->add_time)</td>
                                <td>{{$v->ip}}</td>
                                <td>
                                    @if($v->c_time)
                                        <span class="label label-primary">已回复</span>
                                    @else
                                        <span class="label label-danger">未回复</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('reply_message',['msg_id' => $v->msg_id])}}" class="btn btn-primary">
                                        <i class="fa fa-pencil"></i> 回复</a>&nbsp;&nbsp;
                                    <a href="javascript:;" onclick="return del({{$v->msg_id}},'message_del');" class="btn btn-danger">
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