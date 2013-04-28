
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
        <li id="quick_refund" onclick="tabItDisHide(this,document.getElementById('refund_list'))" class="right_tab_select">
            还款列表
        </li>
        <li id="closedLoan" onclick="getClosedLoan(id,document.getElementById('refund_list'))" class="right_tab_unselect">
            已还清借款
        </li>
        <li id="refund_list" onclick="tabIt(this)" style="display: none;">
            还款详情
        </li>
        <li id="inrepayLoan" onclick="tabIt(this)" style="display: none;">
            提前还清借款
        </li>
    </ul>
</div>
<div class="tab_interval_green">
</div>
<div class="layout-box" id="refund_content">
</div>
<script type="text/javascript">
    $(function(){
        $.ajax({
            url: "../my/getRefundLoanList.action",
            dataType: 'html',
            timeout: 10000,
            error: function(){
                $("#refund_content").html($("#loadingFail").html());
            },
            success: function(data){
                if(hrefHack(data)) return;
                $("#refund_content").html(data);
            },
            beforeSend: function(){
                $("#refund_content").html($("#loading").html());
            }
        });
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
	var type='user_info_refund';
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
