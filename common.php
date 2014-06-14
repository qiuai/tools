<?php
error_reporting(0);
if ($_GET['debug_mode'] != true) {
	//开启调试模式
	define('APP_DEBUG', true);
	error_reporting(7);
}
define('ROOT_PATH', dirname(__FILE__));
define('ENGINE_NAME','sae');

