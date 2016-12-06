<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <title></title>
    <link rel="stylesheet" type="text/css" href="/wx/Public/Home/css/style.css">
    <link rel="stylesheet" type="text/css" href="/wx/Public/Home/css/jquery.fs.boxer.css">
    <style type="text/css"></style>
    <script src="/wx/Public/Home/js/jquery.js"></script>
    <script src="/wx/Public/Home/layer/layer.js"></script>
    <script src="/wx/Public/Home/js/Popt.js"></script>
    <script src="/wx/Public/Home/js/cityJson.js"></script>
    <script src="/wx/Public/Home/js/citySet.js"></script>
    <script src="/wx/Public/Home/js/index.js" ></script>
    <script src="/wx/Public/Home/js/jquery.fs.boxer.js"></script>
    <script>!function (e) {
        function t(a) {
            if (i[a])return i[a].exports;
            var n = i[a] = {exports: {}, id: a, loaded: !1};
            return e[a].call(n.exports, n, n.exports, t), n.loaded = !0, n.exports
        }

        var i = {};
        return t.m = e, t.c = i, t.p = "", t(0)
    }([function (e, t) {
        "use strict";
        Object.defineProperty(t, "__esModule", {value: !0});
        var i = window;
        t["default"] = i.flex = function (e, t) {
            var a = e || 100, n = t || 1, r = i.document, o = navigator.userAgent,
                    d = o.match(/Android[\S\s]+AppleWebkit\/(\d{3})/i), l = o.match(/U3\/((\d+|\.){5,})/i),
                    c = l && parseInt(l[1].split(".").join(""), 10) >= 80, p = navigator.appVersion.match(/(iphone|ipad|ipod)/gi),
                    s = i.devicePixelRatio || 1;
            p || d && d[1] > 534 || c || (s = 1);
            var u = 1 / s, m = r.querySelector('meta[name="viewport"]');
            m || (m = r.createElement("meta"), m.setAttribute("name", "viewport"), r.head.appendChild(m)), m.setAttribute("content", "width=device-width,user-scalable=no,initial-scale=" + u + ",maximum-scale=" + u + ",minimum-scale=" + u), r.documentElement.style.fontSize = a / 2 * s * n + "px"
        }, e.exports = t["default"]
    }]);
    flex(100, 1);
    document.documentElement.style.fontSize = document.documentElement.clientWidth / 10.0 + 'px';
    </script>
</head>
<body>
<section class="job-module" id="any" style="display:block; width:100%; top:0; position:fixed; z-index:20; position:absolute;">
    <dl class="retrie">
        <dt>
            <a id="area" href="javascript:;">所有</a>
            <a id="wage" href="javascript:;">性别</a>
            <a id="wage" href="javascript:;">报价</a>
        </dt>
        <dd class="every_" id="type">
            <ul class="slide downlis" name="type" id = "test">
                <li id="compere"><a href="#" id="1">主持人</a></li>
                <li id="cemeraman"><a href="#" >摄像师</a></li>
                <li id="dresser"><a href="#">化妆师</a></li>
                <li id="photographer"><a href="#" id="sys">摄影师</a></li>
                <li id="else"><a href="#">其他</a></li>
            </ul>
        </dd>
        <dd class="sex_" id="sex">
            <ul class="slide downlis">
                <li id="woman"><a href="#" id="sex0">女</a></li>
                <li id="man"><a href="#" id="sex1">男</a></li>
            </ul>
        </dd>
        <dd class="budget_" id="money">
            <ul class="slide downlis">
                <li id="first"><a href="#" ><span id="wubai">500</span>元/天以下</a></li>
                <li id="second"><a href="#">500~1000元每天</a></li>
                <li id="third"><a href="#">1000元/天以上</a></li>
                <li id="custom" style="background: #ed4c59; opacity: 0.9; ">
                    <form action="#" method="post">
                        <div style="line-height: 0.9rem; padding: 0 7.5%;">
                            <input id="defined_after" type="text" placeholder="自定义" class="user_defined" onKeyUp="this.value=this.value.replace(/[^\d]/g,'') "> ~
                            <input id="defined_before" type="text" placeholder="自定义" class="user_defined" onKeyUp="this.value=this.value.replace(/[^\d]/g,'') ">
                            <button id="defined_submit" type="button" class="submit">提交</button>
                        </div>

                    </form>
                </li>
            </ul>
        </dd>
    </dl>
