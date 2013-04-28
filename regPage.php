<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="/theme/default/css/login.css?v=20130312" rel="stylesheet" type="text/css" media="screen"/>
<script src="../theme/default/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
    if(!/msie 6/i.test(navigator.userAgent))document.write('\<script type=\"text/javascript\" src=\"/theme/default/js/jquery.alert.min.js\"\>\<\/script\>');
</script>
<script src="../theme/default/js/jquery.form.js" type="text/javascript"></script>
<script src="../theme/default/js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../theme/default/js/checkPsw.js"></script>
<script type="text/javascript" src="../theme/default/js/suggestEmail.js?v=20120611"></script>
<title> E贷通 - 最大、最安全的网络借贷平台 </title>
</head>
<body>
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
    <div id="regsteps">
		<div class="topline"></div>
        <form method="post" action="rrdRegist.php?action=save" id="reg">
		<div id="reg_step1" class="regcon">
        	<h3>请输入账号和密码，并牢记</h3>
            <div class="reginput" style="position:relative">
    			<label>账号：<span style="margin-left:24px"></span></label>
               	<input style="color:#a9a9a9" onfocus="if(this.value=='输入常用的手机号 / 邮箱')this.value='';this.style.color='#000';this.style.fontSize='14px'" onblur="checkctype(this);if(this.value==''){this.value='输入常用的手机号 / 邮箱';this.style.color='#a9a9a9';this.style.fontSize='12px'}" type="text" class="easyui-validatebox input180 intxt" name="username" id="username" value="输入常用的手机号 / 邮箱" autocomplete="off" disableautocomplete >
               	<ul id="autoEmail" style="position:absolute; top:28px; left:64px;*left:67px; width:174px;border:1px solid #ccc; background:#fff; padding:0 5px;overflow:hidden; display:none"></ul>
          	</div>
            <div class="reginput">
	        	<label>密码：<span style="margin-left:24px"></span></label>
	            <input type="password" class="input180 intxt" name="password" id="password" placeholder="请输入密码" onkeyup="setPasswordLevel(this, document.getElementById('passwordLevel'));">
	            <label class="error" style="display:none;margin-left:63px;*margin-top:-5px;"> 密码强度：<input name="Input" disabled="disabled" class="rank r0" id="passwordLevel"></label>
	        </div>
			<div class="reginput">
	        	<label>重复密码：</label>
	            <input type="password" class="input180 intxt" name="confirm_password" placeholder="再输入一遍密码，务必牢记" id="confirm_password" onpaste="return false">
	        </div>
	        <div class="reginput" id="code_tel" style="display:none;">
	        	<label>校验：<span style="margin-left:24px"></span></label>
	            <input type="text" class="input180 intxt" name="mobileCode" id="mobileCode" style="width:116px;">
	            <input type="button" id="reveiveActiveCode" onclick="sendPhoneCode()" value="获取短信校验码">
	            <label class="error">短信校验码10分钟内有效</label>
	        </div>
            <div class="reginput" id="code_email">
	        	<label>图证：<span style="margin-left:24px"></span></label>
	            <input type="text" class="input180 intxt" name="code" id="code" style="width:116px;"> <a href="#" onclick="javascript:loadimage();"><img id="randImage" border="0" align="absmiddle" width="60" height="20" src="core/checkcode.php" name="randImage" alt="验证码"></a>
	     		<label class="error"></label>
	        </div>
	        <input type="hidden" name="inviteCode" value="" id="inviteCode"/>
	        <input type="hidden" name="utmSource" value="null" id="utmSource"/>
            <input class="regloginbt" style="margin-left:65px;" type="submit" value="下一步">
       		<div class="logininput" style="line-height:16px; padding-left:66px; height:26px;"> 
       			<input id="agree" type="checkbox" checked="checked" name="agree" style="vertical-align:middle">我同意
            	<a href="javascript:;" onclick="openServiceItems(0)">使用条款</a>
            	和<a href="javascript:;" onclick="openServiceItems(1)">&nbsp;隐私条款</a>
        	</div>
           	<p style="padding-left:66px;"> 已有E贷通账号？<a href="loginPage.php?">立即登录</a></p><span id="passwordLevel_msg"></span>
		</div>
   		</form>
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
    </div>
    <img src="../images/tips.jpg" id="imgtips" style="display:none;position:absolute;top:228px; left:328px;z-index:999;" onmouseover="tips(this,'邮箱是后续通知及接受账单的重要渠道，请输入您常用的邮箱地址，并确保输入正确。',213,344)" />
    <!--footer begin-->
    <div class="footer">
        <p></p>
        <p style="color:#7D7E74;"></p>
    </div>
