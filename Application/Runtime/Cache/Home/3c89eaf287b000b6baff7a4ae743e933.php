<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <title>通告列表</title>
    <link rel="stylesheet" type="text/css" href="/wx/Public/Home/css/style.css">
    <link rel="stylesheet" type="text/css" href="/wx/Public/Home/css/jquery.fs.boxer.css">
    <style type="text/css"></style>
    <script src="/wx/Public/Home/js/jquery.js"></script>
    <script src="/wx/Public/Home/js/Popt.js"></script>
    <script src="/wx/Public/Home/js/cityJson.js"></script>
    <script src="/wx/Public/Home/js/citySet.js"></script>
    <script src="/wx/Public/Home/js/index.js"></script>
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
<!--返回键开始-->
<!--返回键结束-->
<section class="job-module" id="any"
         style="display:block; width:100%; top:0; position:fixed; z-index:20; position:absolute;">
    <a href="index.html" style="display: block;width: 9%; position: fixed; z-index: 1000;top: 4.5px;">
        <img src="image/rpw_back_n.png" />
    </a>
    <dl class="retrie">
        <dt>
            <a id="area" href="javascript:;">所有</a>
            <a id="wage" href="javascript:;">性别</a>
            <a id="wage" href="javascript:;">报价</a>
        </dt>
        <dd class="every_">
            <ul class="slide downlis">
                <li id="compere"><a href="#">主持人</a></li>
                <li id="cemeraman"><a href="#">摄像师</a></li>
                <li id="dresser"><a href="#">化妆师</a></li>
                <li id="photographer"><a href="#">摄影师</a></li>
                <li id="else"><a href="#">其他</a></li>
            </ul>
        </dd>
        <dd class="sex_">
            <ul class="slide downlis">
                <li id="man"><a href="#">男</a></li>
                <li id="woman"><a href="#">女</a></li>
            </ul>
        </dd>
        <dd class="budget_">
            <ul class="slide downlis">
                <li id="first"><a href="#">500元/天以下</a></li>
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
                <!--<a href="#">自选 ____~____ 元/天</a>-->
            </ul>
        </dd>
    </dl>
</section>
<section id="an" class="job-module"
         style="display:block; height:10%; width:100%;position:fixed; z-index:10; position:absolute; top:0;">
    <a href="index.html" style="display: block;width: 9%; position: fixed; z-index: 1000;top: 4.5px;">
        <img src="image/rpw_back_n.png" />
    </a>
    <dl class="retri">
        <dt>
            <a id="area" href="javascript:;">所有</a>
        </dt>
        <dd class="area">
            <ul class="slid downlist">
                <li id="buy"><a href="#">购买</a></li>
                <li id="rent"><a href="#">租赁</a></li>
                <li id="car"><a href="#">婚车/车队</a></li>
            </ul>
        </dd>
    </dl>
</section>

