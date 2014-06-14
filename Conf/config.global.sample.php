<?php
return array(
    'URL_MODEL'					=>  0,		// 如果你的环境不支持PATHINFO 请设置为3
	'APP_STATUS'				=> 'false',	// 调试模式

	'APP_AUTOLOAD_PATH'         =>  '@.TagLib',
    'SESSION_AUTO_START'        =>  true,
    'TMPL_ACTION_ERROR'         =>  'Public:success', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'       =>  'Public:success', // 默认成功跳转对应的模板文件
    'USER_AUTH_ON'              =>  true,
    'USER_AUTH_TYPE'			=>  2,		// 默认认证类型 1 登录认证 2 实时认证
    'MEMBER_AUTH_KEY'           =>  'memberId',	// 前台用户认证SESSION标记
	'WEB_AUTH_KEY'             	=>  'webId',	// 网站主认证SESSION标记
	'ADV_AUTH_KEY'             	=>  'advId',	// 广告主认证SESSION标记
	'USER_AUTH_KEY'             =>  'userId',	// 后台用户认证SESSION标记
    'ADMIN_AUTH_KEY'			=>  'administrator',
    'USER_AUTH_MODEL'           =>  'User',	// 默认验证数据表模型
    'AUTH_PWD_ENCODER'          =>  'md5',	// 用户认证密码加密方式
    'USER_AUTH_GATEWAY'         =>  '?m=Public&a=login',// 默认认证网关
    'NOT_AUTH_MODULE'           =>  'Public',	// 默认无需认证模块
    'REQUIRE_AUTH_MODULE'       =>  '',		// 默认需要认证模块
    'NOT_AUTH_ACTION'           =>  '',		// 默认无需认证操作
    'REQUIRE_AUTH_ACTION'       =>  '',		// 默认需要认证操作
    'GUEST_AUTH_ON'             =>  false,    // 是否开启游客授权访问
    'GUEST_AUTH_ID'             =>  0,        // 游客的用户ID
    'DB_LIKE_FIELDS'            =>  'title|remark',
    'RBAC_ROLE_TABLE'           =>  'zhts_role',
    'RBAC_USER_TABLE'           =>  'zhts_role_user',
    'RBAC_ACCESS_TABLE'         =>  'zhts_access',
    'RBAC_NODE_TABLE'           =>  'zhts_node',
    'SHOW_PAGE_TRACE'           =>  0,//显示调试信息
);
?>