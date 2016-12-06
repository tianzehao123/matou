<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>喜事码头</title>
    <link href="/wx/Public/Home/css/style3.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no, email=no" />
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/wx/Public/Home/layer/layer.js"></script>
    <!--[if IE]>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    <style type="text/css">
    	body p span div{
				margin: 0;
				padding: 0;
				border: 0;
				outline: 0;
				font-size: 100%;
				width: 100%;
				height: 100%;
				font-family: "Helvetica Neue", Helvetica, "PingFang SC", "Hiragino Sans GB", "Microsoft YaHei", "\5FAE\8F6F\96C5\9ED1", Arial, sans-serif;
				font-size: 12px;
				vertical-align: baseline;
				background: transparent;
			}
    </style>
</head>
<body>
<header>
	<a href="index.html" style="display: block;position: absolute;z-index: 999;">
    <img src="/wx/Public/Home/image/rpw_back_g.png"/>
    </a>
    <span style="display: block;width: 100%;text-align: center;">上传简历</span>
    <div class="clear"></div>
</header>

<form id="form1" action="/wx/index.php/Home/upload/upload" method="post" enctype="multipart/form-data">
    <section class="logo-license">
        <div class="left">
            图片
        </div>
        <div class="half">
            <a class="logo" id="logox">
                <img id="bgl" src="/wx/Public/Home/image/phonelogo.png"/>

            </a>
            <p></p>
        </div>
        <div class="half">
            <div class="uploader blue">


                <!--<input id="file0" class="file-3" type="file" size="30" onchange="javascript:setImagePreview();" accept="image/*" capture="camera" />-->
            </div>
            <div class="yulan">
                <img src="" id="img0" >
                <div class="enter">
                    <button class="btn-2 fl">取消</button>
                    <button class="btn-3 fr">确定</button>
                </div>
            </div>

            <!-- <p>营业执照</p>-->
        </div>
        <div class="clear"></div>
    </section>

    <article class="htmleaf-container">
        <div id="clipArea"></div>
        <div class="foot-use">
            <div class="uploader1 blue">
                <input type="button" name="file" class="button" value="打开"/>
                <input id="file" type="file" name="logo" onchange="javascript:setImagePreview();" accept="image/*" multiple  />
            </div>
            <input type="button" name="cut" value="截取" id="clipBtn" />
        </div>
        <div id="view"></div>
    </article>

    <article class="info">
        <ul>
            <li>
                <div class="left">
                    姓名
                </div>
                <div class="right">
                    <input type="text" id="name" name="name" placeholder="请输入真实姓名">
                </div>
                <div class="clear"></div>
            </li>

            <li>
                <div class="left">
                    性别
                </div>
                <div class="right">
                    <div class="radio_sex">
                        <div style="float:left;">
                            <!--<img src="image/sexb.png">-->
                            <samp style="font-size:16px ; color: #ccc; line-height: 20px;">男</samp>
                            <input type="radio" name="radio" id="radio_man" value="男" checked>
                        </div>
                    </div>
                    <div class="radio_sex">
                        <div style="margin-left: 85px; float:left; ">
                            <!--<img src="image/sexg.png">-->
                            <samp style="font-size:16px ; color: #ccc; line-height: 20px;">女</samp>
                            <input type="radio" name="radio" value="女" id="radio_woman">
                        </div>
                    </div>

                </div>
                <div class="clear"></div>
            </li>

            <li>
                <div class="left">
                    身高/CM
                </div>
                <div class="right">
                    <input id="height" type="text" name="height" placeholder="单位/CM">
                </div>
                <div class="clear"></div>
            </li>

            <li>
                <div class="left">
                    所在地区
                </div>
                <div class="right">
                    <input id="city" name="addre" placeholder="河南省 郑州市 金水区">
                    <script>
                        // $('#city').on('click', function() {
                        //     //页面层
                        //     layer.open({
                        //         title: '      ',
                        //         area: ['90%', '100%'],
                        //         type: 2,
                        //         content: '/wx/index.php/Home/maplist' //这里content是一个URL，如果你不想让iframe出现滚动条，你还可以content: ['http://sentsin.com', 'no']
                        //     });
                        // });
                        $('#city').on('click', function() {
                                    $('#aaaa').show();
                                
                                });
                    </script>
                </div>
                <div class="clear"></div>
            </li>

            <li>
                <div class="left">
                    年龄
                </div>
                <div class="right">
                    <input id="age" name="age" placeholder="请输入年龄">
                </div>
                <div class="clear"></div>
            </li>

            <li>
                <div class="left">
                    职位
                </div>
                <div class="right">
                    <div class="mask"></div>
                    <div id="divselect">
                        <small>请选择职位</small>
                        <ul class="all" id="type">
                            <li><a href="javascript:;">主持人</a></li>
                            <li><a href="javascript:;">摄影师</a></li>
                            <li><a href="javascript:;">摄像师</a></li>
                            <li><a href="javascript:;">化妆师</a></li>
                            <li><a href="javascript:;">策划师</a></li>
                            <li><a href="javascript:;">其他</a></li>
                        </ul>
                    </div>
                    <input  name="type" type="hidden"  value="" id="inputselect"/>
                    <script>
                    var cNode =document.getElementById('type').getElementsByTagName('li');
                            for( var i=0; i<cNode.length; i++){
                                cNode[i].index= i;
                                //用来计算点击次数
                                var type = 0;
                                cNode[i].onclick = function(){
                                   type+=1; 
                                    if(this.index == 0){
                                        this.index = '主持人';  
                                    }else if(this.index == 1){
                                        this.index = '摄像师';
                                    }else if(this.index == 2){
                                        this.index = '化妆师';
                                    }else if(this.index == 3){
                                        this.index = '摄影师';
                                    }else if(this.index == 4){
                                        this.index = '其他';
                                    }
                                    types = this.index;
                                    $('#inputselect').val(types);
                                }
                            }
                        </script>
                </div>

                <div class="clear"></div>
            </li>

            <li>
                <div class="left">
                    报价/天
                </div>
                <div class="right">
                    <input id="price" name="money" type="number" placeholder="请输入报价">
                </div>
                <div class="clear"></div>
            </li>

            <li>
                <div class="left">
                    电话
                </div>
                <div class="right">
                    <input id="tel" type="number" name="tel" placeholder="必填">
                </div>
                <div class="clear"></div>
            </li>
            <li>
                <div class="left">
                    微信
                </div>
                <div class="right">
                    <input id="wechat" type="text" name="weixin" placeholder="选填">
                </div>
                <div class="clear"></div>
            </li>
            <li>
                <div class="left">
                    QQ
                </div>
                <div class="right">
                    <input id="QQ" type="number" name="qq" placeholder="选填">
                </div>
                <div class="clear"></div>
            </li>

            <!--<div class="null"></div>-->
            <li class="border-bottom">
                <div class="left">
                    其他信息
                </div>
                <div class="right">
                    <textarea id="detail" name="content" placeholder="例如详细介绍，作品链接，擅长领域"></textarea>
                </div>
                <div class="clear"></div>
            </li>

        </ul>
    </article>
    <br>
    <br>
    <br>
    <article class="btn-1">
        <button type="submit">立刻发布</button>
    </article>

        <div id="aaaa" style="position:fixed; z-index: 999; left:0;top:0; width:100%;height:100%;display:none; background:rgba(0,0,0,0.38);">
        <div class="centerParent" style="width:100%;height:100%;"  onclick="fun00001()">
            <div class="centerChild">
                <iframe class="centerLR" style="border: solid 1px #e0e0e0; width:80%; height:350px; padding:0;"
                    src="/wx/index.php/Home/maplist"></iframe>
            </div>
        </div>
        </div>
