<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="/theme/default/css/login.css?v=20120529" rel="stylesheet" type="text/css" media="screen"/>
<script src="../theme/default/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="../theme/default/js/jquery.form.js" type="text/javascript"></script>
<script src="../theme/default/js/jquery.validate.min.js" type="text/javascript"></script>
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
                        <li> www&#64;pkvs&#46;com </li>
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
		<div class="topline"></div>
		<form method="post" action="basicInfo.action" id="reg2">
	    	<div id="reg_step2" class="regcon">
	    	<h3>请补充以下信息，以便为您提供更好服务</h3>
	    	<div style="margin-left:70px;">
	        <div class="reginput">
                <label>账<span style="margin-left: 12px;">号：</span></label>
                <span id="usercount">www&#64;pkvs&#46;com</span>
            </div>
            <div class="reginput" style="height:60px;">
                <label>昵<span style="margin-left: 12px;">称：</span></label>
                <input type="text" class="input180 intxt" name="nickName" id="nickName" style="color:#a9a9a9" value="请输入昵称" onfocus="if(this.value=='请输入昵称')this.value='';this.style.color='#000';this.style.fontSize='14px'" onblur="if(this.value==''){this.value='请输入昵称';this.style.color='#a9a9a9';this.style.fontSize='12px'}" autocomplete="off" disableautocomplete>
                <div style="padding-left:51px;color:#888;">昵称是您理财/借款的重要凭证，注册后不可以更改</div>
            </div>
            <div class="reginput" style="height:60px;">
                <label> 常住地：</label>
                <select name="province" id="areaProvince_live" onchange="changeArea()" style="padding:7px 5px; width:92px;">
                </select>
                <select name="city" id="areaCity_live" style="padding:7px 5px; width:92px">
                </select>
                <label class="error" style="display:none;">请选择常住地</label>
                <div style="padding-left:51px;color:#888;">选择您当前的生活常住地，将方便我们为你们提供更好的服务</div>
            </div>
            <div class="line" style=" border-bottom:1px  dashed #ccc; width:227px; margin-bottom:15px; font-size: 0px;"></div>
            <div class="reginput">
               <label>意<span style="margin-left: 12px;">向：</span></label>
               <input style="vertical-align:middle" type="radio" name="intention" checked="checked" value="LENDER"/>我要理财
               <input style="vertical-align:middle; margin-left:10px;" type="radio" name="intention" value="BORROWER"/>我要贷款
            </div>
            <div class="reginput" style="height:30px;">
                <label>来<span style="margin-left: 12px;">源：</span></label>
                <select name="source" id="source" style="padding:7px 5px; width:190px;" onchange="changeSouce()">
                   <option value="FRIEND">朋友推荐</option>
                   <option value="SALES_STAFF">客户经理推荐</option>
                   <option value="WEB_AD">网站广告</option>
                   <option value="NEWS">新闻</option>
                   <option value="MEDIA">平面媒体</option>
                   <option value="AGENCY_RECOMMEND">机构推荐</option>
                   <option value="OTHER">其他</option>
               	</select>
                <input type="text" value="请输入销售代码" id="name_xiaoshou" onkeyup="checkIsNull()" name="salesCode" class="input180 intxt" onfocus="if(this.value=='请输入销售代码')this.value=''" onblur="if(this.value=='')this.value='请输入销售代码'" style="display:none;width:110px;*height:18px;*line-height:18px;">
                <label for="salesCode" generated="true" class="error" style=""> </label>
            </div>
	        <div class="reginput" style="height:20px;line-height:20px;">
	        	<label class="error"></label>
	        </div>
	        <input type="submit" class="regloginbt" style="margin-left:45px;"  value="下一步">
	        </div>
	    	</div>
    	</form>
      	
    <img src="../images/tips.jpg" id="imgtips" style="display:none;position:absolute;top:228px; left:328px;z-index:999;" onmouseover="tips(this,'邮箱是后续通知及接受账单的重要渠道，请输入您常用的邮箱地址，并确保输入正确。',213,344)" />
    <!--footer begin-->
   
