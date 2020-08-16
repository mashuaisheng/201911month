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
            'name'=>'required',
            'pwd'=>'required',
        ],[
            'user_name.required'=>'用户名不能为空',
            'pwd.required'=>'密码不能为空',
        ]);
        if($validator->fails()){
            return redirect('Login')->withErrors($validator)->withInput();
        }
        $where=[
            ["name","=",$data['name']],
            ["pwd","=",$data['pwd']]
        ];
        $res=UserModel::where($where)->first();
        //dd($res);
        if($res){
            $a=session(["id"=>$res['id']]);
            //dd($a);die;
            return redirect('/Admin');
        }else{
            return redirect('Login')->with("cuowu","密码错误，请重新登陆");
        }

    }

}
