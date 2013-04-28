<?php
require("../loading.php");
$menuid=2;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            
                个人消费 - 购买电器
            
             借款详情- 人人贷
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
<?php require("../header.php"); ?><div id="content" class="clearfix">
	<div class="detail clearfix">
		<div class="layout-box">
			<div class="title clearfix">
				<div style="float: left">借款详情</div>
				<div style="float: right">
					<a href="../lend/lendPage.php">
						<span style="color: #fff; font-size: 12px">返回借款列表</span>
					</a>
				</div>
			</div>
			<div class="cont clearfix" style="background: #FAFBFE;">
				<div class="h5"></div>
				<div class="left">
					<div class="clearfix">
						<div class="detail-l">
							<div style="width: 196px; height: 196px">
								
									<img class="img_b" src="../images/loanType/grxf.png" width="196px"
										height="196px" alt="购买电器" title="购买电器">
								
								
							</div>
							<div class="h5"></div>
							<div class="h5"></div>
							<div class="h5"></div>
							<div align="center">
								<a href="../../../loanDetails.php">借款详情说明</a>
							</div>
							<p class="center" style="margin: 10px 0; padding-left: 25px">
								<!-- Baidu Button BEGIN -->
							<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
								<a class="bds_qzone"></a> <a class="bds_tsina"></a> <a
									class="bds_tqq"></a> <a class="bds_renren"></a> <span
									class="bds_more">更多</span> <a class="shareCount"></a>
							</div>
							<script type="text/javascript" id="bdshare_js"
								data="type=tools&amp;uid=514500"></script>
							<script type="text/javascript" id="bdshell_js"></script>
							<script type="text/javascript">
                                document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?t=" + new Date().getHours();
                            </script>
							<!-- Baidu Button END -->
							</p>
						</div>
						<div class="detail-r">
							<div class="layout-box">
								<div class="detail_title_bg clearfix">
									<div class="detail_title" style="line-height:40px;_padding-top:8px;">
										购买电器
										
										
										
										<img src="/images/jgdb2.png" alt="实地认证标" align="absmiddle" style="margin: 0 0 0 10px" />
										
										
									</div>
									<div class="detail_number f_gray">借贷编号：66987</div>
								</div>
								<div class="cont">
									<div class="clearfix">
										<div class="l">
											<p style="padding: 10px 0 5px 0">
												借款金额：<span class="f_red f_18">
														￥38,000
													   </span>
											</p>
											<p style="padding: 10px 0 0 0">
												借款年利率：<span class="f_red">13.50%</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;借款期限：36个月
											</p>
										</div>
										<div class="r">
											<div style="text-align: center; margin: 5px 0; height: 52px">
												
												
													
													
														
														
														
														
														
														
															<img src="../theme/default/images/load_in_progress.png"
																width="142px" height="58px" alt="" />
														
														
														
														
														
														
													
												
											</div>
											<div class="f_gray center">最低投标金额50元</div>
										</div>
									</div>
									<div class="clearfix" style="margin: 5px 0 0 0">
										<div style="border-bottom: 1px dotted #5A848D; margin: 10px 0">
										</div>
										
										
                                        <div style="float:left">还款进度：</div>
                                        <div class="blueProgressBar progressBar" style="float:left;background:url('/theme/default/images/progress_bg2.png') no-repeat">
                                            <div class="p">
                                            	<div class="c" style="width: 0.0%;background:url('/theme/default/images/progressBarBg2.png') repeat-x"></div>
                                           	</div>
                                        </div>
                                        <div style="float: left; width: 190px; height: 30px; line-height: 30px; padding-left:30px">
                                        已还本息：<span class="f_red">0.0元</span>
                                        </div>
                                        <div style="float: left; width: 160px; height: 30px; line-height: 30px">
                                        待还本息：<span class="f_red">46423.49元</span>
                                        </div>
                                        
                                        
                                        
                                        
									</div>
									<div class="clearfix">
										<div
											style="float: left; width: 160px; height: 30px; line-height: 30px">
											还款周期：
											
                                               按月还款
                                            
											
										</div>
										<div
											style="float: left; width: 160px; height: 30px; line-height: 30px">
											还款方式：
											
												等额本息
											
											
										</div>
										<div
											style="float: left; width: 160px; height: 30px; line-height: 30px">
											月还本息：<span class="f_red">1,289.54元</span>
										</div>
									</div>
									<div class="clearfix">
										<div
											style="float: left; width: 160px; height: 30px; line-height: 30px">
											借款用途： 个人消费</div>
										<div
											style="float: left; width: 160px; height: 30px; line-height: 30px">
											保障范围： 本金及利息</div>
										<div style="float:left; width:160px;  height:30px; line-height:30px">
											提前还款费率：<span class="f_red">0.00%</span>
                                        </div>
									</div>
									<div class="clearfix">
										<div
											style="float: left; width: 160px; height: 30px; line-height: 30px">
											
											剩余时间：
											
											
                                                0天0时0分
                                            
										</div>
										<div style="float: right; line-height: 30px" id="addFav">
											
										</div>
									</div>
								</div>
								<div class="bot">
									<b class="cor-l"></b> <b class="cor-r"></b>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="right">
					<div class="layout-box">
						<div class="top">
							<b class="cor-l"></b> <b class="cor-r"></b>
						</div>
						<div class="cont"
							style="background: #FFF; height: 229px; height: 238px; _height: 245px">
							<div
								style="color: #003B85; font-size: 13px; font-weight: 600; text-align: center; padding: 0 0 5px 0">
								借款人档案</div>
							<div style="text-align: center">
								<div style="height: 64px">
									
									
										<a
											href="../lend/userHomePage.php?userId=277054"YangCJ_063030459.yx><img
											class="img_b"
											src="../theme/default/images/default_user_img.png"
											width="64px" height="64px" alt="YangCJ_063030459.yx"
											title="YangCJ_063030459.yx"></a>
									
								</div>
								<p style="color: #1076D5">
									<a
										href="../lend/userHomePage.php?userId=277054">YangCJ_063030459.yx
									</a>
								</p>
							</div>
							<div class="clearfix">
								<p>所在地：福建</p>
								<p>
									信用等级：<a
										href="../lend/getUserCreditPage.php?userId=277054"
										target="_blank"
										title="A"><img
										src="../images/level/A.png"
										align="absmiddle"
										alt="A"
										title="A" /></a>
								</p>
								
							</div>
						</div>
						<div class="bot">
							<b class="cor-l"></b> <b class="cor-r"></b>
						</div>
					</div>
				</div>
			</div>
			<div class="bot">
				<b class="cor-l"></b> <b class="cor-r"></b>
			</div>
		</div>
	</div>
	<div class="h5"></div>

	<div class="layout-box">
		<div class="clearfix">
			<ul>
				<li class="right_tab_select" id="borrowerInfo"
					onclick="getDetail(this,66987)"
					style="float: left; cursor: pointer; padding: 0px 1px;">借入者信用信息</li>
				
					<li class="right_tab_unselect" id="repayDetail"
						onclick="getDetail(this,66987)"
						style="float: left; cursor: pointer; padding: 0px 1px;">还款详情</li>
					<li class="right_tab_unselect" id="lenderInfo"
						onclick="getDetail(this,66987)"
						style="float: left; cursor: pointer; padding: 0px 1px;">债权人信息</li>
				
				
				
				
			</ul>
		</div>
		<div class="tab_interval_green"></div>
		<div class="cont" id="d_content"></div>
		<div class="top"></div>
	</div>

	<div class="layout-box">
		<div class="clearfix">
			<ul>
				<li class="right_tab_select">审核记录</li>
			</ul>
		</div>
		<div class="tab_interval_green"></div>
		<div class="cont">
			<div
				style="background: none repeat scroll 0% 0% rgb(242, 242, 242); width: 875px; border: 1px solid rgb(212, 212, 212); padding: 10px 0pt 10px 30px; margin: 0pt auto;">
				人人贷及合作机构将以客观、公正的原则，最大程度地核实借入者信息的真实性，但不保证审核信息100%真实。如果借入者长期逾期，其提供的信息将被公布。
			</div>
			<div style="margin: 10px">
				<table border="1"
					style="border: 1px solid rgb(204, 204, 204); border-spacing: 1px; width: 600px;">
					<tbody>
						<tr style="height: 30px;">
							<td width="45%" style="background: #F6F6F6;">
								<div align="center">审核项目</div>
							</td>
							<td width="15%" style="background: #F6F6F6;">
								<div align="center">状态</div>
							</td>
							<td width="10%" style="background: #F6F6F6;">
								<div align="center">
									通过时间
									
								</div>
							</td>
						</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="left" style="padding: 0 5px;">身份证认证</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										<img src="../images/answer_success.jpg" alt="通过">
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26
									</div>
								</td>
							</tr>
						
						
						

						
							<tr style="height: 30px;">
								<td>
									<div align="left" style="padding: 0 5px;">信用报告</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										<img src="../images/answer_success.jpg" alt="通过">
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26
									</div>
								</td>
							</tr>
						
						
						

						
							<tr style="height: 30px;">
								<td>
									<div align="left" style="padding: 0 5px;">工作认证</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										<img src="../images/answer_success.jpg" alt="通过">
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26
									</div>
								</td>
							</tr>
						
						
						

						
							<tr style="height: 30px;">
								<td>
									<div align="left" style="padding: 0 5px;">收入认证</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										<img src="../images/answer_success.jpg" alt="通过">
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26
									</div>
								</td>
							</tr>
						
						
						

						
						
						

						
						
						

						
						
						

						
						
						

						
						
						


						
						
						


						
						
						

						
						
						

						
						
						

						
						
						

						
						
						
						
						
						<tr style="height: 30px;">
							<td>
								<div align="left" style="padding: 0 5px;">
									<a href="/event/youxin/index.php" target="_blank">实地认证--友众信业商务顾问（北京）有限公司</a>
								</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									<img src="../images/answer_success.jpg" alt="通过">
								</div>
							</td>
							<td></td>
						</tr>
						
					</tbody>
				</table>
			</div>
		</div>
		<div class="top"></div>
	</div>
	<div class="layout-box">
		<div class="clearfix">
			<ul>
				
					<li class="right_tab_select">实地认证介绍</li>
				
				
			</ul>
		</div>
		<div class="tab_interval_green"></div>
		<div class="cont">
			<div style="margin: 10px">
				<p>此次借款用于借款人购买电器。该借款人为公司员工，借款人公司位于福建厦门海沧区，主要从事客车出口，公司200人左右。每月有稳定流水。上述信息已经实地认证方友众信业公司考察认证。同时，经审核借款人所提供资料真实有效，符合人人贷的借款审核标准。</p>
				<br />
			</div>
		</div>
		<div class="top"></div>
	</div>
	<div class="layout-box">
		<div class="clearfix">
			<ul>
				<li class="right_tab_select">留言板</li>
			</ul>
		</div>
		<div class="tab_interval_green"></div>
		<div class="cont">
			<div class="h10"></div>
			
			
				<p align="center">仅通过实名绑定的<a href="/borrow/beBorrowerPage.php">借款人</a>和<a href="../lend/beLender.php">理财人</a>才能留言</p>
			
			<div class="h20"></div>
			<div id="comments"></div>
		</div>
		<div class="top"></div>
	</div>
	<div class="layout-box">
		<div class="clearfix">
			<ul>
				<li class="right_tab_select">投标记录</li>
			</ul>
		</div>
		<div class="tab_interval_green"></div>
		<div class="cont">
			<div style="margin: 10px">
				<div style="display: block; height: 50px">
					<div style="float: left; width: 230px;">
						目前投标总额：<span class="f_red">￥38,000</span>
					</div>
					<div style="float: left; width: 230px">
						剩余投标金额：<span class="f_red">￥0</span>
					</div>
					<div style="float: left; width: 230px">
						剩余投标时间： <span class="f_red">  
                                0天0小时0分
                            
						</span>
					</div>
					<div style="float: right; width: 141px;">
						
												
													
													
														
														
														
														
														
														
															<img src="../theme/default/images/load_in_progress.png"
																width="142px" height="58px" alt="" />
														
														
														
														
														
														
													
												
					</div>
				</div>
				<table border="1"
					style="border: 1px solid rgb(204, 204, 204); border-spacing: 1px; width: 100%;">
					<tbody>
						<tr style="height: 30px;">
							<td width="20%" style="background: #F6F6F6;">
								<div align="center">投标人</div>
							</td>
							<td width="20%" style="background: #F6F6F6;">
								<div align="center">投标金额</div>
							</td>
							<td width="20%" style="background: #F6F6F6;">
								<div align="center">投标时间</div>
							</td>
						</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=116314">水中一仙</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										4,000
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=229239">shen410782</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=273963">zwmzwm</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										3,000
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=250838">gh4105</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										2,500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=271076">雪呼</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										1,000
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=276570">bullsn</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										2,500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=259340">jialily</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=214801">jiaomingbao</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=128861">shirleytsang</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=181349">沈建</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=204363">16865xiao</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										1,500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=275641">王冠2012狂想曲</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=249684">杰里科</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=225455">wangguoli201388</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=103372">果果，，</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=244817">虹口太郎</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=273116">fjciq</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										2,500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=104656">人生如水</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										1,500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=141232">xmdy8080</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										1,000
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=276644">snowsmile1211</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										1,500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=84559">21cn</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=202326">yourtruly</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=275686">智富者</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=441">Allen_Gu</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=266605">挥挥手而已</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										2,000
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=120619">雨中竹</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										3,500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=113476">redstarzhao</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=159">Alex</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										2,000
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=11119">黑巧克力</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=231032">hongbeilei</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										1,000
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						
							<tr style="height: 30px;">
								<td>
									<div align="center" style="padding: 0 5px;">
										
                                        <a href="../lend/userHomePage.php?userId=260475">wxl10002009</a>
                                        ( <a href="../financeplan/listPlan!detailPlan.php?financePlanId=18">理18</a> )
                                        
                                        
									</div>
								</td>
								<td>
									<div align="right" style="padding: 0 130px 0px 0px; color: red">
										￥
										500
									</div>
								</td>
								<td>
									<div align="center" style="padding: 0 5px;">
										2013-04-26 16:32
									</div>
								</td>
							</tr>
						

					</tbody>
				</table>
			</div>
		</div>
		<div class="bot">
			<b class="cor-l"></b> <b class="cor-r"></b>
		</div>
	</div>
</div>
<div id="reportDiv" style="display: none;">
	<div class="layout-box" style="width: 620px;">
		<div class="gray_title f_14">举报用户</div>
		<div class="cont f_dgray">
			<div class="tips" style="width: 450px">
				<span class="f_red">请如实举报，本举报为实名举报。</span>
			</div>
			<div class="clearfix" style="padding: 10px 0">
				<div class="l"
					style="width: 100px; text-align: right; padding-right: 10px">
					被举报用户：</div>
				<div class="l">YangCJ_063030459.yx</div>
			</div>
			<div class="clearfix" style="padding: 10px 0">
				<div class="l"
					style="width: 100px; text-align: right; padding-right: 10px">
					举报原因：</div>
				<div class="l">
					<input type="radio" name="reason" value="在其他网站有借款" checked>
					此用户在其他网站有借款：（请提供链接，用户名等）
				</div>
			</div>
			<div class="clearfix" style="padding: 10px 0">
				<div class="l"
					style="width: 100px; text-align: right; padding-right: 10px">
					&nbsp;</div>
				<div class="l">
					<input type="radio" name="reason" value="乱发骚扰信息">
					此用户乱发骚扰信息：（请提供信息内容如站内信）
				</div>
			</div>
			<div class="clearfix" style="padding: 10px 0">
				<div class="l"
					style="width: 100px; text-align: right; padding-right: 10px">
					&nbsp;</div>
				<div class="l">
					<input type="radio" name="reason" value="冒用他人身份">
					此用户冒用他人身份：如照片，列表内容，身份信息，网站等
				</div>
			</div>
			<div class="clearfix" style="padding: 10px 0">
				<div class="l"
					style="width: 100px; text-align: right; padding-right: 10px">
					&nbsp;</div>
				<div class="l">
					<input type="radio" name="reason" value="有虚假信息">
					怀疑此人有虚假信息：（请提供理由，链接等）
				</div>
			</div>
			<div class="clearfix" style="padding: 10px 0">
				<div class="l"
					style="width: 100px; text-align: right; padding-right: 10px">
					&nbsp;</div>
				<div class="l">
					<input type="radio" name="reason" value="发表了不当语言或图片">
					其他/此用户发表了不当语言或图片：（请说明或提供链接）
				</div>
			</div>
			<div class="clearfix" style="padding: 10px 0; height: 90px">
				<div class="l"
					style="width: 100px; text-align: right; padding-right: 10px">
					举报内容：</div>
				<div class="l">
					<textarea name="content" id="res_content"
						style="width: 320px; height: 80px"></textarea>
				</div>
			</div>
			<div class="clearfix center" style="height: 30px">
				<input type="button" value="提交"
					onclick="reportGuy('277054','66987')"
					class="common_btn" />
			</div>
		</div>
		<div class="bot">
			<b class="cor-l"></b> <b class="cor-r"></b>
		</div>
	</div>
