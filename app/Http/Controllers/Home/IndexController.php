<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/13
 * Time: 14:22
 */

namespace App\Http\Controllers\Home;
class IndexController extends CommonController {
    public function index()
    {
        return view('home.index.index');
    }
}