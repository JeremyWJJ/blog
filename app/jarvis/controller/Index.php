<?php
namespace app\jarvis\controller;

use app\BaseController;
use think\facade\View;

class Index extends BaseController
{

    public function index()
    {
    	// halt('贾维斯');
        // return View::fetch('index');
        return view('index');
    }

    public function hello($name = 'juwin')
    {
        return 'hello,' . $name;
    }

}
