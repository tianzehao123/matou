/**
 * Created by Administrator on 2016/11/14 0014.
 */
 charset="utf-8";

document.documentElement.style.fontSize = document.documentElement.clientWidth / 10.0 + 'px';
$(function(){
    $('.retri dt a').click(function(){
        var $t=$(this);
        if($t.hasClass('up')){
            $(".retri dt a").removeClass('up');
            $('.downlist').hide();
            $('.mask').hide();
        }else{
            $(".retri dt a").removeClass('up');
            $('.downlist').hide();
            $t.addClass('up');
            $('.downlist').eq($(".retri dt a").index($(this)[0])).show();
            $('.mask').show();
        }
    });
    $('.retrie dt a').click(function(){
        var $t=$(this);
        if($t.hasClass('up')){
            $(".retrie dt a").removeClass('up');
            $('.downlis').hide();
            $('.mask').hide();
        }else{
            $(".retrie dt a").removeClass('up');
            $('.downlis').hide();
            $t.addClass('up');
            $('.downlis').eq($(".retrie dt a").index($(this)[0])).show();
            $('.mask').show();
        }
    });
    $(".area ul li a:contains('"+$('#area').text()+"')").addClass('selected');
    $(".wage ul li a:contains('"+$('#wage').text()+"')").addClass('selected');
});
function clic(){
    document.getElementById('any').style.display = "block";
    document.getElementById('an').style.display = "none";
}
function cli(){
    document.getElementById('an').style.display = "block";
    document.getElementById('any').style.display = "none";

}

function tab(pid){
    var tabs = ["tab1","tab2"];
    for(var i=0;i<2;i++){
        if(tabs[i] == pid){
            document.getElementById(tabs[i]).style.display = "block";
            if(i == 1){
                
                $.ajax({
                    url:'/wx/index.php/home/index/daoju',
                    type:'post',
                    dataType:'json',
                    success:function(data){
                        for (var i = 0; i < data.length; i++) {
                         var list = '<meta charset="utf-8"><div class="main"><div class="content"><div class="logo"><img src="/wx/Application/Public/Home/image/logo.png"></div><div class="news"><table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%"><tr><td style="font-size: 0.43rem; color: #333333;" colspan="2"><span  class="left">'+data[i].title+'</span><span class="right">'+data[i].name+'</span></td></tr><tr><td width="10%"><div style="width:0.3rem;height:0.3rem; margin: 0 auto;"><img src="/wx/Application/Public/Home/image/time.png"></div> </td><td width="90%">活动日期:'+data[i].riqi+'</td></tr><tr><td><div style="width:0.24rem; height:0.3rem;  margin: 0 auto;"><img src="/wx/Application/Public/Home/image/any.png"></div></td><td>其他要求：'+data[i].qita+'</td></tr><tr><td><div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img src="/wx/Application/Public/Home/image/placer.png"></div></td> <td><span>'+data[i].addre+'</span><span class="right">'+data[i].money+'元/天</span></td></tr></table></div><div style="float: right; width: 18%;"><div onclick="als('+data[i].id+')" class="more">更多</div> <div class="time">1小时前</div></div></div></div>';
							
                         // $('#title').last().after(list);
                         };
                        
                    },error:function(){
                        alert('no');
                    }
                });
				
            }
        }else{
            document.getElementById(tabs[i]).style.display = "none";
        }
    }
}
function img(img){
    if( img == 'img1')
    {
        document.getElementById('img1').src = "image/peopleb.png";
        document.getElementById('img2').src = "image/goodsa.png";
        document.getElementById('people').style.color = "#ed4c59";
        document.getElementById('goods').style.color = "#333333";
    }
    else{
        document.getElementById('img2').src = "image/goodsb.png";
        document.getElementById('img1').src = "image/peoplea.png";
        document.getElementById('goods').style.color = "#ed4c59";
        document.getElementById('people').style.color = "#333333";
    }
}
function con(){
    $('.downlist').hide();
    $('.mask').hide();
    $('.downlis').hide();
}


