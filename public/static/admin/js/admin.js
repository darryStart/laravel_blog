function del(s_id,url){
    layer.confirm('删除后将不可恢复，你确定要删除吗？', {icon: 3}, function(index){
        layer.close(index);
        window.location.href= url+'/'+s_id;
    });
}