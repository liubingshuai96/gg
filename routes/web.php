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

Route::group([], function(){
	Route::get('/admin/index', 'Admin\IndexController@index');
	//商品分类查看
	Route::resource('/admin/type', 'Admin\TypeController');
	// 分类状态路由
	Route::get('/admin/ajaxup', 'Admin\TypeController@ajaxup');

	// ajax请求路由
	//商品名称无刷新修改
	Route::get('/admin/goods/ajaxgs', 'Admin\GoodsController@ajaxgs');
	//商品图片ajax删除
	Route::get('/admin/goods/ajaxdelete', 'Admin\GoodsController@ajaxdelete');


	//商品详情
	Route::resource('/admin/goods', 'Admin\GoodsController');
});