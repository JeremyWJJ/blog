<?php
namespace app\jarvis\model;

use think\Model;
use think\facade\Db;
use think\model\concern\SoftDelete;

class Admin extends Model
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
        'ctime' 	=> 'timestamp',
        'utime' 	=> 'timestamp',
        'dtime' 	=> 'string',
    ];


    use SoftDelete;
    //软删除标记字段
    protected $deleteTime = 'dtime';
    //软删除字段的默认值
    protected $defaultSoftDelete = '1';


    /**
     * 单条查询admin表数据（全部直等查询）
     * @param  [type] $links [description]
     * @return [type]        [description]
     */
    public function getUserInfoByLinks($user , $pass , $status = 1)
    {
    	if($user){
    		$map[] = array('username' , '=' , $user);
    	}

    	if($pass){
    		$map[] = array('password' , '=' , md5($pass));
    	}

    	if($status){
    		$map[] = array('status' , '=' , $status);
    	}

    	$info = Admin::where($map)->findOrEmpty();

    	// return Admin::getLastSql();
    	return $info;
    }
}