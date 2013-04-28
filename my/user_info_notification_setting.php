
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
<script type="text/javascript" src="../theme/default/js/jdpicker/jquery.jdpicker.js">
</script>
<link rel="stylesheet" href="../theme/default/js/jdpicker/jdpicker.css" type="text/css" />
<div class='clearfix'>
    <ul>
        <li id="bad_loan" onclick="tabIt(this)" class="right_tab_select">
            通知设置
        </li>
    </ul>
</div>
<div class="tab_interval_green">
</div>
<form id="settingForm" name="settingForm" action="../my/notificationSetting.action" method="post">
    
<font face="Arial, sans-serif">
    <input type="hidden" value="bdc75d46844e5fbcde34d22e28a5" name="security_session">
    <input type="hidden" value="1367076474457" name="timestamp">
</font>

    <div class="layout-box">
        <div class="cont homeBg_revert">
            <div class="h20">
            </div>
            <div class="f_dgray f_14 b">
                我是借入者
            </div>
            <div class="h10">
            </div>
            <div>
                <table width="100%" border="1px" cellspacing="1px" class="funds" style="margin:10px auto">
                    <tr class="title f_dgray b">
                        <td width="34%">借款操作
                        </td>
                        <td width="34%">
                            电子邮件
                        </td>
                        <td width="33%">
                            站内信
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:left; padding:0 10px" class="b f_dgray">
                            有人对我的借款列表提问
                        </td>
                        
                        
                        
                            
                                
                                    <td>
                                        <input type="checkbox" name="mail_asked" value="true" checked="checked" id="settingForm_mail_asked"/><input type="hidden" id="__checkbox_settingForm_mail_asked" name="__checkbox_mail_asked" value="true" />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="innerMail_asked" value="true" id="settingForm_innerMail_asked"/><input type="hidden" id="__checkbox_settingForm_innerMail_asked" name="__checkbox_innerMail_asked" value="true" />
                                    </td>
                                
                                
                            
                        
                    </tr>
                    <tr>
                        <td style="text-align:left; padding:0 10px" class="b f_dgray">
                            有人向我的借款列表投标
                        </td>
                        
                            <td>
                                <input type="checkbox" name="mail_bid" value="true" id="settingForm_mail_bid"/><input type="hidden" id="__checkbox_settingForm_mail_bid" name="__checkbox_mail_bid" value="true" />
                            </td>
                            <td>
                                <input type="checkbox" name="innerMail_bid" value="true" id="settingForm_innerMail_bid"/><input type="hidden" id="__checkbox_settingForm_innerMail_bid" name="__checkbox_innerMail_bid" value="true" />
                            </td>
                        
                        
                        
                    </tr>
                    <tr>
                        <td style="text-align:left; padding:0 10px" class="b f_dgray">
                            我的借款列表流标
                        </td>
                       
                        
                        
                            
                                
                                    <td>
                                        <input type="checkbox" name="mail_myFail" value="true" checked="checked" id="settingForm_mail_myFail"/><input type="hidden" id="__checkbox_settingForm_mail_myFail" name="__checkbox_mail_myFail" value="true" />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="innerMail_myFail" value="true" id="settingForm_innerMail_myFail"/><input type="hidden" id="__checkbox_settingForm_innerMail_myFail" name="__checkbox_innerMail_myFail" value="true" />
                                    </td>
                                
                                
                            
                        
                    </tr>
                    <tr>
                        <td style="text-align:left; padding:0 10px" class="b f_dgray">
                            我的借款列表完成度超过50%
                        </td>
                        
                        
                        
                            
                                
                                    <td>
                                        <input type="checkbox" name="mail_half" value="true" checked="checked" id="settingForm_mail_half"/><input type="hidden" id="__checkbox_settingForm_mail_half" name="__checkbox_mail_half" value="true" />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="innerMail_half" value="true" id="settingForm_innerMail_half"/><input type="hidden" id="__checkbox_settingForm_innerMail_half" name="__checkbox_innerMail_half" value="true" />
                                    </td>
                                
                                
                            
                        
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="layout-box">
        <div class="cont homeBg_revert">
            <div class="h20">
            </div>
            <div class="f_dgray f_14 b">
                我是借出者
            </div>
            <div class="h10">
            </div>
            <div>
                <table width="100%" align="center" border="1px" cellspacing="1px" class="funds" style="margin:10px auto">
                    <tr class="title f_dgray b">
                        <td width="34%">
                        投标操作
                        </td>
                        <td width="34%">
                            电子邮件
                        </td>
                        <td width="33%">
                            站内信
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:left; padding:0 10px" class="b f_dgray">
                            我的投标成功
                        </td>
                        
                        
                        
                            
                                
                                    <td>
                                        <input type="checkbox" name="mail_bidSuccess" value="true" checked="checked" id="settingForm_mail_bidSuccess"/><input type="hidden" id="__checkbox_settingForm_mail_bidSuccess" name="__checkbox_mail_bidSuccess" value="true" />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="innerMail_bidSuccess" value="true" id="settingForm_innerMail_bidSuccess"/><input type="hidden" id="__checkbox_settingForm_innerMail_bidSuccess" name="__checkbox_innerMail_bidSuccess" value="true" />
                                    </td>
                                
                                
                            
                        
                    </tr>
                    <tr>
                        <td style="text-align:left; padding:0 10px" class="b f_dgray">
                            我的投标流标
                        </td>
                        
                        
                        
                            
                                
                                
                                    <td>
                                        <input type="checkbox" name="mail_fail" value="true" id="settingForm_mail_fail"/><input type="hidden" id="__checkbox_settingForm_mail_fail" name="__checkbox_mail_fail" value="true" />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="innerMail_fail" value="true" checked="checked" id="settingForm_innerMail_fail"/><input type="hidden" id="__checkbox_settingForm_innerMail_fail" name="__checkbox_innerMail_fail" value="true" />
                                    </td>
                                
                            
                        
                    </tr>
                    <tr>
                        <td style="text-align:left; padding:0 10px" class="b f_dgray">
                            我收到一笔还款
                        </td>
                        
                        
                        
                            
                                
                                    <td>
                                        <input type="checkbox" name="mail_bidRepaid" value="true" checked="checked" id="settingForm_mail_bidRepaid"/><input type="hidden" id="__checkbox_settingForm_mail_bidRepaid" name="__checkbox_mail_bidRepaid" value="true" />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="innerMail_bidRepaid" value="true" id="settingForm_innerMail_bidRepaid"/><input type="hidden" id="__checkbox_settingForm_innerMail_bidRepaid" name="__checkbox_innerMail_bidRepaid" value="true" />
                                    </td>
                                
                                
                            
                        
                    </tr>
                    <tr>
                        <td style="text-align:left; padding:0 10px" class="b f_dgray">
                            借入者回答了我对借款列表的提问
                        </td>
                        
                        
                        
                            
                                
                                    <td>
                                        <input type="checkbox" name="mail_answer" value="true" checked="checked" id="settingForm_mail_answer"/><input type="hidden" id="__checkbox_settingForm_mail_answer" name="__checkbox_mail_answer" value="true" />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="innerMail_answer" value="true" id="settingForm_innerMail_answer"/><input type="hidden" id="__checkbox_settingForm_innerMail_answer" name="__checkbox_innerMail_answer" value="true" />
                                    </td>
                                
                                
                            
                        
                    </tr>
                </table>
            </div>
           <!--  <div class="h20">
            </div>
            <div class="clearfix center">
                <button class="saveSettingBnt" type="submit">保存设置</button>
            </div>
            <div class="h20">
            </div> -->
        </div>
       
        
        
        <!-- 2012-01-28 add -->
        <div class="layout-box">
        <div class="cont homeBg_revert">
            <div class="h20"></div>
            <div class="f_dgray f_14 b">  理财计划</div>
            <div class="h10">
            </div>
            <div>
                <table width="100%" align="center" border="1px" cellspacing="1px" class="funds" style="margin:10px auto">
                    <tr class="title f_dgray b">
                        <td width="34%">理财计划操作</td>
                        <td width="22%">电子邮件 </td>
                        <td width="22%">站内信</td>
                        <td width="22%">短信</td>
                    </tr>
                    <tr>
                        <td style="text-align:left; padding:0 10px" class="b f_dgray">成功加入/追加理财计划 </td>
                       
                           	
                           	<td><input type="checkbox" name="addFinancePlanList[0]" value="true" id="settingForm_addFinancePlanList_0_"/><input type="hidden" id="__checkbox_settingForm_addFinancePlanList_0_" name="__checkbox_addFinancePlanList[0]" value="true" /></td>
                           
                           	
                       		<td><input type="checkbox" name="addFinancePlanList[2]" value="true" id="settingForm_addFinancePlanList_2_"/><input type="hidden" id="__checkbox_settingForm_addFinancePlanList_2_" name="__checkbox_addFinancePlanList[2]" value="true" /></td>
                       		
                       		
                           		 <td><input type="checkbox" name="addFinancePlanList[1]" value="true" checked="checked" id="settingForm_addFinancePlanList_1_"/><input type="hidden" id="__checkbox_settingForm_addFinancePlanList_1_" name="__checkbox_addFinancePlanList[1]" value="true" /></td> 
                           	
                           	
                        
                    </tr>
                    
                    <tr>
                        <td style="text-align:left; padding:0 10px" class="b f_dgray">  利息成功提现</td>
                            
	                           	
	                           	<td><input type="checkbox" name="recoverInterestList[0]" value="true" id="settingForm_recoverInterestList_0_"/><input type="hidden" id="__checkbox_settingForm_recoverInterestList_0_" name="__checkbox_recoverInterestList[0]" value="true" /></td>	
	                           	
	                           	
	                       		<td><input type="checkbox" name="recoverInterestList[2]" value="true" id="settingForm_recoverInterestList_2_"/><input type="hidden" id="__checkbox_settingForm_recoverInterestList_2_" name="__checkbox_recoverInterestList[2]" value="true" /></td>
	                       		
	                       		
	                           		 <td><input type="checkbox" name="recoverInterestList[1]" value="true" checked="checked" id="settingForm_recoverInterestList_1_"/><input type="hidden" id="__checkbox_settingForm_recoverInterestList_1_" name="__checkbox_recoverInterestList[1]" value="true" /></td> 
	                           	
	                           	
                        
                    </tr>
                    <tr style="display:none"">
                        <td style="text-align:left; padding:0 10px; class="b f_dgray"> 申请/成功退出理财计划</td>
                        
                         
	                           	
	                           	<td><input type="checkbox" name="exitFinancePlanList[0]" value="true" id="settingForm_exitFinancePlanList_0_"/><input type="hidden" id="__checkbox_settingForm_exitFinancePlanList_0_" name="__checkbox_exitFinancePlanList[0]" value="true" /></td>
	                          
	                           	
	                       		<td><input type="checkbox" name="exitFinancePlanList[2]" value="true" id="settingForm_exitFinancePlanList_2_"/><input type="hidden" id="__checkbox_settingForm_exitFinancePlanList_2_" name="__checkbox_exitFinancePlanList[2]" value="true" /></td>
	                       		
	                       		
	                           		 <td><input type="checkbox" name="exitFinancePlanList[1]" value="true" checked="checked" id="settingForm_exitFinancePlanList_1_"/><input type="hidden" id="__checkbox_settingForm_exitFinancePlanList_1_" name="__checkbox_exitFinancePlanList[1]" value="true" /></td> 
	                           	
	                           	
                        
                    </tr>
                </table>
            </div>
          
            <div class="h20">
            </div>
            <div class="clearfix center">
                <button class="saveSettingBnt" type="submit">保存设置</button>
            </div>
            <div class="h20">
            </div>
        </div>
        <div class="top">
        </div>
    </div>
</form>









<!--个人设置 END-->
<script type="text/javascript">
$(function(){
	var type='user_info_notification_setting';
	var li = 'undefined';
	if(type=="my_finance_detail"&&li!=null&&li!=""){
		$.ajax({
			url:"../my/myFinance_goToFinanceDetail.action?financeSubPointId="+li,
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
			url:"/my/cashPwd_goToFindCashPassword.action",
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
