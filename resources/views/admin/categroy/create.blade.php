@extends('admin.layout.base')
@section('body')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>添加分类</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('admin.index')}}"><i class="fa fa-home"></i> 主页</a>
                </li>
                <li>
                    <a>文章管理</a>
                </li>
                <li>
                    <a>文章分类</a>
                </li>
                <li>
                    <strong>添加分类</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">

                <div class="ibox-title">
                    <div>
                        @if(count($errors)>0)
                            <div class="mark">
                                @if(is_object($errors))
                                    $errors->first();
                                @else
                                    <p>{{$errors}}</p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
                <div class="ibox-content">
                    <form action="{{url('admin/cate')}}" method="post" class="form-horizontal" id="signupForm" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">分类名称</label>
                            <div class="col-sm-6">
                                <input type="text" name="cate_name" placeholder="输入分类名称" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">排序</label>
                            <div class="col-sm-6">
                                <input type="text" name="orderby" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">保存信息</button>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-danger" href="{{url('admin/cate')}}">取消</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection