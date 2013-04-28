<?php
require("../loading.php");
$menuid=5;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
 <html>
    <head>
        <title>
            
            信用审核 - 提供小额贷款、信用贷款、无抵押贷款、购车贷款，更低的贷款利率 - 人人贷
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="google-site-verification" content="oQXrGa_mTgxg7joO0himE0QuFeqOVmm-SDC1H2dzT4c" />
        <script type="text/javascript" src="../theme/default/js/jquery-1.4.2.min.js">
        </script>

        <script type="text/javascript" src="../theme/default/js/jquery.form.js">
        </script>
        <script type="text/javascript" src="../theme/default/js/jquery.validate.min.js">
        </script>
        <script type="text/javascript" src="../theme/default/js/jquery.pagebar.1.0.0.js">
        </script>
        <script type="text/javascript" src="../theme/default/js/jcrop/js/jquery.Jcrop.min.js">
        </script>
        <script type="text/javascript" src="../theme/default/js/nyroModal-1.6.2/js/jquery.nyroModal-1.6.2.pack.js">
        </script>
        <script type="text/javascript" src="../theme/default/js/main.js">
        </script>
       <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../theme/default/js/nyroModal-1.6.2/styles/nyroModal.full.css" type="text/css" />
        <link rel="stylesheet" href="../theme/default/js/jcrop/css/jquery.Jcrop.min.css" type="text/css" />
        <link href="../theme/default/css/style.css" rel="stylesheet" type="text/css" media="screen"/>
    </head>
    <body>
        <div id="page" class="session_invalid_tag">

            



 <style type="text/css">
