@extends('layouts.Header')
@section('title', '购物车详情展示页面')
@section('sidebar')
    @parent
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>新闻列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="add_product_category.html" ></a>新闻添加</h3>
            <form action="{{url('/create')}}" method="post">
                <table border=1 style="color: blue">
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
                    <tr>
                        <td></td>
                        <td><button type="submit" class="btn btn-info">添加</button></td>
                    </tr>
                </table>
            </form>
            </tr>
            </table>
        </div>
    </div>
@endsection
