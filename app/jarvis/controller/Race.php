<?php
namespace app\jarvis\controller;

use app\jarvis\controller\BaseController;
use think\facade\View;
use think\facade\Cookie;
use app\jarvis\model\RaceModel;
use think\facade\Request;

class Race extends BaseController
{

	/**
	 * 种族列表
	 * @return [type] [description]
	 */
    public function index(RaceModel $race)
    {

	    return view('main');
    }


    public function getRaces(RaceModel $raceModel)
    {
	    $params = Request::param();
	    $list = $raceModel -> getRaceList($params);
    	return json($list);
    }


}
