@extends('layouts.Header')
@section('title', '购物车详情展示页面')
@section('sidebar')
    @parent

    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>新闻管理</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="{{url('/adda')}}" class="actionBtn">添加新闻</a>新闻列表</h3>
            <div class="navList">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <td width="30" align="center">新闻id</td>
                        <td align="left">新闻标题</td>
                        <td align="center">新闻内容</td>
                        <td align="center">新闻分类</td>
                        <td align="center">新闻图片</td>
                        <td align="center">发布时间</td>
                        <td align="center">操作</td>
                    </tr>
                    @foreach($res as $k =>$v)
                        <tr>
                            <td width="30" align="center">{{$v->news_id}}</td>
                            <td>{{$v->news_title}}</td>
                            <td>{{$v->news_content}}</td>
                            <td>{{$v->cat_name}}</td>
                            <td>{{$v->news_img}}</td>
                            <td>{{date('Y-m-d H:i:s',$v->publish_time)}}</td>
                            <td>
                                <a href="{{url('/del/'.$v->news_id)}}">删除</a>
                                <a href="{{url('/edit2/'.$v->news_id)}}">编辑</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>


@endsection