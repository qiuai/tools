<?php
//注意，请不要在这里配置SAE的数据库，配置你本地的数据库就可以了。

$commonConfig   	=   require ROOT_PATH . '/Conf/config.global.php';
$domainConfig		=	require 'domain.php';
$routeConfig 		=   require 'route.php';
$moduleConfig		=	require 'module.php';

$array=array(

	'TMPL_PARSE_STRING' 	=>  $domainConfig,  // 模板常量
	'SHOW_PAGE_TRACE'		=>	true,
    'URL_HTML_SUFFIX'		=>	'.html',

);

return array_merge($domainConfig, $array, $commonConfig, $moduleConfig, $routeConfig);
?>