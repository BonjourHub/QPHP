<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 * */

#预加载文件设置includePath
if (!defined("DOCUMENT_ROOT")) {
	$strRootPath = str_replace("//", "/", str_replace("\\", "/", $_SERVER["DOCUMENT_ROOT"]));
	$tops = strpos($strRootPath, ":");
	define("DOCUMENT_ROOT", strtoupper(substr($strRootPath, 0, $tops)).substr($strRootPath, $tops));
}
 set_include_path(DOCUMENT_ROOT . "/QPHP");
	

/*1.定义常量*/

#核心类库的路径
define('CORE', 'core/');
define('COMMON', CORE . 'common/');
#程序所在路径
define('APP', '/app');
#是否开启debug模式
define('DEBUG', true);

if (DEBUG) {
	#打开错误显示开关，输出错误
	ini_set('display_error', 'on');
} else {
	#关闭错误显示开关，不输出错误
	ini_set('display_error', 'off');
}

/*2.加载函数库*/

#加载公共函数库文件
include_once COMMON . 'function.php';

/*3.启动框架*/
#加载核心库函数
include_once CORE . 'core.func.php';

#使用命名空间加载
\core\RunQPHP::run();









