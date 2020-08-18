<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserModel;
//用户管理控制器
class UserController extends Controller
{
    //展示试图
    public function user(){
        $user= UserModel::orderBy('id','desc')->Paginate(3);
        return view('Admin.User.index',['user'=>$user,'user'=>$user]);
    }
    //执行删除
    public function delete($id){
        $res = UserModel::where('id',$id)->delete();
        if($res){
            return redirect('/User');
        }
    }
    //修改试图
    public function edit($id){
        $user  = UserModel::find($id);
        return view('Admin.User.edit',['user'=>$user]);
    }
    //执行修改
    public function update(Request $request, $id){
        $post = request()->except(['_token']);

        $res = UserModel::where('id',$id)->update($post);
        if($res!==false){
            return redirect('/User');
        }
    }
}
