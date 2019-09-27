<?php
// 全局应用公共文件

/**
 * 定义报错信息
 * @param [string] $[msg] [报错信息]
 * @param [array] $[data] [返回值]
 */
function Jerror($msg , $data = [] , $code = 10000)
{
	$error = array('code'=>10000 , 'msg'=>'' , 'data'=>[]);
	if($msg){
		$error['msg'] = $msg;
	}
	if($data){
		$error['data'] = $data;
	}
	if($code !== 10000){
		$error['code'] = $code;
	}

	return json($error);
}


/**
 * 定义成功信息
 * @param [string] $[msg] [成功提示信息]
 * @param [array] $[data] [返回值]
 */
function Jsuccess($msg , $data = [] , $code = 200)
{
	$success = array('code'=>200 , 'msg'=>'' , 'data'=>[]);
	if($msg){
		$success['msg'] = $msg;
	}
	if($data){
		$success['data'] = $data;
	}
	if($code !== 200){
		$success['code'] = $code;
	}

	return json($success);
}