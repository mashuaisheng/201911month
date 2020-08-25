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
Route::post("/regDo","Admin\RegController@regDo");
//后台登录路由
Route::get("/Login","Admin\LoginController@Login");
Route::post("/loginDo","Admin\LoginController@loginDo");
//后台展示路由
Route::get("/Admin","Admin\AdminController@Admin");
//网站访问量控制器
Route::get("/Man","Admin\ManagementController@index");

//用户管理控制器
Route::get("/User","Admin\UserController@user");//用户展示
Route::any("/delete/{user_id}","Admin\UserController@delete");//删除
Route::get("/edit/{user_id}","Admin\UserController@edit");//修改试图
Route::post('update/{user_id}','Admin\UserController@update');//编辑执行
//管理员管理控制器
Route::get("/Manager","Admin\ManagerController@Manager");
//新闻管理控制器
Route::get("/Website","Admin\WebsiteController@Website");
Route::get("/adda","Admin\WebsiteController@adda");
Route::any("/create","Admin\WebsiteController@create");
Route::get("/edit2/{news_id}","Admin\WebsiteController@edit2");
Route::any("/update2/{news_id}","Admin\WebsiteController@update2");
//新闻分类管理
Route::get("/Cat","Admin\CatController@Cat");
Route::any("/addc","Admin\CatController@addc");
Route::any("/addDo","Admin\CatController@addDo");
//热门推荐控制器
Route::get("/Hot","Admin\HotController@Hot");

Route::prefix("/admin") -> group(function(){
    //管理员添加
    Route::any("/add","Admin\AdminisController@adminAdd");
    //管理员展示
    Route::get("/list","Admin\AdminisController@adminList");
//    管理员添加数据
    Route::post("/add_name","Admin\AdminisController@adminadd_name");
});




//角色管理控制器
Route::get("/Role","Admin\RoleController@Role");
Route::get("/add","Admin\RoleController@add");
Route::any("/addDo","Admin\RoleController@addDo");
//权限节点管理控制器
Route::get("/Auth","Admin\AuthController@Auth");
Route::get("/adds","Admin\AuthController@adds");
Route::any("/addDo","Admin\AuthController@addDo");








