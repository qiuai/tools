<?php
require_once 'common.php';

//定义项目名称
define('APP_NAME', 'Home');

//定义项目路径
define('APP_PATH', ROOT_PATH . '/App/Home/');

// 直接设定模块名称，缩短网址
$_GET['m'] = 'Click';
require_once ROOT_PATH . '/ThinkPHP/ThinkPHP.php';


