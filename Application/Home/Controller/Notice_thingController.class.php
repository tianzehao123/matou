<?php
namespace Home\Controller;
use Think\Controller;
class NoticesController extends Controller 
{
	public function index(){
		//找道具
		$this->display('notice/notice_thing');
	}
	//表单提交后的结果
	public function notice(){
		// var_dump($_POST);
		echo 123;
	}
}