/*alert*/
function al(id){
//这里是自己加的ajax
        $.ajax({
            url:'/wx/index.php/home/index/ajax/id/'+id,
            type:'get',
            dataType:'json',
            success:function(data){
                 var id = data[0].id;
                 var name = data[0].name;
                 var sex = data[0].sex;
                 var height = data[0].height;
                 var addre = data[0].addre;
                 var tel = data[0].tel;
                 var weixin = data[0].weixin;
                 var money = data[0].money;
                 var type = data[0].type;
				 if(sex == '0'){
					 sex = '女';
				 }else{
					 sex = '男';
				 }
                document.getElementById('myname').innerHTML = name;
                document.getElementById('mysex').innerHTML = sex;
                document.getElementById('myheight').innerHTML = height;
                document.getElementById('telV').value = tel;
                document.getElementById('wechatV').value = weixin;
                document.getElementById('myaddre').innerHTML = addre;
                document.getElementById('myheight').innerHTML = height;
                document.getElementById('mymoney').innerHTML = money;
                document.getElementById('mytype').innerHTML = type;

            },error:function(){
                alert('ajax请求失败');
            }

        });
    
    var light = document.getElementById('light');
    var fade = document.getElementById('fade');
    light.style.display = "block";
    fade.style.display = "block";
    fade.style.zIndex = "1001";
    document.body.style.height = "100%";
    document.body.style.overflow = "hidden";
}
function als(id){
	$.ajax({
		url:'/wx/index.php/home/index/dajax/id/'+id,
		data:'get',
		dataType:'json',
	success:function(data){
		var mytitle = document.getElementById('mytitle');
		var mynames = document.getElementById('mynames');
		var mymoney = document.getElementById('mymoneys');
		var myaddres = document.getElementById('myaddres');
		var telVs = document.getElementById('telVs');
		var xxoo = document.getElementById('xxoo');
		mytitle.innerHTML = data[0].title;
		mynames.innerHTML = data[0].name;
		mymoney.innerHTML = data[0].money;
		myaddres.innerHTML = data[0].addre;
		telVs.value = data[0].tel;
		xxoo.value = data[0].weixin;
	},error:function(){
		alert('ajax请求失败');
	}
	});
    var light = document.getElementById('lights');
    var fade = document.getElementById('fades');
    light.style.display = "block";
    fade.style.display = "block";
    fade.style.zIndex = "1001";
    document.body.style.height = "100%";
    document.body.style.overflow = "hidden";
}
function test(id){
	myid = id;
	$.ajax({
		url:'/wx/index.php/home/issued/dajax/id/'+myid,
		data:'get',
		dataType:'json',
	success:function(data){
		var mytitle = document.getElementById('mytitle');
		var mynames = document.getElementById('mynames');
		var mymoney = document.getElementById('mymoneys');
		var myaddres = document.getElementById('myaddres');
		var telVs = document.getElementById('telVs');
		var xxoo = document.getElementById('xxoo');
        alert(data);
		mytitle.innerHTML = data[0].title;
		mynames.innerHTML = data[0].name;
		mymoney.innerHTML = data[0].money;
		myaddres.innerHTML = data[0].addre;
		telVs.value = data[0].tel;
		xxoo.value = data[0].weixin;
	},error:function(){
		alert('ajax请求失败');
	}
	});
	var light = document.getElementById('light');
    var fade = document.getElementById('fade');
    light.style.display = "block";
    fade.style.display = "block";
    fade.style.zIndex = "1001";
    document.body.style.height = "100%";
    document.body.style.overflow = "hidden";
}

function finish(id){
	myid = id;
    document.getElementById('finish_ok').style.display = "block";
    document.getElementById('fade').style.display = 'block';
    document.getElementById('fade').style.zIndex='1001';
    document.body.style.height = "100%";
    document.body.style.overflow = "hidden";
	
}

function upload_ok(){
    document.getElementById('upload_ok').style.display = "block";
    document.getElementById('fade').style.display = 'block';
    document.getElementById('fade').style.zIndex='1001';
    document.body.style.height = "100%";
    document.body.style.overflow = "hidden";
}