.logo_hack { behavior: url(../images/iepngfix.htc); }
#bengjin { margin-left:0; width:406px; border:1px solid #E2E2E2; height:332px; float:left; background:url("../images/bengjinbz.jpg") no-repeat; }
.biao .info { width: 130px; }
.progressBar { border:0 none; margin-top:4px; }
.progressBar .p {float:none;background:none; }
.progressBar div.c { background: url("/theme/default/css/images/progressBarBg.png") repeat-x scroll 0 0 transparent; color: #FFFFFF; display: block; font-weight: bold; height: 14px; left: 1px; line-height: 14px; margin: 3px 0; position: absolute; z-index: 1; }
.slide2 .pic img {
  border: 1px solid #E9EAF8;
  height:240px;
  width: 958px;
}
.slide2 .thumb a {
  background: url("/theme/default/images/anquand.png") no-repeat right top;
  border: none;
  color: #FF9415;
  display: inline;
  float: left;
  height: 14px;
  line-height: 16px;
  margin-bottom: 2px;
  margin-left: 5px;
  padding: 1px;
  text-align: center;
  text-decoration: none;
  width: 14px;
  text-indent:-99999px;
}
.slide2 .thumb .cur, .slide .thumb a:hover {
  background:  url("/theme/default/images/anquand.png") no-repeat 0 0;
  border: none;
  color: #FFFFFF;
  font-weight: bold;
}
</style>
  <?php require("../header.php"); ?>

 <div id="content" class="clearfix">
 
  <div>
    <div class="slide2" style="margin-bottom:5px; height:240px;">
       <div class="pic">
       	    <a style="display: block;" class="cur" href="details.php#go_benjin" target="_blank"><img height="240" width="958" src="../images/banner/anquan_01.jpg" data-pinit="registered"></a>
            <a target="_blank" href="details.php#go_zhanghu"><img height="240" width="958" src="../images/banner/anquan_02.jpg" data-pinit="registered"></a>
            <a href="details.php#go_lichai" target="_blank"><img  width="958" height="240" src="../images/banner/anquan_03.jpg" /></a>
            <a href="details.php#go_jiaoyi" target="_blank"><img width="958" height="240"  src="../images/banner/anquan_04.jpg?v=2012" /></a>
        </div>

        <div class="thumb">
            <a class="cur" >1</a>
            <a>2</a>
            <a>3</a>
            <a>4</a>
        </div>
    </div>
</div>
<!--  
<div class="banner clearfix">
  <ul class="eachBox" id="a">

    <li style="width:610px; display:list-item"><a href="details.php#go_benjin" target="_blank"><img src="../images/eachbox_01.jpg" style="left:0px"></a></li>
    <li style="width:115px; display:list-item"><a href="details.php#go_zhanghu" target="_blank"><img src="../images/eachbox_02.jpg" style="left:-610px"></a></li>

    <li style="width:115px; display:list-item"><a href="details.php#go_lichai" target="_blank"><img src="../images/eachbox_03.jpg" style="left:-610px"></a></li>
    <li class="last" style="width:115px; display:list-item"><a target="_blank" href="details.php#go_jiaoyi"><img alt="点击体验" src="../images/eachbox_04.jpg" style="left:-610px"></a></li>
  </ul>
<script type="text/javascript">
//(function(a){a.fn.extend({soChange:function(b){b=a.extend({bwidth:608,swidth:114,thumbObj:a(this),slideTime:500,autoChange:true,changeTime:6000,delayTime:3000},b||{});var h=a(this);var i;var k=h.size();var e=0;var g;var c;var f;function d(){if(e!=g){h.eq(e).animate({width:b.swidth},{duration:b.slideTime,complete:function(){a(this).find("img").css("left",(0-b.bwidth))}});h.eq(g).animate({width:b.bwidth},{duration:b.slideTime}).find("img").css("left","0");e=g;if(b.autoChange==true){window.clearInterval(c);c=window.setInterval(j,b.changeTime)}}}function j(){g=(e+1)%k;d()}h.eq(0).animate({width:b.bwidth},{duration:b.slideTime}).find("img").css("left","0");if(b.thumbObj!=null){i=a(b.thumbObj);i.mouseenter(function(){clearTimeout(f);g=i.index(a(this));f=setTimeout(function(){d()},200);});i.mouseleave(function(){clearTimeout(f)})}if(b.autoChange==true){c=window.setInterval(j,b.changeTime)}}})})(jQuery);



	
//$('#a li').soChange();
</script> 
</div>
-->
<div id="center" class="clearfix">
          <a href="details.php#go_bja"><div id="bengjin"> </div></a>

          <div id="latest">
    <div class="ti clearfix">

              <div style="float:left">最新借贷</div>
              <div id="rightTitls">
        <ul>
                  <li class="current"><a class="current"> 1 </a></li>
                  <li><a title="2"   class=""> 2 </a></li>

                  <li><a title="3"  class=""> 3 </a></li>

                </ul>
        <li id="gobg" class="background" style="left: 0px; width: 25px; visibility: visible; opacity: 1;">
                  <div class="left"></div>
                </li>
      </div>
            </div>
    <div id="labox" style="position:relative;">

              <div id="loading" style="display:none"></div>

              <div id="conbox"></div>
            </div>
  </div>
        </div>
        
<div class="bzbox clearfix">
	<div class="bzinfob">
    	<h3><a href="details.php#go_zhanghu">交易安全保障</a></h3>

        <div class="clearfix ulimgbox">

            <img src="../images/u179_original.jpg" />
            <ul>
                <li><a href="details.php#go_zha">账户安全</a></li>
                <li><a href="details.php#go_zhb">隐私保护</a></li>
            </ul>
        </div>
    </div>

    <div class="bzinfob">
    	<h3><a href="details.php#go_lichai">贷款审核与保障</a></h3>
        <div class="clearfix ulimgbox">
            <img src="../images/u181_original.jpg" />
            <ul>
                <li style="width:120px"><a href="details.php#go_lca">严格的贷前审核</a></li>
                <li style="width:120px"><a href="details.php#go_lcb">完善的贷中贷后管理</a></li>

            </ul>
        </div>
    </div>
    <div class="bzinfob">
    	<h3><a href="details.php#go_jiaoyi">网上理财安全建议</a></h3>
        <div class="clearfix ulimgbox">
            <img src="../images/u183_original.jpg" />
            <ul>

                <li><a href="details.php#go_jya">五大重要守则</a></li>
                <li><a href="details.php#go_jyb">避免私下交易</a></li>
            </ul>
        </div>
    </div>
</div>     
<?php require("../footer.php"); ?>
        </div>
    </body>
    <script type="text/javascript">   
var defaultOpts = { interval: 4000, fadeInTime: 300, fadeOutTime: 200 };
var _titles = $(".slide2 .thumb a");
var _bodies = $(".slide2 .pic a");
var _count = _titles.length;
var _current = 0;
var _intervalID = null;
var stop = function() { window.clearInterval(_intervalID); };
var slide = function(opts) {
	if (opts) {
		_current = opts.current || 0;
	} else {
		_current = (_current >= (_count - 1)) ? 0 : (++_current);
	};
	_bodies.filter(":visible").fadeOut(defaultOpts.fadeOutTime, function() {
		_bodies.eq(_current).fadeIn(defaultOpts.fadeInTime);
		_bodies.removeClass("cur").eq(_current).addClass("cur");
	});
	_titles.removeClass("cur").eq(_current).addClass("cur");
};
var go = function() {
	stop();
	_intervalID = window.setInterval(function() { slide(); }, defaultOpts.interval);
}; 

var itemMouseOver = function(target, items) {
	stop();
	var i = $.inArray(target, items);
	slide({ current: i });
}; 

_titles.hover(function() { if($(this).attr('class')!='cur'){itemMouseOver(this, _titles); }else{stop();}}, go);
_bodies.hover(stop, go);
go();
function rad(){
	var src="/event/zhi/zhi.php?v=";
	return location.href=src+new Date().getTime();
	
}
</script> 

    <script type="text/javascript">
/**
 *计算器
 */
 function $$(o){
	return document.getElementById(o);	
}
function createxmlhttp(){
	xmlhttp=(window.ActiveXObject)?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest()
	if(xmlhttp.overrideMimeType){
		xmlhttp.overrideMimeType("text/xml");
	}
}
function echo(){
   var d=document.getElementById("echo");
  	if(xmlhttp.readyState==1){
	//	$$("loading").style.display="block";
	//	$$("loading").innerHTML="<img src=\"css/loader.gif\" />";
	}	
	 if(xmlhttp.readyState==4){
	    if(xmlhttp.status==200){
	//		$$("loading").innerHTML="";
	//		$$("loading").style.display="none";
		  getxmlDoc()  
	    }
	}
}
function resp(){
	createxmlhttp();
	var url="/latest?&ran="+Math.random(1);
	xmlhttp.open("get",url,true);
	xmlhttp.onreadystatechange=echo;
	xmlhttp.setRequestHeader("Content-Type","text/xml;charset=utf-8;");
	xmlhttp.send(null);
}

function getxmlDoc(){
	xmlDoc = xmlhttp.responseXML.documentElement;
	if(!xmlDoc) {
		xmlhttp.responseXML.load(xmlhttp.responseStream);
		xmlDoc = xmlhttp.responseXML.documentElement;
	}
	
		getPageRecord(0,3) 
}
var ticount=9;
var pageIndex;
function getPageRecord(pageIndex,pageSize){
    var plen=Number(pageIndex)+Number(pageSize);
	$$("conbox").innerHTML="";
	if(plen>=pageSize&&pageSize==ticount){
		plen=pageSize;
	}
	   var ul=document.createElement("ul");
	        ul.setAttribute("id","ul");
		    $$("conbox").appendChild(ul);
	
	var sf=xmlDoc.getElementsByTagName("listbox");
	for(var i=pageIndex;i<plen;i++){
	    var loanid=sf[i].getElementsByTagName("loanid")[0].childNodes[0].nodeValue;
		var im=sf[i].getElementsByTagName("img")[0].childNodes[0];
		if(im!=undefined){
			 var img=sf[i].getElementsByTagName("img")[0].childNodes[0].nodeValue;

                }else{
			var img="../images/icon_80.png";
                }
		//var img=sf[i].getElementsByTagName("img")[0].childNodes[0].nodeValue;
		var title=sf[i].getElementsByTagName("title")[0].childNodes[0].nodeValue;
		var totalmoney=sf[i].getElementsByTagName("totalmoney")[0].childNodes[0].nodeValue;
		var rate=sf[i].getElementsByTagName("rate")[0].childNodes[0].nodeValue;
		var grade=sf[i].getElementsByTagName("grade")[0].childNodes[0].nodeValue;
		var deadline=sf[i].getElementsByTagName("deadline")[0].childNodes[0].nodeValue;
		var needmoney=sf[i].getElementsByTagName("needmoney")[0].childNodes[0].nodeValue;
		var jindu=Math.ceil((totalmoney-needmoney)/totalmoney*100);
		 var li=document.createElement("li");
		 li.setAttribute("id","li"+i);
		 $$("ul").appendChild(li);
		

		var str="<div class=\"biao clearfix\"><div class=\"biao-l\"> <a style=\"cursor:pointer\" href='http://www.edaitong365.com/lend/detailPage.php?loanId="+loanid+"'><img height=\"80px\" width=\"80px\" class=\"img_b\" src=\""+img+"\"></a> </div><div class=\"biao-r\"><div class=\"t\" style=\"font-size:12px;font-weight: bold;\"> <a style=\"cursor:pointer\" href=http://www.edaitong365.com/lend/detailPage.php?loanId="+loanid+">"+title+"</a> </div><div class=\"clearfix\"><div class=\"info\"> 借款金额：<span class=\"f_red\">"+totalmoney+"</span> </div><div class=\"info\"> 年利率：<span class=\"f_red\">"+rate+"</span> </div><div class=\"info\"> 借款期限：<span class=\"f_red\">"+deadline+"个月</span> </div></div><div class=\"clearfix\"><div class=\"info-2\"> 信用等级：<a><img align=\"absmiddle\" src=\"/images/level/"+grade+".png\"></a> </div><div class=\"info-3\"><div class=\"l\"> 借款进度： </div><div class=\"progressBar l\"><p>"+jindu+"%</p><div class=\"p\"><div class=\"c\" style=\"width:"+jindu+"%;\"> </div></div></div><div class=\"l\"> &nbsp;&nbsp;&nbsp;&nbsp;还需 <span class=\"f_red\">"+parseInt(needmoney,10)+"元</span> </div></div></div></div></div><div class=\"interval\"> </div>"
		$$("li"+i).innerHTML=str;
	}
		
}
 

$("#rightTitls ul li").click(function(){
	document.getElementById("gobg").style.left=$(this).position().left+"px";
	$("#rightTitls ul li").each(function(i){
		$("#rightTitls ul li").find("a").removeClass()
	})
	$(this).find("a").addClass("current")
	getPageRecord(3*$(this).index(),3)
})
window.onload=function(){
	resp();
}
</script>
</html>     
        
