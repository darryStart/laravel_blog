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
        //最新文章
        $new_art = Article::orderBy('create_time', 'desc')->with('art_cate')->paginate(2);
        return view('home.index.index', array('new_art' => $new_art));
    }
}