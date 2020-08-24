<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\CommonController;
use Illuminate\Http\Request;
use App\Model\RoleModel;
use App\Model\NodeModel;
use App\Model\RolePowerRelationModel;
use Illuminate\Support\Facades\DB;
//角色管理控制器
class RoleController extends CommonController
{
    public function Role(){
        $role= RoleModel::get();
        return view('Admin/Role/index',['role'=>$role]);
    }
    public function add(){
        return view('Admin/Role/create');
    }
    public function addDo(Request $request)
    {
    }
}
