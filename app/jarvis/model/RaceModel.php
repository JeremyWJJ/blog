<?php
namespace app\jarvis\model;

use think\Model;
use think\facade\Db;

class RaceModel extends Model
{
    // 设置字段信息
    protected $schema = [
        'id'       => 'int',
        'name'  => 'string',
        'eng'   => 'string',
        'status'   => 'int'
    ];
    // 设置废弃字段
    protected $disuse = [ 'version' ];

    public function getRaceList($links)
    {
        $where = array();
        if(isset($links['id'])){
            $where[] = array('id' , '=' , $links['id']);
        }
        if(isset($links['name'])){
            $where[] = array('name' , 'like' , '%'.$links['name'].'%');
        }
        if(isset($links['status'])){
            $where[] = array('status' , '='  , $links['status']);
        }
        
        $list = Db::table('race')
	->where($where)
        ->select();

    	return $list;
    }
}
