<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Say;
use App\Jobs\SendReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;

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
                'create_city' => $this->getArea($request->getClientIp()),
                'create_os' => $this->getOS(),
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

    /**
     * 查询地址
     * @param $ip
     * @return bool|mixed
     */
    public function getArea($ip)
    {
        if($ip == '' || strstr($ip,'192.168') || strstr($ip,'::1')){
            $url = "http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json";
            $ip=json_decode(file_get_contents($url),true);
            $data = $ip;
        }else{
            $url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
            $ip=json_decode(file_get_contents($url));
            if((string)$ip->code=='1'){
                return false;
            }
            $data = (array)$ip->data;
        }
        return $data['city'];
    }

    private function getOS(){
        $agent = php_uname('s').' '.php_uname('r');

        $os = false;
        if (preg_match('/win/i', $agent) && strpos($agent, '95'))
        {
            $os = 'Windows 95';
        }
        else if (preg_match('/win 9x/i', $agent) && strpos($agent, '4.90'))
        {
            $os = 'Windows ME';
        }
        else if (preg_match('/win/i', $agent) && preg_match('/98/i', $agent))
        {
            $os = 'Windows 98';
        }
        else if (preg_match('/win/i', $agent) && preg_match('/nt 6.0/i', $agent))
        {
            $os = 'Windows Vista';
        }
        else if (preg_match('/win/i', $agent) && preg_match('/nt 6.1/i', $agent))
        {
            $os = 'Windows 7';
        }
        else if (preg_match('/win/i', $agent) && preg_match('/nt 6.2/i', $agent))
        {
            $os = 'Windows 8';
        }else if(preg_match('/win/i', $agent) && preg_match('/nt 10.0/i', $agent))
        {
            $os = 'Windows 10';#添加win10判断
        }else if (preg_match('/win/i', $agent) && preg_match('/nt 5.1/i', $agent))
        {
            $os = 'Windows XP';
        }
        else if (preg_match('/win/i', $agent) && preg_match('/nt 5/i', $agent))
        {
            $os = 'Windows 2000';
        }
        else if (preg_match('/win/i', $agent) && preg_match('/nt/i', $agent))
        {
            $os = 'Windows NT';
        }
        else if (preg_match('/win/i', $agent) && preg_match('/32/i', $agent))
        {
            $os = 'Windows 32';
        }
        else if (preg_match('/linux/i', $agent))
        {
            $os = 'Linux';
        }
        else if (preg_match('/unix/i', $agent))
        {
            $os = 'Unix';
        }
        else if (preg_match('/sun/i', $agent) && preg_match('/os/i', $agent))
        {
            $os = 'SunOS';
        }
        else if (preg_match('/ibm/i', $agent) && preg_match('/os/i', $agent))
        {
            $os = 'IBM OS/2';
        }
        else if (preg_match('/Mac/i', $agent) && preg_match('/PC/i', $agent))
        {
            $os = 'Macintosh';
        }
        else if (preg_match('/PowerPC/i', $agent))
        {
            $os = 'PowerPC';
        }
        else if (preg_match('/AIX/i', $agent))
        {
            $os = 'AIX';
        }
        else if (preg_match('/HPUX/i', $agent))
        {
            $os = 'HPUX';
        }
        else if (preg_match('/NetBSD/i', $agent))
        {
            $os = 'NetBSD';
        }
        else if (preg_match('/BSD/i', $agent))
        {
            $os = 'BSD';
        }
        else if (preg_match('/OSF1/i', $agent))
        {
            $os = 'OSF1';
        }
        else if (preg_match('/IRIX/i', $agent))
        {
            $os = 'IRIX';
        }
        else if (preg_match('/FreeBSD/i', $agent))
        {
            $os = 'FreeBSD';
        }
        else if (preg_match('/teleport/i', $agent))
        {
            $os = 'teleport';
        }
        else if (preg_match('/flashget/i', $agent))
        {
            $os = 'flashget';
        }
        else if (preg_match('/webzip/i', $agent))
        {
            $os = 'webzip';
        }
        else if (preg_match('/offline/i', $agent))
        {
            $os = 'offline';
        }
        else
        {
            $os = '未知';
        }
        return $os;
    }
}