</div>
</div>
    <script type="text/javascript">
    $(function(){
    	function getLength(str) { 
    	    var len = str.length; 
    	    var reLen = 0; 
    	    for (var i = 0; i < len; i++) {        
    	        if (str.charCodeAt(i) < 27 || str.charCodeAt(i) > 126) { 
    	            // 全角    
    	            reLen += 2; 
    	        } else { 
    	            reLen++; 
    	        } 
    	    } 
    	    return reLen;    
    	} 
        //昵称验证
        jQuery.validator.addMethod("nickName", function(value, element){
            return this.optional(element) || /^(?!_)(?!.*?_$)[a-zA-Z0-9_\u4e00-\u9fa5]+$/.test(value);
        }, "必须由中文、英文字母、数字、下划线组成");

        jQuery.validator.addMethod("yxFilter", function(value, element) {
        	value = $.trim(value);
        	return this.optional(element) || !/^(YX_|yx_|yX_|Yx_).*|(.*(_YX|_yx|_yX|_Yx)$)/.test(value);
        },"前缀请不要使用“YX_”,且后缀请不要使用“_yx”");
        
        jQuery.validator.addMethod("checkCharLength",function(value,element){
        	 return this.optional(element)||(getLength($.trim(value))<=32&&getLength($.trim(value))>=4);
        },"昵称长度请保持4-32个字符以内");
        
        //用户注册页字段验证
        $("#reg2").validate({
        	submitHandler: function(form) {
        		if(!checkItemA()){
        			return false;
        		}
        		form.submit();
        	},
            rules: {
                nickName: {
                    required: true,
                    nickName: true,
                    checkCharLength:true,
                    yxFilter: true,
                    remote:"../checkUserNickname!checkNickname.action"
                }
            },
            messages: {
                nickName: {
                    required: "请输入有效的昵称",
                    remote: "昵称已存在,请选择其他用户名"
                }
            }
        });
    });
	</script>    
	<script type="text/javascript">
	$(function() {
		var homeaddr = "";
		var liveaddr = "";
		var homecity = "";
		var homepro = "";
		var livecity = "";
		var livepro = "";
		if (homeaddr != null && homeaddr != "") {
			var homeaddrnew = homeaddr.split(":");
			homecity = homeaddrnew[1];
			homepro = homeaddrnew[0];
		}
		if (liveaddr != null && liveaddr != "") {
			var livenew = liveaddr.split(":");
			livecity = livenew[1];
			livepro = livenew[0];
		}

		PC.initProvince("areaProvince_home", homepro);
		PC.initCity("areaProvince_home", "areaCity_home", homecity);
		PC.initProvince("areaProvince_live", livepro);
		PC.initCity("areaProvince_live", "areaCity_live", livecity);
	});
	
	function checkItemA(){
  		var arrItem=["areaProvince_home","areaProvince_live"];
  		for(var i=0,len=arrItem.length;i<len;i++){
  			if(!checki(arrItem[i])) {
  				$('#'+arrItem[i]).focus();
  				return false; 
  				break;
  			}
  		}
  		
  		if(!changeSouce()){
  			return false;
  		}
  		
  		if($("#source").val()=="SALES_STAFF"&&($("#name_xiaoshou").attr("display")!="none"||!$("#name_xiaoshou").attr("display"))){
  			if($("#name_xiaoshou").val()==""||$("#name_xiaoshou").val()=="请输入销售代码"){
  				$("#name_xiaoshou").parent().find("label.error").html("请输入销售代码");
  				$("#name_xiaoshou").parent().find("label.error").show();
  				$("#name_xiaoshou").focus();
  				return false;
  			} else {
  				var v=$("#name_xiaoshou").val();
    			if(!/^[A-Za-z]{2}[A-Za-z0-9]{6}$/.test(v)){
    				$("#name_xiaoshou").parent().find("label.error").html("销售代码错误");
    				$("#name_xiaoshou").parent().find("label.error").show();
    				return false;
    			} else {
    				$("#name_xiaoshou").parent().find("label.error").empty();
    			}
  			}
  		}
  		
  		return true;
  	}
	
	function checki(o){
		if($("#"+o).val()=="请选择"){
  			$("#"+o).parent().find("label.error").show();
  			return false;
  		}else{
  			$("#"+o).parent().find("label.error").hide();
  			return true;
  		}	
    }
	
	function changeArea(){
		PC.initCity('areaProvince_live','areaCity_live','');
		checki("areaProvince_live");
	}
	
	function codeBindEvent(id,fn){
    	$("#"+id).bind("keyup",fn);
    }
    function codeUnBindEvent(id,fn){
    	$("#"+id).unbind("keyup");
    }
	
	function changeSouce(){
		var id=$("#source");
		if(id.val()!="SALES_STAFF"){
			$("#name_xiaoshou").hide();
			$("#name_xiaoshou").parent().find("label.error").hide();
			$("#name_xiaoshou").val("");
			codeUnBindEvent("name_xiaoshou");
		}else{
			$("#name_xiaoshou").show();
			codeBindEvent("name_xiaoshou",function(){
    			var v=$("#name_xiaoshou").val();
    			if(!/^[A-Za-z]{2}[A-Za-z0-9]{6}$/.test(v)){
    				$("#name_xiaoshou").parent().find("label.error").html("销售代码错误");
    				$("#name_xiaoshou").parent().find("label.error").show();
    				return false;
    			} else {
    				$("#name_xiaoshou").parent().find("label.error").empty();
    			}
    		});
		}
		
		return true;
	}
	
	function checkIsNull(){
		if($("#name_xiaoshou").val()==""||$("#name_xiaoshou").val()=="请输入销售代码"){
			$("#name_xiaoshou").parent().find("label.error").html("请输入销售代码");
		}else{
			$("#name_xiaoshou").parent().find("label.error").empty();
		}
	}
	
	if (top.location !== self.location) {
		top.location=self.location;
	}
	
</script>



