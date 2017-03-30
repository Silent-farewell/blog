<?php
return array(

	'DB_HOST' => '127.0.0.1',
	'DB_USER' => 'root',
	'DB_PWD' => '123456',
	'DB_NAME' => 'myblog',
	'DB_PREFIX' => 'hd_',


	'APP_GROUP_LIST' => 'Index,Admin',   //此处逗号后不能有空格
	'DEFAULT_GROUP' => 'Index',
	'APP_GROUP_MODE' => 1,
	'APP_GROUP_PATH' => 'Modules',

	//加载配置文件
	'LOAD_EXT_CONFIG' => 'verify',

	//开启调试模式
	//'SHOW_PAGE_TRACE' => true,

	//URL路由配置
	'URL_MODEL' => 2,
	'URL_ROUTER_ON' => true,
	'URL_ROUTE_RULES' => array(
		'/^c_(\d+)$/' => 'Index/List/index?id=:1',
		':id\d' => 'Index/Show/index',
		'Index/index' => 'Index/Index/index'
		),

	//点语法默认解析
	'TMPL_VAR_IDENTIFY' => 'ARRAY',

	//默认过滤函数
	'DEFAULT_FILIER' => 'htmlspecialchars',

	// //自定义SESSION 数据库存储
	// 'SESSION_TYPE' => 'Db',

	//REDIS服务器地址
	'REDIS_HOST' => '127.0.0.1',

	//REDIS端口
	'REDIS_PORT' => 6379,
);
?>