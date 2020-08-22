@extends('layouts.Header')
@section('title', '购物车详情展示页面')
@section('sidebar')
    @parent
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>权限节点列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="add_product_category.html" ></a>权限节点添加</h3>
            <form action="{{url('/addDo')}}" method="post">
                <table border=1 style="color: blue">
                    <tr>
                        <td>节点名称</td>
                        <td><input type="text" name="power_node_name"></td>
                    </tr>
                    <tr>
                        <td>节点路径</td>
                        <td><input type="text" name="power_node_url"></td>
                    </tr>
                    <tr>
                        <td>父级节点</td>
                        <td>
                            <select name="power_node_pid">
                                <option value="">--请选择--</option>
                                @foreach($power_list as $k=>$v)
                                    <option value="{{$v->power_node_id}}">{{$v->power_node_name}}</option>
                                @endforeach
                            </select><br>
                        </td>
                    </tr>
                    <tr>
                        <td>是否启用</td>
                        <td><input type="radio" name="status"  value="1">启用
                            <input type="radio" name="status" value="2">不启用
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" class="btn btn-info">添加</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection
