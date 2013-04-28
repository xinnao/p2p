<?php require("loading.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            
            人人贷 - 最大、最安全的网络借贷平台
        </title>
        <meta name="google-site-verification" content="oQXrGa_mTgxg7joO0himE0QuFeqOVmm-SDC1H2dzT4c" />
        <script type="text/javascript" src="/theme/default/js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript">
        if(!/msie 6/i.test(navigator.userAgent))document.write('\<script type=\"text/javascript\" src=\"/theme/default/js/jquery.alert.min.js\"\>\<\/script\>');
        </script>
        <script type="text/javascript" src="/theme/default/js/jquery.form.js"></script>
        <script type="text/javascript" src="/theme/default/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="/theme/default/js/jquery.pagebar.1.0.0.js"></script>
        <script type="text/javascript" src="/theme/default/js/jcrop/js/jquery.Jcrop.min.js"></script>
        <script type="text/javascript" src="/theme/default/js/nyroModal-1.6.2/js/jquery.nyroModal-1.6.2.pack.js"></script>
        <script type="text/javascript" src="/theme/default/js/main.js?v=20130219"></script>
        <script type="text/javascript" src="/theme/default/js/msgpush/init_push.js?v=20130131"></script>
        <link rel="stylesheet" href="/theme/default/js/nyroModal-1.6.2/styles/nyroModal.full.css" type="text/css" />
        <link rel="stylesheet" href="/theme/default/js/jcrop/css/jquery.Jcrop.min.css" type="text/css" />
        <link href="/theme/default/css/style.css?v=20130411" rel="stylesheet" type="text/css" media="screen"/>
    </head>
    <body>
<div id="page" class="session_invalid_tag">         
<?php require("header.php"); ?>
<script>
function geturl(){
	var xmlsrc="zhi_xml.php?r="+new Date().getTime();
	return xmlsrc;
}
function getEndTime(){
	var endtime='2013-04-25 10:00:00.0';
	endtime=endtime.replace(/:|\s/g,"-");
	return endtime;
}
function timeZero(){
	$("#finance_timer").hide();
	$("#timerBox").hide();
	$("#finance_timeout").show();
}
</script>
<div id="content" class="clearfix">
	<!-- banner page -->
	
 <div class="i-c-ad">
    <div class="slide2">
       <div class="pic">
       	   <a  style="display: block;" class="cur" href="http://www.edaitong365.com/index/noticeDetail.php?noticeId=175" target="_blank"><img height="187" width="958" src="/event/yaan/xxya.jpg"></a>
           <a href="/event/jibao/20130416/index.php" target="_blank"><img height="187" width="958" src="/event/jibao/20130416/banner.jpg"></a>
     	   <a href="/financeplan/listPlan!listPlan.php?" target="_blank"><img width="960" height="190" src="/event/yxjh/yxlcztz_banner.jpg" /></a>
           <a href="/guarantee/aboutUs.php#go_expert" target="_blank"><img width="958" height="187" src="../images/banner/expert.jpg" alt="人人贷 专家委员会" title="人人贷 专家委员会" /></a>
           <a href="/guarantee/index.php?v=2012" target="_blank"><img width="958" height="187"  src="../images/banner/02.jpg?v=2012" alt="全场本金保障计划" title="全场本金保障计划" /></a>
       </div>

        <div class="thumb">
            <a class="cur" >1</a>
            <a>2</a>
            <a>3</a>
            <a>4</a>
            <a>5</a>
        </div>
    </div>
</div>
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
	var src="/event/festival/festivalIndex.php?v=";
	return location.href=src+new Date().getTime();
	
}
</script> 

    

	<div class="grid-2-6-4 clearfix">
		<div class="left">
			<div class="layout-box">
				<div class="gray_title clearfix">
					<div class="l f_dgray b">最新借款列表</div>
					<div class="r">
						<span style="font-size: 12px; font-weight: normal;"><a
							href="../lend/lendPage.php?" title="更多">更多借款列表...</a></span>
					</div>
				</div>
				<div class="cont clearfix">
					<div class="h5"></div>
					<ul class="lalist">
						
							
								<li>
									<div class="biao clearfix">
										<div class='biao-l'>
											
											
												<a href="../lend/detailPage.php?loanId=66257">
													<img class="img_b" src="../images/loanType/dqzz.png" width="80px" height="80px" alt="临时周转" title="临时周转">
												</a>
											
										</div>
										
										
											<div class="biao-r">
												<div class="t" style="font-size: 12px; font-weight: bold;">
													<a href="../lend/detailPage.php?loanId=66257">临时周转</a>
													
													
												</div>
												<div class="clearfix">
													<div class="info">
														借款金额：<span class="f_red">￥15,000</span>
													</div>
													<div class="info">
														年利率<span class="spanML">：</span><span class="f_red">10.00
															%</span>
													</div>
													<div class="info">
														<div class="mL25">
															借款期限：<span class="f_red">3个月</span>
														</div>
													</div>
												</div>
												<div class="clearfix">
													<div class="info-2">
														信用等级：<a
															href="../lend/getUserCreditPage.php?userId=135383"
															target="_blank"><img
															src="../images/level/C.png"
															align="absmiddle"
															title="C"
															alt="C" /></a>
													</div>
													<div class="info-3">
														<div class="l">借款进度：</div>
														<div class="greenProcessBar progressBar l indexbar">
															
															
																<p>
																	100
																	%
																</p>
															
															<div class="p">
																<div class="c" style="width: 100.0%;"></div>
															</div>
														</div>
														<div class="l">
															<div class="mL50"> 
																<span>还需：<span class="f_red">0 元</span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										
									</div>
								</li>
							
								<li>
									<div class="biao clearfix">
										<div class='biao-l'>
											
											
												<a href="../lend/detailPage.php?loanId=66679">
													<img class="img_b" src="/upload/user/profile/20110101/9ccfc89d-dd0c-4504-b77d-e0c3195f8096.jpg" width="80px" height="80px" alt="上传资料专用，请勿投。" title="上传资料专用，请勿投。">
												</a>
											
										</div>
										
										
											<div class="biao-r">
												<div class="t" style="font-size: 12px; font-weight: bold;">
													<a href="../lend/detailPage.php?loanId=66679">上传资料专用，请勿投。</a>
													
													
												</div>
												<div class="clearfix">
													<div class="info">
														借款金额：<span class="f_red">￥13,000</span>
													</div>
													<div class="info">
														年利率<span class="spanML">：</span><span class="f_red">15.00
															%</span>
													</div>
													<div class="info">
														<div class="mL25">
															借款期限：<span class="f_red">24个月</span>
														</div>
													</div>
												</div>
												<div class="clearfix">
													<div class="info-2">
														信用等级：<a
															href="../lend/getUserCreditPage.php?userId=2977"
															target="_blank"><img
															src="../images/level/C.png"
															align="absmiddle"
															title="C"
															alt="C" /></a>
													</div>
													<div class="info-3">
														<div class="l">借款进度：</div>
														<div class="greenProcessBar progressBar l indexbar">
															
															
																<p>
																	100
																	%
																</p>
															
															<div class="p">
																<div class="c" style="width: 100.0%;"></div>
															</div>
														</div>
														<div class="l">
															<div class="mL50"> 
																<span>还需：<span class="f_red">0 元</span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										
									</div>
								</li>
							
								<li>
									<div class="biao clearfix">
										<div class='biao-l'>
											
											
												<a href="../lend/detailPage.php?loanId=65865">
													<img class="img_b" src="/upload/user/profile/20111018/debf4efb-e469-4c07-8c68-4f69644167a2.jpg" width="80px" height="80px" alt="申请贷款" title="申请贷款">
												</a>
											
										</div>
										
										
											<div class="biao-r">
												<div class="t" style="font-size: 12px; font-weight: bold;">
													<a href="../lend/detailPage.php?loanId=65865">申请贷款</a>
													
													
												</div>
												<div class="clearfix">
													<div class="info">
														借款金额：<span class="f_red">￥3,000</span>
													</div>
													<div class="info">
														年利率<span class="spanML">：</span><span class="f_red">10.00
															%</span>
													</div>
													<div class="info">
														<div class="mL25">
															借款期限：<span class="f_red">3个月</span>
														</div>
													</div>
												</div>
												<div class="clearfix">
													<div class="info-2">
														信用等级：<a
															href="../lend/getUserCreditPage.php?userId=57316"
															target="_blank"><img
															src="../images/level/D.png"
															align="absmiddle"
															title="D"
															alt="D" /></a>
													</div>
													<div class="info-3">
														<div class="l">借款进度：</div>
														<div class="greenProcessBar progressBar l indexbar">
															
															
																<p>
																	100
																	%
																</p>
															
															<div class="p">
																<div class="c" style="width: 100.0%;"></div>
															</div>
														</div>
														<div class="l">
															<div class="mL50"> 
																<span>还需：<span class="f_red">0 元</span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										
									</div>
								</li>
							
								<li>
									<div class="biao clearfix">
										<div class='biao-l'>
											
											
												<a href="../lend/detailPage.php?loanId=66673">
													<img class="img_b" src="/upload/user/profile/20120905/ee846ce6-9f72-42bd-bd38-94c97150a706.JPG" width="80px" height="80px" alt="资金周转" title="资金周转">
												</a>
											
										</div>
										
										
											<div class="biao-r">
												<div class="t" style="font-size: 12px; font-weight: bold;">
													<a href="../lend/detailPage.php?loanId=66673">资金周转</a>
													
													
												</div>
												<div class="clearfix">
													<div class="info">
														借款金额：<span class="f_red">￥30,000</span>
													</div>
													<div class="info">
														年利率<span class="spanML">：</span><span class="f_red">15.00
															%</span>
													</div>
													<div class="info">
														<div class="mL25">
															借款期限：<span class="f_red">12个月</span>
														</div>
													</div>
												</div>
												<div class="clearfix">
													<div class="info-2">
														信用等级：<a
															href="../lend/getUserCreditPage.php?userId=158797"
															target="_blank"><img
															src="../images/level/E.png"
															align="absmiddle"
															title="E"
															alt="E" /></a>
													</div>
													<div class="info-3">
														<div class="l">借款进度：</div>
														<div class="greenProcessBar progressBar l indexbar">
															
															
																<p>
																	100
																	%
																</p>
															
															<div class="p">
																<div class="c" style="width: 100.0%;"></div>
															</div>
														</div>
														<div class="l">
															<div class="mL50"> 
																<span>还需：<span class="f_red">0 元</span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										
									</div>
								</li>
							
								<li>
									<div class="biao clearfix">
										<div class='biao-l'>
											
											
												<a href="../lend/detailPage.php?loanId=66811">
													<img class="img_b" src="/upload/user/profile/20120507/2ac0fb30-5733-4cf4-9c20-d43f95e7b2c1.jpg" width="80px" height="80px" alt="增加生产设备，扩大生产规模" title="增加生产设备，扩大生产规模">
												</a>
											
										</div>
										
										
											<div class="biao-r">
												<div class="t" style="font-size: 12px; font-weight: bold;">
													<a href="../lend/detailPage.php?loanId=66811">增加生产设备，扩大生产规模</a>
													
													
												</div>
												<div class="clearfix">
													<div class="info">
														借款金额：<span class="f_red">￥200,000</span>
													</div>
													<div class="info">
														年利率<span class="spanML">：</span><span class="f_red">14.00
															%</span>
													</div>
													<div class="info">
														<div class="mL25">
															借款期限：<span class="f_red">12个月</span>
														</div>
													</div>
												</div>
												<div class="clearfix">
													<div class="info-2">
														信用等级：<a
															href="../lend/getUserCreditPage.php?userId=123729"
															target="_blank"><img
															src="../images/level/E.png"
															align="absmiddle"
															title="E"
															alt="E" /></a>
													</div>
													<div class="info-3">
														<div class="l">借款进度：</div>
														<div class="greenProcessBar progressBar l indexbar">
															
															
																<p>
																	100
																	%
																</p>
															
															<div class="p">
																<div class="c" style="width: 100.0%;"></div>
															</div>
														</div>
														<div class="l">
															<div class="mL50"> 
																<span>还需：<span class="f_red">0 元</span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										
									</div>
								</li>
							
								<li>
									<div class="biao clearfix">
										<div class='biao-l'>
											
											
												<a href="../lend/detailPage.php?loanId=66829">
													<img class="img_b" src="../images/loanType/dqzz.png" width="80px" height="80px" alt="额度内借款。在发一标" title="额度内借款。在发一标">
												</a>
											
										</div>
										
										
											<div class="biao-r">
												<div class="t" style="font-size: 12px; font-weight: bold;">
													<a href="../lend/detailPage.php?loanId=66829">额度内借款。在发一标</a>
													
													
												</div>
												<div class="clearfix">
													<div class="info">
														借款金额：<span class="f_red">￥3,000</span>
													</div>
													<div class="info">
														年利率<span class="spanML">：</span><span class="f_red">14.00
															%</span>
													</div>
													<div class="info">
														<div class="mL25">
															借款期限：<span class="f_red">3个月</span>
														</div>
													</div>
												</div>
												<div class="clearfix">
													<div class="info-2">
														信用等级：<a
															href="../lend/getUserCreditPage.php?userId=150146"
															target="_blank"><img
															src="../images/level/E.png"
															align="absmiddle"
															title="E"
															alt="E" /></a>
													</div>
													<div class="info-3">
														<div class="l">借款进度：</div>
														<div class="greenProcessBar progressBar l indexbar">
															
															
																<p>
																	100
																	%
																</p>
															
															<div class="p">
																<div class="c" style="width: 100.0%;"></div>
															</div>
														</div>
														<div class="l">
															<div class="mL50"> 
																<span>还需：<span class="f_red">0 元</span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										
									</div>
								</li>
							
								<li>
									<div class="biao clearfix">
										<div class='biao-l'>
											
											
												<a href="../lend/detailPage.php?loanId=66473">
													<img class="img_b" src="/upload/user/loan/20130424/b3a7bd6f-9443-46da-b77a-500e6ffdbddd.jpg" width="80px" height="80px" alt="认证已过期，提交认证" title="认证已过期，提交认证">
												</a>
											
										</div>
										
										
											<div class="biao-r">
												<div class="t" style="font-size: 12px; font-weight: bold;">
													<a href="../lend/detailPage.php?loanId=66473">认证已过期，提交认证</a>
													
													
												</div>
												<div class="clearfix">
													<div class="info">
														借款金额：<span class="f_red">￥3,000</span>
													</div>
													<div class="info">
														年利率<span class="spanML">：</span><span class="f_red">10.00
															%</span>
													</div>
													<div class="info">
														<div class="mL25">
															借款期限：<span class="f_red">3个月</span>
														</div>
													</div>
												</div>
												<div class="clearfix">
													<div class="info-2">
														信用等级：<a
															href="../lend/getUserCreditPage.php?userId=51419"
															target="_blank"><img
															src="../images/level/E.png"
															align="absmiddle"
															title="E"
															alt="E" /></a>
													</div>
													<div class="info-3">
														<div class="l">借款进度：</div>
														<div class="greenProcessBar progressBar l indexbar">
															
															
																<p>
																	100
																	%
																</p>
															
															<div class="p">
																<div class="c" style="width: 100.0%;"></div>
															</div>
														</div>
														<div class="l">
															<div class="mL50"> 
																<span>还需：<span class="f_red">0 元</span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										
									</div>
								</li>
							
								<li>
									<div class="biao clearfix">
										<div class='biao-l'>
											
											
												<a href="../lend/detailPage.php?loanId=65813">
													<img class="img_b" src="/upload/user/profile/20121020/20a6a163-887e-4231-a69e-95369b5ca2df.jpg" width="80px" height="80px" alt="短期资金周转" title="短期资金周转">
												</a>
											
										</div>
										
										
											<div class="biao-r">
												<div class="t" style="font-size: 12px; font-weight: bold;">
													<a href="../lend/detailPage.php?loanId=65813">短期资金周转</a>
													
													
												</div>
												<div class="clearfix">
													<div class="info">
														借款金额：<span class="f_red">￥60,000</span>
													</div>
													<div class="info">
														年利率<span class="spanML">：</span><span class="f_red">23.90
															%</span>
													</div>
													<div class="info">
														<div class="mL25">
															借款期限：<span class="f_red">3个月</span>
														</div>
													</div>
												</div>
												<div class="clearfix">
													<div class="info-2">
														信用等级：<a
															href="../lend/getUserCreditPage.php?userId=138860"
															target="_blank"><img
															src="../images/level/HR.png"
															align="absmiddle"
															title="HR"
															alt="HR" /></a>
													</div>
													<div class="info-3">
														<div class="l">借款进度：</div>
														<div class="blueProgressBar progressBar l indexbar">
															
																<p>等待材料</p>
															
															
															<div class="p">
																<div class="c" style="width: 0.0%;"></div>
															</div>
														</div>
														<div class="l">
															<div class="mL50"> 
																<span>还需：<span class="f_red">60,000 元</span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										
									</div>
								</li>
							
								<li>
									<div class="biao clearfix">
										<div class='biao-l'>
											
											
												<a href="../lend/detailPage.php?loanId=65443">
													<img class="img_b" src="../images/loanType/hlcb.png" width="80px" height="80px" alt="积累信用" title="积累信用">
												</a>
											
										</div>
										
										
											<div class="biao-r">
												<div class="t" style="font-size: 12px; font-weight: bold;">
													<a href="../lend/detailPage.php?loanId=65443">积累信用</a>
													
													
												</div>
												<div class="clearfix">
													<div class="info">
														借款金额：<span class="f_red">￥5,000</span>
													</div>
													<div class="info">
														年利率<span class="spanML">：</span><span class="f_red">10.00
															%</span>
													</div>
													<div class="info">
														<div class="mL25">
															借款期限：<span class="f_red">3个月</span>
														</div>
													</div>
												</div>
												<div class="clearfix">
													<div class="info-2">
														信用等级：<a
															href="../lend/getUserCreditPage.php?userId=241678"
															target="_blank"><img
															src="../images/level/HR.png"
															align="absmiddle"
															title="HR"
															alt="HR" /></a>
													</div>
													<div class="info-3">
														<div class="l">借款进度：</div>
														<div class="blueProgressBar progressBar l indexbar">
															
																<p>等待材料</p>
															
															
															<div class="p">
																<div class="c" style="width: 0.0%;"></div>
															</div>
														</div>
														<div class="l">
															<div class="mL50"> 
																<span>还需：<span class="f_red">5,000 元</span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										
									</div>
								</li>
							
								<li>
									<div class="biao clearfix">
										<div class='biao-l'>
											
											
												<a href="../lend/detailPage.php?loanId=66825">
													<img class="img_b" src="/upload/user/loan/20130425/ac1745a9-5d30-4f7c-b269-1d114b190d95.jpg" width="80px" height="80px" alt="房子需要装修" title="房子需要装修">
												</a>
											
										</div>
										
										
											<div class="biao-r">
												<div class="t" style="font-size: 12px; font-weight: bold;">
													<a href="../lend/detailPage.php?loanId=66825">房子需要装修</a>
													
													
												</div>
												<div class="clearfix">
													<div class="info">
														借款金额：<span class="f_red">￥50,000</span>
													</div>
													<div class="info">
														年利率<span class="spanML">：</span><span class="f_red">15.00
															%</span>
													</div>
													<div class="info">
														<div class="mL25">
															借款期限：<span class="f_red">12个月</span>
														</div>
													</div>
												</div>
												<div class="clearfix">
													<div class="info-2">
														信用等级：<a
															href="../lend/getUserCreditPage.php?userId=266061"
															target="_blank"><img
															src="../images/level/HR.png"
															align="absmiddle"
															title="HR"
															alt="HR" /></a>
													</div>
													<div class="info-3">
														<div class="l">借款进度：</div>
														<div class="blueProgressBar progressBar l indexbar">
															
																<p>等待材料</p>
															
															
															<div class="p">
																<div class="c" style="width: 0.0%;"></div>
															</div>
														</div>
														<div class="l">
															<div class="mL50"> 
																<span>还需：<span class="f_red">50,000 元</span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										
									</div>
								</li>
							
								<li>
									<div class="biao clearfix">
										<div class='biao-l'>
											
											
												<a href="../lend/detailPage.php?loanId=66195">
													<img class="img_b" src="/upload/user/profile/20130420/be4bd88a-d916-4156-ad87-4dfb223594d3.jpg" width="80px" height="80px" alt="装修，有借有还，再借不难" title="装修，有借有还，再借不难">
												</a>
											
										</div>
										
										
											<div class="biao-r">
												<div class="t" style="font-size: 12px; font-weight: bold;">
													<a href="../lend/detailPage.php?loanId=66195">装修，有借有还，再借不难</a>
													
													
												</div>
												<div class="clearfix">
													<div class="info">
														借款金额：<span class="f_red">￥40,000</span>
													</div>
													<div class="info">
														年利率<span class="spanML">：</span><span class="f_red">15.00
															%</span>
													</div>
													<div class="info">
														<div class="mL25">
															借款期限：<span class="f_red">12个月</span>
														</div>
													</div>
												</div>
												<div class="clearfix">
													<div class="info-2">
														信用等级：<a
															href="../lend/getUserCreditPage.php?userId=124233"
															target="_blank"><img
															src="../images/level/HR.png"
															align="absmiddle"
															title="HR"
															alt="HR" /></a>
													</div>
													<div class="info-3">
														<div class="l">借款进度：</div>
														<div class="blueProgressBar progressBar l indexbar">
															
																<p>等待材料</p>
															
															
															<div class="p">
																<div class="c" style="width: 0.0%;"></div>
															</div>
														</div>
														<div class="l">
															<div class="mL50"> 
																<span>还需：<span class="f_red">40,000 元</span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										
									</div>
								</li>
							
						
					</ul>
				</div>
				<div class="bt"></div>
			</div>
		</div>
		<div class="right">
			

<div class="layout-box">
	

<div class="gray_title clearfix">
	<div class="l">理财计划</div>
</div>
<div class="cont clearfix" style="padding: 0;position:relative;height:168px;">
	
	<div class="h5"></div>
	
		<div class="clearfix" style="margin-left: 10px;position:relative;">
			
			
				<div class="clearfix" style="position:relative; z-index:99;">
					<div style="float: left; width: 160px;">
						
						
							<a href="/financeplan/listPlan!detailPlan.php?financePlanId=18">
								<img class="img_b" src="/upload/admin/financeplan/d4ce9644-e727-47da-a4f7-c86f27329c43.jpg " width="160px" height="80px" alt="优选理财计划0018期" title="优选理财计划0018期 ">
							</a>
						
					</div>
					<div style="float:left; width:160px;_width:150px; font-weight:bold;color:#425F9D;margin-top: 15px;text-align:center">
						<p style="font-size: 14px;">
							<a href="/financeplan/listPlan!detailPlan.php?financePlanId=18"> 优选理财计划0018期</a>
						</p>
						<p>
							总额度：￥15,000,000
						</p>
					</div>
				</div>
				<div class="clearfix" style="width: 322px; height: 30px; line-height: 30px;">
					<div style="float: left">
						预期收益：<span class="f_red"> 12%-14% / 年</span>
					</div>
					<div style="margin-left: 30px; float: left">
						加入条件：<span class="f_red"> ￥10,000
							起
						</span>
					</div>
				</div>
				<div class="clearfix" style="width: 322px; height: 25px; line-height: 25px;margin-top:5px">
					<div class="l">申请进度：</div>
					<div class=" blueProgressBar progressBar l indexbar "  style="width: 248px; background: url('/theme/default/images/lang_progressbarbg.png') 0 0 no-repeat;">
						<div class="p" style="width:240px;">
							<p title="申请进度" style="position:absolute; z-index:110; left:50%; margin-left:-20px; width:40px;">33%</p>
							
							<div class="c" title="投标进度" style="position:absolute;z-index:99;left:1px;float:left;width: 13.77%; background:url('/theme/default/images/deepgreenprogressBarBg.png') repeat-x;"></div>		
							
							<div class="c" title="申请进度" style="position:absolute;left:1px;float:left;width: 32.87%; background:url('/theme/default/images/greenprogressBarBg.png') repeat-x;"></div>
						</div>
					</div>
				</div>
			
			
		</div>
	
	
</div>
<div class="top"></div>
    <div class="gray_title clearfix">
        <div class="l">网站公告</div>
        <div class="r">
            <div style="vertical-align: middle;_padding: 8px 0;">
                <span style="font-weight: normal;">
                    <a href="../indexRight.php?currentPage=1&type=notice"> 更多</a>
                </span>
                <span><img src="../images/more.gif" align="absmiddle" alt="更多" style="" title="更多"/></span>
            </div>
        </div>
    </div>
    <div class="cont clearfix">
        <ul style="list-style: url(../images/li.gif) inside">
            
            
                
                    <li style="padding:2px 0;">
                        <span style="*padding-left:5px;_padding-left:5px"><a href="../index/noticeDetail.php?noticeId=176">
                                
						        
						    敬请广大用户警惕冒用人人贷名义的不法中介       
						     
                        </a></span>
                    </li>
                
                    <li style="padding:2px 0;">
                        <span style="*padding-left:5px;_padding-left:5px"><a href="../index/noticeDetail.php?noticeId=175">
                                
						        
						    祈福雅安，心系灾区       
						     
                        </a></span>
                    </li>
                
                    <li style="padding:2px 0;">
                        <span style="*padding-left:5px;_padding-left:5px"><a href="../index/noticeDetail.php?noticeId=174">
                                
						   江苏、四川、重庆三地可通过互联网查询个人征. . .      
						        
						     
                        </a></span>
                    </li>
                
                    <li style="padding:2px 0;">
                        <span style="*padding-left:5px;_padding-left:5px"><a href="../index/noticeDetail.php?noticeId=173">
                                
						        
						    优选理财计划收益处理方式调整公告       
						     
                        </a></span>
                    </li>
                
                    <li style="padding:2px 0;">
                        <span style="*padding-left:5px;_padding-left:5px"><a href="../index/noticeDetail.php?noticeId=172">
                                
						        
						    因4月12日网络调试网站暂停访问的公告       
						     
                        </a></span>
                    </li>
                
            
        </ul>
    </div>
    <div class="top">
    </div>
</div>
<div class="layout-box">
    <div class="gray_title clearfix">
        <div class="l">成功案例</div>
        <div class="r">
            <div style="vertical-align: middle;_padding: 8px 0;">
                <span style="font-weight: normal;"><a href="../lend/lendPage.php?id=success_biao_list"> 更多 </a> </span>
                <span><img width="10" height="10" src="../images/more.gif" align="absmiddle" alt="更多" title="更多"/></span>
            </div>
        </div>
    </div>
    <div class="cont clearfix">
        
               
         <div id="examIndex">
			<ul>
			
    			<li> 
    				 <div class="mtop5"> <a href="lend/detailPage.php?loanId=66215" target="_blank">
						        
						        
						    买房用钱       
						      
    				 </a> </div>
                     <div class="l f_l" style="width:80px">￥8,000</div>
                     <div class="l f_c" style="width:70px">15.00%</div>
                     <div class="l f_c" style="width:70px">24个月</div>
                     <div class="l f_r" style="width:80px">[2013-04-25]</div>	
    			</li> 
    		 
    			<li> 
    				 <div class="mtop5"> <a href="lend/detailPage.php?loanId=66816" target="_blank">
						        
						        
						    大额消费买车       
						      
    				 </a> </div>
                     <div class="l f_l" style="width:80px">￥62,000</div>
                     <div class="l f_c" style="width:70px">13.50%</div>
                     <div class="l f_c" style="width:70px">36个月</div>
                     <div class="l f_r" style="width:80px">[2013-04-25]</div>	
    			</li> 
    		 
    			<li> 
    				 <div class="mtop5"> <a href="lend/detailPage.php?loanId=66815" target="_blank">
						        
						        
						    新房装修       
						      
    				 </a> </div>
                     <div class="l f_l" style="width:80px">￥30,400</div>
                     <div class="l f_c" style="width:70px">13.50%</div>
                     <div class="l f_c" style="width:70px">36个月</div>
                     <div class="l f_r" style="width:80px">[2013-04-25]</div>	
    			</li> 
    		 
    			<li> 
    				 <div class="mtop5"> <a href="lend/detailPage.php?loanId=66814" target="_blank">
						        
						        
						    老家房屋装修       
						      
    				 </a> </div>
                     <div class="l f_l" style="width:80px">￥38,000</div>
                     <div class="l f_c" style="width:70px">13.50%</div>
                     <div class="l f_c" style="width:70px">36个月</div>
                     <div class="l f_r" style="width:80px">[2013-04-25]</div>	
    			</li> 
    		 
    			<li> 
    				 <div class="mtop5"> <a href="lend/detailPage.php?loanId=66813" target="_blank">
						        
						        
						    家里购置第二套房       
						      
    				 </a> </div>
                     <div class="l f_l" style="width:80px">￥62,000</div>
                     <div class="l f_c" style="width:70px">13.50%</div>
                     <div class="l f_c" style="width:70px">36个月</div>
                     <div class="l f_r" style="width:80px">[2013-04-25]</div>	
    			</li> 
    		 
    			<li> 
    				 <div class="mtop5"> <a href="lend/detailPage.php?loanId=66812" target="_blank">
						        
						        
						    资金周转       
						      
    				 </a> </div>
                     <div class="l f_l" style="width:80px">￥47,400</div>
                     <div class="l f_c" style="width:70px">13.50%</div>
                     <div class="l f_c" style="width:70px">36个月</div>
                     <div class="l f_r" style="width:80px">[2013-04-25]</div>	
    			</li> 
    		 
    			<li> 
    				 <div class="mtop5"> <a href="lend/detailPage.php?loanId=66810" target="_blank">
						        
						        
						    老家房屋装修       
						      
    				 </a> </div>
                     <div class="l f_l" style="width:80px">￥41,200</div>
                     <div class="l f_c" style="width:70px">13.20%</div>
                     <div class="l f_c" style="width:70px">24个月</div>
                     <div class="l f_r" style="width:80px">[2013-04-25]</div>	
    			</li> 
    		 
    			<li> 
    				 <div class="mtop5"> <a href="lend/detailPage.php?loanId=66809" target="_blank">
						        
						        
						    私企员工买车       
						      
    				 </a> </div>
                     <div class="l f_l" style="width:80px">￥38,000</div>
                     <div class="l f_c" style="width:70px">13.50%</div>
                     <div class="l f_c" style="width:70px">36个月</div>
                     <div class="l f_r" style="width:80px">[2013-04-25]</div>	
    			</li> 
    		 	
    	   </ul>
         </div>
        
    </div>
    <div class="top"></div>
