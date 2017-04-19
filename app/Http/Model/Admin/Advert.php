<?php

namespace App\Http\Model\Admin;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model {
    protected $table = 'advert';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
}