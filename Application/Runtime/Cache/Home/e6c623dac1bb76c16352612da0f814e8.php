<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
		<title></title>
	</head>
	<style>
		html,
		body {
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			font-family: "microsoft yahei";
		}
		ul li{
			list-style: none;
		}
		.home {
			line-height: 45px;
			height: 45px;
			border-bottom: 1px #CCCCCC solid;
			font-size: 16px;
			font-weight: 500;
		}
		
		.left {
			width: 20px;
			height: 20px;
			position: absolute;
			left: 0;
			top: 8px;
			z-index: 2;
			/*兼容ie8-*/
			border: 1px solid #FFFFFF;
		}
		
		.left-arrow1,
		.left-arrow2 {
			width: 0;
			height: 0;
			display: block;
			position: absolute;
			left: 0;
			top: 0;
			z-index: 5;
			/*兼容ie8-*/
			border-top: 12px transparent dashed;
			border-left: 12px transparent dashed;
			border-bottom: 12px transparent dashed;
			border-right: 12px white solid;
			overflow: hidden;
		}
		
		.left-arrow1 {
			border-right: 12px #282828 solid;
		}
		
		.left-arrow2 {
			left: 2px;
			/*重要*/
			border-right: 12px white solid;
		}
		
		.main {
			width: 96%;
			height: 1px;
			float: right;
			border-bottom: 1px #CCCCCC solid;
		}
		
		.content {
			height: 40px;
			line-height: 39px;
			font-size: 15px;
			overflow: auto;
		}
		
		.content input {
			height: 20px;
			font-size: 15px;
			width: 80%;
			outline: none;
			border: none;
		}
		
		.right {
			width: 20px;
			height: 20px;
			position: absolute;
			right: 2%;
			float: right;
			top: 10px;
		}
		
		.right-arrow1,
		.right-arrow2 {
			width: 0;
			height: 0;
			display: block;
			position: absolute;
			left: 0;
			top: 0;
			border-top: 10px transparent dashed;
			border-right: 10px transparent dashed;
			border-bottom: 10px transparent dashed;
			border-left: 10px white solid;
			overflow: hidden;
		}
		
		.right-arrow1 {
			left: 1px;
			/*重要*/
			border-left: 10px #a7a7a7 solid;
		}
		
		.right-arrow2 {
			border-left: 10px white solid;
		}
		.modal-content ul{
			padding: 0 15px;
		}
		.modal-content ul li{
			display: block;
			line-height: 30px;
		}
		.modal-content ul li:hover{
			background: url("image/type-selected.png") no-repeat;
			background-position: right;
		}
	</style>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<body>
		<div class="home">
			<header>
				<div class="container">
					<div class="row">
						<div class="col-xs-5">
							<b class="left"><i class="left-arrow1"></i><i class="left-arrow2"></i></b>
						</div>
						<div class="col-xs-7">发通告</div>
					</div>
				</div>
			</header>
		</div>
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-3">类型</div>
					<div class="col-xs-9">
						<input readonly="readonly" type="text" placeholder="请选择类型" data-toggle="modal" data-target="#myModal" />
						<b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
					</div>
				</div>
			</div>
			<div class="main"></div>
		</div>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labellebdy="myModelLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<ul>
						<li data-value="主持人" class="selected">主持人</li>
						<li data-value="摄影师">摄影师</li>
						<li data-value="摄像师">摄像师</li>
						<li data-value="化妆师">化妆师</li>
						<li data-value="策划师">策划师</li>
						<li data-value="其他">其他</li>
					</ul>
				</div>
			</div>
		</div>
	</body>
	<script>
		/**
* 使页面中所有.modal元素在窗口可视范围之内居中
**/
function centerModals(){
  $('.modal').each(function(i){
    var $clone = $(this).clone().css('display', 'block').appendTo('body');
    var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
    top = top > 50 ? top : 0;
    $clone.remove();
    $(this).find('.modal-content').css("margin-top", top-50);
  });
}
// 在模态框出现的时候调用垂直居中函数
$('.modal').on('show.bs.modal', centerModals);
// 在窗口大小改变的时候调用垂直居中函数
$(window).on('resize', centerModals);
	</script>
</html>