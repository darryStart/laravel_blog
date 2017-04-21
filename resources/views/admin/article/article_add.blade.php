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
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal" method="post" name="basic_validate" id="signupForm" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">文章标题</label>
                                <div class="col-sm-6">
                                    <input type="text" name="a_title" id="a_title" placeholder="输入文章标题" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">所属分类</label>
                                <div class="col-sm-6">
                                    <select id="cate_id" name="cate_id" class="form-control m-b chosen-select">
                                        @foreach($cate as $v)
                                            <option value="{{$v->cate_id}}">{{$v->cate_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">关键字</label>
                                <div class="col-sm-6">
                                    <input type="text" name="a_keyword" id="a_keyword" placeholder="输入文章关键字" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">描述</label>
                                <div class="col-sm-6">
                                    <textarea type="text" rows="5" name="a_remark" id="a_remark" placeholder="输入文章描述" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">文章封面 </label>
                                <div class="col-sm-6">
                                    <div style="width: 200px; height: 110px; float: left;">
                                        <input type="hidden" name="photo" value="" id="data_photo" />
                                        <input id="photo_file" name="photo_file" type="file" multiple="true" value="" />
                                    </div>
                                    <div style="height: 110px; float: left;">
                                        <img id="upload_img" src="__ROOT__/Uploads/{$detail.photo}" onerror="this.src='__PUBLIC__/Admin/img/no_img.jpg'" style="height: 100px" />
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">文章正文</label>
                                <div class="col-sm-10">
                                    <script type="text/plain" id="editor" name="a_content" style="width:90%;height:300px;"></script>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">是否推荐</label>
                                <div class="col-sm-6">
                                    <div class="radio i-checks">
                                        <input type="radio" name='a_red' value="1" checked="checked" />是&nbsp;&nbsp;
                                        <input type="radio" name='a_red' value="0" />否
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">文章类型</label>
                                <div class="col-sm-6">
                                    <div class="radio i-checks">
                                        <input type="radio" name='a_type' value="1" checked="checked" />原创&nbsp;&nbsp;
                                        <input type="radio" name='a_type' value="0" />转载
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">访问量</label>
                                <div class="col-sm-6">
                                    <input type="text" name="a_views" id="a_views" value="1" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">作者</label>
                                <div class="col-sm-6">
                                    <input type="text" name="a_writer" id="a_writer" value="{$admin['username']}" class="form-control">
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
    </div>
@endsection