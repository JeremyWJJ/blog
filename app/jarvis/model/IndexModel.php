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
        ->whereTime('ctime' , '>=' , date('Y-m-d 00:00:00',time()))
        ->whereTime('ctime' , '<' , date('Y-m-d 00:00:00',strtotime('+1 day')))
        ->count();

        //该管理员上次登录信息
        $last = Db::table('log')
        ->leftJoin('admin','admin.id = log.user_id')
        ->where('admin.username',$admin->name)
        ->order('log.ctime','desc')
        ->find();

    	return array(
            'admin' => $admin_num,
            'profession' => $profession_num,
            'race' => $race_num,
            'login' => $login_num,
            'last' => $last
        );
    }
}