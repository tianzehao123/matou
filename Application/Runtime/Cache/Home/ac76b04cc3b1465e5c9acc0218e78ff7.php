<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/wx/Public/Home/css/style.css" />
<script>!function(e){function t(a){if(i[a])return i[a].exports;var n=i[a]={exports:{},id:a,loaded:!1};return e[a].call(n.exports,n,n.exports,t),n.loaded=!0,n.exports}var i={};return t.m=e,t.c=i,t.p="",t(0)}([function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var i=window;t["default"]=i.flex=function(e,t){var a=e||100,n=t||1,r=i.document,o=navigator.userAgent,d=o.match(/Android[\S\s]+AppleWebkit\/(\d{3})/i),l=o.match(/U3\/((\d+|\.){5,})/i),c=l&&parseInt(l[1].split(".").join(""),10)>=80,p=navigator.appVersion.match(/(iphone|ipad|ipod)/gi),s=i.devicePixelRatio||1;p||d&&d[1]>534||c||(s=1);var u=1/s,m=r.querySelector('meta[name="viewport"]');m||(m=r.createElement("meta"),m.setAttribute("name","viewport"),r.head.appendChild(m)),m.setAttribute("content","width=device-width,user-scalable=no,initial-scale="+u+",maximum-scale="+u+",minimum-scale="+u),r.documentElement.style.fontSize=a/2*s*n+"px"},e.exports=t["default"]}]);
    flex(100, 1);</script>
    <!-- 字形图标 -->
    <script src="https://use.fontawesome.com/f47f4563cb.js"></script>
    <script src="/wx/Public/Home/js/jquery.js"></script>
    <script src="/wx/Public/Home/js/index.js"></script>
<title>已发布</title>
</head>
<body>
    <div class="tab">
    	<a href="#">
        <div id="nav-left" class="nav-left" >
            <a style="color:white;" href="/wx/index.php/home/issued/index">未完成</a>
        </div>
        </a>
        <a href="#">
        <div id="nav-right" class="nav-right" onclick="tab1('tab4');color('nav-right')">
            已完成
        </div>
        </a>
    </div>
    <div class="box">
    <!-- 这里是未完成的 设备-->
        <div id="tab3" class="tab3">
        <span id = 'content' style="display:none"></span>
         <?php if(is_array($list)): foreach($list as $key=>$stu): ?><div class="main">
                    <div class="content">
                        <div class="logo">
                            <img src="/wx/Public/Home/image/logo.png">
                        </div>
                        <div class="news">
                            <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                                <tr>
                                    <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                        <span class="left"><?php echo ($stu["title"]); ?></span>
                                        <span class="right"><?php echo ($stu["name"]); ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">
                                        <div style="width:0.3rem; height:0.3rem; margin: 0 auto;"><img src="/wx/Public/Home/image/time.png"></div>
                                    </td>
                                    <td width="90%">活动日期：<?php echo ($stu["time"]); ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width:0.24rem; height:0.3rem;  margin: 0 auto;"><img src="/wx/Public/Home/image/any.png"></div>
                                    </td>
                                    <td>其他要求：<?php echo ($stu["content"]); ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img src="/wx/Public/Home/image/placer.png"></div>
                                    </td>
                                    <td>
                                        <span><?php echo ($stu["address"]); ?></span>
                                        <span class="right"><?php echo ($stu["amount"]); ?>元/天</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div style="float: right; width: 18%;">
                            <div onclick="test(<?php echo ($stu["id"]); ?>)" class="more">更多</div>
                            <div onclick="finish(<?php echo ($stu["id"]); ?>)" class="finish">完成</div>
                            <script>
                            </script>
                            <div class="issued-time">1小时前</div>
                        </div>
                    </div>
                </div>

                <div id="finish_ok" class="finish_ok">
                <p>是否确认完成</p>
                <div class="finish_margin">
                    <div class="finish_cancel" onclick="finish_cancel()">
                        取消
                    </div>
                    <div class="finish_finish" onclick="finish_finish(<?php echo ($stu["id"]); ?>)">
                        完成
                    </div>
                </div>
            </div>
            <script>

                </script><?php endforeach; endif; ?>
            
        </div>


        <!-- 这里是已完成的 设备-->
        <div id="tab4" class="tab4">
        
             
        </div>
    </div>


    <!--遮盖-->
    <div id="fade" class="black_overlay"></div>
    <!--alert-->
<!-- 设备详情 -->
    <div id="light" class="white_content">
        <div style="width:98%; height:98%; margin:1%;">
            <div style="width: 100%; height: 2.41rem;">
                <!-- <div style="width:1.9rem; height:2.41rem; float:left;">
                    <img src="/wx/Public/home/login/img/logo.png">
                </div> -->
                <table style="float: right; margin-left: 1%;" width="77%">
                    <tr style="font-size: 0.4rem;">
                        <td >标题：<span id ="mytitle">为其未完全</span></td>
                        <td align="right" id = "mynames" style="color: #ed4c59;">随便写</td>
                    </tr>
                    
                    <tr>
                        
                        <td  align="right" style="color: #ed4c59;"><span id = "mymoneys">100</span>/天</td>
                    </tr>
                    <tr>
                        <td >所在地：<span id = "myaddres">河南省郑州市高新区</span></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <p style="margin:1% 0;">
                其他信息：本人爱好广泛、喜欢唱歌、跳舞、本人爱好广泛、喜欢唱歌、跳舞、本人爱好广泛、喜欢唱歌、跳舞、本人爱好广泛、喜欢唱歌、跳舞、
            </p>

            <div class="contact">
                <table>
                    <tr>
                        <td>联系方式：</td>
                        <td>电话：</td>
                        <td id="tel"><input disabled
                                            style="height: 0.5rem; background-color: white; font-weight:bold; font-size: 0.3rem; width: 2rem; border: 0px; color: #888888; outline: none; color: #ed4c59;"
                                            type="text" id="telVs" value="18823455234"></td>
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
                                               ; type="text" id="xxoo" value="18823455234"></td>
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

    

</body>
</html>