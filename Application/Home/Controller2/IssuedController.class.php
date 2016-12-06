<?php
namespace Home\Controller;
use Think\Controller;
class IssuedController extends Controller 
{
	public function index(){
		// 未完成的界面
		$list = M('shebei')->where('tstus = "1"')->select();
		$this->assign('list',$list);
		$this->display('issued/issued');
	}
	//更多道具
	public function dajax($id){
		$list = M('shebei')->where("id = {$id}")->select();
		$this->ajaxReturn($list);
	}
	//这里遍历未完成的道具 包括点击完成之后进入到已完成的界面
	public function wdaoju($id){
		$data['tstus'] = '2';
		$user = M('shebei')->where("id = {$id}")->save($data);
		if($user > 0){
			$list = M('shebei')->where('tstus = "2"')->select();
			$this->ajaxReturn($list);
			// echo 'y';
		}else{
			echo 'n';
		}
	}
	//遍历已完成的道具
	public function ydaoju(){
		$list = M('shebei')->where('tstus = "2"')->select();
		$this->ajaxReturn($list);
	}
}