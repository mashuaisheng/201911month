<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//管理员控制器
class ManagerController extends Controller
{
    public function Manager(){
        return view("/Admin/Manager/index");
    }
}
