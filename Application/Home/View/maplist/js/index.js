/**
 * Created by Administrator on 2016/11/14 0014.
 */
charset = "utf-8";
document.documentElement.style.fontSize = document.documentElement.clientWidth / 10.0 + 'px';
$(function() {
	$('.retri dt a').click(function() {
		var $t = $(this);
		if($t.hasClass('up')) {
			$(".retri dt a").removeClass('up');
			$('.downlist').hide();
			$('.mask').hide();
		} else {
			$(".retri dt a").removeClass('up');
			$('.downlist').hide();
			$t.addClass('up');
			$('.downlist').eq($(".retri dt a").index($(this)[0])).show();
			$('.mask').show();
		}
	});
	$('.retrie dt a').click(function() {
		var $t = $(this);
		if($t.hasClass('up')) {
			$(".retrie dt a").removeClass('up');
			$('.downlis').hide();
			$('.mask').hide();
		} else {
			$(".retrie dt a").removeClass('up');
			$('.downlis').hide();
			$t.addClass('up');
			$('.downlis').eq($(".retrie dt a").index($(this)[0])).show();
			$('.mask').show();
		}
	});
	$(".area ul li a:contains('" + $('#area').text() + "')").addClass('selected');
	$(".wage ul li a:contains('" + $('#wage').text() + "')").addClass('selected');
});

function clic() {
	document.getElementById('any').style.display = "block";
	document.getElementById('an').style.display = "none";
}

function cli() {
	document.getElementById('an').style.display = "block";
	document.getElementById('any').style.display = "none";

}

function tab(pid) {
	var tabs = ["tab1", "tab2"];
	for(var i = 0; i < 2; i++) {
		if(tabs[i] == pid) {
			document.getElementById(tabs[i]).style.display = "block";
		} else {
			document.getElementById(tabs[i]).style.display = "none";
		}
	}
}

function img(img) {
	if(img == 'img1') {
		document.getElementById('img1').src = "image/peopleb.png";
		document.getElementById('img2').src = "image/goodsa.png";
		document.getElementById('people').style.color = "#ed4c59";
		document.getElementById('goods').style.color = "#999999";
	} else {
		document.getElementById('img2').src = "image/goodsb.png";
		document.getElementById('img1').src = "image/peoplea.png";
		document.getElementById('goods').style.color = "#ed4c59";
		document.getElementById('people').style.color = "#999999";
	}
}

function con() {
	$('.downlist').hide();
	$('.mask').hide();
	$('.downlis').hide();
	$(".retri dt a").removeClass('up');
	$(".retrie dt a").removeClass('up');
}

$(function() {
	$('.retrie dd ul li a').click(function() {
		$('.downlis').hide();
		$('.retrie dt a').removeClass('up');
	});
	$('.retri dd ul li a').click(function() {
		$('.downlist').hide();
		$('.retri dt a').removeClass('up');
	});
	$('.submit').click(function() {
		$('.downlis').hide();
		$('.retrie dt a').removeClass('up');
	});
});

/*alert*/
function al() {
	var light = document.getElementById('light_people');
	var fade = document.getElementById('fade');
	light.style.display = "block";
	fade.style.display = "block";
	fade.style.zIndex = "1001";
	document.body.style.height = "100%";
	document.body.style.overflow = 'hidden';
}

function al_matter() {
	var light = document.getElementById('light_matter');
	var fade = document.getElementById('fade');
	light.style.display = "block";
	fade.style.display = "block";
	fade.style.zIndex = "1001";
	document.body.style.height = "100%";
	document.body.style.overflow = "hidden";
}

function finish() {
	document.getElementById('finish_ok').style.display = "block";
	document.getElementById('fade').style.display = 'block';
	document.getElementById('fade').style.zIndex = '1001';
	document.body.style.height = "100%";
	document.body.style.overflow = "hidden";
}

function upload_ok() {
	document.getElementById('upload_ok').style.display = "block";
	document.getElementById('fade').style.display = 'block';
	document.getElementById('fade').style.zIndex = '1001';
	document.body.style.height = "100%";
	document.body.style.overflow = "hidden";
}

