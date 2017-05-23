<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Link;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class LinkController extends CommonController
{
    public function link_list()
    {
        $data = Link::paginate(6);
        return view('admin.link.link',['data' => $data]);
    }

    /**
     * 添加友链
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function link_add(Request $request)
    {
        if($input = $request->except('_token')){
            $rules = array(
                'link_name' => 'required',
                'link_url' => 'required',
                'order_num' => 'required|integer'
            );
            $msg = array(
                'link_name.required' => '友链名称必填！',
                'link_url.required' => '友链地址必填！',
                'order_num.required' => '排序必填！',
                'order_num.integer' => '排序必须是正整数！'
            );
            $volidator = Validator::make($input,$rules,$msg);
            if($volidator->passes()){
                $input['create_time'] = $_SERVER['REQUEST_TIME'];
                $input['update_time'] = $_SERVER['REQUEST_TIME'];
                if(Link::insert($input)){
                    return back()->with('success','添加成功！');
                }else{
                    return back()->withInput($input)->with('errors','友链添加失败！');
                }
            }else{
                return back()->withErrors($volidator)->withInput($input);
            }
        }else{
            return view('admin.link.link_add');
        }
    }

    /**
     * 编辑友链
     * @param $link_id
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function link_edit($link_id, Request $request)
    {
        if($input = $request->except('_token')){
            $rules = array(
                'link_name' => 'required',
                'link_url' => 'required',
                'order_num' => 'required|integer'
            );
            $msg = array(
                'link_name.required' => '友链名称必填！',
                'link_url.required' => '友链地址必填！',
                'order_num.required' => '排序必填！',
                'order_num.integer' => '排序必须是正整数！'
            );
            $volidator = Validator::make($input,$rules,$msg);
            if($volidator->passes()){
                $input['update_time'] = $_SERVER['REQUEST_TIME'];
                if(Link::where('id',$input['id'])->update($input)){
                    return back()->with('success','友情链接编辑成功！');
                }else{
                    return back()->withInput($input)->with('errors','友链编辑失败！');
                }
            }else{
                return back()->withErrors($volidator)->withInput($input);
            }
        }else{
            $data = Link::find($link_id);
            return view('admin.link.link_edit',['data' => $data]);
        }
    }

    /**
     * 删除友链
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function link_del($id)
    {
        $id && Link::destroy($id);
        return redirect()->route('link');
    }

    /**
     * ajax修改状态
     * @param Request $request
     * @return string
     */
    public function state(Request $request)
    {
        if($input = $request->except('_token')){
            $bool = Link::where('id',$input['id'])->update($input);
            return $bool?'200':'400';
        }else{
            return json('400');
        }
    }

}
