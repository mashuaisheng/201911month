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

//后台展示路由
Route::get("/Admin","Admin\AdminController@Admin");

//购物车详情控制器
Route::get("/Goods","Admin\GoodsContrller@index");

//网站访问量控制器
Route::get("/Man","Admin\ManagementContrller@index");



