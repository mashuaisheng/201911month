<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CatModel;
//新闻分类管理
class CatController extends Controller
{
    //分类展示
    public function cat(){
        $cat= CatModel::orderBy('cat_id','desc')->get();
        return view('Admin.Cat.index',['cat'=>$cat]);
    }

    public function add(){
        return view('Admin.Cat.create');
    }
    //执行添加
    public function addDo(){
        $post = request()->except(['_token']);
        $post['cat_time']=time();
        $res=CatModel::insert($post);
        if($res){
            return redirect("/Cat");
        }
    }

}
