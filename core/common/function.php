<?php
function p($var){
	if(is_bool($var)){
		var_dump($var);
	}else if(is_null($var)){
		var_dump(NULL);
	}else{
		echo '<pre>' . print_r($var,true) . '</pre>'; 
	}
}
/*
	$name 对应值
	$default 默认值
	$fitt 过滤方法 'int'
*/
function post($name,$default=false,$fitt=false){
	if(isset($_POST[$name])){
		if($fitt){
			switch($fitt){
				case 'int':
					if(is_numeric($_POST[$name])){
						return $_POST[$name];
					}else{
						return $default;
					}
				break;
				default: ;
			}
		}else{
			return $_POST[$name];
		}
	}else{
		return $default;
	}
}
function get($name,$default=false,$fitt=false){
	if(isset($_GET[$name])){
		if($fitt){
			switch($fitt){
				case 'int':
					if(is_numeric($_GET[$name])){
						return $_GET[$name];
					}else{
						return $default;
					}
				break;
				default: ;
			}
		}else{
			return $_GET[$name];
		}
	}else{
		return $default;
	}
}
//跳转函数
function jump($url){
	header('Location:'.$url);
	die;
}