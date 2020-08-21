@extends('layouts.Header')
@section('title', '管理员列表')
@section('sidebar')
    @parent

    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>网站管理员</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="{{url('/admin/add')}}" class="actionBtn">添加管理员</a>管理员列表</h3>
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <th width="30" align="center">编号</th>
                    <th align="left">管理员名称</th>
                    <th align="center">E-mail地址</th>
                    <th align="center">管理员电话</th>
                    <th align="center">管理员状态</th>
                    <th align="center">添加时间</th>
                    <th align="center">修改时间</th>
                    <th align="center">权限</th>
                    <th align="center">操作</th>
                </tr>
                @foreach($user as $k=>$a)
                <tr>
                    <td align="center">{{$a->admin_id}}</td>
                    <td>{{$a->admin_name}}</td>
                    <td align="center">{{$a->admin_email}}</td>
                    <td align="center">{{$a->admn_phone}}</td>
                    <td align="center">
                        @if($a->status ==1)
                            审核中
                        @elseif($a->status == 2)
                            冻结
                        @elseif($a->status == 3)
                            正常
                        @endif
                    </td>
                    <td align="center">{{date('Y-m-d H:i:s',$a->ctime)}}</td>
                    <td align="center">{{$a->utime}}</td>
                    <td align="center">
                        @if($a->admin_type == 1)
                            超级管理员
                            @elseif($a->admin_type ==2)
                        普通管理员
                            @elseif($a->admin_type ==3)
                        普通用户
                            @endif
                    </td>
                    <td align="center"><a href="addmanager.html?rec=edit&id=1">编辑</a> | <a href="manager.html?rec=del&id=1">删除</a></td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>






@endsection