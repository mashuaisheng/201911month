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
    }

    /*
     *管理员添加数据adminadd_name
     * */
    public function adminadd_name(){
        $all  = request()->except("_token");
        $match ="/^1[3|5|6|7|8|9]\d{9}$/";
        if(!preg_match($match,$all["admn_phone"])){
            return redirect("/admin/add")->with("get","*手机格式不对，请输入正确的格式,13,15,17");
        }
       dd("添加成功");
    }


}
