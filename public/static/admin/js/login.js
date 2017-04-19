document.onkeydown = function (event) {
    e = event ? event : (window.event ? window.event : null);
    if (e.keyCode == 13) {
        $('#btn_login').click();
    }
}
$(function () {
    $('#btn_login').click(function () {
        var u = $('#username').val();
        var p = $('#password').val();
        if (u == "") {
            layer.msg('请输入用户名', function () {
            })
            return false;
        }
        if (p == "") {
            layer.msg('请输入密码', function () {
            })
            return false;
        }
        var token = $('input[name="_token"]').val();
        $.ajax({
            url: "/admin/login",
            type: "post",
            data: {
            'user': u,
            'password': p,
            '_token':token
        },
        dataType: 'json',
            error: function () {
            layer.msg('无法访问，请检查你的网络', function () {
            })
        },
        success: function (data) {
            if (data.code == 200) {
                location.href = data.data;
            } else {
                layer.msg(data.msg)
            }
        }
    });
    });
});
