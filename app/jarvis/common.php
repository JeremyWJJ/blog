<?php
// 应用公共文件
use think\facade\Session;
use think\facade\Cookie;
use think\facade\Db;

function test()
{
	halt('test');
}


/**
 * 设置session、cookie
 * 用于后台登录
 * @param  [type] $name [description]
 * @param  [type] $info [description]
 * @return [type]       [description]
 */
function login_session_cookie($name , $info)
{
	//设置session
    Session::set($name,$info);
    //设置cookie
    $cookie_admin_value = json_encode(array('name'=>$info->username , 'nickname'=>$info->nickname , 'email'=>$info->email , 'phone'=>$info->phone));
    Cookie::set($name , $cookie_admin_value , 36000);
}




/**
 * 登录信息存入日志
 * @param  [type] $name [用户名]
 * @return [type]       [description]
 */
function add_log($name , $operate)
{
    $log = [
        'name'      => $name,
        'ip'        => $_SERVER['REMOTE_ADDR'],
        'address'   => '北京',
        'operate'	=> $operate,
        'ctime'     => date('Y-m-d H:i:s',time())
    ];
    Db::name('log')->save($log);
}
