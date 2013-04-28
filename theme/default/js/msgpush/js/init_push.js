/**
 * 推送配置
 */
var transport = "long-polling";//streaming
var subscribePath = "../push/messager";
var connectedEndpoint = null;
var intervalId = null;
/**
 * 请求监听
 */
function requestListen(user) {
	if (user == null || user == "") {
		return;
	}
	ajaxReq();
	intervalId = setInterval(ajaxReq,600000);
}

/**
 * ajax
 */
function ajaxReq(){
	 $.ajax({
	        url: "../getUnreadMailsCount.action",
	        type: 'get',
	        dataType: 'json',
	        error: function(){
	        },
	        success: function(response){
	            var sysCount = parseInt(response.sysCount);
	            var privateCount = parseInt(response.privateCount);
	            var totalCount = sysCount+privateCount;
	            $("#mailsCount").html(totalCount);
	            if(totalCount > 0){
	        		turnOnMailIcon();
	        	}
	        	getMessageByAjax();
	        }
	    });
	
}

function getMessageByAjax(){
	$.ajax({
        url: subscribePath,
        type: 'get',
        error: function(){
        },
        success: function(response){
        	if(response == 'login' && intervalId != null){
        		clearInterval(intervalId);
        	}
        	callBackForAjax(response);
        }
    });
}

function callBackForAjax(response){
	var data = response;
	if (data != null && data != "") {
		$("#msg_topmenu").hide();
    	$("#parentPushMessage").empty();
		// 构造json对象
		data = "{root:[" + data + "]}";
		var dataObj = eval("(" + data + ")");
		$.each(dataObj.root, function(index, content) {
			$.each(content, function(subIndex, subContent) {
				showMessage(subContent);
			});
		});
		if($('#parentPushMessage').html() == null || $("#parentPushMessage").html()==""){
			$("#msg_topmenu").hide();
		}else{
			showTopMenu();
		}
	}else{
		 $.ajax({
		        url: "../getUnreadMailsCount.action",
		        type: 'get',
		        dataType: 'json',
		        error: function(){
		        },
		        success: function(response){
		            var sysCount = parseInt(response.sysCount);
		            var privateCount = parseInt(response.privateCount);
		            var totalCount = sysCount+privateCount;
		            $("#mailsCount").html(totalCount);
		            if(totalCount == 0){
		            	turnOffMailIcon();
		        	}
		        }
		    });
	}
}

/**
 * 页面信息展示
 */
function showMessage(obj) {
	var id = obj.id;
	var status = obj.status;
	var command = obj.command;
	
	if (status == true || status == 'true') {
		var eleObj = getElementById(id);
		if (eleObj != null) {
			if (command == null || "" == command) {
				return;
			} else {
				if (command == 'DELETE') {
					removeEleForParent(obj);
				} else {
					updateEle(obj);
				}
			}
		} else {
			appendEle(obj);
		}
	} else {
		removeEleForParent(obj);
	}
}

function showTopMenu(){
	var tmp=[],tmpli=[];
	$("#parentPushMessage li").each(function(){
	var li=$(this);
	var name=$(this).attr("name");
	tmp.push(name);
	tmpli.push(li);
	});
	tmp.reverse();
	$('#parentPushMessage ').empty();
	for(var i=0,len=tmp.length;i<len;i++){
	   for(var j=0;j<tmpli.length;j++){
	var tmpNameLi = $(tmpli[j]).attr("name");
	       if(tmpNameLi == tmp[i]){
	            $('#parentPushMessage ').append(tmpli[j]);
	        }
	    }
	}
	var lilen=document.getElementById("parentPushMessage").getElementsByTagName("li").length;
	if(lilen == 0){
		$("#msg_topmenu").hide();
		turnOffMailIcon();
		operMailIcon();
	}else{
		$("#msg_topmenu").show();
		turnOnMailIcon();
	}
}


/**
 * 添加对象
 */
function appendEle(obj) {
	if (obj.type == 'SUPMATERIALS' || obj.type == "MATERIALSFAILED" || obj.type == 'SUPVIDEO') {
		var nameObjs = getElementsByName('BORROWFAILED');
		if (nameObjs != null && nameObjs.length != 0) {
			return;
		} else {
			var nameObjsApply = document.getElementsByName('APPLYAMOUNTFAILED');
			if (nameObjsApply != null && nameObjsApply.length != 0) {
				return;
			} else {
				appendEleForParent(obj);
			}
		}
	} else if (obj.type == 'BORROWFAILED' || obj.type == 'APPLYAMOUNTFAILED') {
		var nameObjs = getElementsByName('SUPMATERIALS');
		var nameObjsFailedMaterial = getElementsByName('MATERIALSFAILED');
		var nameObjsVideo = getElementsByName('SUPVIDEO');
		if (nameObjs != null && nameObjs.length != 0) {
			$.each(nameObjs, function(index, item) {
				$('#' + item.id).remove();
			});
		}
		if (nameObjsFailedMaterial != null
				&& nameObjsFailedMaterial.length != 0) {
			$.each(nameObjsFailedMaterial, function(index, item) {
				$('#' + item.id).remove();
			});
		}
		if (nameObjsVideo != null
				&& nameObjsVideo.length != 0) {
			$.each(nameObjsVideo, function(index, item) {
				$('#' + item.id).remove();
			});
		}
		appendEleForParent(obj);
	} else {
		appendEleForParent(obj);
	}
}