</div>
<div id="regDiv" style="disPlay: none">
	<img src="../images/bidAnonymous.png" width="600" height="500"
		border="0" usemap="#Map" />
	<map name="Map" id="Map">
		<area shape="rect" coords="223,133,368,163" href="../regPage.php" />
		<area shape="rect" coords="223,268,368,297"
			href="../loginPage.php?error=false" id="loginHref"/>
		<area shape="rect" coords="223,402,368,431" href="#"
			onclick="closedPage()" />
	</map>
	<script language="javascript">document.getElementById("loginHref").href = "../loginPage.php?error=false&returnUrl="+window.location.toString();</script>
</div>
<div id="znxDiv" style="display: none;">
	<div class="layout-box" style="width: 500px">
		<div class="gray_title f_14">发送站内消息</div>
		<div class="cont f_dgray">
			<form id="sendBoxForm" method="post">
				<div class="clearfix" style="padding: 10px 0">
					<div class="l"
						style="width: 100px; text-align: right; padding-right: 10px">
						接收用户：</div>
					<div class="l">
						YangCJ_063030459.yx <input type="hidden" name="receiver"
							id="receiver" value="YangCJ_063030459.yx">
					</div>
				</div>
				<div class="clearfix" style="padding: 10px 0; height: 90px">
					<div class="l"
						style="width: 100px; text-align: right; padding-right: 10px">
						内容：</div>
					<div class="l">
						<textarea name="comment" style="width: 320px; height: 100px"
							id="mail_content"></textarea>
					</div>
				</div>
				<div class="h10"></div>
				<div class="clearfix center" style="height: 30px">
					<input type="button" value="提交" onclick="sendInnerMail()"
						class="common_btn" />
				</div>
			</form>
		</div>
		<div class="bot">
			<b class="cor-l"></b> <b class="cor-r"></b>
		</div>
	</div>
