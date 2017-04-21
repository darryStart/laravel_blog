<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $table = 'site';
    protected $primaryKey = 'site_id';
    public $timestamps = false;
    protected $guarded = [];
}
