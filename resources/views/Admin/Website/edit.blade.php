@extends('layouts.Header')
@section('title', '购物车详情展示页面')
@section('sidebar')
    @parent
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>新闻修改</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="{{url('Website')}}" ></a>新闻修改</h3>
            <form action="{{url('/update2/'.$res->news_id)}}" method="post">
                <table border=1 style="color: blue">
                    <tr>
                        <td>新闻标题</td>
                        <td><input type="text" name="news_title" value="{{$res->news_title}}" ></td>
                    </tr>
                    <tr>
                        <td>新闻内容</td>
                        <td><textarea id="" cols="30" rows="10" name="news_content">{{$res->news_content}}</textarea></td>
                    </tr>
                    <tr>
                        <td>新闻分类</td>
                        <td>
                            <select name="cat_id">
                                <option value="">--请选择--</option>
                                @foreach($cat as $k=>$v)
                                    <option value="{{$v->cat_id}}">{{$v->cat_name}}</option>
                                @endforeach
                            </select><br>
                        </td>
                    </tr>
                    <td>新闻图片</td>
                    <td><input type="file" name="news_img"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" class="btn btn-info">修改</button></td>
                    </tr>
                </table>
            </form>
            </tr>
            </table>
        </div>
    </div>
@endsection