</section>
<script>
//获取type-》类型的循环获取
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
                if(money > 0 && sex > 0){
                    
                var where = " type = '"+types+"' and sex = '"+sexs+"' and money  "+moneys;
                }else if(money > 0){
                     var where = " type = '"+types+"' and money "+moneys;
                }else if(sex > 0){
                    var where = " type = '"+types+"' and sex ='"+sexs+"'";
                }else{
                    var where = " type = '"+types+"'";
                }

                // 这里才是最终的搜索条件
                ajax(where);
                $('#area').click();
                
            }
        }
//sex-》类型的循环获取
 var cNode =document.getElementById('sex').getElementsByTagName('li');
        for( var i=0; i<cNode.length; i++){
            cNode[i].index= i;
            var sex = 0;
            cNode[i].onclick = function(){
                sex+=1;
                
                //全局变量 性别的值
                sexs = this.index;

                if(type > 0 && money > 0){
                    
                var where = " type = '"+types+"' and sex = '"+sexs+"' and money  "+moneys;
                }else if(money > 0){
                     var where = " sex = '"+sexs+"' and money "+moneys;
                }else if(type > 0){
                    var where = " type = '"+types+"' and sex ='"+sexs+"'";
                }else{
                    var where = " sex = '"+sexs+"'";
                }
                ajax(where);
                $('#wage').click();
               
            }
        }
//money-》类型的循环获取
var cNode =document.getElementById('money').getElementsByTagName('li');
        for( var i=0; i<cNode.length; i++){
            cNode[i].index= i;
            var money = 0;
            cNode[i].onclick = function(){
                money += 1;
                if(this.index == 0){
                    this.index = '< "500"';
                }else if(this.index == 1){
                    this.index = '> "500" and money < "1000"';
                }else if(this.index == 2){
                    this.index = '> "1000"';
                }else if(this.index == 3){
                    this.index = '自定义';
                }
                moneys = this.index;
                if(type > 0 && sex > 0){     
                var where = " type = '"+types+"' and sex = '"+sexs+"' and money  "+moneys;
                }else if(sex > 0){
                     var where = " sex = '"+sexs+"' and money "+moneys;
                }else if(type > 0){
                    var where = " type = '"+types+"' and money "+moneys;
                }else{
                    var where = " money  "+moneys;
                }
                ajax(where);
            }
        }
        //传递条件  
        function ajax(where){
            $.ajax({
                    url:"/wx/index.php/home/index/index/where/"+where,
                    type:"get",
                    dataType:"json",
                    success:function(data){
                        var list = "";
                        for (var i = 0; i < data.length; i++) {
                            // $('#foreach').remove();
                            data[i].sex == '0'?'女':'男';
                            if(data[i].sex == '1'){
                                data[i].sex = '男';
                            }else{
                                data[i].sex = '女';
                            }
                              list +='<div class="main" id="xx"><div class="content"><div class="logo"><img src="/wx/Public/home/login/img/logo.png"></div><div class="news"><table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%"><tr><td style="font-size: 0.43rem; color: #333333;" colspan="2"><span class="left">'+data[i].name+'</span><span class="right">'+data[i].type+'</span></td></tr><tr><td width="10%"><div style="width:0.16rem; height:0.26rem; margin: 0 auto;"><img src="/wx/Public/Home/image/sexg.png"></div></td><td width="90%">'+data[i].sex+'</td></tr><tr><td><div style="width:0.39rem; height:0.38rem;  margin: 0 auto;"><img src="/wx/Public/Home/image/heightg.png"></div></td><td>身高：'+data[i].height+'cm</td></tr><tr><td><div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img src="/wx/Public/Home/image/placer.png"></div></td><td><span>'+data[i].addre+'</span><span class="right">'+data[i].money+'元/天</span></td></tr></table></div><div style="float: right; width: 18%;"><div onclick="al('+data[i].id+')" class="more">更多</div><div class="time">未定</div></div></div></div>';
                                $('#foreach').html(list);
                        };
                    },error:function(){
                        alert('no');
                    }
                });
        }        
