<?php
namespace app\jarvis\controller;

use app\jarvis\controller\BaseController;
use think\facade\View;
use think\facade\Cookie;

class Index extends BaseController
{


    public function index()
    {
    	$admin = Cookie::get('admin');
    	View::assign([
    		'name' => $admin->nickname ?? $admin->name
    	]);
    	halt($admin);
        return view('main');
    }




}



