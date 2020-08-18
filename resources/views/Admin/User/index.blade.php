@extends('layouts.Header')
@section('title', '购物车详情展示页面')
@section('sidebar')
    @parent
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>用户管理</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="{{url('/add')}}" ></a>用户列表</h3>
            <div class="navList">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <td width="30" align="center">用户id</td>
                    <td align="left">用户名称</td>
                    <td align="center">用户手机</td>
                    <td align="center">注册时间</td>
                    <td align="center">操作</td>
                </tr>
                    @foreach($user as $k =>$v)
                    <tr>
                        <td width="30" align="center">{{$v->id}}</td>
                        <td>{{$v->name}}</td>
                        <td>{{$v->phone}}</td>
                        <td>{{date('Y-m-d H:i:s',$v->reg_time)}}</td>
                        <td>
                            <a href="{{url('/delete/'.$v->id)}}">删除</a>
                            <a href="{{url('/edit/'.$v->id)}}">编辑</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{ $user->links() }}
            </div>
        </div>
    </div>

@endsection

