<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NodeModel extends Model
{
    public $table = 'node';  //声明model使用的表
    protected $primaryKey ='power_node_id';  //声明表的主键
    public $timestamps = false; //时间戳
    protected $guarded = [];//黑名单
}
