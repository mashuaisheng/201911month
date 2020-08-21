@extends('layouts.Header')
@section('title', '购物车详情展示页面')
@section('sidebar')
    @parent

<!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>新闻列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="addpage.html" class="actionBtn">添加新闻</a>新闻列表</h3>
    <div class="page">
        <dl>
            <dt><strong>公司简介</strong><p>about</p></dt>
            <dd><a href="page.php?rec=edit&id=1">编辑</a> | <a href="page.php?rec=del&id=1">删除</a></dd>
        </dl>
        <dl class="child1">
            <dt><strong>企业荣誉</strong><p>honor</p></dt>
            <dd><a href="page.php?rec=edit&id=2">编辑</a> | <a href="page.php?rec=del&id=2">删除</a></dd>
        </dl>
        <dl class="child1">
            <dt><strong>发展历程</strong><p>history</p></dt>
            <dd><a href="page.php?rec=edit&id=3">编辑</a> | <a href="page.php?rec=del&id=3">删除</a></dd>
        </dl>
        <dl class="child1">
            <dt><strong>联系我们</strong><p>contact</p></dt>
            <dd><a href="page.php?rec=edit&id=4">编辑</a> | <a href="page.php?rec=del&id=4">删除</a></dd>
        </dl>
        <dl>
            <dt><strong>人才招聘</strong><p>job</p></dt>
            <dd><a href="page.php?rec=edit&id=5">编辑</a> | <a href="page.php?rec=del&id=5">删除</a></dd>
        </dl>
        <dl>
            <dt><strong>营销网络</strong><p>market</p></dt>
            <dd><a href="page.php?rec=edit&id=6">编辑</a> | <a href="page.php?rec=del&id=6">删除</a></dd>
        </dl>
    </div>
</div>
</div>

@endsection