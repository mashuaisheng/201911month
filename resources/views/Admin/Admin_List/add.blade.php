@extends('layouts.Header')
@section('title', '管理员添加')
@section('sidebar')
    @parent

    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>网站管理员</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="{{url('/admin/add')}}" class="actionBtn">管理员列表</a>管理员添加</h3>
            <form action="" method="post">
                <table border="1">
                    <tr>
                        <td>管理员账号</td>
                        <td>
                            <input type="text" name="admin_name">
                        </td>
                    </tr>
                    <tr>
                        <td>真实姓名</td>
                        <td>
                            <input type="text" name="admin_name">
                        </td>
                    </tr>
                    <tr>
                        <td>密码</td>
                        <td>
                            <input type="password" name="admin_pwd">
                        </td>
                    </tr>
                    <tr>
                        <td>确认密码</td>
                        <td>
                            <input type="password" name="password">
                        </td>
                    </tr>
                    <tr>
                        <td>手机号</td>
                        <td>
                            <input type="text" name="admn_phone">
                        </td>
                    </tr>
                    <tr>
                        <td>邮箱</td>
                        <td>
                            <input type="text" name="admin_email">
                        </td>
                    </tr>
                    <tr>
                        <td>管理员类型</td>
                        <td>
                            <input type="reset" name="admin_type" value="2">普通管理员
                            <input type="reset" name="admin_type" value="1">超级管理员
                        </td>
                    </tr>
                    <tr>
                        <td>现有角色</td>
                        <td>
                            <input type="checkbox" name="power_node_name" value="1">分类管理员
                            <span class="title">权限：</span>
                            <span style="color:rgba(47, 47, 47, 0.6)">分类管理 分类列表 分类添加</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="立即提交">
                        </td>
                        <td>
                            <input type="reset" value="重置">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection