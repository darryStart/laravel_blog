<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/13
 * Time: 14:42
 */

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model {
    protected $table = 'admin';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];

}