/*copy*/
function copyTel_people() {
	var Ur = document.getElementById('telV_people');
	Ur.select();
	document.execCommand("Copy");
	document.getElementById('tyes_people').style.display = 'block';
	setTimeout(function() {
		document.getElementById("tyes_people").style.display = "none";
	}, 1000);
}

function copyWe_people() {
	var Ur = document.getElementById('wechatV_people');
	Ur.select();
	document.execCommand("Copy");
	document.getElementById('wyes_people').style.display = 'block';
	setTimeout(function() {
		document.getElementById("wyes_people").style.display = "none";
	}, 1000);
}

function copyTel_matter() {
	var Ur = document.getElementById('telV_matter');
	Ur.select();
	document.execCommand("Copy");
	document.getElementById('tyes_matter').style.display = 'block';
	setTimeout(function() {
		document.getElementById("tyes_matter").style.display = "none";
	}, 1000);
}

function copyWe_matter() {
	var Ur = document.getElementById('wechatV_matter');
	Ur.select();
	document.execCommand("Copy");
	document.getElementById('wyes_matter').style.display = 'block';
	setTimeout(function() {
		document.getElementById("wyes_matter").style.display = "none";
	}, 1000);
}

function color(id) {
	if(id == 'nav-left') {
		document.getElementById('nav-left').style.backgroundColor = "#dd3d49";
		document.getElementById('nav-right').style.backgroundColor = "#ed4c59";
	} else {
		document.getElementById('nav-left').style.backgroundColor = "#ed4c59";
		document.getElementById('nav-right').style.backgroundColor = "#dd3d49";
	}
}

function tab1(pid) {
	var tabs = ["tab3", "tab4"];
	for(var i = 0; i < 2; i++) {
		if(tabs[i] == pid) {
			document.getElementById(tabs[i]).style.display = "block";
		} else {
			document.getElementById(tabs[i]).style.display = "none";
		}
	}
}

function finish_finish() {
	document.getElementById('finish_ok').style.display = 'none';
	document.getElementById('fade').style.display = 'none';
	document.body.style.overflow = 'auto';
	document.getElementById('tab4').style.display = "block";
	document.getElementById('tab3').style.display = "none";
	document.getElementById('nav-right').style.backgroundColor = "#dd3d49";
	document.getElementById('nav-left').style.backgroundColor = "#ed4c59";
}

function upload_finish() {
	document.getElementById('finish_ok').style.display = 'none';
	document.getElementById('fade').style.display = 'none';
	document.body.style.overflow = 'auto';
	document.getElementById('tab6').style.display = "block";
	document.getElementById('tab5').style.display = "none";
	document.getElementById('upload-right').style.backgroundColor = "#dd3d49";
	document.getElementById('upload-left').style.backgroundColor = "#ed4c59";
}

function upload_finis() {
	document.getElementById('upload_ok').style.display = 'none';
	document.getElementById('fade').style.display = 'none';
	document.body.style.overflow = 'auto';
	document.getElementById('tab5').style.display = "block";
	document.getElementById('tab6').style.display = "none";
	document.getElementById('upload-left').style.backgroundColor = "#dd3d49";
	document.getElementById('upload-right').style.backgroundColor = "#ed4c59";
}

function finish_cancel() {
	document.getElementById('fade').style.display = 'none';
	document.getElementById('finish_ok').style.display = 'none';
	document.getElementById('upload_ok').style.display = 'none';
	document.body.style.overflow = 'auto';
}
/*upload*/
function tab2(pid) {
	var tabs = ["tab5", "tab6"];
	for(var i = 0; i < 2; i++) {
		if(tabs[i] == pid) {
			document.getElementById(tabs[i]).style.display = "block";
		} else {
			document.getElementById(tabs[i]).style.display = "none";
		}
	}
}

function uploadC(id) {
	if(id == 'upload-left') {
		document.getElementById('upload-left').style.backgroundColor = "#dd3d49";
		document.getElementById('upload-right').style.backgroundColor = "#ed4c59";
	} else {
		document.getElementById('upload-left').style.backgroundColor = "#ed4c59";
		document.getElementById('upload-right').style.backgroundColor = "#dd3d49";
	}
}