<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //首页
    public function index()
    {
        return view('admin.index');
    }

    //修改密码
    public function edit_pwd()
    {
        return view('admin.edit_pwd');
    }
}
