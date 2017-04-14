<?php

Route::any('admin/login',['as' => 'admin_login', 'uses' => 'admin\LoginController@login']);//登录
Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => ['admin.login']],function (){
    Route::get('index','IndexController@index');//首页
    Route::get('logout','LoginController@logout');//退出
    Route::get('edit_pwd','IndexController@edit_pwd');//修改密码
//    Route::resource('cate','CategroyController');//分类资源路由
});
;


Route::group(['namespace' => 'home'], function () {
    Route::get('/','IndexController@index');
});









