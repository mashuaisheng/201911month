<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//购物车详情控制器
class GoodsController extends Controller
{
    //h
    public function index(){
        return view("/Admin/Goods/Index");
    }


}
