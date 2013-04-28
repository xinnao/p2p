$(function(){
	var divStr='<div id="topbar"><img  style="CURSOR: pointer" onclick="javascript:window.open(\'http://b.qq.com/webc.htm?new=0&sid=4000278080&eid=218808P8z8p8R8y8q8y8Q&o=www.renrendai.com&q=7&ref=\'+document.location, \'_blank\', \'height=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no\');"  border="0" SRC="../images/kefu2.gif"></div>';
	$(document.body).append(divStr);
	ie6fixed("topbar")
	/*
	var qqNumber=4000278080;
	$.ajax({
		url: "../noticeDetail!showNotice.action",
		cache: false,
		success: function(html){
			var retStr=html;	
			var retArray=retStr.split("-"); //字符分割 
			
			var isLender= retArray[0];			
			if(retArray.length>1){
				qqNumber= retArray[1];
			}			
			if(isLender=="true"){
				var divStr = '<div id="topbar">';
				divStr += '<a target="blank" href="tencent://message/?uin=' + qqNumber + '&amp;Site=人人贷客服&amp;Menu=yes">';
				divStr += '<img border="0" src="http://wpa.qq.com/pa?p=1:' + qqNumber + ':6" alt="有事点这里">';
				divStr += '<img src="../images/kefu2.gif"></a></div>';				
				$(document.body).append(divStr);
				ie6fixed("topbar")
			}
		}
	});
	*/	
})

function ie6fixed(o){
	
	var elem=document.getElementById(o);
	if (elem==null){
		return false;	
	}	
	var position = function(){
	var isIE6 = !-[1,] && !window.XMLHttpRequest,
		html = document.getElementsByTagName('html')[0];
	
	// 给IE6 fixed 提供一个“不抖动的环境”
	// 只需要 html 与 body 标签其一使用背景静止定位即可让IE6下滚动条拖动元素也不会抖动
	// 注意：IE6如果 body 已经设置了背景图像静止定位后还给 html 标签设置会让 body 设置的背景静止(fixed)失效	
	if (isIE6 && document.body.currentStyle.backgroundAttachment !== 'fixed') {
		html.style.backgroundImage = 'url(about:blank)';
		html.style.backgroundAttachment = 'fixed';
	};
	
	return {
		fixed: isIE6 ? function(elem){
				var style = elem.style,
					dom = '(document.documentElement)',
					left = parseInt(style.left) - document.documentElement.scrollLeft,
					top = parseInt(style.top) - document.documentElement.scrollTop;
				this.absolute(elem);
				style.setExpression('left', 'eval(' + dom + '.scrollLeft + ' + left + ') + "px"');
				style.setExpression('top', 'eval(' + dom + '.scrollTop + ' + top + ') + "px"');
			} : function(elem){
				elem.style.position = 'fixed';
		},
		
		absolute: isIE6 ? function(elem){
				var style = elem.style;
				style.position = 'absolute';
				style.removeExpression('left');
				style.removeExpression('top');
			} : function(elem){
				elem.style.position = 'absolute';
		}
	};
}();
	if(elem!=null){
		var left=document.body.offsetWidth-100;
   	    elem.style.left = left+"px";
	    elem.style.top = '270px';
	    elem.style.zIndex=9999;
	    position.fixed(elem);	
	}
}