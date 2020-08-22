@extends('layouts.Header')
@section('title', '购物车详情展示页面')
@section('sidebar')
    @parent
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>新闻列表</strong> </div>
        <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="{{url('/Website')}}" class="actionBtn">新闻列表</a>新闻添加</h3>
            <div class="items">
                <form action="{{url('/addDo')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div id="main">
                        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                            <font color=red></font>
                            <tr align="right">
                                <th width="131">名称</th>
                                <th>内容</th>
                            </tr>
                            <tr>
                                <td>新闻标题</td>
                                <td><input type="textarea" name="news_title" >{{$errors->first('news_title')}}</td>
                            </tr>
                            <tr>
                                <td>新闻内容</td>
                                <td><textarea id="" cols="30" rows="10" name="news_content">{{$errors->first('news_content')}}</textarea></td>
                            </tr>
                            <tr>
                                <td>新闻分类</td>
                                <td>
                                    <select name="cat_id">
                                        <option value="">--请选择--</option>
                                        @foreach($res as $k=>$v)
                                            <option value="{{$v->cat_id}}">{{$v->cat_name}}</option>
                                        @endforeach
                                    </select><br>
                                </td>
                            </tr>
                            <td>新闻图片</td>
                            <td><input type="file" name="news_img"></td>
                            </tr>
                        </table>
                    </div>
                    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                        <tr>
                            <td width="131"></td>
                            <td>
                                <input class="btn" type="submit" value="提交" />
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection




