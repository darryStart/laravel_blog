<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Article;
use Illuminate\Support\Facades\Cache;

class ArticleController extends CommonController 
{

    public function article($id)
    {
        $data = Article::find($id);

        $next = Article::where('art_id','>',$id)->first();
        $pre = Article::where('art_id','<',$id)->first();

        $data && Article::where('art_id',$id)->increment('art_views',1);

        return view('home.article.show',array('data' => $data, 'pre' => $pre, 'next' => $next));
    }
}
