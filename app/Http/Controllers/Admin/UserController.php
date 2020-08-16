<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//用户管理控制器
class UserController extends Controller
{
    public function user(){
        return view("/Admin/User/index");
    }
}
