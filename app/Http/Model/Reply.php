<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/13
 * Time: 14:42
 */

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model {
    protected $table = 'reply';
    protected $primaryKey = 'reply_id';
    public $timestamps = false;
    protected $guarded = [];
}