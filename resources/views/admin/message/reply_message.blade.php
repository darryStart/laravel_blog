@extends('admin.layout.base')
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content no-padding">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="text-success"><a href="{{route('admin_index')}}" title="返回首页" class="tip-bottom"><i class="fa fa-home"></i> 首页</a> /
                                <a href="{{route('message_list')}}" class="current">留言管理</a></p>
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
                        <input type="hidden" name="msg_id" value="{{$data->msg_id}}" />
                        <div class="form-group">
                            <label class="col-sm-2 control-label">留言昵称</label>
                            <div class="col-sm-6">
                                <input type="text" name="username" disabled="disabled" value="{{$data->username}}" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">留言内容</label>
                            <div class="col-sm-6">
                                <textarea type="text" rows="5" name="content" disabled="disabled" class="form-control">{{$data->content}}</textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">留言地址</label>
                            <div class="col-sm-6">
                                <input type="text" name="ip" id="ip" value="{{$data->ip}}" disabled="disabled" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">留言设备</label>
                            <div class="col-sm-6">
                                <input type="text" name="from" disabled="disabled" id="from" value="{{$data->from}}" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">留言时间</label>
                            <div class="col-sm-6">
                                <input type="text" name="add_time" disabled="disabled" id="add_time" value="@date('Y-m-d H:i:s',$data->add_time)" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">留言邮箱</label>
                            <div class="col-sm-6">
                                <input type="text" name="email"  disabled="disabled" id="email" value="{{$data->email}}" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">回复内容</label>
                            <div class="col-sm-10">
                                <script type="text/plain" id="editor" name="c_content" style="width:78%;height:200px;">{!! $data->c_content !!}</script>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">回复人</label>
                            <div class="col-sm-6">
                                <input type="text" name="c_name" id="c_name" value="{{session('admin_session.username')}}" class="form-control">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">保存内容</button>
                                <a class="btn btn-white" href="{{route('reply_message',['msg_id' => $data->msg_id])}}">取消</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script src="{{asset('static/admin/js/advert.js')}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('static/Common/Ueditor/ueditor.config.js')}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('static/Common/Ueditor/ueditor.all.min.js')}}"></script>
    <script type="text/javascript">
        $(function(){
            $('#signupForm').ajaxForm({
                success: complete,
                dataType: 'json'
            });

            function complete(data){
                if(data.status==1){

                    layer.alert(data.info, {icon: 6}, function(index){
                        layer.close(index);
                        window.location.href=data.url;
                    });
                }else{
                    layer.alert(data.info, {icon: 5});
                    return false;
                }
            }
        });
    </script>
    <script type="text/javascript">
        var editorOption = {
            toolbars:[[
                'fullscreen', 'source', '|', 'undo', 'redo', '|',
                'bold', 'italic', 'underline','removeformat', 'formatmatch',
                'pasteplain', '|', 'forecolor', 'fontfamily', 'fontsize', '|', 'link', 'unlink',
                'simpleupload','emotion','attachment']],
        };
        var editor_a = new baidu.editor.ui.Editor(editorOption);
        editor_a.render('editor');

    </script>
@endsection