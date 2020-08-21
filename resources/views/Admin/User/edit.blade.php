@extends('layouts.Header')
@section('title', '购物车详情展示页面')
@section('sidebar')
    @parent
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('/update/'.$user->user_id)}}" method="post" class="form-horizontal" role="form">
    @csrf
    <tr>
        <td>用户名</td>
        <td><input type="text" name="name" value="{{$user->name}}"></td></br>
    </tr>
    <tr>
        <td>用户手机</td>
        <td><input type="text" name="phone" value="{{$user->phone}}"></td></br>
    </tr>
    <tr>
        <button type="submit" class="btn btn-default">修改</button>
    </tr>
</body>
</html>

@endsection