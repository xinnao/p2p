/*
 * Copyright(c) 2007-2010 by renrendai.com.
 * All Rights Reserved
 * author:hebo3344@163.com
 */
function suggestEmail(obj){
	var obj=$("#"+obj);
	var autoEmail=$("#autoEmail");
	var ishover=false;
	var bgcur=1;
	var m=["sina.com","163.com","qq.com","126.com","vip.sina.com","sina.cn","hotmail.com","gmail.com","sohu.com","yahoo.cn","139.com","189.cn"];
	var t=null;
	
	document.onclick=function(e){
		var e=e||window.event;
		if(e&&e.stopPropagation){ e.stopPropagation();}
		else {window.event.cancelBubble=true;}
		var t = e.srcElement ? e.srcElement : e.target
		if(t.id!="email"&&t.parentNode.id!="autoEmail"){
			autoEmail.empty().hide();	
		}
	}
	autoEmail.find("li").live("click",function(){
		if($(this).index()==0){return}
		obj.val($(this).html());
		autoEmail.empty().hide();
		clearInterval(t);
		obj.focus();
		if(document.getElementById('confirm_email')!=null){$('#confirm_email').focus()}else{$("#password").focus();}
		obj.parents("form").validate().element(obj);
		return false;
	}).live("mouseover",function(){if($(this).index()!=0){$(this).addClass("cur")};ishover=false;}).live("mouseout",function(){$(this).each(function(){$(this).removeClass("cur")});ishover=true;});
	ishover=true;
	obj.focus(function(){
		t=setInterval(function(){	
			 if(!ishover){return;}
			 var v=obj.val();
			 if(v==""){return;}
			 var a=v.split("@");
			 var li="<li style='color:#aaa;'>请选择邮箱类型</li>";
			 li+="<li class='cur'>"+v+"</li>";
			 for(var i=0,len=m.length;i<len;i++){
				 var reg=new RegExp("^"+a[1]+"");
				 if(!/@/.test(v)){
					 li+="<li>"+v+"@"+m[i]+"</li>";
				 }else{
					if(reg.test(m[i])){
						li+="<li>"+a[0]+"@"+m[i]+"</li>";
					}
				 }
				 
			 }
			 autoEmail.html(li).show();
		},500);
	}).blur(function(){
	    ishover=false;
		clearInterval(t);
	}).keydown(function(e){
		if(e.keyCode=='13'){
			var cur=autoEmail.find("li.cur");
			var curhtml=cur.html();
			obj.val(curhtml);
			if(cur.index()!=1){
				autoEmail.empty().hide();
				clearInterval(t);
				obj.focus();
				if(document.getElementById('confirm_email')!=null){$('#confirm_email').focus()}else{$("#password").focus();}
				$("#login").submit();
				obj.parents("form").validate().element(obj);
			}
			return false;
		}else if(e.keyCode=='40'){
			bgcur=autoEmail.find("li.cur").index();
			if(bgcur>=m.length+1){bgcur=0};
			bgcur++;
			autoEmail.find("li").each(function(){$(this).removeClass("cur")}).eq(bgcur).addClass("cur");
			ishover=false;		
		}else if(e.keyCode=='38'){
			bgcur=autoEmail.find("li.cur").index();
			if(bgcur<=1){bgcur=m.length+2};
			bgcur--;
			autoEmail.find("li").each(function(){$(this).removeClass("cur")}).eq(bgcur).addClass("cur");
			ishover=false;
		}else if(e.keyCode=="9"){
			ishover=false;
			autoEmail.empty().hide();
			clearInterval(t);
		}else{
			ishover=true;
		}
	})
}

function tips(input,msg,top,left){
	var tip='<div class="pass_reg_tips" style="top: '+top+'px; left:'+left+'px; display: block;"><div class="pass_reg_tip_header"></div><div class="pass_reg_tip_body_container"><div class="pass_reg_tip_body"><div class="pass_rep_tip_content">'+msg+'</div></div></div></div>';
	$("#imgtips").after(tip);
	input.onmouseout=function(){
		setTimeout(function(){$(".pass_reg_tips").remove()},500)	
	}
}

function writeCookie(name, value, hours){
  var expire = "";
  if(hours != null){
    expire = new Date((new Date()).getTime() + hours * 3600000);
    expire = "; expires=" + expire.toGMTString();
  }
  document.cookie = name + "=" + escape(value) + expire;
}

function readCookie(name){
  var cookieValue = "";
  var search = name + "=";
  if(document.cookie.length > 0){ 
    offset = document.cookie.indexOf(search);
    if (offset != -1){ 
      offset += search.length;
      end = document.cookie.indexOf(";", offset);
      if (end == -1) end = document.cookie.length;
      cookieValue = unescape(document.cookie.substring(offset, end))
    }
  }
  return cookieValue;
}
