@extends('layouts.Header')
@section('title', '管理员添加')
@section('sidebar')
    @parent

    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>网站管理员</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="{{url('/admin/add')}}" class="actionBtn">添加管理员</a>管理员添加</h3>
            <form action="" method="post">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection