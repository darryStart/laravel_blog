<?php

namespace App\Providers;

use App\Http\Model\Advert;
use App\Http\Model\Article;
use App\Http\Model\ArticleCate;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //切割字符串
        Blade::directive('substr', function($expression) {
            return "<?php echo substr{$expression}; ?>";
        });

        //时间打印
        Blade::directive('date',function ($expression) {
           return "<?php echo date{$expression};?>";
        });

        //switch
        Blade::extend(function($value, $compiler){
            $value = preg_replace('/(\s*)@switch\((.*)\)(?=\s)/', '$1<?php switch($2):', $value);
            $value = preg_replace('/(\s*)@endswitch(?=\s)/', '$1endswitch; ?>', $value);
            $value = preg_replace('/(\s*)@case\((.*)\)(?=\s)/', '$1case $2: ?>', $value);
            $value = preg_replace('/(?<=\s)@default(?=\s)/', 'default: ?>', $value);
            $value = preg_replace('/(?<=\s)@break(?=\s)/', '<?php break;', $value);
            return $value;
        });


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

        //标签
        if(Cache::has('label_cache')){
            $label = Cache::get('label_cache');
        }else{
            $label = Article::orderBy('create_time', 'desc')->get(['art_id','art_keyword']);
            Cache::put('label_cache',$label,60);
        }

        //随机文章
        if(!Cache::has('random_art_cache')){
            $random_art = Cache::get('random_art_cache');
        }else{
            $random_art = Article::orderByRaw('rand()')->take(3)->get(['art_id','art_title','art_face','art_remark']);
            Cache::put('random_art_cache',$random_art,60);
        }

        //数据共享
        view()->share(array(
            'advert'    => $advert,
            'cate'      => $categroy,
            'label'     => $label,
            'random_art' => $random_art
        ));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
