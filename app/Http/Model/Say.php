<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/13
 * Time: 14:42
 */

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Say extends Model {
    protected $table = 'say';
    protected $primaryKey = 'say_id';
    public $timestamps = false;
    protected $guarded = [];

    public function reply(){
        return $this->hasMany('App\Http\Model\Reply','say_id')->orderBy('reply_id','asc')->select(['reply_id','say_id','content','reply_user_name','reply_user_face','be_reply_user_name','create_time']);
    }
}