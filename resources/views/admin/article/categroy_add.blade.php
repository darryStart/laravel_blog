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
                                    <a href="{{url('admin/article/categroy_list')}}" class="tip-bottom">分类管理</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="error_notice">
                        @if(count($errors) > 0)
                            <div class="mark">
                                @if(is_object($errors))
                                    @foreach($errors->all() as $error)
                                        <li class="error_notice_p">{{$error}}</li>
                                    @endforeach
                                @else
                                    <li class="error_notice_p">{{$errors}}</li>
                                @endif
                            </div>
                        @elseif(session('success'))
                            <div class="mark">
                                <li class="success_notice_p">{{session('success')}}</li>
                            </div>
                        @endif
                    </div>
                    <div class="ibox-content">
                        <form method="post" class="form-horizontal" id="signupForm" >
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">分类名称</label>
                                <div class="col-sm-6">
                                    <input type="text" name="cate_name" placeholder="输入分类名称" class="form-control" value="{{old('cate_name')}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">排序</label>
                                <div class="col-sm-6">
                                    <input type="text" name="order_num" class="form-control" value="{{old('order_num')}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">保存信息</button>&nbsp;&nbsp;&nbsp;
                                    <a class="btn btn-danger" href="{{url('admin.article.categroy_add')}}">取消</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection