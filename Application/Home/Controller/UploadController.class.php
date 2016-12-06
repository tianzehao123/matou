<?php
namespace Home\Controller;
use Think\Controller;
class UploadController extends Controller 
{
	public function index(){
		//上下线
		$this->display('Upload/upload');

	}
	//上传简历
	public function data(){
		$this->display('Upload/data');
	}
	public function upload(){
		// 上传简历
		$upload = new \Think\Upload($_FILES);// 实例化上传类    
		$upload->maxSize   =     3145728 ;// 设置附件上传大小    
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
		$upload->savePath  =      './Uploads'; // 设置附件上传目录  
		$info   =   $upload->upload(); 
		// 得到新的文件名
		$filename = $info['logo']['savename'];
		if($_POST['radio'] == '男'){
			$_POST['radio'] = 1;
		}else{
			$_POST['radio'] = 0;
		}
		$data['name'] = $_POST['name'];
		$data['sex'] = $_POST['radio'];
		$data['type'] = $_POST['type'];
		$data['height'] = $_POST['height'];
		$data['addre'] = $_POST['addre'];
		$data['age'] = $_POST['age'];
		$data['money'] = $_POST['money'];
		$data['tel'] = $_POST['tel'];
		$data['weixin'] = $_POST['weixi'];
		$data['qq'] = $_POST['qq'];
		$data['xiangqing'] = $_POST['content'];
		$data['img'] = $filename;
		$ob = M('xinxi')->add($data);
		if($ob > 0){
			$this->redirect("index/index");
		}

	}
}