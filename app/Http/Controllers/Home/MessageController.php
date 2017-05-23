<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Message;
use Illuminate\Http\Request;

class MessageController extends CommonController {
    /**
     * 留言列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function message()
    {
        $data = Message::orderBy('msg_id','desc')->paginate(6,['add_time','ip','content','username','photo','from','email','c_photo','c_name','c_content','c_time']);
        return view('home.message.message',['title' => '留言','data' => $data]);
    }

    /**
     * 添加留言
     * @param Request $request
     * @return string
     */
    public function add_message(Request $request){
        if($input = $request->except('_token')){
            $input['add_time'] = $_SERVER['REQUEST_TIME'];
            $input['ip'] = getArea($request->getClientIp());
            $input['username'] = session('login_user.user_name');
            $input['photo'] = session('login_user.user_face');
            $input['from'] = getOS();
            return Message::insert($input)?'200':'400';
        }else{
            return '400';
        }
    }
}