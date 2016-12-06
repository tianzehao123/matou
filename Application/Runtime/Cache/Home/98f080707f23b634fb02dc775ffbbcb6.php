<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <title>喜事码头</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/wx/Public/Home/css/notice.css">
    <link rel="stylesheet" href="/wx/Public/Home/css/mobiscroll.core-2.5.2.css" type="text/css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
    <script src="/wx/Public/Home/js/jquery-2.1.4.min.js"></script>
    <script src="/wx/Public/Home/layer/layer.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="/wx/Public/Home/js/mobiscroll.core-2.5.2.js"></script>
    <script src="/wx/Public/Home/js/mobiscroll.datetime-2.5.1-zh.js"></script>
    <script src="/wx/Public/Home/js/mobiscroll.datetime-2.5.1.js"></script>
</head>
<body>
    <form id="form1" action="/wx/index.php/home/notices/notice" method="post">
    <div class="home">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-xs-5">
                                    <b class="left"><i  class="left-arrow1"></i><i class="left-arrow2"></i></b>
                    </div>
                    <div class="col-xs-7">找道具</div>
                </div>
            </div>
        </header>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-3">类型</div>
                <div class="col-xs-9">
                    <input id="type" readonly="readonly" name = 'type'type="text" placeholder="请选择类型" data-toggle="modal" data-target="#myModal" />
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
                    <input id="title" type="text" name="title" placeholder="如某某需要舞台" maxlength="9"/>
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
                    <input id="appDate" name="riqi" readonly="readonly" type="text" placeholder="2016-11-09"/>
                    <b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
                </div>
            </div>
        </div>
        <div class="main"></div>
    </div>
    <!-- <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-3">活动地址</div>
                <div class="col-xs-9">
                    <input id="city" readonly="readonly" name = "addre"type="text" placeholder="河南省 郑州市 金水区"/>
                    <b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
                </div>
            </div>
        </div>
        <div class="main"></div>
    </div> -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-3">活动地址</div>
                <div class="col-xs-9">
                    <input id="city" readonly="readonly" type="text" placeholder="河南省 郑州市 金水区"/>
                    <script>
                        $('#city').on('click', function() {
                            //页面层
                            layer.open({
                                title: '  ',
                                area: ['90%', '550px'],
                                type: 2,
                                content: '/wx/index.php/home/maplist/index' //这里content是一个URL，如果你不想让iframe出现滚动条，你还可以content: ['http://sentsin.com', 'no']
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
                    <input id="price" maxlength="5" onKeyUp="this.value=this.value.replace(/[^\d.]/g,'') " type="text" name="money" placeholder="请输入预算">
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
                    <input id="wechat" name = "weixin" maxlength="11" type="text" placeholder="请输入微信号"/>
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
                    <input id="QQ" type="text" maxlength="11" onKeyUp="this.value=this.value.replace(/[^\d]/g,'') " name="qq"placeholder="请输入QQ"/>
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
                    <input id="email" name="email" maxlength="11" type="text" placeholder="请输入Email" required />
                </div>
            </div>
        </div>
        <div class="main"></div>
    </div>
    <div class="content background"></div>
    <footer>
        <div class="footer-thing">
            <div class="footer-top-thing">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-3">其他要求</div>
                        <div class="col-xs-9">
                            <textarea id="detail" name="content" placeholder="输入其他详细信息"></textarea>
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
                <ul>
                    <li data-value="购买" class="selected">购买</li>
                    <li data-value="租赁">租赁</li>
                    <li data-value="婚车/车队">婚车/车队</li>
                </ul>
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
            if($('#type').val() == '' ){
                 $('head').append('<style>#type::-webkit-input-placeholder { color:#ed4c59;}</style>');
                  $('#form1').attr('action','javascript:;');
            }else if($('#title').val() == '' ){
                $('head').append('<style>#title::-webkit-input-placeholder { color:#ed4c59;}</style>');
                 $('#form1').attr('action','javascript:;');
            }else if($('#appDate').val() == '' ){
                $('head').append('<style>#appDate::-webkit-input-placeholder { color:#ed4c59;}</style>');
                 $('#form1').attr('action','javascript:;');
             }else if($('#city').val() == '' ){
                $('head').append('<style>#city::-webkit-input-placeholder { color:#ed4c59;}</style>');
                 $('#form1').attr('action','javascript:;');
             }else if($('#price').val() == '' ){
                 $('head').append('<style>#price::-webkit-input-placeholder { color:#ed4c59;}</style>');
                 $('#form1').attr('action','javascript:;');
             }else if($('#tel').val() == '' ){
                $('head').append('<style>#tel::-webkit-input-placeholder { color:#ed4c59;}</style>');
                 $('#form1').attr('action','javascript:;');
            }else if($('#money').val() == '' ){
                $('head').append('<style>#form::-webkit-input-placeholder { color:#ed4c59;}</style>');
                $('#form1').attr('action','javascript:;');
            }else{
                $('#form1').attr('action','/wx/index.php/home/notices/notice');
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
</script>
</html>