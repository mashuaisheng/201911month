<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\RoleModel;
//角色管理控制器
class RoleController extends Controller
{
    public function Role(){
        $role= RoleModel::get();
        return view('Admin/Role/index',['role'=>$role]);
    }
    public function add(){
        return view('Admin/Role/create');
    }
    public function addDo(){
        $post = request()->except(['_token']);
        $post['ctime']=time();
        $res=RoleModel::insert($post);
        if($res){
            return redirect("/Role");
        }
    }
}
