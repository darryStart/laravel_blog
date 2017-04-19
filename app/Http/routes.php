<?php

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


    Route::get('advert/index','AdvertController@index');//广告列表
    Route::match(['get','post'],'advert/add','AdvertController@add');//添加广告
    Route::post('advert/state','AdvertController@state');//删除广告




//    Route::resource('cate','CategroyController');//分类资源路由
});


Route::group(['namespace' => 'home'], function () {
    Route::get('/','IndexController@index');
});









