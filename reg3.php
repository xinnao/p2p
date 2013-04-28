

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="人人贷 - 最大、最安全的网络借款、理财平台。提供便捷、安全、低门槛的个人信用贷款和个人理财服务。" />
<meta name="keywords" content="网络借贷，网络贷款，借贷 网络平台，民间借贷，小额贷款，无抵押贷款，信用贷款，投资理财，人人贷"/>
<link href="/theme/default/css/login.css?v=20120529" rel="stylesheet" type="text/css" media="screen"/>
<script type="text/javascript">
    if(!/msie 6/i.test(navigator.userAgent))document.write('\<script type=\"text/javascript\" src=\"/theme/default/js/jquery.alert.min.js\"\>\<\/script\>');
</script>
<script src="../theme/default/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="../theme/default/js/jquery.form.js" type="text/javascript"></script>
<script src="../theme/default/js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../theme/default/js/checkPsw.js"></script>
<script type="text/javascript" src="../theme/default/js/suggestEmail.js?v=20120611"></script>
<script type="text/javascript" src="../theme/default/js/city.js"></script>
<title> 人人贷 - 最大、最安全的网络借贷平台 </title>

<div id="page" class="session_invalid_tag">
    <!--header begin-->
    ﻿<div class="clearfix" id="header">
        <div class="logo clearfix">
            <div class="l"> <a href="../"><img width="160px" height="84px" class="logo_hack" title="人人贷" alt="人人贷" src="../images/logo.png"></a> </div>
            <div class="logo_right">
                <div class="logo_right_link">
                    <ul>
                        <li> aawwwe </li>
                        <li>  <a href="/j_spring_security_logout">登出</a> </li>
                        <li style="background:none"> <a href="../help.html">帮助</a> </li>
                    </ul>
                </div>
                <div class="logo_right_phone">客服电话：400-027-8080</div>
            </div>
        </div>
    </div>
    <!--header end-->
    <div id="regsteps">
    	<h3 style="margin-top: 30px; margin-bottom: 10px; color: rgb(253, 166, 78); font-size: 28px;">
	    	
	    	注册-成为理财人
    	</h3>
		<div class="topline" style="position:static;margin-bottom:20px;"></div>
        <div class="toBeFinancier ">
    	<h3 style="color:#FDA64E; font-size:22px; margin:30px 0; line-height:1.5; text-align:center;">人人贷是安全可靠的创新金融信息服务平台<br />为保障您的账户和资金交易安全，请完善如下信息：</h3>
        
        <form id="toBeFinancierForm" action="bindUserRole.action" method="post">
        	<div id="toBeFinancierBox">
	        	
	            <div class="reginput">
	                <label>真实姓名：</label>
	                <input type="text" class="input180 intxt" name="name" id="name">
	            </div>
	            <div class="reginput">
	                <label>身份证号：</label>
	                <input type="text" class="input180 intxt" name="idNo" id="idNo">
	            </div>
	            
	            
	            <div class="reginput" style="position:relative;height:55px;">
	                <label>提现密码：</label>
	                <input type="text"  style="position:absolute;top:0px;left:64px;" class="input180 intxt" value="提现时需验证，保障资金安全" onfocus="this.style.display='none';document.getElementById('cashDrawPassword').focus()" >
	                <input type="password" class="input180 intxt" name="cashDrawPassword" id="cashDrawPassword" onpaste="return false">
	            	<p style="color:#FDA64E;padding-left:69px;">提现密码不能与登录密码相同</p>
	            </div>
	            <div class="reginput">
	                <label>重复密码：</label>
	                <input type="password" class="input180 intxt" name="confirm_cashDrawPassword" id="confirm_cashDrawPassword" onpaste="return false" placehold="再输入一遍密码，务必牢记">
	            </div>
	            
	            
	           		<div class="reginput">
		                <label>手机号码：</label>
		                <input type="text" class="input180 intxt" name="mobile" id="mobile" onpaste="return false" onblur="checkctype(this)">
		                <label for="mobile" generated="true" class="error"></label>
		            </div>
		            <div class="reginput">
		                <label>校验码：<span style="margin-left:12px"></span></label>
		                <input type="text" class="input180 intxt" name="code" id="code" style="width:70px">
		                <input style="text-indent:0" type="button" id="reveiveActiveCode" value="发送手机验证码" onclick="sendPhoneCode()">
		                <label for="code" generated="true" class="error"></label>
		            </div>
	            
	            
	            <div class="reginput">
	            	<span style="color:red"></span> 
	            </div>
	            <button class="regloginbt" style="margin-left:65px;" type="submit">确定</button><a style="margin-left:20px" href="/guide.jsp">谢谢，我先逛逛>></a>
	        </div>
        </form>
        <p style="text-align:center; margin-top:100px;" class="red">如有任何问题，请拨打客服电话：400-027-8080</p>
    	</div>
    </div>
    <img src="../images/tips.jpg" id="imgtips" style="display:none;position:absolute;top:228px; left:328px;z-index:999;" onmouseover="tips(this,'邮箱是后续通知及接受账单的重要渠道，请输入您常用的邮箱地址，并确保输入正确。',213,344)" />
    <!--footer begin-->
    <div class="footer">
        <p><span style="color:#e39538">联系我们：service@renrendai.com</span><span style="color:#7D7E74; margin-left:20px;">人人贷商务顾问(北京)有限公司 </span><a style="margin-left:20px" href="http://www.renrendai.com/guarantee/icp.html">京ICP证 100953号</a></p>
        <p style="color:#7D7E74;">© 2010 人人贷 All rights reserved</p>
    </div>
</div>
<script type="text/javascript">
    function codeBindEvent(id,fn){
    	$("#"+id).bind("keyup",fn);
    }
    function checkctype(obj){
    	var val=$.trim(obj.value);
    	if(!/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/.test(val)){
    		return;
    	}
    	$.get("/checkEmail.action?username="+val,function(data){
    		var error2=$(obj).parent().find(".error");
    		if(data=='false'){
				error2.html("手机号码已存在!"); 
				error2.show();
			}else{
				error2.hide();
				codeBindEvent("code",function(){
	    			var v=this.value;
	    			var error=$(this).parent().find(".error");
	    			if(v.length==4){
	    				$.get("/lend/checkCode.action?code="+v+"&mobile="+val,function(data){
	    					if(data.result=="false"){
	    						error.html("验证码出错，请重新输入!");  						
	    					}else{
	    						error.empty();
	    					}
	    				});
	    			}
	    		});		
			}
		});
    }	
   
    $(function(){
    	jQuery.validator.addMethod("isName",function(value,element){
            return this.optional(element)||/^[\u4E00-\u9FA5]+$/.test($.trim(value));
        },"姓名只能为中文不能包括英文字符");
    	
        jQuery.validator.addMethod("isEmail",function(value,element){
            var myreg = /^\w+(@)\w+(\.\w+)(\.\w+|)$/;
            return this.optional(element)||myreg.test($.trim(value));
        },"请输入正确的邮箱地址");
        
        jQuery.validator.addMethod("isBlank",function(value,element){
            return this.optional(element)||!/\s/.test($.trim(value));
        },"不能包括空格");
        
        jQuery.validator.addMethod("emailFilter",function(value,element){
           	value =$.trim(value);
            return this.optional(element) || !/^.*(@youcredit.cn)$/.test(value);
        },"该域名的邮箱已被保护") ;
        
        jQuery.validator.addMethod("isIdCardNo", function(value, element){
	        value = $.trim(value);
	        return this.optional(element) || checkCard(value);
	    }, "请正确输入您的身份证号码");
        
        jQuery.validator.addMethod("isMobile", function(value, element){
            var length = value.length;
            var mobile = /^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
            return this.optional(element) || (length == 11&&mobile.test(value));
        }, "请正确填写您的手机号码")
        
        //用户注册页字段验证
        $("#toBeFinancierForm").validate({
            rules: {
            	name: {
            		required: true,
                    minlength: 2,
                    maxlength: 32,
                    isName:true
                },
                idNo: {
               	    required: true,
                    isIdCardNo: true
                },
                username: {
                    required: false,
                    maxlength: 32,
                    isEmail: true,
                    emailFilter:true,
                    remote: "../checkEmail.action"
                },
                cashDrawPassword: {
                    required: true,
                    isBlank:true,
                    minlength: 6,
                    maxlength: 12
                },
                confirm_cashDrawPassword: {
                	required: true,
                    equalTo: "#cashDrawPassword"
                },
                mobile: {
                    required:  true,
                    isMobile: true,
                    minlength: 11,
                    maxlength: 11
                }
            },
            messages: {
            	name: {
            		required: "请输入姓名",
                    minlength: "姓名长度不正确",
                    maxlength: "姓名长度不正确"
                },
                idNo: {
                    required: "请输入身份证号码"
                },
                username: {
                    required: "请输入有效的邮箱地址",
                    maxlength: "邮箱地址过长",
                    remote: "邮箱地址已存在，请选择其它邮箱"
                },
                cashDrawPassword: {
                    required: "请输入密码",
                    minlength: "密码长度在6-12个字符之间",
                    maxlength: "密码长度在6-12个字符之间"
                },
                confirm_cashDrawPassword: {
                	required: "请确认密码",
                    equalTo: "您输入的密码不一致"
                },
                mobile: {
                    required: "请输入手机号码",
                    minlength: "请输入正确的手机",
                    maxlength: "请输入正确的手机"
                }
            }
        });
    });
    
    function sendPhoneCode() {
    	var phone = $("#mobile").attr("value");
    	var mobile = /^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
    	if (!mobile.test(phone)) {
    		alert("请正确填写您的手机号码");
    		return;
    	}
    	$.ajax({
    		url : "../sendPhoneCode.action?phone=" + phone,
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
    		$("#timego").html("");
    		$("#reveiveActiveCode").removeAttr('disabled');
    		$("#reveiveActiveCode")
    				.css("background",
    						"url(/theme/default/images/smail.jpg) no-repeat scroll 0 0 transparent");
    		$("#reveiveActiveCode").attr("value", "获取手机验证码");
    		clearInterval(timer);
    	} else {
    		i--;
    		$("#reveiveActiveCode").attr("value", "获取手机验证码 " + i);
    		$("#timego").html("&nbsp;剩余:" + i + "秒");
    	}
    }
    
    function checkCard(cId) {
    	var pattern;
    	if (cId.length == 15) {
    		pattern = /^\d{15}$/;// 正则表达式,15位且全是数字
    		if (pattern.exec(cId) == null) {
    			return false;
    		}
    		if (!isdate("19" + cId.substring(6, 8), cId.substring(8, 10), cId
    				.substring(10, 12))) {
    			return false;
    		}
    	} else if (cId.length == 18) {
    		pattern = /^\d{17}(\d|x|X)$/;// 正则表达式,18位且前17位全是数字，最后一位只能数字,x,X
    		if (pattern.exec(cId) == null) {
    			return false;
    		}
    		if (!isdate(cId.substring(6, 10), cId.substring(10, 12), cId.substring(
    				12, 14))) {
    			return false;
    		}
    		var strJiaoYan = [ "1", "0", "X", "9", "8", "7", "6", "5", "4", "3",
    				"2" ];
    		var intQuan = [ 7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2, 1 ];
    		var intTemp = 0;
    		for (i = 0; i < cId.length - 1; i++)
    			intTemp += cId.substring(i, i + 1) * intQuan[i];
    		intTemp %= 11;
    		if (cId.substring(cId.length - 1, cId.length).toUpperCase() != strJiaoYan[intTemp]) {
    			return false;
    		}
    	} else {
    		return false;
    	}
    	return true;
    }
    
 	// 检查年月日是否是合法日期
    function isdate(intYear, intMonth, intDay) {
    	if (isNaN(intYear) || isNaN(intMonth) || isNaN(intDay))
    		return false;
    	if (intMonth > 12 || intMonth < 1)
    		return false;
    	if (intDay < 1 || intDay > 31)
    		return false;
    	if ((intMonth == 4 || intMonth == 6 || intMonth == 9 || intMonth == 11)
    			&& (intDay > 30))
    		return false;
    	if (intMonth == 2) {
    		if (intDay > 29)
    			return false;
    		if ((((intYear % 100 == 0) && (intYear % 400 != 0)) || (intYear % 4 != 0))
    				&& (intDay > 28))
    			return false;
    	}
    	return true;
    }
</script>



<script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F71ce3105a964d0c3748e04584e5af0b9' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-17841954-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
