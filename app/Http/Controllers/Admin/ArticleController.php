<?php
namespace App\Http\Controllers\Admin;

use App\Http\Model\Article;
use App\Http\Model\ArticleCate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    /**
     * 删除分类
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
	public function categroy_del($id){
        $id && ArticleCate::destroy($id);
        return redirect()->route('categroy');
	}


    /**
     * 文章列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function article_list(){
        $data = Article::orderBy('art_id', 'desc')->with('art_cate')->paginate(7);
		return view('admin.article.article_list', ['data' => $data]);
	}

    /**
     * 添加文章
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
	public function article_add(Request $request){
        if($input = $request->except('_token')){
            $rules = array(
                'art_title' => 'required',
                'art_keyword' => 'required',
                'art_remark' => 'required',
                'art_face' => 'required',
                'art_content' => 'required',
                'art_views' => 'required|integer'
            );
            $message = array(
                'art_title.required' => '文章标题必填！',
                'art_keyword.required' => '文章关键字必填！',
                'art_remark.required' => '文章描述必填！',
                'art_face.required' => '文章封面必须上传图片！',
                'art_content.required' => '文章内容必填！',
                'art_views.required' => '文章访问量必填！',
                'art_views.integer' => '文章访问量必须是正整数！',
            );

            $volidator = Validator::make($input,$rules,$message);
            if($volidator->passes()){
                $file = $request->file('art_face');
                if($file->isValid()){
                    $ext = $file->getClientOriginalExtension();
                    $realPath = $file->getRealPath();

                    $file_name   = date('Y-m-d-H-i-s').'-'.uniqid().'.'.$ext;
                    $bool = Storage::disk('article_uplods')->put($file_name,file_get_contents($realPath));
                    if($bool){
                        $input['create_time'] = time();
                        $input['update_time'] = time();
                        $input['art_face'] = '/uploads/Article/'.$file_name;

                        if(Article::create($input)){
                            return back()->with('success','文章添加成功！');
                        }else{
                            return back()->with('errors','文章添加失败!');
                        }
                    }else{
                        return back()->with('errors','图片上传失败！');
                    }
                }else{
                    return back()->with('errors','图片上传失败！');
                }
            }else{
                $request->session()->pull('errors', '请上传文章封面');
                return back()->withErrors($volidator)->withInput($input);
            }
        }else{
            return view('admin.article.article_add', ['cate' => $this->art_cate_cache()]);
        }
	}


    /**
     * 编辑文章
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function article_edit($id,Request $request){
        if($input = $request->except('_token')){
            $rules = array(
                'art_title' => 'required',
                'art_keyword' => 'required',
                'art_remark' => 'required',
                'art_content' => 'required',
                'art_views' => 'required|integer'
            );
            $message = array(
                'art_title.required' => '文章标题必填！',
                'art_keyword.required' => '文章关键字必填！',
                'art_remark.required' => '文章描述必填！',
                'art_content.required' => '文章内容必填！',
                'art_views.required' => '文章访问量必填！',
                'art_views.integer' => '文章访问量必须是正整数！',
            );

            $volidator = Validator::make($input,$rules,$message);
            if($volidator->passes()){
                $input['update_time'] = time();

                //上传图片
                $file = $request->file('art_face');
                if($file && $file->isValid()){
                    $ext = $file->getClientOriginalExtension();
                    $realPath = $file->getRealPath();

                    $file_name   = date('Y-m-d-H-i-s').'-'.uniqid().'.'.$ext;
                    $bool = Storage::disk('article_uplods')->put($file_name,file_get_contents($realPath));
                    if($bool){
                        $input['art_face'] = '/uploads/Article/'.$file_name;
                    }else{
                        return back()->with('errors','图片上传失败！');
                    }
                }

                $bool = Article::where('art_id',$input['art_id'])->update($input);
                if($bool){
                    return back()->with('success','文章更新成功！');
                }else{
                    return back()->with('errors','文章更新失败！');
                }

            }else{
                return back()->withErrors($volidator)->with('data',$input);
            }
        }else{
            $id && $data = Article::find($id);
            return view('admin.article.article_edit', ['data' => $data,'cate' => $this->art_cate_cache()]);
        }
	}

    /**
     * 删除文章
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
	public function article_del($id){
        $id && Article::destroy($id);
        return redirect()->route('article');
	}
}