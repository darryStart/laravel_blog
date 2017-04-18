@extends('admin.layout.base')
@section('header')
    <style>

    </style>
@endsection
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content no-padding">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="text-success"><a href="{{url('admin/index')}}" title="返回首页" class="tip-bottom"><i class="fa fa-home"></i> 首页</a> /
                                <a class="tip-bottom">网站管理</a> /<a href="{{url('admin/site/site_list')}}" class="current">配置列表</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br />
    <a href="{{url('admin/site/site_add')}}" class="btn btn-primary">添加配置</a>
    <br />
    <br />
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><i class="fa fa-tasks"></i> 配置列表</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-bordered">
                        <thead>
                        <tr class="long-tr">
                            <th width="7%">配置编号</th>
                            <th>配置名称</th>
                            <th>配置字段</th>
                            <th width="20%">图文类型</th>
                            <th width="20%">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $v)
                            <tr class="long-td">
                                <td>{{$v->site_id}}</td>
                                <td>{{$v->site_key_desc}}</td>
                                <td>{{$v->site_key}}</td>
                                <td>
                                    @if($v->site_type == 6)
                                        <span class="label label-primary">文字</span>
                                    @else
                                        <span class="label label-danger">图片</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{url('admin/site/site_edit', $v->site_id)}}" class="btn btn-primary">
                                        <i class="fa fa-pencil"></i> 编辑</a>&nbsp;&nbsp;
                                    <a href="javascript:;" onclick="return del({{$v->site_id}});" class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i> 删除</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div style=" text-align: center;">
                        {!! $data->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    <script type="text/javascript">
        function del(s_id){
            layer.confirm('删除后将不可恢复，你确定要删除吗？', {icon: 3}, function(index){
                layer.close(index);
                window.location.href= '/admin/site/site_del/'+s_id;
            });
        }
    </script>
@endsection


