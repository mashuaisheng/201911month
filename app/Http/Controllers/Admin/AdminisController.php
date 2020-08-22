<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//登录管理表
use App\Model\RbacModel;
//管理员模块
class AdminisController extends Controller
{
    /**
     * 管理员列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminList(){
        $user = RbacModel::where("status",'=',3)->get();
        if($user->admin_type = 1){
            $all = RbacModel::get();
        }else if($user->admin_type = 2){
            $all = RbacModel::where("admin_type",'>','2')->get();
        }else{
            $all = RbacModel::where("admin_type",'>','3')->get();
        }

        return view( '/Admin/Admin_List/list',["user"=>$all]);
    }
    /**
     * 管理员添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminAdd(){
       if(request()->method("get")){
           return view( '/Admin/Admin_List/add' );
       }
        if(request()->method("post")){
            dd("fdjkh");
        }
    }




}