</div>
<div class="layout-box">
    <div class="gray_title">
        <div class="l">人人贷故事</div>
        <div class="r">
            <div style="vertical-align: middle;_padding: 8px 0;">
                <span style="font-weight: normal;"><a href="successCases.php?"> 更多</a></span>
                <span><img width="10" height="10" src="../images/more.gif" align="absmiddle" alt="更多" title="更多"/></span>
            </div>
        </div>
    </div>
    <div class="cont rrdStory clearfix">
        <ul style="height:174px; overflow:hidden;">
            
            
                
                    <li>
                        <div class="clearfix">
                            <div class="l">
                                <div style="float: left; width: 70px;">
                                    
                                    
                                        <img alt="小生意主在人人贷的借款经历"  width="64px" height="64px" class="img_b" style="vertical-align: middle;" src="/upload/user/profile/20110712/d02fa1a4-0398-4809-8e6f-366024717fd9.jpg" title="小生意主在人人贷的借款经历"/>
                                    
                                </div>
                            </div>
                            <div class="r" style="width:225px">
                                <div style="line-height: 22px;" class="b"><a href="successCasesDetail.php?recommendLoanId=8">
                                        
								        
								    小生意主在人人贷的借款经历       
								 
								</a></div>
                                <div class="indexStory">
                                        
								                                     还了借款里的第一笔以后，还挺有感触的，借款成. . .      
								        
								 
                                  
                                </div>
                            </div>
                        </div>
                    </li>        
                
                    <li>
                        <div class="clearfix">
                            <div class="l">
                                <div style="float: left; width: 70px;">
                                    
                                    
                                        <img alt="甘南化旦尖措孤儿学校行"  width="64px" height="64px" class="img_b" style="vertical-align: middle;" src="/upload/user/loan/20101117/ad1ebcad-ae57-4598-ac7e-7bb67904740c.jpg" title="甘南化旦尖措孤儿学校行"/>
                                    
                                </div>
                            </div>
                            <div class="r" style="width:225px">
                                <div style="line-height: 22px;" class="b"><a href="successCasesDetail.php?recommendLoanId=5">
                                        
								        
								    甘南化旦尖措孤儿学校行       
								 
								</a></div>
                                <div class="indexStory">
                                        
								                                      这是买到相机的第二个月，我用极低的利率在人. . .      
								        
								 
                                  
                                </div>
                            </div>
                        </div>
                    </li>        
                
                    <li>
                        <div class="clearfix">
                            <div class="l">
                                <div style="float: left; width: 70px;">
                                    
                                    
                                        <img alt="80后创业，网络借贷助力，实..."  width="64px" height="64px" class="img_b" style="vertical-align: middle;" src="/upload/user/loan/20110711/d9c883aa-6323-4464-a611-243cdc21801e.jpg" title="80后创业，网络借贷助力，实..."/>
                                    
                                </div>
                            </div>
                            <div class="r" style="width:225px">
                                <div style="line-height: 22px;" class="b"><a href="successCasesDetail.php?recommendLoanId=7">
                                        
								   80后创业，网络借贷助力，实. . .      
								        
								 
								</a></div>
                                <div class="indexStory">
                                        
								                                     一个坚持自己梦想的女生，在人人贷得到了创业资. . .      
								        
								 
                                  
                                </div>
                            </div>
                        </div>
                    </li>        
                
            
        </ul>
        <ul>
            <li>
              <div class="clearfix">
                 <div class="l">
                    <div style="float: left; width: 70px;"><img width="64px" height="64px" title="甘南化旦尖措孤儿学校行" src="/upload/user/profile/20101017/borrow03.jpg" style="vertical-align: middle;" class="img_b" alt="理财者老吴"></div>
                 </div>
                 <div style="width:225px" class="r">
                    <div class="b" style="line-height: 22px;"><a href="/guarantee/lenderStory.php#go_lender03">理财者老吴</a></div>
                    <div class="indexStory">我算是金融业从业人员，最早对人人贷这种人与人之间特别的借贷方式非常感兴趣  ...</div>
                 </div>
             </div>
           </li>
        </ul>
    </div>
    <div class="top">
    </div>
