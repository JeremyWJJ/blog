<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

// Route::get('think', function () {
//     return 'hello,ThinkPHP6!';
// });

//登录页
Route::any('login', 'Login/index');
//登录操作
Route::any('dologin/<username>/<password>' , 'Login/login');
//首页
Route::any('index', 'Index/index');

Route::any('hello/<name?>', 'Index/hello');

Route::get('user', 'User/index');
