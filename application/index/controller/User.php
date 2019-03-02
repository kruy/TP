<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User as UserModel;
use app\index\validate\User as UserVaildate;
/**
* 
*/
class User extends Controller
{
	public function list(){
		return $this -> fetch();
	}
	public function add(){
		return $this -> fetch();
	}
	public function edit(){
		return $this -> fetch();
	}

	public function insert{
		$data = input('post.');
		$val = new UserVaildate();
		if(!$val->check($data)){
			$this->error($val->getError());
			exit;
		}
		$user = new UserModel($data);
		$ret = $user-> allowFiled(true)->save();
		if($ret){
			$this->success('添加成功')；
		}else{
			$this->error('添加失败')；
		}

	}
}