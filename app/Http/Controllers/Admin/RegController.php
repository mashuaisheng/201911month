<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Model\UserModel;
class RegController extends Controller
{
    public function Reg(){
        return view("/Admin/Reg/index");
    }
    //注册执行
    public function regDo(){
        $data=request()->except("_token");

        $validator=Validator::make($data,[
            'user_name'=>'required|unique:user',
            'user_pwd'=>'required|min:6',
        ],[
            'user_name.required'=>'用户名不能为空',
            'user_name.unique'=>'用户名重复',
            'user_pwd.required'=>'密码不能为空',
            'user_pwd.min'=>'密码至少为六位',
        ]);

        if($validator->fails()){
            return redirect('/Reg')->withErrors($validator)->withInput();
        }
//        dd($data);
//    array_pop($data);
        //$data['pwd']=password_hash($data['pwd'],PASSWORD_BCRYPT,$options);
        //dd($data);
        $res = UserModel::insert($data);
        if($res){
            return redirect('/Login');
        }
        //dd($res);
    }
}
