@extends('layouts.Header')
@section('title', '购物车详情展示页面')
@section('sidebar')
    @parent

    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>分类管理</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="{{url('/addc')}}" class="actionBtn">添加分类</a>分类列表</h3>
            <div class="navList">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <td width="30" align="center">分类id</td>
                        <td align="left">分类名称</td>
                        <td align="center">添加时间</td>
                        <td align="center">操作</td>
                    </tr>
                    @foreach($cat as $k =>$v)
                        <tr>
                            <td width="30" align="center">{{$v->cat_id}}</td>
                            <td>{{$v->cat_name}}</td>
                            <td>{{date('Y-m-d H:i:s',$v->cat_time)}}</td>
                            <td>
                                <a href="{{url('/delete/'.$v->id)}}">删除</a>
                                <a href="{{url('/edit/'.$v->id)}}">编辑</a>
                            </td>
                        </tr>
                    @endforeach
    </table>
        </div>
    </div>


@endsection