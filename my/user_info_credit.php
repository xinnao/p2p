
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<script type="text/javascript" src="../theme/default/js/validate.js">
</script>
<style>
.user_info_box, .item_group, .tips {
width: 620px;
}
.user_info_box{width:620px;}
</style>

<!--我的主页 START-->


<!--我的主页 END-->
<!--借入管理 START-->




    
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<script type="text/javascript">
    window.onload = function(){
        if(document.getElementById("page")==null){
            document.body.style.display = "none";
            var url = location.href;
            var i = url.split("//")[1].indexOf("/");
            document.write("<div style=\"position: absolute;top: 50%;left: 50%;font-size: 12px;\"><img src='../images/loading.gif' style=\"vertical-align:middle;\"/>正在加载数据中...</div>");
            window.top.location.href = url.substring(0, i+7);
        }
    }
</script>
<div class='clearfix'>
	<ul>
		<li class="right_tab_select" id="credit_info" onclick="tabIt(this)">
			人人贷认证</li>
		<li class="right_tab_unselect" id="basic_credit_info"
			style="display: none" onclick="tabIt(this)">信用认证</li>
		<li class="right_tab_unselect" id="advance_credit_info"
			style="display: none" onclick="tabIt(this)">可选信用认证</li>
		<li class="right_tab_unselect" id="upload_credit_info"
			style="display: none" onclick="tabIt(this)">上传资料</li>
	</ul>
	<input type="hidden" name="li" id="li" value="">
