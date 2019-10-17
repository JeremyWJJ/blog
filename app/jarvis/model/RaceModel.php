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
        'version'  => 'string'
    ];

    public function getRaceList($id , $name , $status)
    {
        $where = array();
        if($id){
            $where[] = array('id' , $id);
        }
        if($name){
            $where[] = array('name' , 'like' , '%'.$name.'%');
        }
        if($stauts){
            $where[] = array('status' , $status);
        }
        
        $list = Db::table('race')
        ->where($where)
        ->select();

    	return $list;
    }
}