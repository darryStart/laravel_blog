<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Advert;
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
                'img' => 'required',
                'order_num' => 'required|integer'
            );

            $msg = array(
                'title.required' => '广告标题必填!',
                'img.required' => '必须上传图片!',
                'order_num.required' => '排序必填！',
                'order_num.integer' => '排序必须是正整数！'
            );

            $validator = Validator::make($input,$rules,$msg);
            if($validator->passes()){
                $file = $request->file('img');
                if($file->isValid()){
                    $ext = $file->getClientOriginalExtension();
                    $realPath = $file->getRealPath();

                    $file_name   = date('Y-m-d-H-i-s').'-'.uniqid().'.'.$ext;
                    $url  = '/uploads/Advert/'.$file_name;

                    $bool = Storage::disk('advert_uplods')->put($file_name,file_get_contents($realPath));
                    if($bool){
                        $data = array(
                            'title' => $input['title'],
                            'desc' => $input['desc'],
                            'add_time' => time(),
                            'update_time' => time(),
                            'state' => $input['state'],
                            'img_url' => $url,
                            'link' => $input['link'],
                            'order_num' => $input['order_num']
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

    /**
     * ajax修改状态
     * @param Request $request
     * @return string
     */
    public function state(Request $request)
    {
        if($input = $request->except('_token')){
            $bool = Advert::where('id',$input['id'])->update($input);
            return $bool?'200':'400';
        }else{
            return json('400');
        }
    }

    /**
     * 编辑个广告
     * @param $id
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function edit($id,Request $request)
    {
        if($input = $request->except('_token')){
            $rules = array(
                'title' => 'required',
                'order_num' => 'required|integer'
            );

            $msg = array(
                'title.required' => '广告标题必填',
                'order_num.required' => '排序必填！',
                'order_num.integer' => '排序必须是正整数！'
            );
            $validator = Validator::make($input,$rules,$msg);
            if($validator->passes()){

                $data = array(
                    'title' => $input['title'],
                    'desc' => $input['desc'],
                    'update_time' => time(),
                    'state' => $input['state'],
                    'link' => $input['link'],
                    'order_num' => $input['order_num']
                );

                //修改图片
                if($request->hasFile('img')){
                    $file = $request->file('img');
                    if($file->isValid()){
                        $ext = $file->getClientOriginalExtension();
                        $realPath = $file->getRealPath();

                        $file_name   = date('Y-m-d-H-i-s').'-'.uniqid().'.'.$ext;


                        $bool = Storage::disk('advert_uplods')->put($file_name,file_get_contents($realPath));
                        if($bool){
                            $data['img_url'] = '/uploads/Advert/'.$file_name;
                        }else{
                            return back()->with('errors','图片上传失败！');
                        }
                    }else{
                        return back()->with('errors','图片上传失败！');
                    }
                }

                $status = Advert::where('id',$input['id'])->update($data);

                if($status){
                    return back()->with('success','修改成功！');
                }else{
                    return back()->with('errors','修改失败！');
                }
            }else{
                return back()->withErrors($validator);
            }
        }else{
            $data = Advert::find($id);
            return view('admin/advert/edit',array('data' => $data ));
        }
    }

    /**
     * 删除广告
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function del($id)
    {
        $id && Advert::destroy($id);
        return redirect()->route('advert');
    }
}
