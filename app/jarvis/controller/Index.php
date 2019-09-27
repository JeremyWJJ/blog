<?php
namespace app\jarvis\controller;

use app\jarvis\controller\BaseController;
use think\facade\View;

class Index extends BaseController
{


    public function index()
    {
        return view('index');
    }




}



