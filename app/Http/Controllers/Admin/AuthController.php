<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\NodeModel;
//权限节点管理
class AuthController extends Controller
{
    public function add(){
        $role= NodeModel::get();
        return view('Admin/Auth/index',['role'=>$role]);
    }
    public function Auth(Request $request){
        $power_node_model = new NodeModel();

        if( $request -> method() == "POST"  )
        {
            $power_node_model -> power_node_name =  $request -> post('node_name');
            if( empty( $request -> post('power_node_pid') ) ){
                $power_node_model -> power_node_level =  1;
            }else{
                $power_node_model -> power_node_level =  2;
            }
            $power_node_model -> power_node_pid = $request -> post('power_node_pid');
            $power_node_model -> power_node_url= $request -> post('path');

            $power_node_model -> status = $request -> post('status');
            $power_node_model -> ctime = time();

            if( $power_node_model -> save() ){
                return [
                    'status' => 200,
                    'msg' => 'success'
                ];
            }else{
                return [
                    'status' => 1,
                    'msg' => 'fail'
                ];
            }
        }

        # 查询出系统现有的父级节点

        # 查询所有一级的节点
        $where = [
            [ 'power_node_level' , '=' , 1],
            [ 'status'  , '=' , 1 ]
        ];


        $power_node_list = $power_node_model -> where( $where ) -> get();

//        dd( $power_node_list );
        return view('/Admin/Auth/create' , [
            'power_list' => $power_node_list
        ]);
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