</script>
<section id="an" class="job-module"
         style="display:block; height:10%; width:100%;position:fixed; z-index:10; position:absolute; top:0;">
    <dl class="retri">
        <dt>
            <a id="area" href="javascript:;">所有</a>
        </dt>
        <dd class="area">
            <ul class="slid downlist">
                <li><a href="index.html" onclick="tab('tab2')">主持人</a></li>
                <li><a href="index.html">摄像机</a></li>
                <li><a href="index.html">单反相机</a></li>
                <li><a href="index.html">道具</a></li>
                <li><a href="index.html">其他</a></li>
            </ul>
        </dd>
        <dd class="wage" style="display: none;">
            <ul class="slid downlist">
                <li><a href="index.html">河南省郑州市二七区</a></li>
                <li><a href="index.html">二七</a></li>
                <li><a href="index.html">中原</a></li>
                <li><a href="index.html">惠济</a></li>
                <li><a href="index.html">金水</a></li>
            </ul>
        </dd>
    </dl>
</section>

<div onclick="con()">
    <div class="box">
        <div>
            <div id="tab1" class="tab1">
            <div id="foreach">
                <?php if(is_array($stu)): foreach($stu as $key=>$list): ?><div id="index">
                            <div class="main">
                            <div class="content" id="indexs">
                                <div class="logo">
                                    <img src="/wx/Public/home/login/img/logo.png">
                                </div>
                                <div class="news">
                                <literal>
                                    <?php if($list[sex] == '0' ): ?><table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                                        <tr>
                                            <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                                <span class="left"><?php echo ($list["name"]); ?></span>
                                                <span class="right"><?php echo ($list["type"]); ?></span>
                                            </td>
                                        </tr>
                                        <tr>     
                                               <td width="10%">
                                                        <div style="width:0.16rem; height:0.26rem; margin: 0 auto;">
                                                             <img src="/wx/Public/Home/image/sexg.png">
                                                         </div>
                                                    </td>
                                                    <td width="90%"><?php echo ($list['sex']=='0'?'女':'男'); ?></td>
                                                </tr>
                                                 <tr>
                                            <td>
                                                <div style="width:0.39rem; height:0.38rem;  margin: 0 auto;"><img
                                                        src="/wx/Public/Home/image/heightg.png"></div>
                                            </td>
                                            <td>身高：<?php echo ($list["height"]); ?>cm</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img
                                                        src="/wx/Public/Home/image/placer.png"></div>
                                            </td>
                                            <td>
                                                <span><?php echo ($list["addre"]); ?></span>
                                                <span class="right"><?php echo ($list["money"]); ?>元/天</span>
                                            </td>
                                        </tr>
                                    </table>
                                    <?php else: ?>
                                    <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                                        <tr>
                                            <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                                <span class="left"><?php echo ($list["name"]); ?></span>
                                                <span class="right"><?php echo ($list["type"]); ?></span>
                                            </td>
                                        </tr>
                                         
                                            <tr>     
                                               <td width="10%">
                                                        <div style="width:0.16rem; height:0.26rem; margin: 0 auto;">
                                                             <img src="/wx/Public/Home/image/sexb.png">
                                                         </div>
                                                    </td>
                                                    <td width="90%"><?php echo ($list['sex']=='0'?'女':'男'); ?></td>
                                                </tr>
                                                 <tr>
                                            <td>
                                                <div style="width:0.39rem; height:0.38rem;  margin: 0 auto;"><img
                                                        src="/wx/Public/Home/image/height.png"></div>
                                            </td>
                                            <td>身高：<?php echo ($list["height"]); ?>cm</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img
                                                        src="/wx/Public/Home/image/place.png"></div>
                                            </td>
                                            <td>
                                                <span><?php echo ($list["addre"]); ?></span>
                                                <span class="right"><?php echo ($list["money"]); ?>元/天</span>
                                            </td>
                                        </tr>
                                    </table><?php endif; ?>
                                    <literal>
                                </div>
                                <div style="float: right; width: 18%;">
                                    <div onclick="al(<?php echo ($list["id"]); ?>)" class="more">更多</div>
                                    <div class="time">未定</div>
                                </div>
                                
                            </div>
                        </div>
                     </div><?php endforeach; endif; ?>
            </div>
            <div> <p><br><br><br><br></p></div>
            </div>
        </div>
        <div id="tab2" class="tab2">
            <span id = 'title' style="display:none"></span>
        </div>
    </div>
    <div style="clear: both;"></div>
    <div class="foot">
        <a href="#" class="selected">
            <div id="people" onclick="tab('tab1'); img('img1');clic()" class="people">
                <div style="width: 0.58rem; float: left; height: 0.72rem; margin: 0.35rem 0 0.35rem 1.2rem;">
                    <img id="img1" src="/wx/Public/Home/image/peopleb.png">
                </div>
                <div style=" position: relative; top:0.35rem; left: 0.35rem;">四大金刚</div>
            </div>
        </a>
        <a href="#">
            <div id="goods" onclick="tab('tab2'); img('img2');cli()" class="goods">
                <div style="width: 0.61rem; height: 0.46rem; margin: 0.4rem 1rem; float: left;">
                    <img id="img2" src="/wx/Public/Home/image/goodsa.png">
                </div>
                <div style=" position: relative; top:0.35rem; right: 0.58rem;">婚庆道具</div>
            </div>
        </a>
    </div>
    <!--遮盖-->
    <div id="fade" class="black_overlay"></div>
    <!--alert-->

    <div id="light" class="white_content">
        <div style="width:98%; height:98%; margin:1%;">
            <div style="width: 100%; height: 2.41rem;">
                <div style="width:1.8rem; height:2.3rem; float:left;">
                    <img src="/wx/Public/home/login/img/logo.png">
                </div>
                <table style="float: right; margin-left: 1%;" width="77%">
                    <tr style="font-size: 0.4rem;">
                        <td >姓名：<span id ="myname"></span></td>
                        <td align="right" id = "mytype" style="color: #ed4c59;">主持人</td>
                    </tr>
                    <tr>
                        <td>性别：<span id = "mysex" ></span></td>
                        
                        <td  align="right">年龄：<span id = "myage">24</span></td>
                    </tr>
                    <tr>
                        <td >身高/cm：<span id = "myheight">170</span></td>
                        <td  align="right" style="color: #ed4c59;"><span id = "mymoney">100</span>/天</td>
                    </tr>
                    <tr>
                        <td >所在地：<span id = "myaddre">河南省郑州市高新区</span></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div>
                <p style="margin:1% 0;">
                    其他信息：<span id="qita"></span>
                </p>
            </div>

            <div class="contact">
                <table>
                    <tr>
                        <td>联系方式：</td>
                        <td>电话：</td>
                        <td id="tel"><input disabled
                                            style="height: 0.5rem; background-color: white; font-weight:bold; font-size: 0.3rem; width: 2rem; border: 0px; color: #888888; outline: none; color: #ed4c59;"
                                            type="text" id="telV" value="18823455234"></td>
                        <td><a onclick="copyTel()" href="javascript:;"><u>复制</u></a></td>
                        <td>
                            <div id="tyes" style="color: cadetblue; display: none; margin-left: 0.2rem;">复制成功</div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>微信：</td>
                        <td id="wechat"><input disabled
                                               style="height: 0.5rem; background-color: white; font-size: 0.3rem; width: 2rem; color:#888888;border: 0px; outline: none; color: #ed4c59; font-weight: bold;"
                                               ; type="text" id="wechatV" value="18823455234"></td>
                        <td><a onclick="copyWe()" href="javascript:;"><u>复制</u></a></td>
                        <td>
                            <div id="wyes" style="display: none; color: cadetblue; margin-left: 0.2rem;">复制成功</div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="close"
                 onclick="document.getElementById('light').style.display = 'none';document.getElementById('fade').style.display = 'none';document.body.style.overflow = 'auto';">
                关闭
            </div>
        </div>
    </div>
