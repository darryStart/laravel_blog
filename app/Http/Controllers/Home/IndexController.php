<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/13
 * Time: 14:22
 */

namespace App\Http\Controllers\Home;
use App\Http\Model\Advert;
use App\Http\Model\ArticleCate;

class IndexController extends CommonController {
    public function index()
    {
        //轮播图
        $advert = Advert::where('state', '6')->orderBy('order_num','asc')->get();

        //文章分类
        $categroy = ArticleCate::orderBy('order_num','asc')->get();

        return view('home.index.index', array('advert' => $advert, 'cate' => $categroy));
    }
}