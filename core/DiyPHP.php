<?php
//核心类库
namespace core;

class DiyPHP{
	public $assign;

	//初始化
	static public function run(){
		//调用日志类log.php
		\core\lib\log::init();
		$route = new \core\lib\route();
		$controllerName = $route->controller;
		$action = $route->action;
		$controllerFile = APP . '/controller/' . $controllerName . 'Controller.php';
		$controllerClass = '\\'.MODULE.'\controller\\'.$controllerName.'Controller';
		// echo $controllerClass;die;
		if(is_file($controllerFile)){
			include $controllerFile;
			$controller = new $controllerClass();
			$controller->$action();
			\core\lib\log::log('controller:'.$controllerName.'    '.'action:'.$action);
		}else{
			throw new \Exception('找不到控制器'.$controller);
		}
	}
	//自动加载
	static public function load($class){
		$class = str_replace('\\', '/', $class);
		$file = ROOT . '/' . $class . '.php';
		if(is_file($file)){
			include_once $file;
		}else{
			return false;
		}
		
		
	}
	//分配变量到视图
	public function assign($name,$value){
		$this->assign[$name] = $value;
	}
	//显示视图
	public function display($filename){
		// $file = APP . '/views/' . $file;
		// if($file){
		// 	extract($this->assign);
		// 	include $file;
		// }
		$file = APP . '/views/' . $filename;
		if($file){
			$loader = new \Twig_Loader_Filesystem(APP.'/views');
			$twig = new \Twig_Environment($loader, array(
			    'cache' => 'log/twig',
			    'debug' => DEBUG
			));

			$template = $twig->loadTemplate($filename);
			$template->display($this->assign?$this->assign:array());
		}

	}
}