<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/13
 * Time: 14:22
 */

namespace App\Http\Controllers\Home;
use App\Http\Model\Advert;
use App\Http\Model\Article;
use App\Http\Model\ArticleCate;
use Illuminate\Support\Facades\Cache;

class IndexController extends CommonController {
    public function index()
    {
        //轮播图
        if(Cache::has('advert_cache')){
            $advert = Cache::get('advert_cache');
        }else{
            $advert = Advert::where('state', '6')->orderBy('order_num','asc')->get();
            Cache::put('advert_cache',$advert,60);
        }

        //文章分类
        if(Cache::has('cate_cache')){
            $categroy = Cache::get('cate_cache');
        }else{
            $categroy = ArticleCate::orderBy('order_num','asc')->get(['cate_name','cate_id']);
            Cache::put('cate_cache',$categroy,60);
        }

        //最新文章
        $new_art = Article::orderBy('create_time', 'desc')->with('art_cate')->paginate(2);


        //标签
        if(Cache::has('label_cache')){
            $label = Cache::get('label_cache');
        }else{
            $label = Article::orderBy('create_time', 'desc')->get(['art_id','art_keyword']);
            Cache::put('label_cache',$label,60);
        }

        return view('home.index.index', array('advert' => $advert, 'cate' => $categroy , 'new_art' => $new_art, 'label' => $label));
    }
}