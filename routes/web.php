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

//首页
Route::get('/index','Index\BrandController@index'); //首页的视图
Route::get('/goods','Index\BrandController@goodsDesc'); //商品详情的展示
