@extends('layouts.Header')
@section('title', '购物车详情展示页面')
@section('sidebar')
    @parent

    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>权限节点管理</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="{{url('/Auth')}}" class="actionBtn">添加节点</a>节点列表</h3>
            <div class="navList">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <th width="30" align="center">编号</th>
                        <th align="left">管理员名称</th>
                        <th align="center">E-mail地址</th>
                        <th align="center">添加时间</th>
                        <th align="center">最后登录时间</th>
                        <th align="center">操作</th>
                    </tr>
                    <tr>
                        <td align="center">1</td>
                        <td>admin</td>
                        <td align="center"></td>
                        <td align="center">2016-02-25</td>
                        <td align="center">2016-02-26 20:53:17</td>
                        <td align="center"><a href="addmanager.html?rec=edit&id=1">编辑</a> | <a href="manager.html?rec=del&id=1">删除</a></td>
                    </tr>
                </table>
            </div>
        </div>


@endsection