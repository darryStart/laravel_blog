@extends('admin.layout.base')
@section('body')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>分类列表</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('admin/index')}}"><i class="fa fa-home"></i> 主页</a>
            </li>
            <li>
                <a>文章管理</a>
            </li>
            <li>
                <strong>分类列表</strong>
            </li>
        </ol>
    </div>
</div>
<br />

<a href="{{url('admin/cate/create')}}" class="btn btn-primary">添加分类</a>
<br />
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
                        <tr class="long-td">
                            <td>{$vo.cate_id}</td>
                            <td>{$vo.cate_name}</td>
                            <td>{$vo.orderby}</td>
                            <td>
                                <a href="{:U('Article/edittype',array('cate_id'=>$vo['cate_id']))}" class="btn btn-primary btn-mini">
                                    <i class="fa fa-pencil"></i> 编辑</a>&nbsp;&nbsp;
                                <a href="javascript:;" onclick="return deltype({$vo.cate_id},{:I('p',1)});" class="btn btn-danger">
                                    <i class="fa fa-trash-o"></i> 删除</a>
                            </td>
                        </tr>
                    </foreach>
                    </tbody>
                </table>
                <div class="pages" style=" text-align: right;">
                    {$page}
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function deltype(cate_id,p){
        layer.confirm('删除后将不可恢复，你确定要删除吗？', {icon: 3}, function(index){
            layer.close(index);
            window.location.href="__URL__/deltype/cate_id/"+cate_id+"/p/"+p+"";
        });
    }
</script>
@endsection