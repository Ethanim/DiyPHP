<?php
namespace core\lib;
use core\lib\config;
class route{
	public $controller;
	public $action;
	public function __construct(){
		/*
			1.隐藏index.php
			2.获取URL参数部分
			3.返回对应控制器和方法
		*/
		if(isset($_SERVER['REDIRECT_URL']) && $_SERVER['REDIRECT_URL'] != '/'){
			$path = $_SERVER['REDIRECT_URL'];
			$patharr = explode('/',trim($path,'/'));
			if(isset($patharr[0])){
				$this->controller = $patharr[0];
				unset($patharr[0]);
			}
			if(isset($patharr[1])){
				$this->action = $patharr[1];
				unset($patharr[1]);
			}else{
				$this->action = config::get('ACTION','route');
			}
			$count = count($patharr) + 2;
			$i = 2;
			while($i<$count){
				if(isset($patharr[$i+1]))
					$_GET[$patharr[$i]] = $patharr[$i+1];
				$i += 2; 
			}
			// p($_GET);
		}else{
			$this->controller = config::get('CONTROLLER','route');
			$this->action = config::get('ACTION','route');
		}
	}
	
}