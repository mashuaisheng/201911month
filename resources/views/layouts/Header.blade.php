{{--头部样式--}}
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>神 - @yield('title')</title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/static/Admin/Login/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/static/Admin/Login/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/Admin/Login/js/global.js"></script>
</head>
<body>
{{--头部--}}
<div id="dcWrap"> <div id="dcHead">
        <div id="head">
            <div class="logo"><a href="index.html"><img src="/static/Admin/Login/images/dclogo.gif" alt="logo"></a></div>
            <div class="nav">
                <ul>
                    <li class="M"><a href="JavaScript:void(0);" class="topAdd">新建</a>
                        <div class="drop mTopad"><a href="product.php?rec=add">商品</a> <a href="article.php?rec=add">文章</a> <a href="nav.php?rec=add">自定义导航</a> <a href="show.html">首页幻灯</a> <a href="page.php?rec=add">单页面</a> <a href="manager.php?rec=add">管理员</a> <a href="link.html"></a> </div>
                    </li>
                    <li><a href="../index.php" target="_blank">查看站点</a></li>
                    <li><a href="index.php?rec=clear_cache">清除缓存</a></li>
                    <li><a href="http://help.douco.com" target="_blank">帮助</a></li>
                    <li class="noRight"><a href="module.html">DouPHP+</a></li>
                </ul>
                <ul class="navRight">
                    <li class="M noLeft"><a href="JavaScript:void(0);">您好，admin</a>
                        <div class="drop mUser">
                            <a href="manager.php?rec=edit&id=1">编辑我的个人资料</a>
                            <a href="{{url('/Reg')}}">设置云账户</a>
                        </div>
                    </li>
                    <li class="noRight"><a href="login.php?rec=logout">退出</a></li>
                </ul>
            </div>
        </div>
    </div>



    @section('sidebar')


    {{--右侧--}}
<!-- dcHead 结束 -->
    <div id="dcLeft"><div id="menu">
            <ul class="top">
                <li><a href="{{url('/Admin')}}"><i class="home"></i><em>管理首页</em></a></li>
            </ul>
            <ul>
                <li><a href="{{url('/Goods')}}"><i class="system"></i><em>详情页</em></a></li>
                <li><a href="{{url('/User')}}"><i class="nav"></i><em>用户管理</em></a></li>
                <li><a href="{{url('/Manager')}}"><i class="show"></i><em>管理员管理</em></a></li>
                <li><a href="{{url('/Website')}}"><i class="page"></i><em>新闻管理</em></a></li>
                <li><a href="{{url('/Hot')}}"><i class="productCat"></i><em>热门推荐</em></a></li>
            </ul>

        </div>
    </div>


        @show


    {{--尾部--}}
    <div class="clear"></div>
    <div id="dcFooter">
        <div id="footer">
            <div class="line"></div>
            <ul>
                版权所有 © 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
            </ul>
        </div>
    </div>
<!-- dcFooter 结束 -->
<div class="clear"></div></div>
</body>
</html>
@yield('content')