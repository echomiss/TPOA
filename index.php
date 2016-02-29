<?php
	//设置响应头信息
	header('Content-type:text/html;charset = utf-8');
	//设置项目目录
	define('APP_PATH','./Application/');
	//开启错误调试功能
	define('APP_DEBUG',true);
	//引入ThinkPHP.php文件
	require './ThinkPHP/ThinkPHP.php';