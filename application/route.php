<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
//get
Route::get('test', 'api/test/index');
Route::put('test/:id', 'api/test/update');// 修改
Route::delete('test/:id', 'api/test/delete');// delete


Route::resource('test', 'api/test');
/// x.com/test  post  => api test save

Route::get('api/:ver/cat', 'api/:ver.cat/read');
Route::get('api/:ver/index', 'api/:ver.index/index');
Route::get('api/:ver/init', 'api/:ver.index/init');

// news
Route::resource('api/:ver/news', 'api/:ver.news');
//排行
Route::get('api/:ver/rank', 'api/:ver.rank/index');
//短信验证码相关
Route::resource('api/:ver/identify', 'api/:ver.identify');