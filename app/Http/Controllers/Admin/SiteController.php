<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\Site;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class SiteController extends CommonController
{
    public function site()
    {
        $site_data = Site::all();
        return view('admin.site.site',array('site_data' => $site_data));
    }


    public function site_add(){
        if($input = Input::except('_token') and Input::method() == 'POST'){
            $rules = array(
                'site_key_desc' => 'required',
                'site_key' => 'required',
            );

            $message = array(
                'site_key_desc.required' => '配置名称必填！',
                'site_key.required' => '配置字段名称必填！',
            );
            $validator = Validator::make($input,$rules,$message);
            if($validator->passes()){
                $status = Site::create($input);
                if($status){
//                    return view('notice.success',['code'=> '400', 'message' => '添加成功！','waitSecond' => 1]);
                    return back()->with('success','配置添加成功!');
                }else{
                    return back()->with('errors','添加失败,请重新添加')->withInput($input);
                }
            }else{
                return back()->withInput($input)->withErrors($validator);
            }
        }else{
            return view('admin.site.site_add');
        }
    }

}
