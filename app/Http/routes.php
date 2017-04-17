<?php

Route::any('admin/login',['as' => 'admin_login', 'uses' => 'admin\LoginController@login']);//登录
Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => ['admin.login']],function (){
    Route::get('index','IndexController@index');//首页
    Route::get('logout','LoginController@logout');//退出
    Route::any('edit_pwd','IndexController@edit_pwd');//修改密码

    Route::any('site/site',['as' => 'site', 'uses' => 'SiteController@site']);//网站设置
    Route::any('site/site_add','SiteController@site_add');//添加网站设置


//    Route::resource('cate','CategroyController');//分类资源路由
});


Route::group(['namespace' => 'home'], function () {
    Route::get('/','IndexController@index');
});









