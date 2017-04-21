<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;

class ArticleCate extends Model {
    protected $table = 'article_cate';
    protected $primaryKey = 'cate_id';
    public $timestamps = false;
    protected $guarded = [];
}