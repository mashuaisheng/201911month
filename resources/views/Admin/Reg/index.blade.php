<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后台注册</title>
    <meta name="author" content="DeathGhost" />
    <link rel="stylesheet" type="text/css" href="/static/Admin/logins/css/style.css" />
    <style>
        body{height:100%;background:#16a085;overflow:hidden;}
        canvas{z-index:-1;position:absolute;}
    </style>
    <script src="/static/Admin/logins/js/jquery.js"></script>
    <script src="/static/Admin/logins/js/verificationNumbers.js"></script>
    <script src="/static/Admin/logins/js/Particleground.js"></script>
    <script>
        $(document).ready(function() {
            //粒子背景特效
            $('body').particleground({
                dotColor: '#5cbdaa',
                lineColor: '#5cbdaa'
            });
        });
    </script>
</head>
<body>
<dl class="admin_login">
    <dt>
        <strong>站点后台注册管理系统</strong>
        <em>Management System</em>
    </dt>
    <form action="{{url('regDo')}}" method="post">
        @csrf
    <dd class="user_icon">
        <input type="text" placeholder="账号" name="name" class="login_txtbx"/>
    </dd>
    <dd class="pwd_icon">
        <input type="password" placeholder="密码" name="pwd" class="login_txtbx"/>
    </dd>

    <dd>
        <input type="submit" value="立即注册" class="submit_btn"/>
    </dd>
    <dd>
        <p>© 2015-2016 DeathGhost 版权所有</p>
        <p>陕B2-111111111</p>
    </dd>
</dl>
</body>
</html>