</div>
<div class="layout-box">
    <div class="gray_title">
        <div class="l">使用技巧</div>
        <div class="r">
            <div style="vertical-align: middle;_padding: 8px 0;">
                <span style="font-weight: normal;"><a href="../indexRight.php?currentPage=1&type=usageTip">更多</a></span>
                <span><img width="10" height="10" src="../images/more.gif" align="absmiddle" alt="更多" title="更多"/></span>
            </div>
        </div>
    </div>
    <div class="cont clearfix" style="padding:5px 15px; height:144px">
        <ul>
            
            
                
                    <li class="l dot" style="width: 145px; padding: 2px;"> · <a href="index/usageTipDetail.php?usageTipId=2">
                             
					        
					    分散投资降低风险       
					 
                   
                    
                    </a></li>
                
                    <li class="l dot" style="width: 145px; padding: 2px;"> · <a href="index/usageTipDetail.php?usageTipId=3">
                             
					        
					    投资策略       
					 
                   
                    
                    </a></li>
                
                    <li class="l dot" style="width: 145px; padding: 2px;"> · <a href="index/usageTipDetail.php?usageTipId=11">
                             
					        
					    借入者注意事项       
					 
                   
                    
                    </a></li>
                
                    <li class="l dot" style="width: 145px; padding: 2px;"> · <a href="index/usageTipDetail.php?usageTipId=12">
                             
					        
					    提高借款成功率       
					 
                   
                    
                    </a></li>
                
                    <li class="l dot" style="width: 145px; padding: 2px;"> · <a href="index/usageTipDetail.php?usageTipId=9">
                             
					        
					    借款失败原因       
					 
                   
                    
                    </a></li>
                
                    <li class="l dot" style="width: 145px; padding: 2px;"> · <a href="index/usageTipDetail.php?usageTipId=4">
                             
					        
					    新手上路       
					 
                   
                    
                    </a></li>
                
                    <li class="l dot" style="width: 145px; padding: 2px;"> · <a href="index/usageTipDetail.php?usageTipId=6">
                             
					        
					    审核之借入者篇       
					 
                   
                    
                    </a></li>
                
                    <li class="l dot" style="width: 145px; padding: 2px;"> · <a href="index/usageTipDetail.php?usageTipId=5">
                             
					        
					    审核之借出者篇       
					 
                   
                    
                    </a></li>
                
                    <li class="l dot" style="width: 145px; padding: 2px;"> · <a href="index/usageTipDetail.php?usageTipId=8">
                             
					        
					    如何判断借款列表       
					 
                   
                    
                    </a></li>
                
                    <li class="l dot" style="width: 145px; padding: 2px;"> · <a href="index/usageTipDetail.php?usageTipId=7">
                             
					        
					    选择借款列表       
					 
                   
                    
                    </a></li>
                
                    <li class="l dot" style="width: 145px; padding: 2px;"> · <a href="index/usageTipDetail.php?usageTipId=13">
                             
					        
					    无抵押贷款骗局       
					 
                   
                    
                    </a></li>
                
                    <li class="l dot" style="width: 145px; padding: 2px;"> · <a href="index/usageTipDetail.php?usageTipId=10">
                             
					        
					    其他借出技巧       
					 
                   
                    
                    </a></li>
                
            
        </ul>
    </div>
    <div class="bt">
    </div>
