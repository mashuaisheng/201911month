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
            'name'=>'required|unique:users',
            'password'=>'required|min:6',
        ],[
            'name.required'=>'用户名不能为空',
            'name.unique'=>'用户名重复',
            'pwd.required'=>'密码不能为空',
            'pwd.min'=>'密码至少为六位',
        ]);
        if($validator->fails()){
            return redirect('/Login')->withErrors($validator)->withInput();
        }
        array_pop($data);
        $options =[
            'cost' =>12,
        ];
//    array_pop($data);
        //$data['pwd']=password_hash($data['pwd'],PASSWORD_BCRYPT,$options);
        $res = UserModel::insert($data);
        if($res){
            return redirect('/login');
        }
        //dd($res);
    }
}
