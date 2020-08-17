<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//访问量控制器
class GoodsController extends Controller
{
    //h
    public function index(){
        return view("/Admin/Goods/Index");
    }


}