</div>
<div class="tab_interval_green"></div>
<div class="layout-box">
	<div class="cont">
		<div id="credit_info_content" style="display: block">
			<div class="h20"></div>
			<div>
				<table width="620" align="center" border="1px" cellspacing="1px"
					class="credit">
					<tr class="title">
						<td colspan="8" class="f_14 b f_dgray">信用等级及对应信用分数</td>
					</tr>
					<tr>
						<td width="130px">信用等级</td>
						<td width="70px"><img src="../images/level/AA.png" alt="AA"
							title="AA"></td>
						<td width="70px"><img src="../images/level/A.png" alt="A"
							title="A"></td>
						<td width="70px"><img src="../images/level/B.png" alt="B"
							title="B"></td>
						<td width="70px"><img src="../images/level/C.png" alt="C"
							title="C"></td>
						<td width="70px"><img src="../images/level/D.png" alt="D"
							title="D"></td>
						<td width="70px"><img src="../images/level/E.png" alt="E"
							title="E"></td>
						<td width="70px"><img src="../images/level/HR.png" alt="HR"
							title="HR"></td>
					</tr>
					<tr class="white_bg">
						<td>信用分数</td>
						<td>160及以上</td>
						<td>
							159-145</td>
						<td>144-130
						</td>
						<td>129-120
						</td>
						<td>119-110
						</td>
						<td>109-100
						</td>
						<td>
							99-0</td>
					</tr>
				</table>
			</div>
			<div class="h20"></div>
			<div>
				<table width="620" align="center" border="1px" cellspacing="1px"
					class="credit">
					<tr class="title">
						<td colspan="4" class="f_14 b f_dgray">信用总分（等级）：20
							（HR）
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;信用额度：0
							
							( 可用额度：0 )
						</td>
					</tr>
					<tr class="title">
						<td width="100px">&nbsp;</td>
						<td width="340px">项目</td>
						<td width="75px">状态</td>
						<td width="75px">信用分数</td>
					</tr>
					<tr>
						<td>基本信息</td>
						<td class="item">
							<p>个人详细信息，工作信息</p>
						</td>
						<td class="f_gray"></td>
						<td class="white_bg"><span class="f_red">20</span>
							分</td>
					</tr>
					<tr>
						<td rowspan="4" class="white_bg b">必要信用认证</td>
						<td class="white_bg item">
							<p>身份证认证</p>
						</td>
						<td class="white_bg f_gray">
								<img src="../../images/credit_warning.png" width="32px"
									height="32px" alt="待完成" title="待完成" />
							    </td>
						<td rowspan="10" class="white_bg"><span class="f_red">0</span>
							分</td>
					</tr>
					<tr>
						<td class=" item">工作认证</td>
						<td class="f_gray">
								<img src="../../images/credit_warning.png" width="32px"
									height="32px" alt="待完成" title="待完成" />
							    </td>
					</tr>
					<tr>
						<td class="white_bg item">收入认证</td>
						<td class="white_bg f_gray">
								<img src="../../images/credit_warning.png" width="32px"
									height="32px" alt="待完成" title="待完成" />
							    </td>
					</tr>
					<tr>
						<td class="item">央行信用报告认证</td>
						<td><span class="f_gray"> 
									<img src="../../images/credit_warning.png" width="32px"
										height="32px" alt="待完成" title="待完成" />
								    
						</span></td>
					</tr>
					<tr>
						<td rowspan="9" class="item">可选信用认证</td>
						<td class="white_bg item">房产认证</td>
						<td class="white_bg f_gray">
								<img src="../../images/credit_warning.png" width="32px"
									height="32px" alt="待完成" title="待完成" />
							    </td>
					</tr>
					<tr>
						<td class="item">技术职称认证</td>
						<td class="f_gray">
								<img src="../../images/credit_warning.png" width="32px"
									height="32px" alt="待完成" title="待完成" />
							    </td>
					</tr>
					<tr>
						<td class="white_bg item">购车证明</td>
						<td class="white_bg f_gray">
								<img src="../../images/credit_warning.png" width="32px"
									height="32px" alt="待完成" title="待完成" />
							    </td>
					</tr>
					<tr>
						<td class="item">结婚认证</td>
						<td class="f_gray">
								<img src="../../images/credit_warning.png" width="32px"
									height="32px" alt="待完成" title="待完成" />
							    </td>
					</tr>
					<tr>
						<td class="white_bg item">居住地证明</td>
						<td class="white_bg f_gray">
								<img src="../../images/credit_warning.png" width="32px"
									height="32px" alt="待完成" title="待完成" />
							    </td>
					</tr>
					<!--         
                     <tr>
                        <td class=" item">
                            其他认证
                        </td>
                        <td  class=" f_gray">
                                
                                    <img src="../../images/credit_warning.png" width="32px" height="32px" alt="待完成" title="待完成"/>
                                
                                
                                
                                
                                
                        </td>
                    </tr>
                     -->
					<tr>
						<td class="item">视频认证</td>
						<td class="f_gray">
								<img src="../../images/credit_warning.png" width="32px"
									height="32px" alt="待完成" title="待完成" />
							    </td>
					</tr>
					<!-- 
                     <tr>
                        <td class="white_bg item">
                            实地考察认证
                        </td>
                        <td class="white_bg f_gray">
                                
                                    <img src="../../images/credit_warning.png" width="32px" height="32px" alt="待完成" title="待完成"/>
                                
                                
                                
                                
                                
                        </td>
                    </tr>
                     -->

					<tr>
						<td class="white_bg item">学历认证（10分）</td>
						<td class="white_bg f_gray">
								<img src="../../images/credit_warning.png" width="32px"
									height="32px" alt="待完成" title="待完成" />
							    </td>
						<td class="white_bg f_gray"><span class="f_red">0</span> 分</td>
					</tr>

					<tr>
						<td class="item">手机实名认证（10分）</td>
						<td class="f_gray">
								<img src="../../images/credit_warning.png" width="32px"
									height="32px" alt="待完成" title="待完成" />
							    </td>
						<td class="f_gray"><span class="f_red">0</span> 分</td>
					</tr>
					<tr>
						<td class="white_bg item">微博认证（2分）</td>
						<td class="white_bg f_gray">
								<img src="../../images/credit_warning.png" width="32px"
									height="32px" alt="待完成" title="待完成" />
							    </td>
						<td class="white_bg f_gray"><span class="f_red">0</span> 分</td>
					</tr>
					<tr>
						<td rowspan="3" class="b white_bg">人人贷记录</td>
						<td class="item">
							还清笔数（+1分/笔，加分间隔28天，上限20分）</td>
						<td class="f_gray">
							0 笔
						</td>
						<td class="f_gray"><span class="f_red">0</span>
							分</td>
					</tr>
					<tr class="">
						<td class="white_bg item">逾期次数（-1分/次）</td>
						<td class="white_bg f_gray">0 次
						</td>
						<td class="white_bg"><span class="f_red">
								0 </span> 分</td>
					</tr>
					<tr class="">
						<td class="item">严重逾期次数（-30分/次）</td>
						<td class="f_gray">0 次</td>
						<td><span class="f_red"> 0
						</span> 分</td>
					</tr>
				</table>
			</div>
			<div class="h20"></div>
		</div>
		<div id="basic_credit_info_content" style="display: none">
			<div class="h20"></div>
			<div class="tips">
				完成必要信用认证，可提高您的信用等级和信用额度。<br>
				此外，您需根据以下要求完成必要信用认证，才能通过人人贷审核，获得借款。
			</div>
			<div class="h20"></div>
			<div style="padding: 10px">
				<table border="1" align="center"
					style="background-color: rgb(239, 245, 254); border: 1px solid rgb(204, 204, 204); border-spacing: 1px; width: 640px;">
					<tbody>
						<tr style="height: 30px; background: #F6F6F6;">
							<td width="45%">
								<div
									style="padding: 0 5px; font-weight: 600; padding-left: 20px">
									借款情况</div>
							</td>
							<td width="55%">
								<div
									style="padding: 0 5px; font-weight: 600; padding-left: 20px">
									需提交的基本审核</div>
							</td>
						</tr>
						<tr style="height: 30px; background: #FFF;">
							<td>
								<div style="padding: 0 5px;; padding-left: 20px">所有借款</div>
							</td>
							<td>
								<div style="padding: 0 5px;; padding-left: 20px">
									身份证认证、工作认证、收入认证、央行信用报告</div>
							</td>
						</tr>
						<!--                        <tr style="height: 30px;background: #FFF;">
                            <td>
                                <div style="padding: 0 5px;padding-left: 20px;padding-bottom: 3px;padding-top: 3px">
                                    单笔借款10,000以上<br>
                                    累计借款大于20,000<br>
                                    或者审核部门要求提供
                                </div>
                            </td>
                            <td>
                                <div style="padding: 0 5px;padding-left: 20px">
                                    身份证认证、工作认证、收入认证、央行信用报告
                                </div>
                            </td>
                        </tr> -->
					</tbody>
				</table>
			</div>
			<div class="h20"></div>
			<div style="padding: 10px">
				<table border="1" align="center"
					style="background-color: rgb(239, 245, 254); border: 1px solid rgb(204, 204, 204); border-spacing: 1px; width: 640px;">
					<tbody>
						<tr style="height: 30px; background: #F6F6F6;">
							<td width="60%">
								<div align="center" style="padding: 0 5px; font-weight: 600">
									项目</div>
							</td>
							<td width="20%">
								<div align="center" style="padding: 0 5px; font-weight: 600">
									状态</div>
							</td>
							<td width="20%" style="background: #F6F6F6;">
								<div align="center" style="padding: 0 5px; font-weight: 600">
									操作</div>
							</td>
						</tr>
						<tr style="height: 30px; background: #FFF;">
							<td>
								<div align="left" style="padding: 0 5px; padding-left: 20px">
									身份证认证</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
                                        待完成
                                    
									
									
									
									
								</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
									
									
										<a
											onclick="getCredit('credit_identificationScanning','IDCARD_AUTH')">进行认证</a>
									
								</div>
							</td>
						</tr>
						<tr style="height: 30px; background: #FFF;">
							<td>
								<div align="left" style="padding: 0 5px; padding-left: 20px">
									工作证明</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
                                        待完成
                                    
									
									
									
									
								</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
									
									
										<a onclick="getCredit('credit_contact','JOB_AUTH')">进行认证</a>
									
								</div>
							</td>
						</tr>
						<tr style="height: 30px; background: #FFF;">
							<td>
								<div align="left" style="padding: 0 5px; padding-left: 20px">
									收入认证</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
                                        待完成
                                    
									
									
									
									
								</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
									
									
										<a onclick="getCredit('credit_incomeDuty','INCOME_AUTH')">进行认证</a>
									
								</div>
							</td>
						</tr>
						<tr style="height: 30px; background: #FFF;">
							<td>
								<div align="left" style="padding: 0 5px; padding-left: 20px">
									央行信用报告认证</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
                                        待完成
                                    
									
									
									
									
								</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
									
									
										<a onclick="getCredit('credit_credit','BANK_AUTH')">进行认证</a>
									
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div id="advance_credit_info_content" style="display: none">
			<div class="h20"></div>
			<div class="tips">通过上传真实信用认证资料，可提高您的信用等级及信用额度。</div>
			<div class="h20"></div>
			<div style="padding: 10px">
				<table border="1" align="center"
					style="background-color: rgb(239, 245, 254); border: 1px solid rgb(204, 204, 204); border-spacing: 1px; width: 640px;">
					<tbody>
						<tr style="height: 30px; background: #F6F6F6;">
							<td width="60%">
								<div align="center" style="padding: 0 5px; font-weight: 600">
									项目</div>
							</td>
							<td width="20%">
								<div align="center" style="padding: 0 5px; font-weight: 600">
									状态</div>
							</td>
							<td width="20%" style="background: #F6F6F6;">
								<div align="center" style="padding: 0 5px; font-weight: 600">
									操作</div>
							</td>
						</tr>

						<tr style="height: 30px; background: #FFF;">
							<td>
								<div align="left" style="padding: 0 5px; padding-left: 20px">
									房产认证</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
                                        待完成
                                    
									
									
									
									
								</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
									
									
										<a onclick="getCredit('credit_house','ESTATE_AUTH')">进行认证</a>
									
								</div>
							</td>
						</tr>

						<tr style="height: 30px; background: #FFF;">
							<td>
								<div align="left" style="padding: 0 5px; padding-left: 20px">
									购车认证</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
                                        待完成
                                    
									
									
									
									
								</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
									
									
										<a onclick="getCredit('credit_car','CAR_AUTH')">进行认证</a>
									
								</div>
							</td>
						</tr>

						<tr style="height: 30px; background: #FFF;">
							<td>
								<div align="left" style="padding: 0 5px; padding-left: 20px">
									结婚证明</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
                                        待完成
                                    
									
									
									
									
								</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
									
									
										<a onclick="getCredit('credit_marriage','MARRIED_AUTH')">进行认证</a>
									
								</div>
							</td>
						</tr>

						<tr style="height: 30px; background: #FFF;">
							<td>
								<div align="left" style="padding: 0 5px; padding-left: 20px">
									技术职称认证</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
                                        待完成
                                    
									
									
									
									
								</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
									
									
										<a onclick="getCredit('credit_titles','TITLES-_AUTH')">进行认证</a>
									
								</div>
							</td>
						</tr>

						<tr style="height: 30px; background: #FFF;">
							<td>
								<div align="left" style="padding: 0 5px; padding-left: 20px">
									学历认证</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
                                        待完成
                                    
									
									
									
									
								</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
									
									
										<a onclick="getCredit('credit_graducation','EDUCATION_AUTH')">进行认证</a>
									
								</div>
							</td>
						</tr>

						<tr style="height: 30px; background: #FFF;">
							<td>
								<div align="left" style="padding: 0 5px; padding-left: 20px">
									居住地证明</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
                                        待完成
                                    
									
									
									
									
								</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
									
									
										<a onclick="getCredit('credit_residence','RESIDENCE_AUTH')">进行认证</a>
									
								</div>
							</td>
						</tr>

						<tr style="height: 30px; background: #FFF;">
							<td>
								<div align="left" style="padding: 0 5px; padding-left: 20px">
									实地认证</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
                                        待完成
                                    
									
									
									
									
								</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
									
									
										<a onclick="getCredit('credit_field','FIELD_AUTH')">进行认证</a>
									
								</div>
							</td>
						</tr>

						<tr style="height: 30px; background: #FFF;">
							<td>
								<div align="left" style="padding: 0 5px; padding-left: 20px">
									其他认证</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
                                        待完成
                                    
									
									
									
									
								</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
									
									
										<a onclick="getCredit('credit_other','OTHERMATERIALS_AUTH')">进行认证</a>
									
								</div>
							</td>
						</tr>

						<tr style="height: 30px; background: #FFF;">
							<td>
								<div align="left" style="padding: 0 5px; padding-left: 20px">
									视频认证</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
                                        待完成
                                    
									
									
									
									
								</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
									
									
										<a onclick="getCredit('credit_videoauth','VIDEO_AUTH')">进行认证</a>
									
								</div>
							</td>
						</tr>

						<tr style="height: 30px; background: #FFF;">
							<td>
								<div align="left" style="padding: 0 5px; padding-left: 20px">
									手机实名认证</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
                                        待完成
                                    
									
									
									
									
								</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
									
									
										<a onclick="getCredit('credit_mobileReceipt','PHONE_AUTH')">进行认证</a>
									
								</div>
							</td>
						</tr>

						<tr style="height: 30px; background: #FFF;">
							<td>
								<div align="left" style="padding: 0 5px; padding-left: 20px">
									微博认证</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
                                        待完成
                                    
									
									
									
									
								</div>
							</td>
							<td>
								<div align="center" style="padding: 0 5px;">
									
									
									
										<a onclick="getCredit('credit_weibo','WEIBO_AUTH')">进行认证</a>
									
								</div>
							</td>
						</tr>


					</tbody>
				</table>
			</div>
		</div>
		<div id="upload_credit_info_content" style="display: none"></div>
	</div>
	<div class="bt"></div>
