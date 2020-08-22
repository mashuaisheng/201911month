@extends('layouts.Header')
@section('title', '权限节点添加')
@section('sidebar')
    @parent
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>权限节点列表</strong> </div>
        <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="{{url('/Auth')}}" class="actionBtn">权限节点列表</a>节点添加</h3>
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
                                <td>节点名称</td>
                                <td>
                                    <input type="text" name="power_node_name"  size="80" class="inpMain" placeholder="请输入节点名称">
                                </td>
                            </tr>
                            <tr>
                                <td>节点路径</td>
                                <td>
                                    <input type="text" name="power_node_url"  size="80" class="inpMain" placeholder="请输入节点路径">
                                </td>
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
                                <td><input type="radio" name="status"  value="1" checked>启用
                                    <input type="radio" name="status" value="2">不启用
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="立即提交">
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

