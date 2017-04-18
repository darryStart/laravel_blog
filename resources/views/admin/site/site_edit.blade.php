@extends('admin.layout.base')
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content no-padding">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="text-success"><a href="{{url('admin/index')}}" title="返回首页" class="tip-bottom"><i class="fa fa-home"></i> 首页</a> /
                                <a href="{{url('admin/site/site')}}" class="tip-bottom">网站管理</a> /
                                <a href="{{url('admin/site/site_add',[$data->site_id])}}" class="tip-bottom">编辑配置</a>
                            </p>
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
                    <h5>添加配置</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
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
                    <form class="form-horizontal" method="post" name="basic_validate" id="signupForm">
                        {{csrf_field()}}
                        <input type="hidden" name="site_id" value="{{$data->site_id}}"/>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">配置名称</label>
                            <div class="col-sm-6">
                                <input type="text" name="site_key_desc" value="{{$data->site_key_desc}}" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">配置字段名</label>
                            <div class="col-sm-6">
                                <input type="text" name="site_key" value="{{$data->site_key}}" class="form-control">
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">配置类型
                            </label>
                            <div class="col-sm-6">
                                <div class="radio i-checks">
                                    <label>
                                        <input type="radio" @if($data->site_type == '6') checked="checked" @endif value="6" name="site_type"> <i></i> 文字</label>
                                    <label>
                                        <input type="radio" @if($data->site_type == '8') checked="checked" @endif value="8" name="site_type"> <i></i> 图片</label>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">保存内容</button>
                                <a class="btn btn-white" href="{{url('admin/site/site_add')}}">取消</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection