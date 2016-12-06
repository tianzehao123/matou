<?php
namespace Home\Controller;
use Think\Controller;
class ResourceController extends Controller 
{
	public function index(){
		// 四大金刚与供应商-》四大金刚
		$user = M('xinxi')->select();
		$this->assign('stu',$user);
		$this->display('list/list_resource');
	}
	//这里用来遍历供应商的信息
	public function gong(){
		$list = M('gong')->select();
		$this->ajaxReturn($list);
	}
	public function gongs($id){
		$list = M('gong')->where("id = {$id}")->select();
		$this->ajaxReturn($list);
	}
}