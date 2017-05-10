<?php

namespace App\Http\Controllers\Home;

class MessageController extends CommonController {
    public function message()
    {
        return view('home.message.message');
    }
}