</div>
<script type="text/javascript">
    function getSuccessLoan(){
        $.ajax({
            url: "../lend/loanList.php?id=success_biao_list&pageIndex=1",
            dataType: 'html',
            error: function(response){
                if (hrefHack(response))
                    return;
            },
            success: function(response){
                if (hrefHack(response))
                    return;
                $("#b_content").php(response);
            },
            beforeSend: function(){
                $("#b_content").php($("#loading").php());
            }
        })
    }
    $(function(){var a=function(){this.h=50,this.speed=50,this.ul=$("#examIndex ul"),this.timer=null,this.isPasue=!1,this.isLoop=!0,this.play=function(){if(this.ul[0]==undefined||this.ul.find("li").length<=5)return;var a=this.ul.find("li").first(),b=this.ul.find("li").last(),c=document.createElement("li");c.style.height="0px",a.before(c);var d=b.php(),e=0,f=this.h,g=this;g.timer=setInterval(function(){if(g.isPasue)return!1;c.style.height=e+"px",e+=4,e>=f&&(clearInterval(g.timer),b.remove(),$(c).css("opacity",0),$(c).php(d).animate({opacity:1}),g.isLoop&&setTimeout(function(){g.play()},3e3))},this.speed)},this.pause=function(){this.isPasue=!0},this.replay=function(){this.isPasue=!1}},b=new a;b.play(),$("#examIndex ul").hover(function(){b.pause()},function(){b.replay()})})
</script>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>
        </div>
    </body>
</html>
