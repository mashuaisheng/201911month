<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//后台注册路由
Route::get("/Reg","Admin\RegController@Reg");
//后台登录路由
Route::get("/Login","Admin\LoginController@Login");
//后台展示路由
Route::get("/Admin","Admin\AdminController@Admin");

<<<<<<< HEAD
//购物车详情控制器
Route::get("/Goods","Admin\GoodsContrller@index");
=======
//详情页控制器
Route::get("/Goods","Admin\GoodsController@index");

//网站访问量控制器
Route::get("/Man","Admin\ManagementController@index");

//用户管理控制器
Route::get("/User","Admin\UserController@user");
//管理员管理控制器
Route::get("/Manager","Admin\ManagerController@Manager");
//新闻管理控制器
Route::get("/Website","Admin\WebsiteController@Website");
//热门推荐控制器
Route::get("/Hot","Admin\HotController@Hot");
>>>>>>> miaomingming

//网站访问量控制器
Route::get("/Man","Admin\ManagementContrller@index");



