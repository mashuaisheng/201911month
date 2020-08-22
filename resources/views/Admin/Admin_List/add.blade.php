@extends('layouts.Header')
@section('title', '管理员添加')
@section('sidebar')
    @parent
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>系统设置</strong> </div>
        <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3>系统设置</h3>
                <div class="items">
                    <form action="{{url('/admin/add_name')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div id="main">
                            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                                <font color=red>{{session("get")}}</font>
                                <tr align="right">
                                    <th width="131">名称</th>
                                    <th>内容</th>
                                </tr>
                                <tr>
                                    <td>管理员账号</td>
                                    <td>
                                        <input type="text" name="admin_name" value="han" size="80" class="inpMain" placeholder="输入管理员账号">
                                    </td>
                                </tr>
                                <tr>
                                    <td>真实姓名</td>
                                    <td>
                                        <input type="text" name="admin_account" value="杨文龙" size="80" class="inpMain" placeholder="输入真实姓名">
                                    </td>
                                </tr>
                                <tr>
                                    <td>密码</td>
                                    <td>
                                        <input type="password" name="admin_pwd" value="zhao" size="80" class="inpMain" placeholder="输入密码">
                                    </td>
                                </tr>
                                <tr>
                                    <td>确认密码</td>
                                    <td>
                                        <input type="password" name="password" value="zhao" size="80" class="inpMain" placeholder="输入确认密码">
                                    </td>
                                </tr>
                                <tr>
                                    <td>手机号</td>
                                    <td>
                                        <input type="text" name="admn_phone" value="17732727492" size="80" class="inpMain" placeholder="输入手机号">
                                    </td>
                                </tr>
                                <tr>
                                    <td>邮箱</td>
                                    <td>
                                        <input type="text" name="admin_email" value="2382662404@qq.com" size="80" class="inpMain" placeholder="输入邮箱号">
                                    </td>
                                </tr>
                                <tr>
                                    <td>管理员类型</td>
                                    <td>
                                        <input type="radio" name="admin_type" value="3" checked>用户
                                        <input type="radio" name="admin_type" value="2">普通管理员
                                        <input type="radio" name="admin_type" value="1">超级管理员
                                    </td>
                                </tr>
                                <tr>
                                    <td>现有角色</td>
                                    <td>
                                        <input type="checkbox" name="power_node_name" value="1" checked>分类管理员
                                        <span class="title">权限：</span>
                                        <span style="color:rgba(47, 47, 47, 0.6)">分类管理 分类列表 分类添加</span>
                                    </br>
                                        <input type="checkbox" name="power_node_name" value="1">分类管理员
                                        <span class="title">权限：</span>
                                        <span style="color:rgba(47, 47, 47, 0.6)">分类管理 分类列表 分类添加</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                            <tr>
                                <td width="131"></td>
                                <td>
                                    <input class="btn" type="submit" value="提交" />
                                    <input type="reset"class="btn" value="重置">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
@endsection
