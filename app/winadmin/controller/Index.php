<?php
namespace app\winadmin\controller;

use app\winadmin\controller\BaseController;
use think\facade\View;

class Index extends BaseController
{

    public function index()
    {
    	// halt(__STATIC__);
        return View::fetch('index');
        // return view('index');
    }

    public function hello($name = 'ThinkPHP7')
    {
        return 'hello,' . $name;
    }

}
