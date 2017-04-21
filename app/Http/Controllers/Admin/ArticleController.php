<?php
namespace App\Http\Controllers\Admin;

use App\Http\Model\ArticleCate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends CommonController
{
    /**
     * 分类列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function categroy_list(){
		$data = ArticleCate::orderBy('cate_id', 'desc')->paginate(7);
		return view('admin.article.categroy_list', ['data' => $data]);
	}

    /**
     * 添加分类
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
	public function categroy_add(Request $request){
		if($input = $request->except('_token')){
			$rules = array(
			    'cate_name' => 'required',
                'order_num' => 'required|integer'
				);
			$msg = array(
			    'cate_name.required' => '分类名称必填！',
                'order_num.required' => '排序必填！',
                'order_num.integer' => '排序必须是正整数！'
				);
			$volidator = Validator::make($input,$rules,$msg);
			if($volidator->passes()){
                if(ArticleCate::insert($input)){
                    return back()->with('success','添加成功！');
                }else{
                    return back()->withInput($input)->with('errors','分类添加失败！');
                }
			}else{
				return back()->withErrors($volidator)->withInput($input);
			}
		}else{
			return view('admin.article.categroy_add');
		}
	}

    /**
     * 编辑分类
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
	public function categroy_edit($id,Request $request){
        if($input = $request->except('_token')){
            $bool = ArticleCate::where('cate_id',$input['cate_id'])->update($input);
            if($bool){
                return back()->with(array('success' => '修改成功！','data' => $input));
            }else{
                return back()->with('errors' , '分类修改失败！');
            }
        }else{
            $data = ArticleCate::find($id);
            return view('admin.article.categroy_edit', array('data' => $data));
        }
	}

	public function categroy_del($id){
        $id && ArticleCate::destroy($id);
        return redirect()->route('categroy');
	}


	//文章
	public function article_list(){
		return view('admin.article.article_list');
	}

	public function article_add(){
		return view('admin.article.article_add');
	}

	public function article_edit($id){
		return view('admin.article.article_edit');
	}

	public function article_del($id){
		// return view('admin.article.article_list');
	}
}