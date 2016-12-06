<?php
namespace Home\Controller;
use Think\Controller;
class IssuedController extends Controller 
{
	//对未完成的进行遍历
	public function index(){
		$stu = M('people')->where('status = "1"')->order('status desc')->select();
		$this->assign('list',$stu);
		$this->display('issued/issued');
	}
	//更多->详细信息
	public function dajax($id){
		$list = M('people')->where("id = {$id}")->select();
		$this->ajaxReturn($list);
	}
	// 包括点击完成之后进入到已完成的界面
	public function wdaoju($id){
		$data['status'] = '2';

		$user = M('people')->where("id = {$id}")->save($data);
		if($user > 0){
			
			$stu = M('people')->where('status = "2"')->select();
				// $list = M('people')->where('status = "2"')->select();
			$this->ajaxReturn($stu);
			// echo 'y';
		}else{
			echo 'n';
		}
	}
	//遍历已完成的道具
	public function ydaoju(){
		$list = M('people')->where('status = "2"')->order('status desc')->select();
		$this->ajaxReturn($list);
	}
}