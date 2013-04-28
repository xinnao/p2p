<?php
require('loading.php');
if ("login"==$_POST["action"]){
$uname=$_POST['j_username'];
$upass=$_POST['j_password'];
$saltkey=substr(uniqid(rand()), -8);
$suyi_auth_key = md5(AUTHKEY.$saltkey);
$sj=OSTIME;
$ip='255.255.255.255';
$sql="select uid,password,salt from ".TABLEPRE."member where username='$uname'";
$result=mysql_query( $sql ) or die(mysql_error());
if( $rs=mysql_fetch_array($result))
{
	$uid=$rs['uid'];
	$pwd=$rs['password'];
	if ($pwd==md5(md5($upass).$rs['salt'])){
	$suyi_auth=authcode("$pwd\t$uid", 'ENCODE', $suyi_auth_key, $expiry = 0);
	setcookie("suyi_saltkey", $saltkey, time()+60*60*8,"/");
    setcookie("suyi_auth",$suyi_auth, time()+60*60*8,"/");
	echo '<meta http-equiv="refresh" content="0;URL=/my/userInfoPage.php">';
	exit();
	}else{
    echo "<script>alert('Error: password is error or disable');history.back();</Script>";					
	}
}else{
echo "<script>alert('Error: username is error');history.back();</Script>";
}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="/theme/default/css/login.css?v=20120529" rel="stylesheet" type="text/css" media="screen"/>
<script src="../theme/default/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="../theme/default/js/jquery.form.js" type="text/javascript"></script>
<script src="../theme/default/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="../theme/default/js/suggestEmail.js" type="text/javascript"></script>
<title> E贷通 - 最大、最安全的网络借贷平台 </title>
 <script type="text/JavaScript">
        function loadimage(){
            document.getElementById("randImage").src = "core/checkcode.php?"+Math.random();
        }

        function clearPwd(){
            $("#password").val("");
            $("#rememberme").removeAttr("checked");
        }
    </script>
    
    <div id="page" class="session_invalid_tag">
<!--header begin-->
﻿<div class="clearfix" id="header">
  <div class="logo clearfix">
    <div class="l"> <a href="../"><img width="160px" height="84px" class="logo_hack" title="E贷通" alt="E贷通" src="../images/logo.png"></a> </div>
    <div class="logo_right">
      <div class="logo_right_link">
        <ul>
          <li> 游客 </li>
          <li> <a href="../regPage.php?">免费注册</a> </li>
          <li> <a href="../loginPage.php?error=false">登录</a> </li>
          <li style="background:none"> <a href="../help.php">帮助</a> </li>
        </ul>
      </div>
      <div class="logo_right_phone">客服电话：400-027-8080</div>
    </div>
  </div>
</div>
<!--header end-->
    <div class="loginbox">
     <form id="login" action="loginPage.php" method="post" onsubmit="postLogin()" >
     <input type="hidden" value="" name="targetUrl"/>
   <div class="loginLeft"> 
	<div class="title"><p>欢迎来到E贷通，请输入您的账号和密码</p>
    	
                             
                                <div class="no_error_tip">
                                    <span>&nbsp;</span>
                                </div>
                            
                                                              
    </div>
   
    <div class="logininput" id="login_email" style="position:relative; z-index:99;"><label>邮 箱/手 机：</label>
    
                                    <input type="text" name="j_username" id="email" value="" class="input180" onkeypress="clearPwd()" placeholder="输入手机号/邮箱" autocomplete="off" disableautocomplete />
                                    
                                    <ul id="autoEmail" style="position:absolute; top:28px; left:127px;*left:131px; z-index:9999; width:174px;border:1px solid #ccc; background:#fff; padding:0 5px;overflow:hidden; display:none"></ul>
    </div>
 
    <div class="logininput" id="login_psw" style="position:relative"><label style="padding-left:33px">密 码：</label> <input type="password" name="j_password" id="password" class="input180" placeholder="输入密码"> <a style="position:absolute;right:15px;top:12px;" href="findPwdPage.php?"> 忘记密码？</a></div>
    
                            
    <div class="logininput" style="line-height:40px; padding-left:180px; height:auto;">
                                        
                                        <input type="checkbox" name="rememberme" id="rememberme" style="vertical-align:middle;">
                                        
                                        <label for="rememberme" style="vertical-align:middle;">&nbsp;记住我</label></div>
                            <input type="hidden" id="action" name="action" value="login" />
     <input type="submit" class="loginbt" value="" hidefocus="true"  style="text-indent:0px;">   
     <p> 还没有加入E贷通？<a href="/regPage.php?">立即注册</a></p>
   </div> 
   <div class="loginRight" id="denglu"></div>
   </form>
</div>
<!--footer begin-->
 <div class="regpic"><img src="../images/reginfo.jpg" /></div>
    <div class="clearfix">
    	<div class="column">
        	<h3>可凭良好的个人信用进行资金借款</h3>
            <p>覆盖全国、费用透明、三天审核、贷前0费用</p>
        </div>
        <div class="column" style=" width:318px;border-left:1px solid #90daf3;border-right:1px solid #90daf3;">
        	<h3>可通过个性化服务进行投资理财</h3>
            <p>10% 以上的稳定回报、无条件本金保障计划</p>
        </div>
        <div class="column">
        	<h3>获得收益的同时帮助他人</h3>
            <p>爱心助农、人人公益</p>
        </div>
    </div>
<div class="footer">
    	<p></p>
        <p style="color:#7D7E74;"></p>
    </div>
</body>
<script type="text/javascript">
$(function(){
	var unmail=readCookie("unmail");
	if(unmail!=""){$("#email").val(unmail)}
	
    jQuery.validator.addMethod("bidNumber", function(value, element){
        return this.optional(element) || (value >= 50);
    }, "投标金额必须大于50");
    //昵称验证
    jQuery.validator.addMethod("nickName", function(value, element){
        return this.optional(element) || /^[\u0391-\uFFE5\w]+$/.test(value);
    }, "昵称只能由中文，英文字母、数字和下划线组成");
    
    jQuery.validator.addMethod("isEmail",function(value,element){
        var myreg = /(\S)+[@]{1}(\S)+[.]{1}(\w)+/;
        var mobileReg = /\d+/;
        return this.optional(element)||myreg.test($.trim(value))||mobileReg.test($.trim(value));
    },"请输入正确的邮箱地址或手机号码");

    $("#login").validate({
        rules: {
            j_username: {
                required: true,
                isEmail: true
            //                remote:"../checkNickNameIsEnable.php?"
            },
            j_password: {
                required: true
            }
        },
        messages: {
            j_password: {
                required: "请输入密码"
            },
            j_username: {
                required: "请输入邮箱地址",
                isEmail: "请输入有效的邮箱地址"
            //                remote:"此账户已被禁用，请联系客服。"
            }
        }
    });

});
suggestEmail("email");

function postLogin(){
	if($("#login").valid()){
		var email=$("#email").val();
		//if(writeCookie("unmail",email,720)){
			//alert(email)
			
		//}
	    writeCookie("unmail",email,720)
	}
}
</script>
</html>   
