<?php
namespace app\jarvis\controller;

use app\jarvis\controller\BaseController;
use think\facade\View;
use think\facade\Cookie;
use app\jarvis\model\IndexModel;

class Index extends BaseController
{

	/**
	 * 首页
	 * @return [type] [description]
	 */
    public function index(IndexModel $index)
    {
        $cookie = Cookie::get('admin');
        $admin = json_decode($cookie);
        //各项统计
	    $info = $index->getIndex($admin);
	    View::assign([
	        'name'  => $admin->nickname ?? $admin->name,
	        'title' => '贾维斯 Javis',
	        'admin' => $info['admin'],
	        'profession' => $info['profession'],
	        'race'  => $info['race'],
	        'login' => $info['login'],
	        'ip'    => $info['last']['ip'] ?? '0:0:0:0',
	        'ipTime'=> $info['last']['ctime'] ?? '未知'

	    ]);

	    return view('main');
    }


    public function chess()
    {
    	return $this->hasMany(Log::class);
    }




}



