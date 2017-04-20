@extends('admin.layout.base')
@section('header')
    <link rel="stylesheet" href="{{asset('static/admin/css/site.css')}}">
@endsection
@section('body')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content no-padding">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <p class="text-success"><a href="{{url('admin/index')}}" title="返回首页" class="tip-bottom"><i class="fa fa-home"></i> 首页</a> /
                                    <a href="{{url('admin/advert/index')}}" class="tip-bottom">广告管理</a></p>
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
                        <h5>编辑广告</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link"> <i class="fa fa-chevron-up"></i>
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
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" name="basic_validate" id="signupForm">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$data->id}}"/>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">广告标题</label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" placeholder="输入广告标题" class="form-control" value="{{$data->title}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">广告描述</label>
                                <div class="col-sm-6">
                                    <input type="text" name="desc"  placeholder="输入广告描述" class="form-control" value="{{$data->desc}}"></div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">广告链接</label>
                                <div class="col-sm-6">
                                    <input type="text" name="link" placeholder="输入广告链接" class="form-control" value="{{$data->link}}"></div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">广告图片</label>
                                <div class="col-sm-6">
                                    <div class="input-file-wrapper">
                                        <label>
                                            <input type="file" name="img" class="form-control"/>
                                            <span class="custorm-style">
                                                 <span class="left-button">上传图片</span>
                                                 <div class="right-text rightText">@substr($data->img_url,15)</div>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">状态</label>
                                <div class="col-sm-6">
                                    <div class="radio i-checks">
                                        <input type="radio" name='state' value="6" @if($data->state == '6') checked="checked" @endif/>
                                        开启
                                        <input type="radio" name='state' value="8" @if($data->state == '8') checked="checked" @endif />
                                        关闭
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">保存内容</button>
                                    <a class="btn btn-danger" href="{:U('Advert/index')}">取消</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script src="{{asset('static/admin/js/site.js')}}"></script>
@endsection