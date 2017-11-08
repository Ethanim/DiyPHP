<?php
/*
	入口文件
	1.定义常量
	2.加载类库
	3.启动框架
*/
//定义常量
define('ROOT',realpath('./'));
define('CORE',ROOT.'/core');
define('APP',ROOT.'/app');
define('MODULE','app');

include "vendor/autoload.php";

define('DEBUG',true);
if(DEBUG){
	$whoops = new \Whoops\Run;
	$errorTitle = '框架出错';
	$option = new \Whoops\Handler\PrettyPageHandler;
	$option->setPageTitle($errorTitle);
	$whoops->pushHandler($option);
	$whoops->register();
	ini_set('display_error',true);
}else{
	ini_set('display_error',false);
}
//加载函数库
include CORE.'./common/function.php';

//加载核心类库
include CORE.'/DiyPHP.php';

//new不存在的类调用 load方法
spl_autoload_register('\core\DiyPHP::load');


//启动框架
\core\DiyPHP::run();
