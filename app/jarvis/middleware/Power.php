<?php

namespace app\jwin\middleware;

use think\facade\Request;

/**
 *	权限中间件
 *	验证登录用户权限
 * 
 */
class Power
{
    public function handle($request, \Closure $next)
    {
    	
        if ($request->param('name') == 'think') {
            return redirect('Index/hello');
        }

        return $next($request);
    }
}