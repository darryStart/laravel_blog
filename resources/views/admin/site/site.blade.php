@extends('admin.layout.base')
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
                        <div class="form-group">
                            <label class="col-sm-2 control-label">网站名称</label>
                            <div class="col-sm-6">
                                <input type="text" name="sitename" value="" placeholder="输入网站名称" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">URL地址</label>
                            <div class="col-sm-6">
                                <input type="text" name="siteurl" value="{:C('siteurl')}" placeholder="输入网站绑定的URL地址" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">SEO关键字</label>
                            <div class="col-sm-6">
                                <input type="text" name="keyword" value="{:C('keyword')}" placeholder="输入SEO关键字" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">网站描述信息</label>
                            <div class="col-sm-6">
                                <input type="text" name="content" value="{:C('content')}" placeholder="输入网站描述信息" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">联系QQ</label>
                            <div class="col-sm-6">
                                <input type="text" name="qq" value="{:C('qq')}" placeholder="输入联系QQ" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">联系电话</label>
                            <div class="col-sm-6">
                                <input type="text" name="linktel" value="{:C('linktel')}" placeholder="输入联系电话" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">版权信息</label>
                            <div class="col-sm-6">
                                <textarea type="text" name="address"  placeholder="输入版权信息" class="form-control">{:C('address')}</textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">备案信息</label>
                            <div class="col-sm-6">
                                <textarea type="text" name="copyright" placeholder="输入网址的备案信息" class="form-control">{:C('copyright')}</textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
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