</div>
<!--    <script type="text/javascript">
    function checkctype(obj){
    	var v=obj.value;
    	if(v=="") return;
    	if(v.search(/\@/)==-1&&/^\d{11}$/.test(v)){
    		$("#code_email").hide();
    		$("#code_tel").show();
    		codeBindEvent("mobileCode",function(){
    			var v=this.value;
    			var error=$(this).parent().find(".error");
    			if(v.length==4){
    				$.get("/lend/checkCode.php?code="+v+"&mobile="+$("#username").val(),function(data){
    					if(data.result=="false"){
    						error.php("验证码出错，请重新输入!");  						
    					}else{
    						error.empty();
    					}
    				});
    			}
    		});
    		codeUnBindEvent("code");
    	}else{
    		$("#code_email").show();
    		$("#code_tel").hide();
    		codeBindEvent("code",function(){
    			var v=this.value;
    			var error=$(this).parent().find(".error");
    			if(v.length==4){
    				$.get("/lend/checkCode.php?code="+v,function(data){
    					if(data.result=="false"){
    						error.php("验证码出错，请重新输入!");  						
    					}else{
    						error.empty();
    					}
    					
    				})
    			}
    			
    		})
    		codeUnBindEvent("mobileCode");
    	}
    }
    
    function codeBindEvent(id,fn){
    	$("#"+id).bind("keyup",fn);
    }
    function codeUnBindEvent(id,fn){
    	$("#"+id).unbind("keyup");
    }
    
    $(function(){
    	var hrefLength = location.href.length;
    	var index = location.href.indexOf("id");
    	
    	if(index!=-1&&index+3<hrefLength){
    		$("#inviteCode").val(location.href.substring(index+3, hrefLength));
    	}
        jQuery.validator.addMethod("emailFilter",function(value,element){
           	value =$.trim(value);
            return this.optional(element) || !/^.*(@youcredit.cn)$/.test(value);
        },"该域名的邮箱已被保护") ;
        
        jQuery.validator.addMethod("isPassWord",function(value,element){
           	value =$.trim(value);
            return this.optional(element) || /^[\@A-Za-z0-9\!#$%\^\&\*\.\~]{6,12}$/.test(value);
        },"密码不能有空格,长度在6-12个字符之间") ;
        
        
        jQuery.validator.addMethod("isUsername",function(value,element){
            var myreg = /^\w+(@)\w+(\.\w+)(\.\w+|)$/;
    		var mobile = /^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
            return this.optional(element)||myreg.test($.trim(value))||mobile.test($.trim(value));
        },"请输入正确的邮箱地址或手机号码");
        
        //用户注册页字段验证
        $("#reg").validate({
        	submitHandler: function(form) {
        		form.submit();
        	},
            rules: {
            	username: {
                    required: true,
                    maxlength: 32,
                    isUsername:true,
                    remote: "../checkEmail.php?"
                },
                password: {
                    required: true,
                    isPassWord:true,
                    minlength: 6,
                    maxlength: 12
                },
                confirm_password: {
                    required: true,
                    minlength: 6,
                    equalTo: "#password"
                },
                agree: {
                	required:true
                }
            },
            messages: {
            	username: {
                    required: "请输入邮箱地址或手机号码",
                    maxlength: "帐号长度不应超过32个字符",
                    remote: "该账号已经存在"
                },
                password: {
                    required: "请输入密码",
                    minlength: "密码长度在6-12个字符之间",
                    maxlength: "密码长度在6-12个字符之间"
                },
                confirm_password: {
                    required: "请输入密码",
                    minlength: "密码长度在6-12个字符之间",
                    equalTo: "您输入的密码不一致"
                },
                agree: "请接受我们的条款"
            }
        });
    });
    function loadimage(){
        document.getElementById("randImage").src = "core/checkcode.php?"+Math.random();
    }
    function openServiceItems(type){
        if (type == 0) {
            url = "service.php";
        }
        else {
            url = "privacy.php";
        }
        window.open(url, 'regconfirm', 'height=600,width=800,toolbar=no,menubar=no,scrollbars=no,resizable=false,location=no,status=no');
        return true;
    }
    
    function sendPhoneCode() {
    	var phone = $("#username").attr("value");
    	var mobile = /^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
    	if (!mobile.test(phone)) {
    		alert("请正确填写您的手机号码");
    		return;
    	}
    	$.ajax({
    		url : "../sendPhoneCode.php?phone=" + phone,
    		type : "POST",
    		dataType : "html",
    		error : function() {
    			$("#reveiveActiveCode").removeAttr('disabled');
    			$("#reveiveActiveCode")
    					.css("background",
    							"url(/theme/default/images/smail.jpg) no-repeat scroll 0 0 transparent");
    		},
    		success : function(html) {
    			var obj = eval("o=" + html);
    			alert(obj.result);
    		},
    		beforeSend : function() {
    			$("#reveiveActiveCode").attr('disabled', 'disabled');
    			$("#reveiveActiveCode")
    					.css("background",
    							"url(/theme/default/images/smail2.jpg) no-repeat scroll 0 0 transparent");
    			i = 30;
    			timer = setInterval("enablePhoneSend()", 1000);
    		}
    	});
    }
    function enablePhoneSend() {
    	if (i <= 0) {
    		$("#timego").php("");
    		$("#reveiveActiveCode").removeAttr('disabled');
    		$("#reveiveActiveCode")
    				.css("background",
    						"url(/theme/default/images/smail.jpg) no-repeat scroll 0 0 transparent");
    		$("#reveiveActiveCode").attr("value", "获取手机验证码");
    		clearInterval(timer);
    	} else {
    		i--;
    		$("#reveiveActiveCode").attr("value", "获取手机验证码 " + i);
    		$("#timego").php("&nbsp;剩余:" + i + "秒");
    	}
    }
    suggestEmail("username");
	</script> -->   </body>
</html>
