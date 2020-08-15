<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//网站访问量控制器
class ManagementContrller extends Controller
{
    public function index(){
        return view("/Admin/Man/index");
    }
}