function updateEle(obj) {
	if (obj.type == 'SUPMATERIALS' || obj.type == "MATERIALSFAILED" || obj.type == 'SUPVIDEO') {
		var nameObjs = getElementsByName('BORROWFAILED');
		if (nameObjs != null && nameObjs.length != 0) {
			return;
		} else {
			var nameObjsApply = getElementsByName('APPLYAMOUNTFAILED');
			if (nameObjsApply != null && nameObjsApply.length != 0) {
				return;
			} else {
				updateEleForParent(obj);
			}
		}
	} else if (obj.type == 'BORROWFAILED' || obj.type == 'APPLYAMOUNTFAILED') {
		var nameObjs = getElementsByName('SUPMATERIALS');
		var nameObjsFailedMaterial = getElementsByName('MATERIALSFAILED');
		var nameObjsVideo = getElementsByName('SUPVIDEO');
		if (nameObjs != null && nameObjs.length != 0) {
			$.each(nameObjs, function(index, item) {
				$("#" + item.id).remove();
			});
		}
		if (nameObjsFailedMaterial != null
				&& nameObjsFailedMaterial.length != 0) {
			$.each(nameObjsFailedMaterial, function(index, item) {
				$("#id" + item).remove();
			});
		}
		if (nameObjsVideo != null
				&& nameObjsVideo.length != 0) {
			$.each(nameObjsVideo, function(index, item) {
				$('#' + item.id).remove();
			});
		}
		updateEleForParent(obj);

	} else {
		updateEleForParent(obj);
	}
}

function updateEleForParent(obj) {
	if ($("#" + obj.id) != null) {
		$('#' + obj.id).attr('id', obj.id);
		$('#' + obj.id).attr('name', obj.type);
		$('#' + obj.id).html(obj.content);
	}
}

function appendEleForParent(obj) {
	
		if (obj.type == 'ANNOUNCEMENT') {
			configAnno(obj);
		} else if (obj.type == 'BORROWSUCCESS') {
			configEle(obj,'进入提现');
		} else if (obj.type == 'CREDITPOINTUPDATE') {
			configEle(obj,'查看详情');
		} else if (obj.type == 'REPAYLOAN') {
			configEleRepay(obj,'进入还款');
		} else if (obj.type == 'OVERDUELOAN') {
			configEleRepay(obj,'立即还款');
		} else if (obj.type == 'DRAWCASHFAILED') {
			configEle(obj,'查看通知');
		} else if (obj.type == 'DRAWCASHSUCCESS') {
			configEle(obj,'查看通知');
		} else if (obj.type == 'ADD_ADDTO_FINANCE_PLAN') {
			configEle(obj,'查看');
		} else if (obj.type == 'FINANCE_PLAN_CASH_DRAW') {
			configEle(obj,'查看');
		} else if (obj.type == 'EXIT_FINANCE_PLAN') {
			configEle(obj,'查看');
		} else if (obj.type == 'INNERMAIL') {
			configEle(obj,'查看私信');
		} else if (obj.type == 'RECOMMENTFORLOAN') {
			configEle(obj,'查看留言');
		} else if (obj.type == 'OPENTIMEOUTFORLOAN') {
			configEle(obj,'查看详情');
		} else if (obj.type == 'SUPVIDEO') {
			configEle(obj,'进入上传');
		} else if (obj.type == 'SUPMATERIALS') {
			configEle(obj,'进入上传');
		}  else if (obj.type == 'MATERIALSFAILED') {
			configEle(obj,'查看通知');
		} else if (obj.type == 'BORROWFAILED' || obj.type == 'APPLYAMOUNTFAILED') {
			configEle(obj,'查看通知');
		}
}

function exitEle(obj){
    var nameObjs = getElementsByName("li",obj.type);
	if (nameObjs != null && nameObjs.length != 0) {
		var countObj = $('#count'+obj.type);
		var length = nameObjs.length;
		if(countObj != null){
			length = parseInt($(countObj).val());
		}
		$.each(nameObjs, function(index, item) {
			$("#" + item.id).remove();
		});
		return length;
	}
	return 0;
}

var getElementsByName = function(tag, name){
    var returns = document.getElementsByName(name);
    if(returns.length > 0) return returns;
    returns = new Array();
    var e = document.getElementById("parentPushMessage").getElementsByTagName(tag);
    for(var i = 0; i < e.length; i++){
        if(e[i].getAttribute("name") == name){
            returns[returns.length] = e[i];
        }
    }
    return returns;
}

