<?php require("ckeckonline.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta name="description" content="人人贷 - 最大、最安全的网络借款、理财平台。提供便捷、安全、低门槛的个人信用贷款和个人理财服务。" />
		<meta name="keywords" content="网络借贷，网络贷款，借贷 网络平台，民间借贷，小额贷款，无抵押贷款，信用贷款，投资理财，人人贷"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link href="/theme/default/css/style.css?v=20120525" rel="stylesheet" type="text/css" media="screen"/>
		<script type="text/javascript" src="/theme/default/js/jquery-1.4.2.min.js"></script>
		<title> 人人贷 - 最大、最安全的网络借贷平台 </title>
		<script>
//鼠标滑过1级菜单时，二级菜单跟着变化
$(function() {
	var currentDisplay;
	var curIndex;
	var bigNavli = $("#big_nav li");
	bigNavli.each(function(i, element) {
		if ($(bigNavli[i]).hasClass("current")) {
			curIndex = i;
			currentDisplay = bigNavli[i];
		}
		bigNavli[i].onmouseover = function() {
			$(this).addClass("current");
			$("#big_nav table").hide();
			$(this).find("table").show();
		}

		bigNavli[i].onmouseout = function() {
			$(this).removeClass("current");
			if (typeof currentDisplay == "undefined")
				return;
			currentDisplay.className = "current";
			$("#big_nav table").hide();
			$(currentDisplay).find("table").show();
		}
	});
	document.getElementById("curli").onmouseover();
});

</script>
		<style>
html{-moz-user-select: none;
-khtml-user-select: none;
user-select: none;}
.arrow{background:url('../theme/default/images/arrowgo.png') no-repeat;}
.l_disable{ background-position:left center;cursor:default}
.l_able{ background-position:-76px center;cursor:pointer;}
.r_disable{ background-position:-39px center; cursor:default}
.r_able{ background-position:right center;cursor:pointer;}
.apDivh3 { position:absolute; width:294px; height:49px; text-align:right; z-index:1; }
.apDivh3 a{ font-size:26px; font-weight:bold; line-height:49px; color:#000;padding-right:5px;}
.apDivh3 a:hover {color:#f00;}
.apDivh3 a:visited {color:#000;}
.apDivp { position:absolute; width:294px; height:150px; text-align:right; z-index:1; }
.apDivp ul{ margin-top:30px;}
.apDivp ul li{ line-height:26px; text-align:right; padding-right:10px;}
.apDivp ul li a{ color:#fff;}
.apDivp ul li a:hover {color:#f00;}
.apDivp ul li a:visited {color:#fff;}
</style>
	</head>
	<body>
		<div id="page" class="session_invalid_tag">
			<div id="header" class="clearfix">
    			<div class="logo clearfix">
              	<div class="l"> <a href="../"><img src="../images/logo.png" alt="人人贷" title="人人贷" width="160px" height="84px" class="logo_hack"/></a> </div>
              	<div class="logo_right">
	            <div class="logo_right_link">
	                <ul>
	                    <li>
	                        <a href="/lend/userHomePage.php?userId=269356">&#22823;&#20110;</a>
	                        
	                    </li>
	                    
	                        <li id="msglinkli">
	                            <a  class='' href='/my/userInfoPage.php?type=user_info_inbox'>
	                                <img  id="mailMsgImg" style='vertical-align: middle;' alt='未读消息' src='/images/mail2.gif'> 消息 <!--  (<span id="mailsCount">0</span>)-->
	                            </a>
	                            <div id="msg_topmenu" class="msg_topmenu" style="display:none">
	                            	<div class="closeMS" onclick="delAllMessage();">X</div>
	                            	<ul id="parentPushMessage">
	                                </ul>
	                            </div>
	                            
	                        </li>
	                    
	                    
	                    <li>
	                         <a href="/j_spring_security_logout">登出</a>
	                        
	                    </li>
	                    <li style="background:none;"><a href="/help.php">帮助</a></li>
	                </ul>
	            </div>
            	<div class="logo_right_phone">客服电话：400-027-8080</div>
        	</div>
            </div>
    		<div class="header_nav">
              	<div class="big_nav" id="big_nav">
        		<ul class="big_nav_ul">
                  	<li> <a href="../index.php"><span>首页</span></a>
            			<table style="display:none" id="big2nav0">
                      	<tr class="big2nav_ul">
                		<td> <a href="/guarantee/aboutp2p.php?v=20130225">平台原理</a> </td>
	                  	<td> <a href="/guarantee/aboutlaws.php?v=20130225">政策法规</a> </td>
		                <td> <a href="/guarantee/aboutfee.php?v=20130225">费用</a> </td>
                		<td><a href="/guarantee/aboutUs.php?v=20130118#go_expert">专家顾问</a></td>
                		<td><a href="/guarantee/aboutUs.php?v=20130118#go_media">媒体报道</a></td>
                		<td><a href="/guarantee/aboutUs.php?v=20130118">关于我们</a></td>
              			</tr>
                    	</table>
          			</li>
                  	<li class="current" id="curli"> <a href="/lend/lendPage.php"><span>我要理财</span></a>
            			<table style="display:block" id="big2nav1">
                      	<tr class="big2nav_ul"> 
		                <td><a href="../lend/lendPage.php">个人贷款</a></td>
		                <td><a href="../financeplan/listPlan!listPlan.php">理财计划</a></td>
		                <td><a href="../lend/farmerloanlistpage.php">爱心助农</a></td>
		                <td><a href="../lend/beLenderPage.php">成为理财人</a></td>
		                <td><a href="../lend/toolsPage.php">工具箱</a></td>
		                <td><a href="../lend/aboutFinancing.php">关于理财</a></td>
              			</tr>
                    	</table>
          			</li>
                  	<li class=""> <a href="/borrow/borrowSwitchPage.php"><span>我要贷款</span></a>
            			<table style="display:none" id="big2nav2">
                      	<tr class="big2nav_ul">
		                <td><a href="../borrow/aboutBorrowPage.php">贷款说明</a></td>
		                <td><a href="../borrow/creditSwitchPage.php">人人贷认证</a></td>
		                <td><a href="../borrow/borrowSwitchPage.php">申请贷款</a></td>
		                <td><a href="../borrow/toolsPage.php">工具箱</a></td>
              			</tr>
                    	</table>
          			</li>
                  	<li class=""> <a href="/my/userInfoPage.php"><span>我的人人贷</span></a>
	           			<table style="display:none" id="big2nav3">
	                    <tr class="big2nav_ul">
		                <td><a onclick="getInfo($('#user_info_home')[0])">我的主页</a></td>
		                <td><a onclick="getInfo($('#user_info_refund')[0])">贷款管理</a></td>
		                <td><a onclick="getInfo($('#user_info_my_invest')[0])">理财管理</a></td>
		                <td><a onclick="getInfo($('#user_info_info')[0])">个人设置</a></td>
	              		</tr>
                    	</table>
         	 		</li>
                  	<li> <a href="/guarantee/index.php"><span>安全保障</span></a>
	            		<table style="display:none" id="big2nav4">
	                    <tr class="big2nav_ul">
		                <td><a href="/guarantee/details.php#go_benjin">本金保障</a></td>
		                <td><a href="/guarantee/details.php#go_zhanghu">交易安全保障</a></td>
		                <td><a href="/guarantee/details.php#go_lichai">贷款审核与保障</a></td>
		                <td><a href="/guarantee/details.php#go_jiaoyi">网上理财安全建议</a></td>
	              		</tr>
	                    </table>
          			</li>
                  	<li class=""><a href="../bbs"><span>论坛</span></a>
            			<table style="display:none" id="big2nav5">
                      	<tr class="big2nav_ul">
		                <td><a href="/bbs/search/filters.page" class="mainmenu" id="searchs">搜索</a></td>
		                <td><a href="/bbs/recentTopics/list.page" class="mainmenu" id="latest">最新主题</a></td>
		                <td><a href="/bbs/hottestTopics/list.page" class="mainmenu" id="hottest">热门主题</a></td>
              			</tr>
                    	</table>
          			</li>
                </ul>
      			</div>
            </div>
    		<div class="big2nav clearfix"> </div>
  			</div>
			<div>
				<div>
				<img src="../images/yt_banner.jpg" border="0" usemap="#Map" />
				  	<map name="Map" id="Map">
					    <area shape="rect" coords="93,163,219,195" href="../guarantee/index.php" target="_blank" />
					    <area shape="rect" coords="400,164,540,195" href="../guarantee/details.php#go_jiaoyi" target="_blank" />
					    <area shape="rect" coords="711,163,882,194" href="http://www.chinamfi.net/common/MemberDetail.asp?ctyp=PERSON&amp;ctxid=5662" target="_blank" />
				  	</map>
				</div>
				<div style="position:relative;height:445px;background:url(../theme/default/images/youwant.jpg) no-repeat">
					  <div class="apDivh3" style="left:22px;top:242px;"><a target="_blank" href="/financeplan/listPlan!listPlan.php">了解理财计划>></a></div>
					  <div class="apDivh3" style="left:332px;top:242px;"><a target="_blank" href="/lend/lendPage.php">去直接投标>></a></div>
					  <div class="apDivh3" style="left:643px;top:242px;"><a target="_blank" href="/guarantee/flashborrow2.php">了解人人贷>></a></div>
					  <div class="apDivp" style="left:22px;top:283px;">
					  	 <ul>
					     	<li><a href="/financeplan/listPlan!listPlan.php" target="_blank">优选理财计划介绍</a></li>
					        <li><a href="/event/yxjh/yxjh.pdf" target="_blank">理财计划说明书</a></li>
					        <li><a href="/financeplan/priorPlanListPage.php" target="_blank">往期计划表现</a></li>
					        <li><a href="/help.php#licaijihua" target="_blank">常见问题</a></li>
					     </ul>
					  </div>
					   <div class="apDivp" style="left:322px;top:283px;">
					  	 <ul>
					     	<li><a href="/help.php#q10" target="_blank">如何通过投标获利？</a></li>
					        <li><a href="/help.php#q11" target="_blank">如何分散投资风险？</a></li>
					        <li><a href="/help.php#jigou" target="_blank">什么是机构担保标？</a></li>
					        <li><a href="/help.php#shidi" target="_blank">什么是实地认证标？</a></li>
					     </ul>
					  </div>
					   <div class="apDivp" style="left:643px;top:283px;">
					  	 <ul>
					     	<li><a href="">了解公司大事记</a></li>
					        <li><a href="/guarantee/aboutUs.php#go_leadership" target="_blank">了解管理团队</a></li>
					        <li><a href="/guarantee/aboutUs.php#go_yeji" target="_blank">了解业绩报告</a></li>
					        <li><a href="/guarantee/aboutUs.php#go_media" target="_blank">了解媒体报道</a></li>
					     </ul>
					  </div>
				
				</div>
				<div unselectable="on" onselectstart="return false;" style="height:154px; padding-top:38px;background:url(../theme/default/images/dashiji.jpg) left top no-repeat #f3f8fc">
					<div class="clearfix" style="padding:0 20px;">
				    	<div style="float:left; width:32px;height:150px;" class="arrow l_disable" id="arrow_left"></div>
				        <div  id="arrow_content" style="float:left;width:850px; height:150px; overflow:hidden;">
				           <div style="width:820px; height:150px; margin:0 auto; overflow:hidden; position:relative ">
				        	  <div style="position:absolute; margin-top:40px;" id="imgcontent"><img src="../images/timeline.jpg" /></div>
				          </div>  
				        </div>
				        <div style="float:left; width:32px;height:150px;" class="arrow r_able" id="arrow_right" ></div>
				    </div>
			   </div>
				
				<div>
					<img src="../images/2012yeji.jpg" border="0" usemap="#Map2" />
				  	<map name="Map2" id="Map2">
				    	<area shape="rect" coords="705,474,886,506" href="http://www.edaitong365.com/event/jibao/20130118/index.php" target="_new" />
				  	</map>
				</div>
				<div>
					<img src="../images/licai_meiti.jpg" border="0" usemap="#Map3" />
				  	<map name="Map3" id="Map3">
					    <area shape="rect" coords="378,182,582,240" href="/lend/lendPage.php" />
					    <area shape="rect" coords="56,69,149,118" href="http://jingji.cntv.cn/20111229/124075.shtml" target="_blank" />
					    <area shape="rect" coords="177,71,311,118" href="http://video.sina.com.cn/v/b/77477463-1802560651.php" target="_blank" />
					    <area shape="rect" coords="340,71,456,120" href="http://weibo.com/2462605080/z10IOzXBA" target="_blank" />
					    <area shape="rect" coords="482,72,612,122" href="http://www.chinadaily.com.cn/usa/china/2012-01/31/content_14509464.htm" target="_blank" />
					    <area shape="rect" coords="637,71,758,123" href="http://www.nfpeople.com/News-detail-item-3105.php" target="_blank" />
					    <area shape="rect" coords="780,71,905,123" href="http://newsweek.inewsweek.cn/magazine.php?id=2548&amp;page=1" target="_blank" />
				  	</map>
				  	
				  	
				  	
				</div>
			</div>
			<div id="footer">
			    <div class="footer_blue"></div>
			    <div class="clearfix">
			        <div id="footernav">
			            <ul>
			                <li class="p"><img src="/images/footer_k_03.gif"><ul><li><a href="/bbs/posts/list/1809.page">常见问题</a></li><li> <a href="/guarantee/aboutp2p.php?v=20130225"> 平台原理</a></li><li> <a href="/borrow/aboutBorrowPage.php"> 如何借款</a></li><li><a href="/lend/aboutFinancing.php">如何理财</a></li></ul></li>
			                <li class="p"><img src="/images/footer_k_05.gif"><ul><li><a href="/guarantee/aboutUs.php#go_media">媒体报道</a></li><li><a href="/guarantee/aboutUs.php#go_contact">联系我们</a></li><li><a href="/guarantee/aboutUs.php#go_join_us">加入我们</a></li><li><a href="/guarantee/aboutUs.php#go_expert">专家顾问</a></li></ul></li>
			                <li class="p"><img src="/images/footer_k_07.gif"><ul><li><a href="/guarantee/index.php">本金保障计划</a></li><li><a href="/guarantee/aboutlaws.php?v=20130225">政策法规</a></li><li><a href="/guarantee/details.php#go_zhb">隐私保护</a></li></ul></li>
			                <li class="p" style="background:none"><img src="/images/footer_k_09.gif"><ul><li><a href="http://blog.sina.com.cn/u/1784647287">新浪博客</a></li><li><a href="http://t.sina.com.cn/edaitong365">新浪微博</a></li><li>手机客户端</li></ul></li>
			            </ul>
			        </div>
			    </div>
			    <div class="h10"></div>
			    <div id="copy">
			        <p><span style="color:#e39538">联系我们：service@edaitong365.com</span><span style="color:#7D7E74; margin-left:20px;">人人贷商务顾问(北京)有限公司 </span><a style="margin-left:20px" href="/guarantee/icp.php">京ICP证 100953号</a></p>
			        <p style="color:#7D7E74;">&copy; 2010 人人贷 All rights reserved</p>
			    </div>
			</div>
		</div>
	</body>
	<script>
$(function(){
	var len=0;
	var leftT;
	var rightT;
	$("#arrow_left").mousedown(function(){
		var img=$("#imgcontent");
		if($(this)[0].className=="arrow l_disable"){
			return;
		}
		leftT=setInterval(function(){
			
			if(len>=0){
				$(this)[0].className="arrow l_disable";	
				clearInterval(leftT);
				return;	
			}
		
			len+=10;
			img.css("left",len+"px");
			$("#arrow_right")[0].className="arrow r_able";
			
		},20)
		
	
	})	
	$("#arrow_left").mouseup(function(){
		clearInterval(leftT);
	})
	
	$("#arrow_right").mousedown(function(){
		var img=$("#imgcontent");
		if($(this)[0].className=="arrow r_disable"){
			return;
		}
		rightT=setInterval(function(){
			
			if(len<=-1060){
				$(this)[0].className="arrow r_disable";
				clearInterval(rightT);
				return;
			}
			
			len-=10;
			img.css("left",len+"px");
			$("#arrow_left")[0].className="arrow l_able";
		},20) 
	})	
	
	$("#arrow_right").mouseup(function(){
		clearInterval(rightT);
	})
})
</script>
</html>
