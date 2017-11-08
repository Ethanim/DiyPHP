<?php
namespace core\lib;
use core\lib\config;
use Medoo\Medoo;
class model extends Medoo{
	public function __construct(){
		// $database = config::all('database');
		// try{
		// 	parent::__construct($database['DSN'], $database['USERNAME'], $database['PASSWORD']);
		// }catch(\PDOException $e){
		// 	p($e->getMessage());
		// }
		$option = config::all('database');
		parent::__construct($option);
	}
}