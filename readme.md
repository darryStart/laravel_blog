@darry
1.配置app.php
	修改时区为：Asia/Shanghai
	修改日志为：daily(按时间天生成一个文件)
2.自定义加载公共方法库
	在bootstrap/autoload.php中添加：
	require __DIR__.'/../app/Http/function.php';
3.添加Model于Http下，该类似情况主要修改命名空间即可
4.在env中添加表前缀的配置，先在database中修改prefix的获取方式在env中，然后配置env
5.启用git