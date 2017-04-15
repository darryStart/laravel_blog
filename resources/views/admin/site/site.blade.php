@extends('admin.layout.base')
@section('header')
<style>
    .site-file {
        position: relative;
        display: inline-block;
        background: #D0EEFF;
        border: 1px solid #99D3F5;
        border-radius: 4px;
        padding: 4px 12px;
        overflow: hidden;
        color: #1E88C7;
        text-decoration: none;
        text-indent: 0;
        line-height: 20px;
    }
    .site-file input {
        position: absolute;
        font-size: 100px;
        right: 0;
        top: 0;
        opacity: 0;
    }
    .site-file:hover {
        background: #AADFFD;
        border-color: #78C3F3;
        color: #004974;
        text-decoration: none;
    }
</style>
@endsection
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content no-padding">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="text-success"><a href="{:U('Index/index')}" title="返回首页" class="tip-bottom"><i class="fa fa-home"></i> 首页</a> /
                                <a href="" class="tip-bottom">网站管理</a> /<a href="{:U('Site/index')}" class="current">网站设置</a></p>
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
                <div class="ibox-content">
                    <form id="form-wizard" action="{:U('Site/index')}" method="post" class="form-horizontal">
                        {{csrf_field()}}
                        @foreach($site_data as $v)
                            <div class="form-group">
                                <label class="col-sm-2 control-label">{{$v->site_key_desc}}</label>
                                <div class="col-sm-6">
                                    @if($v->site_type  == '8')
                                        <a href="javascript:;" class="site-file">选择文件
                                            <input type="file" name="{{$v->site_key}}" value="{{$v->site_value}}" class="form-control">
                                        </a>

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
                                <a class="btn btn-danger" href="{:U('Index/index')}">取消</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection