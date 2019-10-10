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
    	$info = Db::table('admin')->where('id', 2)->find();
    	return $info;
    }
}