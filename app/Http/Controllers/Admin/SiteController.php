<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SiteController extends CommonController
{
    public function site(Request $request)
    {
        if( $input = $request->except('_token') ){
            $files = $request->allFiles();//获取全部文件

            // 文件是否上传成功
            foreach ($files as $k => $v){
                if ($v->isValid()) {
                    // 获取文件相关信息
                    $ext        = $v->getClientOriginalExtension();     // 扩展名
                    $realPath   = $v->getRealPath();   //临时文件的绝对路径

                    // 上传文件
                    $filename   = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
                    $input[$k]  = 'uploads/Site/'.$filename;

                    // 使用我们新建的uploads本地存储空间（目录）
                    $bool = Storage::disk('site_uplods')->put($filename, file_get_contents($realPath));
                    if($bool == false) {
                        return back()->with('errors','上传图片失败！请重新上传');
                    }
                }else{
                    return back()->with('errors','上传图片失败！请重新上传');
                }
            }

            foreach ($input as $k => $v){
                $data[]  = array('site_key' => $k, 'site_value' => $v);
            }
            $bool = $this->updateBatch('site',$data);
            if($bool){
                return back()->with('success','更新成功!');
            }else{
                return back()->with('errors','更新失败,请确认修改内容!');
            }

        }else{
            $site_data = Site::all();
            return view('admin.site.site',array('site_data' => $site_data));
        }
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
