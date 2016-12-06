<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link href="/wx/Public/Home/css/mui.min.css" rel="stylesheet" />
		<link href="/wx/Public/Home/css/mui.indexedlist.css" rel="stylesheet" />
		<style>
			html,
			body {
				height: 100%;
				overflow: hidden;
			}
		</style>
	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<a href="list.html" class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">城市列表</h1>
		</header>
		<div class="mui-content">
			<div id='list' class="mui-group-list">
				<div class="mui-group-list-search mui-input-row mui-search" style="display: none;">
					<input id="input_search" type="search" class="mui-input-clear mui-group-list-search-input" placeholder="搜索城市">
				</div>
				<div class="mui-group-list-bar">
					<a>A</a>
					<a>B</a>
					<a>C</a>
					<a>D</a>
					<a>E</a>
					<a>F</a>
					<a>G</a>
					<a>H</a>
					<a>I</a>
					<a>J</a>
					<a>K</a>
					<a>L</a>
					<a>M</a>
					<a>N</a>
					<a>O</a>
					<a>P</a>
					<a>Q</a>
					<a>R</a>
					<a>S</a>
					<a>T</a>
					<a>U</a>
					<a>V</a>
					<a>W</a>
					<a>X</a>
					<a>Y</a>
					<a>Z</a>
				</div>
				<div class="mui-group-list-alert"></div>
				<div class="mui-group-list-inner">
					<div class="mui-group-list-empty-alert">没有数据</div>
					<ul id="ul_city" class="mui-table-view">
						<li data-group="A" class="mui-table-view-divider mui-group-list-group">A</li>
						<li class="mui-table-view-cell mui-group-list-item">澳门</li>
						<li class="mui-table-view-cell mui-group-list-item">安康市</li>
						<li class="mui-table-view-cell mui-group-list-item">安庆市</li>
						<li class="mui-table-view-cell mui-group-list-item">安顺市</li>
						<li class="mui-table-view-cell mui-group-list-item">安阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">鞍山市</li>
						<li class="mui-table-view-cell mui-group-list-item">阿克苏</li>
						<li class="mui-table-view-cell mui-group-list-item">阿拉尔市</li>
						<li class="mui-table-view-cell mui-group-list-item">阿拉善盟</li>
						<li class="mui-table-view-cell mui-group-list-item">阿勒泰</li>
						<li class="mui-table-view-cell mui-group-list-item">阿里</li>
						<li data-group="B" class="mui-table-view-divider mui-group-list-group">B</li>
						<li class="mui-table-view-cell mui-group-list-item">巴彦淖尔市</li>
						<li class="mui-table-view-cell mui-group-list-item">巴中市</li>
						<li class="mui-table-view-cell mui-group-list-item">巴州</li>
						<li class="mui-table-view-cell mui-group-list-item">白城市</li>
						<li class="mui-table-view-cell mui-group-list-item">白沙县</li>
						<li class="mui-table-view-cell mui-group-list-item">白山市</li>
						<li class="mui-table-view-cell mui-group-list-item">白银市</li>
						<li class="mui-table-view-cell mui-group-list-item">百色市</li>
						<li class="mui-table-view-cell mui-group-list-item">蚌埠市</li>
						<li class="mui-table-view-cell mui-group-list-item">包头市</li>
						<li class="mui-table-view-cell mui-group-list-item">宝鸡市</li>
						<li class="mui-table-view-cell mui-group-list-item">保定市</li>
						<li class="mui-table-view-cell mui-group-list-item">保山市</li>
						<li class="mui-table-view-cell mui-group-list-item">保亭县</li>
						<li class="mui-table-view-cell mui-group-list-item">北海市</li>
						<li class="mui-table-view-cell mui-group-list-item">北京市</li>
						<li class="mui-table-view-cell mui-group-list-item">本溪市</li>
						<li class="mui-table-view-cell mui-group-list-item">毕节</li>
						<li class="mui-table-view-cell mui-group-list-item">滨州市</li>
						<li class="mui-table-view-cell mui-group-list-item">亳州市</li>
						<li class="mui-table-view-cell mui-group-list-item">博州</li>
						<li data-group="C" class="mui-table-view-divider mui-group-list-group">C</li>
						<li class="mui-table-view-cell mui-group-list-item">长春市</li>
						<li class="mui-table-view-cell mui-group-list-item">长沙市</li>
						<li class="mui-table-view-cell mui-group-list-item">长治市</li>
						<li class="mui-table-view-cell mui-group-list-item">沧州市</li>
						<li class="mui-table-view-cell mui-group-list-item">昌都</li>
						<li class="mui-table-view-cell mui-group-list-item">昌吉州</li>
						<li class="mui-table-view-cell mui-group-list-item">昌江县</li>
						<li class="mui-table-view-cell mui-group-list-item">常德市</li>
						<li class="mui-table-view-cell mui-group-list-item">常州市</li>
						<li class="mui-table-view-cell mui-group-list-item">巢湖市</li>
						<li class="mui-table-view-cell mui-group-list-item">朝阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">潮州市</li>
						<li class="mui-table-view-cell mui-group-list-item">郴州市</li>
						<li class="mui-table-view-cell mui-group-list-item">成都市</li>
						<li class="mui-table-view-cell mui-group-list-item">承德市</li>
						<li class="mui-table-view-cell mui-group-list-item">澄迈县</li>
						<li class="mui-table-view-cell mui-group-list-item">重庆市</li>
						<li class="mui-table-view-cell mui-group-list-item">池州市</li>
						<li class="mui-table-view-cell mui-group-list-item">赤峰市</li>
						<li class="mui-table-view-cell mui-group-list-item">崇左市</li>
						<li class="mui-table-view-cell mui-group-list-item">滁州市</li>
						<li class="mui-table-view-cell mui-group-list-item">楚雄州</li>
						<li data-group="D" class="mui-table-view-divider mui-group-list-group">D</li>
						<li class="mui-table-view-cell mui-group-list-item">达州市</li>
						<li class="mui-table-view-cell mui-group-list-item">大理州</li>
						<li class="mui-table-view-cell mui-group-list-item">大连市</li>
						<li class="mui-table-view-cell mui-group-list-item">大庆市</li>
						<li class="mui-table-view-cell mui-group-list-item">大同市</li>
						<li class="mui-table-view-cell mui-group-list-item">大兴安岭</li>
						<li class="mui-table-view-cell mui-group-list-item">丹东市</li>
						<li class="mui-table-view-cell mui-group-list-item">儋州市</li>
						<li class="mui-table-view-cell mui-group-list-item">德宏州</li>
						<li class="mui-table-view-cell mui-group-list-item">德阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">德州市</li>
						<li class="mui-table-view-cell mui-group-list-item">迪庆州</li>
						<li class="mui-table-view-cell mui-group-list-item">定安县</li>
						<li class="mui-table-view-cell mui-group-list-item">定西市</li>
						<li class="mui-table-view-cell mui-group-list-item">东方市</li>
						<li class="mui-table-view-cell mui-group-list-item">东莞市</li>
						<li class="mui-table-view-cell mui-group-list-item">东营市</li>
						<li data-group="E" class="mui-table-view-divider mui-group-list-group">E</li>
						<li class="mui-table-view-cell mui-group-list-item">鄂尔多斯市</li>
						<li class="mui-table-view-cell mui-group-list-item">鄂州市</li>
						<li class="mui-table-view-cell mui-group-list-item">恩施州</li>
						<li data-group="F" class="mui-table-view-divider mui-group-list-group">F</li>
						<li class="mui-table-view-cell mui-group-list-item">防城港市</li>
						<li class="mui-table-view-cell mui-group-list-item">佛山市</li>
						<li class="mui-table-view-cell mui-group-list-item">福州市</li>
						<li class="mui-table-view-cell mui-group-list-item">抚顺市</li>
						<li class="mui-table-view-cell mui-group-list-item">抚州市</li>
						<li class="mui-table-view-cell mui-group-list-item">阜新市</li>
						<li class="mui-table-view-cell mui-group-list-item">阜阳市</li>
						<li data-group="G" class="mui-table-view-divider mui-group-list-group">G</li>
						<li class="mui-table-view-cell mui-group-list-item">甘南州</li>
						<li class="mui-table-view-cell mui-group-list-item">甘孜州</li>
						<li class="mui-table-view-cell mui-group-list-item">赣州市</li>
						<li class="mui-table-view-cell mui-group-list-item">高雄市</li>
						<li class="mui-table-view-cell mui-group-list-item">固原市</li>
						<li class="mui-table-view-cell mui-group-list-item">广安市</li>
						<li class="mui-table-view-cell mui-group-list-item">广元市</li>
						<li class="mui-table-view-cell mui-group-list-item">广州市</li>
						<li class="mui-table-view-cell mui-group-list-item">贵港市</li>
						<li class="mui-table-view-cell mui-group-list-item">贵阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">桂林市</li>
						<li class="mui-table-view-cell mui-group-list-item">果洛州</li>
						<li data-group="H" class="mui-table-view-divider mui-group-list-group">H</li>
						<li class="mui-table-view-cell mui-group-list-item">哈尔滨市</li>
						<li class="mui-table-view-cell mui-group-list-item">哈密</li>
						<li class="mui-table-view-cell mui-group-list-item">海北州</li>
						<li class="mui-table-view-cell mui-group-list-item">海东</li>
						<li class="mui-table-view-cell mui-group-list-item">海口市</li>
						<li class="mui-table-view-cell mui-group-list-item">海南州</li>
						<li class="mui-table-view-cell mui-group-list-item">海西州</li>
						<li class="mui-table-view-cell mui-group-list-item">邯郸市</li>
						<li class="mui-table-view-cell mui-group-list-item">汉中市</li>
						<li class="mui-table-view-cell mui-group-list-item">杭州市</li>
						<li class="mui-table-view-cell mui-group-list-item">合肥市</li>
						<li class="mui-table-view-cell mui-group-list-item">和田</li>
						<li class="mui-table-view-cell mui-group-list-item">河池市</li>
						<li class="mui-table-view-cell mui-group-list-item">河源市</li>
						<li class="mui-table-view-cell mui-group-list-item">菏泽市</li>
						<li class="mui-table-view-cell mui-group-list-item">贺州市</li>
						<li class="mui-table-view-cell mui-group-list-item">鹤壁市</li>
						<li class="mui-table-view-cell mui-group-list-item">鹤岗市</li>
						<li class="mui-table-view-cell mui-group-list-item">黑河市</li>
						<li class="mui-table-view-cell mui-group-list-item">衡水市</li>
						<li class="mui-table-view-cell mui-group-list-item">衡阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">红河州</li>
						<li class="mui-table-view-cell mui-group-list-item">呼和浩特市</li>
						<li class="mui-table-view-cell mui-group-list-item">呼伦贝尔市</li>
						<li class="mui-table-view-cell mui-group-list-item">葫芦岛市</li>
						<li class="mui-table-view-cell mui-group-list-item">湖州市</li>
						<li class="mui-table-view-cell mui-group-list-item">怀化市</li>
						<li class="mui-table-view-cell mui-group-list-item">淮安市</li>
						<li class="mui-table-view-cell mui-group-list-item">淮北市</li>
						<li class="mui-table-view-cell mui-group-list-item">淮南市</li>
						<li class="mui-table-view-cell mui-group-list-item">黄冈市</li>
						<li class="mui-table-view-cell mui-group-list-item">黄南州</li>
						<li class="mui-table-view-cell mui-group-list-item">黄山市</li>
						<li class="mui-table-view-cell mui-group-list-item">黄石市</li>
						<li class="mui-table-view-cell mui-group-list-item">惠州市</li>
						<li data-group="J" class="mui-table-view-divider mui-group-list-group">J</li>
						<li class="mui-table-view-cell mui-group-list-item">鸡西市</li>
						<li class="mui-table-view-cell mui-group-list-item">基隆市</li>
						<li class="mui-table-view-cell mui-group-list-item">吉安市</li>
						<li class="mui-table-view-cell mui-group-list-item">吉林市</li>
						<li class="mui-table-view-cell mui-group-list-item">济南市</li>
						<li class="mui-table-view-cell mui-group-list-item">济宁市</li>
						<li class="mui-table-view-cell mui-group-list-item">济源市</li>
						<li class="mui-table-view-cell mui-group-list-item">佳木斯市</li>
						<li class="mui-table-view-cell mui-group-list-item">嘉兴市</li>
						<li class="mui-table-view-cell mui-group-list-item">嘉义市</li>
						<li class="mui-table-view-cell mui-group-list-item">嘉峪关市</li>
						<li class="mui-table-view-cell mui-group-list-item">江门市</li>
						<li class="mui-table-view-cell mui-group-list-item">焦作市</li>
						<li class="mui-table-view-cell mui-group-list-item">揭阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">金昌市</li>
						<li class="mui-table-view-cell mui-group-list-item">金华市</li>
						<li class="mui-table-view-cell mui-group-list-item">锦州市</li>
						<li class="mui-table-view-cell mui-group-list-item">晋城市</li>
						<li class="mui-table-view-cell mui-group-list-item">晋中市</li>
						<li class="mui-table-view-cell mui-group-list-item">荆门市</li>
						<li class="mui-table-view-cell mui-group-list-item">荆州市</li>
						<li class="mui-table-view-cell mui-group-list-item">景德镇市</li>
						<li class="mui-table-view-cell mui-group-list-item">九江市</li>
						<li class="mui-table-view-cell mui-group-list-item">酒泉市</li>
						<li data-group="K" class="mui-table-view-divider mui-group-list-group">K</li>
						<li class="mui-table-view-cell mui-group-list-item">喀什</li>
						<li class="mui-table-view-cell mui-group-list-item">开封市</li>
						<li class="mui-table-view-cell mui-group-list-item">克拉玛依市</li>
						<li class="mui-table-view-cell mui-group-list-item">克州</li>
						<li class="mui-table-view-cell mui-group-list-item">昆明市</li>
						<li data-group="L" class="mui-table-view-divider mui-group-list-group">L</li>
						<li class="mui-table-view-cell mui-group-list-item">拉萨市</li>
						<li class="mui-table-view-cell mui-group-list-item">来宾市</li>
						<li class="mui-table-view-cell mui-group-list-item">莱芜市</li>
						<li class="mui-table-view-cell mui-group-list-item">兰州市</li>
						<li class="mui-table-view-cell mui-group-list-item">廊坊市</li>
						<li class="mui-table-view-cell mui-group-list-item">乐东县</li>
						<li class="mui-table-view-cell mui-group-list-item">乐山市</li>
						<li class="mui-table-view-cell mui-group-list-item">丽江市</li>
						<li class="mui-table-view-cell mui-group-list-item">丽水市</li>
						<li class="mui-table-view-cell mui-group-list-item">连云港市</li>
						<li class="mui-table-view-cell mui-group-list-item">凉山州</li>
						<li class="mui-table-view-cell mui-group-list-item">辽阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">辽源市</li>
						<li class="mui-table-view-cell mui-group-list-item">聊城市</li>
						<li class="mui-table-view-cell mui-group-list-item">林芝</li>
						<li class="mui-table-view-cell mui-group-list-item">临沧市</li>
						<li class="mui-table-view-cell mui-group-list-item">临汾市</li>
						<li class="mui-table-view-cell mui-group-list-item">临高县</li>
						<li class="mui-table-view-cell mui-group-list-item">临夏州</li>
						<li class="mui-table-view-cell mui-group-list-item">临沂市</li>
						<li class="mui-table-view-cell mui-group-list-item">陵水县</li>
						<li class="mui-table-view-cell mui-group-list-item">柳州市</li>
						<li class="mui-table-view-cell mui-group-list-item">六安市</li>
						<li class="mui-table-view-cell mui-group-list-item">六盘水市</li>
						<li class="mui-table-view-cell mui-group-list-item">龙岩市</li>
						<li class="mui-table-view-cell mui-group-list-item">陇南市</li>
						<li class="mui-table-view-cell mui-group-list-item">娄底市</li>
						<li class="mui-table-view-cell mui-group-list-item">泸州市</li>
						<li class="mui-table-view-cell mui-group-list-item">洛阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">漯河市</li>
						<li class="mui-table-view-cell mui-group-list-item">吕梁市</li>
						<li data-group="M" class="mui-table-view-divider mui-group-list-group">M</li>
						<li class="mui-table-view-cell mui-group-list-item">马鞍山市</li>
						<li class="mui-table-view-cell mui-group-list-item">茂名市</li>
						<li class="mui-table-view-cell mui-group-list-item">眉山市</li>
						<li class="mui-table-view-cell mui-group-list-item">梅州市</li>
						<li class="mui-table-view-cell mui-group-list-item">绵阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">牡丹江市</li>
						<li data-group="N" class="mui-table-view-divider mui-group-list-group">N</li>
						<li class="mui-table-view-cell mui-group-list-item">那曲</li>
						<li class="mui-table-view-cell mui-group-list-item">南昌市</li>
						<li class="mui-table-view-cell mui-group-list-item">南充市</li>
						<li class="mui-table-view-cell mui-group-list-item">南京市</li>
						<li class="mui-table-view-cell mui-group-list-item">南宁市</li>
						<li class="mui-table-view-cell mui-group-list-item">南平市</li>
						<li class="mui-table-view-cell mui-group-list-item">南通市</li>
						<li class="mui-table-view-cell mui-group-list-item">南阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">内江市</li>
						<li class="mui-table-view-cell mui-group-list-item">宁波市</li>
						<li class="mui-table-view-cell mui-group-list-item">宁德市</li>
						<li class="mui-table-view-cell mui-group-list-item">怒江州</li>
						<li data-group="P" class="mui-table-view-divider mui-group-list-group">P</li>
						<li class="mui-table-view-cell mui-group-list-item">攀枝花市</li>
						<li class="mui-table-view-cell mui-group-list-item">盘锦市</li>
						<li class="mui-table-view-cell mui-group-list-item">平顶山市</li>
						<li class="mui-table-view-cell mui-group-list-item">平凉市</li>
						<li class="mui-table-view-cell mui-group-list-item">萍乡市</li>
						<li class="mui-table-view-cell mui-group-list-item">莆田市</li>
						<li class="mui-table-view-cell mui-group-list-item">濮阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">普洱市</li>
						<li data-group="Q" class="mui-table-view-divider mui-group-list-group">Q</li>
						<li class="mui-table-view-cell mui-group-list-item">七台河市</li>
						<li class="mui-table-view-cell mui-group-list-item">齐齐哈尔市</li>
						<li class="mui-table-view-cell mui-group-list-item">潜江市</li>
						<li class="mui-table-view-cell mui-group-list-item">黔东南州</li>
						<li class="mui-table-view-cell mui-group-list-item">黔南州</li>
						<li class="mui-table-view-cell mui-group-list-item">黔西南州</li>
						<li class="mui-table-view-cell mui-group-list-item">钦州市</li>
						<li class="mui-table-view-cell mui-group-list-item">秦皇岛市</li>
						<li class="mui-table-view-cell mui-group-list-item">青岛市</li>
						<li class="mui-table-view-cell mui-group-list-item">清远市</li>
						<li class="mui-table-view-cell mui-group-list-item">庆阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">琼海市</li>
						<li class="mui-table-view-cell mui-group-list-item">琼中县</li>
						<li class="mui-table-view-cell mui-group-list-item">衢州市</li>
						<li class="mui-table-view-cell mui-group-list-item">曲靖市</li>
						<li class="mui-table-view-cell mui-group-list-item">泉州市</li>
						<li data-group="R" class="mui-table-view-divider mui-group-list-group">R</li>
						<li class="mui-table-view-cell mui-group-list-item">日喀则</li>
						<li class="mui-table-view-cell mui-group-list-item">日照市</li>
						<li data-group="S" class="mui-table-view-divider mui-group-list-group">S</li>
						<li class="mui-table-view-cell mui-group-list-item">三门峡市</li>
						<li class="mui-table-view-cell mui-group-list-item">三明市</li>
						<li class="mui-table-view-cell mui-group-list-item">三亚市</li>
						<li class="mui-table-view-cell mui-group-list-item">厦门市</li>
						<li class="mui-table-view-cell mui-group-list-item">山南</li>
						<li class="mui-table-view-cell mui-group-list-item">汕头市</li>
						<li class="mui-table-view-cell mui-group-list-item">汕尾市</li>
						<li class="mui-table-view-cell mui-group-list-item">商洛市</li>
						<li class="mui-table-view-cell mui-group-list-item">商丘市</li>
						<li class="mui-table-view-cell mui-group-list-item">上海市</li>
						<li class="mui-table-view-cell mui-group-list-item">上饶市</li>
						<li class="mui-table-view-cell mui-group-list-item">韶关市</li>
						<li class="mui-table-view-cell mui-group-list-item">邵阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">绍兴市</li>
						<li class="mui-table-view-cell mui-group-list-item">深圳市</li>
						<li class="mui-table-view-cell mui-group-list-item">神农架</li>
						<li class="mui-table-view-cell mui-group-list-item">沈阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">十堰市</li>
						<li class="mui-table-view-cell mui-group-list-item">石河子市</li>
						<li class="mui-table-view-cell mui-group-list-item">石家庄市</li>
						<li class="mui-table-view-cell mui-group-list-item">石嘴山市</li>
						<li class="mui-table-view-cell mui-group-list-item">双鸭山市</li>
						<li class="mui-table-view-cell mui-group-list-item">朔州市</li>
						<li class="mui-table-view-cell mui-group-list-item">四平市</li>
						<li class="mui-table-view-cell mui-group-list-item">松原市</li>
						<li class="mui-table-view-cell mui-group-list-item">苏州市</li>
						<li class="mui-table-view-cell mui-group-list-item">绥化市</li>
						<li class="mui-table-view-cell mui-group-list-item">随州市</li>
						<li class="mui-table-view-cell mui-group-list-item">遂宁市</li>
						<li data-group="T" class="mui-table-view-divider mui-group-list-group">T</li>
						<li class="mui-table-view-cell mui-group-list-item">塔城</li>
						<li class="mui-table-view-cell mui-group-list-item">台北市</li>
						<li class="mui-table-view-cell mui-group-list-item">台南市</li>
						<li class="mui-table-view-cell mui-group-list-item">台中市</li>
						<li class="mui-table-view-cell mui-group-list-item">台州市</li>
						<li class="mui-table-view-cell mui-group-list-item">太原市</li>
						<li class="mui-table-view-cell mui-group-list-item">泰安市</li>
						<li class="mui-table-view-cell mui-group-list-item">泰州市</li>
						<li class="mui-table-view-cell mui-group-list-item">唐山市</li>
						<li class="mui-table-view-cell mui-group-list-item">天津市</li>
						<li class="mui-table-view-cell mui-group-list-item">天门市</li>
						<li class="mui-table-view-cell mui-group-list-item">天水市</li>
						<li class="mui-table-view-cell mui-group-list-item">铁岭市</li>
						<li class="mui-table-view-cell mui-group-list-item">通化市</li>
						<li class="mui-table-view-cell mui-group-list-item">通辽市</li>
						<li class="mui-table-view-cell mui-group-list-item">铜川市</li>
						<li class="mui-table-view-cell mui-group-list-item">铜陵市</li>
						<li class="mui-table-view-cell mui-group-list-item">铜仁</li>
						<li class="mui-table-view-cell mui-group-list-item">图木舒克市</li>
						<li class="mui-table-view-cell mui-group-list-item">吐鲁番</li>
						<li class="mui-table-view-cell mui-group-list-item">屯昌县</li>
						<li data-group="W" class="mui-table-view-divider mui-group-list-group">W</li>
						<li class="mui-table-view-cell mui-group-list-item">万宁市</li>
						<li class="mui-table-view-cell mui-group-list-item">威海市</li>
						<li class="mui-table-view-cell mui-group-list-item">潍坊市</li>
						<li class="mui-table-view-cell mui-group-list-item">渭南市</li>
						<li class="mui-table-view-cell mui-group-list-item">温州市</li>
						<li class="mui-table-view-cell mui-group-list-item">文昌市</li>
						<li class="mui-table-view-cell mui-group-list-item">文山州</li>
						<li class="mui-table-view-cell mui-group-list-item">乌海市</li>
						<li class="mui-table-view-cell mui-group-list-item">乌兰察布市</li>
						<li class="mui-table-view-cell mui-group-list-item">乌鲁木齐市</li>
						<li class="mui-table-view-cell mui-group-list-item">无锡市</li>
						<li class="mui-table-view-cell mui-group-list-item">芜湖市</li>
						<li class="mui-table-view-cell mui-group-list-item">吴忠市</li>
						<li class="mui-table-view-cell mui-group-list-item">梧州市</li>
						<li class="mui-table-view-cell mui-group-list-item">五家渠市</li>
						<li class="mui-table-view-cell mui-group-list-item">五指山市</li>
						<li class="mui-table-view-cell mui-group-list-item">武汉市</li>
						<li class="mui-table-view-cell mui-group-list-item">武威市</li>
						<li data-group="X" class="mui-table-view-divider mui-group-list-group">X</li>
						<li class="mui-table-view-cell mui-group-list-item">西安市</li>
						<li class="mui-table-view-cell mui-group-list-item">西宁市</li>
						<li class="mui-table-view-cell mui-group-list-item">西双版纳</li>
						<li class="mui-table-view-cell mui-group-list-item">锡林郭勒盟</li>
						<li class="mui-table-view-cell mui-group-list-item">仙桃市</li>
						<li class="mui-table-view-cell mui-group-list-item">咸宁市</li>
						<li class="mui-table-view-cell mui-group-list-item">咸阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">香港</li>
						<li class="mui-table-view-cell mui-group-list-item">湘潭市</li>
						<li class="mui-table-view-cell mui-group-list-item">湘西州</li>
						<li class="mui-table-view-cell mui-group-list-item">襄阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">孝感市</li>
						<li class="mui-table-view-cell mui-group-list-item">忻州市</li>
						<li class="mui-table-view-cell mui-group-list-item">新乡市</li>
						<li class="mui-table-view-cell mui-group-list-item">新余市</li>
						<li class="mui-table-view-cell mui-group-list-item">新竹市</li>
						<li class="mui-table-view-cell mui-group-list-item">信阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">邢台市</li>
						<li class="mui-table-view-cell mui-group-list-item">兴安盟</li>
						<li class="mui-table-view-cell mui-group-list-item">宿迁市</li>
						<li class="mui-table-view-cell mui-group-list-item">宿州市</li>
						<li class="mui-table-view-cell mui-group-list-item">徐州市</li>
						<li class="mui-table-view-cell mui-group-list-item">许昌市</li>
						<li class="mui-table-view-cell mui-group-list-item">宣城市</li>
						<li data-group="Y" class="mui-table-view-divider mui-group-list-group">Y</li>
						<li class="mui-table-view-cell mui-group-list-item">雅安市</li>
						<li class="mui-table-view-cell mui-group-list-item">烟台市</li>
						<li class="mui-table-view-cell mui-group-list-item">延安市</li>
						<li class="mui-table-view-cell mui-group-list-item">延边州</li>
						<li class="mui-table-view-cell mui-group-list-item">盐城市</li>
						<li class="mui-table-view-cell mui-group-list-item">扬州市</li>
						<li class="mui-table-view-cell mui-group-list-item">阳江市</li>
						<li class="mui-table-view-cell mui-group-list-item">阳泉市</li>
						<li class="mui-table-view-cell mui-group-list-item">伊春市</li>
						<li class="mui-table-view-cell mui-group-list-item">伊犁州</li>
						<li class="mui-table-view-cell mui-group-list-item">宜宾市</li>
						<li class="mui-table-view-cell mui-group-list-item">宜昌市</li>
						<li class="mui-table-view-cell mui-group-list-item">宜春市</li>
						<li class="mui-table-view-cell mui-group-list-item">益阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">银川市</li>
						<li class="mui-table-view-cell mui-group-list-item">鹰潭市</li>
						<li class="mui-table-view-cell mui-group-list-item">营口市</li>
						<li class="mui-table-view-cell mui-group-list-item">永州市</li>
						<li class="mui-table-view-cell mui-group-list-item">榆林市</li>
						<li class="mui-table-view-cell mui-group-list-item">玉林市</li>
						<li class="mui-table-view-cell mui-group-list-item">玉树州</li>
						<li class="mui-table-view-cell mui-group-list-item">玉溪市</li>
						<li class="mui-table-view-cell mui-group-list-item">岳阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">云浮市</li>
						<li class="mui-table-view-cell mui-group-list-item">运城市</li>
						<li data-group="Z" class="mui-table-view-divider mui-group-list-group">Z</li>
						<li class="mui-table-view-cell mui-group-list-item">枣庄市</li>
						<li class="mui-table-view-cell mui-group-list-item">湛江市</li>
						<li class="mui-table-view-cell mui-group-list-item">张家界市</li>
						<li class="mui-table-view-cell mui-group-list-item">张家口市</li>
						<li class="mui-table-view-cell mui-group-list-item">张掖市</li>
						<li class="mui-table-view-cell mui-group-list-item">漳州市</li>
						<li class="mui-table-view-cell mui-group-list-item">昭通市</li>
						<li class="mui-table-view-cell mui-group-list-item">肇庆市</li>
						<li class="mui-table-view-cell mui-group-list-item">镇江市</li>
						<li class="mui-table-view-cell mui-group-list-item">郑州市</li>
						<li class="mui-table-view-cell mui-group-list-item">中山市</li>
						<li class="mui-table-view-cell mui-group-list-item">中卫市</li>
						<li class="mui-table-view-cell mui-group-list-item">舟山市</li>
						<li class="mui-table-view-cell mui-group-list-item">周口市</li>
						<li class="mui-table-view-cell mui-group-list-item">珠海市</li>
						<li class="mui-table-view-cell mui-group-list-item">株洲市</li>
						<li class="mui-table-view-cell mui-group-list-item">驻马店市</li>
						<li class="mui-table-view-cell mui-group-list-item">资阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">淄博市</li>
						<li class="mui-table-view-cell mui-group-list-item">自贡市</li>
						<li class="mui-table-view-cell mui-group-list-item">遵义市</li>
					</ul>
				</div>
			</div>
		</div>
	</body>
	<script src="/wx/Public/Home/js/mui.min.js"></script>
	<script src="/wx/Public/Home/js/mui.indexedlist.js"></script>
	<script type="text/javascript" charset="utf-8">
		mui.init();
		mui.ready(function() {
			var header = document.querySelector('header.mui-bar');
			var list = document.getElementById('list');
			list.style.height = (document.body.offsetHeight - header.offsetHeight) + 'px';
			window.groupList = new mui.GroupList(list);
			//点击列表选择城市
			var ul_city = document.getElementById('ul_city');
			ul_city.addEventListener("tap", function(e) {
				var tagClass = e.target.getAttribute("class");
				console.log("tagClass==" + tagClass);
				if (tagClass && tagClass.indexOf("mui-table-view-cell") != -1) {
					var selectCity = e.target.innerText;
					alert("选择的城市=" + selectCity);
				}
			});
		});
	</script>

</html>