</div>

<!--遮盖-->
    <div id="fades" class="black_overlay"></div>
    <!--alert-->
<!-- 设备详情   <div id="lights" class="white_content">-->
    <div id="lights" class="white_content">
        <form id="form4">
            <div style="width:98%; height:98%; margin:1%;">
                <div style="width: 100%; height: 2.41rem;">
                    <div style="width:1.9rem; height:2.41rem; float:left;">
                        <img src="/wx/Public/Home/image/logo.png">
                    </div>
                    <table style="float: right; margin-left: 1%;" width="75%">
                        <tr style="font-size: 0.4rem;">
                            <td id="mytitle">我需要一台摄像机<input type="hidden" value="隐藏域(传递id)"></td>
                            <td align="right" style="color: #ed4c59;" id="mynames">摄像机</td>
                        </tr>
                        <tr>
                            <td><span style="color: #ED4C59">价格私聊</span></td>
                        </tr>
                        <tr>
                            <td>活动时间：<span>2016-11-11</span></td>
                        </tr>
                        <tr>
                            <td>活动地点：<span id="myaddres">河南省郑州市高新区</span></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <span style="margin:1% 0; width: 100%; height: 1.5rem; overflow: hidden;">
                    其他要求：<span id="qitas"></span>
                </span>

                <div class="contact">
                    <table>
                        <tr>
                            <td>联系方式：</td>
                            <td>电话：</td>
                            <td id="tel" >
                                <input readonly="readonly" style="height: 0.5rem; background-color: white; font-weight:bold; font-size: 0.3rem; width: 2rem; border: 0px; color: #888888; outline: none; color: #ed4c59;" type="text" id="telV_matter" value="18823455234">
                            </td>
                            <td><a onclick="copyTel_matter()" href="javascript:;">&nbsp;&nbsp;&nbsp;<u>复制</u></a></td>
                            <td>
                                <div id="tyes_matter" style="color: cadetblue; display: none; margin-left: 0.2rem;">复制成功</div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>微信：</td>
                            <td id="wechat">
                                <input readonly="readonly" style="height: 0.5rem; background-color: white; font-size: 0.3rem; width: 2rem; color:#888888;border: 0px; outline: none; color: #ed4c59; font-weight: bold;" type="text" id="wechatV_matter" value="18823455234">
                            </td>
                            <td><a onclick="copyWe_matter()" href="javascript:;">&nbsp;&nbsp;&nbsp;<u>复制</u></a></td>
                            <td>
                                <div id="wyes_matter" style="display: none; color: cadetblue; margin-left: 0.2rem;">复制成功</div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="close"
                     onclick="document.getElementById('lights').style.display = 'none';document.getElementById('fades').style.display = 'none';document.body.style.overflow = 'auto';">
                    关闭
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    var i = 0;
    $("#city").click(function (e) {
        SelCity(this, e);
    });
    $("#city2").click(function (e) {
        SelCity(this, e);
    });                     
</script>

</body>
</html>