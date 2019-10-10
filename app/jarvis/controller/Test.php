<?php
namespace app\jarvis\controller;

use app\jarvis\controller\BaseController;
use think\facade\Request;
use think\facade\View;
//model
use app\jarvis\model\Admin;
use think\facade\Session;



class Test
{

    public function test(Admin $Admin)
    {
        halt('123test');
    }


}



