
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
        <li id="fundsLog_loan" onclick="getAccount('fundsLog_loan')" class="right_tab_select">
            资金记录
        </li>
        <li id="checkin_loan" onclick="getAccount('checkin_loan')" class="right_tab_unselect">
     充值
        </li>
        <li id="withdraw_loan" onclick="getAccount('withdraw_loan')" class="right_tab_unselect">
            提现
        </li>
        <li id="bank_card" onclick="getAccount('bank_card');" class="right_tab_unselect">
            银行卡管理
        </li>
    </ul>
</div>
<div class="tab_interval_green">
</div>
<input type="hidden" name="type" value="" id="type"/>
<div class="layout-box">
    <div class="cont2" id="loan_account">

    </div>
    <div class="bt">
    </div>
</div>
<script type="text/javascript">
    $(function(){
        var type = $("#type").val();
        if(type == null || type == ""){
            type="fundsLog_loan";
        }
        clearTab(type);
        $("#" + type).removeClass();
        $("#" + type).addClass("right_tab_select");
        $("#" + type).show();
        $.ajax({
            url: "../my/getAccountPage.action?type="+type,
            type: "POST",
            dataType: 'html',
            timeout: 100000,
            error: function(){
                $("#loan_account").html($("#loadingFail").html());
            },
            success: function(response){
                if(hrefHack(response)) return;
                $("#loan_account").html(response);
                if("fundsLog_loan" == type){
                    getAllTypeFoundLogs(1);
                }
            },
            beforeSend: function(){
                $("#loan_account").html($("#loading").html());
            }
        });
    });
    function getAllTypeFoundLogs(p){
        $.ajax({
            url:"../my/queryPoints.action?pageIndex="+p+"&type=ALL&time=ONE_MONTH",
            type:"POST",
            dataType: "html",
            error: function(){
                $("#point_list").html($("#loadingFail").html());
            },
            success: function(data){
                $("#point_list").html(data);
            },
            beforeSend: function(){
                $("#point_list").html($("#loading").html());
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
	var type='user_info_account';
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