</form>
<style type="text/css">

   .centerParent {
    display: table;
 }

   .centerChild {
    display: table-cell;
    vertical-align: middle;
    margin-left: auto;
    margin-right: auto;
    }
    .centerLR {
        display: table;
        margin-left: auto;
        margin-right: auto;
    }

</style>
<script>
    function clickNone(e) {
    try {
        e = e || window.event;
        e.cancelable = true;
        if (e.stopPropagation) {
            e.stopPropagation();//IE以外
        } else {
            e.cancelBubble = true;//IE
        }
        e.preventDefault();
    } catch (e) {
    }
    try {
        e.preventDefault();
    } catch (e) {
    }
}

function fun00001() {
        console.log("fun00001()");
}

    function selectCitys(info) {
        $('#aaaa').hide();
        var selectCitys = info;
        document.getElementById('city').value = selectCitys;

    }

</script>
<script>
    // $('#clipBtn').onclick(function(){
    //     if($('#tel').val() == '') {
    //         $('#form1').attr('action', 'javascript:;');
    //     } else {
    //         $('#form1').attr('action', 'issued.html');
    //     }
    // });
</script>


<script src="/wx/Public/Home/js/jquery.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="__PUBLIC/Home/js/jquery-2.1.1.min.js"><\/script>')</script>
<script src="/wx/Public/Home/js/iscroll-zoom.js"></script>
<script src="/wx/Public/Home/js/hammer.js"></script>
<script src="/wx/Public/Home/js/jquery.photoClip.js"></script>
<script>
    /*防止键盘把当前输入框给挡住*/
    $('input[type="text"],textarea').on('click', function () {
        var target = this;
        setTimeout(function(){
            target.scrollIntoViewIfNeeded();
            console.log('scrollIntoViewIfNeeded');
        },400);
    });
    var obUrl = ''
    //document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
    $("#clipArea").photoClip({
        width: 199,
        height: 166,
        file: "#file",
        view: "#view",
        ok: "#clipBtn",
        loadStart: function() {
            console.log("照片读取中");
        },
        loadComplete: function() {
            console.log("照片读取完成");
        },
        clipFinish: function(dataURL) {
            console.log(dataURL);
        }
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
<script>
    $(function(){
$("#logox").click(function(){
    $(".htmleaf-container").show();
})
        $("#clipBtn").click(function(){
            $("#logox").empty();
            $('#logox').append('<img src="' + imgsource + '" align="absmiddle" style=" width: 5rem;height: 4.16rem; margin-left: 1.5rem;margin-top: 1.92rem">');
            $(".htmleaf-container").hide();
        })
    });
</script>
<script type="text/javascript">
    $(function(){
        jQuery.divselect = function(divselectid,inputselectid) {
            var inputselect = $(inputselectid);
            $(divselectid+" small").click(function(){
                $("#divselect ul").toggle();
                $(".mask").show();
            });
            $(divselectid+" ul li a").click(function(){
                var txt = $(this).text();
                $(divselectid+" small").html(txt);
                var value = $(this).attr("selectid");
                inputselect.val(value);
                $(divselectid+" ul").hide();
                $(".mask").hide();
                $("#divselect small").css("color","#333")
            });
        };
        $.divselect("#divselect","#inputselect");
    });
</script>
<script type="text/javascript">
    $(function(){
        jQuery.divselectx = function(divselectxid,inputselectxid) {
            var inputselectx = $(inputselectxid);
            $(divselectxid+" small").click(function(){
                $("#divselectx ul").toggle();
                $(".mask").show();
            });
            $(divselectxid+" ul li a").click(function(){
                var txt = $(this).text();
                $(divselectxid+" small").html(txt);
                var value = $(this).attr("selectidx");
                inputselectx.val(value);
                $(divselectxid+" ul").hide();
                $(".mask").hide();
                $("#divselectx small").css("color","#333")
            });
        };
        $.divselectx("#divselectx","#inputselectx");
    });
</script>
<script type="text/javascript">
    $(function(){
        jQuery.divselecty = function(divselectyid,inputselectyid) {
            var inputselecty = $(inputselectyid);
            $(divselectyid+" small").click(function(){
                $("#divselecty ul").toggle();
                $(".mask").show();
            });
            $(divselectyid+" ul li a").click(function(){
                var txt = $(this).text();
                $(divselectyid+" small").html(txt);
                var value = $(this).attr("selectyid");
                inputselecty.val(value);
                $(divselectyid+" ul").hide();
                $(".mask").hide();
                $("#divselecty small").css("color","#333")
            });
        };
        $.divselecty("#divselecty","#inputselecty");
    });
</script>
<script type="text/javascript">
    $(function(){
       $(".mask").click(function(){
           $(".mask").hide();
           $(".all").hide();
       })
        $(".right input").blur(function () {
            if ($.trim($(this).val()) == '') {
                $(this).addClass("place").html();
            }
            else {
                $(this).removeClass("place");
            }
        })
    });
</script>
<script>
    $("#file0").change(function(){
        var objUrl = getObjectURL(this.files[0]) ;
         obUrl = objUrl;
        console.log("objUrl = "+objUrl) ;
        if (objUrl) {
            $("#img0").attr("src", objUrl).show();
        }
        else{
            $("#img0").hide();
        }
    }) ;
   function qd(){
       var objUrl = getObjectURL(this.files[0]) ;
       obUrl = objUrl;
       console.log("objUrl = "+objUrl) ;
       if (objUrl) {
           $("#img0").attr("src", objUrl).show();
       }
       else{
           $("#img0").hide();
       }
   }
    function getObjectURL(file) {
        var url = null ;
        if (window.createObjectURL!=undefined) { // basic
            url = window.createObjectURL(file) ;
        } else if (window.URL!=undefined) { // mozilla(firefox)
            url = window.URL.createObjectURL(file) ;
        } else if (window.webkitURL!=undefined) { // webkit or chrome
            url = window.webkitURL.createObjectURL(file) ;
        }
        return url ;
    }
</script>
<script type="text/javascript">
  var subUrl = "";
    $(function (){
        $(".file-3").bind('change',function(){
            subUrl = $(this).val()
            $(".yulan").show();
            $(".file-3").val("");
        });

        $(".file-3").each(function(){
            if($(this).val()==""){
                $(this).parents(".uploader").find(".filename").val("营业执照");
            }
        });
$(".btn-3").click(function(){
    $("#img-1").attr("src", obUrl);
    $(".yulan").hide();
    $(".file-3").parents(".uploader").find(".filename").val(subUrl);
})
        $(".btn-2").click(function(){
            $(".yulan").hide();
        })

    });
</script>
<script type="text/javascript">
    function setImagePreview() {
        var preview, img_txt, localImag, file_head = document.getElementById("file_head"),
                picture = file_head.value;
        if (!picture.match(/.jpg|.gif|.png|.bmp/i)) return alert("您上传的图片格式不正确，请重新选择！"),
                !1;
        if (preview = document.getElementById("preview"), file_head.files && file_head.files[0]) preview.style.display = "block",
                preview.style.width = "63px",
                preview.style.height = "63px",
                preview.src = window.navigator.userAgent.indexOf("Chrome") >= 1 || window.navigator.userAgent.indexOf("Safari") >= 1 ? window.webkitURL.createObjectURL(file_head.files[0]) : window.URL.createObjectURL(file_head.files[0]);
        else {
            file_head.select(),
                    file_head.blur(),
                    img_txt = document.selection.createRange().text,
                    localImag = document.getElementById("localImag"),
                    localImag.style.width = "63px",
                    localImag.style.height = "63px";
            try {
                localImag.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)",
                        localImag.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = img_txt
            } catch(f) {
                return alert("您上传的图片格式不正确，请重新选择！"),
                        !1
            }
            preview.style.display = "none",
                    document.selection.empty()
        }
        return document.getElementById("DivUp").style.display = "block",
                !0
    }
</script>
</body>
</html>