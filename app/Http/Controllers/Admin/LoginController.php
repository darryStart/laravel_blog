<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/13
 * Time: 14:38
 */
namespace App\Http\Controllers\Admin;


use App\Http\Model\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class LoginController extends CommonController {
    /**
     * 登录
     */
    public function login()
    {
        if($info = Input::except('_token')){
            $login_condition = array(
                'user' => $info['user'],
                'password' => encrypt_code($info['password']),
            );
            $first = Admin::where($login_condition)->first();
            if($first){
                session(['admin_session' => $first]);
                return json(200,'index','登录成功');
            }else{
                return json(400,'','账号或者密码错误');
            }
        }else{
            session('admin_session');
            return view('admin.login');
        }
    }

    /**
     * 退出
     * @param Request $request
     * @return
     */
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('admin_login');
    }
}