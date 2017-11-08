<?php
namespace app\controller;
use app\model\liuyanModel;

class indexController extends \core\DiyPHP{
	//所有留言
	public function index(){
		$model = new liuyanModel();
		$data = $model->all();
		$this->assign('data',$data);
		$this->display('index.html');
	}
	//添加留言
	public function add(){
		$this->display('add.html');
	}
	//保存留言
	public function save(){
		$data['title'] = post('title');
		$data['content'] = post('content');
		$data['createtime'] = time();
		$model = new liuyanModel();
		if($model->addOne($data)){
			p('ok');
			jump('/');
		}else{
			p('error');
		}
	}
	//删除留言
	public function del(){
		$id = get('id',0,'int');
		
		if($id){
			$model = new liuyanModel();
			if($model->delOne($id)){
				jump('/');
			}else{
				exit('删除失败！');
			}
		}else{
			exit('参数错误！');
		}
	}
}