@extends('admin.layout.base')
@section('header')
    <link rel="stylesheet" href="{{asset('static/admin/css/site.css')}}">
@endsection
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content no-padding">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="text-success"><a href="{:U('Index/index')}" title="返回首页" class="tip-bottom"><i class="fa fa-home"></i> 首页</a> /
                                <a href="" class="tip-bottom">网站管理</a> /<a href="{{url('admin/site/site')}}" class="current">网站设置</a></p>
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
                    <h5>网站设置</h5>
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
                    <form id="form-wizard" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{csrf_field()}}
                        @foreach($site_data as $v)
                            <div class="form-group">
                                <label class="col-sm-2 control-label">{{$v->site_key_desc}}</label>
                                <div class="col-sm-6">
                                    @if($v->site_type  == '8')
                                        <div class="input-file-wrapper">
                                             <label>
                                                 <input type="file" name="{{$v->site_key}}" class="form-control"/>
                                                 <span class="custorm-style">
                                                     <span class="left-button">上传图片</span>
                                                     <div class="right-text rightText">@substr($v->site_value,13)</div>
                                                 </span>
                                             </label>
                                        </div>
                                    @else
                                        <input type="text" name="{{$v->site_key}}" value="{{$v->site_value}}" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                        @endforeach
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">保存信息</button>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-danger" href="{{url('admin/site/site')}}">取消</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src="{{asset('static/admin/js/site.js')}}"></script>
@endsection