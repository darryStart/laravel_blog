<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\Admin;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class IndexController extends CommonController
{
    //首页
    public function index()
    {
        return view('admin.index');
    }

    //修改密码
    public function edit_pwd()
    {
        if($input = Input::except('_token')){
            //规则
            $rules = [
                'old_pwd' => 'required',
                'password' => 'required|different:old_pwd|between:6,20|confirmed',
            ];

            //提示
            $message = [
                'old_pwd.required' => '原密码必填！',
                'password.required' => '新密码必填！',
                'password.between'  => '新密码必须为6-20长度！',
                'password.confirmed' => '新密码和确认密码要一致！',
                'password.different' => '新密码不能和旧密码一样！'
            ];

            $volidator = Validator::make($input, $rules, $message);
            if($volidator->passes()){

                //原密码验证
                if(encrypt_code($input['old_pwd']) != session('admin_session.password')){
                    return back()->with('errors','旧密码不正确,请重新填写！');
                }

                //写入
                $data = array(
                    'password' => encrypt_code($input['password'])
                );
                $status = Admin::where('id',session('admin_session.id'))->update($data);
                if($status){
                    Session::flush();//清空session
                    return redirect()->route('admin_login');
                }else{
                    return back()->with('errors','修改失败，请重新修改!')->withInput($input);
                }
            }else{
                return back()->withErrors($volidator)->withInput($input);
            }
        }else{
            return view('admin.edit_pwd');
        }
    }
}
