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
        return $this->hasMany('App\Http\Model\Reply','say_id');
    }
}