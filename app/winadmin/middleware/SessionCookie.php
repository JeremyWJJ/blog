<?php

namespace app\winadmin\middleware;

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

        if ($request->param('name') == 'session') {
            return redirect('Index/hello');
        }

        return $next($request);
    }
}