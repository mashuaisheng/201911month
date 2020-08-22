@extends('layouts.Header')
@section('title', '购物车详情展示页面')
@section('sidebar')
    @parent

    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>权限节点管理</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="{{url('/adds')}}" class="actionBtn">添加节点</a>节点列表</h3>
            <div class="navList">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <td width="30" align="center">权限节点id</td>
                        <td align="left">权限节点的名称</td>
                        <td align="center">权限对应的访问路径</td>
                        <td align="center">添加时间</td>
                        <td align="center">操作</td>
                    </tr>
                    @foreach($role as $k =>$v)
                        <tr>
                            <td width="30" align="center">{{$v->power_node_id}}</td>
                            <td>{{$v->power_node_name}}</td>
                            <td>{{$v->power_node_url}}</td>
                            <td>{{date('Y-m-d H:i:s',$v->ctime)}}</td>
                            <td>
                                <a href="{{url('/delete/'.$v->role_id)}}">删除</a>
                                <a href="{{url('/edit/'.$v->role_id)}}">编辑</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>


@endsection