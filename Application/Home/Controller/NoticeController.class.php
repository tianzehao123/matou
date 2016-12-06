<?php
namespace Home\Controller;
use Think\Controller;
class NoticeController extends Controller 
{
	public function index()
	{
		//发通告
		 $this->display('notice/notice');
	}
	//点击发送通告后对数据的处理
	public function add()
	{
		$data['type'] = $_POST['type'];//类型
		$data['title'] = $_POST['title'];//标题
		$data['time'] = $_POST['time'];//活动日期
		$addre = explode(' ',$_POST['addre']);//活动地址
		$data['address'] = $addre[0];
		$data['amount'] = $_POST['amount'];//报价
		$data['tel'] = $_POST['tel'];//电话
		$data['weixin'] = $_POST['weixin'];//微信
		$data['qq'] = $_POST['qq'];//qq
		$data['email'] = $_POST['email'];//邮箱
		$data['content'] = $_POST['content'];
		$ob=M('people')->order('id DESC')->data($data)->add($data); 
		if($ob > 0)
		{
			redirect('/wx/index.php/home/issued/index');
		}
	
	}
}