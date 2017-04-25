@extends('admin.layout.base')
@section('header')
    <link rel="stylesheet" href="{{asset('static/admin/css/site.css')}}">
    <link rel="stylesheet" href="{{asset('static/Common/js/uploadify/uploadify.css')}}">
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
                                    <a href="{{url('admin/article/article_list')}}" class="tip-bottom">文章管理</a></p>
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
                        <form class="form-horizontal" method="post" name="basic_validate" id="signupForm" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="art_id" value="{{$data->art_id}}"/>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">文章标题</label>
                                <div class="col-sm-6">
                                    <input type="text" name="art_title" placeholder="输入文章标题" class="form-control" value="{{$data->art_title}}">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">所属分类</label>
                                <div class="col-sm-6">
                                    <select name="cate_id" class="form-control m-b chosen-select">
                                        @foreach($cate as $v)
                                            <option value="{{$v->cate_id}}" @if($data->cate_id == $v->cate_id) selected="selected" @endif>{{$v->cate_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">关键字</label>
                                <div class="col-sm-6">
                                    <input type="text" name="art_keyword"  placeholder="输入文章关键字" value="{{$data->art_keyword}}" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">描述</label>
                                <div class="col-sm-6">
                                    <textarea type="text" rows="5" name="art_remark" placeholder="输入文章描述" class="form-control">{{$data->art_remark}}</textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">文章封面 </label>
                                <div class="col-sm-6">
                                    <div class="input-file-wrapper">
                                        <label>
                                            <input type="file" name="art_face" class="form-control"/>
                                            <span class="custorm-style">
                                                     <span class="left-button">上传图片</span>
                                                     <div class="right-text rightText">@substr($data->art_face,16)</div>
                                                 </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">文章正文</label>
                                <div class="col-sm-10">
                                    <script type="text/plain" id="editor" name="art_content" style="width:80%;height:400px;">{!!  $data->art_content !!}</script>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">是否推荐</label>
                                <div class="col-sm-6">
                                    <div class="radio i-checks">
                                        <input type="radio" name='art_red' value="6" @if($data->art_red == '6' || $data->art_red == '') checked="checked" @endif />是&nbsp;&nbsp;
                                        <input type="radio" name='art_red' value="8" @if($data->art_red == '8') checked="checked" @endif/>否
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">文章类型</label>
                                <div class="col-sm-6">
                                    <div class="radio i-checks">
                                        <input type="radio" name='art_type' value="6" @if($data->art_type == '6' || $data->art_type == '') checked="checked" @endif/>原创&nbsp;&nbsp;
                                        <input type="radio" name='art_type' value="8" @if($data->art_type == '8') checked="checked" @endif/>转载
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">访问量</label>
                                <div class="col-sm-6">
                                    <input type="text" name="art_views" value="{{$data->art_views}}" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">作者</label>
                                <div class="col-sm-6">
                                    <input type="text" name="art_writer" value="{{$data->art_writer}}" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">保存内容</button>
                                    <a class="btn btn-danger" href="{{url('admin/article/article_add')}}">取消</a>
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
    <script type="text/javascript" charset="utf-8" src="{{asset('static/admin/js/site.js')}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('static/Common/Ueditor/ueditor.config.js')}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('static/Common/Ueditor/ueditor.all.min.js')}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('static/Common/js/uploadify/jquery.uploadify.min.js')}}"></script>
    <script type="text/javascript">
        var ue = UE.getEditor('editor', {
            toolbars: [
                ['fullscreen','source','undo','redo','indent','bold','italic','underline','fontborder','snapscreen','print','preview','link','unlink','insertrow','insertcol','mergeright','mergedown','deleterow','deletecol','splittorows','splittocols','splittocells','fontfamily','fontsize','simpleupload','insertimage','spechars','searchreplace','justifyleft','justifyright','justifycenter'],
                ['justifyjustify','forecolor','backcolor','attachment','imagecenter','wordimage','inserttable','strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc']
            ],
            iframeCssUrl: '/static/Common/Ueditor/themes/iframe.css',// 引入css
            autoHeightEnabled: true,
            autoFloatEnabled: true
        });

    </script>
@endsection