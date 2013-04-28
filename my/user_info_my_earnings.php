
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
		<li id="quick_refund" onclick="tabIt(this)" class="right_tab_select">
			我的收益</li>
	</ul>
</div>
<div class="tab_interval_green"></div>
<div class="layout-box">
	<div class="cont">
		<div class="h20"></div>
		<table width="620" align="center" border="1px" cellspacing="1px"
			class="funds">
			<tr class="title">
				<td colspan="2"><span class="f_dgray b">回报统计 </span></td>
			</tr>
			<tr>
				<td width="50%">
					<p>已赚利息</p>
				</td>
				<td width="50%">
					<p>
						<span style="padding-right: 50px">￥0.00</span>
					</p>
				</td>
			</tr>
			<tr>
				<td width="50%">
					<p>已赚提前还款违约金</p>
				</td>
				<td width="50%">
					<p>
						<span style="padding-right: 50px">￥0.00</span>
					</p>
				</td>
			</tr>
			<tr>
				<td width="50%">
					<p>已赚逾期罚息</p>
				</td>
				<td width="50%">
					<p>
						<span style="padding-right: 50px">￥0.00</span>
					</p>
				</td>
			</tr>
			<tr>
				<td width="50%">
					<p>加权平均收益率</p>
				</td>
				<td width="50%">
					<p>
						<span style="padding-right: 50px">0.00%</span>
					</p>
				</td>
			</tr>
		</table>
		<div class="h20"></div>
		<table width="620" align="center" border="1px" cellspacing="1px"
			class="funds">
			<tr class="title">
				<td colspan="4"><span class="f_dgray b">个人理财统计 </span></td>
			</tr>
			<tr>
				<td width="25%">
					<p>总借出金额</p>
				</td>
				<td width="25%" align="right"><span style="padding-right: 50px">￥0.00</span>
				</td>
				<td width="25%">
					<p>总借出笔数*</p>
				</td>
				<td width="25%">0</td>
			</tr>
			<tr>
				<td width="25%">
					<p>已回收本息</p>
				</td>
				<td width="25%" align="right"><span style="padding-right: 50px">￥0.00</span>
				</td>
				<td width="25%">
					<p>已回收笔数</p>
				</td>
				<td width="25%">0</td>
			</tr>
			<tr>
				<td width="25%">
					<p>待回收本息</p>
				</td>
				<td width="25%" align="right"><span style="padding-right: 50px">
						 
                            ￥0.00
                        
				</span></td>
				<td width="25%">
					<p>待回收笔数</p>
				</td>
				<td width="25%">0</td>
			</tr>
		</table>
		<div style="padding-left:60px; padding-top:3px; fontsize:11px;color:#666;">* 总借出笔数 = 已回收笔数(含坏账已垫付) + 待回收笔数 + 历史遗留无垫付坏账笔数</div>
		<div class="h20"></div>
		<table width="620" align="center" border="1px" cellspacing="1px"
			class="funds">
			<tr class="title">
				<td colspan="4"><span class="f_dgray b">助农贷统计 </span></td>
			</tr>
			<tr>
				<td width="25%">
					<p>助农金额</p>
				</td>
				<td width="25%" align="right"><span style="padding-right: 50px">￥0.00</span>
				</td>
				<td width="25%">
					<p>助农笔数</p>
				</td>
				<td width="25%">0</td>
			</tr>
			<tr>
				<td width="25%">
					<p>已回收本息</p>
				</td>
				<td width="25%" align="right"><span style="padding-right: 50px">￥0.00</span>
				</td>
				<td width="25%">
					<p>已回收笔数</p>
				</td>
				<td width="25%">0</td>
			</tr>
			<tr>
				<td width="25%">
					<p>待回收本息</p>
				</td>
				<td width="25%" align="right"><span style="padding-right: 50px">
						 
                            ￥0.00
						
				</span></td>
				<td width="25%">
					<p>待回收笔数</p>
				</td>
				<td width="25%">
					0</td>
			</tr>
		</table>
		<div class="h20"></div>
	</div>
	<div class="top"></div>
</div>



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
	var type='user_info_my_earnings';
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
