<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\NewsModel;
use App\Model\CatModel;
use Validator;
use Illuminate\Validation\Rule;
//新闻管理控制器
class WebsiteController extends Controller
{
    public function Website(){
        $res=NewsModel::leftjoin('cat','news.cat_id','=','cat.cat_id')->get();
        return view("/Admin/Website/index",['res'=>$res]);
    }
    //添加试图
    public function adda(){
        $res = CatModel::get();
        return view("/Admin/Website/create",['res'=>$res]);
    }
    //执行添加
    public function create(Request $request)
    {
        //添加方法
        $post = request()->except(['_token']);
        $post['publish_time'] = time();
        $post['utime'] = time();
        $post['ctime'] = time();
        $validator=Validator::make($post,[
            'news_title'=>'required|unique:news',
            'news_content'=>'required',
        ],[
            'news_title.required'=>'新闻名称必填！',
            'news_title.unique'=>'新闻名称已存在！',
            'news_content.required'=>'新闻内容必填！',
        ]);
        if($validator->fails()){
            return redirect('create')->withErrors($validator)->withInput();
        }
        //如果有文件信息，就调用其方法执行文件上传
        if(request()->hasFile('news_img')){
            $data['news_img']=$this->upload('news_img');
        }
        //实现添加
        $res=NewsModel::insert($post);
        if($res){
            return redirect('Website');
        }
    }
    //上传文件
    function upload($filename){
        //判断上传文件过程中是否出错
        if(request()->file($filename)->isValid()){
            //正确就接收文件
            $file=request()->$filename;
            //保存进入目录
            $path=$file->store('uploads');
            return $path;
        }
        exit('文件上传有误');
    }
    public function edit2($news_id)
    {
        //修改视图
        $res=NewsModel::find($news_id);
        $cat = CatModel::get();
        return view("/Admin/Website/edit",['cat'=>$cat,'res'=>$res]);
    }
    public function update2(Request $request, $news_id)
    {
        //修改执行
        $data=$request->except(['_token']);
        //如果有文件信息，就调用其方法执行文件上传
        if(request()->hasFile('news_img')){
            $data['news_img']=$this->upload('news_img');
        }
        $res=NewsModel::where('news_id',$news_id)->update($data);
        if($res){
            return redirect('Website');
        }
    }
}
