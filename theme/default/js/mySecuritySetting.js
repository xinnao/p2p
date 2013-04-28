/*我的人人贷 - 安全设置 - 修改绑定手机*/
function bindMobile(action, markedMobile){
	if(action == 'bind' && !window.confirm("启用手机号" + markedMobile + "作为登录人人贷的帐号？")){
		return;
	}else if(action == 'unbind' && !window.confirm("停用手机号" + markedMobile + "作为登录人人贷的帐号？")){
		return;
	}
	$.ajax({
		url:"/my/bindMobile_mobileLogin.action?action=" + action,
		//async:false,
		cache:false,
		type:"GET",
		error:function(){
			alert("服务器出现错误，请稍后再试！");
		},
		success:function(data){
		    alert(data);
		    location.href="/my/userInfoPage.action?type=user_info_security";
		}
	})
}

function goToPage(type){
	var url;
	if(type == 'modifyMobile'){
		url = "/my/bindMobile_goToModifyMobile.action";
	}else if(type == 'modifyCashPassword'){
		url = "/my/cashPwd_goToModifyCashPassword.action";
	}else if(type == 'findCashPassword'){
		url = "/my/cashPwd_goToFindCashPassword.action";
	}else if(type == 'resetPassword'){
		url = '/my/resetPassword!resetPasswordInput.action';
	}
    $.ajax({
    		url:url,
            type:"POST",
            dataType: "html",
            error: function(){
            },
            success: function(data){
            	if (hrefHack(data)){
                    return;
                }else{
                    $(".right").html(data)
                }
            },
            beforeSend: function(){
            }
    });
}

function checkPhoneNum(o) {
	var mobile = /^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
	if(!mobile.test(o.value)){
		$("#errorForPhone").html("手机号码输入错误，请重新输入。");
		return false;
	}else{
		$("#errorForPhone").empty();
		return true;
	}
}

function checkCashPwd(o) {
	var value = o.value;
	if(value.replace(/\s/g,'')==''|| value==null){
		$("#errorForcashPassword").html("未输入提现密码。");
		return false;
	}else{
		$("#errorForcashPassword").empty();
		return true;
	}
}

function checkPhoneCode(o) {
	var code = /^\d{4}$/;
	if(!code.test(o.value)){
		$("#errorForCode").html("请正确输入手机验证码。");
		return false;
	}else{
		$("#errorForCode").empty();
		return true;
	}
}

function checkNewCashPwd(o) {
	var reg = /^\S{6,12}$/;
	if(!reg.test(o.value)){
		$("#errorForNewPwd").html("密码须为6-12位英文字母、数字和符号(不包括空格)");
		return false;
	}else{
		$("#errorForNewPwd").empty();
		return true;
	}
}

function checkNewCashPwd2(o) {
	var newPwd = $("#newCashPwd").val();
	if(newPwd != o.value){
		$("#errorForNewPwd2").html("您输入的提现密码不一致！");
		return false;
	}else{
		$("#errorForNewPwd2").empty();
		return true;
	}
}

function idNocheck(o){
	var str=o.value;
	if(str.replace(/\s/g,'')==''|| str==null || str=='请输入本账号已认证的身份证号码'){
		$("#errorForIdNo").html("请正确输入您的身份证号码。");
		return false;
	}
//	return true;
	if(/\d{6}(\d{2})([01]\d)([0123]\d)\d{3}/.test(str)||/\d{6}([12]\d{3})([01]\d)([0123]\d)\d{3}(\d|\w)/.test(str)){
		$("#errorForIdNo").empty();
		return true;
	}else{
		$("#errorForIdNo").html("请正确输入您的身份证号码。");
		return false;
	}
}

/**
 * 设置提现密码
 */
function openCashPassword(){
	
	openInputCashPassword();
	
	 jQuery.validator.addMethod("isPassWord",function(value,element){
        	value =$.trim(value);
         return this.optional(element) || /^\S{6,12}$/.test(value);
     },"密码须为6-12位英文字母、数字和符号(不包括空格)") ;
	 
	$("#setTxPswForm").validate({
		submitHandler: function(){
			ajaxSubCashPassword("setTxPswForm",function(data){
				var result = data.result;
    			var isSuccess = data.flag;
    			if(isSuccess){
    				isCashPassed = 'true';
    				//同时需要关闭弹出层，给出提示
    				$("#addCashPasswordTable").html("<div style='color:red;height:80px'>"+result+"2s之后关闭</div>");
    				setTimeout(closeMsg, 2000);
    				//需要修改数据
    				var status = "已设置";
    				$("#cashPasswordStatus").html(status);
    				var oper = "<a href=\"javascript:goToPage('modifyCashPassword')\">修改</a> | <a href=\"javascript:goToPage('findCashPassword')\">找回</a>";
    				$("#cashPasswordOper").html(oper);
    			}  else {
    				$("#resultMsg").html("<div style='color:red'>"+result+"</div>");
    				//setTimeout(closeMsg, 2000); 
				}
    			
			});
        },
        rules: {
        	cashPasswordSet: {
                required: true,
                isPassWord:true,
                minlength: 6,
                maxlength: 12
            },
            cashPasswordSetAgain: {
                required: true,
                minlength: 6,
                equalTo: "#cashPasswordSet"
            }
        },
        messages: {
        	cashPasswordSet: {
                required: "请输入密码",
                minlength: "密码须为6-12位英文字母、数字和符号(不包括空格)",
                maxlength: "密码须为6-12位英文字母、数字和符号(不包括空格)"
            },
            cashPasswordSetAgain: {
                required: "请输入密码",
                minlength: "密码须为6-12位英文字母、数字和符号(不包括空格)",
                equalTo: "您输入的密码不一致"
            }
        }
    });
}

function goToModMobileByPhone(){	
    $.ajax({
    		url:"/my/bindMobile_goToModMobileByPhone01.action",
            type:"POST",
            dataType: "html",
            error: function(){
            },
            success: function(data){
            	if (hrefHack(data)){
                    return;
                }else{
                    $(".right").html(data)
                }
            },
            beforeSend: function(){
            }
    });
}
function goToModMobileByCard(){	
    $.ajax({
    		url:"/my/bindMobile_goToModMobileByIdNo01.action",
            type:"POST",
            dataType: "html",
            error: function(){
            },
            success: function(data){
            	if (hrefHack(data)){
                    return;
                }else{
                    $(".right").html(data)
                }
            },
            beforeSend: function(){
            }
    });
}


