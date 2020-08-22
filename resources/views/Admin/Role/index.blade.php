@extends('layouts.Header')
@section('title', '购物车详情展示页面')
@section('sidebar')
    @parent

    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>角色管理</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="{{url('/add')}}" class="actionBtn">添加角色</a>角色列表</h3>
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <td width="30" align="center">角色id</td>
                    <td align="left">角色名称</td>
                    <td align="center">添加时间</td>
                    <td align="center">操作</td>
                </tr>
                    @foreach($role as $k =>$v)
                        <tr>
                            <td width="30" align="center">{{$v->role_id}}</td>
                            <td>{{$v->role_name}}</td>
                            <td>{{date('Y-m-d H:i:s',$v->ctime)}}</td>
                            <td>
                                <a href="{{url('/delete/'.$v->role_id)}}">删除</a>
                                <a href="{{url('/edit/'.$v->role_id)}}">编辑</a>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>


@endsection