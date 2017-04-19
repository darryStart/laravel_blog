<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\Advert;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdvertController extends Controller
{
    public function index()
    {
        $data = Advert::orderBy('id', 'desc')->paginate(5);
        return view('admin.advert.index', array('data' => $data));
    }

    /**
     * 添加广告管理
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add(Request $request)
    {
        if($input = $request->except('_token')){
            $rules = array(
                'title' => 'required',
                'img' => 'required'
            );

            $msg = array(
                'title.required' => '广告标题必填',
                'img.required' => '必须上传图片'
            );

            $validator = Validator::make($input,$rules,$msg);
            if($validator->passes()){
                $file = $request->file('img');
                if($file->isValid()){
                    $ext = $file->getClientOriginalExtension();
                    $realPath = $file->getRealPath();

                    $file_name   = date('Y-m-d-H-i-s').'-'.uniqid().'.'.$ext;
                    $url  = 'uploads/Advert/'.$file_name;

                    $bool = Storage::disk('advert_uplods')->put($file_name,file_get_contents($realPath));
                    if($bool){
                        $data = array(
                            'title' => $input['title'],
                            'desc' => $input['desc'],
                            'add_time' => time(),
                            'update_time' => time(),
                            'state' => $input['state'],
                            'img_url' => $url,
                            'link' => $input['link']
                        );
                        $status = Advert::insert($data);
                        if($status){
                            return back()->with('success','广告添加成功！');
                        }else{
                            return back()->withErrors('errors','广告添加失败！');
                        }
                    }else{
                        return back()->withErrors('errors','图片上传失败,请重新上传');
                    }
                }else{
                    return back()->withErrors('errors','图片上传失败,请重新上传');
                }
            }else{
                return back()->withErrors($validator)->withInput($input);
            }
        }else{
            return view('admin.advert.add');
        }
    }


    public function state(Request $request)
    {
        if($input = $request->except('_token')){
            $bool = Advert::where('id',$input['id'])->update($input);
            return $bool?'200':'400';
        }else{
            return json('400');
        }
    }
}
