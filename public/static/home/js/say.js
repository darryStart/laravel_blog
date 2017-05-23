$(function () {
    //回复框显示
    $('.reply-icon').on('click',function (e) {
        $('.reply-div').hide();
        var _this = $(this).parent().next();
        _this.show();
        _this.find('div').focus();
        e.stopPropagation();   //阻止冒泡事件
    });

    //点击div空白处关闭
    $('.clearfix').click(function(){
        $(".reply-div").hide();
        return false;
    });

    $(".reply-div").click(function() {
        return false;
    });

    //点击小图片，显示表情
    $(".bq").on('click',function(e){
        $(".face").slideDown().appendTo($(this).parent());//慢慢向下展开
        e.stopPropagation();   //阻止冒泡事件
    });

    //点击关闭
    $('.face').click(function(){
        $(".face").slideUp();//慢慢向上收
    });

    //点击小图标时，添加功能
    $(".face ul li").click(function(){
        var simg=$(this).find("img").clone();
        $(this).parents().find('.say-content').append(simg);
    });

    //发表说说
    $('#say-submit').click(function () {
        if($('#content').val() == ''){
            $("#content").css("border-color","red").focus();
            return false;
        }else {
            $("#content").css("border-color","");
        }

        $.ajax({
            url:$(this).attr('data-code'),
            data:{'code':$("#txt_check").val(),'_token':$('input[name="_token"]').val()},
            type:'post',
            success:function (msg) {
                if(msg != '200'){
                    $("#txt_check").css("border-color","red").focus();
                    re_captcha();
                    return false;
                }else{
                    $("#txt_check").css("border-color","");

                    $("#say-submit").attr('disabled',true);
                    $("#say-submit").html('正在发表中...');
                    var url = $('#say-form').attr('action');

                    $.ajax({
                        'url':url,
                        'data':{'content':$('#content').val(),'_token':$('input[name="_token"]').val()},
                        'type':'post',
                        success:function (msg) {
                            if(msg == '200'){
                                location.href = $("#say-form").attr('url');
                            }else{
                                $('#link-submit').html('申请失败,请重新申请');
                            }
                        },
                        error:function () {
                            layer.msg('网络错误!');
                        }
                    });
                }
            },
            error:function () {
                $("#cartcha_val").css("border-color","pink");
                return false;
            }
        });
    });
});