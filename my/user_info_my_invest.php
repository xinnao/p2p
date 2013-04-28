
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
        <li id="bid_loan" onclick="getMyInvest(this)" class="right_tab_select">
            投标中借款
        </li>
        <li id="recovery_loan" onclick="getMyInvest(this)" class="right_tab_unselect">
            回收中借款
        </li>
        <li id="recovered_loan" onclick="getMyInvest(this)" class="right_tab_unselect">
            已回收借款
        </li>
        <li id="bad_loan" onclick="getMyInvest(this)" class="right_tab_unselect">
            我的坏账
        </li>
        <!--<li id="fail_loan" onclick="getMyInvest(this)" class="right_tab_unselect">
                    已流标借款
        </li>-->
        <li id="farmer_loan" onclick="getMyInvest(this)" class="right_tab_unselect">
            爱心助农
        </li>
        <li id="wait_for_recover_loan" onclick="getMyInvest(this)" class="right_tab_unselect">
            回帐查询
        </li>
    </ul>
</div>
<div class="tab_interval_green">
</div>
<div class="layout-box">
    <div class="cont2" id="myInvest">
    </div>
    <div class="bt">
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $.ajax({
            url: "../my/getMyInvest.action?type=bid_loan&bidPageIndex=1",
            type: "POST",
            dataType: 'html',
            timeout: 100000,
            error: function(){
                $("#myInvest").html($("#loadingFail").html());
            },
            success: function(response){
                if(hrefHack(response)) return;
                $("#myInvest").html(response)
            },
            beforeSend: function(){
                $("#myInvest").html($("#loading").html());
            }
        });
    });
</script>





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
	var type='user_info_my_invest';
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
