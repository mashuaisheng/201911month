<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Model\UserModel;
class LoginController extends Controller
{
    //后台登录
    public function Login(){
        return view("/Admin/Login/Login");
    }
    //执行注册
    public function loginDo(){
        $data=request()->except('_token');
        $validator=Validator::make($data,[
            'user_name'=>'required',
            'user_pwd'=>'required',
        ],[
            'user_name.required'=>'用户名不能为空',
            'user_pwd.required'=>'密码不能为空',
        ]);
        if($validator->fails()){
            return redirect('Login')->withErrors($validator)->withInput();
        }
        $where=[
            ["user_name","=",$data['user_name']],
            ["user_pwd","=",$data['user_pwd']]
        ];
        $res=UserModel::where($where)->first();
        //dd($res);
        if($res){
            $a=session(["user_id"=>$res['user_id']]);
            //dd($a);die;
            return redirect('/Admin');
        }else{
            return redirect('Login')->with("cuowu","密码错误，请重新登陆");
        }

    }

}
