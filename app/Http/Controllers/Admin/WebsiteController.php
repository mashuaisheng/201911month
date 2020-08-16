<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//新闻管理控制器
class WebsiteController extends Controller
{
    public function Website(){
        return view("/Admin/Website/index");
    }
}