/*copy*/
function copyTel()
{
    var Ur=document.getElementById('telV');
    Ur.select(); // 选择对象
    document.execCommand("Copy"); // 执行浏览器复制命令
    document.getElementById('tyes').style.display = 'block';
    setTimeout(function(){document.getElementById("tyes").style.display="none";},1000);
}
function copyWe()
{
    var Ur=document.getElementById('wechatV');
    Ur.select(); // 选择对象
    document.execCommand("Copy"); // 执行浏览器复制命令
    document.getElementById('wyes').style.display = 'block';
    setTimeout(function(){document.getElementById("wyes").style.display="none";},1000);
}

function color(id){
    if( id == 'nav-left')
    {
        document.getElementById('nav-left').style.backgroundColor = "#dd3d49";
        document.getElementById('nav-right').style.backgroundColor = "#ed4c59";
    }
    else{
        document.getElementById('nav-left').style.backgroundColor = "#ed4c59";
        document.getElementById('nav-right').style.backgroundColor = "#dd3d49";
    }
}
//这里是已完成和未完成的情况
function tab1(pid){
    var tabs = ["tab3","tab4"];
    for(var i=0;i<2;i++){
        if(tabs[i] == pid){
            document.getElementById(tabs[i]).style.display = "block";
            if(i == 1){
                //已完成
                $.ajax({
                    url:"/wx/index.php/home/issued/ydaoju",
                    type:"post",
                    dataType:"json",
                    success:function(data){
                        for (var i = 0; i < data.length; i++) 
                        {
                            var titles='<div class="main"><div class="content"><div class="logo"><img src="/wx/Application/Public/Home/image/logo.png"></div><div class="news"><table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%"><tr><td style="font-size: 0.43rem; color: #333333;" colspan="2"><span class="left" id="title">'+data[i].titl+'</span><span class="right" id="name">'+data[i].type+'</span></td></tr><tr><td width="10%"> <div style="width:0.3rem; height:0.3rem; margin: 0 auto;"><img src="/wx/Application/Public/Home/image/time.png"></div></td><td width="90%">活动日期：<span id="riqi">'+data[i].time+'</span></td></tr><tr><td><div style="width:0.24rem; height:0.3rem;  margin: 0 auto;"><img src="/wx/Application/Public/Home/image/any.png"></div></td><td>其他要求：<span id="qita">'+data[i].content+'</span></td></tr><tr><td><div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img src="/wx/Application/Public/Home/image/placer.png"></div></td><td><span id="addre">'+data[i].address+'</span><span class="right" ><span id="moneys">'+data[i].amount+'</span>元/天</span></td></tr></table></div><div style="float: right; width: 18%;"><div onclick="al()" class="more">更多</div><div class="finish_text" id="yi">已完成</div><div class="issued-time">1小时前</div></div></div></div>';
                            // $('#titles').last().after(titles);
                        };
                    },error:function(){
                        alert('ajax请求失败');
                    }
                });
            }else{
                //这个是未完成的ajax遍历
                $.ajax({
                    url:"/wx/index.php/home/issued/index/index",
                    type:"post",
                    dataType:"json",
                    success:function(data){
                        // for (var i = 0; i < data.length; i++) {
                        //     var content ='<div class="main"><div class="content"><div class="logo"><img src="/wx/Application/Public/Home/image/logo.png"></div><div class="news"><table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%"><tr><td style="font-size: 0.43rem; color: #333333;" colspan="2"><span class="left">'+data[i].title+'</span><span class="right">'+data[i].name+'</span></td></tr><tr><td width="10%"><div style="width:0.3rem; height:0.3rem; margin: 0 auto;"><img src="/wx/Application/Public/Home/image/time.png"></div></td><td width="90%">活动日期：'+data[i].riqi+'</td></tr><tr><td><div style="width:0.24rem; height:0.3rem;  margin: 0 auto;"><img src="/wx/Application/Public/Home/image/any.png"></div></td><td>其他要求：'+data[i].qita+'</td></tr><tr><td><div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img src="/wx/Application/Public/Home/image/placer.png"></div></td><td><span>'+data[i].addre+'</span><span class="right">'+data[i].money+'元/天</span></td></tr></table></div><div style="float: right; width: 18%;"><div onclick="test('+data[i].id+')" class="more">更多</div><div onclick="finish('+data[i].id+')" class="finish_text">完成</div><div class="issued-time">1小时前</div></div></div></div>';
                        //     $('#content').last().after(content);
                        //     location.reload('/wx/index.php/home/issued/');
                        // };
                        alert(data);
                    },error:function(){
                        alert('ajax请求失败');
                    }
                });
            }
            
        }
        else
        {
            document.getElementById(tabs[i]).style.display = "none";
        }
    }
}

