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
    public function index($cate_id = 0)
    {
        //文章列表
        $title = '最新文章';
        if($cate_id){
            $cate = ArticleCate::find($cate_id,['cate_name']);
            $title = $cate->cate_name;
        }

        $operator = $cate_id?'=':'>';

        $new_art = Article::orderBy('create_time', 'desc')
            ->where('cate_id',$operator,$cate_id)
            ->with('art_cate')
            ->paginate(6,
                array(
                    'art_id','art_face','art_title','art_remark','art_keyword','cate_id','art_type',
                    'art_views','art_red','art_writer','create_time'
                )
            );
        return view('home.index.index', array('new_art' => $new_art,'title' => $title));
    }
}