<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Link;
use Illuminate\Http\Request;
class LinkController extends CommonController {
    public function link(Request $request){
        $input = $request->except('_token');
        $input['create_time'] = $_SERVER['REQUEST_TIME'];
        $input['update_time'] = $_SERVER['REQUEST_TIME'];
        return  Link::insert($input)?'200':'400';
    }
}