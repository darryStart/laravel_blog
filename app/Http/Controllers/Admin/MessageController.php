<?php
namespace App\Http\Controllers\Admin;

use App\Http\Model\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends CommonController {
    /**
     * 留言列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function message_list(){
        $data = Message::orderBy('msg_id','desc')->paginate('2',['msg_id','add_time','ip','content','username','c_time']);
        return view('admin.message.message',['data' => $data]);
    }

    public function reply_message($msg_id,Request $request){
        if($input = $request->except('_token')){
            $rules = array(
                'c_content' => 'required',
            );
            $msg = array(
                'c_content.required' => '回复内容必填！'
            );
            $volidator = Validator::make($input,$rules,$msg);
            if($volidator->passes()){
                $input['c_time'] = $_SERVER['REQUEST_TIME'];
                $input['c_photo'] = env('ADMIN_PHOTO');
                if(Message::where('msg_id',$input['msg_id'])->update($input)){
                    return back()->with('success','留言回复成功！');
                }else{
                    return back()->withInput($input)->with('errors','留言回复失败！');
                }
            }else{
                return back()->withErrors($volidator);
            }
        }else{
            $data = Message::find($msg_id);
            return view('admin.message.reply_message',['data' => $data]);
        }
    }

    /**
     * 删除留言
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function message_del($id)
    {
        $id && Message::destroy($id);
        return redirect()->route('message_list');
    }
}