function configEle(obj,str){
	var count = exitEle(obj);
	var content = obj.content;
	if(count > 0){
		content = content+"&nbsp;("+(count+1)+")";
	}
	
	var ele = "<li id='" + obj.id + "' name='" + obj.type + "'>" + content
	+ "&nbsp;&nbsp;<input type='hidden' id='count"+obj.type+"' value='"+(count+1)+"'/><a href='#' onclick=switchToPage('"+obj.id+"');>"+str+"</a><input id='expandId" + obj.id + "' type='hidden' value='"+obj.expandId+"'/></li>";
	$("#parentPushMessage").append(ele);
}

function configEleRepay(obj,str){
	var count = exitEle(obj);
	var content = obj.content;
	if(count > 0){
		content = content+"&nbsp;("+(count+1)+")";
	}
	
	var ele = "<li id='" + obj.id + "' name='" + obj.type + "'>" + content
	+ "&nbsp;&nbsp;<a href='#' onclick=switchPage('"+obj.id+"');>"+str+"</a><input type='hidden' id='count"+obj.type+"' value='"+(count+1)+"'/><input id='expandId" + obj.id + "' type='hidden' value='"+obj.expandId+"'/></li>";
	$("#parentPushMessage").append(ele);
}

function configAnno(obj){
	var ele = "<li id='" + obj.id + "' name='" + obj.type + "'>" + obj.content
	+ "&nbsp;&nbsp;<a href='#' onclick=delMessageById('"+obj.id+"',false);>删除</a></li>";
	$("#parentPushMessage").append(ele);
}

function switchToPage(id){
	delPushMessage(id,true);
}

function delPushMessage(id,isSwitch){
	var type = $('#'+id).attr('name');
	var eleId = $('#'+id).attr('id');
	$.ajax({
        url: subscribePath+"?type="+type+"&id="+eleId,
        type: 'post',
        error: function(){
        },
        success: function(response){
        	if(response != null && (response == true || response == 'true')){
        		if(isSwitch){
        			switchPage(id);
        		}else{
        			$('#'+id).remove();
        			var lilen=document.getElementById("parentPushMessage").getElementsByTagName("li").length;
        			if(lilen==0){
        				$("#msg_topmenu").hide();
        				turnOffMailIcon();
        				operMailIcon();
        			}
        		}
        	}
        }
    });
}

function delMessageById(id,isSwitch){
	var type = $('#'+id).attr('name');
	$.ajax({
        url: subscribePath+"?type="+type+"&id="+id,
        type: 'post',
        error: function(){
        },
        success: function(response){
        	if(response != null && (response == true || response == 'true')){
        		if(isSwitch || isSwitch == 'true'){
        			switchPage(id);
        		}else{
        			$('#'+id).remove();
        			var lilen=document.getElementById("parentPushMessage").getElementsByTagName("li").length;
        			if(lilen==0){
        				$("#msg_topmenu").hide();
        				turnOffMailIcon();
        				operMailIcon();
        			}
        		}
        	}
        }
    });
}

function delAllMessage(){
	$.ajax({
        url: subscribePath+"?type=all",
        type: 'post',
        error: function(){
        },
        success: function(response){
        	if(response != null && (response == true || response == 'true')){
        		$("#msg_topmenu").hide();
        		turnOffMailIcon();
				operMailIcon();
        	}
        }
    });
}

function switchPage(id){
	var type = $('#'+id).attr('name');
	var hiddenEle = 'expandId'+$('#'+id).attr('id');
	var expandId = $('#'+hiddenEle).val();
	window.location.href = '../switchToPageForMessage!switchToPage.action?msgType='+type+"&loanId="+expandId+"&innerMailId="+expandId; 
}

function removeEleForParent(obj) {
	if ($("#" + obj.id) != null) {
		$("#" + obj.id).remove();
		if($('#parentPushMessage').html() == null || $("#parentPushMessage").html()==""){
			$("#msg_topmenu").hide();
			turnOffMailIcon();
			operMailIcon();
		}
		
	}
}

function operMailIcon(){
	 $.ajax({
	        url: "../getUnreadMailsCount.action",
	        type: 'get',
	        dataType: 'json',
	        error: function(){
	        },
	        success: function(response){
	            var sysCount = parseInt(response.sysCount);
	            var privateCount = parseInt(response.privateCount);
	            var totalCount = sysCount+privateCount;
	            $("#mailsCount").html(totalCount);
	            if(totalCount > 0){
	        		turnOnMailIcon();
	        	}
	        }
	    });
}

function turnOnMailIcon(){
	document.getElementById("mailMsgImg").src="../images/mail.gif";
}

function turnOffMailIcon(){
	document.getElementById("mailMsgImg").src="../images/mail2.gif";
}

function getElementById(id) {
	return document.getElementById(id);
}

function getJqueryEleById(id) {
	return $('#' + id);
}

function getElementsByName(name) {
	return document.getElementsByName(name);
}