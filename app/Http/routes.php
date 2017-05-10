<?php


//后台路由
Route::any('admin/login', 'admin\LoginController@login')->name('admin_login');//登录

Route::group(['prefix' => 'admin', 'namespace' => 'admin','middleware' => ['admin.login']],function (){
    Route::get('index','IndexController@index')->name('admin_index');//首页
    Route::get('logout','LoginController@logout')->name('admin_logout');//退出
    Route::match(['get','post'],'edit_pwd','IndexController@edit_pwd')->name('admin_pwd');//修改密码
    Route::any('clear','IndexController@clear')->name('clear');//清理缓存

    Route::match(['get','post'],'site/index','SiteController@index')->name('site');//网站设置
    Route::match(['get','post'],'site/site_add','SiteController@site_add')->name('site_add');//添加网站配置项
    Route::get('site/site_list','SiteController@site_list')->name('site_list');//网站配置项列表
    Route::match(['get','post'],'site/site_edit/{site_id?}','SiteController@site_edit')->where('site_id','[0-9]+')->name('site_edit');//编辑配置项
    Route::get('site/site_del/{site_id}','SiteController@site_del')->where('site_id','[0-9]+');//网站配置项删除


    Route::get('advert/index', 'AdvertController@index')->name('advert');//广告列表
    Route::match(['get','post'],'advert/add','AdvertController@add')->name('advert_add');//添加广告
    Route::post('advert/state','AdvertController@state');//修改状态
    Route::match(['get','post'],'advert/edit/{ad_id?}','AdvertController@edit')->where('ad_id','[0-9]+')->name('advert_edit');//编辑广告
    Route::get('advert/del/{id}','AdvertController@del')->where('id','[0-9]+');//删除广告
    

    Route::get('article/article_list', 'ArticleController@article_list')->name('article');//文章列表
    Route::match(['get','post'], 'article/article_add', 'ArticleController@article_add')->name('article_add');//添加文章
    Route::match(['get','post'], 'article/article_edit/{id?}', 'ArticleController@article_edit')->where('id','[0-9]+')->name('article_edit');//编辑文章
    Route::get('article/article_del/{id}', 'ArticleController@article_del')->where('id','[0-9]+');//删除文章

    Route::get('article/categroy_list' , 'ArticleController@categroy_list')->name('categroy');//文章分类列表
    Route::match(['get','post'], 'article/categroy_add', 'ArticleController@categroy_add')->name('categroy_add');//添加文章分类
    Route::match(['get','post'], 'article/categroy_edit/{id?}', 'ArticleController@categroy_edit')->where('id','[0-9]+')->name('categroy_edit');//编辑文章分类
    Route::get('article/categroy_del/{id}', 'ArticleController@categroy_del')->where('id','[0-9]+');//删除文章分类


    Route::get('link/link_list','LinkController@link_list')->name('link');//友链列表
    Route::match(['get','post'],'link/link_add','LinkController@link_add')->name('link_add');//添加友链
    Route::match(['get','post'],'link/link_edit/{link_id?}','LinkController@link_edit')->where('link_id','[0-9]+')->name('link_edit');//编辑友链
    Route::post('link/state','LinkController@state')->name('link_state');//修改友链状态
    Route::get('link/link_del/{link_id}','LinkController@link_del')->where('link_id','[0-9]+')->name('link_del');//删除友链





});



//前台路由
Route::group(['namespace' => 'home'], function () {
    Route::get('/{cate?}','IndexController@index')->where('cate','[0-9]+')->name('home');//首页
    Route::get('article/{id}', 'ArticleController@article')->where('id','[0-9]+')->name('show_article');//文章显示
    Route::post('link_add','LinkController@link')->name('home_link');//申请友链

    Route::get('say','SayController@say')->name('say');//说说
    Route::post('say_add','SayController@say_add')->name('say_add');//添加说说

});

//图形验证
Route::get('captcha/{tmp}', 'CaptchaController@captcha');
Route::post('captcha_check', 'CaptchaController@check');









