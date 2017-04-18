<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/13
 * Time: 14:39
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Site;
use Illuminate\Support\Facades\Config;

class CommonController extends Controller {

    /**
     * 写入配置文件
     */
    public function putFile()
    {
        $config = Site::pluck('site_value','site_key')->all();
        $path = base_path().'\config\site.php';
        $str = '<?php  return '.var_export($config,true).';';
        file_put_contents($path,$str);
    }
}