function finish_finish(){
    //这个是点击完成按钮之后的请求
	$.ajax({
		url:"/wx/index.php/home/issued/wdaoju/id/"+myid,
		type:"get",
		success:function(data){
			for (var i = 0; i < data.length; i++) {
			var titles='<div class="main"><div class="content"><div class="logo"><img src="/wx/Application/Public/Home/image/logo.png"></div><div class="news"><table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%"><tr><td style="font-size: 0.43rem; color: #333333;" colspan="2"><span class="left" id="title">'+data[i].title+'</span><span class="right" id="name">'+data[i].name+'</span></td></tr><tr><td width="10%"> <div style="width:0.3rem; height:0.3rem; margin: 0 auto;"><img src="/wx/Application/Public/Home/image/time.png"></div></td><td width="90%">活动日期：<span id="riqi">'+data[i].time+'</span></td></tr><tr><td><div style="width:0.24rem; height:0.3rem;  margin: 0 auto;"><img src="/wx/Application/Public/Home/image/any.png"></div></td><td>其他要求：<span id="qita">'+data[i].content+'</span></td></tr><tr><td><div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img src="/wx/Application/Public/Home/image/placer.png"></div></td><td><span id="addre">'+data[i].address+'</span><span class="right" ><span id="moneys">1000</span>元/天</span></td></tr></table></div><div style="float: right; width: 18%;"><div onclick="al()" class="more">更多</div><div class="finish_text" id="yi">已完成</div><div class="issued-time">1小时前</div></div></div></div>';
             // $('#titles').last().after(titles);
         }
		},error:function(){
			alert('ajax请求失败');
		}
	});
    document.getElementById('finish_ok').style.display = 'none';
    document.getElementById('fade').style.display = 'none';
    document.body.style.overflow = 'auto';
    document.getElementById('tab4').style.display = "block";
    document.getElementById('tab3').style.display = "none";
    document.getElementById('nav-right').style.backgroundColor = "#dd3d49";
    document.getElementById('nav-left').style.backgroundColor = "#ed4c59";
	
}
function upload_finish(){
    document.getElementById('finish_ok').style.display = 'none';
    document.getElementById('fade').style.display = 'none';
    document.body.style.overflow = 'auto';
    document.getElementById('tab6').style.display = "block";
    document.getElementById('tab5').style.display = "none";
    document.getElementById('upload-right').style.backgroundColor = "#dd3d49";
    document.getElementById('upload-left').style.backgroundColor = "#ed4c59";
}
function upload_finis(){
    document.getElementById('upload_ok').style.display = 'none';
    document.getElementById('fade').style.display = 'none';
    document.body.style.overflow = 'auto';
    document.getElementById('tab5').style.display = "block";
    document.getElementById('tab6').style.display = "none";
    document.getElementById('upload-left').style.backgroundColor = "#dd3d49";
    document.getElementById('upload-right').style.backgroundColor = "#ed4c59";
}

function finish_cancel(){
    document.getElementById('finish_ok').style.display = 'none';
    document.getElementById('fade').style.display = 'none';
    document.body.style.overflow = 'auto';
}
/*upload*/
function tab2(pid){
    var tabs = ["tab5","tab6"];
    for(var i=0;i<2;i++){
        if(tabs[i] == pid){
            document.getElementById(tabs[i]).style.display = "block";
        }else{
            document.getElementById(tabs[i]).style.display = "none";
        }
    }
}
function uploadC(id){
    if( id == 'upload-left')
    {
        document.getElementById('upload-left').style.backgroundColor = "#dd3d49";
        document.getElementById('upload-right').style.backgroundColor = "#ed4c59";
    }
    else{
        document.getElementById('upload-left').style.backgroundColor = "#ed4c59";
        document.getElementById('upload-right').style.backgroundColor = "#dd3d49";
    }
}