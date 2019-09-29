<?php
namespace app\jarvis\controller;

use app\jarvis\controller\BaseController;
use think\facade\View;

class Index extends BaseController
{


    public function index()
    {
    	halt('这是登录后的首页');
        return view('index');
    }




}



