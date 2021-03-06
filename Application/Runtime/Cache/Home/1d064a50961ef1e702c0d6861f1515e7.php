<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
		<title>喜事码头</title>
	</head>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/wx/Public/Home/css/notice.css">
	<link rel="stylesheet" href="/wx/Public/Home/css/mobiscroll.core-2.5.2.css" type="text/css">
	<link rel="stylesheet" href="/wx/Public/Home/css/LArea.css" type="text/css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="/wx/Public/Home/js/mobiscroll.core-2.5.2.js"></script>
	<script src="/wx/Public/Home/js/mobiscroll.datetime-2.5.1-zh.js"></script>
	<script src="/wx/Public/Home/js/mobiscroll.datetime-2.5.1.js"></script>
	<script src="/wx/Public/Home/js/LAreaData1.js"></script>
	<script src="/wx/Public/Home/js/LAreaData2.js"></script>
	<script src="/wx/Public/Home/js/LArea.js"></script>
	<body>
		<form id="form1" action="/wx/index.php/home/notice/add" method="post">
			<div class="home">
				<header>
					<div class="container">
						<div class="row">
							<div class="col-xs-5">
								<a href="index.html"><b class="left"><i class="left-arrow1"></i><i class="left-arrow2"></i></b></a>
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
							<input id="type" readonly="readonly" type="text" placeholder="请选择类型" name="type" data-toggle="modal" data-target="#myModal" />
							<b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
						</div>
					</div>
				</div>
				<div class="main"></div>
			</div>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-xs-3">标题</div>
						<div class="col-xs-9">
							<input id="title" type="text" name="title" placeholder="如某某需要音响师一名" maxlength="9"/>
						</div>
					</div>
				</div>
				<div class="main"></div>
			</div>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-xs-3">活动日期</div>
						<div class="col-xs-9">
							<input id="appDate" name="time" readonly="readonly" type="text" placeholder="2016-11-09"/>
							<b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
						</div>
					</div>
				</div>
				<div class="main"></div>
			</div>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-xs-3">活动地址</div>
						<div class="col-xs-9">
							<input id="city" readonly="readonly" name="addre" type="text" placeholder="河南省 郑州市 金水区"/>
							<script>
								$('#city').on('click', function() {
									//页面层
									layer.open({
										title: '   ',
										area: ['90%', '550px'],
										type: 2,
										content: 'http://www.pandazero.top/wx2/maplist.html' //这里content是一个URL，如果你不想让iframe出现滚动条，你还可以content: ['http://sentsin.com', 'no']
									});
									
								});
							</script>
							<b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
						</div>
					</div>
				</div>
				<div class="main"></div>
			</div>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-xs-3">预算/天</div>
						<div class="col-xs-9">
							<input id="price" type="text" maxlength="5" name="amount" placeholder="请输入价格"/>
						</div>
					</div>
				</div>
				<div class="main"></div>
			</div>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-xs-3">性别</div>
						<div class="col-xs-9">
							<input id="sex" readonly="readonly" name="sex" type="text" placeholder="不限" data-toggle="modal" data-target="#sexModal"/>
							<b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
						</div>
					</div>
				</div>
				<div class="main"></div>
			</div>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-xs-3">电话</div>
						<div class="col-xs-9">
							<input maxlength="11" id="tel" name="tel" onKeyUp="this.value=this.value.replace(/[^\d]/g,'') " type="text" placeholder="请输入电话">
						</div>
					</div>
				</div>
				<div class="main"></div>
			</div>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-xs-3">微信</div>
						<div class="col-xs-9">
							<input id="wechat" type="text" name="weixin" maxlength="11" placeholder="请输入微信号"/>
						</div>
					</div>
				</div>
				<div class="main"></div>
			</div>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-xs-3">QQ</div>
						<div class="col-xs-9">
							<input id="QQ" type="text" maxlength="11" name="qq" placeholder="请输入QQ"/>
						</div>
					</div>
				</div>
				<div class="main"></div>
			</div>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-xs-3">Email</div>
						<div class="col-xs-9">
							<input id="email" type="text" maxlength="11" name="email"placeholder="请输入Email"/>
						</div>
					</div>
				</div>
				<div class="main"></div>
			</div>
			<div class="content background"></div>
			<footer>
				<div class="footer">
					<div class="footer-top">
						<div class="container">
							<div class="row">
								<div class="col-xs-3">其他要求</div>
								<div class="col-xs-9">
									<textarea id="detail" maxlength="50" name="content"placeholder="输入其他详细信息"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-bottom">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="button">立刻发布</div>
									<input id="submit" type="submit" style="display: none;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</form>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labellebdy="myModelLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="select_type">
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
		</div>
		<div class="modal fade" id="sexModal" tabindex="-1" role="dialog" aria-labellebdy="myModelLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="select_sex">
						<ul>
							<li data-value="不限" class="selected">不限</li>
							<li data-value="男">男</li>
							<li data-value="女">女</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script>
		/**
* 使页面中所有.modal元素在窗口可视范围之内居中
**/
		$(function(){
			$('.button').click(function(){
				$('#submit').click();
			});
			$('#submit').click(function(){
				if($('#type').val() == ''){
					$('head').append('<style>#type::-webkit-input-placeholder { color:#ed4c59;}</style>');
					$('#form1').attr('action','javascript:;');
				}else if($('#title').val() == ''){
					$('head').append('<style>#title::-webkit-input-placeholder { color:#ed4c59;}</style>');
					$('#form1').attr('action','javascript:;');
				}else if($('#tel').val() == ''){
					$('head').append('<style>#tel::-webkit-input-placeholder { color:#ed4c59;}</style>');
					$('#form1').attr('action','javascript:;');
				}else{
					$('#form1').attr('action','/wx/index.php/home/notice/add');
				}
			});
		});
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
		$('#myModal ul li').on('click',function(){
			var _this = $(this);
			$('#type').val(_this.attr('data-value'));
			_this.addClass('selected').siblings().removeClass('selected');
			$('#myModal').modal('hide');
		});
		$('#sexModal ul li').on('click',function(){
			var _this = $(this);
			$('#sex').val(_this.attr('data-value'));
			_this.addClass('selected').siblings().removeClass('selected');
			$('#sexModal').modal('hide');
		});
		$(function () {
			var currYear = (new Date()).getFullYear();
			var opt = {};
			opt.date = {preset: 'date'};
			//opt.datetime = { preset : 'datetime', minDate: new Date(2012,3,10,9,22), maxDate: new Date(2014,7,30,15,44), stepMinute: 5  };
			opt.datetime = {preset: 'datetime'};
			opt.time = {preset: 'time'};
			opt.default = {
				preset: 'date',
				theme: 'ios light', //皮肤样式
				display: 'modal', //显示方式
				mode: 'clickpick', //日期选择模式
				lang: 'zh',
				setText: '确定', //确认按钮名称
				cancelText: '取消',//取消按钮名籍我
				startYear: currYear - 10, //开始年份
				endYear: currYear + 10 //结束年份
			};
			$("#appDate").val('').scroller('destroy').scroller($.extend(opt['date'], opt['default']));
			var optDateTime = $.extend(opt['datetime'], opt['default']);
			var optTime = $.extend(opt['time'], opt['default']);
		});
		var area2 = new LArea();
		area2.init({
			'trigger': '#city',
			'keys': {
				id: 'value',
				name: 'text'
			},
			'type': 2,
			'data': [provs_data, citys_data, dists_data]
		});
		move:function move(event){
			//当屏幕有多个touch或者页面被缩放过，就不执行move操作
			if(event.targetTouches.length > 1 || event.scale && event.scale !== 1) return;
			var touch = event.targetTouches[0];
			endPos = {x:touch.pageX - startPos.x,y:touch.pageY - startPos.y};
			isScrolling = Math.abs(endPos.x) < Math.abs(endPos.y) ? 1:0; //isScrolling为1时，表示纵向滑动，0为横向滑动
			if(isScrolling === 0){
				event.preventDefault(); //阻止触摸事件的默认行为，即阻止滚屏
				this.slider.className = 'cnt';
				this.slider.style.left = -this.index*600 + endPos.x + 'px';
			}
		}
	</script>
</html>