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
                                    <a href="{{url('admin/article/article_list')}}" class="tip-bottom">文章分类管理</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{url('admin/article/categroy_add')}}" class="btn btn-primary">添加分类</a>
        <br />
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><i class="fa fa-tasks"></i> 分类管理</h5>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="long-tr">
                                    <th width="5%">编号</th>
                                    <th>分类名称</th>
                                    <th>排序</th>
                                    <th width="25%">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <foreach name="list" item="vo">
                                @foreach($data as $v)
                                    <tr class="long-td">
                                        <td>{{$v->cate_id}}</td>
                                        <td>{{$v->cate_name}}</td>
                                        <td>{{$v->order_num}}</td>
                                        <td>
                                            <a href="{{url('admin/article/categroy_edit',$v->cate_id)}}" class="btn btn-primary btn-mini">
                                                <i class="fa fa-pencil"></i> 编辑</a>&nbsp;&nbsp;
                                            <a href="javascript:;" onclick="return del({{$v->cate_id}},'categroy_del')" class="btn btn-danger">
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
    </div>
@endsection
@section('footer')
    <script src="{{asset('static/admin/js/advert.js')}}"></script>
@endsection