</div>
<input type="hidden" id="loanid" value="66987">
<script type="text/javascript">
    var id = $("#loanid").val();
    $(function(){
        $.ajax({
            url: "../lend/loanCommentList.php?loanId="+id+"&pageIndex=1",
            dataType: 'html',
            timeout: 10000,
            error: function(){
                $("#comments").php($("#loadingFail").php());
            },
            success: function(response){
                $("#comments").php(response);
            },
            beforeSend: function(){
                $("#comments").php($("#loading").php());
            }
        });
    });

    function closedPage(){
        $("#closeBut").click();
    }

    $(function(){
    	$('.nyroModal').nyroModal();
        $.ajax({
            url: "../lend/getborrowerandlenderinfo.php?loanId="+id+"&id=borrowerInfo",
            dataType: 'html',
            timeout: 10000,
            error: function(){
                $("#d_content").php($("#loadingFail").php());
            },
            success: function(response){
                $("#d_content").php(response);
            },
            beforeSend: function(){
                $("#d_content").php($("#loading").php());
            }
        });
    });  
</script>



<div id="footer">
    <div class="footer_blue"></div>
    <div class="clearfix">
        <div id="footernav">
            <ul>
                <li class="p"><img src="/images/footer_k_03.gif"><ul><li><a href="/bbs/posts/list/1809.page">常见问题</a></li><li> <a href="/guarantee/aboutp2p.php?v=20130225"> 平台原理</a></li><li> <a href="/borrow/aboutBorrowPage.php"> 如何借款</a></li><li><a href="/lend/aboutFinancing.php">如何理财</a></li></ul></li>
                <li class="p"><img src="/images/footer_k_05.gif"><ul><li><a href="/guarantee/aboutUs.php#go_media">媒体报道</a></li><li><a href="/guarantee/aboutUs.php#go_contact">联系我们</a></li><li><a href="/guarantee/aboutUs.php#go_join_us">加入我们</a></li><li><a href="/guarantee/aboutUs.php#go_expert">专家顾问</a></li></ul></li>
                <li class="p"><img src="/images/footer_k_07.gif"><ul><li><a href="/guarantee/index.php">本金保障计划</a></li><li><a href="/guarantee/aboutlaws.php?v=20130225">政策法规</a></li><li><a href="/guarantee/details.php#go_zhb">隐私保护</a></li></ul></li>
                <li class="p" style="background:none"><img src="/images/footer_k_09.gif"><ul><li><a href="http://blog.sina.com.cn/u/1784647287">新浪博客</a></li><li><a href="http://t.sina.com.cn/renrendai">新浪微博</a></li><li>手机客户端</li><li><a href="/guarantee/sitemap.php">网站地图</a></li></ul></li>
            </ul>
        </div>
    </div>
    <div class="h10"></div>
    <div id="copy">
        <p><span style="color:#e39538">联系我们：service@renrendai.com</span><span style="color:#7D7E74; margin-left:20px;">人人贷商务顾问(北京)有限公司 </span><a style="margin-left:20px" href="/guarantee/icp.php">京ICP证 100953号</a></p>
        <p style="color:#7D7E74;">&copy; 2010 人人贷 All rights reserved</p>
    </div>
</div>

        </div>
    </body>
    <script type="text/javascript" src="/theme/default/js/kefu.js"></script>
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
</html>