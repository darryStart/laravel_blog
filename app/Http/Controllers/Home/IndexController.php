<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/13
 * Time: 14:22
 */

namespace App\Http\Controllers\Home;
use App\Http\Model\Admin\Advert;

class IndexController extends CommonController {
    public function index()
    {
        $advert = Advert::all();
        return view('home.index.index', array('advert' => $advert));
    }
}