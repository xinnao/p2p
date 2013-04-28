
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
        <li class="right_tab_select" style="cursor:default">
            我关注的标
        </li>
    </ul>
</div>
<div class="tab_interval_green">
</div>
<div class="silverBg">
    <div class="f_dgray b center" style="height:30px;line-height:30px;padding:0 15px">
        <div class="l" style="width:80px">
            图片
        </div>
        <div class="l" style="width:180px">
            标题/借款人/所在地
        </div>
        <div class="l" style="width:80px">
            借款用途
        </div>
        <div class="l" style="width:110px">
            金额/期限/利率
        </div>
        <div class="l" style="width:100px">
            信用等级
        </div>
        <div class="l" style="width:120px">
            进度/剩余时间
        </div>
        <div class="l" style="width:50px">
            操作
        </div>
    </div>
</div>
<div class="layout-box">
    <div class="top">
        <b class="cor-l"></b>
        <b class="cor-r"></b>
    </div>
    <div class="cont" id="my_favoriteLoan_list">
    </div>
    <div class="bt">
    </div>
</div>
<script type="text/javascript">
    getFavoriteLoan(1);
    function getFavoriteLoan(p){    //关注标
        $.ajax({
            url:"../my/getFavoriteLoan.action?pageIndex="+p,
            type:"POST",
            dataType: "html",
            error: function(){
                $("#my_favoriteLoan_list").html($("#loadingFail").html());
            },
            success: function(data){
                if (hrefHack(data)) return;
                $("#my_favoriteLoan_list").html(data);
            },
            beforeSend: function(){
                $("#my_favoriteLoan_list").html($("#loading").html());
            }
        });
    }
    $(function(){
        $.fn.jpagebar({ //content holder(Object || css Selector)
            renderTo: $("#pagelist"),
            //总数
            totalNum: 0,
            //总页码
            totalpage: 0,
            //当前页码
            currentPage: 1,
            //分页条样式
            pagebarCssName: 'pagelist',
            //首页、上一页、下一页、尾页样式
            pageNameCssName: 'disabled',
            //当前选中页码样式
            currentPageNumberCssName: 'current',
            //点击页码action
            onClickPage: function(pageIndex){
                $.fn.setCurrentPage(this, pageIndex);
                getFavoriteLoan(pageIndex);
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
	var type='user_info_my_favorite';
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
