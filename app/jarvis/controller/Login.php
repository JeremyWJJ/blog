<?php
namespace app\jarvis\controller;

use app\jarvis\controller\BaseController;
use think\facade\Request;
use think\facade\View;
//model
use app\jarvis\model\Admin;
use think\facade\Session;



class Login
{

    /**
     * 登录页展示
     * @return [type] [description]
     */
    public function index()
    {
        if (Session::has('admin')) {
            return redirect('Index/index');
        }
        return View::fetch('index');
    }


    /**
     * 登录操作
     * @return [type] [description]
     */
    public function login(Admin $Admin)
    {
        
        //获取参数、拼条件
        $params = Request::param();

        //根据username验证用户信息
        $userInfo = $Admin->checkUserInfo($params['username'] , $params['password']);

        if(empty($userInfo->id)) 
            return Jerror('用户名或密码错误' , array('username' => $params['username']));

        login_session_cookie('admin' , $userInfo);

        add_log($params['username'] , 'login');

        return Jsuccess('登录成功');
    }


}



