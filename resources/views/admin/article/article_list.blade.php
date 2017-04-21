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
                                    <a href="{{url('admin/article/article_list')}}" class="tip-bottom">文章管理</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{url('admin/article/article_add')}}" class="btn btn-primary">添加文章</a>
        <br />
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><i class="fa fa-tasks"></i> 文章管理</h5>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="long-tr">
                                <th width="4%">编号</th>
                                <th width="18%">标题</th>
                                <th>所属分类</th>
                                <th>文章封面</th>
                                <th>关键字</th>
                                <th>浏览量</th>
                                <th>创建时间</th>
                                <th>更新时间</th>
                                <th>文章类型</th>
                                <th>是否推荐</th>
                                <th width="15%">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $v)
                                <tr class="long-td">
                                    <td>{{$v->art_id}}</td>
                                    <td>{{$v->art_title}}</td>
                                    <td>
                                        <volist name="list1" id="vo1">
                                            <if condition="$vo1.cate_id eq $vo.cate_id ">
                                                {$vo1.cate_name}
                                            </if>
                                        </volist>
                                    </td>
                                    <td><img src="__ROOT__/Uploads/{$vo.photo}" style="height: 60px" /></td>
                                    <td>{$vo.a_keyword}</td>
                                    <td>{$vo.a_views}</td>
                                    <td>{$vo.create_time|date='Y-m-d H:i:s',###}</td>
                                    <td>{$vo.last_time|date='Y-m-d H:i:s',###}</td>
                                    <td>
                                        <if condition="$vo.a_type eq 0 "><span class="label label-info">转载</span></if>
                                        <if condition="$vo.a_type eq 1 "><span class="label label-primary">原创</span></if>
                                    </td>
                                    <td>
                                        <if condition="$vo.a_red eq 0 "><span class="label label-danger">否</span></if>
                                        <if condition="$vo.a_red eq 1 "><span class="label label-info">推荐</span></if>
                                    </td>
                                    <td>
                                        <a href="{:U('edit',array('a_id'=>$vo['a_id']))}" class="btn btn-primary btn-mini">
                                            <i class="fa fa-pencil"></i> 编辑</a>&nbsp;&nbsp;
                                        <a href="javascript:;" onclick="return del({$vo.a_id},{:I('p',1)});" class="btn btn-danger">
                                            <i class="fa fa-trash-o"></i> 删除</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pages" style=" text-align: right;">
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