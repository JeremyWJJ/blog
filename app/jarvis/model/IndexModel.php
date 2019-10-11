<?php
namespace app\jarvis\model;

use think\Model;
use think\facade\Db;

class IndexModel extends Model
{
    // 设置字段信息
    protected $schema = [
        'id'        => 'int',
        'username'  => 'string',
        'password'  => 'string',
        'nickname'  => 'string',
        'email'     => 'string',
        'phone'     => 'string',
        'status'    => 'int',
        'ctime'     => 'timestamp',
        'utime'     => 'timestamp',
    ];

    public function getIndex($admin)
    {
        //管理员数量
    	$admin_num = Db::table('admin')->count();
        //职业数量
        $profession_num = Db::table('profession')->count();
        //种族数量
        $race_num = Db::table('race')->count();
        //今天登录数
        $login_num = Db::table('log')
        ->where('operate','login')
        ->whereDay('ctime')
        ->fetchSql()
        ->count();
        // Db::listen(function($sql, $runtime, $master) {
        //     return $sql;
        // });
    	return $login_num;
    }
}