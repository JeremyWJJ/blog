<?php
namespace app\jarvis\controller;

use app\jarvis\controller\BaseController;
use think\facade\Request;
use think\facade\View;
//model
use app\jarvis\model\Admin;
use think\facade\Session;
use think\facade\Cookie;


class Login
{

    /**
     * 登录页展示
     * @return [type] [description]
     */
    public function index()
    {
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

        //根据username获取用户信息
        $userInfo = $Admin->getUserInfoByLinks($params['username'] , $params['password']);

        if(empty($userInfo->id)) 
            return json(array('code'=>10000 , 'msg'=>'用户名或密码错误' , 'data'=>array()));

        //设置session
        Session::set('admin',$userInfo);
        //设置cookie
        $cookie_admin_value = json_encode(array('name'=>$userInfo->username , 'nickname'=>$userInfo->nickname , 'email'=>$userInfo->email , 'phone'=>$userInfo->phone));
        Cookie::set('admin' , $cookie_admin_value , 36000);

        return json(array('code'=>1 , 'msg'=>'登录成功' , 'data'=>array()));
    }


}



