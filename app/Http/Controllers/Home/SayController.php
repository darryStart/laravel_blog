<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Say;
use Illuminate\Http\Request;

class SayController extends CommonController {
    public function say()
    {
        $data  = Say::where('say_state',6)->orderBy('say_id','asc')->paginate(4);
        return view('home.say.say',['title' => '说说','data' => $data]);
    }

    public function say_add(Request $request){
        if($input = $request->except('_token')){
            $data = array(
                'say_content' => $input['content'],
                'user_name' => 'darry',
                'create_time' => $_SERVER['REQUEST_TIME'],
                'create_ip' => $request->getClientIp()
            );
            return Say::insert($data)?'200':'400';
        }else{
            return '400';
        }
    }
}