<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller 
{
	public function index()
	{
		//接收类型传进来的值并且对这些值进行更改
		switch($_GET['type']){
			case 'zcr':
				$_GET['type'] = '主持人';
				break;
			case 'sys':
				$_GET['type'] = '摄影师';
				break;
		}
		// 判断get不为空的条件
		if(!empty($_GET)){
			if(!empty($_GET['type'])){
				$where = "type = '{$_GET['type']}'";
				$user = M('xinxi')->where($where)->select();
			}
			if(!empty($_GET['sex'])){
				if($_GET['sex'] == 1){
					$_GET['sex'] = 1;
				}else{
					$_GET['sex'] = '0';
				} 
				// var_dump($_GET);die;
				$where = "sex = '{$_GET['sex']}'";
				$user = M('xinxi')->where($where)->select();
			}
		}else{
			$user = M('xinxi')->select();
		}
		$this->assign('stu',$user);
		$this->display();
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
}