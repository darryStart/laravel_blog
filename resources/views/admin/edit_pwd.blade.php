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
                                    <a href="{{url('admin/edit_pwd')}}" class="tip-bottom">修改密码</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>修改密码</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="error_notice">
                        @if(count($errors)>0)
                            <div class="mark">
                                @if(is_object($errors))
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                @else
                                    <li>{{$errors}}</li>
                                @endif
                            </div>
                        @endif
                    </div>
                    <div class="ibox-content">

                        <form class="form-horizontal" method="post" name="basic_validate" id="basic_validate">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">账号</label>
                                <div class="col-sm-6">
                                    <input type="text" name="user" value="{{session('admin_session.user')}}" readonly placeholder="账号" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">原密码</label>
                                <div class="col-sm-6">
                                    <input type="password" name="old_pwd" placeholder="原密码" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">新密码</label>
                                <div class="col-sm-6">
                                    <input type="password" name="password" placeholder="新密码" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">重复新密码</label>
                                <div class="col-sm-6">
                                    <input type="password" name="password_confirmation" placeholder="重复新密码" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">保存内容</button>
                                    <a class="btn btn-white" href="{{url('admin/edit_pwd')}}">取消</a>
                                </div>
                            </div>
                        </form>


                    </div>
                    </div>

            </div>
        </div>
    </div>
@endsection