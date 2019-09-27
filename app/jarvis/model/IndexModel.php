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

    public function getUserInfoByLinks()
    {
    	$info = Db::table('he_admin')->where('id', 2)->find();
    	return $info;
    }
}