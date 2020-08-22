<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\NodeModel;
//权限节点管理
class AuthController extends Controller
{
    public function add(){
        return view("/Admin/Auth/index");
    }
    public function Auth(){
        //$res= NodeModel::orderBy('power_node_id','desc')->get();
        $res=NodeModel::get();
        return view('/Admin/Auth/create',['res'=>$res]);
    }
    //执行添加
    public function addDo(){
        $post = request()->except(['_token']);
        $post['ctime']=time();
        $res=NodeModel::insert($post);
        if($res){
            return redirect("/add");
        }
    }
}
