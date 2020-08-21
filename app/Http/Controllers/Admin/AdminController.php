<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//后台展示页面
class AdminController extends Controller
{
    //
    public function Admin(){
        //?
        return view("/Admin/admin/Admin");
    }
}
