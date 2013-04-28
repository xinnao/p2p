
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
 


<style type="text/css">
.grid-2-2-8 .right ul li, .grid-2-8-2 .left ul li, .grid-2-7-3 .left ul li {
    cursor: default;
    float: left;
    padding: 0 1px;
}

</style>
<script type="text/javascript" src="../theme/default/js/mySecuritySetting.js?v=20130426"></script>
	
<div class="right" id="right_content">
<!--我的主页 START-->
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
<div class="clearfix">
    <div class="layout-box">
        <div class="cont">
		
        <div id="safteysetting">
        	<ul>
        		
            	<li>
                	<table>
                    	<tr>
                        	<td width="150"><img src="../images/safety_realname.png" /><span class="ttxt">实名认证</span></td>
                            <td width="360"><p><span class="red">13****************</span></p></td><td> <span >于**</span></td>
                        </tr>
                    </table>
                </li>
                
                <li>
                	<table>
                    	<tr>
                        	<td width="150"><img src="../images/safety_loginpsw.png" /><span class="ttxt">登录密码</span></td>
                            <td width="360"><p>
					           	已设置  
					           	             
					            </p></td>
					            <td><a onclick="goToPage('resetPassword');">修改</a></td>
                        </tr>
                    </table>
                </li>
                
                <li>
                	<table>
                    	<tr>
                        	<td width="150"><img src="../images/safety_loginpsw.png" /><span class="ttxt">绑定邮箱</span></td>
                            <td width="360"><p class="red">6********@qq.com</p></td><td><a href="emailCodeInfo!index.action" >修改</a></td>
                        </tr>
                    </table>
                </li>
                
                
                
                
                <li>
                	<table>
                    	<tr>
                        	<td width="150"><img src="../images/safety_tel.png" /><span class="ttxt">绑定手机</span></td>
                        	
                            	<td width="360"><p class="red">135****6206</p></td><td><a onclick="goToPage('modifyMobile');">修改</a></td>
                            
                            
                        </tr>
                    </table>
                </li>
                
                
                <li style="border-bottom:none">
                	<table>
                    	<tr>
                        	<td width="150"><img src="../images/safety_txpsw.png" /><span class="ttxt">提现密码</span></td>
                            <td width="360"><p id="cashPasswordStatus">
                            已设置  
                            </p>
                            </td>
                            <td id="cashPasswordOper">
                      
                            <a onclick="goToPage('modifyCashPassword');">修改</a> | <a onclick="goToPage('findCashPassword');">找回</a>
                            
                            
                            </td>
                        </tr>
                    </table>
                </li>
				
				
            </ul>
        </div>          
		</div>
        <div class="bt"></div>
	</div>
</div>

</div>

</div>
<script type="text/javascript">
<!--

	function toBe(){
		$('.nyroModal').nyroModal({
		      width:620,
		      height:500,
			  hideContent:function(elts, settings, callback){
				  elts.contentWrapper.animate({height: '50px',width: '50px',marginTop: (-(25 + settings.borderH) / 2 + settings.marginScrollTop) + 'px',marginLeft: (-(25 + settings.borderW) / 2 + settings.marginScrollLeft) + 'px'}, {duration: 350,complete: function() {
		                elts.contentWrapper.hide();
		                callback();
		                location = '/my/userInfoPage.action?type=user_info_security';
		          }});
				 
			  }
		    });
	}
	
	$(function(){
		toBe();
	});
	
//-->
</script>








<!--个人设置 END-->
<script type="text/javascript">
$(function(){
	var type='user_info_security';
	var li = '';
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
