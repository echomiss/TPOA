<?php
return array(
	//'配置项'=>'配置值'
	//设置允许访问的模块
	//'MODULE_ALLOW_LIST'     =>  array('Home','Admin'),
	//设置默认访问的模块，控制器，操作
	'DEFAULT_MODULE'        =>  'Survey',  // 默认模块
	'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
	'DEFAULT_ACTION'        =>  'index' ,// 默认操作名称
	/* 数据库设置 */
	'DB_TYPE'               =>  'mysql',     // 数据库类型
	'DB_HOST'               =>  'localhost', // 服务器地址
	'DB_NAME'               =>  'tpoa',          // 数据库名
	'DB_USER'               =>  'root',      // 用户名
	'DB_PWD'                =>  'root',          // 密码
	'DB_PORT'               =>  '3306',        // 端口
	'DB_PREFIX'             =>  'tp_',    // 数据库表前缀
	//禁止字段缓存
	'DB_FIELDS_CACHE'		=>  false,
);