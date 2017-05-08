<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
class LinkController extends CommonController {
    public function link(Request $request){
        return $request->input();
    }
}