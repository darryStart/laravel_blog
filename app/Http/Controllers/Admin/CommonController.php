<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/13
 * Time: 14:39
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Model\ArticleCate;
use App\Http\Model\Site;
use Illuminate\Support\Facades\Cache;

class CommonController extends Controller {

    /**
     * 写入配置文件
     */
    protected function putFile()
    {
        $config = Site::pluck('site_value','site_key')->all();
        $path = base_path().'\config\site.php';
        $str = '<?php  return '.var_export($config,true).';';
        file_put_contents($path,$str);
    }

    protected function art_cate_cache()
    {
        if(Cache::has('art_cate')){
            return Cache::get('art_cate');
        }else{
            $cate = ArticleCate::get();
            Cache::forever('art_cate',$cate);
            return $cate;
        }
    }



}