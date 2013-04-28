
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
<div class='clearfix' style="position:relative">
 <div class="swicthRCon">
          	 <div id="swicthRCon0" style="padding-right:10px;">
             	 <p><a href="/my/userInfoPage.php?type=user_info_notification_setting">设置通知提醒</a> | <a onclick="document.getElementById('sendDigSX').style.display='block'">意见反馈</a></p>
             </div>
             <div id="swicthRCon1" style="display:none">
             	 <div class="sxSearchBox clearfix">
                 	<div id="sxSearch"><input type="text" value="" id="searchDetailContent"/><button id="sxSearchBt" onclick="getInboxInnerMails(1);"></button></div>
                 	 	
           				<a id="sendNewSx"></a>
       					
                 </div>
             </div>
          </div>
    <ul>
        <li id="system_info" onclick="getMails(this)" class="right_tab_select">
            通知<!-- （<span id="unreadSystem">1</span>） -->
        </li>
        <li id="user_inbox_info" onclick="getMails(this)" class="right_tab_unselect">
            私信<!-- （<span id="unreadInbox">0</span>） -->
        </li>
        
    </ul>
</div>
<div class="tab_interval_green">
</div>
<div class="layout-box" style="position:relative">
    <div class="cont" id="inbox_content" style="min-height:521px;">

    </div>
    <div class="top">
    </div>
</div>
<script type="text/javascript">
    $(function(){
    	var innerMailType = "";
    	if(innerMailType == null || innerMailType == ''){
    		toDefaultPage();
    	}else if(innerMailType == 'INNERMAIL'){
    		$("#user_inbox_info").click();
    		var mailSendId="";
    		if(mailSendId != ''){
    			setTimeout(function(){
        			getSenderMail(mailSendId,1);
        		},1000);
    		}else{
    			toDefaultPage();
    		}
    	}else{
    		var openType = "";
    		if(openType != null && openType != ''){
    			toDefaultPage();
    			setTimeout(function(){
    				getSystemMailByType(openType,1);
        		},1000);
    			
    		}else{
    			toDefaultPage();
    		}
    	}
    	
    });
    
    function toDefaultPage(){
    	$.ajax({
            url: "../my/getInnerMails.php?type=system_info&sysPageIndex=1",
            dataType: 'html',
            timeout: 100000,
            error: function(){
                $("#inbox_content").html($("#loadingFail").html());
            },
            success: function(response){
                if (hrefHack(response)) return;
                $("#inbox_content").html(response);
            },
            beforeSend: function(){
                $("#inbox_content").html($("#loading").html());
            }
        });
    }
    
</script>

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








<!--个人设置 END-->
<script type="text/javascript">
$(function(){
	var type='user_info_inbox';
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
