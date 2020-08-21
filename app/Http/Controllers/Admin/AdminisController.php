<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//管理员模块
class AdminisController extends Controller
{
    /**
     * 管理员列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminList(){
        return view( 'admin.list' );
    }






}