<div onclick="con()">
    <div class="box">
        <div id="tab1" class="tab1">
            <div class="main">
                <form id="form1" action="#" method="post">
                    <div class="content">
                        <div class="logo">
                            <img id="pic" src="image/logo.png">
                        </div>
                        <div class="news">
                            <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                                <tr>
                                    <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                        <span id="title" class="left">我需要一名主持人</span>
                                        <span class="right" id="type">主持人</span>
                                        <input id="id" type="hidden" value="隐藏域(传递id)">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">
                                        <div style="width:0.16rem; height:0.26rem; margin: 0 auto;">
                                            <img src="image/sexg.png">
                                        </div>
                                    </td>
                                    <td width="90%"><span id="sex">女</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width:0.39rem; height:0.38rem;  margin: 0 auto;"><img src="image/time.png"></div>
                                    </td>
                                    <td>活动日期：<span id="date">2016-11-11</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;">
                                            <img src="image/placer.png">
                                        </div>
                                    </td>
                                    <td>
                                        <span id="city">郑州市</span>
                                        <span class="right" id="price">1000元/天</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div style="float: right; width: 18%;">
                            <div id="more" class="more" onclick="al()">更多</div>
                            <!--<button id="more" style="display:block; height: 0.7rem; width: 1.7rem; outline: none; border: none; background-color: #ed4c59; border-radius: 0.07rem; color: white; font-size: 0.3rem; font-family: 'microsoft yahei'" onclick="al()">更多</button>-->
                            <div class="time" id="time">1小时前</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="main">
                <form id="form1" action="#" method="post">
                    <div class="content">
                        <div class="logo">
                            <img id="pic" src="image/logo.png">
                        </div>
                        <div class="news">
                            <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                                <tr>
                                    <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                        <span id="title" class="left">我需要一名主持人</span>
                                        <span class="right" id="type">主持人</span>
                                        <input id="id" type="hidden" value="隐藏域(传递id)">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">
                                        <div style="width:0.16rem; height:0.26rem; margin: 0 auto;">
                                            <img src="image/sexg.png">
                                        </div>
                                    </td>
                                    <td width="90%"><span id="sex">女</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width:0.39rem; height:0.38rem;  margin: 0 auto;"><img src="image/time.png"></div>
                                    </td>
                                    <td>活动日期：<span id="date">2016-11-11</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;">
                                            <img src="image/placer.png">
                                        </div>
                                    </td>
                                    <td>
                                        <span id="city">郑州市</span>
                                        <span class="right" id="price">1000元/天</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div style="float: right; width: 18%;">
                            <div id="more" class="more" onclick="al()">更多</div>
                            <!--<button id="more" style="display:block; height: 0.7rem; width: 1.7rem; outline: none; border: none; background-color: #ed4c59; border-radius: 0.07rem; color: white; font-size: 0.3rem; font-family: 'microsoft yahei'" onclick="al()">更多</button>-->
                            <div class="time" id="time">1小时前</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="main">
                <form id="form1" action="#" method="post">
                    <div class="content">
                        <div class="logo">
                            <img id="pic" src="image/logo.png">
                        </div>
                        <div class="news">
                            <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                                <tr>
                                    <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                        <span id="title" class="left">我需要一名主持人</span>
                                        <span class="right" id="type">主持人</span>
                                        <input id="id" type="hidden" value="隐藏域(传递id)">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">
                                        <div style="width:0.16rem; height:0.26rem; margin: 0 auto;">
                                            <img src="image/sexg.png">
                                        </div>
                                    </td>
                                    <td width="90%"><span id="sex">女</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width:0.39rem; height:0.38rem;  margin: 0 auto;"><img src="image/time.png"></div>
                                    </td>
                                    <td>活动日期：<span id="date">2016-11-11</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;">
                                            <img src="image/placer.png">
                                        </div>
                                    </td>
                                    <td>
                                        <span id="city">郑州市</span>
                                        <span class="right" id="price">1000元/天</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div style="float: right; width: 18%;">
                            <div id="more" class="more" onclick="al()">更多</div>
                            <!--<button id="more" style="display:block; height: 0.7rem; width: 1.7rem; outline: none; border: none; background-color: #ed4c59; border-radius: 0.07rem; color: white; font-size: 0.3rem; font-family: 'microsoft yahei'" onclick="al()">更多</button>-->
                            <div class="time" id="time">1小时前</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="main">
                <form id="form1" action="#" method="post">
                    <div class="content">
                        <div class="logo">
                            <img id="pic" src="image/logo.png">
                        </div>
                        <div class="news">
                            <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                                <tr>
                                    <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                        <span id="title" class="left">我需要一名主持人</span>
                                        <span class="right" id="type">主持人</span>
                                        <input id="id" type="hidden" value="隐藏域(传递id)">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">
                                        <div style="width:0.16rem; height:0.26rem; margin: 0 auto;">
                                            <img src="image/sexg.png">
                                        </div>
                                    </td>
                                    <td width="90%"><span id="sex">女</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width:0.39rem; height:0.38rem;  margin: 0 auto;"><img src="image/time.png"></div>
                                    </td>
                                    <td>活动日期：<span id="date">2016-11-11</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;">
                                            <img src="image/placer.png">
                                        </div>
                                    </td>
                                    <td>
                                        <span id="city">郑州市</span>
                                        <span class="right" id="price">1000元/天</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div style="float: right; width: 18%;">
                            <div id="more" class="more" onclick="al()">更多</div>
                            <!--<button id="more" style="display:block; height: 0.7rem; width: 1.7rem; outline: none; border: none; background-color: #ed4c59; border-radius: 0.07rem; color: white; font-size: 0.3rem; font-family: 'microsoft yahei'" onclick="al()">更多</button>-->
                            <div class="time" id="time">1小时前</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="main">
                <form id="form1" action="#" method="post">
                    <div class="content">
                        <div class="logo">
                            <img id="pic" src="image/logo.png">
                        </div>
                        <div class="news">
                            <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                                <tr>
                                    <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                        <span id="title" class="left">我需要一名主持人</span>
                                        <span class="right" id="type">主持人</span>
                                        <input id="id" type="hidden" value="隐藏域(传递id)">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">
                                        <div style="width:0.16rem; height:0.26rem; margin: 0 auto;">
                                            <img src="image/sexg.png">
                                        </div>
                                    </td>
                                    <td width="90%"><span id="sex">女</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width:0.39rem; height:0.38rem;  margin: 0 auto;"><img src="image/time.png"></div>
                                    </td>
                                    <td>活动日期：<span id="date">2016-11-11</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;">
                                            <img src="image/placer.png">
                                        </div>
                                    </td>
                                    <td>
                                        <span id="city">郑州市</span>
                                        <span class="right" id="price">1000元/天</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div style="float: right; width: 18%;">
                            <div id="more" class="more" onclick="al()">更多</div>
                            <!--<button id="more" style="display:block; height: 0.7rem; width: 1.7rem; outline: none; border: none; background-color: #ed4c59; border-radius: 0.07rem; color: white; font-size: 0.3rem; font-family: 'microsoft yahei'" onclick="al()">更多</button>-->
                            <div class="time" id="time">1小时前</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="main">
                <form id="form1" action="#" method="post">
                    <div class="content">
                        <div class="logo">
                            <img id="pic" src="image/logo.png">
                        </div>
                        <div class="news">
                            <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                                <tr>
                                    <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                        <span id="title" class="left">我需要一名主持人</span>
                                        <span class="right" id="type">主持人</span>
                                        <input id="id" type="hidden" value="隐藏域(传递id)">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">
                                        <div style="width:0.16rem; height:0.26rem; margin: 0 auto;">
                                            <img src="image/sexg.png">
                                        </div>
                                    </td>
                                    <td width="90%"><span id="sex">女</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width:0.39rem; height:0.38rem;  margin: 0 auto;"><img src="image/time.png"></div>
                                    </td>
                                    <td>活动日期：<span id="date">2016-11-11</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;">
                                            <img src="image/placer.png">
                                        </div>
                                    </td>
                                    <td>
                                        <span id="city">郑州市</span>
                                        <span class="right" id="price">1000元/天</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div style="float: right; width: 18%;">
                            <div id="more" class="more" onclick="al()">更多</div>
                            <!--<button id="more" style="display:block; height: 0.7rem; width: 1.7rem; outline: none; border: none; background-color: #ed4c59; border-radius: 0.07rem; color: white; font-size: 0.3rem; font-family: 'microsoft yahei'" onclick="al()">更多</button>-->
                            <div class="time" id="time">1小时前</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="main">
                <form id="form1" action="#" method="post">
                    <div class="content">
                        <div class="logo">
                            <img id="pic" src="image/logo.png">
                        </div>
                        <div class="news">
                            <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                                <tr>
                                    <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                        <span id="title" class="left">我需要一名主持人</span>
                                        <span class="right" id="type">主持人</span>
                                        <input id="id" type="hidden" value="隐藏域(传递id)">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">
                                        <div style="width:0.16rem; height:0.26rem; margin: 0 auto;">
                                            <img src="image/sexg.png">
                                        </div>
                                    </td>
                                    <td width="90%"><span id="sex">女</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width:0.39rem; height:0.38rem;  margin: 0 auto;"><img src="image/time.png"></div>
                                    </td>
                                    <td>活动日期：<span id="date">2016-11-11</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;">
                                            <img src="image/placer.png">
                                        </div>
                                    </td>
                                    <td>
                                        <span id="city">郑州市</span>
                                        <span class="right" id="price">1000元/天</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div style="float: right; width: 18%;">
                            <div id="more" class="more" onclick="al()">更多</div>
                            <!--<button id="more" style="display:block; height: 0.7rem; width: 1.7rem; outline: none; border: none; background-color: #ed4c59; border-radius: 0.07rem; color: white; font-size: 0.3rem; font-family: 'microsoft yahei'" onclick="al()">更多</button>-->
                            <div class="time" id="time">1小时前</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="main">
                <form id="form1" action="#" method="post">
                    <div class="content">
                        <div class="logo">
                            <img id="pic" src="image/logo.png">
                        </div>
                        <div class="news">
                            <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                                <tr>
                                    <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                        <span id="title" class="left">我需要一名主持人</span>
                                        <span class="right" id="type">主持人</span>
                                        <input id="id" type="hidden" value="隐藏域(传递id)">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">
                                        <div style="width:0.16rem; height:0.26rem; margin: 0 auto;">
                                            <img src="image/sexg.png">
                                        </div>
                                    </td>
                                    <td width="90%"><span id="sex">女</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width:0.39rem; height:0.38rem;  margin: 0 auto;"><img src="image/time.png"></div>
                                    </td>
                                    <td>活动日期：<span id="date">2016-11-11</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;">
                                            <img src="image/placer.png">
                                        </div>
                                    </td>
                                    <td>
                                        <span id="city">郑州市</span>
                                        <span class="right" id="price">1000元/天</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div style="float: right; width: 18%;">
                            <div id="more" class="more" onclick="al()">更多</div>
                            <!--<button id="more" style="display:block; height: 0.7rem; width: 1.7rem; outline: none; border: none; background-color: #ed4c59; border-radius: 0.07rem; color: white; font-size: 0.3rem; font-family: 'microsoft yahei'" onclick="al()">更多</button>-->
                            <div class="time" id="time">1小时前</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="main">
                <form id="form1" action="#" method="post">
                    <div class="content">
                        <div class="logo">
                            <img id="pic" src="image/logo.png">
                        </div>
                        <div class="news">
                            <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                                <tr>
                                    <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                        <span id="title" class="left">我需要一名主持人</span>
                                        <span class="right" id="type">主持人</span>
                                        <input id="id" type="hidden" value="隐藏域(传递id)">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">
                                        <div style="width:0.16rem; height:0.26rem; margin: 0 auto;">
                                            <img src="image/sexg.png">
                                        </div>
                                    </td>
                                    <td width="90%"><span id="sex">女</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width:0.39rem; height:0.38rem;  margin: 0 auto;"><img src="image/time.png"></div>
                                    </td>
                                    <td>活动日期：<span id="date">2016-11-11</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;">
                                            <img src="image/placer.png">
                                        </div>
                                    </td>
                                    <td>
                                        <span id="city">郑州市</span>
                                        <span class="right" id="price">1000元/天</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div style="float: right; width: 18%;">
                            <div id="more" class="more" onclick="al()">更多</div>
                            <!--<button id="more" style="display:block; height: 0.7rem; width: 1.7rem; outline: none; border: none; background-color: #ed4c59; border-radius: 0.07rem; color: white; font-size: 0.3rem; font-family: 'microsoft yahei'" onclick="al()">更多</button>-->
                            <div class="time" id="time">1小时前</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="main_">
                <form id="form1" action="#" method="post">
                    <div class="content">
                        <div class="logo">
                            <img id="pic" src="image/logo.png">
                        </div>
                        <div class="news">
                            <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                                <tr>
                                    <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                        <span id="title" class="left">我需要一名主持人</span>
                                        <span class="right" id="type">主持人</span>
                                        <input id="id" type="hidden" value="隐藏域(传递id)">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">
                                        <div style="width:0.16rem; height:0.26rem; margin: 0 auto;">
                                            <img src="image/sexg.png">
                                        </div>
                                    </td>
                                    <td width="90%"><span id="sex">女</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width:0.39rem; height:0.38rem;  margin: 0 auto;"><img src="image/time.png"></div>
                                    </td>
                                    <td>活动日期：<span id="date">2016-11-11</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;">
                                            <img src="image/placer.png">
                                        </div>
                                    </td>
                                    <td>
                                        <span id="city">郑州市</span>
                                        <span class="right" id="price">1000元/天</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div style="float: right; width: 18%;">
                            <div id="more" class="more" onclick="al()">更多</div>
                            <!--<button id="more" style="display:block; height: 0.7rem; width: 1.7rem; outline: none; border: none; background-color: #ed4c59; border-radius: 0.07rem; color: white; font-size: 0.3rem; font-family: 'microsoft yahei'" onclick="al()">更多</button>-->
                            <div class="time" id="time">1小时前</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="tab2" class="tab2">
            <div class="main">
                <form id="form2" action="#" method="post">
                    <div class="content">
                        <div class="logo">
                            <img id="pic_matter" src="image/logo.png">
                        </div>
                        <div class="news">
                            <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                                <tr>
                                    <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                        <span id="title_matter" class="left">我需要一台摄像机</span>
                                        <span id="type_matter" class="right">摄像机</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">
                                        <div style="width:0.3rem; height:0.3rem; margin: 0 auto;"><img src="image/time.png">
                                        </div>
                                    </td>
                                    <td width="90%">活动日期：<span id="date_matter">2016-11-11</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width:0.24rem; height:0.3rem;  margin: 0 auto;">
                                            <img src="image/any.png">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="detail">
                                            其他要求：<span id="detail">需防水，下...需防水，下...需防水，下...需防水，下...需防水，下...</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img src="image/placer.png"></div>
                                    </td>
                                    <td>
                                        <span id="city_matter">郑州市</span>
                                        <span id="price_matter" class="right">1000元/天</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div style="float: right; width: 18%;">
                            <div id="more_matter" onclick="al_matter()" class="more">更多</div>
                            <div id="time_matter" class="time">1小时前</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="main">
                <div class="content">
                    <div class="logo">
                        <img src="image/logo.png">
                    </div>
                    <div class="news">
                        <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                            <tr>
                                <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                    <span class="left">我需要一台摄像机</span>
                                    <span class="right">摄像机</span>
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">
                                    <div style="width:0.3rem; height:0.3rem; margin: 0 auto;"><img src="image/time.png">
                                    </div>
                                </td>
                                <td width="90%">活动日期：2016/11/11</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width:0.24rem; height:0.3rem;  margin: 0 auto;"><img
                                            src="image/any.png"></div>
                                </td>
                                <td>其他要求：需防水，下...</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img
                                            src="image/placer.png"></div>
                                </td>
                                <td>
                                    <span>郑州市</span>
                                    <span class="right">1000元/天</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="float: right; width: 18%;">
                        <div onclick="al_matter()" class="more">更多</div>
                        <div class="time">1小时前</div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="content">
                    <div class="logo">
                        <img src="image/logo.png">
                    </div>
                    <div class="news">
                        <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                            <tr>
                                <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                    <span class="left">我需要一台摄像机</span>
                                    <span class="right">摄像机</span>
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">
                                    <div style="width:0.3rem; height:0.3rem; margin: 0 auto;"><img src="image/time.png">
                                    </div>
                                </td>
                                <td width="90%">活动日期：2016/11/11</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width:0.24rem; height:0.3rem;  margin: 0 auto;"><img
                                            src="image/any.png"></div>
                                </td>
                                <td>其他要求：需防水，下...</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img
                                            src="image/placer.png"></div>
                                </td>
                                <td>
                                    <span>郑州市</span>
                                    <span class="right">1000元/天</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="float: right; width: 18%;">
                        <div onclick="al_matter()" class="more">更多</div>
                        <div class="time">1小时前</div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="content">
                    <div class="logo">
                        <img src="image/logo.png">
                    </div>
                    <div class="news">
                        <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                            <tr>
                                <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                    <span class="left">我需要一台摄像机</span>
                                    <span class="right">摄像机</span>
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">
                                    <div style="width:0.3rem; height:0.3rem; margin: 0 auto;"><img src="image/time.png">
                                    </div>
                                </td>
                                <td width="90%">活动日期：2016/11/11</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width:0.24rem; height:0.3rem;  margin: 0 auto;"><img
                                            src="image/any.png"></div>
                                </td>
                                <td>其他要求：需防水，下...</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img
                                            src="image/placer.png"></div>
                                </td>
                                <td>
                                    <span>郑州市</span>
                                    <span class="right">1000元/天</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="float: right; width: 18%;">
                        <div onclick="al_matter()" class="more">更多</div>
                        <div class="time">1小时前</div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="content">
                    <div class="logo">
                        <img src="image/logo.png">
                    </div>
                    <div class="news">
                        <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                            <tr>
                                <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                    <span class="left">我需要一台摄像机</span>
                                    <span class="right">摄像机</span>
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">
                                    <div style="width:0.3rem; height:0.3rem; margin: 0 auto;"><img src="image/time.png">
                                    </div>
                                </td>
                                <td width="90%">活动日期：2016/11/11</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width:0.24rem; height:0.3rem;  margin: 0 auto;"><img
                                            src="image/any.png"></div>
                                </td>
                                <td>其他要求：需防水，下...</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img
                                            src="image/placer.png"></div>
                                </td>
                                <td>
                                    <span>郑州市</span>
                                    <span class="right">1000元/天</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="float: right; width: 18%;">
                        <div onclick="al_matter()" class="more">更多</div>
                        <div class="time">1小时前</div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="content">
                    <div class="logo">
                        <img src="image/logo.png">
                    </div>
                    <div class="news">
                        <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                            <tr>
                                <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                    <span class="left">我需要一台摄像机</span>
                                    <span class="right">摄像机</span>
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">
                                    <div style="width:0.3rem; height:0.3rem; margin: 0 auto;"><img src="image/time.png">
                                    </div>
                                </td>
                                <td width="90%">活动日期：2016/11/11</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width:0.24rem; height:0.3rem;  margin: 0 auto;"><img
                                            src="image/any.png"></div>
                                </td>
                                <td>其他要求：需防水，下...</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img
                                            src="image/placer.png"></div>
                                </td>
                                <td>
                                    <span>郑州市</span>
                                    <span class="right">1000元/天</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="float: right; width: 18%;">
                        <div onclick="al_matter()" class="more">更多</div>
                        <div class="time">1小时前</div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="content">
                    <div class="logo">
                        <img src="image/logo.png">
                    </div>
                    <div class="news">
                        <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                            <tr>
                                <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                    <span class="left">我需要一台摄像机</span>
                                    <span class="right">摄像机</span>
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">
                                    <div style="width:0.3rem; height:0.3rem; margin: 0 auto;"><img src="image/time.png">
                                    </div>
                                </td>
                                <td width="90%">活动日期：2016/11/11</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width:0.24rem; height:0.3rem;  margin: 0 auto;"><img
                                            src="image/any.png"></div>
                                </td>
                                <td>其他要求：需防水，下...</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img
                                            src="image/placer.png"></div>
                                </td>
                                <td>
                                    <span>郑州市</span>
                                    <span class="right">1000元/天</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="float: right; width: 18%;">
                        <div onclick="al_matter()" class="more">更多</div>
                        <div class="time">1小时前</div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="content">
                    <div class="logo">
                        <img src="image/logo.png">
                    </div>
                    <div class="news">
                        <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                            <tr>
                                <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                    <span class="left">我需要一台摄像机</span>
                                    <span class="right">摄像机</span>
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">
                                    <div style="width:0.3rem; height:0.3rem; margin: 0 auto;"><img src="image/time.png">
                                    </div>
                                </td>
                                <td width="90%">活动日期：2016/11/11</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width:0.24rem; height:0.3rem;  margin: 0 auto;"><img
                                            src="image/any.png"></div>
                                </td>
                                <td>其他要求：需防水，下...</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img
                                            src="image/placer.png"></div>
                                </td>
                                <td>
                                    <span>郑州市</span>
                                    <span class="right">1000元/天</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="float: right; width: 18%;">
                        <div onclick="al_matter()" class="more">更多</div>
                        <div class="time">1小时前</div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="content">
                    <div class="logo">
                        <img src="image/logo.png">
                    </div>
                    <div class="news">
                        <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                            <tr>
                                <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                    <span class="left">我需要一台摄像机</span>
                                    <span class="right">摄像机</span>
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">
                                    <div style="width:0.3rem; height:0.3rem; margin: 0 auto;"><img src="image/time.png">
                                    </div>
                                </td>
                                <td width="90%">活动日期：2016/11/11</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width:0.24rem; height:0.3rem;  margin: 0 auto;"><img
                                            src="image/any.png"></div>
                                </td>
                                <td>其他要求：需防水，下...</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img
                                            src="image/placer.png"></div>
                                </td>
                                <td>
                                    <span>郑州市</span>
                                    <span class="right">1000元/天</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="float: right; width: 18%;">
                        <div onclick="al_matter()" class="more">更多</div>
                        <div class="time">1小时前</div>
                    </div>
                </div>
            </div>
            <div class="main_">
                <div class="content">
                    <div class="logo">
                        <img src="image/logo.png">
                    </div>
                    <div class="news">
                        <table cellpadding="0" cellspacing="0" style="font-size: 0.37rem; color: #888888;" width="100%">
                            <tr>
                                <td style="font-size: 0.43rem; color: #333333;" colspan="2">
                                    <span class="left">我需要一台摄像机</span>
                                    <span class="right">摄像机</span>
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">
                                    <div style="width:0.3rem; height:0.3rem; margin: 0 auto;"><img src="image/time.png">
                                    </div>
                                </td>
                                <td width="90%">活动日期：2016/11/11</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width:0.24rem; height:0.3rem;  margin: 0 auto;"><img
                                            src="image/any.png"></div>
                                </td>
                                <td>其他要求：需防水，下...</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="width: 0.22rem; height: 0.32rem; margin: 0 auto;"><img
                                            src="image/placer.png"></div>
                                </td>
                                <td>
                                    <span>郑州市</span>
                                    <span class="right">1000元/天</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="float: right; width: 18%;">
                        <div onclick="al_matter()" class="more">更多</div>
                        <div class="time">1小时前</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="clear: both;"></div>
    <div class="foot">
        <a href="#" class="selected">
            <div id="people" onclick="tab('tab1'); img('img1');clic()" class="people">
                <div style="width: 0.58rem; float: left; height: 0.72rem; margin: 0.3rem 0 0.35rem 1.2rem;">
                    <img id="img1" src="image/peopleb.png">
                </div>
                <div style=" position: relative; top:0.3rem; left: 0.35rem;">四大金刚</div>
            </div>
        </a>
        <a href="#">
            <div id="goods" onclick="tab('tab2'); img('img2');cli()" class="goods">
                <div style="width: 0.61rem; height: 0.46rem; margin: 0.4rem 1rem; float: left;">
                    <img id="img2" src="image/goodsa.png">
                </div>
                <div style=" position: relative; top:0.3rem; right: 0.67rem;">婚庆道具</div>
            </div>
        </a>
    </div>
    <!--遮盖-->
    <div id="fade" class="black_overlay"></div>
    <!--alert-->
    <div id="light_people" class="white_content">
        <form id="form3">
            <div style="width:98%; height:98%; margin:1%;">
                <div style="width: 100%; height: 2.41rem;">
                    <div style="width:1.9rem; height:2.41rem; float:left;">
                        <img src="image/logo.png">
                    </div>
                    <table style="float: right; margin-left: 1%;" width="75%">
                        <tr style="font-size: 0.4rem;">
                            <td>我需要一名主持人<input type="hidden" value="隐藏域(传递id)"></td>
                            <td style="color: #ED4C59">主持人</td>
                        </tr>
                        <tr>
                            <td>性别：女</td>
                            <td style="color: #ED4C59">1000/天</td>
                        </tr>
                        <tr>
                            <td>活动日期：<span>2016-11-11</span></td>
                        </tr>
                        <tr>
                            <td>所在地：<span>河南省郑州市高新区</span></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <p style="margin:1% 0; width: 100%; height: 1.5rem; overflow: hidden;">
                    其他信息：本人爱好广泛、喜欢唱歌、跳舞、本人爱好广泛、喜欢唱歌、跳舞、本人爱好广泛、喜欢唱歌、跳舞、本人爱好广泛、喜欢唱歌、跳舞、、喜欢唱歌、跳舞、
                </p>

                <div class="contact">
                    <table>
                        <tr>
                            <td>联系方式：</td>
                            <td>电话：</td>
                            <td id="tel" >
                                <input readonly="readonly" style="height: 0.5rem; background-color: white; font-weight:bold; font-size: 0.3rem; width: 2rem; border: 0px; color: #888888; outline: none; color: #ed4c59;" type="text" id="telV_people" value="18823455234">
                            </td>
                            <td><a onclick="copyTel_people()" href="javascript:;">&nbsp;&nbsp;&nbsp;<u>复制</u></a></td>
                            <td>
                                <div id="tyes_people" style="color: cadetblue; display: none; margin-left: 0.2rem;">复制成功</div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>微信：</td>
                            <td id="wechat">
                                <input readonly="readonly" style="height: 0.5rem; background-color: white; font-size: 0.3rem; width: 2rem; color:#888888;border: 0px; outline: none; color: #ed4c59; font-weight: bold;" type="text" id="wechatV_people" value="18823455234">
                            </td>
                            <td><a onclick="copyWe_people()" href="javascript:;">&nbsp;&nbsp;&nbsp;<u>复制</u></a></td>
                            <td>
                                <div id="wyes_people" style="display: none; color: cadetblue; margin-left: 0.2rem;">复制成功</div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="close"
                     onclick="document.getElementById('light_people').style.display = 'none';document.getElementById('fade').style.display = 'none';document.body.style.overflow = 'auto';">
                    关闭
                </div>
            </div>
        </form>
    </div>
    <div id="light_matter" class="white_content">
        <form id="form4">
            <div style="width:98%; height:98%; margin:1%;">
                <div style="width: 100%; height: 2.41rem;">
                    <div style="width:1.9rem; height:2.41rem; float:left;">
                        <img src="image/logo.png">
                    </div>
                    <table style="float: right; margin-left: 1%;" width="75%">
                        <tr style="font-size: 0.4rem;">
                            <td>我需要一台摄像机<input type="hidden" value="隐藏域(传递id)"></td>
                            <td align="right" style="color: #ed4c59;">摄像机</td>
                        </tr>
                        <tr>
                            <td><span style="color: #ED4C59">价格私聊</span></td>
                        </tr>
                        <tr>
                            <td>活动时间：<span>2016-11-11</span></td>
                        </tr>
                        <tr>
                            <td>活动地点：<span>河南省郑州市高新区</span></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <p style="margin:1% 0; width: 100%; height: 1.5rem; overflow: hidden;">
                    其他要求：<span>需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水需防水...</span>
                </p>

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
                     onclick="document.getElementById('light_matter').style.display = 'none';document.getElementById('fade').style.display = 'none';document.body.style.overflow = 'auto';">
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
    $(function() {
        $('.boxer').boxer();
    });
</script>
</body>
</html>