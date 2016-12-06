<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录</title>
<link type="text/css" rel="stylesheet" href="/xsmt/Public/Home/login/img/login.css">

<style>
span{
  padding-left:5px;
  font-size:12px;
}

</style>
</head>

<body>
<div class="main_wrap">

  <div class="main">
    <h1><img src="/xsmt/Public/Home/login/img/logo.png" width="163" height="163"></h1>
    <div class="name">
      <input type="text" name="user" id="user" placeholder="请输入用户名" onmouseover="this.select();"/><span id="namespan" style='color:red'>*</span>
    </div>
    <div class="password">
         <input type="password" name="password" id="password"  placeholder="请输入密码" onmouseover="this.select();"/><span id="pwdspan" style='color:red'>*</span>
      <a href=""></a> </div>
                            
    <div class="login_wrap"><button class="login" id="checkLogin"  type="submit">登 录</button><a href="#" class="more">注册账号>></a></div>
  </div>
  
</div>
<script src="/xsmt/Public/Home/login/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
  $("#user").bind({
    blur:function(){
      var Value=$("#user").val();       
      if(Value==""){
        $("#namespan").html("<span style='color:red'>*用户名不能为空</span>");
        }else{
          var a=Value.match(/^[1][358][0-9]{9}$/);
            if(!a){
            $("#namespan").html("<span style='color:green'>用户名格式不正确</span>");
            }
    
        }
    },
    focus:function(){
      $("#namespan").html(""); 
    }
  }); 
  $("#password").bind({
    blur:function(){
      var Value=$("#password").val();
      if(Value==""){
        $("#pwdspan").html("<span style='color:red'>*密码不能为空</span>");
        }else{
     
            
             }
    },
    focus:function(){
      $("#pwdspan").html(""); 
    }
  }); 
})

$('#checkLogin').click(function(){ 
        var user = $.trim($('#user').val());  
        var password = $.trim($('#password').val());  
        //如果没有填写数据,则直接返回false.不执行ajax提交操作  
        if(user == '' || password == ''){  
            alert('请输入用户民和密码');  
            return false;  
        }  
        /* 
            $.post(url,parameters,callback); 
            url : post提交的服务器端资源地址。 
            parameters: 需要传递到服务器端的参数。 参数形式为“键/值”。 
            callback : 在请求完成时被调用,这里我们通过$data来接收服务器返回的数据   
         */  
       $.post("ert",{user:user},function(msg){
              
             
            
             });
    });    
</script> 

<div class="footer">

<p>版权所有  ©  喜事码头2016     icp备案：1231241243231
</p></div>
</body>
</html>