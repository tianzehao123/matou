<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注册</title>
<link type="text/css" rel="stylesheet" href="/xsmt/Public/Home/register/css/register.css">
<body onload="document.forms[0].reset()">
<form method="POST" action=""  enctype="multipart/form-data">
  <div class="main_wrap">
    <div class="main">
      <div class="main_left">
        <div class="top current"><a href="javascript:;">用<br>
          户<br>
          注<br>
          册</a></div>
        <div class="bottom"><a href="javascript:;">商<br>
          家<br>
          注<br>
          册</a></div>
      </div>
      <div class="main_right">
        <h3><img src="/xsmt/Public/Home/register/img/logo1.png" width="163" height="167"></h3>
        <div class="table">
          <input type="text" value="" placeholder="手机号" class="tel" id="tel" maxlength="11" onkeyup="this.value = this.value.replace(/\D/g,'')"><span></span>
          <div class="authCode">
            <input type="text" name="yzm" class="yzm" maxlength="4" onkeyup="this.value = this.value.replace(/\D/g,'')" value="" placeholder="验证码">
            <input type='button' value='获取验证码' id='yz' />
           
            <span></span>
          </div>
           <input type="password" class="password" id="password" maxlength="20" onpaste="return false" ondragenter="return false" style="ime-mode:disabled"><span></span>
           <div class="register">

           <input type="submit" value="注册" id="zc">
           <a href="javascript:;">登录>></a>
           </div>
        </div>
      </div>
    </div>
  </div>
</form>
<script type="text/javascript" src="/xsmt/Public/Home/register/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$("#tel").blur(function(){
  var user=$("#tel").val();
  var pipei =/^1[3|4|5|8][0-9]\d{4,8}/;
  var a = user.match(pipei);
  if(user=='')
  {
    $("#tel").next("span").html('手机号不能为空！');
    return false;
  }else if(!a){
     $("#tel").next("span").html('手机号格式不正确！');
    return false;
  }else{
    $("#tel").next("span").html('');
  }
})
$('#password').blur(function(){
    var pwd = $(this).val();
    if (pwd==''){
      $("#password").next("span").html('密码不能为空！');
      return false;
    }
    else if(!pwd.match( /^.{6,12}$/)) {
      $("#password").next("span").html('密码不够六位');
      return false;
    }else{
       $("#password").next("span").html('');
    }
  })
 $('#yz').click(function(){
            var tel = $("#tel").val();
            if(tel == ''){
                $("#tel").next("span").html('手机号不能为空！');
                return false;
            }
            if(!tel.match(/^1[3|4|5|8][0-9]\d{4,8}/))
            {
                $("#tel").next("span").html('手机号格式不正确！');
                 return false;
            }
              //请求方法
             $.post("code",{tel:tel},function(msg){ 
             //$("#yzm").html(tel);
             });
  $('zc').click(function(){
      var yzm=$("#yzm").val();
      if (yzm=="") {
        alert("验证码不能为空");
        return false;
      }else if(yzm!=""){
        alert("验证码错误");
        return false;
      }
      $.post("code",{tel:tel},function(msg){ 
             //$("#yzm").html(tel);
             });
  })
})

</script>
</head>

<div class="footer">
  <p>版权所有  ©  喜事码头2016     icp备案：1231241243231 </p>
</div>
</body>

</html>