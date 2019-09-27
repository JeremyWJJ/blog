<?php

namespace app\jarvis\middleware;

use think\facade\Session;
use think\facade\Cookie;

/**
 *	验证是否登录 
 *
 */
class SessionCookie
{
    public function handle($request, \Closure $next)
    {

        if (Session::has('admin')) {
            return redirect('Login/index');
        }

        return $next($request);
    }
}