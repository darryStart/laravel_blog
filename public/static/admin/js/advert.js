$(function () {
    var id = '';
    var state = '';
    var url = '';
    $('.class_close').click(function () {
        id = $(this).attr('about');
        url = $(this).attr('url');
        state = 6;
        open_close($(this),id,state,url)
    });

    $('.class_open').click(function () {
        id = $(this).attr('about');
        url = $(this).attr('url');
        state = 8;
        open_close($(this),id,state,url)
    });

});

function open_close(_this,id,state,url) {
    var token = $('input[name="_token"]').val();
    $.ajax({
        'url':url,
        'type':'post',
        'data':{'id':id,'state':state,'_token':token},
        'success':function (msg) {
            if(msg == '200'){
                if(state == '8'){
                    _this.addClass('label-danger').removeClass('label-primary');
                    _this.addClass('class_close').removeClass('class_open');
                    _this.html('关闭');
                }else{
                    _this.addClass('label-primary').removeClass('label-danger');
                    _this.addClass('class_open').removeClass('class_close');
                    _this.html('开启');
                }

            }
        },
        'error':function () {
            layer.msg('请求失败！');
        }
    });
}