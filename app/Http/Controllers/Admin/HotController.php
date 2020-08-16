<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//热门推荐管理
class HotController extends Controller
{
    public function Hot(){
        return view("/Admin/Hot/index");
    }
}
