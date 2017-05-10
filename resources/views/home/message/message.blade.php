@extends('home.layout.base')
@section('title',$title)
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><i class="fa fa-tasks"></i> 留言列表</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-bordered">
                        <thead>
                        <tr class="long-tr">
                            <th width="5%">编号</th>
                            <th width="10%">昵称</th>
                            <th>留言内容</th>
                            <th width="15%">留言日期</th>
                            <th width="10%">来自</th>
                            <th width="12%">状态</th>
                            <th width="20%">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <volist name="list" id="vo">
                            <tr class="long-td">
                                <td>{$vo.id}</td>
                                <td>{$vo.username}</td>
                                <td style="text-align:left">{$vo.content|strip_tags|mb_substr=0,25,'utf-8'}...</td>
                                <td>{$vo.add_time|date='Y年m月d日 H:i:s',###}</td>
                                <td>{$vo.ip}</td>
                                <td>
                                    <if condition="$vo.c_content neq null">
                                        <span class="label label-primary">已回复</span>
                                        <else/>
                                        <span class="label label-danger">未回复</span>
                                    </if>
                                </td>
                                <td>
                                    <a href="{:U('Liuyan/edit',array('id'=>$vo['id']))}" class="btn btn-primary">
                                        <i class="fa fa-pencil"></i> 回复</a>&nbsp;&nbsp;
                                    <a href="javascript:;" onclick="return del({$vo.id},{:I('p',1)});" class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i> 删除</a>
                                </td>
                            </tr>
                        </volist>
                        </tbody>
                    </table>
                    <div class="pages" style=" text-align: right;">
                        {$page}
                    </div>
                    <hr/>
                    <div class="panel border-sub">
                        <div class="panel-head border-sub bg-sub">
                            <h3>留  言</h3>
                        </div>
                        <div class="panel-body">
                            <div class="panel-body">
                                <form action="{:U('Home/liuyan/addContent')}" name="signupForm" id="signupForm" method="post" class="form form-block">
                                    <div class="form-group">
                                        <div class="field">
                                            <div class="input-group">
                                                <span class="addon">昵称</span>
                                                <input type="text" class="input" id="username" name="username" value="{$qqname}" readonly="readonly" placeholder="请输入昵称" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="field">
                                            <div class="input-group">
                                                <span class="addon">邮箱</span>
                                                <input type="text" class="input"  id="email" name="email" placeholder="请输入正确的邮箱地址" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="field">
                                            <textarea class="input" rows="5" name="content" id="content" cols="50" placeholder="说点什么吧...."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="field">
                                            <div class="input-group">
                                                <span class="addon">验证码</span>
                                                <input type="text" style="width: 300px;" class="input" id="txt_check" name="txt_check" placeholder="请输入右侧验证码" />
                                                <img style="margin-top: -32px;margin-left: 50%;display: block;border: 1px solid #C7C7C7;" class="img" src="{:U('Home/Liuyan/verify')}" onClick="this.src = this.src + '?' + Math.random();" title="看不清楚?点击刷新验证码?">
                                            </div></div>
                                    </div>
                                    <div class="form-button">
                                        <button class="button bg-blue button-big button-block" id="btn-submit" type="submit">
                                            提 交</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection