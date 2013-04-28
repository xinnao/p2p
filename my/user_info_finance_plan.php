
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

    
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<style>
.finance_name_td {
	width:105px;
}
.finance_other_td {
	width:90px;
}
.finance_detail_td{
	width:50px;
}
</style>

<div class='clearfix'>
	<ul>
		<li id="my_finance" onclick="tabIt(this)" class="right_tab_select">
			我的理财计划</li>
	</ul>
</div>
<div class="tab_interval_green"></div>
<div class="layout-box">
	<div class="cont">
		<div class="h20"></div>
		
		
		
		
			<div class="clearfix" style="width:360px;margin:0 auto;padding-top:16px">
			    <div class="l" style="padding-top:13px;margin-right:10px;">什么是人人贷理财计划?</div>
			    <a id="goToFinancePlanIntroduct" href="../financeplan/listPlan!listPlan.action" >
              	<img src="/theme/default/images/chakan.png" /></a> 
			</div>
			<div class="h20"></div>
			<table width="100%" align="center" class="funds graytable">
				<tr class="title">
					<th width="120"style="text-align:center;"><span>计划名称 </span></th>
					<th width="90" style="text-align:center;"><span>加入计划<br/>金额 </span></th>
					<th width="90" style="text-align:center;"><span>可用投标<br/>金额 </span></th>
					<th width="60" style="text-align:center;"><span>加权平均<br/>收益率 </span></th>
					<th width="90" style="text-align:center;"><span>已赚利息<br/>及罚息 </span></th>
					<th width="50" style="text-align:center;"><span>当前<br/>投标数</span></th>
					<th width="100" style="text-align:center;"><span>状态 </span></th>
					<th width="30" style="text-align:center;"><span>详情</span></th>
				</tr>
	            <tr style="height: 50px">
	                <td colspan="8">
	                    <div align="center">暂未加入任何理财计划</div>
	                </td>
	            </tr>
		     </table>
		
		<div class="h20"></div>
		
	</div>
	<div class="top">
    </div>
</div>
<script type="text/javascript">
function goToFinanceDetail(financeSubPointId){
    $.ajax({
    		url:"../my/myFinance_goToFinanceDetail.action?financeSubPointId="+financeSubPointId,
            type:"POST",
            dataType: "html",
            error: function(){
            },
            success: function(data){
            	if (hrefHack(data)){
                    return;
                }else{
                    $(".right").html(data)
                }
            },
            beforeSend: function(){
            }
    });
}
</script>




<!--理财计划管理 END-->

<!--个人设置 START-->








<!--个人设置 END-->
<script type="text/javascript">
$(function(){
	var type='user_info_finance_plan';
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
