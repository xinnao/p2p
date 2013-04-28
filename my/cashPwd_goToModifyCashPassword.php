
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

 <div class="clearfix">
    <ul>
        <li style="cursor:default" class="right_tab_select">
            安全设置
        </li>
    </ul>
</div>
<div class="tab_interval_green">
</div>
<div id="safetybox">
<div id="safety_modemail_formail" style="border:1px solid #DFE6EA;">
	 <div class="linner_title">修改提现密码</div>
	 <p style="text-align:center; color:#5680bc; font-weight:bold;margin:50px 0;">为了您的账户安全，请定期更换提现密码，并确保提现密码设置与登录密码不同。</p>
	 <div class="safetyform" style=" width:400px; margin:30px auto;">
	  	<form id="modifyCashPasswordForm01" method="post">
		     <div style="height:50px;">
			     <label>原提现密码<span style="margin-left:11px;">：</span></label>
			     <input style="width:180px;" name="cashPassword" type="password" id="cashPassword" onblur="checkCashPwd(this)" placeholder="请输入原提现密码"/>
		     	 <div><label for="cashPassword" id="errorForcashPassword" class="error" style="padding-left:88px" ></label></div>
		     </div>
		     <div style="height:50px;">
			     <label>新提现密码<span style="margin-left:11px;">：</span></label>
			     <input style="width:180px;" name="newCashPwd" id="newCashPwd" type="password" onblur="checkNewCashPwd(this)" placeholder="6-12位字母、数字和符号(不包括空格)"/>
				 <div><label class="error" for="newCashPwd" style="padding-left:88px" id="errorForNewPwd"></label></div>	     
		     </div>
		      <div style="height:50px;">
			     <label>确认提现密码：</label>
			     <input style="width:180px;" name="newCashPwd2" id="newCashPwd2" type="password" onblur="checkNewCashPwd2(this)"/>
			 	 <div><label class="error" for="newCashPwd2" style="padding-left:88px" id="errorForNewPwd2"></label></div>
		     </div>
	     <div style="text-align:center"><input style="height:27px; line-height:27px;" type="submit" value="提 交"  class="greenbt2"/></div>
	   </form>
    </div>   
	
<p style="text-align:center; margin-top:100px;">如果您在操作过程中出现问题，请点击页面右侧在线客服，或拨打人人贷客服电话：400-027-8080</p>
</div>
</div>
<script type="text/javascript">
$(function() {
	

	var optionsmodCashPwd01 = {
			url : "/my/cashPwd_resetCashPwd.action?checkOld=true",
	        //async:false,
			cache:false,
			type:"POST",
	        error: function(data){			        	
	        },
			beforeSubmit : function() {
				var cashPassword=document.getElementById("cashPassword");
				var newCashPwd=document.getElementById("newCashPwd");
				var newCashPwd2=document.getElementById("newCashPwd2");
				if(!checkCashPwd(cashPassword) || !checkNewCashPwd(newCashPwd) || !checkNewCashPwd2(newCashPwd2)){
					return false;
				}
			},
			success : function(data) {
				if (data.result){
					alert(data.result);
					$("#cashPassword").val("");
					$("#newCashPwd").val("");
					$("#newCashPwd2").val("");
	                return;
	            }else{
					$("#cashPassword").val("");
					$("#newCashPwd").val("");
					$("#newCashPwd2").val("");
					/* confirm("提现密码修改成功,是否跳转到安全设置?",null,function(){
						location.href="/my/userInfoPage.action?type=user_info_security";
					}) */
					if(confirm("提现密码修改成功,是否跳转到安全设置?")){
						location.href="/my/userInfoPage.action?type=user_info_security";
					}
	            	
	            }
			}
		}
		$('#modifyCashPasswordForm01').ajaxForm(optionsmodCashPwd01);
});

</script>
