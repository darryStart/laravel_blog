<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Say;
use App\Jobs\SendReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SayController extends CommonController {
    /**
     * 说说列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function say(Request $request)
    {
        Session::set('login_user',array('user_id' => '1', 'user_name' => 'admin-darry','user_face' => 'http://localhost/static/home/images/Portrait/16.jpg'));
        $data  = Say::where('say_state',6)
                ->orderBy('say_id','desc')
                ->with('reply')
                ->paginate(4,array(
                    'say_id','say_content','user_name','user_face','say_state','create_city','create_os','create_time'
        ));
        return view('home.say.say',['title' => '说说','data' => $data]);
    }

    /**
     * 发表说说
     * @param Request $request
     * @return string
     */
    public function say_add(Request $request){
        if($input = $request->except('_token')){
            $data = array(
                'say_content' => $input['content'],
                'user_name' => session('login_user.user_name'),
                'create_time' => $_SERVER['REQUEST_TIME'],
                'create_city' => getArea($request->getClientIp()),
                'create_os' => getOS(),
                'user_face' => session('login_user.user_face')
            );
            return Say::insert($data)?'200':'400';
        }else{
            return '400';
        }
    }

    /**
     * 回复说说
     * @param Request $request
     * @return int|mixed
     */
    public function repay_queue(Request $request)
    {
        if($input = $request->except('_token')){
            $input['reply_user_face'] = session('login_user.user_face');
            $input['reply_user_name'] = session('login_user.user_name');
            $input['create_time'] = $_SERVER['REQUEST_TIME'];
            return $this->dispatch(new SendReply($input));
        }else{
            return 0;
        }
    }


}