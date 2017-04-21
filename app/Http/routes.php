<?php


//后台路由
Route::any('admin/login',['as' => 'admin_login', 'uses' => 'admin\LoginController@login']);//登录
Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => ['admin.login']],function (){
    Route::get('index','IndexController@index');//首页
    Route::get('logout','LoginController@logout');//退出
    Route::match(['get','post'],'edit_pwd','IndexController@edit_pwd');//修改密码

    Route::match(['get','post'],'site/site',['as' => 'site', 'uses' => 'SiteController@site']);//网站设置
    Route::match(['get','post'],'site/site_add','SiteController@site_add');//添加网站配置项
    Route::get('site/site_list',['as' => 'site_list', 'uses' => 'SiteController@site_list']);//网站配置项列表
    Route::match(['get','post'],'site/site_edit/{site_id}','SiteController@site_edit')->where('site_id','[0-9]+');//编辑配置项
    Route::get('site/site_del/{site_id}','SiteController@site_del')->where('site_id','[0-9]+');//网站配置项删除


    Route::get('advert/index', ['as' => 'advert' , 'uses' => 'AdvertController@index']);//广告列表
    Route::match(['get','post'],'advert/add','AdvertController@add');//添加广告
    Route::post('advert/state','AdvertController@state');//修改状态
    Route::match(['get','post'],'advert/edit/{ad_id}','AdvertController@edit')->where('ad_id','[0-9]+');//编辑广告
    Route::get('advert/del/{id}','AdvertController@del')->where('id','[0-9]+');//删除广告
    

    Route::get('article/article_list', ['as' => 'article' , 'uses' => 'ArticleController@article_list']);//文章列表
    Route::match(['get','post'], 'article/article_add', 'ArticleController@article_add');//添加文章
    Route::match(['get','post'], 'article/article_edit/{$id}', 'ArticleController@article_edit')->where('id','[0-9]+');//编辑文章
    Route::get('article/article_del/{$id}', 'ArticleController@article_del')->where('id','[0-9]+');//删除文章

    Route::get('article/categroy_list' ,['as' => 'categroy' , 'uses' => 'ArticleController@categroy_list']);//文章分类列表
    Route::match(['get','post'], 'article/categroy_add', 'ArticleController@categroy_add');//添加文章分类
    Route::match(['get','post'], 'article/categroy_edit/{id}', 'ArticleController@categroy_edit')->where('id','[0-9]+');//编辑文章分类
    Route::get('article/categroy_del/{id}', 'ArticleController@categroy_del')->where('id','[0-9]+');//删除文章分类

});



//前台路由
Route::group(['namespace' => 'home'], function () {
    Route::get('/','IndexController@index');
});









