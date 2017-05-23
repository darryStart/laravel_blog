$(function() {
    $("#email").completer({
        separator: "@",
        source: ["qq.com", "163.com", "126.com", "139.com", "gmail.com", "hotmail.com", "icloud.com"]
    });

    //发表留言
    $('#msg-submit').click(function () {
        // alert($('#message-form').attr('action'));

        if($('#email').val() == ''){
            $("#email").css("border-color","red").focus();
            return false;
        }else {
            $("#email").css("border-color","");
        }

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

                    $("#msg-submit").attr('disabled',true);
                    $("#msg-submit").html('正在发表中...');
                    var _url = $('#msg-submit').attr('data-url');

                    $.ajax({
                        'url':_url,
                        'data':{'content':$('#content').val(),'_token':$('input[name="_token"]').val(),'email':$('#email').val()},
                        'type':'post',
                        success:function (msg) {
                            if(msg == '200'){
                                location.href = $('#msg-submit').attr('data-href');
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

