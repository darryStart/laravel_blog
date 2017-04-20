<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SiteController extends CommonController
{
    /**
     * 配置
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
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
                //写入配置文件
                $this->putFile();

                return back()->with('success','更新成功!');
            }else{
                return back()->with('errors','更新失败,请确认修改内容!');
            }

        }else{
            $site_data = Site::all();
            return view('admin.site.site',array('site_data' => $site_data));
        }
    }

    /**
     * 配置项列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function site_list()
    {
        $data = Site::orderBy('site_id', 'desc')->paginate(8);
        return view('admin.site.site_list',['data' => $data]);
    }


    /**
     * 添加配置项
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
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

    /**
     * 编辑配置项
     * @param $site_id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function site_edit($site_id,Request $request){
        if($input = $request->except('_token')){
            $status = Site::where('site_id',$input['site_id'])->update($input);
            if($status){
                return back()->with('success','更新成功！');
            }else{
                return back()->with('errors','更新失败！');
            }
        }else{
            $data = Site::find($site_id);
            return view('admin.site.site_edit',['data' => $data]);
        }
    }

    /**
     * 删除配置项
     * @param $site_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function site_del($site_id)
    {
        $site_id && Site::destroy($site_id);
        return redirect()->route('site_list');
    }
}
