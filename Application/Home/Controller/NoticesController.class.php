<?php
namespace Home\Controller;
use Think\Controller;
class NoticesController extends Controller 
{
	public function index(){
		//找道具
		$this->display('notice/notice_thing');
	}
	public function notice(){
		$data['type'] = $_POST['type'];
		$data['title'] = $_POST['title'];
		$data['time'] = $_POST['riqi'];
		$addre = explode(' ',$_POST['addre']);
		$data['address'] = $addre[0];
		$data['amount'] = $_POST['money'];
		$data['tel'] = $_POST['tel'];
		$data['weixin'] = $_POST['weixin'];
		$data['content'] = $_POST['content'];
		$ob = M('people')->add($data);
		if($ob > 0){
			redirect('/wx/index.php/home/issued/index');
		}
	}
}