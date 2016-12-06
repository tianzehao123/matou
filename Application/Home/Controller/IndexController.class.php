<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller 
{
	public function index()
	{
		if(!empty($_GET)){
			$where = $_GET['where'];
			$user = M('xinxi')->where($where)->select();
			$this->ajaxReturn($user);
		}else{
			$user = M('xinxi')->select();
			$this->assign('stu',$user);
			$this->display();
		}
		
		
		// 华丽的分割线

	}
	public function ajax($id){
		$list = M('xinxi')->where("id = {$id} ")->select();
		// var_dump($list);
		$this->ajaxReturn($list);
	}
	// 道具遍历
	public function daoju(){
		$user = M('shebei')->select();
		$this->ajaxReturn($user);
	}
	//更多道具
	public function dajax($id){
		$list = M('shebei')->where("id = {$id}")->select();
		$this->ajaxReturn($list);
	}
	public function list_notice(){
		$this->display('list/list_notice');
	}
}