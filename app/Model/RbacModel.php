<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RbacModel extends Model
{
    public $table = 'rbac_admin';  //声明model使用的表
    protected $primaryKey ='admin_id';  //声明表的主键
    public $timestamps = false; //时间戳
    protected $guarded = [];//黑名单
}
