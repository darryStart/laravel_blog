<?php
namespace App\Http\Controllers\Admin;

use App\Http\Model\Reply;
use App\Http\Model\Say;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SayController extends CommonController {
    protected $say_id;

    /**
     * 说说列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function say(){
        $data = Say::orderBy('say_id','desc')->paginate('3',['say_id','say_content','state','create_time','create_city','create_os']);
        return view('admin.say.say',['data' => $data]);
    }


    /**
     * ajax修改状态
     * @param Request $request
     * @return string
     */
    public function state(Request $request)
    {
        if($input = $request->except('_token')){
            $data['state'] = $input['state'];
            $bool = Say::where('say_id',$input['id'])->update($data);
            return $bool?'200':'400';
        }else{
            return json('400');
        }
    }

    /**
     * 删除说说
     * @param $say_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function say_del($say_id){
        $this->say_id = $say_id;
        $say_id && DB::transaction(function (){
            Say::where('say_id',$this->say_id)->delete();
            Reply::where('say_id',$this->say_id)->delete();
        });
        return redirect()->route('say_list');
    }
}