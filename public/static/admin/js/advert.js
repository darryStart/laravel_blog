var state = '';
$(document).on('click','.label-danger',function(){
    state = 6;
    open_close($(this),state)
})


$(document).on('click','.label-primary',function(){
    state = 8;
    open_close($(this),state)
})


function open_close(_this,state) {

    var token = $('input[name="_token"]').val();
    var id = _this.attr('about');
    var url = _this.attr('url');
    $.ajax({
        'url':url,
        'type':'post',
        'data':{'id':id,'state':state,'_token':token},
        'success':function (msg) {
            if(msg == '200'){
                if(state == '8'){
                    _this.removeClass('label-primary class_open').addClass('label-danger class_close');
                    _this.html('关闭');
                }else{
                    _this.removeClass('label-danger class_close').addClass('label-primary class_open');
                    _this.html('开启');
                }

            }
        },
        'error':function () {
            layer.msg('请求失败！');
        }
    });
}