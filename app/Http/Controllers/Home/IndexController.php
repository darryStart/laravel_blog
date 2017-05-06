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
    public function index($cate_id='')
    {
        //文章列表
        if($cate_id){
            $new_art = Article::where('cate_id',$cate_id)
                ->orderBy('create_time', 'desc')
                ->with('art_cate')
                ->paginate(6,
                    array(
                        'art_id','art_face','art_title','art_remark','art_keyword','cate_id','art_type',
                        'art_views','art_red','art_writer','create_time'
                    ),
                    'p'
                );
            $cate = ArticleCate::find($cate_id,['cate_name']);
            $title = $cate->cate_name;
        }else{
            $new_art = Article::orderBy('create_time', 'desc')
                ->with('art_cate')
                ->paginate(6,
                    array(
                        'art_id','art_face','art_title','art_remark','art_keyword','cate_id','art_type',
                        'art_views','art_red','art_writer','create_time'
                    ),
                    'p'
                );
            $title = '最新文章';
        }

        return view('home.index.index', array('new_art' => $new_art,'title' => $title));
    }
}