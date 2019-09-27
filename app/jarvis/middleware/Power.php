<?php

namespace app\jarvis\middleware;

use think\facade\Request;

/**
 *	权限中间件
 *	验证登录用户权限
 * 
 */
class Power
{
	use Demo1,Demo2;

    public function handle($request, \Closure $next)
    {
    	
        if ($request->param('name') == 'think') {
            return redirect('Index/hello');
        }

		// halt($this->hello1());

        return $next($request);
    }
}



// class Traits
// {
//     public function run()
//     {
//         $obj = new Demo;
//         echo $obj->hello();

//         echo '<hr>';
//         echo $obj->test1();

//         echo '<hr>';
//         echo $obj->test2();
//     }
// }

trait Demo1
{
    public function hello1()
    {
        return __METHOD__;
    }
}

trait Demo2
{
    public function hello2()
    {
        return __METHOD__;
    }
}

// class Demo
// {
//     use Demo1,Demo2;
//     public function hello()
//     {
//         return __METHOD__;
//     }
//     public function test1()
//     {
//         return $this->hello1();
//     }
//     public function test2()
//     {
//         return $this->hello2();
//     }
// }