</div>

<script type="text/javascript">
	$(function() {
		var li = $("#li").attr("value");
		if (li == null || li == "") {
			tabIt($("#credit_info")[0]);
		} else {
			tabIt($("#" + li + "_credit_info")[0]);
		}
		$("#li").val("");
	});

	
</script>


<!--借入管理 END-->
<!--借出管理 START-->








<!--借出管理 END-->
<!--信用管理 START-->


<!--信用管理 END-->
<!--资金管理 START-->


<!--资金管理 END-->

<!--理财计划管理 START-->



<!--理财计划管理 END-->

<!--个人设置 START-->








<!--个人设置 END-->
<script type="text/javascript">
$(function(){
	var type='user_info_credit';
	var li = '';
	if(type=="my_finance_detail"&&li!=null&&li!=""){
		$.ajax({
			url:"../my/myFinance_goToFinanceDetail.php?financeSubPointId="+li,
	        type:"POST",
	        dataType: "html",
	        error: function(){
	            $("#b_content").html($("#loadingFail").html());
	        },
	        success: function(data){
	           $(".right").html(data)
	        },
	        beforeSend: function(){
	            $("#b_content").html($("#loading").html());
	        }
		});
	} 
	if(type=="findCashPassword"){
		
		$.ajax({
			url:"/my/cashPwd_goToFindCashPassword.php",
	        type:"POST",
	        dataType: "html",
	        error: function(){
	            $("#b_content").html($("#loadingFail").html());
	        },
	        success: function(data){
	           $(".right").html(data);
	        },
	        beforeSend: function(){
	            $("#b_content").html($("#loading").html());
	        }
		});
	} 
	
});
</script>
