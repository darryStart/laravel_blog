@extends('admin.layout.base')
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content no-padding">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="text-success"><a href="{{url('admin/index')}}" title="返回首页" class="tip-bottom"><i class="fa fa-home"></i> 首页</a> /
                                <a href="{{route('link')}}" class="tip-bottom">链接管理</a>
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
                    <form class="form-horizontal" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">名称</label>
                            <div class="col-sm-6">
                                <input type="text" name="link_name" class="form-control" value="{{$data->link_name}}">

                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">域名</label>
                            <div class="col-sm-6">
                                <input type="text" name="link_url" class="form-control" value="{{$data->link_url}}">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">开启状态
                            </label>
                            <div class="col-sm-6">
                                <div class="radio i-checks">
                                    <label>
                                        <input type="radio"  @if($data->state == '6') checked="checked" @endif  value="6" name="state"> <i></i> 开启</label>
                                    <label>
                                        <input type="radio" @if($data->state == '8') checked="checked" @endif value="8" name="state"> <i></i> 关闭</label>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">排序</label>
                            <div class="col-sm-6">
                                <input type="text" name="order_num" class="form-control" value="{{$data->order_num}}">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">保存内容</button>
                                <a class="btn btn-danger" href="{{route('site_edit',[$data->id])}}">取消</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection